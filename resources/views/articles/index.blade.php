@extends('app')

@section('title', '記事一覧')

@section('content')
{{-- <div class="container mx-auto"> --}}
<div>
    @each('components.card', $articles, 'item')
</div>
@endsection