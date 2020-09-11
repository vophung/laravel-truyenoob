@extends('themes.master-themes')
@section('themes-content')
<div class="container" id="list-page">
	<div class="col-xs-12 col-sm-12 col-md-9 col-truyen-main">
		<div class="text-center"></div>
		<div class="list list-truyen col-xs-12">
			<div class="title-list">
				<h2>Truyện mới vừa cập nhật</h2>
            </div>

            <div class="row" itemscope itemtype="https://schema.org/Book">
                @foreach($story as $stories)
				<div class="col-xs-9">
					<div>
						<span class="glyphicon glyphicon-book"></span>
						<h3 class="truyen-title" itemprop="name"><a href="{{route('tencuatruyen',$stories->id)}}" title="{{$stories->name}}" itemprop="url">{{$stories->name}}</a></h3>
						</span><span class="author" itemprop="author">
						<span class="glyphicon glyphicon-pencil">
						</span>{{$stories->author->first()->name}}</span>
					</div>
                </div>
				<div class="col-xs-2 text-info">
                    <div>
                        @foreach($chapter as $story => $chap)
                        @if($story == $stories->id)
                            <a href="#" title="{{$stories->name}} - {{$chap}}"><span class="chapter-text">
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
				<div class="col-xs-6"><a href="{{route('parent-category',$cate_sidebar->id)}}" title="{{$cate_sidebar->name}}">{{$cate_sidebar->name}}</a></div>
                @endforeach
            </div>
		</div>
	</div>
</div>
<div class="container text-center pagination-container">
	<div class="col-xs-12 col-sm-12 col-md-9 col-truyen-main">
		<ul class="pagination pagination-sm">
			<li class="active"><span>1<span class="sr-only"> (đang xem)</span></span></li>
			<li><a href="https://truyenfull.vn/danh-sach/truyen-moi/trang-2/" title="Truyện mới cập nhật - Trang 2">2</a></li>
			<li><a href="https://truyenfull.vn/danh-sach/truyen-moi/trang-3/" title="Truyện mới cập nhật - Trang 3">3</a></li>
			<li><a href="https://truyenfull.vn/danh-sach/truyen-moi/trang-4/" title="Truyện mới cập nhật - Trang 4">4</a></li>
			<li><a href="https://truyenfull.vn/danh-sach/truyen-moi/trang-6/" title="Truyện mới cập nhật - Trang 6">6</a></li>
			<li><a href="https://truyenfull.vn/danh-sach/truyen-moi/trang-11/" title="Truyện mới cập nhật - Trang 11">11</a></li>
			<li><a href="https://truyenfull.vn/danh-sach/truyen-moi/trang-2/" title="Truyện mới cập nhật - Trang 2"><span class="sr-only">Trang tiếp</span><span class="glyphicon glyphicon-menu-right"></span></a></li>
			<li><a href="https://truyenfull.vn/danh-sach/truyen-moi/trang-772/" title="Truyện mới cập nhật - Trang 772">Cuối <span class="arrow">&raquo;</span></a></li>
			<li class="dropup page-nav">
				<a href="javascript:void(0)" data-toggle="dropdown">Chọn trang <span class="caret"></span></a>
				<div class="dropdown-menu dropdown-menu-right" role="menu">
					<form action="." name="page_jump" id="page_jump" method="get">
						<div class="input-group"><input name="page_type" type="hidden" value="danh-sach"><input name="truyen" type="hidden" value="truyen-moi"><input name="filter" type="hidden" value=""><input class="form-control" name="page" type="number" placeholder="Số trang..." value=""><span class="input-group-btn"><button class="btn btn-default" type="submit">Đi</button></span></div>
					</form>
				</div>
			</li>
		</ul>
	</div>
</div>
@endsection
