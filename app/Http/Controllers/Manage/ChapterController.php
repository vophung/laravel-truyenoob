<?php

namespace App\Http\Controllers\Manage;

use DateTime;
use Carbon\Carbon;
use App\Models\Story;
use App\Models\Chapter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ChapterController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($story)
    {
        $datastory = Story::where('id',$story)->first();
        $datachapter = Chapter::all()->where('story_id',$story);
        return view('manage.chapter.index')->with([
            'stories' => $datastory,
            'chapters' => $datachapter
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($story)
    {
        $data = Story::where('id',$story)->first();
        return view('manage.chapter.create')->with('stories',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $story)
    {
        $messages = [
            'name.required' => 'Tiêu đề bắt buộc nhập',
            'subname.required' => 'Tên chương bắt buộc nhập',
            'subname.max' => 'Từ khóa không được vượt quá 35 ký tự',
            'content.max' => 'Mô tả không được vượt quá 255 ký tự',
            'content.required' => 'Nội Dung Bắt Buộc Nhập'
        ];
        $validatedData =$request->validate([
            'subname' => 'required|max:35',
            'name' => 'required',
            'content' => 'required|',
        ],$messages);

        $chapter = new Chapter;
        $chapter->name = $request->name;
        $chapter->subname = $request->subname;
        $chapter->content = $request->content;
        $chapter->updated_at =  $chapter['created_at'];
        $chapter->user_id = auth()->user()->id;
        $chapter->story()->associate($story);
    
        DB::table('stories')->where('id',$chapter->story_id)->update(['updated_at' => Carbon::now()]);
        if($chapter->save()){
            $request->session()->flash('success' , $chapter->subname . ' has been created!!!');
        }else{
            $request->session()->flash('error' , 'Error!!!!');
        }

        return redirect()->route('manage.story.chapter.index',$story);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $chapteradmin = Chapter::get();
        $chapterwriter = Chapter::where('user_id',auth()->user()->id)->get();
        return view('manage.chapter.allChapter')->with([
            'chaptersadmin' => $chapteradmin,
            'chapterswriter' => $chapterwriter
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function edit(Chapter $chapter,$story)
    {
        $datastory = Story::find($story);
        return view('manage.chapter.edit')->with([
            'chapters' => $chapter,
            'stories' => $story
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chapter $chapter,$story)
    {
        $messages = [
            'name.required' => 'Tiêu đề bắt buộc nhập',
            'subname.required' => 'Tên chương bắt buộc nhập',
            'subname.max' => 'Từ khóa không được vượt quá 35 ký tự',
            'content.max' => 'Mô tả không được vượt quá 255 ký tự',
            'content.required' => 'Nội Dung Bắt Buộc Nhập'
        ];
        $validatedData =$request->validate([
            'subname' => 'required|max:35',
            'name' => 'required',
            'content' => 'required',
        ],$messages);

        $data = array(
            'subname' => $request->subname,
            'name' => $request->name,
            'content' => $request->content
        );
        $data['updated_at'] = new DateTime;

        $update = Chapter::where('id',$chapter->id)->update($data);


        if($update == 1){
            $request->session()->flash('success' , $chapter->subname . ' has been updated!!!');
        }else{
            $request->session()->flash('error', 'Error!!!');
        }

        return redirect()->route('manage.story.chapter.index',$story);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Chapter $chapter)
    {
        if(Chapter::destroy($chapter->id)){
            $request->session()->flash('error' , $chapter->subname .' của ' . $chapter->story->name . ' has been deleted!!!');
        }else{
            $request->session()->flash('warning' , 'Error!!!');
        }

        return redirect()->back();
    }
}
