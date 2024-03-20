@extends('layouts.base')

@section('title', 'users/edit')

@section('page_meta')
@endsection

@section('page_css')
@endsection

@section('page_js')
@endsection

@section('content')
    <section class="">
    <div class=" items-center px-5 py-12 lg:px-20">
        <div class="flex flex-col w-full max-w-md p-10 mx-auto my-6 transition duration-500 ease-in-out transform bg-white rounded-lg md:mt-0">
            <div class="mt-8">
                <div class="mt-6">
                    <form action="/users/edit" method="POST" class="space-y-6">
                        @csrf
                        <input type="hidden" name="usid" value="{{$user->id}}">

                        <!-- バリデーションエラーの表示 -->
                        @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                <li style="color:red">{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif

                        <div>
                            <label for="email" class="block text-sm font-medium text-neutral-600"> ユーザー名 </label>
                            <div class="mt-1">
                                <input id="name" name="name" type="text" required="" placeholder="Your name" value="{{$user->name}}" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-neutral-600"> Email address </label>
                            <div class="mt-1">
                                <input id="email" name="email" type="email" autocomplete="email" required="" placeholder="Your Email" value="{{$user->email}}" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                            </div>
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-neutral-600"> Password </label>
                            <div class="mt-1">
                                <input id="password" name="password" type="password" autocomplete="password" required="" placeholder="Your Password" value="{{$user->password}}" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                            </div>
                        </div>


                        <div>
                            <button type="submit" class="flex items-center justify-center w-full px-10 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">更新</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection