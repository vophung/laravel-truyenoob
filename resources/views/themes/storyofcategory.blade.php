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
            @foreach($pag_story as $pag)
            <div class="row" itemscope itemtype="https://schema.org/Book">
                <div class="col-xs-10">
                    <div>
                        <span class="glyphicon glyphicon-book"></span>
                        <h3 class="truyen-title" itemprop="name"><a href="{{route('tencuatruyen',$pag->id)}}" title="{{$pag->name}}" itemprop="url">{{$pag->name}}</a></h3>
                        @foreach($pag->author as $sry_at)
                            @php
                                $date_now = \Carbon\Carbon::now();
                                // echo $date_now;
                            @endphp
                            {{-- <br>
                            {{$story_contain->created_at}}
                            {{$story_contain->created_at->diffInDays($date_now)}} --}}
                            @if($pag->created_at->diffInDays($date_now) < 3)
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
                            @if($story == $pag->id)
                                <a href="{{route('chuong',['story' => $pag->id , 'chuong' => $pag->chapter->first()->id])}}" title="{{$pag->name}} - {{$chapters}}">
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
        <div class="list list-truyen list-cat col-xs-12">
			<div class="title-list">
				<h4>Thể loại truyện</h4>
			</div>
			<div class="row">
				@foreach($category as $cate_sidebar)
				<div class="col-xs-6"><a href="{{route('parent-category', $cate_sidebar->id)}}" title="{{$cate_sidebar->name}}">{{$cate_sidebar->name}}</a></div>
				@endforeach
			</div>
		</div>
    </div>
</div>
<div class="container text-center pagination-container">
    <div class="col-xs-12 col-sm-12 col-md-9 col-truyen-main">
        <ul class="pagination pagination-sm">
            <li class="active">{{$pag_story->links()}}</li>
        </ul>
    </div>
</div>
@endsection
