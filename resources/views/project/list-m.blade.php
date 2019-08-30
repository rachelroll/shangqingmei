import postcssNesting from 'postcss-nesting';
@use postcss-nested;
@use postcss-simple-vars;

$purple-300: rgb(139, 117, 166);
$purple-375: rgb(106, 70, 138);
$purple-500: rgb(73, 23, 110);

$gray-100: #f5f5f5;
$gray-200: #eeeeee;
$gray-300: #e0e0e0;
$gray-600: #757575;
$gray-850: #323232;
<style>
    .wrap-iconic-case .text-image-row div.single-image {
        background-color: #ddd;
        padding: 32px;
        margin-right: 30px;
    }


    ul.nav {
        background-color: #333;
        overflow: auto;
        /*white-space: nowrap;*/
    }

    li.nav-item {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px;
        text-decoration: none;
    }


    div.scrollmenu {
        background-color: #333;
        overflow: auto;
        white-space: nowrap;
    }

    div.scrollmenu div {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px;
        text-decoration: none;
    }

    div.scrollmenu div:hover {
        background-color: #777;
    }











    /* reset */
    html {
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        box-sizing: border-box;
    }
    *, :after, :before {
        box-sizing: inherit;
    }
    body {
        font: 16px/1.5 Source Sans Pro, Helvetica Neue, Helvetica, Arial, sans-serif;
        color: $gray-850;
    }
    body, ul {
        margin: 0;
    }
    ul {
        padding: 0;
    }
    li {
        display: block;
    }
    a {
        color: inherit;
        text-decoration: none;
    }
    button {
        border: none;
        background: none;
        margin: 0;
        font: inherit;
        letter-spacing: inherit;
        -webkit-font-smoothing: inherit;
    }

    /* utility */
    .bold {
        font-weight: 600;
    }

    /* icons */
    .icon {
        display: inline-block;
        vertical-align: middle;
        fill: currentColor
    }
    .icon--dropdown {
        margin-top: -2px;
        fill: #757575
    }

    /* nav component */
    $nav-height: 2.5em;
    $page-max-width: 1260px;

    $nav-right-spacer-width: 2em;

    /*
        $nav-dropdown-max-height should be taller than maximum dropdown height so that dropdowns aren't cut off.
        It should also be taller than screen height on browsers (e.g. firefox, IE<10) where horizontal scroll bar can't be hidden
        65em = 910px, plenty high for 1080p screens
    */
    $nav-dropdown-max-height: 65em;

    .nav {
        width: 100%;
        height: $nav-height;
        line-height: $nav-height;
        background-color: $gray-100;
        border-bottom: 1px solid $gray-300;
        overflow: hidden;

    /* hide horizontal scrollbar */
    ::-webkit-scrollbar { width: 0; }
    -ms-overflow-style: none;

    /*
        height maintained by placeholder.
        this makes it easy to eventually make this menu position:fixed (if we ever want to do that)
    */
    position: absolute;
    z-index: 1;

    }
    /*
        allow dropdown menus to be displayed below bar
        by allowing their tall (height: $nav-dropdown-max-height) containers to be visible
    */
    .nav--hovered, .nav--focused {
        overflow: visible;
    }

    .nav__placeholder {
        height: $nav-height;
    }

    .nav__outer-wrap {
        display: flex;
        justify-content: space-between;
        height: $nav-dropdown-max-height;
        width: $page-max-width;
        max-width: 100%;
        margin: 0 auto;
    }

    /* Level 1 (header)
       ========================================================================== */
    .nav__heading {
        display: inline-block;
        flex-shrink: 0;
        flex-grow: 1;
        height: $nav-height;

        /* Hack: this compensates for the margin-left on the nav__item:first-child */
        margin-right: -10em;
        z-index: 2 /* so leftmost nav__item doesn't cover it */

    }
    .nav__heading-caret {
        color: #666;
        font-size: 16px;
        margin: 0 -.5em;
    }

    .nav__inner-wrap {
        white-space: nowrap;
        height: $nav-dropdown-max-height;
        display: flex;
    }

    .nav__item {
        height: $nav-height;
        flex-shrink: 0; /* for iOS */

    /* Hack: ensure the first menu item has a little margin-left so it's not narrower
             than it's dropdown menu if it's the only menu item. This is compensated
             for by the nav__heading's margin-right */
    &:first-child {
         margin-left: 10em;
     }
    }

    /* so that items w/ children contain their dropdown menus */
    .nav__item.nav__menu-item--has-children {
        position: relative;
    }

    /* space on right edge of .nav__inner-wrap below .nav__scroll--right */
    .nav__item--right-spacer {
        display: none;
        padding: 0 calc($nav-right-spacer-width / 2);
        background-color: transparent !important;
    }
    .nav--scrollable .nav__item--right-spacer {
        display: block;
    }

    .nav__link {
        display: block;
        padding: 0 10px;
        cursor: pointer; /* needed for all menu items, even dropdown, so iOS devices can hover over them */
        vertical-align: top; /* really only needed for children of .nav__heading so they line up with other links */
    }

    .nav__link--has-dropdown {
        position: relative;
    }

    .nav__scroll {
        position: absolute;
        top: 0;
        z-index: inherit;
        padding: 0 0 .15em;
        width: calc($nav-right-spacer-width / 2);
        background-color: $gray-200;
        font-family: Gill Sans, Futura, sans-serif;
        font-size: 200%;
        line-height: 0;
        height: calc( $nav-height / 2 ); /* b/c font-size is doubled */
        cursor: pointer;
        opacity: 0;
        transition: opacity .3s;
    &:focus {
         opacity: 1;
     }
    }
    .nav__scroll--left {
        left: 0;
        border-right: 1px solid $gray-300;
        border-bottom: 1px solid $gray-300;
    }
    .nav__scroll--right {
        right: 0;
        border-left: 1px solid $gray-300;
        border-bottom: 1px solid $gray-300;
    }
    .nav__scroll--visible {
        opacity: .9;
        transition: opacity .3s;
    }

    .nav__link--toplevel {
        /* prevent text color from changing AFTER background color change on top-level links (not dropdowns) */
        transition: none;
    }

    /* Levels 2 & 3 (header)
       ========================================================================== */
    /* menu item hovered/focused */
    .nav__item:hover, .nav__item--has-focus {
        background-color: $purple-300;
        color: white;
        border-bottom-color: $purple-300;

    /*
        tiny pseudolement to cover bottom edge of adjacent menu items to prevent accidental hover
        as mouse moves diagonally down from menu item to dropdown
     */
    .nav__link--has-dropdown:before {
        content: "";
        display: block;
        position: absolute;
        bottom: 0;
        width: calc(100% + 3em);
        left: -1.5em;
        height: 1.2em;
        /*background-color: red;*/
    }

    /* ensure tiny pseudoelement only shows up on left side (not right side) of final menu item */
    .nav__link--has-dropdown:nth-last-child(2):before {
        width: calc(100% + 1.5em);
    }

    .nav__dropdown {
        display: block;
    }
    .icon--dropdown {
        fill: white;
    }
    .nav__menu-item {
        padding: 0;
        margin-left: 1em;
        line-height: calc($nav-height - 8px);
    > a {
        display: inline-block;
    &:hover, &:focus {
                  background-color: $purple-375;
              }
    &:active {
         background-color: $purple-500;
     }
    }
    }
    }

    .nav__item--repeated {
        margin-left: 0 !important;
    }

    .nav__dropdown {
        display: none;
        position: absolute;
        z-index: 2;
        left: -1em;
        padding: 1em;
        background-color: inherit;
        box-shadow: 1px 1px 4px rgba(150,150,150,.7);
    }

    .nav__item--right-aligned-dropdown {
    .nav__dropdown {
        left: auto;
        right: 0;
        top: $nav-height;
    }
    }
    .nav--scrollable .nav__item--right-aligned-dropdown .nav__dropdown {
        right: -$nav-right-spacer-width;
    }

    /*Small Phones*/
    @media only screen and (max-width: 479px) {

        /* entire site nav bar is scrollable */
        .nav__outer-wrap {
            overflow-x: auto;
            overflow-y: hidden;
            -webkit-overflow-scrolling: touch;
        }
    }

    /*Large Phones on up*/
    @media only screen and (min-width: 480px) {

        /* nav is scrollable EXCEPT for heading (first item) */
        .nav__inner-wrap {
            overflow-x: auto;
            overflow-y: hidden;
            -webkit-overflow-scrolling: touch;
        }
        .nav__heading {
            background-color: $gray-300;
        }
    }

    @media screen and (min-width: 1024px) {
        .nav__outer-wrap {
            position: relative;  /*to contain nav__dropdown  */
            padding-right: 0;
        }
        .nav__heading {
            background-color: transparent;
        }
        .nav__link {
            padding: 0 1em;
        }
        /* remove link to see full menu (in footer) and the spacing for it */
        .nav__scroll {
            display: none;
        }
    }
