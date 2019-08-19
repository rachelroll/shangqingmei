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
            <div class="section-content image-bg center-content" style="background-image: url('../img/welcome1.jpg'); color: #ffffff; text-align: center  ">
                <div class="content-textbox " style="color: #ffffff; text-align: center">
                    <h1>CIS 案例导入</h1>
                    <br/>
                    <p>
                        在多年的业务实践中，尚清美参与了近百个各种类型的CI与品牌规划作业，积累了丰富的作业经验。
                        视觉识别也好，形象设计也好，我们认为CI首先是一种规划，是建立在企业理念和未来发展规划上的形象构想。规划的初衷，是建立科学化的视觉传达体系；终极的目标，是实现客户与社会的良性沟通。
                    </p>
                </div>

                <a href="https://jobs.lever.co/interbrand"  target="_blank" class="move-button draw-border-white">
                    查看详情
                </a>
            </div>
        </div>

        <div class="row front-page-section image-text-section" >
            <div class="section-content image-bg center-content" style="background-image: url('../img/welcome2.jpg'); color: #ffffff; text-align: center  ">
                <div class="content-textbox " style="color: #ffffff; text-align: center">
                    <h1>品牌案例设计</h1>
                    <br/>
                    <p>
                        越来越多的企业意识到品牌的重要性，开始创造属于自己的图腾文化。
                        从本质上说，品牌是在传递一种信息。品牌不单单是一种名称、标记、符号或设计，或它们的组合运用，更重要的是品牌所传递的价值、文化和个性，它们确定了品牌的基础。 我们的作业核心是发现价值，然后权衡和重组品牌规划
                    </p>
                </div>
                <a href="https://jobs.lever.co/interbrand"  target="_blank" class="move-button draw-border-white">
                    查看详情
                </a>
            </div>
        </div>

        <div class="row front-page-section image-text-section" >
            <div class="section-content image-bg center-content" style="background-image: url('../img/welcome3.jpg'); color: #ffffff; text-align: center  ">
                <div class="content-textbox " style="color: #ffffff; text-align: center">
                    <h1>环境规划</h1>
                    <br/>
                    <p>
                        环境给予人的影响是那么直接而强烈，在环境识别设计、专卖店设计、主题环境方面，我们将品牌意识融入立体的形式与空间，形成品牌体验，建立个性鲜活的品牌传播力。
                    </p>
                </div>
                <a href="https://jobs.lever.co/interbrand"  target="_blank" class="move-button draw-border-white">
                    查看详情
                </a>
            </div>
        </div>

        {{--            video one--}}
        <div class="row front-page-section video-section responsive-video ">
            <iframe allowfullscreen="allowfullscreen" frameborder="0" mozallowfullscreen="mozallowfullscreen" src="https://zhongfu-company.oss-cn-hangzhou.aliyuncs.com/shangqingmei/video1.mp4" webkitallowfullscreen="webkitallowfullscreen"></iframe>
            <div class="section-content center-content">
                <div class="content-textbox " style="color: #ffffff; text-align: center">
                    <h1> </h1>
                    <br/>
                    <p>

                    </p>
                </div>
            </div>

            <img class="video-placeholder" src="../wp-content/uploads/2019/03/SCREEN-07.36.05-.png"/>
        </div>

        {{--            video two--}}
        <div class="row front-page-section video-section responsive-video ">
            <iframe allowfullscreen="allowfullscreen" frameborder="0" mozallowfullscreen="mozallowfullscreen" src="https://zhongfu-company.oss-cn-hangzhou.aliyuncs.com/shangqingmei/video2.mp4" webkitallowfullscreen="webkitallowfullscreen"></iframe>
            <div class="section-content center-content">
                <div class="content-textbox " style="color: #ffffff; text-align: center">
                    <h1> </h1>
                    <br/>
                    <p>

                    </p>
                </div>
            </div>

            <img class="video-placeholder" src="../wp-content/uploads/2019/03/SCREEN-07.36.05-.png"/>
        </div>

    </div>
</div>
@endsection
