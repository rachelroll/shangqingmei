<style>
    .image-text .text-huge {
        margin-top: 80px;
    }

    .wrap-iconic-case .text-image-row div.single-image {
        background-color: #ddd;
        padding: 32px;
        margin-right: 30px;
    }

    .wrap-iconic-case .text-image-row div.single-image h1 {
        font-size: 18px;
        margin-bottom: 16px;
    }

    .wrap-iconic-case .text-image-row div.single-image ul li {
        margin: 10px 0;
        color: #666;
    }

    .images-row {
        margin: 20px 0;
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

    ul li a {
        color: #333;
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
        text-align: left;
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
        font-size: 16px;
        color: #666;
    }
    .child li {
        line-height: 60px;
        border-bottom: solid 1px #8a8a8a;

    }
    .parent span {
        font-size: 18px;
        font-weight: bold;
        color: #333;
    }
    .red {
        /*color: red;*/
        /*border-bottom: 1px solid #bd0202;*/
        background-image: url(../img/red-back.png);
    }

    .show {
        display: block;
    }
    .hide {
        display: none;
    }
</style>

@section('css')
    <link href="https://cdn.bootcss.com/Swiper/4.5.0/css/swiper.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endsection

@extends('layout/layout')
@section('content')
    <div class="main-container white-bg main-container-margin">
        <div class="wrap-iconic-case">
            <div class="related-content-row">
                <a href="{{ route('web.platform.brand-consult') }}" class="search-result-item">
                    <img src="../img/Interactive_home_1st.jpg"
                         class="responsive">
                    <div class="overlay-text text-medium leading-small">
                        <h2 class="item-title">在线咨询 & 留言</h2>
                        <div class="item-subtitle">
                        </div>
                    </div>
                </a>

                <a href="{{ route('web.platform.opinion') }}" class="search-result-item">
                    <img src="../img/Interactive_home_2nd.jpg"
                         class="responsive">
                    <div class="overlay-text text-medium leading-small">
                        <h2 class="item-title">视野观点</h2>
                        <div class="item-subtitle">
                        </div>
                    </div>
                </a>
            </div>
            <br>
            <h1 class="zaixianzixun">形象传奇</h1>
            <div class="text-image-row">
                @if(Agent::isDesktop())
                    <div class="single-image">
                    @foreach($lists as $key => $list)
                        <div class="red-border-box">
                            <h1>{{ $key }}</h1>
                        </div>
                        <ul>
                            @foreach($list as $item)
                                <li @if(request()->fullUrl() == route('web.platform.chuanqi', ['id' => $item->id])) style="color:red" @endif>
                                    <a href="{{ route('web.platform.chuanqi', ['id' => $item->id]) }}">- {{ $item->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
                @else
                    {{--                这里是滑动导航--}}
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach($lists as $key=>$list)
                                <div class="swiper-slide" style="width: 70px;">
                                    <div class="parent" data="{{ $list->id }}">
                                        <span>{{ $key }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @foreach($lists as $key=>$list)
                            <ul class="child" id="{{$list->id}}">
                                @foreach($list as $item)
                                    <li >
                                        <a href="{{ route('web.project.show', ['id' => $item->id]) }}" style="color: #333">
                                            {{ $item->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endforeach
                    </div>

                    <div class="clear"></div>
                    {{--                .end 这里是滑动导航--}}
                @endif
                <div class="image-text">
                    {!! $chuanqi->content !!}
                </div>
            </div>
            @include('platform/message')
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.bootcss.com/Swiper/4.5.0/js/swiper.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                type: 'fraction',
            },
        });
        $(function() {
            $('.parent').on('click',function(e) {
                // e.preventDefault();
                $('.parent').children().removeClass('red');
                $(this).children().addClass('red');
                var id = $(this).attr('data');
                $('.child').not('#'+id).hide();
                $('#'+id).toggle(400);
                // $(this).parent().siblings().children('.child').hide();
                // $(this).siblings().toggle(400)
            })
        })
    </script>
@endsection
