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
                互动平台
            </div>
            <hr>
            <div class="small">
                这是我们为客户推出的一项免费服务，如果您对目前的品牌建设有不满意之处，意欲寻找解决办法，我们愿从专业角度为您做一次初步诊断和改进建议。
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
                <a href="{{ route('web.platform.brand-consult') }}">
                    <div class="section-content image-bg center-content" style="background-image: url('../img/Interactive_home_1st.jpg'); color: #ffffff; text-align: center  ">
                        <div class="content-textbox " style="color: #ffffff; text-align: center">
                            <br/>
                            <h1>
                                在线咨询 & 留言
                            </h1>
                        </div>
                    </div>
                </a>
            </div>

            <div class="row front-page-section image-text-section" >
                <a href="{{ route('web.platform.opinion') }}">
                    <div class="section-content image-bg center-content" style="background-image: url('../img/Interactive_home_2nd.jpg'); color: #ffffff; text-align: center  ">
                        <div class="content-textbox " style="color: #ffffff; text-align: center">
                            <br/>
                            <h1>
                                视野观点
                            </h1>
                        </div>
                    </div>
                </a>
            </div>

            <div class="row front-page-section image-text-section" >
                <a href="{{ route('web.platform.chuanqi', ['id' => 1]) }}">
                    <div class="section-content image-bg center-content" style="background-image: url('../img/Interactive_home_3rd.jpg'); color: #ffffff; text-align: center  ">
                        <div class="content-textbox " style="color: #ffffff; text-align: center">
                            <br/>
                            <h1>
                                形象传奇
                            </h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
