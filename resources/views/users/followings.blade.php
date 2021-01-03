@extends('layout.app')
@section('title', $user->name . 'のフォロー中')
@section('content')
    @include('users.user')
    <h2>フォロー一覧</h2>
    @foreach($followings as $person)
        @include('users.person')
    @endforeach
@endsection