</style>


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700,600">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fontfaceobserver/2.0.4/fontfaceobserver.standalone.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.slim.min.js"></script>


@extends('layout/layout')
@section('content')
    <div class="main-container white-bg main-container-margin">
        <div class="wrap-iconic-case">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/project-list1.jpg" style="width: 120%" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 style="color: #666">第一张轮播图</h5>
                            <p style="color: #666">可以写些文字</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/img/project-list2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>第二张轮播图</h5>
                            <p>可以写些文字</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="wrap-iconic-case">
            @if(request()->fullUrl() == route('web.project.list', ['id' => 3]))
                <div class="related-content-row" style="padding-top: 10px">
                    <a href="{{ route('web.project.list', ['id' => 1]) }}" class="search-result-item">
                        <img src="../../wp-content/uploads/2019/03/Sensodyne-True-White-Group.png"
                             class="responsive">
                        <div class="overlay-text text-medium leading-small">
                            <div class="item-tag">CASE: A</div>
                            <h2 class="item-title">CIS 导入案例</h2>
                            <div class="item-subtitle">
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('web.project.list', ['id' => 2]) }}" class="search-result-item">
                        <img src="../../wp-content/uploads/2019/03/65883ce860-Recovered.png"
                             class="responsive">
                        <div class="overlay-text text-medium leading-small">
                            <div class="item-tag">CASE: B</div>
                            <h2 class="item-title">品牌设计案例</h2>
                            <div class="item-subtitle">
                            </div>
                        </div>
                    </a>
                </div>
            @elseif(request()->fullUrl() == route('web.project.list', ['id' => 2]))
                <div class="related-content-row" style="padding-top: 10px">
                    <a href="{{ route('web.project.list', ['id' => 1]) }}" class="search-result-item">
                        <img src="../../wp-content/uploads/2019/03/Sensodyne-True-White-Group.png"
                             class="responsive">
                        <div class="overlay-text text-medium leading-small">
                            <div class="item-tag">CASE: A</div>
                            <h2 class="item-title">CIS 导入案例</h2>
                            <div class="item-subtitle">
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('web.project.list', ['id' => 3]) }}" class="search-result-item">
                        <img src="../../wp-content/uploads/2019/03/65883ce860-Recovered.png"
                             class="responsive">
                        <div class="overlay-text text-medium leading-small">
                            <div class="item-tag">CASE: C</div>
                            <h2 class="item-title">环境规划案例</h2>
                            <div class="item-subtitle">
                            </div>
                        </div>
                    </a>
                </div>
            @else
                <div class="related-content-row" style="padding-top: 10px">
                    <a href="{{ route('web.project.list', ['id' => 2]) }}" class="search-result-item">
                        <img src="../../wp-content/uploads/2019/03/Sensodyne-True-White-Group.png"
                             class="responsive">
                        <div class="overlay-text text-medium leading-small">
                            <div class="item-tag">CASE: B</div>
                            <h2 class="item-title">品牌设计案例</h2>
                            <div class="item-subtitle">
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('web.project.list', ['id' => 3]) }}" class="search-result-item">
                        <img src="../../wp-content/uploads/2019/03/65883ce860-Recovered.png"
                             class="responsive">
                        <div class="overlay-text text-medium leading-small">
                            <div class="item-tag">CASE: C</div>
                            <h2 class="item-title">环境规划案例</h2>
                            <div class="item-subtitle">
                            </div>
                        </div>
                    </a>
                </div>
            @endif
            <br>
            <br>


                <nav id="nav" class="nav">
                    <div id="nav__outer-wrap" class="nav__outer-wrap">
                        <div id="nav__heading" class="nav__heading">
                            <a class="nav__link bold" href="#admissions/">GC Admissions</a>
                        </div>
                        <ul id="nav__inner-wrap" class="nav__inner-wrap">
                            <li id="nav__item--178" class="nav__item nav__menu-item nav__menu-item--has-children" tabindex="0">
                    <span class="nav__link nav__link--has-dropdown">
                        Apply
                        <svg class="icon icon--dropdown" viewBox="0 0 24 24" style="height: 1em; width: 1em">
                            <path d="M16.594 8.578l1.406 1.406-6 6-6-6 1.406-1.406 4.594 4.594z"></path>
                        </svg>
                    </span>
                                <ul class="nav__dropdown">
                                    <li class="nav__menu-item nav__item--repeated">
                                        <a class="nav__link" href="#admissions/apply/">Apply</a>
                                    </li>
                                    <li class="nav__menu-item">
                                        <a class="nav__link" href="#admissions/apply/first-year/">First-year Students</a>
                                    </li>
                                    <li class="nav__menu-item">
                                        <a class="nav__link" href="#admissions/apply/transfer/">Transfer Students</a>
                                    </li>
                                    <li class="nav__menu-item">
                                        <a class="nav__link" href="#admissions/apply/international/">International Students</a>
                                    </li>
                                    <li class="nav__menu-item">
                                        <a class="nav__link" href="#admissions/apply/canadian/">Canadian Students</a>
                                    </li>
                                    <li class="nav__menu-item">
                                        <a class="nav__link" href="#admissions/apply/home-schooled/">Home-schooled Students</a>
                                    </li>
                                    <li class="nav__menu-item">
                                        <a class="nav__link" href="#admissions/apply/early-enrollment/">Early Enrollment Students</a>
                                    </li>
                                    <li class="nav__menu-item">
                                        <a class="nav__link" href="#admissions/apply/previously-admitted/">Previously-admitted Students</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="nav__item--191" class="nav__item nav__menu-item nav__menu-item--has-children" tabindex="0">
                    <span class="nav__link nav__link--has-dropdown">
                        Visit Campus
                        <svg class="icon icon--dropdown" viewBox="0 0 24 24" style="height: 1em; width: 1em">
                            <path d="M16.594 8.578l1.406 1.406-6 6-6-6 1.406-1.406 4.594 4.594z"></path>
                        </svg>
                    </span>
                            <ul class="nav__dropdown">
                                <li class="nav__menu-item nav__item--repeated">
                                    <a class="nav__link" href="#admissions/visit/">Visit Campus</a>
                                </li>
                                <li class="nav__menu-item">
                                    <a class="nav__link" href="#tour/">Take Virtual Tour</a>
                                </li>
                                <li class="nav__menu-item">
                                    <a class="nav__link" href="#about/map/">Map &amp; Directions</a>
                                </li>
                            </ul>
                            </li>
                            <li id="nav__item--432" class="nav__item nav__menu-item"><a class="nav__link nav__link--toplevel" href="#admitted/deposit/">Deposit</a></li>
                            <li id="nav__item--132" class="nav__item nav__menu-item"><a class="nav__link nav__link--toplevel" href="#financial-aid/">Financial Aid</a></li>
                            <li id="nav__item--92" class="nav__item nav__menu-item"><a class="nav__link nav__link--toplevel" href="#admissions/team/">Meet Your Admissions Counselor</a></li>
                            <li id="nav__item--186" class="nav__item nav__menu-item nav__menu-item--has-children nav__item--right-aligned-dropdown" tabindex="0">
                    <span class="nav__link nav__link--has-dropdown">
                        Contact Us
                        <svg class="icon icon--dropdown" viewBox="0 0 24 24" style="height: 1em; width: 1em">
                            <path d="M16.594 8.578l1.406 1.406-6 6-6-6 1.406-1.406 4.594 4.594z"></path>
                        </svg>
                    </span>
                                <ul class="nav__dropdown">
                                    <li class="nav__menu-item nav__item--repeated">
                                        <a class="nav__link" href="#admissions/contact/">Contact Us</a>
                                    </li>
                                    <li class="nav__menu-item">
                                        <a class="nav__link" href="#alumni/resources/referral-form/">Refer a Student</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="nav__item--right-spacer" class="nav__item nav__item--right-spacer"></li>
                        </ul>
                    </div>
                    <button id="nav__scroll--left" class="nav__scroll nav__scroll--left hide">‹</button>
                    <button id="nav__scroll--right" class="nav__scroll nav__scroll--right hide">›</button>
                </nav>

                <div class="nav__placeholder"></div>

                <!-- to simulate page content below navigation -->
                <div style="width: 50em; max-width: 100%; margin: 0 auto; padding: 0 1em">

                </div>







            <div class="text-image-row">
                <div class="single-image">
                    @foreach($lists as $list)
                        <div class="red-border-box">
                            <h1>{{ $list->title }}</h1>
                        </div>
                        <ul>
                            @foreach($list->projects as $item)
                                <li>- {{ $item->title }}</li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>


                <div class="image-text">
                    @foreach($lists as $list)
                        @foreach($list->projects as $item)<div class="text-body">
                            <h1 style="margin: 20px 0">
                                {{ $item->title }}
                            </h1>
                        </div>
                        <a href="{{ route('web.project.show', ['id' => $item->id]) }}">
                            <div class="images-group" style="margin-bottom: 60px">
                                <div class="images-row">
                                    <div class="col">
                                        <img src="{{ 'http://' .env('CDN_DOMAIN').'/'. $item->cover }}">
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    @endforeach
                </div>
                <br>
            </div>
        </div>
    </div>


