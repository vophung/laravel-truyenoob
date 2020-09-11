<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $author = Author::all();
        return view('manage.author.index')->with('authors',$author);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.author.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $messages = [
        //     'name.required' => 'Tiêu đề bắt buộc nhập',
        //     'description.required' => 'Nội dung mô tả bắt buộc nhập',
        //     'keyword.required'=> 'Từ khóa bắt buộc phải nhập',
        //     'keyword.max' => 'Từ khóa không được vượt quá 15 ký tự',
        //     'name.max' => 'Từ khóa không được vượt quá 35 ký tự',
        //     'description.max' => 'Từ khóa không được vượt quá 255 ký tự',
        // ];
        // $validatedData =$request->validate([
        //     'name' => 'required|max:35|',
        //     'keyword' => 'required|max:15|',
        //     'description' => 'required|max:255|',
        // ],$messages);

        // if(Author::create($request->all())){
        //     $request->session()->flash('success' , 'Author has been created!!!');
        // }else{
        //     $request->session()->flash('error' , 'Error!!!');
        // }

        // return redirect()->route('manage.author.index');
        ///////////////////////////////////////AJAX//////////////////////////////////////////////////
        $messages = [
            'name.required' => 'Tên thể loại bắt buộc nhập',
            'name.unique' => 'Đã tồn tại thể loại này',
            'description.required' => 'Nội dung mô tả bắt buộc nhập',
            'keyword.required'=> 'Từ khóa bắt buộc phải nhập',
            'keyword.max' => 'Từ khóa không được vượt quá 1000 ký tự',
            'name.max' => 'Từ khóa không được vượt quá 35 ký tự',
            'description.max' => 'Từ khóa không được vượt quá 1000 ký tự',
        ];
        $rules = [
            'name' => 'required|max:35|unique:categories',
            'keyword' => 'required|max:1000|',
            'description' => 'required|max:1000|',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));
        }else {
            $author = new Author;
            $author->name = $request->name;
            $author->keyword = $request->keyword;
            $author->description = $request->description;
            $author->save();

            return response()->json($author);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        return view('manage.author.edit')->with('authors',$author);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        // $messages = [
        //     'name.required' => 'Tiêu đề bắt buộc nhập',
        //     'description.required' => 'Nội dung mô tả bắt buộc nhập',
        //     'keyword.required'=> 'Từ khóa bắt buộc phải nhập',
        //     'keyword.max' => 'Từ khóa không được vượt quá 15 ký tự',
        //     'name.max' => 'Từ khóa không được vượt quá 35 ký tự',
        //     'description.max' => 'Từ khóa không được vượt quá 255 ký tự',
        // ];
        // $validatedData =$request->validate([
        //     'name' => 'required|max:35|',
        //     'keyword' => 'required|max:15|',
        //     'description' => 'required|max:255|',
        // ],$messages);

        // $dataupdate = [
        //     'name' => $request->name,
        //     'keyword' => $request->keyword,
        //     'description' => $request->description
        // ];

        // if($author->update($dataupdate)){
        //     $request->session()->flash('success' , 'Author ' .$author->name .' has been updated');
        // }else{
        //     $request->session()->flash('error' , 'Error!!!');
        // }

        // return redirect()->route('manage.author.index');

        ///////////////////////////AJAX//////////////////////////////////////
        $author = Author::find ($request->id);
        $author->name = $request->name;
        $author->keyword = $request->keyword;
        $author->description = $request->description;
        $author->save();
        return response()->json($author);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Author $author)
    {
        // if(Author::destroy($author->id)){
        //     $request->session()->flash('error' , $author->name . ' has been deleted!!');
        // }else{
        //     $request->session()->flash('warning' , 'Error!!');
        // }

        // return redirect()->route('manage.author.index');
        $author = Author::find ($request->id)->delete();
        
        return response()->json();
    }
}
