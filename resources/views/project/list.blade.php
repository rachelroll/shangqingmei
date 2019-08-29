<style>
    .wrap-iconic-case .text-image-row div.single-image {
        background-color: #ddd;
        padding: 32px;
        margin-right: 30px;
    }
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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

        <br>
        <br>
        <div class="wrap-iconic-case">
            @if(request()->fullUrl() == route('web.project.list', ['id' => 3]))
                <div class="related-content-row" style="padding-top: 10px">
                    <a href="{{ route('web.project.list', ['id' => 1]) }}" class="search-result-item">
                        <img src="../../wp-content/uploads/2019/03/Sensodyne-True-White-Group.png"
                             class="responsive">
                        <div class="overlay-text text-medium leading-small">
                            <div class="item-tag">CASE: A</div>
                            <h2 class="item-title">CIS 导入案例</h2>
                            <div class="item-subtitle">
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('web.project.list', ['id' => 2]) }}" class="search-result-item">
                        <img src="../../wp-content/uploads/2019/03/65883ce860-Recovered.png"
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
                        <img src="../../wp-content/uploads/2019/03/Sensodyne-True-White-Group.png"
                             class="responsive">
                        <div class="overlay-text text-medium leading-small">
                            <div class="item-tag">CASE: A</div>
                            <h2 class="item-title">CIS 导入案例</h2>
                            <div class="item-subtitle">
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('web.project.list', ['id' => 3]) }}" class="search-result-item">
                        <img src="../../wp-content/uploads/2019/03/65883ce860-Recovered.png"
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
                        <img src="../../wp-content/uploads/2019/03/Sensodyne-True-White-Group.png"
                             class="responsive">
                        <div class="overlay-text text-medium leading-small">
                            <div class="item-tag">CASE: B</div>
                            <h2 class="item-title">品牌设计案例</h2>
                            <div class="item-subtitle">
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('web.project.list', ['id' => 3]) }}" class="search-result-item">
                        <img src="../../wp-content/uploads/2019/03/65883ce860-Recovered.png"
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
                <div class="single-image" style="position: relative">
                    @foreach($lists as $list)
                        <div style="border-left: 4px solid red; padding-left: 30px; position: absolute; left: -1px; height: 32px">
                            <h1>{{ $list->title }}</h1>
                        </div>
                        <div style="clear: both"></div>
                        <ul style="margin-top: 46px; margin-bottom: 10px">
                            @foreach($list->projects as $item)
                                <li>- {{ $item->title }}</li>
                                @endforeach
                        </ul>
                    @endforeach
                </div>

                <div class="image-text">
                    @foreach($lists as $list)
                        @foreach($list->projects as $item)<div class="text-body">
                            <h1 style="margin: 20px 0">
                                {{ $item->title }}
                            </h1>
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
