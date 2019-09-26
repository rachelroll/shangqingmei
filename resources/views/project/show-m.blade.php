@extends('layout/layout')
@section('css')
    <link href="https://cdn.bootcss.com/Swiper/4.5.0/css/swiper.min.css" rel="stylesheet">
@endsection
@section('style')
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
        /* clear float */
        .clear:after {
            display: block;
            clear: both;
            content: "";
            visibility: hidden;
            height: 0
        }

        .clear {
            zoom: 1

        }
        /* end clear float */
        .swiper-container .swiper-wrapper {
            position: relative;
        }
        .swiper-container .swiper-wrapper .swiper-slide {
            /*border: 1px solid red;*/
            text-align: center;
            padding: 6px 0;
        }
        .child {
            display: none;
            /*position: absolute;*/
            /*z-index:999;*/
            /*top: 100px;*/
            width: 100%;
            font-weight: normal;
            padding: 10px;
            font-size: 18px;
            color: #666;
        }
        .child li {
            line-height: 60px;
            border-bottom: solid 1px #8a8a8a;

        }
        .parent {
            font-size: 20px;
            color: #666;

        }

        .show {
            display: block;
        }
        .hide {
            display: none;
        }

        .horizontal-container {
            margin: 0 auto;
            /*background-color: #f4ffe3;*/
            width: 100%;
            position: relative;
            /*border: 1px solid #e0ebcf;*/
        }
        .scroll-wrapper::-webkit-scrollbar {
            display: none;
        }
        .scroll-wrapper{
            margin: 0 auto;
            /* overflow: hidden; */
            border-radius: 5px;
            overflow-x: auto;
            -webkit-backface-visibility: hidden;
            -webkit-overflow-scrolling: touch; /* 2 */
        }
        .scroll-content {
            display: inline-block;
            white-space: nowrap;
        }
        .scroll-item {
            height: 48px;
            font-size: 24px;
            line-height: 48px;
            display: inline-block;
            padding: 0 10px;
        }

        .dropdown {
            display: none;
            width: 100%;
            padding: 0 10px;
            font-weight: normal;
            font-size: 20px;
            color: #666;
        }
        .dropdown li {
            line-height: 60px;
            border-bottom: solid 1px #8a8a8a;
        }

        .text-red {
            color: black;
            font-weight: bold;
            background-image: url(../img/red-back.png);
        }
    </style>
@endsection

@section('content')
    <div class="main-container white-bg main-container-margin">
        <div class="wrap-iconic-case">
            @if(request()->fullUrl() == route('web.project.list', ['id' => 3]))
                <div class="related-content-row" style="padding-top: 10px">
                    <a href="{{ route('web.project.list', ['id' => 1]) }}" class="search-result-item">
                        <img src="../img/case_home_1st.jpg"
                             class="responsive">
                        <div class="overlay-text text-medium leading-small">
                            <div class="item-tag">CASE: A</div>
                            <h2 class="item-title">CIS 导入案例</h2>
                            <div class="item-subtitle">
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('web.project.list', ['id' => 2]) }}" class="search-result-item">
                        <img src="../img/case_home_2nd.jpg"
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
                        <img src="../img/case_home_1st.jpg"
                             class="responsive">
                        <div class="overlay-text text-medium leading-small">
                            <div class="item-tag">CASE: A</div>
                            <h2 class="item-title">CIS 导入案例</h2>
                            <div class="item-subtitle">
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('web.project.list', ['id' => 3]) }}" class="search-result-item">
                        <img src="../img/case_home_3rd.jpg"
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
                        <img src="../img/case_home_2nd.jpg"
                             class="responsive">
                        <div class="overlay-text text-medium leading-small">
                            <div class="item-tag">CASE: B</div>
                            <h2 class="item-title">品牌设计案例</h2>
                            <div class="item-subtitle">
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('web.project.list', ['id' => 3]) }}" class="search-result-item">
                        <img src="../img/case_home_3rd.jpg"
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

            <div class="text-image-row">
                {{--                这里是滑动导航--}}
                <div class="horizontal-container">
                    <div class="scroll-wrapper" ref="scroll">
                        <div class="scroll-content">
                            @foreach($lists as $key=>$list)
                                <div class="scroll-item" data="{{ 'a' . $key }}">
                                    <span>{{ $list->title }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @foreach($lists as $key=>$list)
                        <ul class="dropdown" id="{{ 'a' . $key}}">
                            @foreach($list->projects as $item)
                                <li>
                                    <a href="{{ route('web.platform.chuanqi', ['id' => $item->id]) }}" style="color: #333">
                                        {{ $item->title }}
                                    </a>
                                </li>
                            @endforeach
                                <br>
                        </ul>
                    @endforeach
                </div>
                <br>
                <hr style="margin-top: 20px; border-top: 4px solid #444;">
                {{--                .end 这里是滑动导航--}}

                <br>
                <br>
                <div class="image-text">
                    <div class="text-body">
                        <p style="margin-bottom: 20px; font-weight: bold">
                            {{ $project->title }}
                        </p>
                        <p>
                            客户: {{ $project->client }}
                        </p>
                        <p>
                            类型: {{ $project->type }}
                        </p>
                        <p>
                            内容: {{ $project->content }}
                        </p>
                        <p>
                            时间: {{ $project->date }}
                        </p>
                    </div>
                    <br>
                    @foreach($project->images as $image)
                        <div class="images-group" style="margin-bottom: 30px">
                            <div class="images-row">
                                <div class="col">
                                    <img src="{{ 'http:' .env('CDN_DOMAIN').'/'. $image }}">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <br>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://jkwedu-new.oss-cn-beijing.aliyuncs.com/script/bscroll.min.js"></script>
    <script>
        window.onload = function () {
            let wrapper = document.querySelector('.scroll-wrapper')
            let scroll = new BScroll(wrapper, {
                scrollX: true,
                scrollY: false,
                click: true,
            })
        }

        $(function() {
            $('.scroll-item').on('click',function(e) {
                // e.preventDefault();
                $('.scroll-item').children().removeClass('text-red');
                $(this).children().addClass('text-red');
                var id = $(this).attr('data');
                $('.dropdown').not('#'+id).hide();
                $('#'+id).toggle(200);
            })
        })
    </script>
@endsection


