@extends('layout.app')
@section('title', 'パスワード再設定')
@section('content')
<div class="mt-10">
    <h3 class="text-xl sm:text-3xl text-center">新しいパスワードを設定</h3>
    <form action="{{ route('password.update') }}" method="POST">
    @csrf
        <x-error-card />
        <input type="hidden" name="email" value="{{ $email }}">
        <input type="hidden" name="token" value="{{ $token }}">

        <x-input 
            type="password" 
            id="password" 
            name="password" 
            placeholder="パスワード" 
            />
        <x-input 
            type="password" 
            id="password_confirmation" 
            name="password_confirmation" 
            placeholder="パスワード（確認）" 
            />
        <x-button type="submit" class="mt-4">送信</x-button>
    </form>
</div>
@endsection