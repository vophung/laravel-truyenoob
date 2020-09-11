<?php

namespace App\Http\Controllers\Manage;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage.profile.index');
    }

    public function updateimages(Request $request,User $user)
    {
        $messages = [
            'image.required' => 'Bắt buộc gắn ảnh',
            'image.mimes' => 'Hình ảnh phải là một loại tệp: png, jpg.',
        ];
        $rules = [
            'image' => 'mimes:jpeg,jpg,png|required|max:10000',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->route('manage.profile.index')->withErrors($validator)->withInput();
        } else {
            $file = $request->image;

            $file->move('images/avatar' , $file->getClientOriginalName());

            $data= array(
                'image' => $file->getClientOriginalName(),
            );

            if(auth()->user()->image == ''){

                User::where('id',auth()->user()->id)->update($data);

                $request->session()->flash('success' , 'Image Avatar has been updated');
            }else{
                if(auth()->user()->image == $file->getClientOriginalName()){

                    User::where('id',auth()->user()->id)->update($data);

                    $request->session()->flash('success' , 'Image Avatar has been updated');
                }else{
                    $Image = public_path("/images/avatar/" . auth()->user()->image); //Finding users previous picture

                    if(file_exists($Image)){ //If it exits, delete it from folder
                        unlink($Image);
                    }
                    User::where('id',auth()->user()->id)->update($data);

                    $request->session()->flash('success' , 'Image Avatar has been updated');
                }
            }
        }

        return redirect()->route('manage.profile.index');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updatesettings(Request $request)
    {
        $messages = [
            'name.required' => 'Tên bắt buộc nhập',
            'name.max' => 'Từ khóa không được vượt quá 30 ký tự',
        ];
        $rules = [
            'name' => 'required|max:30|',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->route('manage.profile.index')->withErrors($validator)->withInput();
        } else {
            $data = ([
                'name' => $request->name,
            ]);

            $id_user = auth()->user()->id;

            if(User::where('id',$id_user)->update($data)){
                $request->session()->flash('success', 'Proflie has been updated');
            }else{
                $request->session()->flash('error' , ' Error!!!');
            }
        }

        return redirect()->route('manage.profile.index');
    }

    public function updatepassword(Request $request)
    {
        $rules = [
            'OldPassword' => ['required', new MatchOldPassword],
            'NewPassword' => ['required'],
            'NewPasswordConfirm' => ['required_with:NewPassword','same:NewPassword'],
        ];
        $messages = [
            'OldPassword.required' => 'Vui lòng nhập mật khẩu cũ',
            'NewPassword.required' => 'Vui lòng nhập mật khẩu mới',
            'NewPasswordConfirm.same' => 'Nhập lại mật khẩu mới không giống nhau',
            'NewPasswordConfirm.required_with' => 'Bạn chưa nhập lại mật khẩu mới'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            // Điều kiện dữ liệu không hợp lệ sẽ chuyển về trang profile và thông báo lỗi
            return redirect()->route('manage.profile.index')->withErrors($validator)->withInput();
            $request->session()->flash('error' , 'Password has been updated!!!');
        } else {
            $data = array (
                'password'=> Hash::make($request->NewPassword)
            );
            $id_user = auth()->user()->id;
            $update = User::where('id',$id_user)->update($data);

            if($update == 1) {
                // Insert thành công sẽ hiển thị thông báo
                $request->session()->flash('success' , 'Password has been updated!!!');
            }else{
                 // Insert thất bại sẽ hiển thị thông báo lỗi
                 $request->session()->flash('error' , 'Password has been updated!!!');
            }
            return redirect()->route('manage.profile.index');
        }
    }
}
