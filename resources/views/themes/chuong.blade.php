@extends('themes.master-themes')
@section('themes-content')
<div id="chapter-big-container" class="container chapter">
<div class="row">
    <div class="col-xs-12">
        {{-- {{route('tencuatruyen',$chapter->story->id)}}
        {{route('chuong',['story' => $chapter->story->id,'chuong' => $chapter->id])}} --}}
       <a class="truyen-title" href="{{route('tencuatruyen',$chapter->story->id)}}" title="">{{$chapter->story->name}}</a>
       <h2><a class="chapter-title" href="{{route('chuong',['story' => $chapter->story->id,'chuong' => $chapter->id])}}" title=" - Chương 1: Mang thai bảy tháng"><span class="chapter-text">{{$chapter->subname}}<span>: </span>{{$chapter->name}}</span></a></h2>
       <hr class="chapter-start">
       <div class="chapter-nav" id="chapter-nav-top">
          <input type="hidden" id="ten-truyen" value="choc-tuc-vo-yeu-mua-mot-tang-mot-150520"><input type="hidden" id="truyen-comment" value="truyen-ngon-tinh-choc-tuc-vo-yeu-mua-mot-tang-mot"><input type="hidden" id="truyen-id" value="10942"><input type="hidden" id="chapter-id" value="1871251"><input type="hidden" id="chapter-bnum" value=""><input type="hidden" id="chapter-num" value="1"><input type="hidden" id="chapter-sac" value="1">
          <div class="btn-group">
              <a class="btn btn-success btn-chapter-nav disabled" href="javascript:void(0)" title="Không có chương trước" id="prev_chap" data-cid=""><span class="glyphicon glyphicon-chevron-left"></span> <span class="hidden-xs">Chương </span>trước</a>
              <button type="button" class="btn btn-success btn-chapter-nav chapter_jump">
                  <span class="glyphicon glyphicon-list-alt"></span>
                </button>
                <a class="btn btn-success btn-chapter-nav" href="{{route('chuong',['story' => $chapter->story->id,'chuong' => $chapter->id])}}" title="Chương 2" id="next_chap" data-cid="1871252"><span class="hidden-xs">
                    Chương </span>tiếp <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
       </div>
       <hr class="chapter-end">
       <div id="chapter-c" class="chapter-c">
       {!! $chapter->content !!}
       </div>
       <hr class="chapter-end" id="chapter-end-bot">
       <div class="chapter-nav" id="chapter-nav-bot">
          <div class="btn-group"><a class="btn btn-success btn-chapter-nav disabled" href="javascript:void(0)" title="Không có chương trước" id="prev_chap" data-cid=""><span class="glyphicon glyphicon-chevron-left"></span> <span class="hidden-xs">Chương </span>trước</a><button type="button" class="btn btn-success btn-chapter-nav chapter_jump"><span class="glyphicon glyphicon-list-alt"></span></button><a class="btn btn-success btn-chapter-nav" href="https://truyenfull.vn/choc-tuc-vo-yeu-mua-mot-tang-mot-150520/chuong-2/" title="Chương 2" id="next_chap" data-cid="1871252"><span class="hidden-xs">Chương </span>tiếp <span class="glyphicon glyphicon-chevron-right"></span></a></div>
          <div class="text-center"><button type="button" class="btn btn-warning" id="chapter_error"><span class="glyphicon glyphicon-flag"></span> Báo lỗi chương</button><button type="button" class="btn btn-info" id="chapter_comment"><span class="glyphicon glyphicon-comment"></span> Bình luận</button></div>
          <div class="bg-info text-center visible-md visible-lg box-notice">Bạn có thể dùng phím mũi tên hoặc WASD để lùi/sang chương.</div>
          <div class="col-xs-12">
             <div class="row" id="fb-comment-chapter"></div>
          </div>
       </div>
    </div>
 </div>
</div>
</div>
@endsection
