<style type="text/css">
    .mask {
        position: absolute;
        top: 0px;
        filter: alpha(opacity=60);
        background-color: #000;
        z-index: 1002;
        left: 21px;
        opacity:0.8;
        -moz-opacity:0.5;
        padding: 20px 16px 16px;
        font-size: 16px;
        line-height: 30px;
        color: white;
    }
</style>

@extends('layout/layout')
@section('content')
    <div class="full-main-container white-bg full-main-container-margin">
        <section id="mainBody" class="about">
            <div class="row hero-row full-screen-row video-row">
                <div class="hero-container hero-video-container">
                    <video autoplay muted loop src="https://zhongfu-company.oss-cn-hangzhou.aliyuncs.com/shangqingmei/aboutUS.mp4"></video>
{{--                    <div class="overlay-hero">--}}
{{--                        <div class="overlay-hero-title ">--}}
{{--                            <h3 class="text-medium">我们的理念</h3>--}}
{{--                            <h1 class="text-huge ">内强文化, 外塑品牌, 为您成就商业梦想!</h1>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="wrap-approach wrap-content">
                <div class="row text-row description-row">
                    <div class="section-description">
                        <p>尚清美设计顾问的成立，源于一个以专业力量提升客户价值的梦想。</p>
                        <br>
                        <p>区别于管理咨询公司和设计公司，我们专注于为客户创造和管理品牌，以科学化方法、系统化流程、国际化标准创造智力产品，为客户提供有关>CI 导入、VI设计、品牌规划等方面的咨询和服务，以专业的力量提升客户品牌的影响力。</p>
                        <br>
                        <p>尚清美以识别观点对待VI设计，懂得如何以优秀的策略和设计塑造强势品牌；而且，我们以VI设计为起
                            点，更关注 >品牌的深度推广和CI的全面导入，帮助客户梳理形象因素，结合企业战略提出形象规划，建设企业品牌。</p>
                    </div>
                </div>
                <div class="row">
                    <h2 class="section-title">
                        <small>由此, 尚清美努力做到</small>
                        我们的三个重点领域:
                    </h2>
                    <div class="col-12" style="text-align:center">
                        <img src="../img/aboutUS_3rd.gif" />
                    </div>
                </div>
                <div class="row numbered-list">
                    <div class="section-description"></div>
                    <ol>
                        <li class="item">
                            <h2 class="text-subtitle">定制设计</h2>
                            <p>我们为客户创造的是独一无二的品牌。设计感是每个人应当享受的生活。</p>
                            <p>
                                尚清美将人们对生活最真实的渴望，通过设计实现出来，给予客户情理之中、意料之外的惊喜。对美的追求，是我们工作的初衷。
                            </p>
                        </li>
                        <li class="item">
                            <h2 class="text-subtitle">终生顾问</h2>
                            <p>我们为客户提供的完整的品牌策略。
                                任何一个品牌都需要与人保持良性的沟通。尚清美的“终生顾问”服务是对品牌的承诺；一次相知，终生服务，我们愿意给品牌永远的支持。</p>
                        </li>
                        <li class="item">
                            <h2 class="text-subtitle">智力资源</h2>
                            <p>我们随时把握最新市场研究成果。
                                生活需要设计，人们通过设计感受生活、成就梦想。 尚清美为客户创建一个智力资源平台，把握市场研究成果，积累生活乐趣，使我们的客户立足中国，成就精彩的品牌之星。</p>
                        </li>
                    </ol>
                    <br /><br />
                </div>
                <div class="row">
                    <div class="search-result-item hero-item no-hover-item">
                        <img src="../img/aboutUS_4th_1920x970.jpg" class="responsive"/>
{{--                        <div class="overlay-text text-medium leading-small">--}}
{{--                            <div class="item-tag">我们的文化 - 保持理智与激情</div>--}}
{{--                            <h2 class="item-title">好的设计不是在完成时评价, 而是在使用过程中, 逐渐体现出的实用性和品位.</h2>--}}
{{--                            <div class="item-subtitle">--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="row two-columns-list">
                    <h2 class="section-title">我们的作业理念:</h2>
                    <a class="item">
                        <h3>想得更宽更远</h3>
                        <p>所有强势的品牌，都源于一个高瞻的理念，是思想的高度决定了品牌成长的速度。
                            为了塑造、建立和管理优秀的品牌，我们以策略性思考，在纷繁芜杂的市场资料中理出一张简单地图，精确而简洁的为品牌策略定向，并对须要采取的行动提出前瞻性及详尽的建议。</p>
                    </a>
                    <a class="item">
                        <h3>专业的设计与策划</h3>
                        <p>尚清美团队的专业人员：设计师与专业顾问，拥有海内外专业学习或从业数年的经历。他们当中多数人拥有为世界知名品牌、企业提供设计、策划服务的经历。同时，他们激情十足，对工作充满热情。</p>
                    </a>
                    <a class="item">
                        <h3>资源广泛、目标一致</h3>
                        <p>每个尚清美的设计师与策划人，都拥有自己独立发展的巨大空间。在这个过程中，他们以各自的工作特点与思维形式为品牌做出贡献。同时，每个人又都具备高度的协作与合作意识，一切的工作都以客户的利益为目的。</p>
                    </a>
                    <a class="item">
                        <h3>真实的创意能力</h3>
                        <p>在尚清美，最迷人的时间是创意会议时间----经过严谨的市场研究、反复的客户沟通，策略已经明确；而为了在人们混沌的心智中获得关注，我们需要找到一个杰出的商业观念，简单、明确而又命中目标。好的创意使这个过程成为一次非常美妙的探险。</p>
                    </a>
                    <a class="item">
                        <h3>保持竞争力</h3>
                        <p>我们的团队彼此信任、彼此倚重；无边界的沟通有效的促进了项目执行力，降低项目的成本与风险，保障了客户品牌资产的有效增值。不断进步、不断创新，才会给予我们的客户不断地惊喜。 </p>
                    </a>
                    <a class="item">
                        <h3>经验丰富的团队</h3>
                        <p>尚清美团队汇聚了不同年龄、不同经历的设计师与策划人。他们当中有从业20多年，拥有国际一流设计作品的设计大师，也有受新艺术形式和思想熏陶、开创设计先河的行业先锋。这样的组合，使我们能够游刃有余地满足不同企业、不同行业领域的品牌建设需求。</p>
                    </a>
                </div>
                <div class="row two-columns-list">
                    <div class="col-100 text-huge base-margin-bottom">
                        <h2>我们的团队:</h2>
                    </div>
                    <div class="row is-flex base-margin-bottom">
                        <div class="col-25">
                            <img src="../wp-content/uploads/2019/04/CHARLES-TREVAIL2.png" class="responsive" />
                            <div class="mask" style="display: none">
                                2003 年毕业于东京学艺大学，获硕士学位。2004 年就职于中国人民大学艺术学院艺术设计系，主要教授课程：设计概论、V1 设计、广告设计等。
                            </div>
                            <div class="hover-red">
                                <div class="text-medium leading-small half-padding-top">
                                    王鹏
                                </div>
                                <div class="text-medium base-margin-bottom color-dark-gray">
                                    中国人民大学文化策划研究所副所长<br>
                                </div>
                            </div>
                        </div>
                        <div class="col-25">
                            <img src="../wp-content/uploads/2019/04/laura-krajecki.png" class="responsive" />
                            <div class="mask" style="display: none">
                                出版《陈浩陈炯素描作品》、《房地产全程策划》、《陈炯风景素描作品集》。外经贸部国际电子商务中心（四星酒店）室内设计河南濮阳五建集团景观设计宜宾新城 66 平方公里全案策划主持设计“録宝石景观公司”建筑浙江路桥 2.2 平方公里旧城改造全案策划浙江台州 27 平方公里南山旅游全案策山东潘博“总部基地
                            </div>
                            <div class="hover-red">
                                <div class="text-medium leading-small half-padding-top">
                                    陈炯
                                </div>
                                <div class="text-medium base-margin-bottom color-dark-gray">
                                    人民大学艺术学院副教授中央美术学院博士<br>
                                </div>
                            </div>
                        </div>
                        <div class="col-25">
                            <img src="../wp-content/uploads/2019/04/ANDY-PAYNE.png" class="responsive" />
                            <div class="mask" style="display: none">
                                中央工艺美术学院工业设计中国人民大学艺术学院新媒体艺术硕士

                                迪拜 chinaman 标示系统设计首都机场整体导视系统设计中国石油青海油田展览馆设计规划中国石油青海油田创作大型浮雕作品
                            </div>
                            <div class="hover-red">
                                <div class="text-medium leading-small half-padding-top">
                                    葛勇
                                </div>
                                <div class="text-medium base-margin-bottom color-dark-gray">
                                    人民大学艺术学院青年教师<br>
                                </div>
                            </div>
                        </div>
                        <div class="col-25">
                            <img src="../wp-content/uploads/2019/04/Gonzalo-Bruj%C3%B3.png" class="responsive" />
                            <div class="mask" style="display: none">
                                中苏远东地区艺术交流展东京设计艺术展艺术设计展中国人民大学“吴玉章学术讲座”奖杯设中韩教育作品展中国文物局中国文物信息中心“福禄寿喜”贺年卡
                            </div>
                            <div class="hover-red">
                                <div class="text-medium leading-small half-padding-top">
                                    唐晓刚
                                </div>
                                <div class="text-medium base-margin-bottom color-dark-gray">
                                    人民大学艺术学院青年教师<br>
                                </div>
                            </div>
                        </div>
                        <div class="col-25">
                            <img src="../wp-content/uploads/2019/04/REBECCA-ROBBINS.png" class="responsive" />
                            <div class="mask" style="display: none">
                                《创意不是拼出来的》1《文化的自新一一创新的民族化平面设计》《江苏省东台市广告设置规划》编制十届全国美展优秀奖全国大学生广告大赛指导教师奖
                            </div>
                            <div class="hover-red">
                                <div class="text-medium leading-small half-padding-top">
                                    鲁晋及
                                </div>
                                <div class="text-medium base-margin-bottom color-dark-gray">
                                    同济大学艺术学院青年教师<br>
                                </div>
                            </div>
                        </div>
                        <div class="col-25">
                            <img class="image" src="../wp-content/uploads/2016/09/Manfredi.jpg" class="responsive" />
                            <div class="mask" style="display: none">
                                注重视觉图形语言的研究。他所编著的《图形设计基础》注重系统理论和创意方法研究，特别是注重图形语意的研究，起到了一定的引领作用。
                            </div>
                            <div class="hover-red" >
                                <div class="text-medium leading-small half-padding-top">
                                    刘东峰
                                </div>
                                <div class="text-medium base-margin-bottom color-dark-gray">
                                    山东师范大学美术学院青年教师同济大学研究生毕业<br>
                                </div>
                            </div>
                        </div>
                        <div class="col-25">
                            <img class="image" src="../wp-content/uploads/2019/04/MARK-OBRIEN.png" class="responsive" />
                            <div class="mask" style="display: none">
                                德国著名设计大师汉斯-希尔曼い国际著名视觉设计大师霍尔格-马蒂斯英国皇家艺术学院罗伯特及其导阿法国第 14 届肖蒙国际海报展 204 全国公益海报大赛北京 2008 主题招贴大赛苏州印象设计大赛
                            </div>
                            <div class="hover-red">
                                <div class="text-medium leading-small half-padding-top">
                                    丛志强
                                </div>
                                <div class="text-medium base-margin-bottom color-dark-gray">
                                    人民大学艺术学院青年教师<br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $(".col-25").hover(function(){
            $(this).children(".mask").css("height",$(".image").height());
            $(this).children(".mask").css("width",$(".image").width());
            $(this).children(".mask").show();
        }, function(){
            $(this).children(".mask").hide();
        });
    });
</script>

