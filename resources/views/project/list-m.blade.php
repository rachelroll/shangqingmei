@extends('layout/layout')
@section('css')
    <link href="https://cdn.bootcss.com/Swiper/4.5.0/css/swiper.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
            /*text-align: center;*/
            padding: 6px 0;
        }
        .child {
            display: none;
            /*position: absolute;*/
            /*z-index:999;*/
            /*top: 100px;*/
            width: 100%;
            font-weight: normal;
            /*padding: 10px;*/
            font-size: 18px;
            color: #666;
        }
        .child li {
            line-height: 60px;
            border-bottom: solid 1px #8a8a8a;

        }
        .parent {
            font-size: 18px;
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

        .h5, h5 {
            font-size: 1.1rem;
        }
    </style>
@endsection

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
                <div class="image-text">
                    @foreach($lists as $list)
                        @foreach($list->projects as $item)
                            <div class="text-body">
                            <h5 style="margin: 20px 0">
                                {{ $item->title }}
                            </h5>
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
