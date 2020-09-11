@extends('themes.master-themes')
@section('themes-content')
<div class="container" id="list-page">
    <div class="col-xs-12 col-sm-12 col-md-9 col-truyen-main">
        <div class="text-center"></div>
        <div class="list list-truyen col-xs-12">
            <div class="title-list">
                <h2>Thể Loại {{$contain->name}}</h2>
                <div class="filter"><a href="{{route('parent-category',$contain->id)}}">{{$contain->name}} hoàn (full)</a></div>
            </div>
            @foreach($contain->story as $story_contain)
            <div class="row" itemscope itemtype="https://schema.org/Book">
                <div class="col-xs-10">
                    <div>
                        <span class="glyphicon glyphicon-book">{{$story_contain->id}}</span>
                        <h3 class="truyen-title" itemprop="name"><a href="{{route('tencuatruyen',$story_contain->id)}}" title="{{$story_contain->name}}" itemprop="url">{{$story_contain->name}}</a></h3>
                        @foreach($story_contain->author as $sry_at)
                            @php
                                $date_now = \Carbon\Carbon::now();
                                // echo $date_now;
                            @endphp
                            {{-- <br>
                            {{$story_contain->created_at}}
                            {{$story_contain->created_at->diffInDays($date_now)}} --}}
                            @if($story_contain->created_at->diffInDays($date_now) < 3)
                            <span class="label-title label-new"></span>
                            @endif

                            <span class="author" itemprop="author">
                                <span class="glyphicon glyphicon-pencil"></span>{{$sry_at->name}}
                            </span>
                        @endforeach
                    </div>
                </div>
                <div class="col-xs-2 text-info">
                    <div>
                        @foreach($chapter as $story => $chapters)
                            @if($story == $story_contain->id)
                                <a href="{{route('chuong',['story' => $story_contain->id,'chuong' => $story_contain->chapter->first()->id])}}" title="{{$story_contain->name}} - {{$chapters}}">
                                    <span class="chapter-text">
                                        <span> {{$chapters}}<br></span>
                                    </span>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="visible-md-block visible-lg-block col-md-3 text-center col-truyen-side">
        <div class="panel cat-desc text-left">
            <div class="panel-body">
                {{$contain->description}}
            </div>
        </div>
    </div>
</div>
<div class="container text-center pagination-container">
    <div class="col-xs-12 col-sm-12 col-md-9 col-truyen-main">
        <ul class="pagination pagination-sm">
            <li class="active"><span>1<span class="sr-only"> (đang xem)</span></span></li>
            <li><a href="https://truyenfull.vn/the-loai/tien-hiep/trang-2/" title="Tiên Hiệp - Trang 2">2</a></li>
            <li><a href="https://truyenfull.vn/the-loai/tien-hiep/trang-3/" title="Tiên Hiệp - Trang 3">3</a></li>
            <li><a href="https://truyenfull.vn/the-loai/tien-hiep/trang-4/" title="Tiên Hiệp - Trang 4">4</a></li>
            <li><a href="https://truyenfull.vn/the-loai/tien-hiep/trang-6/" title="Tiên Hiệp - Trang 6">6</a></li>
            <li><a href="https://truyenfull.vn/the-loai/tien-hiep/trang-11/" title="Tiên Hiệp - Trang 11">11</a></li>
            <li><a href="https://truyenfull.vn/the-loai/tien-hiep/trang-2/" title="Tiên Hiệp - Trang 2"><span class="sr-only">Trang tiếp</span><span class="glyphicon glyphicon-menu-right"></span></a></li>
            <li><a href="https://truyenfull.vn/the-loai/tien-hiep/trang-27/" title="Tiên Hiệp - Trang 27">Cuối <span class="arrow">&raquo;</span></a></li>
            <li class="dropup page-nav">
                <a href="javascript:void(0)" data-toggle="dropdown">Chọn trang <span class="caret"></span></a>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                    <form action="." name="page_jump" id="page_jump" method="get">
                        <div class="input-group"><input name="page_type" type="hidden" value="the-loai"><input name="truyen" type="hidden" value="tien-hiep"><input name="filter" type="hidden" value=""><input class="form-control" name="page" type="number" placeholder="Số trang..." value=""><span class="input-group-btn"><button class="btn btn-default" type="submit">Đi</button></span></div>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</div>
@endsection
