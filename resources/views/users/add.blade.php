@extends('layouts.base')

@section('title', 'users/add')

@section('page_meta')
@endsection

@section('page_css')
@endsection

@section('page_js')
@endsection

@section('content')
    <main>
        <div class="form-container">
            <h2>ユーザー　新規作成</h2>
            <form method="POST" action="/users/create" class="user-form">
                @csrf

                <!-- バリデーションエラーの表示 -->
                @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                    <li style="color:red">{{$error}}</li>
                    @endforeach
                </ul>
                @endif

                <div class="form-item">
                    <label>名前</label>
                    <input type="text" name="name">
                </div>

                <div class="form-item">
                    <label>メールアドレス</label>
                    <input type="text" name="email">
                </div>
                <div class="form-item">
                    <label>パスワード</label>
                    <input type="password" name="password">
                </div>
                <div class="form-button">
                    <input type="submit" value="送信">
                </div>
            </form>
        </div>
    </main>
@endsection

