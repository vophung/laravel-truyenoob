<?php

namespace App\Http\Controllers\Manage;

use App\User;
use App\Models\Story;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $storywriter = Story::with('category','author','user')->where('user_id',auth()->user()->id)->get();
        $storyadmin = Story::with('category','author','user')->get();
        return view('manage.story.index')->with([
            'storiesadmin' => $storyadmin,
            'storieswriter' => $storywriter
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $author = Author::all();

        return view('manage.story.create')->with([
            'categories' => $category,
            'authors' => $author
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'Tiêu đề bắt buộc nhập',
            'description.required' => 'Nội dung mô tả bắt buộc nhập',
            'keyword.required'=> 'Từ khóa bắt buộc phải nhập',
            'content.required' => 'Nội dung bắt buộc nhập',
            'source.required' => 'Nguồn truyện bắt buộc nhập',
            'author.required' => 'Tác giả bắt buộc chọn',
            'category.required' => 'Chuyên mục bắt buộc chọn',
            'keyword.max' => 'Từ khóa không được vượt quá 255 ký tự',
            'name.max' => 'Từ khóa không được vượt quá 100 ký tự',
            'source.max' => 'Từ khóa không được vượt quá 255 ký tự',
            'description.max' => 'Từ khóa không được vượt quá 1000 ký tự',
            'content.max' => 'Từ khóa không được vượt quá 1000 ký tự',
            'keyword.min'=> 'Nhập tối thiểu 5 ký tự',
            'source.min' => 'Nhập tối thiểu 5 ký tự',
            'image.required' => 'Bắt buộc gắn ảnh',
            'image.mimes' => 'Hình ảnh phải là một loại tệp: png, jpg.'
        ];
        $validatedData =$request->validate([
            'name' => 'required|max:100|',
            'keyword' => 'required|min:5|max:255|',
            'description' => 'required|max:1000|',
            'content' => 'required|',
            'source' => 'required|min:5|max:255|',
            'image' => 'mimes:jpeg,jpg,png|required|max:10000',
            'author' => 'required|not_in:0',
            'category' => 'required|not_in:0',
        ],$messages);

        $file = $request->image;

        $file->move('images' , $file->getClientOriginalName());

        $story = Story::create($request->all());
        $story->user_id = auth()->user()->id;
        $story->image = $file->getClientOriginalName();
        $story->save();

        $items_category = $request->get('category');
        $selected_items = '';
        foreach($items_category as $item){
            $selected_items .= $item.',';
        }

        $items_author = $request->get('author');
        $selected_items = '';
        foreach($items_author as $item){
            $selected_items .= $item.',';
        }

        $getStoryID = Story::find($story->id);
        $attachCategory = $getStoryID->category()->attach($items_category);

        $category_story = $attachCategory;

        $attachAuthor = $getStoryID->author()->attach($items_author);

        $author_story = $attachAuthor;

        if($category_story == $attachCategory and  $author_story == $attachAuthor){
            $request->session()->flash('success','Story has been created!!!');
        }else{
            $request->session()->flash('error','Error!!!');
        }
        return redirect()->route('manage.story.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function show(Story $story)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function edit(Story $story)
    {
        $category = Category::all();
        $author = Author::all();

        return view('manage.story.edit')->with([
            'categories' => $category,
            'stories' => $story,
            'authors' => $author
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Story $story)
    {
        $messages = [
            'name.required' => 'Tiêu đề bắt buộc nhập',
            'description.required' => 'Nội dung mô tả bắt buộc nhập',
            'keyword.required'=> 'Từ khóa bắt buộc phải nhập',
            'content.required' => 'Nội dung bắt buộc nhập',
            'source.required' => 'Nguồn truyện bắt buộc nhập',
            'author.required' => 'Tác giả bắt buộc chọn',
            'category.required' => 'Chuyên mục bắt buộc chọn',
            'keyword.max' => 'Từ khóa  adasgagasfkhông được vượt quá 255 ký tự',
            'name.max' => 'Từ khóa không được vượt quá 100 ký tự',
            'source.max' => 'Từ khóa không được vượt quá 255 ký tự',
            'description.max' => 'Mô tả ngắn không được vượt quá 1000 ký tự',
            'content.max' => 'Mô tả nội dung không được vượt quá 1000 ký tự',
            'keyword.min'=> 'Nhập tối thiểu 5 ký tự',
            'source.min' => 'Nhập tối thiểu 5 ký tự',
            'image.required' => 'Bắt buộc gắn ảnh',
            'image.mimes' => 'Hình ảnh phải là một loại tệp: png, jpg.'
        ];
        $validatedData =$request->validate([
            'name' => 'required|max:100|',
            'keyword' => 'required|max:255|',
            'description' => 'required|max:1000|',
            'content' => 'required',
            'source' => 'required|min:5|max:255|',
            'image' => 'mimes:jpeg,jpg,png|required|max:10000',
            'author' => 'required|not_in:0',
            'category' => 'required|not_in:0',
        ],$messages);

        $file = $request->image;

        $file->move('images' , $file->getClientOriginalName());

        $data= array(
            'name' => $request->name,
            'content' => $request->content,
            'description' => $request->description,
            'image' => $file->getClientOriginalName(),
            'keyword' => $request->keyword,
            'source' => $request->source,
            'status' => $request->status
        );

        if($story->image == ''){
            Story::where('id',$story->id)->update($data);
        }else{

            if($story->image == $file->getClientOriginalName()){

                Story::where('id',$story->id)->update($data);

            }else{
                $Image = public_path("/images/{$story->image}"); //Finding users previous picture

                if(file_exists($Image)){ //If it exits, delete it from folder
                    unlink($Image);
                }

                Story::where('id',$story->id)->update($data);
            }
        }



        $items_category = $request->get('category');
        $selected_items = '';
        foreach($items_category as $item){
            $selected_items .= $item.',';
        }

        $items_author = $request->get('author');
        $selected_items = '';
        foreach($items_author as $item){
            $selected_items .= $item.',';
        }

        $getStoryID = Story::find($story->id);
        $syncCategory = $getStoryID->category()->sync($items_category);

        $category_story = $syncCategory;

        $syncAuthor = $getStoryID->author()->sync($items_author);

        $author_story = $syncAuthor;

        if($category_story == $syncCategory and  $author_story == $syncAuthor){
            $request->session()->flash('success','Story has been updated!!!');
        }else{
            $request->session()->flash('error','Error!!!');
        }
        return redirect()->route('manage.story.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Story $story)
    {
        $Image = public_path("/images/{$story->image}"); //Finding previous picture

        if(file_exists($Image)){ //If it exits, delete it from folder
            unlink($Image);
        }

        if(Story::destroy($story->id)){
            $request->session()->flash('error' , $story->name . ' has been deleted!!!');
        }else{
            $request->session()->flash('warning' , 'Error!!!');
        }
        return redirect()->back();
    }
}
