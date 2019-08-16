var wHeight;
var wWidth;
var reFrames = false;

//////////////////////////////////////////////////////////////////////////////
// Document Ready
//////////////////////////////////////////////////////////////////////////////
$(function() {

	var showOnEnterInstance = ibShowOnEnter();

	$(document).bind('mobileinit', function() {
		$.mobile.ajaxEnabled = false;
	});

	if($.browser.mobile){
		$('html').addClass('touch');
	} else {
		$('html').addClass('no-touch');
	}


	/* 	******************************
	 Responsive iframe corrections
	 ****************************** */
	$('.text-body').find('iframe').wrap( "<div class='video-container '></div>" );
	$('iframe').each(function(){
		var url = $(this).attr("src");
		$(this).attr("src",url+"?wmode=transparent");
	});


	/* 	******************************
	 Language select
	 ****************************** */

	(function() {
		var languageHash = {
			'english': 'en',
			'japanese': 'ja',
			'chinese': 'zh'
		};
		hrefArray = window.location.href.split('/');
		$selectLanguageInput = $('#language-select-input'),
			currentLang = languageHash.english;

		for(var lang in languageHash) {
			if(languageHash[lang] === hrefArray[3]) {
				currentLang = lang;
				break;
			}
		}

		$('body').addClass('lang-' + languageHash[currentLang]);
		$selectLanguageInput.val(currentLang);

		$selectLanguageInput.on('change', function() {
			var language = $selectLanguageInput.children(':selected').text();
			hrefArray = window.location.href.split('/');
			hrefArray[3] = languageHash[language.toLowerCase()];
			window.location.href = hrefArray.splice(0,4).join('/');
		});

	})();
	//alert(currentLang);

	/*	******************************
	 Update Nav (.nav-list) height
	 ****************************** */



	// Init reframe bars and get window dimensions

	function updateNav(){
		var windowHeight = window.innerHeight;
		$('.nav-list-wrapper').css({'height': windowHeight});
	}


	/*	******************************
	 On RESIZE window
	 ****************************** */
	$(window).resize(function() {
		wHeight = window.innerHeight;
		wWidth = window.innerWidth;

		if(wWidth > 992)  {
			$html.removeClass(navOpen);
		}


		if (reFrames){

			updateReframeBars();
		}
	});


	/*	******************************
	 On SCROLL window
	 ****************************** */

	var scrollElement1 = $('.scroll-show-1');
	var scrollElement2 = $('.scroll-show-2');
	var lastScrollTop;

	$(window).scroll(function() {
		var currentScrollY = $(this).scrollTop();

		if($('.scroll-show-1').length && isScrolledIntoView(scrollElement1)) {
			scrollElement1.addClass('visible');
		}
		if($('.scroll-show-2').length && isScrolledIntoView(scrollElement2)) {
			setTimeout(function(){
				scrollElement2.addClass('visible');
			}, 500);
		}

		// Reframe update
		if (reFrames){
			var top = $(window).scrollTop();
			var scrollBottom = top + wHeight;

			$('.reframe').each(function(i) {
				var bHeight = $(this).height();
				var pTop = ($(this).offset().top);
				var pBottom = pTop + bHeight;

				if(scrollBottom > pBottom && top < pTop){
					$('.reframe-bar-'+i).addClass('active');
					$(this).addClass('active');
				} else {
					$('.reframe-bar-'+i).removeClass('active');
					$(this).removeClass('active');
				}

			});
		}

		// Header animate update
		if (currentScrollY > 140) {
			if (currentScrollY > lastScrollTop && !$('#search').hasClass('show')){
				$('#mainHeader').addClass('hidden');
			} else {
				$('#mainHeader').removeClass('hidden');
			}
		}
		lastScrollTop = currentScrollY;


	});


	/*	******************************
	 Check if element is on screen
	 ****************************** */
	function isScrolledIntoView(elem) {
		var docViewTop = $(window).scrollTop();
		var docViewBottom = docViewTop + $(window).height();

		var elemTop = $(elem).offset().top;
		var elemBottom = elemTop + $(elem).height();

		return (elemTop <= docViewBottom);
	}



	/*	******************************
	 ????????????????????????????
	 ****************************** */
	var $html = $('html'),
		$body = $('body'),
		$mainNav = $('#mainNav'),
		$mainHeader = $('#mainHeader'),
		$navToggle = $mainHeader.find('.nav-toggle'),
		$navList = $mainNav.find('.nav-list'),
		$navLinks = $navList.find('a'),

		$mainNavSearch  = $('#search'),
		$searchToggle = $mainHeader.find('.search-toggle'),
		$searchList = $mainNavSearch.find('.search-box'),
		$searchLinks = $searchList.find('input'),

		$regionsDropdown  = $('#regions'),
		$regionsToggle = $mainHeader.find('.regions-toggle'),


		$filterToggle = $('.filter-toggle'),
		$filterList = $('.filter-list'),
		$filterLinks = $filterList.find('a'),
		//hammerBody = new Hammer($body[0]),
		toggleClass = 'show',
		navOpen = 'nav-open',
		startSwipeBuffer = 30,
		navFollowFingerLeft = false,
		navFollowFingerRight = false,
		animatingClose = false;


	/*	******************************
	 Nav icon clicked
	 ****************************** */
	$navToggle.on('click', function() {

		if(!$html.hasClass(navOpen)) {
			$html.addClass(navOpen);
			//$body.addClass(navOpen);
		} else {
			$html.removeClass(navOpen);
			//$body.removeClass(navOpen);
		}
		//$mainNav.toggleClass(toggleClass);
		updateNav();

		$('input.search').val('');
		$('#resultsInsert').html('');
		$filterList.removeClass('filtering');
		$mainNavSearch.removeClass(toggleClass);
		$regionsDropdown.removeClass(toggleClass);
		$regionsToggle.removeClass(toggleClass);
		$searchToggle.removeClass(toggleClass);

	});


	/*	******************************
	 Search iconclicked
	 ****************************** */

	$searchToggle.on('click', function() {
		$html.removeClass(navOpen);
		$regionsDropdown.removeClass(toggleClass);
		$regionsToggle.removeClass(toggleClass);

		$searchToggle.toggleClass(toggleClass);
		$mainNavSearch.toggleClass(toggleClass);

		$mainNav.removeClass(toggleClass);
	});

	$regionsToggle.on('click', function() {
		$html.removeClass(navOpen);
		$mainNavSearch.removeClass(toggleClass);
		$searchToggle.removeClass(toggleClass);


		$regionsToggle.toggleClass(toggleClass);

		$regionsDropdown.toggleClass(toggleClass);
		$mainNav.removeClass(toggleClass);
	});





	/*	******************************
	 Document clicked
	 ****************************** */

	$(document).click(function(e) {
		$filterList.removeClass('filtering');
		$mainNav.removeClass(toggleClass);
		//$mainNavSearch.removeClass(toggleClass);
	});



	/*	******************************
	 stopPropagation for important clicks
	 ****************************** */

	$('.filter-toggle, .filter-list, .nav-toggle, .nav-list, .search-toggle, .search-box').click(function(e) {
		e.stopPropagation();
	});


	/*	******************************
	 Nav links clicked
	 ****************************** */

	$navLinks.on('click', function(evt) {
		if(animatingClose) {
			evt.preventDefault();
		}
	});


	/*	******************************
	 Search links clicked
	 ****************************** */

	$searchLinks.on('click', function(evt) {
		if(animatingClose) {
			evt.preventDefault();
		}
	});


	function swipeStartX(evt) {
		return evt.center.x + Math.abs(evt.deltaX);
	}

	function navFollowTouch(evt) {
		$navList.css({ left: evt.center.x });
	}




});
//////////////////////////////////////////////////////////////////////////////
// ^ Document ready ^ //



