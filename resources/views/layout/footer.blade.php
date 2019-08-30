<style>
    .main-footer.m-footer a {
        margin: 6px 0 0;
    }
</style>

<div class=" move-cta-wrapper">
    <section class=" col-100 center">
        <a href="{{ route('web.platform.index') }}" class="move-button draw-border">
            保持联系
        </a>
    </section>
</div>
<br/>
<footer id="" class="main-footer m-footer">
    <div class="main-container">
        <div>
            <div>
                <div class="is-start col-100">
                    <span class="main-follow-title">网页</span>
                    <a href="../index.html" class="hover-red">
                        首页
                    </a>

                    <a href="../philosophy/index.html" class="hover-red">
                        关于我们
                    </a>

                    <a href="../iconic-moves/index.html" class="hover-red">
                        服务能力
                    </a>

                    <a href="../about/index.html" class="hover-red">
                        服务案例
                    </a>

                    <a href="index.html" class="hover-red">
                        作业故事
                    </a>

                    <a href="../best-brands/index.html" class="hover-red">
                        互动平台
                    </a>
                </div>

                @if(Agent::isDesktop())
                <div class="is-start col-100" style="display: flex; justify-content:space-between;">
                    <div>
                        <span class="main-follow-title">联系我们</span>
                        <a href="" class="hover-red">
                            地址: 北京市海淀区大觉寺路 7 号 (100095)
                        </a>
                        <a href="" class="hover-red">
                            电话: 183-0157-3107
                        </a>
                        <a href="" class="hover-red">
                            固话: 010-80881930
                        </a>
                        <a href="https://www.instagram.com/interbrand/" class="hover-red">
                            网址: www.star2001.com
                        </a>
                    </div>

                    <div style="margin: 24px 24px 0 0;">
                        <img src="/img/foot-logo.png" alt="" style="width: 140px;"/>
                    </div>
                </div>
                    @else
                    <div class="is-start col-100">
                        <div>
                            <span class="main-follow-title">联系我们</span>
                            <p href="" class="hover-red" style="margin-right: 160px">
                                地址: 北京市海淀区大觉寺路 7 号 (100095)
                            </p>
                            <p href="" class="hover-red">
                                电话: 183-0157-3107
                            </p>
                            <p href="" class="hover-red">
                                固话: 010-80881930
                            </p>
                            <p href="https://www.instagram.com/interbrand/" class="hover-red">
                                网址: http://shangqingmei.yixiangjian.com
                            </p>
                        </div>

                        <div style="margin: 40px auto 0 auto;">
                            <img src="/img/foot-logo.png" alt="" style="width: 140px;"/>
                        </div>
                    </div>
                @endif
            </div>

        </div>
        <div style="clear:both;"></div>
        <div class="col-100 center copyright-year text-tiny">
            <div class="copyright-footer-item copyright-text">
                &copy; 1995 -
                2014
                BrandStarDesign.
                版权所有.
            </div>
        </div>
    </div>
</footer>
