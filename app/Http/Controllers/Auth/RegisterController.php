<?php

namespace App\Http\Controllers\Auth;

use App\Role;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'unique:users','email:rfc,dns','ends_with:laravel.com,gmail.com'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],[
            'name.required' => 'Bạn chưa nhập name',
            'name.max' => 'Ký tự tối đa 255',
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Sai định dạng',
            'email.ends_with' => 'Định dạng đuôi laravel.com hoặc gmail.com',
            'email.unique' => 'Email này đã tồn tại',
            'email.max' => 'Ký tự tối đa 255',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Nhập tối thiểu 8 ký tự',
            'password.confirmed' => 'Nhập lại mật khẩu không trùng khớp'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
