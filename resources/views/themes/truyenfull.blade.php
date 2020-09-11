@extends('themes.master-themes')
@section('themes-content')
<div class="container" id="list-page">
	<div class="col-xs-12 col-sm-12 col-md-9 col-truyen-main">
		<div class="text-center"></div>
		<div class="list list-truyen col-xs-12">
			<div class="title-list">
				<h2>Truyện đã hoàn thành</h2>
            </div>

            <div class="row" itemscope itemtype="https://schema.org/Book">
                @foreach($pag_story as $stories)
				<div class="col-xs-9">
					<div>
						<span class="glyphicon glyphicon-book"></span>
						<h3 class="truyen-title" itemprop="name"><a href="{{route('tencuatruyen',$stories->id)}}" title="" itemprop="url">{{$stories->name}}</a></h3>
						<span class="label-title label-full"></span>
						</span><span class="author" itemprop="author">
						<span class="glyphicon glyphicon-pencil">
						</span>{{$stories->author->first()->name}}</span>
					</div>
                </div>
				<div class="col-xs-2 text-info">
                    <div>
                        @foreach($chapter as $story => $chap)
                        @if($story == $stories->id)
                            <a href="{{route('chuong',['story' => $stories->id,'chuong' => $stories->chapter->first()->id])}}" title="{{$stories->name}} - {{$chap}}"><span class="chapter-text">
                                {{$chap}}
                            </a>
                        @endif
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>

		</div>
	</div>
	<div class="visible-md-block visible-lg-block col-md-3 text-center col-truyen-side">
		<div class="panel cat-desc text-left">
			<div class="panel-body">Danh sách truyện chữ được cập nhật (vừa ra mắt, thêm chương mới, sửa nội dung,..) gần đây.</div>
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
