@extends('layouts.base')

@section('title', 'users/index')

@section('page_meta')
@endsection

@section('page_css')
@endsection

@section('page_js')
<script>
    // phpからの値受け取り
    let users = @json($users);

    // テーブルの各trにリンクをつける処理
    // users.forEach((user) => {
    //     document.getElementById(`tr-item-${user.id}`).addEventListener('click', function(){
    //         window.location.href = `/users/show/${user.id}`;
    //     })
    // });
</script>
@endsection

@section('content')
    <section class="text-gray-600">
    <div class=" px-5 py-24 mx-auto">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden sm:rounded">
                        <table class="min-w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">ID</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">ユーザー名</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">メールアドレス</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">作成日</th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ( $users as $user )
                                <tr class="bg-white" id="tr-item-{{$user->id}}">
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">{{$user->id}}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">{{$user->name}}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">{!! nl2br(e($user->email)) !!}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">{{$user->created_at}}</td>
                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                        <a href="/users/show/{{$user->id}}" class="text-blue-600 hover:text-blue-900">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>

                                @empty
                                    <p>投稿はありません。</p>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection