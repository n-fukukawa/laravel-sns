@extends('app')

@section('title', '記事一覧')

@section('content')
<div>
    @foreach ($articles as $item)
        <x-card :item="$item" />
    @endforeach
</div>
@endsection

