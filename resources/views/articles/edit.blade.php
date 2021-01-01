@extends('app')
@section('title', '記事編集')
@section('content')
    <div>
        <form method="POST" action="{{ route('articles.update', ['article' => $article]) }}">
            @method('PATCH')
            @csrf
            <x-article-form>
                @slot('article', $article)
            </x-article-form>
            <x-button type="submit" label="更新する" class="mt-8"/>
        </form>
    </div>
@endsection

