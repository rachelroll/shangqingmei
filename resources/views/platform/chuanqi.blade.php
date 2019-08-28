<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    .wrap-iconic-case .text-image-row div.single-image {
        background-color: #ddd;
        padding: 32px;
        margin-right: 30px;
    }
</style>

@extends('layout/layout')
@section('content')
    <div class="main-container white-bg main-container-margin">
        <div class="wrap-iconic-case">
            <div class="related-content-row">
                <a href="{{ route('web.platform.brand-consult') }}" class="search-result-item">
                    <img src="../../wp-content/uploads/2019/03/Sensodyne-True-White-Group.png"
                         class="responsive">
                    <div class="overlay-text text-medium leading-small">
                        <h2 class="item-title">在线咨询 & 留言</h2>
                        <div class="item-subtitle">
                        </div>
                    </div>
                </a>

                <a href="{{ route('web.platform.opinion') }}" class="search-result-item">
                    <img src="../../wp-content/uploads/2019/03/65883ce860-Recovered.png"
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
                <div class="single-image">
                    @foreach($lists as $key => $list)
                    <h1>{{ $key }}</h1>
                        <ul>
                            @foreach($list as $item)
                                <li @if(request()->fullUrl() == route('web.platform.chuanqi', ['id' => $item->id])) style="color:red" @endif>
                                    <a href="{{ route('web.platform.chuanqi', ['id' => $item->id]) }}">- {{ $item->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
                <div class="image-text">
                    {!! $chuanqi->content !!}
                </div>
            </div>
            @include('platform/message')
        </div>
    </div>
@endsection
