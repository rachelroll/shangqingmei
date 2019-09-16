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
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@extends('layout/layout')
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
                <div class="single-image">
                    @foreach($nav as $key => $list)
                        <div class="red-border-box">
                            @if( $key == 1 )
                            <h1>VI / CI 设计</h1>
                            @else
                            <h1>行业经验</h1>
                            @endif
                        </div>
                        <ul>
                            @foreach($list as $item)
                                <li @if(request()->fullUrl() == route('web.story.show', ['id' => $item['id']])) style="color: red" @endif   >
                                    <a href="{{ route('web.story.show', ['id' => $item['id']]) }}">
                                        - {{ $item['client_name'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
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
                    <div class="row">
                        @foreach($story->images as $image)
                            <div class="col-6" style="margin-bottom: 30px">
{{--                                <div class="col">--}}
                                    <img src="{{ 'http://' .env('CDN_DOMAIN').'/'. $image }}">
{{--                                </div>--}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
