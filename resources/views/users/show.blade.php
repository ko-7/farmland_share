@extends('layouts.base')

@section('title', 'users/show')

@section('page_meta')
@endsection

@section('page_css')
@endsection

@section('page_js')
@endsection

@section('content')
    <main>
        <div class="show-wrapper">
            <div class="show-content">
                <table>
                    <tr>
                        <th>ユーザー名</th>
                        <td>{{$user->name}}</td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td>{{$user->email}}</td>
                    </tr>
                </table>
                <div class="show-action-buttons">
                    <a href="/users/edit/{{$user->id}}">編集</a>
                    <form method="post" action="/users/delete">
                        @csrf
                        <input name="id" type="hidden" value="{{$user->id}}">
                        <button type="submit" name="operation" value="send">削除</button>
                    </div>
                </form>
            </div>
        </div>





        
    </main>
@endsection