@extends('layout.app')
@section('title', 'パスワード再設定')
@section('content')
<div class="mt-10">
    <h3 class="text-xl sm:text-3xl text-center">パスワード再設定</h3>
    <form action="{{ route('password.email') }}" method="POST">
    @csrf
        <x-error-card />
        @if(session('status'))
        <div class="p-4 bg-green-200 text-green-700">
            {{ session('status')}}
        </div>
        @endif
        <x-input 
            type="test" 
            id="email" 
            name="email" 
            placeholder="メールアドレス" 
            />
        <x-button type="submit" class="mt-4">送信</x-button>
    </form>
</div>
@endsection