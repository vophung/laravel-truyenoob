@extends('themes.master-themes')
@section('themes-content')
<div class="container csstransforms3d" id="truyen">
    <div class="col-xs-12 col-sm-12 col-md-9 col-truyen-main">
        <div class="col-xs-12 col-info-desc" itemscope itemtype="https://schema.org/Book">
            <div class="title-list book-intro">
                <h2>Thông tin truyện</h2>
            </div>
            <h3 class="title" itemprop="name">{{$story->name}}</h3>
            <div class="col-xs-12 col-sm-4 col-md-4 info-holder">
                <div class="books">
                    <div class="book"><img src="{{URL::to('images/' . $story->image)}}" alt="" itemprop="image"></div>
                </div>
                <div class="info">
                    <div>
                        <h3>Tác giả:</h3>
                        @foreach($story->author as $sry_at)
                        <a itemprop="author" href="{{route('parent-author',$sry_at->id)}}" title="{{$sry_at}}">
                            {{$loop->first ? '' : ', '}}
                            {{$sry_at->name}}
                        </a>
                        @endforeach
                    </div>
                    <div>
                        <h3>Thể loại:</h3>
                        @foreach($story->category as $sry_cate)
                        <a itemprop="genre" href="{{route('parent-category',$sry_cate->id)}}" title="{{$sry_cate->name}}">
                            {{$loop->first ? '' : ', '}}
                            {{$sry_cate->name}}
                        </a>
                        @endforeach
                    </div>
                    <div>
                        <h3>Trạng thái:</h3>
                        <span class="text-success">
                            @if($story->status == 1)
                            Hoàn Thành
                            @else
                            Đang Cập Nhật
                            @endif
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 desc">
                <div class="rate">
                    <div class="rate-holder" data-score="9.1"></div>
                    <em class="rate-text"></em>
                    {{-- <div class="small" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating"><em>Đánh giá: <strong><span itemprop="ratingValue">9.1</span></strong>/<span class="text-muted" itemprop="bestRating">10</span> từ <strong><span itemprop="ratingCount">45715</span> lượt</strong></em></div> --}}
                </div>
                <div class="desc-text desc-text-full" itemprop="description">
                    {!! $story->description !!}
                    {!! $story->content !!}
                </div>
                <div class="showmore"><a class="btn btn-default btn-xs hide" href="javascript:void(0)" title="Xem thêm">Xem thêm »</a></div>
            </div>
        </div>
        <div class="col-xs-12 text-center no-padding">
            <div class="text-center ads-holder ads-taboola ads-taboola-truyen" id="ads-taboola-truyen"></div>
        </div>
        <div class="col-xs-12" id="list-chapter">
            <div class="title-list">
                <h2>Danh sách chương</h2>
            </div>
            <div class="row">
                @foreach($chapter as $chapters)
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <ul class="list-chapter">
                        <li><span class="glyphicon glyphicon-certificate"></span> <a href="{{route('chuong',['story' => $story->id,'chuong' => $chapters->id])}}" title=""><span class="chapter-text"><span>{{$chapters->subname}}</span> : {{$chapters->name}}</a></span></li>
                    </ul>
                </div>
                @endforeach
            </div>
            <input id="truyen-id" type="hidden" value="10942"><input id="total-page" type="hidden" value="44"><input id="truyen-ascii" type="hidden" value="choc-tuc-vo-yeu-mua-mot-tang-mot-150520"><input id="truyen-comment" type="hidden" value="truyen-ngon-tinh-choc-tuc-vo-yeu-mua-mot-tang-mot"><input id="chapter-sac" type="hidden" value="1">
            <ul class="pagination pagination-sm">
                <li class="active"><span>1<span class="sr-only"> (đang xem)</span></span></li>
                <li><a href="https://truyenfull.vn/choc-tuc-vo-yeu-mua-mot-tang-mot-150520/trang-2/#list-chapter" title="Chọc Tức Vợ Yêu - Mua Một Tặng Một - Trang 2">2</a></li>
                <li><a href="https://truyenfull.vn/choc-tuc-vo-yeu-mua-mot-tang-mot-150520/trang-3/#list-chapter" title="Chọc Tức Vợ Yêu - Mua Một Tặng Một - Trang 3">3</a></li>
                <li><a href="https://truyenfull.vn/choc-tuc-vo-yeu-mua-mot-tang-mot-150520/trang-4/#list-chapter" title="Chọc Tức Vợ Yêu - Mua Một Tặng Một - Trang 4">4</a></li>
                <li><a href="https://truyenfull.vn/choc-tuc-vo-yeu-mua-mot-tang-mot-150520/trang-6/#list-chapter" title="Chọc Tức Vợ Yêu - Mua Một Tặng Một - Trang 6">6</a></li>
                <li><a href="https://truyenfull.vn/choc-tuc-vo-yeu-mua-mot-tang-mot-150520/trang-11/#list-chapter" title="Chọc Tức Vợ Yêu - Mua Một Tặng Một - Trang 11">11</a></li>
                <li><a href="https://truyenfull.vn/choc-tuc-vo-yeu-mua-mot-tang-mot-150520/trang-2/#list-chapter" title="Chọc Tức Vợ Yêu - Mua Một Tặng Một - Trang 2"><span class="sr-only">Trang tiếp</span><span class="glyphicon glyphicon-menu-right"></span></a></li>
                <li><a href="https://truyenfull.vn/choc-tuc-vo-yeu-mua-mot-tang-mot-150520/trang-44/#list-chapter" title="Chọc Tức Vợ Yêu - Mua Một Tặng Một - Trang 44">Cuối <span class="arrow">&raquo;</span></a></li>
                <li class="dropup page-nav">
                    <a href="javascript:void(0)" data-toggle="dropdown">Chọn trang <span class="caret"></span></a>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                        <form action="." name="page_jump" id="page_jump" method="get">
                            <div class="input-group"><input name="page_type" type="hidden" value=""><input name="truyen" type="hidden" value="choc-tuc-vo-yeu-mua-mot-tang-mot-150520"><input name="filter" type="hidden" value=""><input class="form-control" name="page" type="number" placeholder="Số trang..." value=""><span class="input-group-btn"><button class="btn btn-default" type="submit">Đi</button></span></div>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-xs-12 comment-box">
            <div class="title-list">
                <h2>Bình luận truyện</h2>
            </div>
            <div class="col-xs-12">
                <div class="row" id="fb-comment-story"></div>
            </div>
        </div>
    </div>
    <div class="visible-md-block visible-lg-block col-md-3 text-center col-truyen-side">
        <div class="ads-responsive" id="ads-300x250-top"></div>
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
        <div class="ads-responsive" id="ads-300x250-bottom"></div>
    </div>
</div>
@endsection
