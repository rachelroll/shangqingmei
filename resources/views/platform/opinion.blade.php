@extends('layout/layout')

@section('content')
    <div class="main-container white-bg main-container-margin">
        <div class="wrap-iconic-case">
            <div class="related-content-row">
                <a href="{{ route('web.service.show', ['id' => 2]) }}" class="search-result-item">
                    <img src="../../wp-content/uploads/2019/03/Sensodyne-True-White-Group.png"
                         class="responsive">
                    <div class="overlay-text text-medium leading-small">
                        <h2 class="item-title">在线咨询 & 留言</h2>
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
            <h1 class="zaixianzixun">视野观点</h1>
            <div class="text-image-row">
                @include('platform/nav')
                <div class="image-text">
                    <p>从识别的角度看CI，我们能发现导入CI并不是对本质的影响和转变，而是对沟通方式、传播效果的促进。
                        尚清美国际以企业识别观点对待CI规划，注重对企业整体的把握和品牌战略的规划；同时，尚清美国际以VI设计为起点但并不以此为终点，更关心CI的应用管理、品牌的深度推广和营销的推进。</p>
                    <br>
                    <h1 style="font-size: 22px">CI / VI</h1>
                    <hr>
                    <p>设计的最终目的在于彰显企业的独特形象，提升市场竞争力，促进商业利益的最大化。因此，设计必须深入到企业和品牌的灵魂深处，从根本上探寻它们的内在价值，进而塑造企业和品牌的独特灵魂与气质，使之卓然于市场的企业集群和商品集群之中，成为终极销售的赢家。</p>
                    <ul>
                        @if($ci_files)
                        @foreach($ci_files as $item)
                        <li>
                            <a href="{{ env('CDN_DOMAIN','//oss-cn-beijing.aliyuncs.com'). '/'. $item['file'] }}" target="_blank">
                                >> {{ $item['title'] }}
                            </a>
                        </li>
                        @endforeach
                            @endif
                    </ul>
                    <br>
                    <h1 style="font-size: 22px">品牌</h1>
                    <hr>
                    <p>研究显示，广告投入加大一倍，只取得市场份额平均3.5％的增长，并会激起竞争对手更大的广告投入；而好创意引起的注意力比其他广告提高20％，平均只能带来市场份额大约 0.5％的增长；经测试，在品牌优势方面加大一倍的力度，可以达到提高市场占有份额16.1％的效果，没有正确的品牌规划，谋求效益几乎是件碰运气的事情。</p>
                    <ul>
                        @if($brand_files)
                        @foreach($brand_files as $item)
                            <li>
                                <a href="{{ env('CDN_DOMAIN','//oss-cn-beijing.aliyuncs.com'). '/'. $item['file'] }}" target="_blank">
                                    >> {{ $item['title'] }}
                                </a>
                            </li>
                        @endforeach
                            @endif
                    </ul>
                    <br>
                    <h1 style="font-size: 22px">营销与传播</h1>
                    <hr>
                    <p>我热衷于市场定位与价值有所帮助的所有传播方式，只有我们把自己视为客户的传播者，才能做得最好。</p>
                    <ul>
                        @if($sales_files)
                        @foreach($sales_files as $item)
                            <li>
                                <a href="{{ env('CDN_DOMAIN','//oss-cn-beijing.aliyuncs.com'). '/'. $item['file'] }}" target="_blank">
                                    >> {{ $item['title'] }}
                                </a>
                            </li>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            @include('platform/message')
        </div>
    </div>
    @endsection
