@extends('layout.app')

@section('title', 'ログイン')

@section('content')
<div class="mx-4 sm:w-96 sm:mx-auto">
    <h3 class="text-xl sm:text-3xl text-center">ログイン</h3>
    <a href="{{ route('login.{provider}', ['provider' => 'google']) }}"
        class="block p-2 bg-blue-400 text-center text-white"
        >
        <i class="fab fa-google mr-1"></i>
        Googleでログイン
    </a>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <x-error-card/>
        <x-input type="email" id="email" name="email" placeholder="メールアドレス"/>
        <x-input type="password" id="password" name="password" placeholder="パスワード"/>
        <x-button class="block mt-4" type="submit">ログイン</x-button>
        <a href="{{ route('password.request') }}" class="block mt-4 text-gray-600">パスワードを忘れましたか？</a>
        <a href="{{ route('register') }}" class="block mt-4 text-gray-600">初めての方はこちら</a>
    </form>
</div>
@endsection