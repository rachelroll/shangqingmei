<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Keywords" content="互动客厅,网站设计,网页设计,设计师王坤,设计案例,设计作品,网站设计作品,网页设计作品,设计师,王坤,湖南王坤,长沙王坤">
    <meta name="description" content="互动客厅是设计师王坤个人网站 WKUN DESIGN 的设计交流平台，我们对话讨论一切有关设计的话题，从你开始，想象人生">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.5, user-scalable=no">
    <title>WKUN - 互动客厅</title>
    <link rel="stylesheet" type="text/css" href="css/index_m_2019.css">
    <link rel="stylesheet" type="text/css" href="../css/global_m_2019.css">
    <link rel="apple-touch-icon-precomposed" href="images/six/touch-icon-new-ipad.png" />
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        var ImgLazy = function() {
            var $winH = $(window).height(); //获取窗口高度
            var $img = $("img[lazy='y']");  //获取页面上要延时加载的图片集合
            var $imgH = parseInt($img.height() / 2); //图片到一半的时候显示
            var $srcDef = "images/six/m/loading_k.gif";
            var runing=function() {
                $img.each(function(i) {//遍历img
                    var $src = $(this).attr("original"); //获取当前img URL地址
                    var $scroTop = $(this).offset(); //获取图片位置
                    if ($scroTop.top + $imgH >= $(window).scrollTop() && $(window).scrollTop() + $winH >= $scroTop.top + $imgH) {//判断窗口至上往下的位置
                        if ($(this).attr("src") == $srcDef) {
                            $(this).hide();
                        }
                        $(this).attr("src", function() { return $src }).fadeIn(300); //元素属性交换
                    }
                })
            }
            runing(); //页面刚载入时判断要显示的图片
            $(window).scroll(function() {
                runing(); //滚动刷新
            })
        };
        $(function() {
            ImgLazy();
        });
    </script>
</head>
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
<script type="text/javascript">
    // Mobile Safari in standalone mode
    if (("standalone" in window.navigator) && window.navigator.standalone) {

        // If you want to prevent remote links in standalone web apps opening Mobile Safari, change 'remotes' to true
        var noddy,
            remotes = false;

        document.addEventListener('click', function(event) {
            noddy = event.target;
            //Bubble up until we hit link or top HTML element. Warning: BODY element is not compulsory so better to stop on HTML
            while (noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
                noddy = noddy.parentNode;
            }

            if ('href' in noddy && noddy.href.indexOf('http') !== -1 && (noddy.href.indexOf(document.location.host) !== -1 || remotes)) {
                event.preventDefault();
                document.location.href = noddy.href;
            }

        }, false);
    }</script>
<body>
<!--顶部输入框开始-->
<!--导航-->
<div class="top">
    <div id="dd" class="wrapper-dropdown-5" tabindex="1"><img src="images/six/m/nav_icon_2.png" width="44" height="44" />
        <ul class="dropdown">
            <div id="index_nav_more"><iframe name="content_frame" marginwidth=0 marginheight=0 width=27 height=11 src="m_shuju.php.html" frameborder=no ></iframe></div>
            <div class="index_nav3">
                <div id="nav_05"><a href="../m.html"></a></div>
                <div id="nav_01"><a href="../design/m.html"></a></div>
                <div id="nav_02"><a href="m.php.html"></a></div>
                <div id="nav_03"><a href="../zt/weixin/m.html"></a></div>
                <div id="nav_04"><a href="../about/m.html"></a></div>
                <div id="nav_studio"><a href="../studio/m.html"></a></div>
            </div>
        </ul>
    </div>
    <div class="logo"><a href="m.php.html"><img src="images/six/m/logo_2.png" width="44" height="44" /></a></div>
    <div class="so_icon"><img src="images/six/m/so_icon_2.png" width="44" height="44" /></div>
    <div class="search_top" style="display:none;">
        <div class="so_up"><a href="javascript:;" id="so_close" title="关闭"><img src="images/six/m/up_2.png" width="44" height="44" /></a></div>
        <dl><form method="get" id="search">
                <dd class="s_input"><input type="text" class="search_input" id="photo_url" value="搜索你想要的" onfocus="if (value =='搜索你想要的'){value =''}" onblur="if (value ==''){value='搜索你想要的'}" /></dd>
                <dd class="s_submit"><a href="javascript:;" id="soso" title="搜索"><img src="images/six/m/so_icon_2.png" width="44" height="44" /></a></dd>
            </form>
        </dl>
    </div>
