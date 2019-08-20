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
        <div class="row hero-row image-row">
            <div class="hero-container image-container" style="background-image: url( '../../wp-content/uploads/2016/09/mini-hero.jpg' );">
                <div class="overlay-hero">
                    <div class="overlay-hero-title ">
                        <h3 class="text-medium">作业八法</h3>
                        <h1 class="text-huge ">独具特色的尚清美八法</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrap-iconic-case">
            <div class="related-content-row">
                <a href="{{ route('web.service.show', ['id' => 2]) }}" class="search-result-item">
                    <img src="../../wp-content/uploads/2019/03/Sensodyne-True-White-Group.png"
                         class="responsive">
                    <div class="overlay-text text-medium leading-small">
                        <div class="item-tag">整体作业方案</div>
                        <h2 class="item-title">提供品牌建设的整体解决方案</h2>
                        <div class="item-subtitle">
                        </div>
                    </div>
                </a>

                <a href="{{ route('web.service.show', ['id' => 3]) }}" class="search-result-item">
                    <img src="../../wp-content/uploads/2019/03/65883ce860-Recovered.png"
                         class="responsive">
                    <div class="overlay-text text-medium leading-small">
                        <div class="item-tag">业务流程</div>
                        <h2 class="item-title">提供品牌建设的整体解决方案</h2>
                        <div class="item-subtitle">
                        </div>
                    </div>
                </a>
            </div>
            <div class="images-group">
                <div class="images-row">
                    <div class="col"  style="margin-top: 30px;">
                        <img src="{{ 'http://' .env('CDN_DOMAIN').'/'. $project->cover }}">
                    </div>
                </div>
            </div>
            <div class="text-image-row">
                <div class="single-image">
                    @foreach($lists as $list)
                    <h1>{{ $list->title }}</h1>
                    <ul>
                        @foreach($list->projects as $item)
                        <li>- {{ $item->title }}</li>
                            @endforeach
                    </ul>
                    @endforeach
                </div>
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
                    <div class="images-group">
                        @foreach($project->images as $image)
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