//////////////////////////////////////////////////////////////////////////////
// Reframe
//////////////////////////////////////////////////////////////////////////////
window.onload = function() {
	if ($(".reframe")[0]){
		wHeight = window.innerHeight;
		wWidth = window.innerWidth;

		setTimeout(function(){
			reframeBars();
			reFrames = true;
		}, 1000);

	}
}

/* Reframe */
// Add .reframe-bars to DOM
function reframeBars() {
	$('.reframe').each(function(i) {
		var bHeight = $(this).height();
		var	pTop = ($(this).offset().top);
		var	pMiddle = pTop + bHeight/2;
		var	pBottom = pTop + bHeight;

		$('.page-wrapper').append('<div class="reframe-bar-'+i+' reframe-bar reframe-bar--left"></div><div class="reframe-bar-'+i+' reframe-bar reframe-bar--right"></div>');
		$('.reframe-bar-'+i).css({"height": "200px","top": pMiddle+"px", "position": "absolute"});
		setTimeout(function(){
			$('.reframe-bar').addClass('active');
		}, 500);

	});
}


// Update the relative position of .reframe-bar(s)
function updateReframeBars() {
	$('.reframe').each(function(i) {
		var bHeight = $(this).height();
		var	pTop = ($(this).offset().top);
		var	pMiddle = pTop + bHeight/2;
		var	pBottom = pTop + bHeight;

		$('.reframe-bar-'+i).css({"top": pMiddle+"px"});
		updateDebug(i,pTop, pMiddle, pBottom);
	});
}


