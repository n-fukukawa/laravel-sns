@extends('layout.app')

@section('title', '記事一覧')

@section('content')
<div>
    <x-card :article="$article" class="mt-8"/>
</div>
@endsection

