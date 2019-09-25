<style>
    .red {
        background-image: url(../img/red-back.png);
    }

    .horizontal-container {
        margin: 0 auto;
        background-color: #f4ffe3;
        width: 100%;
        position: relative;
        border: 1px solid #e0ebcf;
    }
    .scroll-wrapper::-webkit-scrollbar {
        display: none;
    }
    .scroll-wrapper{
        margin: 0 auto;
        /* overflow: hidden; */
        border-radius: 5px;
        overflow-x: auto;
        -webkit-backface-visibility: hidden;
        -webkit-overflow-scrolling: touch; /* 2 */
    }
    .scroll-content {
        display: inline-block;
        white-space: nowrap;
    }
    .scroll-item {
        height: 48px;
        font-size: 24px;
        line-height: 48px;
        display: inline-block;
        padding: 0 10px;
    }

    .dropdown {
        display: none;
        width: 100%;
        padding: 0 10px;
        font-weight: normal;
        font-size: 16px;
        color: #666;
    }
    .dropdown li {
        line-height: 60px;
        border-bottom: solid 1px #8a8a8a;
    }
</style>
@if(Agent::isDesktop())
<div class="single-image">
    <div class="red-border-box">
        <h1>互动平台</h1>
    </div>

    <ul>
        <li>
            <a @if(request()->fullUrl() == route('web.platform.brand-consult')) class="text-danger" @endif href="{{ route('web.platform.brand-consult') }}">- 品牌问题咨询</a>
        </li>
        <li @if(request()->fullUrl() == route('web.platform.visual-clinic')) class="text-danger" @endif>
            <a href="{{ route('web.platform.visual-clinic') }}">- 视觉形象诊断</a>
        </li>
    </ul>
    <div class="red-border-box">
        <h1>诊断案例</h1>
    </div>
    <ul>
        <li @if(request()->fullUrl() == route('web.platform.linian')) class="text-danger" @endif>
            <a href="{{ route('web.platform.linian') }}">- CI 理念的厘清</a>
        </li>
        <li @if(request()->fullUrl() == route('web.platform.transform-case')) class="text-danger" @endif>
            <a href="{{ route('web.platform.transform-case') }}">- 形象过度案例</a>
        </li>
        <li @if(request()->fullUrl() == route('web.platform.update-case')) class="text-danger" @endif>
            <a href="{{ route('web.platform.update-case') }}">- 形象更新案例</a>
        </li>
    </ul>
</div>

@else

{{--                这里是滑动导航--}}
<div class="horizontal-container">
    <div class="scroll-wrapper" ref="scroll">
        <div class="scroll-content">
            <div data="a1" class="scroll-item">互动平台</div>
            <div data="a2" class="scroll-item">诊断案例</div>
        </div>
    </div>
    <ul class="dropdown" id="a1">
        <li>
            <a href="{{ route('web.platform.brand-consult') }}" style="color: #333">
                品牌问题咨询
            </a>
        </li>
        <li>
            <a href="{{ route('web.platform.visual-clinic') }}" style="color: #333">
                视觉形象诊断
            </a>
        </li>
    </ul>
    <ul class="dropdown" id="a2">
        <li>
            <a href="{{ route('web.platform.linian') }}" style="color: #333">
                CI 理念的厘清
            </a>
        </li>
        <li>
            <a href="{{ route('web.platform.transform-case') }}" style="color: #333">
                形象过度案例
            </a>
        </li>
        <li>
            <a href="{{ route('web.platform.update-case') }}" style="color: #333">
                形象更新案例
            </a>
        </li>
    </ul>
</div>

<br>
{{--                .end 这里是滑动导航--}}
@endif


