@extends('layout/master')

@section('maincontent')
<section id="slider">
    <!-- 슬라이더 섹션 -->
    <div class="container">
        <div class="slider">
            <div class="btn-div">
                <button class="btn btn-outline-light">&lt;</button>
                <button class="btn btn-outline-light">&gt;</button>
            </div>
            <div class="slide-image" style="background-image:url('/imgs/slideimg1.png')">
                <div class="filter"></div>
                <div class="slide-content">
                    <h1>파리</h1>
                    <p>국가:프랑스 명소:샹젤리제, 에펠탑, 그랑 팔레</p>
                </div>
            </div>
            <div class="slide-image" style="background-image:url('/imgs/slideimg2.jpg')">
                <div class="filter"></div>
                <div class="slide-content">
                    <h1>나스보로</h1>
                    <p>국가:영국 명소:나소보로의 다리, Knaresborough</p>
                </div>
            </div>
            <div class="slide-image" style="background-image:url('/imgs/slideimg3.jpg')">
                <div class="filter"></div>
                <div class="slide-content">
                    <h1>두바이</h1>
                    <p>국가:아랍에미리트 명소:부르즈 할리파, 스카이 라인</p>
                </div>
            </div>
        </div>
        <div class="indicator">
            <ul>
                <li class="active"></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
</section>

<div class="container">
    <section id="editorPick" class="mt-5">
        <div class="item">
            <div class="img-box">
                <img src="/imgs/item1.jpg" alt="아이템 이미지">
            </div>
            <div class="info-box">
                <h3>보스니아, 사라예보</h3>
                <p>보스니아 헤르체코비나의 최대 도시이자 수도인 사라예보에는 꿈결 같은 진정함이 있다. 
                    알프스 산맥 안에 있고 밀야츠카 강이 흐른다. 아름다운 모스크, 교회, 역사적 건물들이 넘치고, 가게와 매대도 잔뜩 있다. 
                    이 도시를 지극히 특별한 곳으로 만드는 것은 남아있는 과거 전쟁들의 흔적이다. 
                    폭탄이 떨어진 자리 근처의 건물은 껍데기만 남아있고, 전쟁 이후 세워진 기념비들이 있다.</p>
            </div>
        </div>
        <div class="item">
            <div class="img-box">
                <img src="/imgs/item2.jpg" alt="아이템 이미지">
            </div>
            <div class="info-box">
                <h3>이탈리아, 플로렌스</h3>
                <p>플로렌스는 그 자체로 예술 작품이다. 중세의 이 도시는 최고의 프레스코, 조각, 교회, 궁궐, 건축들을 자랑하고,
                    숨어 있는 로맨틱한 레스토랑, 트렌디한 밤 문화 분위기도 있다. 
                    플로렌스에는 피아자 델 두오모, 폰데 베키오, 팔라조 피티 등 가장 유명한 관광 명소들이 있다. 
                    자연과 문화가 어우러져 놀랄 만한 경험을 만들어내는 플로렌스의 매력은 영원하다.</p>
            </div>
        </div>
        <div class="item">
            <div class="img-box">
                <img src="/imgs/item3.jpg" alt="아이템 이미지">
            </div>
            <div class="info-box">
                <h3>스페인, 세비야</h3>
                <p>세비야에는 문화가 풍성하고 아름다움이 넘친다. 안달루시아 중앙에 위치한 세비야 한 가운데에는 구알달키비르 강이 흐른다. 
                    세비야는 아름다운 궁궐, 미국의 금 덕에 이 곳에 자리잡은 부유한 산업을 자랑한다. 반드시 봐야 할 곳으로는 대성당과 히랄다 - 
                    세계에서 세 번째로 큰 대성당 - 과 유럽에서 가장 오래된 궁궐인 알카자르가 있다. 구알달키비르 강 또한 세비야의 멋진 명소다.</p>
            </div>
        </div>
        <div class="item">
            <div class="img-box">
                <img src="/imgs/item4.jpg" alt="아이템 이미지">
            </div>
            <div class="info-box">
                <h3>이탈리아, 밀라노</h3>
                <p>이탈리아 북부 롬바르디아 지역에 위치한 밀라노는 옛날과 현대의 영향이 섞여 있는 활기찬 도시다. 
                    패션과 디자인의 전세계의 수도이며, 조르지오 아르마니, 발렌티노 가라바니, 지아니 베르사체 등의 디자인이 생산된다. 
                    이탈리아 증권 거래의 허브이기도 해서 이탈리아 금융의 중심지다. 밀라노의 건축 디자인은 훌륭하고 음식도 맛있다. </p>
            </div>
        </div>
    </section>
    <nav aria-label="..." class="pagination justify-content-center mt-5">
        <ul class="pagination">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>

@endsection