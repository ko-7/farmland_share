@extends('layouts.base')

@section('title', 'users/show')

@section('page_meta')
@endsection

@section('page_css')
@endsection

@section('page_js')
@endsection

@section('content')
    <section class="text-gray-600">
        <div class=" px-5 py-24 mx-auto max-w-lg">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <h2 class="text-xl">ユーザー詳細</h2>
                        <div class="overflow-hidden sm:rounded flex flex-col items-center">
                            <table class="min-w-full">
                                <tr class="border">
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">ID</th>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-500 whitespace-nowrap">{{$user->id}}</td>
                                </tr>
                                <tr class="border">
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">ユーザー名</th>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">{{$user->name}}</td>
                                </tr>
                                <tr class="border">
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">メールアドレス</th>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">{{$user->email}}</td>
                                </tr>
                            </table>

                            <div class="pt-10 inline-flex items-center gap-3 list-none lg:ml-auto">
                                <button class="items-center block px-10 py-2.5 text-base font-medium text-center text-blue-600 transition duration-500 ease-in-out transform border-2 rounded-xl hover:bg-gray-100 focus:bg-gray-400" onclick="location.href='/users/edit/{{$user->id}}'">
                                    編集
                                </button>
                                <form action="/users/delete" method="POST">
                                    @csrf
                                    <input type="hidden" name="usid" value="{{$user->id}}">
                                    <button type="submit" class="items-center block px-10 py-3 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-red-500 rounded-xl hover:bg-red-700 focus:bg-red-900">
                                        削除
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection