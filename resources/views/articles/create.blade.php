@extends('layout.app')
@section('title', '記事投稿')
@section('content')
    <div>
        <form method="POST" action="{{ route('articles.store') }}">
            @csrf
            @include('articles.article-form')
            <x-button type="submit" href="google.com" class="bg-red-500 mt-8">投稿する</x-button>
        </form>
    </div>
@endsection

