
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
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

    body.lang-undefined {
        line-height: 1.5;
    }
</style>

@extends('layout/layout')
@section('content')
    <div class="main-container white-bg main-container-margin">
        <div class="wrap-iconic-case">
            <div class="related-content-row" style="padding-top: 36px">
                <a href="{{ route('web.service.show', ['id' => 2]) }}" class="search-result-item">
                    <img src="../../wp-content/uploads/2019/03/Sensodyne-True-White-Group.png"
                         class="responsive">
                    <div class="overlay-text text-medium leading-small">
                        <h2 class="item-title">视野观点</h2>
                        <div class="item-subtitle">
                        </div>
                    </div>
                </a>

                <a href="{{ route('web.service.show', ['id' => 3]) }}" class="search-result-item">
                    <img src="../../wp-content/uploads/2019/03/65883ce860-Recovered.png"
                         class="responsive">
                    <div class="overlay-text text-medium leading-small">
                        <h2 class="item-title">形象传奇</h2>
                        <div class="item-subtitle">
                        </div>
                    </div>
                </a>
            </div>
            <div class="text-image-row">
                <div class="single-image">
                    <h1>互动平台</h1>
                    <ul>
                       <li style="color:red">- 品牌问题咨询</li>
                       <li>- 视觉形象诊断</li>
                    </ul>
                    <h1>诊断案例</h1>
                    <ul>
                        <li>- CI 理念的厘清</li>
                        <li>- 形象过度案例</li>
                        <li>- 形象更新案例</li>
                        <li>- 尚清美诊断案例</li>
                    </ul>
                </div>
                <div class="image-text">
                    <form method="post" action="{{ route('web.platform.consult-store') }}">
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-3 pt-0">您需要的品牌服务是: </legend>
                                <div class="col-sm-9">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="service" id="gridRadios1" value="规划" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            规划
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="service" id="gridRadios2" value="建立">
                                        <label class="form-check-label" for="gridRadios2">
                                            建立
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="service" id="gridRadios3" value="管理">
                                        <label class="form-check-label" for="gridRadios3">
                                            管理
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="service" id="gridRadios3" value="评估">
                                        <label class="form-check-label" for="gridRadios3">
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
                                        <input class="form-check-input" style="margin-left: -20px" type="checkbox" name="type" id="gridRadios1" value="品牌战略规划与调整" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            品牌战略规划与调整
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" style="margin-left: -20px" type="checkbox" name="type" id="gridRadios2" value="品牌更新">
                                        <label class="form-check-label" for="gridRadios2">
                                            品牌更新
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" style="margin-left: -20px" type="checkbox" name="type" id="gridRadios3" value="新设立或更名的公司建立品牌">
                                        <label class="form-check-label" for="gridRadios3">
                                            新设立或更名的公司建立品牌
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" style="margin-left: -20px" type="checkbox" name="type" id="gridRadios3" value="新成立企业集团的品牌规划">
                                        <label class="form-check-label" for="gridRadios3">
                                            新成立企业集团的品牌规划
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" style="margin-left: -20px" type="checkbox" name="type" id="gridRadios3" value="企业集团重组的品牌整合">
                                        <label class="form-check-label" for="gridRadios3">
                                            企业集团重组的品牌整合
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" style="margin-left: -20px" type="checkbox" name="type" id="gridRadios3" value="集团内关系企业、旗下品牌的品牌规划">
                                        <label class="form-check-label" for="gridRadios3">
                                            集团内关系企业、旗下品牌的品牌规划
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" style="margin-left: -20px" type="checkbox" name="type" id="gridRadios3" value="告别旧形象、建立新形象">
                                        <label class="form-check-label" for="gridRadios3">
                                            告别旧形象、建立新形象
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" style="margin-left: -20px" type="checkbox" name="type" id="gridRadios3" value="继承、修正旧识别，向新形象过渡">
                                        <label class="form-check-label" for="gridRadios3">
                                            继承、修正旧识别，向新形象过渡
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" style="margin-left: -20px" type="checkbox" name="type" id="gridRadios3" value="团体、机构与商业项目的品牌化">
                                        <label class="form-check-label" for="gridRadios3">
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
                                    <input class="form-check-input"  style="margin-left: -20px" type="checkbox" id="gridCheck1" name="problems" value="理念、行为、视觉三者的主次关系">
                                    <label class="form-check-label" for="gridCheck1">
                                        理念、行为、视觉三者的主次关系
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" style="margin-left: -20px" type="checkbox" id="gridCheck1" name="problems" value="CI 导入的时机">
                                    <label class="form-check-label" for="gridCheck1">
                                        CI 导入的时机
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" style="margin-left: -20px" type="checkbox" id="gridCheck1" name="problems" value="CI 导入与企业管理、运营的协调">
                                    <label class="form-check-label" for="gridCheck1">
                                        CI 导入与企业管理、运营的协调
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" style="margin-left: -20px" type="checkbox" id="gridCheck1" name="problems" value="CI 导入的周期">
                                    <label class="form-check-label" for="gridCheck1">
                                        CI 导入的周期
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" style="margin-left: -20px" type="checkbox" id="gridCheck1" name="problems" value="VI 设计的内容和费用">
                                    <label class="form-check-label" for="gridCheck1">
                                        VI 设计的内容和费用
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" style="margin-left: -20px" type="checkbox" id="gridCheck1" name="problems" value="标志要不要征集">
                                    <label class="form-check-label" for="gridCheck1">
                                        标志要不要征集
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" style="margin-left: -20px" type="checkbox" id="gridCheck1" name="problems" value="如何选定标志方案">
                                    <label class="form-check-label" for="gridCheck1">
                                        如何选定标志方案
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" style="margin-left: -20px" type="checkbox" id="gridCheck1" name="problems" value="标志怎样避免与人雷同或抄袭">
                                    <label class="form-check-label" for="gridCheck1">
                                        标志怎样避免与人雷同或抄袭
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <legend class="col-form-label col-sm-3 pt-0">您接触品牌理念多久了: </legend>
                            <div class="col-sm-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="time" id="gridRadios1" value="一年不到" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        一年不到
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="time" id="gridRadios2" value="一年">
                                    <label class="form-check-label" for="gridRadios2">
                                        一年
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="time" id="gridRadios3" value="两年以上">
                                    <label class="form-check-label" for="gridRadios3">
                                        两年以上
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <legend class="col-form-label col-sm-3 pt-0">您接触、了解品牌是因为: </legend>
                            <div class="col-sm-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="reason" id="gridRadios1" value="兴趣" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        兴趣
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="reason" id="gridRadios2" value="学业">
                                    <label class="form-check-label" for="gridRadios2">
                                        学业
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="reason" id="gridRadios3" value="研究">
                                    <label class="form-check-label" for="gridRadios3">
                                        研究
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="reason" id="gridRadios3" value="为企业服务">
                                    <label class="form-check-label" for="gridRadios3">
                                        为企业服务
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">备注和问题: </label>
                            <div class="col-sm-9">
                                <input type="text" name="marks" class="form-control" id="inputEmail3" placeholder="填写备注和问题">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">您的姓名: </label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="填写姓名">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">所在单位: </label>
                            <div class="col-sm-9">
                                <input type="password" name="company" class="form-control" id="inputPassword3" placeholder="填写单位">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">您的 E-mail: </label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="填写邮箱">
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
        </div>
    </div>
@endsection
