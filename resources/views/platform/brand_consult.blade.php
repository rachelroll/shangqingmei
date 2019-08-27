<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="/css/index_v4.css">
<link rel="stylesheet" type="text/css" href="/css/global_2017.css">
<script type="text/javascript" src="/js/DD_belatedPNG.js"></script>
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

    .wrap-iconic-case div.text-image-row {
        padding: 10px 0;
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
            <br>
            <h1 style="font-weight: bold; font-size: 30px; font-family: 'Microsoft Sans Serif'">在线咨询</h1>
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
            {{--                互动留言--}}
            <br>
            <br>
            <h1 style="font-weight: bold; font-size: 30px; font-family: 'Microsoft Sans Serif'">互动留言</h1>
            <br>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('web.message.store') }}" method="POST" name="message">
                        @csrf
                        <textarea name="content" cols="" rows=""  class="input scrollbar" id="content" onpropertychange="textCounter(this, 500)" onfocus="if (value =='写下你想说的，开始我们的对话'){value =''}" onblur="if (value ==''){value='写下你想说的，开始我们的对话'}">写下你想说的，开始我们的对话</textarea>
                        <br>

                        <div class="input_ok">
                            <div class="function" style="position:relative;">
                                <div id="biaoqing">
                                    <div id="function_close"><a href="javascript:;" id="bq_close" title="关闭"></a></div>
                                    <div class="bq_line">
                                        <dl>
                                            <dd class="expression"><a href="javascript:;" title="微笑"><img src="/img/bq/wx.gif"></a></dd>
                                            <dd class="expression"><a href="javascript:;" title="晕"><img src="/img/bq/y.gif"></a></dd>
                                            <dd class="expression"><a href="javascript:;" title="心花怒放"><img src="/img/bq/xhnf.gif"></a></dd>
                                            <dd class="expression"><a href="javascript:;" title="鼓掌"><img src="/img/bq/gz.gif"></a></dd>
                                            <dd class="expression"><a href="javascript:;" title="哈欠"><img src="/img/bq/hax.gif"></a></dd>
                                            <dd class="expression"><a href="javascript:;" title="憨笑"><img src="/img/bq/sx.gif"></a></dd>
                                            <dd class="expression"><a href="javascript:;" title="汗"><img src="/img/bq/han.gif"></a></dd>
                                            <dd class="expression"><a href="javascript:;" title="吃惊"><img src="/img/bq/cj.gif"></a></dd>
                                            <dd class="expression"><a href="javascript:;" title="鄙视"><img src="/img/bq/bs.gif"></a></dd>
                                            <dd class="expression"><a href="javascript:;" title="闭嘴"><img src="/img/bq/bz.gif"></a></dd>
                                            <dd class="expression"><a href="javascript:;" title="呲牙"><img src="/img/bq/cy.gif"></a></dd>
                                            <dd class="expression"><a href="javascript:;" title="害羞"><img src="/img/bq/hx.gif"></a></dd>
                                            <dd class="expression"><a href="javascript:;" title="衰"><img src="/img/bq/shuai.gif"></a></dd>
                                            <dd class="expression"><a href="javascript:;" title="偷笑"><img src="/img/bq/tx.gif"></a></dd>
                                            <dd class="expression"><a href="javascript:;" title="折磨"><img src="/img/bq/zm.gif"></a></dd>
                                            <dd class="expression"><a href="javascript:;" title="难过"><img src="/img/bq/ng.gif"></a></dd>
                                            <dd class="expression"><a href="javascript:;" title="示爱"><img src="/img/bq/sa.gif"></a></dd>
                                            <dd class="expression"><a href="javascript:;" title="可爱"><img src="/img/bq/ka.gif"></a></dd>
                                            <dd class="expression"><a href="javascript:;" title="泪"><img src="/img/bq/lei.gif"></a></dd>
                                            <dd class="expression"><a href="javascript:;" title="酷"><img src="/img/bq/cool.gif"></a></dd>
                                        </dl>
                                    </div>
                                </div>
                                <div id="gn_photo">
                                    <div class="gn_photo_line">
                                        <div id="function_close"><a href="javascript:;" title="关闭" id="ph_close"></a></div>
                                        <dl>
                                            <dd class="tips">上传本地图片不能超过2M</dd>
                                            <dd class="upload"><a href="javascript:;" title="上传图片">上传图片</a><input name="Filedata" type="file" id="upp"></dd>
                                            <dd class="link"><a href="javascript:;" title="图片链接" id="show_url">图片链接</a></dd>
                                        </dl>
                                    </div>
                                    <div id="gn_photo_2">
                                        <div id="function_close"><a href="javascript:;" title="关闭" id="url_close"></a></div>
                                        <div class="gn_photo_link">
                                            <dl>
                                                <dd class="p_input"><input  type="text" class="photo_input" id="photo_url"></dd>
                                                <dd class="p_submit"><input name="photo_submit" type="button" class="photo_submit" value="确定">
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div id="gn_photo_3">
                                        <div id="function_close"><a href="javascript:;" title="关闭" class="pic_close"></a></div>
                                        <div class="gn_photo_img"><img class="shopimg" src=""></div>
                                    </div>
                                    <div id="gn_photo_4">
                                        <div id="function_close"><a id="del_close" href="javascript:;" title="关闭"></a></div>
                                        <div class="gn_photo_img">
                                            <dl>
                                                <dd class="tips2">确定删除吗？</dd>
                                                <dd class="submit2">
                                                    <a href="javascript:;" title="确定" id="ajax_del">确定</a>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <dl>
                                    <dd class="bq"><a href="javascript:;" id="show_bq" title="加入表情"></a></dd>
                                    <dd class="img"><a href="javascript:;" title="添加图片" id="show_ph"></a></dd>
                                </dl>
                            </div>
                            <div class="input_submit">
                                <input  type="submit" class="botton" onClick="return checkdata();" value="发 布" />
                            </div>
                            <div class="input_name">
                                <input name="username" type="text" class="name" id="username" value="你的名字" onPropertyChange="textCounter(this, 6)" onfocus="if (value =='你的名字'){value =''}" onblur="if (value ==''){value='你的名字'}" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            @foreach($messages as $message)
            <div class="card">
                <div class="card-header">
                    {{ $message->username }}
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $message->content }}</p>
                    <br>
                    <p class="card-text ip-info">来自湖南 | 长沙 | {{ $message->id }}楼 | {{ $message->created_at }}</p>
                </div>
            </div>
            <br>
            @endforeach
            <br>
        </div>
    </div>
