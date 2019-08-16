var App = {};

App = {
    file:'js/app.js',
    init: function () {
        this.onInitCarrousel.forEach(
            function (e, i) {
                App.actions.carrousel_init(e);
            }
        );

        $('.hero-carousel').each(function(index,g) {
            App.actions.carrousel_simple_init(g);
          });

          $('.home-carousel').each(function(index,g) {
            App.actions.carrousel_simple_init(g);
          });

        this.initMenus();
        this.initBrand();
    },
    onInitCarrousel: [],
    initMenus: function () {
        $('#filter-menu-button').on("click",function(){App.actions.open_menu_filter();});
        $('#filter-menu-button').dblclick(function() {App.actions.open_menu_filter();});
        $('.menu-filter #close-button').on("click",function(){App.actions.close_menu_filter();});
        $('#menu-filter-veil').on("click",function(){App.actions.close_menu_filter();});
        $('#menu-button').on("click",function(){App.actions.open_menu();});
        $('#menu-button').dblclick(function() {App.actions.open_menu();});
        $('.main-menu #close-button').on("click",function(){App.actions.close_menu();});
        $('#menu-main-veil').on("click",function(){App.actions.close_menu();});
    },
    initBrand:function () {
        //var url=$("script[src*='"+App.file+"']").attr("src");

        var id="logo-animation";

        var logo = document.getElementById(id);



        // App.status.logo_animation = bodymovin.loadAnimation({
        //     container: logo,
        //     renderer: "svg",
        //     loop: false,
        //     autoplay: false,
        //     prerender: true,
        //     path: logo.getAttribute('data-json')
        // });

        // App.status.logo_animation.addEventListener('DOMLoaded', function(e) {
        //     App.actions.animation_fill_color(id,logo.getAttribute('data-color'));

        //     logo.addEventListener("mouseenter", function () {
        //         App.status.logo_animation.setDirection(1);
        //         App.status.logo_animation.play();
        //     });

        //     logo.addEventListener("mouseleave", function () {
        //         App.status.logo_animation.setDirection(-1);
        //         App.status.logo_animation.play();
        //     });

        //     logo.addEventListener("click", function () {
        //         window.location.href=App.tools.get_Domain(logo.getAttribute('data-json'));
        //     });
        // });

        setTimeout(function(){
            //App.status.logo_animation.play();

        }, 2000);
    }

};

App.configuration = {
    carrousels: {}
};

App.status = {
    blocked: false,
    active_global_scroll: false,
    active_animation: false,
    carrousels: [],
    text_animations: [],
    menu_animation:false,
    logo_animation:null,
}

App.actions = {
    animation_fill_color:function(id,color){
        $("#"+id+" path").each(
            function(i,item){
                $(item).attr("fill",color);
            }
        );
    },
    carrousel_init: function (id) {

        if (App.configuration.carrousels[id].extended_config.text_animation) {
            App.actions.text_animations_load(id);
        }

        App.status.carrousels[id] = $('#' + id).owlCarousel(App.configuration.carrousels[id].config);

        if (App.configuration.carrousels[id].f_event_initialized) {
            App.configuration.carrousels[id].f_event_initialized(id);
        }

        if (App.configuration.carrousels[id].f_event_translate) {
            App.status.carrousels[id].on('translate.owl.carousel', App.configuration.carrousels[id].f_event_translate)
        }

        if (App.configuration.carrousels[id].f_event_translated) {
            App.status.carrousels[id].on('translated.owl.carousel', App.configuration.carrousels[id].f_event_translated)
        }

        if (App.configuration.carrousels[id].f_event_mousewheel) {
            App.status.carrousels[id].on('mousewheel', '.owl-stage', App.configuration.carrousels[id].f_event_mousewheel);
        }
    },
    carrousel_simple_init: function(carousel_ref){
        var config= { items: 1,
             autoHeight:true,
             nav: false,
             };

        $(carousel_ref).owlCarousel(config);
    },
    text_animations_load: function (id) {
        App.status.text_animations[id] = [];
        $(App.configuration.carrousels[id].extended_config.text_animation.selector).each(function (i, e) {
            App.status.text_animations[id][i] = {};
            App.status.text_animations[id][i].text = e.innerText;
            App.status.text_animations[id][i].animation = App.configuration.carrousels[id].extended_config.text_animation.animation;
            App.status.text_animations[id][i].type = App.tools.returnContentType(e.className);
            App.status.text_animations[id][i].index = i;
            App.status.text_animations[id][i].e = e;

            if (App.status.text_animations[id][i].type != "owl-carousel") {
                App.status.text_animations[id][i].id = id;
                e.id = id + "_" + i;
            } else {
                App.status.text_animations[id][i].id = e.id;
            }
        });
    },
    open_menu: function () {
        if(App.status.menu_animation==false) {
            App.status.menu_animation = true;
            App.animations.menu('init-menu-step1');
        }
    },
    close_menu: function () {
        App.animations.menu('close-menu-step1');
    },
    open_menu_filter: function () {
        if(App.status.menu_animation==false) {
            App.status.menu_animation = true;
            App.animations.menu('init-menu-filter-step1');
        }
    },
    close_menu_filter: function () {
        App.animations.menu('close-menu-filter-step1');
    }
}

