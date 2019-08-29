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
