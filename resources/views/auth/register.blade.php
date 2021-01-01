@extends('app')

@section('title', 'ユーザー登録')

@section('content')
<div>
    <h3 class="text-3xl text-center">ユーザー登録</h3>
    <form action="{{ route('register') }}" method="POST">
        @csrf

        @if($errors->any())
        <x-error-card />
        @endif

        <x-input type="text" id="name" name="name" placeholder="ユーザー名"/>
        <x-input type="email" id="email" name="email" placeholder="メールアドレス"/>
        <x-input type="password" id="password" name="password" placeholder="パスワード"/>
        <x-input type="password" id="password_confirmation" name="password_confirmation" placeholder="パスワード（確認）"/>
        <x-button class="block" type="submit" label="ユーザー登録" />
        <a href="{{ route('login') }}" class="text-gray-600">ログインはこちら</a>
    </form>
</div>
@endsection