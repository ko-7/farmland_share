<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function signupGet(){
        return view('users.signup');
    }

    public function signupPost(Request $request){
        $validator = $request->validate([
            'name'      => 'required',
            'email'     => 'required',
            'password'  => 'required',
        ]);

        $user = new User();
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect('/users');
    }

    public function signinGet(){
        return view('users.signin');
    }

    public function signinPost(){

    }

    public function index(){
        $users = User::all();
        return view('users.index', ["users" => $users]);
    }

    public function show($usid){
        $user = User::find($usid);
        return view('users.show', ["user" => $user]);
    }

    public function addGet(){
        return view('users.add');
    }

    public function addPost(Request $request){
        $validator = $request->validate([
            'name'      => 'required',
            'email'     => 'required',
            'password'  => 'required',
        ]);

        $user = new User();
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect('/users');
    }

    public function editGet($usid){
        $user = User::find($usid);
        return view('users.edit', ["user" => $user]);
    }

    public function editPost(Request $request){
        $validator = $request->validate([
            'name'      => 'required',
            'email'     => 'required',
            'password'  => 'required',
        ]);

        User::find($request->usid)->update([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => $request->password,
        ]);
        return redirect('/users');
    }

    public function delete(Request $request){
        try{
            User::find($request->usid)->delete();
            return redirect('/users');
        }catch(e){
            echo e;
        }
    }
}


// データ取得方法１
// $user = User::where('id', 1)->delete();

// データ取得方法２
// $user = User::find(1)->delete();

// データ取得方法３
// User::destroy(1)