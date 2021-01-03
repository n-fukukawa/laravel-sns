@extends('layout.app')

@section('title', 'ユーザー登録')

@section('content')
<div>
    <h3 class="text-3xl text-center">ユーザー登録</h3>
    <a href="{{ route('login.{provider}', ['provider' => 'google']) }}"
        class="block p-2 bg-blue-400 text-center text-white"
        >
        <i class="fab fa-google mr-1"></i>
        Googleでログイン
    </a>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <x-error-card />
        <x-input type="text" id="name" name="name" placeholder="ユーザー名" value="{{ old('name') }}"/>
        <x-input type="email" id="email" name="email" placeholder="メールアドレス"  value="{{ old('name') }}"/>
        <x-input type="password" id="password" name="password" placeholder="パスワード"/>
        <x-input type="password" id="password_confirmation" name="password_confirmation" placeholder="パスワード（確認）"/>
        <x-button class="block" type="submit">登録</x-button>
        <a href="{{ route('login') }}" class="text-gray-600">ログインはこちら</a>
    </form>
</div>
@endsection
