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

@extends('layout/layout')
@section('content')
    <div class="main-container white-bg full-main-container-margin">
        <div class="wrap-iconic-case">
            <div class="related-content-row" style="">
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
        </div>
        <br>
        <br>
        <div class="wrap-iconic-case">
            <div class="related-content-row" style="padding-top: 36px; justify-content: left">
                <div class="col-100 text-huge base-margin-bottom">
                    @if(request()->fullUrl() == route('web.story.list', ['type' => 1]))
                        <h2>行业经验</h2>
                    @else
                        <h2>CI 故事</h2>
                    @endif
                </div>
                @foreach($lists as $list)
                    <div class="col-25 block" style="padding: 0" id="{{ $list->id }}">
                        <p class="big-font">{{ $list->client_name }}</p>
                        <p class="small-font">{{ $list->sub_category }}</p>
                        <div class="mask" style="display: none"></div>
                    </div>
                @endforeach
            </div>
        </div>
        <br>
        <br>
    </div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $(".col-25").hover(function(){
            $(this).children(".mask").css("height",$(".block").height());
            $(this).children(".mask").css("width",$(".block").width());
            $(this).children("p.big-font").css('font-size', '34px');
            $(this).children("p.small-font").css('font-size', '22px');
            $(this).children(".mask").show();
        }, function(){
            $(this).children(".mask").hide();
            $(this).children("p.big-font").css('font-size', '30px');
            $(this).children("p.small-font").css('font-size', '18px');
        });

        $(".col-25").click(function () {
            var id = $(this).attr('id');
            window.location.href="../story/" + id;
        })
    });
</script>

