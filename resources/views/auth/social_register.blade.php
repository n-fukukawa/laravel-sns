@extends('layout.app')

@section('title', 'ユーザー登録')

@section('content')
<div>
    <h3 class="text-3xl text-center">ユーザー登録</h3>
    <form action="{{ route('register/{provider}', ['provider' => $provider]) }}" method="POST">
        @csrf
        <x-error-card />
        <x-input type="text" id="name" name="name" placeholder="ユーザー名" value="{{ old('name') }}"/>
        <small>英数字3〜16文字（登録後の変更はできません）</small>
        <x-input type="email" id="email" name="email" placeholder="メールアドレス"  value="{{ $email }}"/>
        <x-button class="block" type="submit">登録</x-button>
        <a href="{{ route('login') }}" class="text-gray-600">ログインはこちら</a>
    </form>
</div>
@endsection
