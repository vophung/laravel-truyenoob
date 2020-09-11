@extends('themes.master-themes')
@section('themes-content')
<div class="container" id="intro-index">
    <div class="index-intro">
        <div class="item top-1" itemscope itemtype="#">
            <a href="{{route('tencuatruyen',$story1)}}" itemprop="url">
                @if ($story1->status == 1)
                <span class="full-label"></span>
                @else
                @endif
                <img src="{{URL::to('images/' . $story1->image)}}
                " lazysrc=" {{URL::to('images/' . $story1->image)}}" alt="{{$story1->name}}" class="img-responsive item-img" itemprop="image">
                <div class="title">
                    <h3 itemprop="name">{{$story1->name}}</h3>
                </div>
            </a>
        </div>
        <div class="item top-2" itemscope itemtype="#">
            <a href="{{route('tencuatruyen',$story2)}}" itemprop="url">
                @if ($story2->status == 1)
                <span class="full-label"></span>
                @else
                @endif
                <img src="
                {{URL::to('images/' . $story2->image)}}
                " lazysrc=" {{URL::to('images/' . $story2->image)}}" alt="{{$story2->name}}" class="img-responsive item-img" itemprop="image">
                <div class="title">
                    <h3 itemprop="name">{{$story2->name}}</h3>
                </div>
            </a>
        </div>
        <div class="item top-3" itemscope itemtype="#">
            <a href="{{route('tencuatruyen',$story3)}}" itemprop="url">
                @if ($story3->status == 1)
                <span class="full-label"></span>
                @else
                @endif<img src="
                {{URL::to('images/' . $story3->image)}}
                " lazysrc=" {{URL::to('images/' . $story3->image)}}" alt="{{$story3->name}}" class="img-responsive item-img" itemprop="image">
                <div class="title">
                    <h3 itemprop="name">{{$story3->name}}</h3>
                </div>
            </a>
        </div>
        <div class="item top-4" itemscope itemtype="#">
            <a href="{{route('tencuatruyen',$story4)}}" itemprop="url">
                @if ($story4->status == 1)
                <span class="full-label"></span>
                @else
                @endif<img src="
                {{URL::to('images/' . $story4->image)}}
                " lazysrc=" {{URL::to('images/' . $story4->image)}}" alt="{{$story4->name}}" class="img-responsive item-img" itemprop="image">
                <div class="title">
                    <h3 itemprop="name">{{$story4->name}}</h3>
                </div>
            </a>
        </div>
        <div class="item top-5" itemscope itemtype="">
            <a href="{{route('tencuatruyen',$story5)}}" itemprop="url">
                @if ($story5->status == 1)
                <span class="full-label"></span>
                @else
                @endif<img src="
                {{URL::to('images/' . $story5->image)}}
                " lazysrc=" {{URL::to('images/' . $story5->image)}}" alt="{{$story5->name}}" class="img-responsive item-img" itemprop="image">
                <div class="title">
                    <h3 itemprop="name">{{$story5->name}}</h3>
                </div>
            </a>
        </div>
        <div class="item top-6" itemscope itemtype="">
            <a href="{{route('tencuatruyen',$story6)}}" itemprop="url">
                @if ($story6->status == 1)
                <span class="full-label"></span>
                @else
                @endif<img src="
                {{URL::to('images/' . $story6->image)}}
                " lazysrc=" {{URL::to('images/' . $story6->image)}}" alt="{{$story6->name}}" class="img-responsive item-img" itemprop="image">
                <div class="title">
                    <h3 itemprop="name">{{$story6->name}}</h3>
                </div>
            </a>
        </div>
        <div class="item top-7" itemscope itemtype="">
            <a href="{{route('tencuatruyen',$story7)}}" itemprop="url">
                @if ($story7->status == 1)
                <span class="full-label"></span>
                @else
                @endif<img src="
                {{URL::to('images/' . $story7->image)}}
                " lazysrc=" {{URL::to('images/' . $story7->image)}}" alt="{{$story7->name}}" class="img-responsive item-img" itemprop="image">
                <div class="title">
                    <h3 itemprop="name">{{$story7->name}}</h3>
                </div>
            </a>
        </div>
        <div class="item top-8" itemscope itemtype="">
            <a href="{{route('tencuatruyen',$story8)}}" itemprop="url">
                @if ($story8->status == 1)
                <span class="full-label"></span>
                @else
                @endif<img src="
                {{URL::to('images/' . $story8->image)}}
                " lazysrc=" {{URL::to('images/' . $story8->image)}}" alt="{{$story8->name}}" class="img-responsive item-img" itemprop="image">
                <div class="title">
                    <h3 itemprop="name">{{$story8->name}}</h3>
                </div>
            </a>
        </div>
        <div class="item top-9" itemscope itemtype="">
            <a href="{{route('tencuatruyen',$story9)}}" itemprop="url">
                @if ($story9->status == 1)
                <span class="full-label"></span>
                @else
                @endif<img src="
                {{URL::to('images/' . $story9->image)}}
                " lazysrc=" {{URL::to('images/' . $story9->image)}}" alt="{{$story9->name}}" class="img-responsive item-img" itemprop="image">
                <div class="title">
                    <h3 itemprop="name">{{$story9->name}}</h3>
                </div>
            </a>
        </div>
        <div class="item top-10" itemscope itemtype="">
            <a href="{{route('tencuatruyen',$story10)}}" itemprop="url">
                @if ($story10->status == 1)
                <span class="full-label"></span>
                @else
                @endif<img src="
                {{URL::to('images/' . $story10->image)}}
                " lazysrc=" {{URL::to('images/' . $story10->image)}}" alt="{{$story10->name}}" class="img-responsive item-img" itemprop="image">
                <div class="title">
                    <h3 itemprop="name">{{$story10->name}}</h3>
                </div>
            </a>
        </div>
        <div class="item top-11" itemscope itemtype="">
            <a href="{{route('tencuatruyen',$story11)}}" itemprop="url">
                @if ($story11->status == 1)
                <span class="full-label"></span>
                @else
                @endif<img src="
                {{URL::to('images/' . $story11->image)}}
                " lazysrc=" {{URL::to('images/' . $story11->image)}}" alt="{{$story11->name}}" class="img-responsive item-img" itemprop="image">
                <div class="title">
                    <h3 itemprop="name">{{$story11->name}}</h3>
                </div>
            </a>
        </div>
        <div class="item top-12" itemscope itemtype="">
            <a href="{{route('tencuatruyen',$story12)}}" itemprop="url">
                @if ($story12->status == 1)
                <span class="full-label"></span>
                @else
                @endif<img src="
                {{URL::to('images/' . $story12->image)}}
                " lazysrc=" {{URL::to('images/' . $story12->image)}}" alt="{{$story12->name}}" class="img-responsive item-img" itemprop="image">
                <div class="title">
                    <h3 itemprop="name">{{$story12->name}}</h3>
                </div>
            </a>
        </div>
        <div class="item top-13" itemscope itemtype="">
            <a href="{{route('tencuatruyen',$story13)}}" itemprop="url">
                @if ($story13->status == 1)
                <span class="full-label"></span>
                @else
                @endif<img src="
                {{URL::to('images/' . $story13->image)}}
                " lazysrc=" {{URL::to('images/' . $story13->image)}}" alt="{{$story13->name}}" class="img-responsive item-img" itemprop="image">
                <div class="title">
                    <h3 itemprop="name">{{$story13->name}}</h3>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="container" id="list-index">
    <div class="row text-center"></div>
    <div class="hide" id="history-holder"></div>
    <div class="list list-truyen list-new col-xs-12 col-sm-12 col-md-8 col-truyen-main">
        <div class="title-list">
            <h2><a href="{{route('truyenmoi')}}" title="Truyện mới">truyện mới cập nhật</a></h2>
            <a href="{{route('truyenmoi')}}" title="Truyện mới"><span class="glyphicon glyphicon-menu-right"></span></a>
            <select id="new-select" class="form-control new-select" aria-label="Chọn thể loại">
                <option value="all">Tất cả</option>
                <option value="1">Tiên Hiệp</option>
                <option value="31">Khác</option>
            </select>
        </div>
        @foreach($chapter as $chapters)
        <div class="row" itemscope itemtype="https://schema.org/Book">
            <div class="col-xs-9 col-sm-6 col-md-5 col-title">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <h3 itemprop="name"><a href="{{route('tencuatruyen',$chapters->story->id)}}" title="{{$chapters->name}}" itemprop="url">{{$chapters->name}}</a></h3>
            </div>

            <div class="hidden-xs col-sm-3 col-md-3 col-cat text-888">
                @foreach($chapters->story->category as $chap)
                <a itemprop="genre" href="{{route('parent-category',$chap->id)}}" title="Đô Thị">
                    {{$loop->first ? '' : ', '}}
                    {{$chap->name}}
                </a>
                @endforeach
            </div>
            <div class="col-xs-3 col-sm-3 col-md-2 col-chap text-info"><a href="{{route('chuong',['story' => $chapters->story->id , 'chuong' => $chapters->id])}}" title="{{$chapters->story->name}} - {{$chapters->subname}}"><span class="chapter-text"><span>{{$chapters->subname}}</span></a></div>
            <div class="hidden-xs hidden-sm col-md-2 col-time text-888">
                {{$chapters->getTimeAgo($chapters->created_at)}}
                {{-- {{ $chapters->created_at->diffForHumans() }} --}}
                {{-- {{$chapters->created_at->format('H:i:s')}} --}}
            </div>
        </div>
        @endforeach
    </div>
    <div class="visible-md-block visible-lg-block col-md-4 text-center col-truyen-side">
        <div class="hide" id="history-holder-side"></div>
        <div class="list list-truyen list-cat col-xs-12">
            <div class="title-list">
                <h4>Thể loại truyện</h4>
            </div>
            <div class="row">
                @foreach($category as $ctg_sidebar)
                <div class="col-xs-6"><a href="{{route('parent-category',$ctg_sidebar->id)}}" title="Truyện Tiên Hiệp">{{$ctg_sidebar->name}}</a></div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="container" id="truyen-slide">
    <div class="list list-thumbnail col-xs-12">
        <div class="title-list">
            <h2><a href="https://truyenfull.vn/danh-sach/truyen-full/" title="Truyện full">Truyện đã hoàn thành</a></h2>
            <a href="https://truyenfull.vn/danh-sach/truyen-full/" title="Truyện full"><span class="glyphicon glyphicon-menu-right"></span></a>
        </div>
        <div class="row">
            <div class="col-xs-4 col-sm-3 col-md-2">
                <a href="https://truyenfull.vn/thien-ha-huu-dich/" title="Thiên Hạ Hữu Địch [Luận Anh Hùng]">
                    <div class="lazyimg" data-desk-image="https://static.8cache.com/cover/o/eJzLyTDW13UrDcvz9MwID08y0Q8Lyfc3K8y1jHLx1HeEgtz8cv2MPMsQi6Cw-MoAC_1yQzMT3QwjE1MAX20SuQ==/thien-ha-huu-dich.jpg" data-image="https://static.8cache.com/cover/o/eJzLyTDW13UrDcvz9MwID08y0Q8Lyfc3K8y1jHLx1HeEgtz8cv2MPMsQi6Cw-MoAC_1yQ0NT3QxDM3MAX1MSuA==/thien-ha-huu-dich.jpg" data-alt="Thiên Hạ Hữu Địch [Luận Anh Hùng]"></div>
                    <div class="caption">
                        <h3>Thiên Hạ Hữu Địch [Luận Anh Hùng]</h3>
                        <small class="btn-xs label-primary">Full - 132 chương</small>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
