<link href="//vjs.zencdn.net/7.3.0/video-js.min.css" rel="stylesheet">
<script src="//vjs.zencdn.net/7.3.0/video.min.js"></script>

@extends('layout/layout')
@section('content')
<div class="full-main-container white-bg full-main-container-margin">
    <div class=" remove-top-padding wrap-content">
        <a class="down-cta">
            <img class="arrow main-arrow" src="../wp-content/themes/interbrand/img/m-arr1.svg" />
            <img class="arrow second-arrow" src="../wp-content/themes/interbrand/img/m-arr2.svg" />
            <img class="arrow third-arrow" src="../wp-content/themes/interbrand/img/m-arr3.svg" />
        </a>

        <div class="row front-page-section image-text-section" >
            <div class="section-content image-bg center-content" style="background-image: url({{ 'https://'. env('CDN_DOMAIN') . '/img/home_1st_jpg.jpg' }}); color: #ffffff; text-align: center  ">
                <div class="content-textbox " style="color: #ffffff; text-align: center">
                    <h1>CIS 案例导入</h1>
                    <br/>
                    <p>
                        在多年的业务实践中，尚清美参与了近百个各种类型的CI与品牌规划作业，积累了丰富的作业经验。
                    </p>
                </div>

                <a href="{{ route('web.project.list', ['id' => 1]) }}"  target="_blank" class="move-button draw-border-white">
                    查看详情
                </a>
            </div>
        </div>

        <div class="row front-page-section image-text-section" >
            <div class="section-content image-bg center-content" style="background-image: url({{ 'https://'. env('CDN_DOMAIN') . '/img/home_2nd_jpg.jpg' }}); color: #ffffff; text-align: center  ">
                <div class="content-textbox " style="color: #ffffff; text-align: center">
                    <h1>品牌案例设计</h1>
                    <br/>
                    <p>
                        越来越多的企业意识到品牌的重要性，开始创造属于自己的图腾文化。
                    </p>

                    <br>
                    <p>
                        从本质上说，品牌是在传递一种信息。
                    </p>
                </div>
                <a href="{{ route('web.project.list', ['id' => 2]) }}"  target="_blank" class="move-button draw-border-white">
                    查看详情
                </a>
            </div>
        </div>

        <div class="row front-page-section image-text-section" >
            <div class="section-content image-bg center-content" style="background-image: url({{ 'https://'. env('CDN_DOMAIN') . '/img/home_3rd_jpg.jpg' }}); color: #ffffff; text-align: center  ">
                <div class="content-textbox " style="color: #ffffff; text-align: center">
                    <h1>环境规划</h1>
                    <br/>
                    <p>
                        环境给予人的影响是那么直接而强烈，在环境识别设计、专卖店设计、主题环境方面，我们将品牌意识融入立体的形式与空间，形成品牌体验，建立个性鲜活的品牌传播力。
                    </p>
                </div>
                <a href="{{ route('web.project.list', ['id' => 3]) }}"  target="_blank" class="move-button draw-border-white">
                    查看详情
                </a>
            </div>
        </div>

        <div class="front-page-section video-section responsive-video" id = "video1">
            <video
                class="video-js vjs-fluid"
                autoplay
                muted
                style="float:left; z-index:-1"
                class="video-js"
                controls
                preload="auto"
                data-setup='{ "autoplay": true, "preload": "auto", "loop":true }'
            >
                <source src="{{ 'https://' .env('CDN_DOMAIN'). '/video/video1.mp4' }}" type="video/mp4">
            </video>
        </div>

        <div class="front-page-section video-section responsive-video" id = "video2">
            <video
                class="video-js vjs-fluid"
                autoplay
                muted
                style="float:left; z-index:-1"
                class="video-js"
                controls
                preload="auto"
                {{--            width="100%"--}}
                data-setup='{ "autoplay": true, "preload": "auto", "loop":true }'
                {{--            poster="https://zhongfu-company.oss-cn-hangzhou.aliyuncs.com/yxj/WechatIMG8.png"--}}
            >
                <source src="{{ 'https://' .env('CDN_DOMAIN'). '/video/video2.mp4' }}" type="video/mp4">
            </video>
        </div>
    </div>
</div>
@endsection

<script src="../wp-content/themes/interbrand/vendor/jquery/dist/jquery.js"></script>
<script>
    $(function () {
        $('#video1').click(function(){
            window.location = '../service';
        });

        $('#video2').click(function(){
            window.location = '../stroy';
        });
    })
</script>
