
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
                        <li>- 品牌问题咨询</li>
                        <li style="color:red">- 视觉形象诊断</li>
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
                    <h1 style="font-size: 22px">视觉形象诊断</h1>
                    <br>
                    <p>这是一项免费服务，如果您对品牌标志、字体、吉祥物或其他识别传达有不满意之处，意欲寻找解决办法，传奇愿从专业角度为您做一次初步诊断和改进建议。</p>
                    <p>为了充分了解企业现状，需要您填写以下表格并相关识别物及标志彩稿、视觉传达样品--名片、信封、信纸、便笺、宣传品等。我们将在收到上述资料后三个工作日内通过电子邮件给您提供诊断方案。您可通过电子邮件或特快专递提供以上物品。</p>
                    <br>
                    <p>电子邮件：762195632@qq.com </p>
                    <p>邮寄地址：北京-朝阳区将台路环铁直线段乙十号(100016)</p>
                    <br>
                    <hr>
                    <br>
                    <h1 style="font-size: 22px">VI 诊断基本信息采集表</h1>
                    <br>
                    <form method="post" action="{{ route('web.platform.consult-store') }}">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">企业名称: </label>
                            <div class="col-sm-9">
                                <input type="text" name="marks" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">主导产业: </label>
                            <div class="col-sm-9">
                                <input type="text" name="marks" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">企业理念: </label>
                            <div class="col-sm-9">
                                <input type="text" name="marks" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">品牌名称与组合: </label>
                            <div class="col-sm-9">
                                <input type="text" name="marks" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">品牌主张: </label>
                            <div class="col-sm-9">
                                <input type="text" name="marks" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">标志应用范围: </label>
                            <div class="col-sm-9">
                                <input type="text" name="marks" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">标志在社会上的认知度: </label>
                            <div class="col-sm-9">
                                <input type="text" name="marks" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">您对该标志的看法: </label>
                            <div class="col-sm-9">
                                <input type="text" name="marks" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">您的姓名: </label>
                            <div class="col-sm-9">
                                <input type="password" name="name" class="form-control" id="name" placeholder="填写姓名">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="company" class="col-sm-3 col-form-label">所在单位: </label>
                            <div class="col-sm-9">
                                <input type="password" name="company" class="form-control" id="company" placeholder="填写单位">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">您的 E-mail: </label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="填写邮箱">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-primary">提交</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
