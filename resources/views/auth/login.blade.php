@extends('app')

@section('title', 'ログイン')

@section('content')
<div>
    <h3 class="text-3xl text-center">ログイン</h3>
    <form action="{{ route('login') }}" method="POST">
        @csrf

        @if($errors->any())
        <x-error-card :errors="$errors->all()" />
        @endif

        <x-input type="email" id="email" name="email" placeholder="メールアドレス"/>
        <x-input type="password" id="password" name="password" placeholder="パスワード"/>
        <x-button class="block" type="submit" label="ログイン" />
        <a href="{{ route('register') }}" class="text-gray-600">初めての方はこちら</a>
    </form>
</div>
@endsection