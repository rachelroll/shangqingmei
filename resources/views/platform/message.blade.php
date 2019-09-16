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

            @if(Agent::isDesktop())
            <div class="input_ok">
                <div class="function" style="position:relative;">
                    <div id="biaoqing">
                        <div id="function_close"><a href="javascript:;" id="bq_close" title="关闭"></a></div>
                        <div class="bq_line" style="background-color: #fff; height: 135px">
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
            @else
{{--                <div class="">--}}
                    <div class="function" style="position:relative;">
                        <div id="biaoqing">
                            <div id="function_close"><a href="javascript:;" id="bq_close" title="关闭"></a></div>
                            <div class="bq_line">
                                <dl>
                                    <dd class="expression"><a href="javascript:;" title="头像"><img src="/img/Avatar_boy_54x54.png"></a></dd>
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
                    <div style="clear:both"></div>
                <br>
                    <div class="row justify-content-between" style="margin-left: 0">
                        <div class="input_name col" style="background-image: none">
                            <input name="username" type="text" class="name" id="username" value="你的名字" onPropertyChange="textCounter(this, 6)" onfocus="if (value =='你的名字'){value =''}" onblur="if (value ==''){value='你的名字'}" />
                        </div>
                        <div class="input_submit col align-self-end">
                            <input  type="submit" class="botton" onClick="return checkdata();" value="发 布" />
                        </div>
                    </div>

{{--                </div>--}}
             @endif
        </form>
    </div>
</div>
<br>
@foreach($messages as $message)
    <div class="card">
        <div class="card-header" style="position: relative; height: 48px">
            <img style="width: 28px; position: absolute; bottom: 20%" src="{{ $message->avatar }}" alt=""/>
            <span style="position: absolute; left: 60px; bottom: 20%">{{ $message->username }}</span>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $message->content }}</p>
            <br>
            <p class="card-text ip-info">来自{{ $message->from }} | {{ $message->device }} | {{ $message->id }}楼 | {{ $message->created_at }}</p>
        </div>
    </div>
    <br>
@endforeach
<br>

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
