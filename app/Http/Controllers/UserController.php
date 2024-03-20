<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function signin(){
        return view('users.signin');
    }

    public function index(){
        $users = User::all();
        return view('users.index', ["users" => $users]);
    }

    public function show($usid){
        $user = User::find($usid);
        return view('users.show', ["user" => $user]);
    }

    public function add(){
        return view('users.add');
    }

    public function create(Request $request){
        $validator = $request->validate([
            'name'      => 'required',
            'email'     => 'required',
            'passowrd'  => 'required',
        ]);

        $user = new User();
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect('/users');
    }

    public function edit($usid){
        $user = User::find($usid);
        return view('users.edit', ["user" => $user]);
    }

    public function update(Request $request){
        $validator = $request->validate([
            'name'      => 'required',
            'email'     => 'required',
            'passowrd'  => 'required',
        ]);

        User::find($request->usid)->update([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => $request->password,
        ]);
        return redirect('/users');
    }

    public function delete(Request $request){
        User::find($request->id)->delete();
        return redirect('/users');
    }
}


// データ取得方法１
// $user = User::where('id', 1)->delete();

// データ取得方法２
// $user = User::find(1)->delete();

// データ取得方法３
// User::destroy(1)