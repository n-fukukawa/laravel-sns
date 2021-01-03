@extends('layout.app')
@section('title', $user->name)
@section('content')
<div>
    @include('users.user')
    <div class="mt-4">
        <ul class="flex">
            <li class="flex-grow border-t border-r border-l border-gray-300 text-center text-gray-600">
                <a class="block p-4">記事</a>
            </li>
            <li class="flex-grow border-b border-gray-300 text-center text-gray-400">
                <a class="block p-4" href="{{ route('users.likes', ['name' => $user->name ]) }}">いいね</a>
            </li>
        </ul>
        @foreach($articles as $article)
        <div class="mt-4">
            @include('components.card')
        </div>
        @endforeach

    </div>
</div>
@endsection