App.animations = {
    menu: function (type) {
        switch (type) {
            case 'init-menu-filter-position':
                App.status.menu_animation =false;
                anime(
                    {
                        targets: '.menu-filter-wrap',
                        translateX: {
                            value: '-=1500',
                            duration: 0
                        }
                    }
                );

                anime({
                    targets: ['.menu-filter'],
                    translateX: {
                    value: '-=1500',
                        duration: 0
                },
                })

            break;
            case 'init-menu-position':
                App.status.menu_animation =false;
                anime(
                    {
                        targets: '.main-menu-wrap',
                        translateX: {
                            value: '+=1500',
                            duration: 0
                        }
                    }
                );

                anime({
                    targets: ['.main-menu'],
                    translateX: {
                        value: '+=1500',
                        duration: 0
                    },
                })


                break;
            case 'init-menu-filter-step1':
                var tl = anime.timeline({
                    easing: 'easeInOutQuart',
                });

                $(".menu-filter-wrap").css("display", "block")

                tl.add({
                    targets: '.menu-filter-wrap',
                    duration: 0,
                    translateX: {
                        value: '+=1500',
                        duration: 0
                    }
                }).add({
                        targets: '.menu-filter-wrap',
                        opacity: [0, 1],
                    translateX: {
                        value: '-=1500',
                        duration: 500
                    }
                    })

                App.animations.menu('init-menu-filter-step2');
                    break;

            case 'init-menu-filter-step2':
                var tl1 = anime.timeline({
                    easing: 'easeInOutQuart',
                    delay: 100
                });

                tl1.add({
                    targets: '.menu-filter',
                    opacity: [0, 1],
                    duration: 0,
                    translateX: {
                        value: '+=1500',
                        duration: 0
                    }
                }).add(
                        {
                            targets: ['.close-button', '#seachbox-label', '.menu-filter a'],
                            opacity: [1, 0],
                            duration: 0,
                        }
                    )
                    .add({
                        targets: '.menu-filter',
                        easing: 'easeInOutSine',
                        translateX: {
                            value: '-=1500',
                            duration: 500
                        },
                        complete: function (anim) {
                            App.animations.menu('init-menu-filter-step3')

                        }
                    });
                break;
                case 'init-menu-filter-step3':
                    var tl1 = anime.timeline({
                        easing: 'linear',
                    });

                    $(".menu-filter-wrap").css("display","block")

                    tl1.add(
                            {
                                targets: ['.menu-filter a'],
                                translateY: [100, 0],
                                opacity: [0, 1],
                                easing: "easeOutCirc",
                                duration: 700,
                                delay: function (el, i) {
                                    return 70 * i;
                                }
                            }
                        );

                        anime(
                            {
                                targets: ['.close-button','#seachbox-label'],
                                translateY: [-100, 0],
                                opacity: [0, 1],
                                easing: "easeOutExpo",
                                duration: 1000,
                                delay: function (el, i) {
                                    return 200 * i;
                                },
                                loopComplete:function(anim){
                                    $("#seachbox-label").focus();
                                }
                            }
                        );
                    break;
            case 'close-menu-filter-step1':
                var tl1 = anime.timeline({
                    easing: 'easeInOutQuart',
                });

                //$(".menu-filter-wrap").css("display","block")

                tl1.add(
                    {
                        targets: ['.menu-filter'],
                        opacity: [1,0],
                        easing: "easeInOutQuart",
                        translateX: {
                            value: '+=1500',
                            duration: 800
                        },
                        complete: function (anim) {
                            App.animations.menu('init-menu-filter-position');
                            $(".menu-filter-wrap").css("display", "none");
                        }
                    }
                );

                anime(
                    {
                        delay:100,
                        targets: '.menu-filter-wrap',
                        duration: 500,
                        opacity: [1, 0],
                        translateX: {
                            value: '+=1500',
                            duration: 800
                        }
                    }
                );
                break;
            case 'close-menu-step1':
                var tl1 = anime.timeline({
                    easing: 'linear',
                });

                //$(".menu-filter-wrap").css("display","block")

                tl1.add(
                    {
                        targets: ['.main-menu'],
                        opacity: [1,0],
                        easing: "linear",
                        translateX: {
                            value: '-=1500',
                            duration: 800
                        },
                        complete: function (anim) {
                            App.animations.menu('init-menu-position');
                            $(".main-menu-wrap").css("display", "none");
                        }
                    }
                );

                anime(
                    {
                        delay:100,
                        targets: '.main-menu-wrap',
                        duration: 500,
                        opacity: [1, 0],
                        translateX: {
                            value: '-=1500',
                            duration: 800
                        }
                    }
                );
                break;
            case 'init-menu-step1':
                var tl = anime.timeline({
                    easing: 'easeInOutQuart',
                });

                $(".main-menu-wrap").css("display", "block")

                tl.add({
                    targets: '.main-menu-wrap',
                    duration: 0,
                    translateX: {
                        value: '-=1500',
                        duration: 0
                    }
                }).add({
                    targets: '.main-menu-wrap',
                    opacity: [0, 1],
                    translateX: {
                        value: '+=1500',
                        duration: 500
                    }
                })

                App.animations.menu('init-menu-step2');
                break;
            case 'init-menu-step2':
                var tl1 = anime.timeline({
                    easing: 'easeInOutQuart',
                    delay: 100
                });

                tl1.add({
                    targets: '.main-menu',
                    opacity: [0, 1],
                    duration: 0,
                    translateX: {
                        value: '-=1500',
                        duration: 0
                    }
                }).add(
                    {
                        targets: ['.close-button','.main-follow','.main-menu a'],
                        opacity: [1, 0],
                        duration: 0,
                    }
                )
                    .add({
                        targets: '.main-menu',
                        easing: 'easeInOutSine',
                        translateX: {
                            value: '+=1500',
                            duration: 500
                        },
                        complete: function (anim) {
                            App.animations.menu('init-menu-step3')
                        }
                    });
                break;
            case 'init-menu-step3':

                var tl1 = anime.timeline({
                    easing: 'linear',
                });

                $(".main-menu-wrap").css("display","block")

                tl1.add(
                    {
                        targets: ['.main-menu a'],
                        translateY: [100, 0],
                        opacity: [0, 1],
                        easing: "easeOutCirc",
                        duration: 700,
                        delay: function (el, i) {
                            return 70 * i;
                        }
                    }
                );

                anime(
                    {
                        targets: ['.close-button','.main-follow'],
                        translateY: [100, 0],
                        opacity: [0, 1],
                        easing: "easeOutExpo",
                        duration: 1000,
                        delay: function (el, i) {
                            return 200 * i;
                        }
                    }
                );
                break;
        }
    }
}

App.tools = {
    get_Domain:function(url){
        founded=url.indexOf('/', 8);
        if(founded==-1){
            founded=url.length;
        }
        return url.substring(0,founded);
    },
    returnContentType: function (str) {

        if (str.indexOf("video") == -1) {

            if (str.indexOf("image") == -1) {
                if (str.indexOf("owl-carousel") == -1) {
                    return "txt";
                }
                return "owl-carousel";
            } else {
                return "image";
            }

        } else {
            return "video";
        }
    },
    videoUrlPlayStop: function (url, action) {
        var playString = "&muted=1&autoplay=1&loop=1&autopause=0";
        if (action) {
            url = url.replace("?", "?" + playString);
        } else {
            url = url.replace(playString, "")
        }
        return url;
    }
}