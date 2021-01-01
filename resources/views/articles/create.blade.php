@extends('app')
@section('title', '記事投稿')
@section('content')
    <div>
        <form method="POST" action="{{ route('articles.store') }}">
            @csrf
            <x-article-form />
            <x-button type="submit" label="投稿する" class="mt-8"/>
        </form>
    </div>
@endsection

