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
</style>

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
            <div class="related-content-row" style="padding-top: 10px">
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
                @foreach($lists as $list)
                    @foreach($list->projects as $item)
                        <div class="image-text">
                            <div class="text-body">
                                <p style="margin-bottom: 20px">
                                    {{ $item->title }}
                                </p>
                            </div>
                            <a href="{{ route('web.project.show', ['id' => $item->id]) }}">
                                <div class="images-group">
                                    <div class="images-row">
                                        <div class="col">
                                            <img src="{{ 'http://' .env('CDN_DOMAIN').'/'. $item->cover }}">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection
