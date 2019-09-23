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
        /*padding: 10px;*/
        font-size: 18px;
        color: #666;
    }
    .child li {
        line-height: 60px;
        border-bottom: solid 1px #8a8a8a;

    }
    .parent {
        font-size: 20px;
        color: #333;
    }

    .show {
        display: block;
    }
    .hide {
        display: none;
    }
</style>

@extends('layout/layout')
@section('css')
    <link href="https://cdn.bootcss.com/Swiper/4.5.0/css/swiper.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endsection
@section('content')
    <div class="main-container white-bg main-container-margin">
        <div class="wrap-iconic-case">
            <div class="related-content-row">
                <a href="{{ route('web.story.list', ['id' => 2]) }}" class="search-result-item">
                    <img src="../img/story_home_1st.jpg"
                         class="responsive">
                    <div class="overlay-text text-medium leading-small">
                        <h2 class="item-title">VI/CI 设计</h2>
                        <div class="item-subtitle">
                        </div>
                    </div>
                </a>
                <a href="{{ route('web.story.list', ['id' => 1]) }}" class="search-result-item">
                    <img src="../img/story_home_2nd.jpg"
                         class="responsive">
                    <div class="overlay-text text-medium leading-small">
                        <h2 class="item-title">行业经验</h2>
                        <div class="item-subtitle">
                        </div>
                    </div>
                </a>
            </div>
            <br>
            <br>
            <div class="text-image-row">
                {{--                这里是滑动导航--}}
                <div class="swiper-container">
                    <div class="swiper-wrapper ">
                        @foreach($nav as $key=>$list)
                            <div class="swiper-slide" style="width: 70px;">
                                <div class="parent" data="{{ $key }}">
                                    @if($key == 1)
                                        <span>VI / CI 设计</span>
                                        @else
                                    <span>行业经验</span>
                                        @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @foreach($nav as $key=>$list)
                        <ul class="child" id="{{$key}}">
                            @foreach($list as $item)
                                <li >
                                    <a href="{{ route('web.story.show', ['id' => $item['id']]) }}" style="color: #333">
                                        {{ $item['client_name'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
                <div class="clear"></div>
                {{--                .end 这里是滑动导航--}}

                <br>
                <br>
                <div class="image-text">
                    <div class="text-body">
                        <div class="row">
                            <div class="col-10">
                                <p>
                                    <span class="bold">客户:</span> {{ $story->client_name }}
                                </p>
                                <p>
                                    <span class="bold">类型:</span> {{ $story->type_name }}
                                </p>
                                <p>
                                    <span class="bold">内容:</span> {{ $story->content }}
                                </p>
                                <p>
                                    <span class="bold">时间:</span> {{ $story->date }}
                                </p>
                            </div>
                            <div class="col-2">
                                <img src="{{ 'http://' .env('CDN_DOMAIN').'/'. $story->logo }}" alt=""/>
                            </div>
                        </div>
                        <br>

                        {!! $story->background !!}
                    </div>
                    <br>
                    <br>
                    <div class="row" style="align-content: center">
                        @foreach($story->images as $image)
                            <div class="col-6" style="margin-bottom: 30px">
                                <img style="width: 100%" src="{{ 'http://' .env('CDN_DOMAIN').'/'. $image }}">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.bootcss.com/Swiper/4.5.0/js/swiper.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 4,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                type: 'fraction',
            },
        });
        $(function() {
            $('.parent').on('click',function(e) {
                // e.preventDefault();
                $('.parent').removeClass('red');
                $(this).addClass('red');
                var id = $(this).attr('data');
                $('.child').not('#'+id).hide();
                $('#'+id).toggle(400);
                // $(this).parent().siblings().children('.child').hide();
                // $(this).siblings().toggle(400)
            })
        })
    </script>
@endsection
