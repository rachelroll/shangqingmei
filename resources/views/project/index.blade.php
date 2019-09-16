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
                服务案例
            </div>
            <hr>
            <div class="small">
                成就客户的品牌才能铸就成功案例, 只有成功案例才能证明我们的价值
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
                <a href="{{ route('web.project.list', ['id' => 1]) }}">
                    <div class="section-content image-bg center-content" style="background-image: url('../img/case_home_1st.jpg'); color: #ffffff; text-align: center  ">
                        <div class="content-textbox " style="color: #ffffff; text-align: center">
                            <p>CASE: A</p>
                            <br/>
                            <h1>
                                CIS 导入案例
                            </h1>
                        </div>
                    </div>
                </a>
            </div>

            <div class="row front-page-section image-text-section" >
                <a href="{{ route('web.project.list', ['id' => 2]) }}">
                    <div class="section-content image-bg center-content" style="background-image: url('../img/case_home_2nd.jpg'); color: #ffffff; text-align: center  ">
                        <div class="content-textbox " style="color: #ffffff; text-align: center">
                            <p>CASE: B</p>
                            <br/>
                            <h1>
                                品牌设计案例
                            </h1>
                        </div>
                    </div>
                </a>
            </div>

            <div class="row front-page-section image-text-section" >
                <a href="{{ route('web.project.list', ['id' => 3]) }}">
                    <div class="section-content image-bg center-content" style="background-image: url('../img/case_home_3rd.jpg'); color: #ffffff; text-align: center  ">
                        <div class="content-textbox " style="color: #ffffff; text-align: center">
                            <p>CASE: C</p>
                            <br/>
                            <h1>
                                环境规划案例
                            </h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
