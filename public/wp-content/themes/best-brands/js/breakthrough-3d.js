/////////////////////////////
// Call to render 3D //
///////////////////////////

function breakThrough3D(imageSource,trendSource,fallbackImage) {

    /////////////////////////////
    // Camera Start Animation //
    ///////////////////////////
    var camPosStartX = 0,
        camPosStartY = -3000,
        camPosStartZ = 0;

    var camPosEndX = -300,
        camPosEndY = -300,
        camPosEndZ = 400;


    ///////////////////////
    // GLobal Variables //
    /////////////////////
    var container, scene, camera, renderer, controls;
    var clock, prevTime;

    // custom global variables
    var mesh = null;
    var mixer, clip;
    var startAni = false;
    var whiteLights = [];
    var localPlane;


    /////////////////////////
    // Geometry Variables //
    ///////////////////////
    var maxEl = 20,
        multiplier = 4;

    var mouseX = camPosEndX, mouseY = camPosEndY, mouseZ = 0;
    var windowWidth, windowHalfX;
    var windowHeight, windowHalfY;

    // var brand = 'breakthrough';
    // var imageSource = '../title/img/2017.png';
    // var trendSource = '../title/data/breakthrough.csv';

    var img = new Image();
    img.src = imageSource;


    //////////////////////////
    // Detect for fallback //
    ////////////////////////
    var version = detectIE();

    if (version === false && Detector.webgl === true || version >= 10 && Detector.webgl === true) {
        img.onload = function () {
            // Check for Performance.now();
            if ("performance" in window == true) {
                clock = new THREE.Clock();
                prevTime = clock.getElapsedTime();
            } else {
                prevTime = Date.now();
            }
            init();
            animate();
        };

    } else  {
        container = document.getElementById( 'ThreeJS' );
        container.setAttribute("style", "width: 100%;");
        container.innerHTML ='<img src="' + fallbackImage + '">' ;
    }



    ////////////////
    // FUNCTIONS //
    //////////////
    function init() {
        // SCENE
        scene = new THREE.Scene();
        scene.background = new THREE.Color( 0xFFFFFF );

        // CAMERA
        var SCREEN_WIDTH = window.innerWidth, SCREEN_HEIGHT = window.innerHeight;
        var VIEW_ANGLE = 45, ASPECT = SCREEN_WIDTH / SCREEN_HEIGHT, NEAR = 0.1, FAR = 20000;
        camera = new THREE.PerspectiveCamera( VIEW_ANGLE, ASPECT, NEAR, FAR);
        scene.add(camera);
        camera.position.set(camPosStartX,camPosStartY,camPosStartZ);
        camera.lookAt(scene.position);

        // Set render as webGL
        renderer = new THREE.WebGLRenderer({antialias:true});
        renderer.setSize(SCREEN_WIDTH, SCREEN_HEIGHT);

        // Append Canvas Element
        container = document.getElementById( 'ThreeJS' );
        container.appendChild( renderer.domElement );

        // Clipping setup
        localPlane = new THREE.Plane( new THREE.Vector3( 0, 0, 1 ), -1 ),
            Empty = Object.freeze( [] );
        renderer.clippingPlanes = Empty;
        renderer.localClippingEnabled = true;



        ///////////////
        // Lighting //
        /////////////
        var divisions = 8;
        halfDiv = divisions/2;
        var planeWidth = img.width*4;
        var planeHeight = img.height*4;
        var halfPlane = planeWidth/2;
        planeWidth = planeWidth / halfDiv;
        //var sphere = new THREE.SphereGeometry(5, 16, 8 );


        // Set up white backlights
        for(i=0; i < divisions; i++) {
            whiteLights[i] = new THREE.PointLight(0xFFFFFF);
            whiteLights[i].intensity = 1;
            whiteLights[i].distance = 0;
            whiteLights[i].decay = 1;
            whiteLights[i].z = 20;
            //whiteLights[i].add( new THREE.Mesh( sphere, new THREE.MeshBasicMaterial({color: 0x000000}) ) );
            whiteLights[i].castShadow = false;
            if(i < halfDiv) {
                whiteLights[i].position.set( i*planeWidth-(halfPlane)+(planeWidth/2), -(planeHeight/4), 10 );
            } else {
                whiteLights[i].position.set( i*planeWidth-(halfPlane*3)+(planeWidth/2), (planeHeight/4), 10);
            }
            scene.add(whiteLights[i]);
        }


        // Add Red Spot light
        var spotLight = new THREE.SpotLight( 0xFF0000 );
        spotLight.position.set( 0, 0, 500 );
        spotLight.castShadow = false;
        spotLight.intensity = .95;
        spotLight.angle = .6;
        spotLight.penumbra = 1;
        scene.add( spotLight );


        /////////////////////
        // Plane Geometry //
        ///////////////////
        var trendData;

        // Note: r82 → r83 : Renamed XHRLoader to FileLoader
        var loader = new THREE.XHRLoader();

        //load a text file a output the result to the console
        loader.load(
            // resource URL
            trendSource,

            function ( data ) {
                var newCsv = data.split('\r').map(function(row) {
                    var column = row.split(',');
                    for(i=0; i< column.length; i++) {
                        column[i] = parseInt(column[i]);
                    }
                    return column;
                });

                newCsv.splice(0,1);
                var trendData = newCsv.slice();
                createShape(img, trendData);
            },

            // Progress
            function ( xhr ) {
                console.log( (xhr.loaded / xhr.total * 100) + '% loaded' );
            },

            // Errors
            function ( xhr ) {
                console.error( 'An error happened' );
            }
        );



        //////////////////////
        // Event Listeners //
        ////////////////////
        window.addEventListener( 'resize', onWindowResize, false );
        //document.addEventListener( 'mousemove', onDocumentMouseMove, false );
    }


    ////////////////////////
    // Generate Geometry //
    //////////////////////
    function createShape(img, trend) {
        w = img.width -1;
        h = img.height -1;

        // Create Geometry
        var geometry = new THREE.PlaneGeometry( w*multiplier , h*multiplier, w, h);
        geometry.faces.push( new THREE.Face3( 0, 1, 2 ) );


        // define faceVertexUvs to calm warnings
        geometry.faceVertexUvs[0] = [];


        ////////////////////
        // POWER RANGERS //
        //////////////////
        // The Mighty Morphing Mesh

        // Clear Morphes
        var blankVertices = [];
        for ( var v = 0; v < geometry.vertices.length; v ++ ) {
            blankVertices.push(geometry.vertices[v].clone());
        }
        geometry.morphTargets.push( { name: "target" + 0, vertices: blankVertices } );

        // Morph One
        var data = getTypeData(img, trend);
        var vertices = [];
        for ( var v = 0; v < geometry.vertices.length; v ++ ) {
            vertices.push( geometry.vertices[ v ].clone() );
            vertices[ vertices.length - 1 ].x = vertices[ vertices.length - 1 ].x;
            vertices[ vertices.length - 1 ].y = vertices[ vertices.length - 1 ].y;
            if(data[v][0] > 0) {
                vertices[ vertices.length - 1 ].z = data[v][1] ;
            }
        }
        geometry.morphTargets.push( { name: "target" + 1, vertices: vertices } );



        // Create Mesh
        var material = new THREE.MeshLambertMaterial( {
            color: 0xffffff,
            morphTargets: true,
            clippingPlanes: [localPlane]
        });
        mesh = new THREE.Mesh( geometry, material);

        // Add to scene
        scene.add(mesh);

        // Set Mesh Animation
        mixer = new THREE.AnimationMixer(mesh);
        clip = THREE.AnimationClip.CreateFromMorphTargetSequence('target', geometry.morphTargets, 60);
        mixer.clipAction(clip).setDuration(5).play();

        // Okay to run animation in update()
        startAni = true;

    }


    ////////////////////////////
    // Create Type from Data //
    //////////////////////////
    function getTypeData(img, z) {
        var canvas = document.createElement( 'canvas' );
        canvas.width = img.width;
        canvas.height = img.height;

        var context = canvas.getContext( '2d' );
        var size = canvas.width * canvas.height, data = new Float32Array( size );
        var capsule =[];
        context.drawImage(img,0,0);

        for ( var i = 0; i < size; i ++ ) {
            data[i] = 0;
            capsule.push([0,0]);
        }
        var imgd = context.getImageData(0, 0, canvas.width , canvas.height);

        var j=0;
        for ( var y = 0; y < canvas.height; y ++ ) {
            for ( var x = 0; x < canvas.width; x ++ ) {
                var pixel = context.getImageData(x, y, 1, 1);
                if(pixel.data[0] > 0) {
                    capsule[j][0] =  map(pixel.data[0], 0, 255, 0, maxEl);
                    capsule[j][1] =  (z[x][y]/2) +50;
                }
                j++;
            }
        }
        return capsule;
    }


    //////////////////
    // Run Updates //
    ////////////////
    function render() {
        renderer.render( scene, camera );
    }

    function animate() {
        requestAnimationFrame( animate );
        render();
        if(startAni) {
            update();
        }
    }

    function update() {
        var time = Date.now();
        var delta = (time - prevTime) * 0.001;

        // Messy intro animation
        if(camera.position.y < camPosEndY && introAnimation) {
            mesh.morphTargetInfluences[1] += 0.01;
            camera.position.y -= ((camPosStartY - camPosEndY)/60);
        } else if(camera.position.z <= camPosEndZ && introAnimation) {
            camera.position.z += 10;
            camera.position.y += 10;
        } else {
            stopAnimation();
        }

        // Interactive portion
        if(!introAnimation) {
            if (mixer) {

                //console.log(mixer.time);
                mixer.update(delta);
                prevTime = time;
            }
            camera.position.x += ( mouseX - camera.position.x ) * .05;
            camera.position.y += ( - mouseZ - camera.position.y ) * .05;
            camera.position.z += ( - mouseY - camera.position.z ) * .05;
        }

        // Always look at center
        camera.lookAt(scene.position);
    }


    var introAnimation = true;
    function stopAnimation() {
        mixer.clipAction(clip).setDuration(8).play();
        introAnimation = false;
        document.addEventListener( 'mousemove', onDocumentMouseMove, false );
    }


    ////////////////
    // UTILITIES //
    //////////////

    function map(x, in_min, in_max, out_min, out_max) {
        return (x - in_min) * (out_max - out_min) / (in_max - in_min) + out_min;
    }



    function onWindowResize() {

        container = document.getElementById( 'ThreeJS' );

        if(window.innerWidth > 500) {
            container.setAttribute("style", "width: 100%; height: 100vh");
            camera.aspect = window.innerWidth / window.innerHeight;
            renderer.setSize( window.innerWidth, window.innerHeight );
        } else {
            container.setAttribute("style", "width: 100%;");
            camera.aspect = window.innerWidth / window.innerHeight*2;
            renderer.setSize( window.innerWidth, window.innerHeight/2 );
        }
        camera.updateProjectionMatrix();


    }

    sizeUpdate();
    function sizeUpdate() {
        windowWidth = window.innerWidth
        windowHeight = window.innerHeight

        windowHalfX = windowWidth / 2;
        windowHalfY = windowHeight / 2;
    }

    function onDocumentMouseMove(event) {
        mouseX = ( event.clientX - windowHalfX ) * 0.5;
        mouseY = ( event.clientY - windowHeight ) * 0.5;
        mouseZ = ( event.clientY - windowHalfY ) * 0.5;
    }

    function detectIE() {
        var ua = window.navigator.userAgent;

        var msie = ua.indexOf('MSIE ');
        if (msie > 0) {
            // IE 10 or older => return version number
            return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
        }

        var trident = ua.indexOf('Trident/');
        if (trident > 0) {
            // IE 11 => return version number
            var rv = ua.indexOf('rv:');
            return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
        }

        var edge = ua.indexOf('Edge/');
        if (edge > 0) {
            // Edge (IE 12+) => return version number
            return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
        }

        // other browser
        return false;
    }
}