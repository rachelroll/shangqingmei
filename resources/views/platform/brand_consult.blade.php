@extends('layout/layout')
@section('css')
    <link href="https://jkwedu-new.oss-cn-beijing.aliyuncs.com/public-cdn/bootstrap/4.3/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/Swiper/4.5.0/css/swiper.min.css" rel="stylesheet">
@endsection

@section('style')
    <style>
        .wrap-iconic-case .text-image-row div.single-image {
            background-color: #ddd;
            padding: 32px;
            margin-right: 30px;
        }
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

        .images-row {
            margin: 20px 0;
        }

        ul.nav {
            background-color: #333;
            overflow: auto;
            /*white-space: nowrap;*/
        }

        li.nav-item {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px;
            text-decoration: none;
        }

        ul li a {
            color: #333;
        }

        div.scrollmenu {
            background-color: #333;
            overflow: auto;
            white-space: nowrap;
        }

        div.scrollmenu div {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px;
            text-decoration: none;
        }

        div.scrollmenu div:hover {
            background-color: #777;
        }
        /* clear float */
        .clear:after {
            display: block;
            clear: both;
            content: "";
            visibility: hidden;
            height: 0
        }

        .clear {
            zoom: 1

        }


    </style>
@stop


@section('content')

    @include('layout/flash_session')

    <div class="main-container white-bg main-container-margin">
        <div class="wrap-iconic-case">
            @include('platform/consult-banner')
            <br>
            <h1 class="zaixianzixun">在线咨询</h1>
            <div class="text-image-row">
                @include('platform/nav')
                <div class="image-text">
                    <form method="post" action="{{ route('web.platform.consult-store') }}">
                        @csrf
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-3 pt-0">您需要的品牌服务是:</legend>
                                <div class="col-sm-9">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="service" id="service1"
                                               value="规划" checked>
                                        <label class="form-check-label" for="service1">
                                            规划
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="service" id="service2"
                                               value="建立">
                                        <label class="form-check-label" for="service2">
                                            建立
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="service" id="service3"
                                               value="管理">
                                        <label class="form-check-label" for="service3">
                                            管理
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="service" id="service4"
                                               value="评估">
                                        <label class="form-check-label" for="service4">
                                            评估
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-3 pt-0">
                                    <p>您需要的品牌规划类型: </p>
                                    <p>(多选)</p>
                                </legend>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" style="margin-left: -20px" type="checkbox"
                                               name="type[]" id="type1" value="品牌战略规划与调整" checked>
                                        <label class="form-check-label" for="type1">
                                            品牌战略规划与调整
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" style="margin-left: -20px" type="checkbox"
                                               name="type[]" id="type2" value="品牌更新">
                                        <label class="form-check-label" for="type2">
                                            品牌更新
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" style="margin-left: -20px" type="checkbox"
                                               name="type[]" id="type3" value="新设立或更名的公司建立品牌">
                                        <label class="form-check-label" for="type3">
                                            新设立或更名的公司建立品牌
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" style="margin-left: -20px" type="checkbox"
                                               name="type[]" id="type4" value="新成立企业集团的品牌规划">
                                        <label class="form-check-label" for="type4">
                                            新成立企业集团的品牌规划
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" style="margin-left: -20px" type="checkbox"
                                               name="type[]" id="type5" value="企业集团重组的品牌整合">
                                        <label class="form-check-label" for="type5">
                                            企业集团重组的品牌整合
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" style="margin-left: -20px" type="checkbox"
                                               name="type[]" id="type6" value="集团内关系企业、旗下品牌的品牌规划">
                                        <label class="form-check-label" for="type6">
                                            集团内关系企业、旗下品牌的品牌规划
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" style="margin-left: -20px" type="checkbox"
                                               name="type[]" id="type7" value="告别旧形象、建立新形象">
                                        <label class="form-check-label" for="type7">
                                            告别旧形象、建立新形象
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" style="margin-left: -20px" type="checkbox"
                                               name="type[]" id="type8" value="继承、修正旧识别，向新形象过渡">
                                        <label class="form-check-label" for="type8">
                                            继承、修正旧识别，向新形象过渡
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" style="margin-left: -20px" type="checkbox"
                                               name="type[]" id="type9" value="团体、机构与商业项目的品牌化">
                                        <label class="form-check-label" for="type9">
                                            团体、机构与商业项目的品牌化
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3">
                                <p>您关注的 CI 难题:</p>
                                <p>(多选)</p>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-check">
                                    <input class="form-check-input" style="margin-left: -20px" type="checkbox"
                                           id="problems1" name="problems[]" value="理念、行为、视觉三者的主次关系" checked>
                                    <label class="form-check-label" for="problems1">
                                        理念、行为、视觉三者的主次关系
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" style="margin-left: -20px" type="checkbox"
                                           id="problems2" name="problems[]" value="CI 导入的时机">
                                    <label class="form-check-label" for="problems2">
                                        CI 导入的时机
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" style="margin-left: -20px" type="checkbox"
                                           id="problems3" name="problems[]" value="CI 导入与企业管理、运营的协调">
                                    <label class="form-check-label" for="problems3">
                                        CI 导入与企业管理、运营的协调
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" style="margin-left: -20px" type="checkbox"
                                           id="problems4" name="problems[]" value="CI 导入的周期">
                                    <label class="form-check-label" for="problems4">
                                        CI 导入的周期
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" style="margin-left: -20px" type="checkbox"
                                           id="problems5" name="problems[]" value="VI 设计的内容和费用">
                                    <label class="form-check-label" for="problems5">
                                        VI 设计的内容和费用
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" style="margin-left: -20px" type="checkbox"
                                           id="problems6" name="problems[]" value="标志要不要征集">
                                    <label class="form-check-label" for="problems6">
                                        标志要不要征集
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" style="margin-left: -20px" type="checkbox"
                                           id="problems7" name="problems[]" value="如何选定标志方案">
                                    <label class="form-check-label" for="problems7">
                                        如何选定标志方案
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" style="margin-left: -20px" type="checkbox"
                                           id="problems8" name="problems[]" value="标志怎样避免与人雷同或抄袭">
                                    <label class="form-check-label" for="problems8">
                                        标志怎样避免与人雷同或抄袭
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <legend class="col-form-label col-sm-3 pt-0">您接触品牌理念多久了:</legend>
                            <div class="col-sm-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="time" id="time1"
                                           value="一年不到" checked>
                                    <label class="form-check-label" for="time1">
                                        一年不到
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="time" id="time2"
                                           value="一年">
                                    <label class="form-check-label" for="time2">
                                        一年
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="time" id="time3"
                                           value="两年以上">
                                    <label class="form-check-label" for="time3">
                                        两年以上
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <legend class="col-form-label col-sm-3 pt-0">您接触、了解品牌是因为:</legend>
                            <div class="col-sm-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="reason" id="reason1"
                                           value="兴趣" checked>
                                    <label class="form-check-label" for="reason1">
                                        兴趣
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="reason" id="reason2"
                                           value="学业">
                                    <label class="form-check-label" for="reason2">
                                        学业
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="reason" id="reason3"
                                           value="研究">
                                    <label class="form-check-label" for="reason3">
                                        研究
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="reason" id="reason4"
                                           value="为企业服务">
                                    <label class="form-check-label" for="reason4">
                                        为企业服务
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="marks1" class="col-sm-3 col-form-label">备注和问题: </label>
                            <div class="col-sm-9">
                                <input type="text" name="marks" class="form-control" id="marks1"
                                       placeholder="填写备注和问题">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="marks2" class="col-sm-3 col-form-label">您的姓名: </label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="marks2" placeholder="填写姓名">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">所在单位: </label>
                            <div class="col-sm-9">
                                <input type="password" name="company" class="form-control" id="inputPassword3"
                                       placeholder="填写单位">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="marks3" class="col-sm-3 col-form-label">您的 E-mail: </label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" id="marks3"
                                       placeholder="填写邮箱">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary">提交</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            @include('platform/message')
        </div>
    </div>
@endsection

@section('script')
    <script src="https://jkwedu-new.oss-cn-beijing.aliyuncs.com/script/bscroll.min.js"></script>
    <script>
        window.onload = function () {
            let wrapper = document.querySelector('.scroll-wrapper')
            let scroll = new BScroll(wrapper, {
                scrollX: true,
                scrollY: false,
                click: true,
            })
        }
        
        $(function() {
            $('.scroll-item').on('click',function(e) {
                // e.preventDefault();
                $('.scroll-item').removeClass('text-danger');
                $(this).addClass('text-danger');
                var id = $(this).attr('data');
                $('.dropdown').not('#'+id).hide();
                $('#'+id).toggle(200);
            })
        })
    </script>
    @endsection





