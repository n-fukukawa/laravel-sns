<div class="{{ $attributes['class'] }} p-6 bg-white rounded shadow">
    <div class="flex space-x-2">
        <div class="w-10 h-10 bg-gray-300 rounded-full">
        </div>
        <div class="flex-grow">
            <div class="font-bold">
               {{ $article->user->name }}
            </div>
            <div class="font-thin text-gray-600">
                {{ $article->created_at->format('Y/m/d H:i') }}
            </div>
        </div>

        @if(Auth::id() === $article->user_id)
        <div>
            <ul>
                <li class="text-gray-800 text-sm"><a href="{{ route('articles.edit', ['article' => $article ]) }}">記事を編集する</a></li>
                <li class="text-gray-800 text-sm"><button form="delete-button" type="submit">記事を削除する</button></li>
                <form id="delete-button" action="{{ route('articles.destroy', [ 'article' => $article ]) }}">
                @csrf
                @method('DELETE')
                </form>
            </ul>
        </div>
        @endif

    </div>
    <div class="mt-4">
        <a href="{{ route('articles.show', ['article' => $article ]) }}">
            <h3 class="text-2xl">{{ $article['title'] }}</h3>
        </a>
        <div class="mt-2">
            {{ $article->body }}
        </div>
        <div>
            <article-like :initial-is-liked-by="@json($article->isLikedBy(Auth::user()))"
                          :initial-count-likes="@json($article->count_likes)"
            />
        </div>
    </div>
</div>