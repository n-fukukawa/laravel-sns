@extends('layout.app')
@section('title', $user->name . 'のフォロー中')
@section('content')
    @include('users.user')
    <h2>フォロワー一覧</h2>
    @foreach($followers as $person)
        @include('users.person')
    @endforeach
@endsection