@endsection



<script>
    'use strict';
    !function utilities()
    {
        // setup "gc" root object for all custom global variables and functions
        // Why gc? I work at Goshen College. Learn more at goshen.edu!
        var gc = {};

        // debounce
        gc.debounce = function(func, wait) {var timeout;return function() {var context = this, args = arguments;var later = function() {timeout = null;func.apply(context, args);};clearTimeout(timeout);timeout = setTimeout(later, wait);};};

        // setup window resize debouncer that triggers callbacks (passing them starting & ending width)
        // window.innerWidth is cached as gc.width to prevent layout thrashing: https://gist.github.com/paulirish/5d52fb081b3570c81e3a
        gc.width = window.innerWidth;
        var callbacks = {}; // 'name' => callbackFunction

        window.addEventListener('resize', gc.debounce( function handleWindowResize()
        {
            var endWidth = window.innerWidth;
            for (var name in callbacks) {
                if (callbacks.hasOwnProperty(name)) {
                    callbacks[name](gc.width, endWidth);
                }
            }
            gc.width = endWidth;
        }, 200 ));

        gc.addResizeCallback = function( name, callbackFunction ) {
            if ( !callbacks.hasOwnProperty(name) ) {
                callbacks[name] = callbackFunction;
            }
        }

        gc.removeResizeCallback = function( name ) {
            delete callbacks[name];
        }

        // make gc globally accessible!
        window.gc = gc;
    }();

    /**
     * Setup buttons on horizontally-scrolling nav bar
     *
     * Active/deactivate site nav bar to toggle visibility of wrappers.
     *      When wrappers are visible, dropdowns can be seen and scrolled over, but nothing at the top of the page can be clicked
     *      When wrappers are invisible, dropdowns cannot be seen but the rest of the page can be interacted with fine
     */
    !function scrollSiteNavBar()
    {
        /**
         * Setup buttons for horizontal scrolling
         */
        var component = document.getElementById('nav');

        // 'wrapper' that gets scrolled. Changes depending on screen width
        var outerWrap = document.getElementById('nav__outer-wrap'); // for <480 wide screens
        var innerWrap = document.getElementById('nav__inner-wrap'); // for 480+ wide screens

        // don't run if there's no site nav bar on this page (e.g. homepage)
        if (outerWrap === null) { return; }

        // buttons for automatic scrolling
        var leftBtn = document.getElementById('nav__scroll--left');
        var rightBtn = document.getElementById('nav__scroll--right');

        // spacer on the right side of menu that rightBtn covers up
        var rightSpacerWidth = 28;

        // sticky left-aligned header on 480+ wide screens
        var header = document.getElementById('nav__heading');

        // initialize buttons once font has been loaded (the size of the wrappers change) (timeout of 3s by default)
        var font = new FontFaceObserver('Source Sans Pro');
        font.load()
            .then(function ()
            {
                // Hack: use setTimeout to ensure the correct clientWidth of 'header' has been calculated.
                // (Perhaps this is a bug w/ the FontFaceObserver library?)
                setTimeout(init, 200);
            })
            .catch(function ()
            {
                setTimeout(init, 200);
            });

        // Initialize component
        function init()
        {
            // Update component properties based on screen width
            reset(gc.width);

            // add click listeners on buttons
            leftBtn.addEventListener('click', scrollLeft);
            rightBtn.addEventListener('click', scrollRight);

            // on scroll, show/hide buttons (e.g. don't show scroll-left button when you're already on the left side)
            // re-calculate wrapper.scrollLeft every time, of course, b/c this changes with scrolling
            outerWrap.addEventListener('scroll', gc.debounce( function () { toggleButtons(wrapper.scrollLeft); }, 100 ));
            innerWrap.addEventListener('scroll', gc.debounce( function () { toggleButtons(wrapper.scrollLeft); }, 100 ));

            // reset when screen width changes
            gc.addResizeCallback('siteNavWrapper', function (startWidth, endWidth) {
                reset(endWidth);
            });
        }

        /*
            the "wrapper" is the element with accurate scrollLeft and scrollWidth
                at < 480px, wrapper is outerWrap
                at >= 480px, wrapper is innerWrap
        */
        var wrapper, limit, amount;

        // Update component properties so it adapts to screen width
        function reset(screenWidth)
        {
            if (screenWidth < 480) {
                // scrolling menu is fullwidth. header scrolls as well
                wrapper = outerWrap;
                // left button is up against left side of screen
                leftBtn.style.left = 0;
                // limit is the amount of pixels that the navigation can be horizontally scrolled
                // here, scroll area is entire width of screen.
                limit = wrapper.scrollWidth - screenWidth;
                // scroll by 250 each time button is pressed
                amount = 250;
            }
            else {
                // scrolling menu is almost fullwidth. header is fixed in place on left side
                wrapper = innerWrap;
                // left button should be to the right of the header
                leftBtn.style.left = header.clientWidth +'px';
                // scroll area is VISIBLE width of scrollable area (the "window" you can see)
                limit = wrapper.scrollWidth - wrapper.clientWidth;
                // scroll by 300 every time button is pressed
                amount = 300;
            }

            // show/hide spacer depending on whether scrolling is possible
            if (limit <= 0) {
                // no scrolling is possible. hide spacer
                component.classList.remove('nav--scrollable');
            }
            // scrolling is possible. show spacer if hidden
            else {
                component.classList.add('nav--scrollable');
                // adjust limit to take into account the spacer that was just added
                limit += rightSpacerWidth;
            }

            // calculate which buttons should be visible
            toggleButtons(wrapper.scrollLeft);
        }

        function scrollLeft() {
            scroll( -amount );
        }
        function scrollRight() {
            scroll( amount );
        }

        function scroll(amount) {
            var start = wrapper.scrollLeft;
            var end = start + amount;

            tween( start, end, 1000, easeInOutQuad);
        }

        function toggleButtons(scrollPos) {
            // console.log('toggleButtons', scrollPos, 'of', limit);

            // screen too wide for scrolling
            if (limit <= 0) {
                hide(leftBtn);
                hide(rightBtn);
            }
            // leftmost position (give 10px so it hides a bit prematurely)
            else if (scrollPos <= 10) {
                hide(leftBtn);
                show(rightBtn);
            }
            // rightmost position (compensate for rightSpacer)
            else if (scrollPos >= limit - rightSpacerWidth) {
                hide(rightBtn);
                show(leftBtn);
            }
            // anywhere in between
            else {
                show(leftBtn);
                show(rightBtn);
            }
        }

        function show(elem) {
            elem.classList.remove('hide');
            // why the delay? so buttons can fade in/out (transitions defined in CSS classes)
            setTimeout(function () {
                elem.classList.add('nav__scroll--visible');
            }, 100);
        }
        function hide(elem) {
            elem.classList.remove('nav__scroll--visible');
            setTimeout(function () {
                elem.classList.add('hide');
            }, 300);
        }

        function tween(start, end, duration, easing) {
            var delta = end - start;
            var startTime = performance.now();
            var tweenLoop = function (time) {
                var t = (!time ? 0 : time - startTime);
                var factor = easing(null, t, 0, 1, duration);
                wrapper.scrollLeft = start + delta * factor;
                if (t < duration && wrapper.scrollLeft != end) {
                    requestAnimationFrame(tweenLoop);
                }
            }
            tweenLoop();
        };

        function easeInOutQuad(x, t, b, c, d)
        {
            if ((t/=d/2) < 1) return c/2*t*t + b;
            return -c/2 * ((--t)*(t-2) - 1) + b;
        }

        /**
         * Setup activation/deactivation
         * Both wrappers are very tall so that the dropdown menus (below nav) can be seen.
         * However, this means that the wrappers cover up the page below the menu so things
         * can't be interacted with. Thus, we need to listen for when the menu's being interacted
         * with and show/hide the wrappers as needed.
         */
        handle(activate, true);

        function activate()
        {
            requestAnimationFrame(function () {
                component.classList.add('nav--hovered');
                handle(deactivate, true);
            });
            handle(activate, false);
        }

        function deactivate(evt)
        {
            if (evt.target === outerWrap || evt.target === innerWrap) {
                component.classList.remove('nav--hovered');
                handle(deactivate, false);
                handle(activate, true);
            }
        }

        function handle(callback, addOrRemove)
        {
            if (addOrRemove) {
                outerWrap.addEventListener('touchstart', callback);
                outerWrap.addEventListener('mouseover', callback);
            }
            else {
                outerWrap.removeEventListener('touchstart', callback);
                outerWrap.removeEventListener('mouseover', callback);
            }
        }
    }();

    /**
     * Keep dropdowns open when their child links are focused by a keyboard
     */
    !function accessibleDropdowns()
    {
        // for site nav bar, always setup dropdowns
        var nav = document.getElementById('nav');
        var siteNavOptions = {
            selector: '.nav__item',
            onFocusIn: function(elem) {
                elem.classList.add('nav__item--has-focus');
                nav.classList.add('nav--focused');
            },
            onFocusOut: function(elem) {
                elem.classList.remove('nav__item--has-focus');
            },
            onAllFocusOut: function() {
                nav.classList.remove('nav--focused');
            }
        }
        init( siteNavOptions );

        /**
         * Listen for "focusin" and "focusout" events and toggle dropdowns accordingly
         * @param  {Object} options {
         *  selector: '.nav__item', // dropdown
         *  onFocusIn: function(elem) {...}, // dropdown focused
         *  onFocusOut: function(elem) {...} // dropdown unfocused
         *  onAllFocusOut: function() {...} // all dropdowns unfocused
         * }
         */
        function init( options )
        {
            var focusedDropdownId = '';
            var lastFocusTime = 0;
            $(options.selector).on('focusin', function (evt)
            {
                // a new dropdown was focused
                lastFocusTime = window.performance.now();
                if (this.id !== focusedDropdownId) {
                    focusedDropdownId = this.id;
                    // display dropdown (until unfocused)
                    options.onFocusIn( this );
                }
            });
            $(options.selector).on('focusout', function (evt)
            {
                // Remove unfocused dropdown.
                // Wait a bit (25ms) first b/c the event firing of focus in/out is unpredictable and we need to be sure
                // that focusedDropdownId is set correctly before hiding and dropdowns
                var self = this;
                var wait = 25;
                setTimeout(function ()
                {
                    // Hide unfocused dropdown if...
                    // 1. a different dropdown has been focused
                    if (self.id !== focusedDropdownId) {
                        options.onFocusOut( self );
                    }
                    // 2. a new item in this dropdown hasn't been focused
                    else if ( window.performance.now() - lastFocusTime > wait * 2 ) {
                        focusedDropdownId = '';
                        options.onFocusOut( self );
                        options.onAllFocusOut();
                    }
                }, wait);
            });
        }
    }();
</script>
