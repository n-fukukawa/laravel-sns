@extends('layout.app')

@section('title', '記事一覧')

@section('content')
<div>
    @foreach ($articles as $article)
        @include('components.card')
    @endforeach
</div>
@endsection

