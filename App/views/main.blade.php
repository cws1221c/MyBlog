@extends('layout/master')

@section('maincontent')
<div class="wrapper" style="background-image:url('imgs/travel15.jpg'); background-size:cover;">
    <section id="slider">
        <!-- 슬라이더 섹션 -->
        <div class="container" >
            <div class="slider">
                <div class="btn-div">
                    <button class="btn btn-outline-light">&lt;</button>
                    <button class="btn btn-outline-light">&gt;</button>
                </div>
                @foreach($list_slide as $item_slide)
                <div class="slide-image">
                    <div class="slide-img">
                        {!! $item_slide->thumbnail !!}
                    </div>
                    <div class="filter"></div>
                    <div class="slide-content">
                        <h1>{{$item_slide->title}}</h1>
                        <p>{{$item_slide->content}}</p>
                    </div>
                </div>
                @endforeach
                <!-- <div class="slide-image" style="background-image:url('/imgs/slideimg1.png')">
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
            </div>   -->
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
            @foreach($list as $item)
            <div class="item">
                <div class="img-box">
                    {!! $item->thumbnail !!}
                </div>
                <div class="info-box">
                    <h3>
                        <a href="/view?id={{ $item->id}}"></a>{{$item->title}}</h3>
                    <span class="badge badge-primary">{{ date("Y년 m월 d일", strtotime($item->wdate))}}</span>
                    <p>{{$item->content}}</p>
                    @if(isset($_SESSION['user']))
                    <div class="float-right">
                        <a href="/update?id={{ $item->id }}" class="btn btn-info">수정</a>
                        <a href="/delete?id={{ $item->id }}" class="btn btn-danger">삭제</a>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </section>
        <nav aria-label="..." class="pagination justify-content-center mt-5">
            <ul class="pagination">
                @if($p->prev)
                <li class="page-item disabled"><a class="page-link" href="/?p={{$p->start - 1}}" tabindex="-1">Previous</a></li>
                @endif
                @for($i = $p->start; $i <= $p->end; $i++)
                    @if($i == $p->current)
                    <li class="page-item"><a class="page-link" href="/?p={{$i}}">{{ $i }}</a></li>
                    @else
                    <li><a class="page-link" href="/?p={{$i}}">{{ $i }}</a></li>
                    @endif
                    @endfor
                    @if($p->next)
                    <li class="page-item"><a class="page-link" href="/?p={{$p->end + 1}}">Next</a></li>
                    @endif

            </ul>
        </nav>
    </div>
</div>
@endsection