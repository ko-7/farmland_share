@extends('layouts.base')

@section('page_title', 'users/show')

@section('page_meta')
@endsection

@section('page_css')
@endsection

@section('page_js')
@endsection

@section('content')
    <section>
        <div class="flex min- overflow-hidden">
            <div class="flex flex-col justify-center flex-1 px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
                <div class="w-full max-w-xl mx-auto lg:w-96">
                    <div>
                        <h2 class="mt-6 text-3xl font-extrabold text-neutral-600">Sign up.</h2>
                    </div>

                    <div class="mt-8">
                        <div class="mt-6">
                            <form action="/users/signup" method="POST" class="space-y-6">
                                @csrf

                                <!-- バリデーションエラーの表示 -->
                                @if($errors->any())
                                    <ul>
                                        @foreach($errors->all() as $error)
                                        <li style="color:red">{{$error}}</li>
                                        @endforeach
                                    </ul>
                                @endif

                                <div>
                                    <label for="name" class="block text-sm font-medium text-neutral-600"> ユーザー名 </label>
                                    <div class="mt-1">
                                        <input id="name" name="name" type="text" required="" placeholder="Your Name" class="block w-full px-5 py-3 text-base placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg text-neutral-600 bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                    </div>
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium text-neutral-600"> メールアドレス </label>
                                    <div class="mt-1">
                                        <input id="email" name="email" type="email" autocomplete="email" required="" placeholder="Your Email" class="block w-full px-5 py-3 text-base placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg text-neutral-600 bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                    </div>
                                </div>

                                <div class="space-y-1">
                                    <label for="password" class="block text-sm font-medium text-neutral-600"> パスワード </label>
                                    <div class="mt-1 relative z-0">
                                        <div class="absolute right-5 top-1/4 z-100">
                                            <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="m11.998 5c-4.078 0-7.742 3.093-9.853 6.483-.096.159-.145.338-.145.517s.048.358.144.517c2.112 3.39 5.776 6.483 9.854 6.483 4.143 0 7.796-3.09 9.864-6.493.092-.156.138-.332.138-.507s-.046-.351-.138-.507c-2.068-3.403-5.721-6.493-9.864-6.493zm8.413 7c-1.837 2.878-4.897 5.5-8.413 5.5-3.465 0-6.532-2.632-8.404-5.5 1.871-2.868 4.939-5.5 8.404-5.5 3.518 0 6.579 2.624 8.413 5.5zm-8.411-4c2.208 0 4 1.792 4 4s-1.792 4-4 4-4-1.792-4-4 1.792-4 4-4zm0 1.5c-1.38 0-2.5 1.12-2.5 2.5s1.12 2.5 2.5 2.5 2.5-1.12 2.5-2.5-1.12-2.5-2.5-2.5z" fill-rule="nonzero"/>
                                            </svg>
                                        </div>
                                        <input id="password" name="password" type="password" autocomplete="current-password" required="" placeholder="Your Password" class="block w-full px-5 py-3 text-base placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg text-neutral-600 bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                    </div>
                                </div>

                                <div>
                                    <button type="submit" class="flex items-center justify-center w-full px-10 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Sign up</button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
