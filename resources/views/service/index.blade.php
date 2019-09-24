<style>
    .title {
        width: 100%;
        padding: 0 40px;
        margin: 40px 0;
    }

    .title .big {
        font-size: 36px;
        margin-bottom: 14px;
        font-family: "Microsoft Sans Serif";
        color: #333;
    }

    .title .small {
        font-size: 18px;
        color: #333;
        margin-top: 14px;
        font-family: "Microsoft Sans Serif";
    }

    .title hr {
        background-color: black;
        height: 1px; border: none;
    }
</style>
@extends('layout/layout')
@section('content')
    <div class="main-container">
        <div class="title">
            <div class="big">
                服务能力
            </div>
            <hr>
            <div class="small">
                基于理解、连接和帮助他人的驱动力，以及深入倾听、参与和探索不同视角和经验的能力。
            </div>
        </div>
    </div>
    <div class="full-main-container white-bg full-main-container-margin">
        <div class=" remove-top-padding wrap-content">
            <a class="down-cta">
                <img class="arrow main-arrow" src="../wp-content/themes/interbrand/img/m-arr1.svg" />
                <img class="arrow second-arrow" src="../wp-content/themes/interbrand/img/m-arr2.svg" />
                <img class="arrow third-arrow" src="../wp-content/themes/interbrand/img/m-arr3.svg" />
            </a>

            <div class="row front-page-section image-text-section" >
                <a href="{{ route('web.service.show', ['id' => 1]) }}">
                    <div class="section-content image-bg center-content" style="background-image: url('../img/Ability_home_1st.jpg'); color: #ffffff; text-align: center  ">
                        <div class="content-textbox " style="color: #ffffff; text-align: center;">
                            <h1>作业八法</h1>
                            <br/>
                            <p>
                                独具特色的尚清美八法
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="row front-page-section image-text-section" >
                <a href="{{ route('web.service.show', ['id' => 3]) }}">
                    <div class="section-content image-bg center-content" style="background-image: url('../img/Ability_home_2nd.jpg'); color: #ffffff; text-align: center  ">
                        <div class="content-textbox " style="color: #ffffff; text-align: center">
                            <h1>整体作业方案</h1>
                            <br/>
                            <p>
                                提供品牌建设的整体解决方案
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="row front-page-section image-text-section" >
                <a href="{{ route('web.service.show', ['id' => 2]) }}">
                    <div class="section-content image-bg center-content" style="background-image: url('../img/Ability_home_3rd.jpg'); color: #ffffff; text-align: center  ">
                        <div class="content-textbox " style="color: #ffffff; text-align: center">
                            <h1>业务流程</h1>
                            <br/>
                            <p>
                                品牌规划的全程策略伙伴
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
