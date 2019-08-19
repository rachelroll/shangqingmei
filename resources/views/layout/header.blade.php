<header id="mainHeader">
    <!--Navigation-->
    <div class="main-container">
        <div class="menu-left-content">
            <button class="menu-button" id="menu-button">
                <!-- <img src="https://www.interbrand.com/wp-content/themes/interbrand/img/ib_menu.svg" alt=""> -->
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     viewBox="0 0 260 198" style="enable-background:new 0 0 260 198;" xml:space="preserve">
                        <g>
                            <g>
                                <rect y="88" width="260" height="21" />
                                <rect y="21" width="260" height="21" />
                                <rect y="156" width="260" height="21" />
                            </g>
                        </g>
                    </svg>
            </button>
            {{--                左侧导航栏--}}
            <div class="main-menu-wrap">
                <div class="main-menu">
                    <button class="close-button" id="close-button">Close</button>
                    <a href="/" style="margin-top: 5vh;" class="text-block text-medium hover-red">
                        首页
                    </a>
                    <a href="{{route('web.about')}}" class="text-block text-medium hover-red">
                        关于我们
                    </a>
                    <a href="{{route('web.service.index')}}" class="text-block text-medium hover-red">
                        服务能力
                    </a>
                    <a href="{{route('web.project.index')}}" class="text-block text-medium hover-red">
                        作业案例
                    </a>
                    <a href="{{route('web.stroy.index')}}" class="text-block text-medium hover-red">
                        作业故事
                    </a>
                    <a href="{{route('web.platform.index')}}" class=" text-medium hover-red">
                        互动平台
                    </a>
                </div>
                <div class="menu-veil" id="menu-main-veil"> </div>
            </div>
        </div>
        {{--            logo--}}
        <div class="menu-center-content">
            <a class="brand-logo" href="/">
                <img src="../img/logo.png" alt="">
            </a>
        </div>
        {{--            搜索--}}
        <div class="menu-right-content">
            <button class="move-button draw-border" id="filter-menu-button">
                搜索
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                     y="0px" viewBox="0 0 152.2 203.9" style="enable-background:new 0 0 152.2 203.9;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M152.2,76.1c0-42-34.1-76.1-76.1-76.1S0,34.1,0,76.1s34.1,76.1,76.1,76.1c10.1,0,20-2,29.3-5.9l32.1,57.6l14.3-8
                            l-32.1-57.5C140.1,124.1,152.2,100.9,152.2,76.1z M16.4,76.1c0-33,26.7-59.7,59.7-59.7s59.7,26.7,59.7,59.7s-26.7,59.7-59.7,59.7
                            l0,0C43.2,135.8,16.5,109,16.4,76.1z" />
                            </g>
                        </g>
                    </svg>
            </button>

            <div class="menu-filter-wrap">
                <nav class="menu-filter">
                    <button class="close-button" id="close-button">Close</button>
                    <form role="search" method="get" autocomplete="off" action="../index.html">
                        <label class="text-huge is-start" id="seachbox-label">

                            <div class="search-icon">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                     y="0px" viewBox="0 0 152.2 203.9" style="enable-background:new 0 0 152.2 203.9;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M152.2,76.1c0-42-34.1-76.1-76.1-76.1S0,34.1,0,76.1s34.1,76.1,76.1,76.1c10.1,0,20-2,29.3-5.9l32.1,57.6l14.3-8
                            l-32.1-57.5C140.1,124.1,152.2,100.9,152.2,76.1z M16.4,76.1c0-33,26.7-59.7,59.7-59.7s59.7,26.7,59.7,59.7s-26.7,59.7-59.7,59.7
                            l0,0C43.2,135.8,16.5,109,16.4,76.1z" />
                            </g>
                        </g>
                    </svg>
                            </div>
                            <input type="search" class="clean-input col-100 text-huge" autofocus id="seachbox-input"
                                   placeholder="" name="s" />
                        </label>
                    </form>

                    <a class="hover-red text-medium border-bottom " href="../our-expertise/attract-capital/index.html"><h3>Attract Capital</h3></a>
                    <a class="hover-red text-medium border-bottom " href="../our-expertise/captivate-new-audiences/index.html"><h3>Captivate New Audiences</h3></a>
                    <a class="hover-red text-medium border-bottom " href="../our-expertise/command-a-premium/index.html"><h3>Command a Premium</h3></a>
                    <a class="hover-red text-medium border-bottom " href="../our-expertise/create-new-arenas/index.html"><h3>Create New Arenas</h3></a>
                    <a class="hover-red text-medium border-bottom " href="../our-expertise/design-a-growth-roadmap/index.html"><h3>Design a Growth Roadmap</h3></a>
                    <a class="hover-red text-medium border-bottom " href="../our-expertise/drive-portfolio-growth/index.html"><h3>Drive Portfolio Growth</h3></a>
                    <a class="hover-red text-medium border-bottom " href="../our-expertise/enhance-ma-or-spin-off-success/index.html"><h3>Enhance M&amp;A or Spin-off Success</h3></a>
                    <a class="hover-red text-medium border-bottom " href="../our-expertise/enrich-customer-experiences/index.html"><h3>Enrich Customer Experiences</h3></a>
                    <a class="hover-red text-medium border-bottom " href="../our-expertise/identify-new-revenue-opportunities/index.html"><h3>Identify New Revenue Opportunities</h3></a>
                    <a class="hover-red text-medium border-bottom " href="../our-expertise/launch-new-offers/index.html"><h3>Launch New Offers</h3></a>
                    <a class="hover-red text-medium border-bottom " href="../our-expertise/mobilize-talent/index.html"><h3>Mobilize Talent</h3></a>
                    <a class="hover-red text-medium border-bottom " href="../our-expertise/rethink-metrics/index.html"><h3>Rethink Metrics</h3></a>

                    <p class="menu-filter-description">
                        Can’t find what you’re looking for? <a href="../contact/index.html">Get in touch</a>
                    </p>

                </nav>

                <div class="menu-veil" id="menu-filter-veil"> </div>
            </div>
        </div>
    </div>
</header>
