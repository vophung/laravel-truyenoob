<?php

namespace App\Http\Controllers\Manage;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('roles')->get();

        return view('manage.users.index')->with('users',$users);
    }

    public function create()
    {
        return view('manage.users.create');
    }

    public function store(Request $request){
        $role = new Role;

        $role->name = $request->name;

        if( $role->save()){
            $request->session()->flash('success', $role->name .' has been created!!!');
        }else{
            $request->session()->flash('error','create thất bại!!!');
        }
        return redirect()->route('manage.user.index');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('manage.user.index'));
        }
        $roles = Role::all();

        return view('manage.users.edit')->with([
            'user' => $user,
            'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);

        if($user->save()){
            $request->session()->flash('success', $user->name .' has been updated!!!');
        }else{
            $request->session()->flash('error','Update thất bại!!!');
        }

        return redirect()->route('manage.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if(Gate::denies('delete-users')){
            return redirect(route('manage.user.index'));
        }
        $user->roles()->detach();
        $user->delete();

        return redirect()->route('manage.user.index');
    }
}
