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
                @foreach($story as $stories)
                @if($stories->status == 1)
				<div class="col-xs-9">
					<div>
						<span class="glyphicon glyphicon-book"></span>
						<h3 class="truyen-title" itemprop="name"><a href="#" title="" itemprop="url">{{$stories->name}}</a></h3>
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
                            <a href="#" title="{{$stories->name}} - {{$chap}}"><span class="chapter-text">
                                {{$chap}}
                            </a>
                        @endif
                        @endforeach
                    </div>
                </div>
                @endif
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
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/tien-hiep/" title="Truyện Tiên Hiệp">Tiên Hiệp</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/kiem-hiep/" title="Truyện Kiếm Hiệp">Kiếm Hiệp</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/ngon-tinh/" title="Truyện Ngôn Tình">Ngôn Tình</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/do-thi/" title="Truyện Đô Thị">Đô Thị</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/quan-truong/" title="Truyện Quan Trường">Quan Trường</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/vong-du/" title="Truyện Võng Du">Võng Du</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/khoa-huyen/" title="Truyện Khoa Huyễn">Khoa Huyễn</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/he-thong/" title="Truyện Hệ Thống">Hệ Thống</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/huyen-huyen/" title="Truyện Huyền Huyễn">Huyền Huyễn</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/di-gioi/" title="Truyện Dị Giới">Dị Giới</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/di-nang/" title="Truyện Dị Năng">Dị Năng</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/quan-su/" title="Truyện Quân Sự">Quân Sự</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/lich-su/" title="Truyện Lịch Sử">Lịch Sử</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/xuyen-khong/" title="Truyện Xuyên Không">Xuyên Không</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/xuyen-nhanh/" title="Truyện Xuyên Nhanh">Xuyên Nhanh</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/trong-sinh/" title="Truyện Trọng Sinh">Trọng Sinh</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/trinh-tham/" title="Truyện Trinh Thám">Trinh Thám</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/tham-hiem/" title="Truyện Thám Hiểm">Thám Hiểm</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/linh-di/" title="Truyện Linh Dị">Linh Dị</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/nguoc/" title="Truyện Ngược">Ngược</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/sung/" title="Truyện Sủng">Sủng</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/cung-dau/" title="Truyện Cung Đấu">Cung Đấu</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/nu-cuong/" title="Truyện Nữ Cường">Nữ Cường</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/gia-dau/" title="Truyện Gia Đấu">Gia Đấu</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/dong-phuong/" title="Truyện Đông Phương">Đông Phương</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/dam-my/" title="Truyện Đam Mỹ">Đam Mỹ</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/bach-hop/" title="Truyện Bách Hợp">Bách Hợp</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/hai-huoc/" title="Truyện Hài Hước">Hài Hước</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/dien-van/" title="Truyện Điền Văn">Điền Văn</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/co-dai/" title="Truyện Cổ Đại">Cổ Đại</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/mat-the/" title="Truyện Mạt Thế">Mạt Thế</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/truyen-teen/" title="Truyện Truyện Teen">Truyện Teen</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/phuong-tay/" title="Truyện Phương Tây">Phương Tây</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/nu-phu/" title="Truyện Nữ Phụ">Nữ Phụ</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/light-novel/" title="Truyện Light Novel">Light Novel</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/viet-nam/" title="Truyện Việt Nam">Việt Nam</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/doan-van/" title="Truyện Đoản Văn">Đoản Văn</a></div>
				<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/khac/" title="Truyện Khác">Khác</a></div>
			</div>
		</div>
		<div class="list list-truyen list-side col-xs-12">
			<div class="title-list">
				<h4>Truyện đang hot</h4>
			</div>
			<div class="row top-nav" data-limit="10">
				<div class="col-xs-4 active" data-type="day">Ngày</div>
				<div class="col-xs-4" data-type="month">Tháng</div>
				<div class="col-xs-4" data-type="all">All time</div>
			</div>
			<div class="row top-item">
				<div class="col-xs-12">
					<div class="top-num top-1">1</div>
					<div class="s-title">
						<h3><a href="https://truyenfull.vn/choc-tuc-vo-yeu-mua-mot-tang-mot-150520/" title="Chọc Tức Vợ Yêu - Mua Một Tặng Một">Chọc Tức Vợ Yêu - Mua Một Tặng Một</a></h3>
					</div>
					<div><a itemprop="genre" href="https://truyenfull.vn/the-loai/ngon-tinh/" title="Ngôn Tình">Ngôn Tình</a>, <a itemprop="genre" href="https://truyenfull.vn/the-loai/hai-huoc/" title="Hài Hước">Hài Hước</a>, <a itemprop="genre" href="https://truyenfull.vn/the-loai/sung/" title="Sủng">Sủng</a></div>
				</div>
			</div>
			<div class="row top-item">
				<div class="col-xs-12">
					<div class="top-num top-2">2</div>
					<div class="s-title">
						<h3><a href="https://truyenfull.vn/gio-am-khong-bang-anh-tham-tinh-220820/" title="Gió Ấm Không Bằng Anh Thâm Tình">Gió Ấm Không Bằng Anh Thâm Tình</a></h3>
					</div>
					<div><a itemprop="genre" href="https://truyenfull.vn/the-loai/ngon-tinh/" title="Ngôn Tình">Ngôn Tình</a>, <a itemprop="genre" href="https://truyenfull.vn/the-loai/trong-sinh/" title="Trọng Sinh">Trọng Sinh</a></div>
				</div>
			</div>
			<div class="row top-item">
				<div class="col-xs-12">
					<div class="top-num top-3">3</div>
					<div class="s-title">
						<h3><a href="https://truyenfull.vn/tu-cam/" title="Tự Cẩm">Tự Cẩm</a></h3>
					</div>
					<div><a itemprop="genre" href="https://truyenfull.vn/the-loai/ngon-tinh/" title="Ngôn Tình">Ngôn Tình</a>, <a itemprop="genre" href="https://truyenfull.vn/the-loai/trong-sinh/" title="Trọng Sinh">Trọng Sinh</a>, <a itemprop="genre" href="https://truyenfull.vn/the-loai/co-dai/" title="Cổ Đại">Cổ Đại</a></div>
				</div>
			</div>
			<div class="row top-item">
				<div class="col-xs-12">
					<div class="top-num top-4">4</div>
					<div class="s-title">
						<h3><a href="https://truyenfull.vn/co-vo-ngot-ngao-co-chut-bat-luong-vo-moi-bat-luong-co-chut-ngot/" title="Cô Vợ Ngọt Ngào Có Chút Bất Lương (Vợ Mới Bất Lương Có Chút Ngọt)">Cô Vợ Ngọt Ngào Có Chút Bất Lương (Vợ Mới Bất Lương Có Chút Ngọt)</a></h3>
					</div>
					<div><a itemprop="genre" href="https://truyenfull.vn/the-loai/ngon-tinh/" title="Ngôn Tình">Ngôn Tình</a>, <a itemprop="genre" href="https://truyenfull.vn/the-loai/trong-sinh/" title="Trọng Sinh">Trọng Sinh</a>, <a itemprop="genre" href="https://truyenfull.vn/the-loai/sung/" title="Sủng">Sủng</a></div>
				</div>
			</div>
			<div class="row top-item">
				<div class="col-xs-12">
					<div class="top-num top-5">5</div>
					<div class="s-title">
						<h3><a href="https://truyenfull.vn/linh-vu-thien-ha/" title="Linh Vũ Thiên Hạ">Linh Vũ Thiên Hạ</a></h3>
					</div>
					<div><a itemprop="genre" href="https://truyenfull.vn/the-loai/tien-hiep/" title="Tiên Hiệp">Tiên Hiệp</a>, <a itemprop="genre" href="https://truyenfull.vn/the-loai/di-gioi/" title="Dị Giới">Dị Giới</a>, <a itemprop="genre" href="https://truyenfull.vn/the-loai/huyen-huyen/" title="Huyền Huyễn">Huyền Huyễn</a></div>
				</div>
			</div>
			<div class="row top-item">
				<div class="col-xs-12">
					<div class="top-num top-6">6</div>
					<div class="s-title">
						<h3><a href="https://truyenfull.vn/vu-dong-can-khon/" title="Vũ Động Càn Khôn">Vũ Động Càn Khôn</a></h3>
					</div>
					<div><a itemprop="genre" href="https://truyenfull.vn/the-loai/tien-hiep/" title="Tiên Hiệp">Tiên Hiệp</a>, <a itemprop="genre" href="https://truyenfull.vn/the-loai/huyen-huyen/" title="Huyền Huyễn">Huyền Huyễn</a></div>
				</div>
			</div>
			<div class="row top-item">
				<div class="col-xs-12">
					<div class="top-num top-7">7</div>
					<div class="s-title">
						<h3><a href="https://truyenfull.vn/boss-hung-du-ong-xa-ket-hon-di-270720/" title="Boss Hung Dữ - Ông Xã Kết Hôn Đi">Boss Hung Dữ - Ông Xã Kết Hôn Đi</a></h3>
					</div>
					<div><a itemprop="genre" href="https://truyenfull.vn/the-loai/ngon-tinh/" title="Ngôn Tình">Ngôn Tình</a></div>
				</div>
			</div>
			<div class="row top-item">
				<div class="col-xs-12">
					<div class="top-num top-8">8</div>
					<div class="s-title">
						<h3><a href="https://truyenfull.vn/pham-nhan-tu-tien/" title="Phàm Nhân Tu Tiên">Phàm Nhân Tu Tiên</a></h3>
					</div>
					<div><a itemprop="genre" href="https://truyenfull.vn/the-loai/tien-hiep/" title="Tiên Hiệp">Tiên Hiệp</a>, <a itemprop="genre" href="https://truyenfull.vn/the-loai/kiem-hiep/" title="Kiếm Hiệp">Kiếm Hiệp</a></div>
				</div>
			</div>
			<div class="row top-item">
				<div class="col-xs-12">
					<div class="top-num top-9">9</div>
					<div class="s-title">
						<h3><a href="https://truyenfull.vn/than-dao-dan-ton/" title="Thần Đạo Đan Tôn">Thần Đạo Đan Tôn</a></h3>
					</div>
					<div><a itemprop="genre" href="https://truyenfull.vn/the-loai/tien-hiep/" title="Tiên Hiệp">Tiên Hiệp</a>, <a itemprop="genre" href="https://truyenfull.vn/the-loai/huyen-huyen/" title="Huyền Huyễn">Huyền Huyễn</a></div>
				</div>
			</div>
			<div class="row top-item">
				<div class="col-xs-12">
					<div class="top-num top-10">10</div>
					<div class="s-title">
						<h3><a href="https://truyenfull.vn/de-ba/" title="Đế Bá">Đế Bá</a></h3>
					</div>
					<div><a itemprop="genre" href="https://truyenfull.vn/the-loai/huyen-huyen/" title="Huyền Huyễn">Huyền Huyễn</a></div>
				</div>
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
