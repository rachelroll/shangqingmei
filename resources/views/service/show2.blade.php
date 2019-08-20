<style>
    .image-text .text-huge {
        margin-top: 80px;
    }
</style>

@extends('layout/layout')
@section('content')
    <div class="main-container white-bg main-container-margin">
        <div class="row hero-row image-row">
            <div class="hero-container image-container" style="background-image: url( '../../wp-content/uploads/2016/09/mini-hero.jpg' );">
                <div class="overlay-hero">
                    <div class="overlay-hero-title ">
                        <h3 class="text-medium">业务流程</h3>
                        <h1 class="text-huge ">品牌规划的全程策略伙伴</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrap-iconic-case">
            <div class="text-image-row v-center ">
                <div class="single-image"></div>
                <div class="image-text">
                    <div class="text-body">
                        <p>我们深信形象建设是一门科学，我们也正在体验着科学带给我们的力量。</p>
                        <p>依照这样的内在规律，我们从市场角度出发，为客户提供一站式的品牌顾问服务，保证了品牌传播的实效性。 今天，我们正将这一流程中的沟通、培训以及设计管理等部分系统化，以求服务更为深化。</p>
                        <p></p>
                    </div>
                    <h4 class="text-huge double-margin-bottom">
                        一. 整合作业
                    </h4>
                    <div class="text-body">
                        <p>
                            我们注重专业经验的积累，可以为客户大规模的传播行动提供有针对性的品牌规划，也可以根据客户特定时期的特定需求，提供可执行的创意、广告、营销等整合营销方案，用单一的传播方式实现预期目标。
                        </p>
                    </div>
                </div>
            </div>
            <div class="images-group">
                <div class="images-row">
                    <div class="col">
                        <img src="../../wp-content/uploads/2019/02/Mini_DRAFT.jpg">
                    </div>
                </div>
            </div>

            <div class="text-image-row v-center ">
                <div class="single-image"></div>
                <div class="image-text">
                    <h4 class="text-huge double-margin-bottom">
                        二. 品牌规划
                    </h4>
                    <div class="text-body">
                        <p>
                            品牌建设只有在调查、分析及策略思考后才会成型，我们已经逐渐形成了一套适合中国企业的建设流程，它的科学性和实效已日益得到验证。科学化方法、系统化流程、国际化标准是我们一贯坚持的作业原则，保证每一个服务环节的科学化和高质量，精准驾驭市场研究、策略思考和创意激情。
                        </p>
                    </div>
                </div>
            </div>
            <div class="images-group">
                <div class="images-row">
                    <div class="col">
                        <img src="../../wp-content/uploads/2019/02/Mini_DRAFT.jpg">
                    </div>
                </div>
            </div>

            <div class="text-image-row v-center ">
                <div class="single-image"></div>
                <div class="image-text">
                    <h4 class="text-huge double-margin-bottom">
                        三. CI 规划
                    </h4>
                </div>
            </div>
            <div class="images-group">
                <div class="images-row">
                    <div class="col">
                        <img src="../../wp-content/uploads/2019/02/Mini_DRAFT.jpg">
                    </div>
                </div>
            </div>

            <div class="text-image-row v-center ">
                <div class="single-image"></div>
                <div class="image-text">
                    <h4 class="text-huge double-margin-bottom">
                        四. VI 规划
                    </h4>
                </div>
            </div>
            <div class="images-group">
                <div class="images-row">
                    <div class="col">
                        <img src="../../wp-content/uploads/2019/02/Mini_DRAFT.jpg">
                    </div>
                </div>
            </div>

            <div class="related-content-row">
                <h3 class="col-100 no-padding text-large base-margin-top base-margin-bottom">相关内容</h3>
                <a href="{{ route('web.service.show', ['id' => 2]) }}" class="search-result-item">
                    <img src="../../wp-content/uploads/2019/03/Sensodyne-True-White-Group.png"
                         class="responsive">
                    <div class="overlay-text text-medium leading-small">
                        <div class="item-tag">整体作业方案</div>
                        <h2 class="item-title">提供品牌建设的整体解决方案</h2>
                        <div class="item-subtitle">
                        </div>
                    </div>
                </a>

                <a href="{{ route('web.service.show', ['id' => 3]) }}" class="search-result-item">
                    <img src="../../wp-content/uploads/2019/03/65883ce860-Recovered.png"
                         class="responsive">
                    <div class="overlay-text text-medium leading-small">
                        <div class="item-tag">业务流程</div>
                        <h2 class="item-title">提供品牌建设的整体解决方案</h2>
                        <div class="item-subtitle">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
