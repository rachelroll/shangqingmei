<style>
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
    /* end clear float */
    .swiper-container .swiper-wrapper {
        position: relative;
    }
    .swiper-container .swiper-wrapper .swiper-slide {
        /*border: 1px solid red;*/
        text-align: center;
        padding: 6px 0;
    }
    .child {
        display: none;
        /*position: absolute;*/
        /*z-index:999;*/
        /*top: 100px;*/
        width: 100%;
        font-weight: normal;
        /*padding: 10px;*/
        font-size: 16px;
        color: #666;
    }
    .child li {
        line-height: 60px;
        border-bottom: solid 1px #8a8a8a;

    }
    .parent {
        font-size: 16px;
        color: #333;
    }
    .red {
        /*color: red;*/
        /*border-bottom: 1px solid #bd0202;*/
        background-image: url(../img/red-back.png);
    }

    .show {
        display: block;
    }
    .hide {
        display: none;
    }
</style>
@section('css')
    <link href="https://cdn.bootcss.com/Swiper/4.5.0/css/swiper.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endsection
@if(Agent::isDesktop())
<div class="single-image">
    <div class="red-border-box">
        <h1>互动平台</h1>
    </div>

    <ul>
        <li @if(request()->fullUrl() == route('web.platform.brand-consult')) style="color:red" @endif>
            <a href="{{ route('web.platform.brand-consult') }}">- 品牌问题咨询</a>
        </li>
        <li @if(request()->fullUrl() == route('web.platform.visual-clinic')) style="color:red" @endif>
            <a href="{{ route('web.platform.visual-clinic') }}">- 视觉形象诊断</a>
        </li>
    </ul>
    <div class="red-border-box">
        <h1>诊断案例</h1>
    </div>
    <ul>
        <li @if(request()->fullUrl() == route('web.platform.linian')) style="color:red" @endif>
            <a href="{{ route('web.platform.linian') }}">- CI 理念的厘清</a>
        </li>
        <li @if(request()->fullUrl() == route('web.platform.transform-case')) style="color:red" @endif>
            <a href="{{ route('web.platform.transform-case') }}">- 形象过度案例</a>
        </li>
        <li @if(request()->fullUrl() == route('web.platform.update-case')) style="color:red" @endif>
            <a href="{{ route('web.platform.update-case') }}">- 形象更新案例</a>
        </li>
    </ul>
</div>

@else

{{--                这里是滑动导航--}}
<div class="swiper-container">
    <div class="swiper-wrapper ">
        <div class="swiper-slide" style="width: 70px;">
            <div class="parent" data=1>
                <span>互动平台</span>
            </div>
        </div>
        <div class="swiper-slide" style="width: 70px;">
            <div class="parent" data=2>
                <span>诊断案例</span>
            </div>
        </div>
    </div>
    <ul class="child" id=1>
        <li>
            <a href="{{ route('web.platform.update-case') }}" style="color: #333">
                品牌问题咨询
            </a>
        </li>
        <li>
            <a href="{{ route('web.platform.update-case') }}" style="color: #333">
                视觉形象诊断
            </a>
        </li>
    </ul>
    <ul class="child" id=2>
        <li>
            <a href="{{ route('web.platform.update-case') }}" style="color: #333">
                品牌问题咨询
            </a>
        </li>
        <li>
            <a href="{{ route('web.platform.update-case') }}" style="color: #333">
                视觉形象诊断
            </a>
        </li>
    </ul>
</div>
<div class="clear"></div>
{{--                .end 这里是滑动导航--}}
@endif


@section('script')
    <script src="https://cdn.bootcss.com/Swiper/4.5.0/js/swiper.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 4,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                type: 'fraction',
            },
        });
        $(function() {
            $('.parent').on('click',function(e) {
                // e.preventDefault();
                $('.parent').children().removeClass('red');
                $(this).children().addClass('red');
                var id = $(this).attr('data');
                $('.child').not('#'+id).hide();
                $('#'+id).toggle(400);
                // $(this).parent().siblings().children('.child').hide();
                // $(this).siblings().toggle(400)
            })
        })
    </script>
@endsection
