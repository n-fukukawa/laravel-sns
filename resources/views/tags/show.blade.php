@extends('layout.app')
@section('title', $tag->hashtag)
@section('content')
    <div class="my-8">
        <h2 class="text-lg text-gray-500">
            {{ $tag->hashtag }}
            <span class="text-sm">{{ $tag->articles->count()}}件</span>
        </h2>
        
    </div>
    <div>
        @foreach($tag->articles->sortByDesc('created_at') as $article)
            @include('components.card')
        @endforeach
    </div>
@endsection