@extends('themes.master-themes')
@section('themes-content')
<div class="container" id="list-page">
	<div class="col-xs-12 col-sm-12 col-md-9 col-truyen-main">
		<div class="text-center"></div>
		<div class="list list-truyen col-xs-12">
			<div class="title-list">
				<h2>Tác giả {{$contain->name}}</h2>
				<div class="filter"><a href="#"></a></div>
			</div>
			@foreach($contain->story as $story_contain)
			<div class="row" itemscope itemtype="https://schema.org/Book">
				<div class="col-xs-9">
					<div>
						<span class="glyphicon glyphicon-book"></span> 
						<h3 class="truyen-title" itemprop="name">
							<a href="{{route('tencuatruyen',$story_contain->id)}}" title="{{$story_contain->name}}" itemprop="url">{{$story_contain->name}}</a>
						</h3>
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
			<div class="panel-body">Danh sách truyện của tác giả  {{$contain->name}}</div>
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
	<div class="col-xs-12 col-sm-12 col-md-9 col-truyen-main"></div>
</div>
</div>
@endsection