@endsection


@if (session('success'))
    <div class="container">
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
@elseif(session('error'))
    <div class="container">
        <div class="alert alert-warning" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
@endif

<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/up.min.js"></script>
<script>
    $(function(){
        //打开表情
        $("#show_bq").click(function(){
            $("#biaoqing").css('display','block');
            $(".gn_photo_line").css('display','none');
            $("#gn_photo_2").css('display','none');
            $("#gn_photo_3").css('display','none');
            $("#gn_photo_4").css('display','none');
            if ( $("#content").val() == '写下你想说的，开始我们的对话' )
            {
                $("#content").val('');
            }
        })
        //关闭表情
        $("#bq_close").click(function(){
            $("#biaoqing").css('display','none');
        })
        //选中表情
        $(".bq_line").children().children().children().click(function(){
            var txt = $("#content").val();
            var att = '['+$(this).attr("title")+']';
            var res = txt+att;
            $("#content").val(res);
        })

        //打开图片上传
        $("#show_ph").click(function(){
            $(".gn_photo_line").css('display','block');
            $("#biaoqing").css('display','none');
            $("#gn_photo_2").css('display','none');
            $("#gn_photo_3").css('display','none');
            $("#gn_photo_4").css('display','none');
        })
        //关闭图片框
        $("#ph_close").click(function(){
            $(".gn_photo_line").css('display','none');
        })

        //打开URL输入框
        $("#show_url").click(function(){
            $("#gn_photo_2").css('display','block');
            $(".gn_photo_line").css('display','none');
        })
        //关闭URL框
        $("#url_close").click(function(){
            $("#gn_photo_2").css('display','none');
        })
        //搜索提交
        $("#soso").click(function(){
            if ($(".search_input").val()=='搜索你想要的')
            {
                alert('请输入关键词!');
                return false;
            }
            self.location="./index.php?so="+$(".search_input").val();
        })
        $(".search_input").keydown(function(e){
            var e = e || event;
            var  keycode = e.which || e.keyCode;
            if (keycode==13) {

                self.location="./index.php?so="+$(".search_input").val();
                return false;
            }
        });
        //远程图片提交
        $(".photo_submit").click(function(){
            var url = $("#photo_url").val();
            $.ajax({
                type: "get",
                url: "chkimg.php?url="+url,
                dataType: "html",
                success: function (data) {
                    if (data == "-1")
                    {
                        alert('请提交正确的图片地址');
                        return false;
                    }
                    //开始替换节点
                    $(".shopimg").attr("src",'./images/upload/'+data);
                    $("#gn_photo_3").css('display','block');
                    $("#gn_photo_2").css('display','none');
                    $("#uploadmark").val("ok");
                    $("#picpath").val(data);
                    //$("#photo_url").val('获取成功');
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {

                }
            });
        })

        //显示删除提示框
        $(".pic_close").click(function(){
            $("#gn_photo_4").css('display','block');
        })
        //关闭删除提示框
        $("#del_close").click(function(){
            $("#gn_photo_4").css('display','none');
        })
        //删除
        $("#ajax_del").click(function(){
            $("#gn_photo_4").css('display','none');
            $.ajax({
                type: "get",
                url: "chkimg.php?ajax_del="+$(".shopimg").attr("src"),
                dataType: "html",
                success: function (data) {
                    if (data == "1")
                    {
                        alert('删除成功');
                        $("#uploadmark").val('');
                        $("#picpath").val('');


                        //开始替换节点
                        $("#gn_photo_3").css('display','none');
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {

                }
            });
        })
    });
</script>

<script type="text/JavaScript">
    function checkdata()
    {
        first=document.message.content.value;
        second=document.message.username.value;
        if(first=='写下你想说的，开始我们的对话'||second=='你的名字')
        {
            alert("所发布的内容和昵称不能为空");
            return false;
        }
        else
            document.message.submit();
    }
    function textCounter(field, maxlimit) {
        var str=field.value;
        var a=str.match(/[^\x00-\xff]|\w{1,2}/g);
        if (a.length > maxlimit)
            field.value = a.length<maxlimit?str:a.slice(0,maxlimit).join("");
        //else
        //document.WRITEMSGTXT.remLen.value = maxlimit - a.length;
    }
</script>

