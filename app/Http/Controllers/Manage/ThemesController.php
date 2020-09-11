<?php

namespace App\Http\Controllers\Manage;

use Carbon\Carbon;
use App\Models\Story;
use App\Models\Author;
use App\Models\Chapter;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ThemesController extends Controller
{
    public function trangchu(){
        $story1 = Story::where('name','CHỌC TỨC VỢ YÊU - MUA MỘT TẶNG MỘT')->first();
        $story2 = Story::where('name','GIÓ ẤM KHÔNG BẰNG ANH THÂM TÌNH')->first();
        $story3 = Story::where('name','NHẤT NIỆM VĨNH HẰNG')->first();
        $story4 = Story::where('name','VŨ ĐỘNG CÀN KHÔN')->first();
        $story5 = Story::where('name','BOSS HUNG DỮ - ÔNG XÃ KẾT HÔN ĐI')->first();
        $story6 = Story::where('name','CÔ VỢ NGỌT NGÀO CÓ CHÚT BẤT LƯƠNG (VỢ MỚI BẤT LƯƠNG CÓ CHÚT NGỌT)')->first();
        $story7 = Story::where('name','ĐẾ BÁ')->first();
        $story8 = Story::where('name','TỰ CẨM')->first();
        $story9 = Story::where('name','THẦN ĐẠO ĐAN TÔN')->first();
        $story10 = Story::where('name','LINH VŨ THIÊN HẠ')->first();
        $story11 = Story::where('name','ĐẤU PHÁ THƯƠNG KHUNG')->first();
        $story12 = Story::where('name','PHÀM NHÂN TU TIÊN')->first();
        $story13 = Story::where('name','VŨ LUYỆN ĐIÊN PHONG')->first();
        $chapter = Chapter::with('story.category')->latest()->take(24)->get();

        $category = Category::with('story')->get();

        return view('themes.trangchu')->with([
            'story1' => $story1,
            'story2' => $story2,
            'story3' => $story3,
            'story4' => $story4,
            'story5' => $story5,
            'story6' => $story6,
            'story7' => $story7,
            'story8' => $story8,
            'story9' => $story9,
            'story10' => $story10,
            'story11' => $story11,
            'story12' => $story12,
            'story13' => $story13,
            'chapter' => $chapter,
            'category' => $category,
        ]);
    }

    public function truyenfull(){
        $category = Category::with('story')->get();
        $chapter = Chapter::pluck('subname','story_id')->toArray();
        $pag_story = Story::with(['chapter' => function ($query_chapter){
            $query_chapter->latest();
        },'author'])->where('status','=','1')->latest('updated_at','DESC')->paginate(8);

        return view('themes.truyenfull')->with([
            'category' => $category,
            'pag_story' => $pag_story,
            'chapter' => $chapter,
        ]);
    }

    public function notruyen(Story $story){
        $category = Category::with('story')->get();
        $story = Story::with('author','category')->where('id',$story->id)->first();
        $chapter = Chapter::with('story')->where('story_id',$story->id)->oldest()->paginate(2);
        return view('themes.no-story')->with([
            'category' => $category,
            'story' => $story,
            'chapter'=>$chapter,
        ]);
    }

    public function chuong($story,$chapter){
        $category = Category::with('story')->get();

        $datachapter = Chapter::with('story')->where('story_id',$story)->where('id',$chapter)->first();

        return view('themes.chuong')->with([
            'category' => $category,
            'chapter'=> $datachapter,
        ]);
    }

    public function truyenmoi(){
        $category = Category::with('story')->get();
        $chapter = Chapter::pluck('subname','story_id')->toArray();
        $pag_story = Story::with(['chapter' => function ($query_chapter){
            $query_chapter->latest();
        }])->latest('updated_at','DESC')->paginate(8);

        return view('themes.newstoryupdate')->with([
            'category' => $category,
            'pag_story' => $pag_story,
            'chapter' => $chapter,
        ]);
    }

    public function parent_category($category){
        $contain = Category::with(['story','story.author'])->where('id',$category)->first();

        $pag_story = $contain->story()->with(['chapter' => function ($query_chapter){
            $query_chapter->latest(); 
        }])->latest('updated_at','DESC')->paginate(8);
      
        $chapter = Chapter::pluck('subname','story_id')->toArray();

        $category = Category::all();

        return view('themes.storyofcategory')->with([
            'category' => $category,
            'contain' => $contain,
            'chapter' => $chapter,
            'pag_story' => $pag_story
        ]);
    }

    public function parent_author($author){
        $contain = Author::with(['story','story.author'])->where('id',$author)->first();

        $pag_story = $contain->story()->with(['chapter' => function ($query_chapter){
            $query_chapter->latest(); 
        }])->latest('updated_at','DESC')->paginate(8);

        $chapter = Chapter::pluck('subname','story_id')->toArray();

        $category = Category::all();

        return view('themes.storyofcategory')->with([
            'category' => $category,
            'contain' => $contain,
            'chapter' => $chapter,
            'pag_story' => $pag_story
        ]);
    }
}
