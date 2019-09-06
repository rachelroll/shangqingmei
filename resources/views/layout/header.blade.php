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
                        服务案例
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
                搜索案例
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
                    <form role="search" method="post" autocomplete="off" action="{{ route('web.project.search') }}">
                        @csrf
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
                    @if($projects)
                        @foreach($projects as $item)
                    <a class="hover-red text-medium border-bottom " href="{{ route('web.project.show', ['id' => $item->id]) }}"><h3>{{ $item->title }}</h3></a>
                        @endforeach
                    @endif
                    <p class="menu-filter-description">
                        没有找到您想要的? <a href="{{ route('web.platform.index') }}">联系我们</a>
                    </p>
                </nav>

                <div class="menu-veil" id="menu-filter-veil"> </div>
            </div>
        </div>
    </div>
</header>