// Adds debug markers for top, bottom and middle of a reframe box
function debug(i){
	$('.page-wrapper').append('<div class="bug bug-'+i+' bug-top"></div> <div class="bug bug-'+i+' bug-middle"></div> <div class="bug bug-'+i+' bug-bottom"></div>') ;
	$('.bug').css({"width": "40px", "height": "4px", "position": "absolute", "left": "0", "z-index": "500"});
}


// Update location of debug markers
function updateDebug(i,pTop, pMiddle, pBottom) {
	$('.bug-'+i+'.bug-top').css({"top": pTop+"px", "background": "#0F0" });
	$('.bug-'+i+'.bug-middle').css({"top": pMiddle+"px", "background": "#00F" });
	$('.bug-'+i+'.bug-bottom').css({"top": pBottom+"px", "background": "#F00" });
}
//////////////////////////////////////////////////////////////////////////////
// ^ Reframe ^ //


//////////////////////////////////////////////////////////////////////////////
// Utlities
//////////////////////////////////////////////////////////////////////////////

var ibUtilities = (function() {
	function arrayify(value) {
		if(typeof value === typeof []) {
			return value;
		}
		return [value];
	}
	return {
		arrayify: arrayify
	};
})();

//////////////////////////////////////////////////////////////////////////////
// ^ Utlities ^ //


//////////////////////////////////////////////////////////////////////////////
// Prevent touch scroll but
//////////////////////////////////////////////////////////////////////////////

/*
document.ontouchmove = function ( event ) {
	var isTouchMoveAllowed = true, target = event.target;
	while ( target !== null ) {
		if ( target.classList && target.classList.contains( 'disable-scrolling' ) ) {
			isTouchMoveAllowed = false;
			break;
		}
		target = target.parentNode;
	}
	if ( !isTouchMoveAllowed ) {
		event.preventDefault();
	}
};
*/
//////////////////////////////////////////////////////////////////////////////
// ^ Prevent touch scroll but ^ //



//////////////////////////////////////////////////////////////////////////////
// ibShowOnEnter
//////////////////////////////////////////////////////////////////////////////

var ibShowOnEnter = (function() {
	return function() {
		var $window = $(window),
			$toCheckElem = $('[data-show-on-enter]');

		checkAndMakeVisible($toCheckElem);

		$window.on('scroll.showOnScroll', function() {
			checkAndMakeVisible($toCheckElem);
		});

		return {
			showElements: showElements
		};

		function isScrolledIntoView($elem, docViewBottom) {
			return ($elem.offset().top <= docViewBottom);
		}

		function checkAndMakeVisible($toCheckElem) {
			var docViewBottom, $toShowElems, $currentElem, $toShow;

			if($toCheckElem.length) {

				docViewBottom = $window.scrollTop() + $window.height();
				$toShowElems = [];

				for(var i = $toCheckElem.length-1; i >= 0; i--) {
					if(isScrolledIntoView( ($currentElem = $($toCheckElem[i])), docViewBottom )) {
						$toCheckElem.splice(i, 1);
						$toShowElems.unshift($currentElem);
					}
				}

				showElements($toShowElems);
			}
		}

		function showElements($toShowElems, classToAdd) {
			var delay = 500;

			classToAdd = classToAdd || 'visible';

			if($toShowElems.length) {
				for(var k = 0; k < $toShowElems.length; k++) {
					(function(v) {
						setTimeout(function() {
							$($toShowElems[v]).addClass(classToAdd);
						}, delay * v);
					})(k);
				}
			}
		}
	};

})();

//////////////////////////////////////////////////////////////////////////////