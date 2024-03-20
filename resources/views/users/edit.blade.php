@extends('layouts.base')

@section('title', 'users/edit')

@section('page_meta')
@endsection

@section('page_css')
@endsection

@section('page_js')
@endsection

@section('content')
    <main>
        <form method="POST" action="/users/update" class="user-form">
            @csrf

            <!-- バリデーションエラーの表示 -->
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                    <li style="color:red">{{$error}}</li>
                    @endforeach
                </ul>
            @endif

            <input type="hidden" name="usid" value="{{$user->id}}">
            <div class="form-item">
                <label>名前</label>
                <input type="text" name="name" value="{{$user->name}}">
            </div>

            <div class="form-item">
                <label>メールアドレス</label>
                <input type="text" name="email" value="{{$user->email}}">
            </div>

            <div class="form-item">
                <label>パスワード</label>
                <input type="text" name="password" value="{{$user->password}}">
            </div>

            <div class="form-button">
                <a href="/users">戻る</a>
                <input type="submit" value="送信">
            </div>
        </form>
    </main>
@endsection