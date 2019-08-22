
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
                        <li>- 视觉形象诊断</li>
                    </ul>
                    <h1>诊断案例</h1>
                    <ul>
                        <li style="color:red">- CI 理念的厘清</li>
                        <li>- 形象过渡案例</li>
                        <li>- 形象更新案例</li>
                        <li>- 尚清美诊断案例</li>
                    </ul>
                </div>
                <div class="image-text">
                    <h1 style="font-size: 22px">欧美CI理念</h1>
                    <br>
                    <p><span style="font-weight: bold;">CI即企业识别：</span>(Corporate ldentity)，是以标准字和商标作为沟通企业理念和企业文化的工具，是一种改善企业形象的经营技法， CI主要工作在于视觉识别。</p>
                    <p>受美国汽车文化影响至深，美国人认为如果企业名称、色彩、商标设计得有特色而且一目了然，那么该企业就更具竞争优势。</p>
                    <p>对于欧美设计界来说，他们将自己的CI工作界定在视觉范畴，并不过多扩展至企业管理。</p>
                    <p>事情也并不绝对，在日本型CI的影响下，欧美也开始注重企业理念与企业文化的认知活动。</p>
                    <br>
                    <h1 style="font-size: 22px">日本CI理念</h1>
                    <br>
                    <p><span style="font-weight: bold;">CI即CIS:</span> 由理念(MI)、行为(BI)、视觉(VI)三大要素构成有机的系统，是一种明确地认知企业理念和企业文化的活动，而理念是CI的核心。</p>
                    <p>日本较早实行CI的公司，如大荣、马自达（MAZDA)等均受美国式CI影响,专门致力于视觉统一设计，以标准字、商标、标准色作为CI核心。</p>
                    <p>后来，日本CI战略注重与本民族文化结合，强调企业理念与经营方针，注重员工意识和企业体质等等深层问题，以发挥CI在体制上的管理作用。</p>
                    <p>日本CI设计的代表人物中西元男认为，CI对企业的革新不仅仅是停留在表层形象，而是整体经营上革新。但也有专家认为，日本及东方的CI过于强调了CI对企业管理的作用。 </p>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
