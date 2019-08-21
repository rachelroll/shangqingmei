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

@extends('layout/layout')
@section('content')
    <div class="main-container white-bg main-container-margin">
        <div class="wrap-iconic-case">
            <div class="related-content-row" style="padding-top: 36px">
                <a href="{{ route('web.story.list', ['id' => 2]) }}" class="search-result-item">
                    <img src="../../wp-content/uploads/2019/03/Sensodyne-True-White-Group.png"
                         class="responsive">
                    <div class="overlay-text text-medium leading-small">
                        <h2 class="item-title">VI/CI 设计</h2>
                        <div class="item-subtitle">
                        </div>
                    </div>
                </a>
                <a href="{{ route('web.story.list', ['id' => 1]) }}" class="search-result-item">
                    <img src="../../wp-content/uploads/2019/03/65883ce860-Recovered.png"
                         class="responsive">
                    <div class="overlay-text text-medium leading-small">
                        <h2 class="item-title">行业经验</h2>
                        <div class="item-subtitle">
                        </div>
                    </div>
                </a>
            </div>
            <div class="text-image-row">
                <div class="single-image">
                    @foreach($nav as $key => $list)
                        <h1>{{ $key }}</h1>
                        <ul>
                            @foreach($list as $item)
                                <li>- {{ $item }}</li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
                <div class="image-text">
                    <div class="text-body">
                        <p>
                            客户: {{ $story->client_name }}
                        </p>
                        <p>
                            类型: {{ $story->type_name }}
                        </p>
                        <p>
                            内容: {{ $story->content }}
                        </p>
                        <p>
                            时间: {{ $story->date }}
                        </p>
                    </div>
                    <div class="images-group">
                        @foreach($story->images as $image)
                            <div class="images-row">
                                <div class="col">
                                    <img src="{{ 'http://' .env('CDN_DOMAIN').'/'. $image }}">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