</div>

<div class="wangkun_ad">
    <div class="wangkun_ad_z"><a href="m.php-so=.html">
            <script language="javaScript">
                <!--
                now = new Date(),hour = now.getHours()
                if(hour < 6){document.write("美梦！")}
                else if (hour < 9){document.write("早安！")}
                else if (hour < 12){document.write("新的一天 ")}
                else if (hour < 14){document.write("美好午后 ")}
                else if (hour < 17){document.write("下午了，")}
                else if (hour < 19){document.write("即将夜幕 ")}
                else if (hour < 22){document.write("晚安！")}
                else {document.write("夜晚精彩 ")}
                // -->
            </script><font color="#CCC">互动客厅欢迎</font></a>
    </div>
    <div class="wangkun_ad_y"><img src="images/six/m/wangkun2_u.png" width="38" height="50" /></div>
</div>
<div class="top_y">
    <form action="index_keting.php-act=index_keting&amp;ref=m.html" method="post" name="message" enctype="multipart/form-data">
        <input type="hidden" id="uploadmark">
        <input type="hidden" id="picpath" name="img">
        <div class="input_box">
            <div class="input_box2">
                <textarea name="content" cols="" rows=""  class="input scrollbar" id="content" onpropertychange="textCounter(this, 500)" onfocus="if (value =='写下你想说的，开始我们的对话'){value =''}" onblur="if (value ==''){value='写下你想说的，开始我们的对话'}">写下你想说的，开始我们的对话</textarea>
            </div>
            <div class="input_ok">
                <div class="function" style="position:relative;">
                    <div id="biaoqing">
                        <div id="function_close"><a href="javascript:;" id="bq_close" title="关闭"><img src="images/six/m/jp.png" width="28" height="22" /></a></div>
                        <div class="bq_line">
                            <dl>
                                <dd class="expression"><a href="javascript:;" title="微笑"><img src="images/six/bq/wx_56.gif" width="24" height="24"></a></dd>
                                <dd class="expression"><a href="javascript:;" title="晕"><img src="images/six/bq/y_56.gif" width="24" height="24"></a></dd>
                                <dd class="expression"><a href="javascript:;" title="心花怒放"><img src="images/six/bq/xhnf_56.gif" width="24" height="24"></a></dd>
                                <dd class="expression"><a href="javascript:;" title="鼓掌"><img src="images/six/bq/gz_56.gif" width="24" height="24"></a></dd>
                                <dd class="expression"><a href="javascript:;" title="哈欠"><img src="images/six/bq/hax_56.gif" width="24" height="24"></a></dd>
                                <dd class="expression"><a href="javascript:;" title="憨笑"><img src="images/six/bq/sx_56.gif" width="24" height="24"></a></dd>
                                <dd class="expression"><a href="javascript:;" title="汗"><img src="images/six/bq/han_56.gif" width="24" height="24"></a></dd>
                                <dd class="expression"><a href="javascript:;" title="吃惊"><img src="images/six/bq/cj_56.gif" width="24" height="24"></a></dd>
                                <dd class="expression"><a href="javascript:;" title="鄙视"><img src="images/six/bq/bs_56.gif" width="24" height="24"></a></dd>
                                <dd class="expression"><a href="javascript:;" title="闭嘴"><img src="images/six/bq/bz_56.gif" width="24" height="24"></a></dd>
                                <dd class="expression"><a href="javascript:;" title="呲牙"><img src="images/six/bq/cy_56.gif" width="24" height="24"></a></dd>
                                <dd class="expression"><a href="javascript:;" title="害羞"><img src="images/six/bq/hx_56.gif" width="24" height="24"></a></dd>
                                <dd class="expression"><a href="javascript:;" title="衰"><img src="images/six/bq/shuai_56.gif" width="24" height="24"></a></dd>
                                <dd class="expression"><a href="javascript:;" title="偷笑"><img src="images/six/bq/tx_56.gif" width="24" height="24"></a></dd>
                                <dd class="expression"><a href="javascript:;" title="折磨"><img src="images/six/bq/zm_56.gif" width="24" height="24"></a></dd>
                                <dd class="expression"><a href="javascript:;" title="难过"><img src="images/six/bq/ng_56.gif" width="24" height="24"></a></dd>
                                <dd class="expression"><a href="javascript:;" title="示爱"><img src="images/six/bq/sa_56.gif" width="24" height="24"></a></dd>
                                <dd class="expression"><a href="javascript:;" title="可爱"><img src="images/six/bq/ka_56.gif" width="24" height="24"></a></dd>
                                <dd class="expression"><a href="javascript:;" title="泪"><img src="images/six/bq/lei_56.gif" width="24" height="24"></a></dd>
                                <dd class="expression"><a href="javascript:;" title="酷"><img src="images/six/bq/cool_56.gif" width="24" height="24"></a></dd>
                                <dd class="expression"><a href="javascript:;" title="发呆"><img src="images/six/bq/fd_56.gif" width="24" height="24"></a></dd>
                                <dd class="expression"><a href="javascript:;" title="强"><img src="images/six/bq/qiang_56.gif" width="24" height="24"></a></dd>
                                <dd class="expression"><a href="javascript:;" title="敲打"><img src="images/six/bq/qd_56.gif" width="24" height="24"></a></dd>
                                <dd class="expression"><a href="javascript:;" title="再见"><img src="images/six/bq/zj_56.gif" width="24" height="24"></a></dd>
                            </dl>
                        </div>
                    </div>
{{--                    <div id="gn_photo">--}}
{{--                        <div class="gn_photo_line">--}}
{{--                            <div id="function_close"><a href="javascript:;" title="关闭" id="ph_close"></a></div>--}}
{{--                            <dl>--}}
{{--                                <dd class="tips">上传本地图片不能超过2M</dd>--}}
{{--                                <dd class="upload"><a href="javascript:;" title="上传图片">上传图片</a></dd>--}}
{{--                                <dd class="link"><a href="javascript:;" title="图片链接" id="show_url">图片链接</a></dd>--}}
{{--                            </dl>--}}
{{--                        </div>--}}
{{--                        <div id="gn_photo_2">--}}
{{--                            <div id="function_close"><a href="javascript:;" title="关闭" id="url_close"></a></div>--}}
{{--                            <div class="gn_photo_link">--}}
{{--                                <dl>--}}
{{--                                    <dd class="p_input"><input  type="text" class="photo_input" id="photo_url"></dd>--}}
{{--                                    <dd class="p_submit"><input name="photo_submit" type="button" class="photo_submit" value="确定">--}}
{{--                                    </dd>--}}
{{--                                </dl>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div id="gn_photo_4">--}}
{{--                            <div id="function_close"><a id="del_close" href="javascript:;" title="关闭"></a></div>--}}
{{--                            <div class="gn_photo_img">--}}
{{--                                <dl>--}}
{{--                                    <dd class="tips2">确定删除吗？</dd>--}}
{{--                                    <dd class="submit2"><a href="javascript:;" title="确定" id="ajax_del">确定</a></dd>--}}
{{--                                </dl>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                    <dl style="width:100px;">
                        <dd class="bq"><a href="javascript:;" id="show_bq" title="加入表情"><img src="images/six/m/bq.png" width="22" height="22" /></a></dd>

{{--                        <div style="overflow:hidden;position:relative;">--}}
{{--                            <div style="opacity:0;display: block; height: 22px;  width: 22px;  position: absolute;z-index: 2;overflow:hidden;">--}}
{{--                                <input  style="display: block; background: transparent; width: 22px; height:22px; " accept="image/jpeg,image/png,image/gif,image/bmp" id="myimg" name="Filedata" type="file" >--}}
{{--                            </div>--}}
{{--                            <dd style="position:relative;z-index: 1;" class="upimg"><a href="javascript:;"  title="上传图片"><img src="images/six/m/img.png" width="22" height="22" /></a></dd>--}}
{{--                        </div>--}}
                        <div style="position:relative;margin-left:42px;">
                            <div id="gn_photo_3">
                                <div id="function_close"><a href="javascript:;" title="关闭" class="pic_close"></a></div>
                                <div class="gn_photo_img"><img class="shopimg" src=""></div>
                            </div>
                        </div>
                    </dl>
                </div>
                <div class="input_submit">
                    <input  type="image" class="botton" onClick="return checkdata();" src="images/six/m/an_3.png" width="70" height="35"  />
                </div>
                <div class="input_name"><input name="username" type="text" class="name" id="username" value="你的名字" onPropertyChange="textCounter(this, 6)" onfocus="if (value =='你的名字'){value =''}" onblur="if (value ==''){value='你的名字'}" />
                </div>
            </div>
    </form>
</div>
<!--顶部输入框结束-->
<div class="list_z">
    <!--留言列表开始-->
    <div class="list_user">
        <div class="list_user_xiangxi">
            <a href="m.php-so=Suri_dreamer.html">
                <div class="list_user_zdy"></div>
                <div class="list_user_z">
                    <img src="images/six/user_03.jpg" width=36 height=36 />
                </div>
                <div class="qun">
                    <dl>
                        <dd class="qun1">Suri_dreamer</dd>
                        <dd class="qun2">04月03日 02:08</dd>
                    </dl>
                </div>
            </a>
            <div class="qun_lou">2</div>
            <div class="fix"></div>
        </div>
        <div class="list_user_content_message">
            听歌，发呆                   </div>
        <div class="look_img"></div>
        <div class="content_information_k">
            <div class="content_dream">来自<a href="http://www.5kun.com/zt/weixin" title="来自王坤微信话题“没灵感时做啥”" target="_blank">没灵感时做啥</a> | </div>
            <div class="content_information">
                湖南 · 长沙</div>
        </div>
        <div class='list_user_content_reply3'>
            <div class='list_user_content_no'></div>
        </div>        <div class="fix"></div>
    </div>
    <!--留言列表开始-->
    <div class="list_user">
        <div class="list_user_xiangxi">
            <a href="m.php-so=Suri.html">
                <div class="list_user_zdy"></div>
                <div class="list_user_z">
                    <img src="images/six/user_01.jpg" width=36 height=36 />                </div>
                <div class="qun">
                    <dl>
                        <dd class="qun1">Suri</dd>
                        <dd class="qun2">03月10日 17:20</dd>
                    </dl>
                </div>
            </a>
            <div class="qun_lou">1</div>
            <div class="fix"></div>
        </div>
        <div class="list_user_content_message">
            依靠自己，相信自己，欣赏自己。                   </div>
        <div class="look_img"></div>
        <div class="content_information_k">
            <div class="content_dream"></div>
            <div class="content_information">
            </div>
        </div>
        <div class='list_user_content_reply'>
            <div class='reply_content'>王坤：爱上自己、赞美自己，同时应用到对他人也亦如此。</div>
            <div class='reply_content_time'>03月12日 02:45 回复</div>
        </div>        <div class="fix"></div>
    </div>
    <div class="search_result">
        <dl>
            <dd class="result_quantity">2</dd>
            <dd class="result_tips">条关于</dd>
            <dd class="result_key"> Suri</dd>
            <dd class="result_close"><a href="m.php.html" title="关闭返回"><img src="images/six/m/close.png" width="44" height="44" /></a></dd>
        </dl>
    </div>
</div>
<div class="list_y"  style="display:none;">
    <div class="search_top">
        <dl><form method="get" id="search">
                <dd class="s_input"><input type="text" class="search_input" id="photo_url" value="搜索你想要的" onfocus="if (value =='搜索你想要的'){value =''}" onblur="if (value ==''){value='搜索你想要的'}" /></dd>
                <dd class="s_submit"><a href="javascript:;" id="soso" title="搜索"></a></dd>
            </form>
        </dl>
    </div>
</div>
<div class="pages">
    <a class=page href='m.php-page=1&amp;so=Suri.html'>上一页</a><b><a class=page>1</a></b>          </div>
<!--留言列表结束-->
<!--版权信息开始-->
<div class="copyright">
    <p><a href="../about/index.html">版权所有</a></p>
    <p>Copyright © WKUN.com. All Rights Reserved.</p>
</div>
<div class="tongji"><script type="text/javascript">
        var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F976932debf26dfee0edee7a03fa1f72f' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script src="http://s9.cnzz.com/stat.php?id=2168786&amp;web_id=2168786" language="JavaScript"></script>
    <img src="images/six/weixin_icon.jpg" width="20" height="20" />
</div>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="up/up.min.js"></script>
<script>

    var input = document.getElementById("myimg");

    if(typeof FileReader==='undefined'){
        result.innerHTML = "抱歉，你的浏览器不支持 FileReader";
        input.setAttribute('disabled','disabled');
    }else{
        input.addEventListener('change',readFile,false);
    }
    function readFile(){
        var file = this.files[0];
        if(!/image\/\w+/.test(file.type)){
            alert("文件必须为图片！");
            return false;
        }
        $("#gn_photo_3").css("display","block");
        var reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = function(e){
            $(".shopimg").attr("src",this.result);
        }
    }
    //手机打开浮层
    $("#dd").click(function(){
        //var s = $(".dropdown").css('overflow');
        /*if ( s=='hidden' ){
            $(".dropdown").css('overflow','visible');

        }else{
            $(".dropdown").css('overflow','hidden');

        }*/
        var s = $(this).hasClass('active');
        if ( s ){
            $(this).removeClass('active');


        }else{
            $(this).addClass('active');


        }
        var b = $(".search_top").css('display');

        if ( b=='block'  ){$(".search_top").css('display','none');
        }

    })
    $(".so_icon").click(function(){
        var s = $(".search_top").css('display');
        if ( s=='none' ){
            $(".search_top").css('display','block');

        }else{
            $(".search_top").css('display','none');


        }
        var b = $("#dd").hasClass('active');


        if ( b  ){$("#dd").removeClass('active');
        }
    })
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
    //收起搜索
    $("#so_close").click(function(){
        $(".search_top").css('display','none');
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
        self.location="./m.php?so="+$(".search_input").val();

    })

    $(".search_input").keydown(function(e){
        var e = e || event;
        var  keycode = e.which || e.keyCode;
        if (keycode==13) {

            self.location="./m.php?so="+$(".search_input").val();
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
</script>
<style>/*
Uploadify
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
Released under the MIT License <http://www.opensource.org/licenses/mit-license.php>
*/

    .uploadify {
        position: absolute;
        top:0px;
        margin-bottom: 1em;
    }

    .uploadify-button.disabled {
        background-color: #D0D0D0;
        color: #808080;
    }
    .uploadify-queue {
        margin-bottom: 1em;
    }
    .uploadify-queue-item {
        background-color: #FFFFFF;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        font: 11px Verdana, Geneva, sans-serif;
        margin-top: 5px;
        max-width: 350px;
        padding: 10px;
    }
    .uploadify-error {
        background-color: #FDE5DD !important;
    }
    .uploadify-queue-item .cancel a {
        background: url('img/uploadify-cancel.png.html') 0 0 no-repeat;
        float: right;
        height:	16px;
        text-indent: -9999px;
        width: 16px;
    }
    .uploadify-queue-item.completed {
        background-color: #E5E5E5;
    }
    .uploadify-progress {
        background-color: #E5E5E5;
        margin-top: 10px;
        width: 100%;
    }
    .uploadify-progress-bar {
        background-color: #0099FF;
        height: 3px;
        width: 1px;
    }
    #upp object{
        left:0;
    }
</style>
<script>
    //上传
    $("#upp").uploadify({
        'height':78,
        'width':77,
        'swf':'./up/up.swf',
        'uploader':'./up/up.php',
        'buttonText':'',
        'hideButton':true,
        'buttonImg':'./up/up.png',
        'fileSizeLimit': 2048,
        'fileTypeExts':'*.gif;*.png;*.jpg;*.JPG;*.jpeg',
        onUploadSuccess : function(){
            if ($("#uploadmark").val()=='ok')
            {
                $(".shopimg").attr("src",'./images/upload/'+$("#picpath  ").val());
                $("#gn_photo_3").css('display','block');
                $(".gn_photo_line").css('display','none');
            }
        }
    })
</script>
</body>
</html>
