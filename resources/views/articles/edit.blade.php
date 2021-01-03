@extends('layout.app')
@section('title', '記事編集')
@section('content')
    <div>
        <form method="POST" action="{{ route('articles.update', ['article' => $article]) }}">
            @method('PATCH')
            @csrf
            @include('articles.article-form')            
            <x-button type="submit" class="mt-8">更新する</x-button>
        </form>
    </div>
@endsection

