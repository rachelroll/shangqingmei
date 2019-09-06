<style type="text/css">
    .mask {
        position: absolute;
        top: 0px;
        filter: alpha(opacity=60);
        background-color: #5f6061;
        z-index: 1002;
        /*left: 21px;*/
        opacity:0.8;
        -moz-opacity:0.5;
        /*padding: 20px 16px 16px;*/
        font-size: 16px;
        line-height: 30px;
        color: white;
    }

    .block {
        height: 296px;
        padding: 0;
        text-align: center;
        background-color: #ddd;
        color: #333;
        font-family: "Microsoft Sans Serif";
    }

    .block p.big-font{
        font-size: 30px;
        margin-top: 120px;
    }

    .block p.small-font {
        font-size: 18px;
        margin-top: 16px;
    }
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


@extends('layout/layout')
@section('content')
    <div class="main-container white-bg full-main-container-margin">
        <div class="wrap-iconic-case">
            <br>
            <br>
            <div style="font-size: 28px">
                <span style="color: #666">关于</span> "{{ $s }}" <span style="color: #666">的搜索结果</span>
            </div>
            <hr style="border: 1px solid black">
        </div>
        <br>
        <br>
        <div class="wrap-iconic-case">
            <div class="row">
                @if(!$projects->isEmpty())
                    @foreach($projects as $project)
                        <div class="col-4" style="padding: 20px">
                            <div style="margin-bottom: 10px">
                                <img style="width: 100%" src="{{ env('CDN_DOMAIN','//oss-cn-beijing.aliyuncs.com') . '/' . $project->cover }}" alt=""/>
                            </div>
                            <p style="text-align: center; font-size: 18px">{{ $project->title }}</p>
                        </div>
                        <br>
                    @endforeach
                @else
                    <div class="col-12" style="text-align: center">
                        <p>抱歉, 暂无您搜索的案例!</p>
                    </div>
                @endif
            </div>
        </div>
        <br>
        <br>
    </div>
@endsection


