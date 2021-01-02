@extends('layout.app')

@section('title', '記事一覧')

@section('content')
<div>
    @foreach ($articles as $article)
        <x-card :article="$article" class="mt-8"/>
    @endforeach
</div>
@endsection

