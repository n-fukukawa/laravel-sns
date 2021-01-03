<div class="mt-4 p-6 bg-white rounded shadow">

<!--プロフィール画像、ユーザー名、投稿日時 -->
    <div class="flex space-x-2">
        <div>
            <a href="{{ route('users.show', ['name' => $article->user->name]) }}">
              <i class="flex-grow block far fa-user w-10 h-10 text-xl text-black"></i>
            </a>
        </div>
        <div>
            <a href="{{ route('users.show', ['name' => $article->user->name]) }}">
                <div class="font-bold">
                {{ $article->user->name }}
                </div>
            </a>
            <div class="font-thin text-gray-600">
                {{ $article->created_at->format('Y/m/d H:i') }}
            </div>
        </div>

        @if(Auth::id() === $article->user_id)
        <div class="ml-auto">
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

<!-- 記事のタイトルと本文 -->
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
                          :authorized="@json(Auth::check())"
                          endpoint="{{ route('articles.like', ['article' => $article ]) }}"
                          
            />
        </div>
    </div>

    <!-- ハッシュタグ -->
        @foreach($article->tags as $tag)
            @if($loop->first)
            <div class="mt-2">
                <div>
            @endif
                <a href="{{ route('tags.show', $tag->name) }}" 
                   class="inline-block fmr-1 p-1 border border-gray-300 text-gray-500 text-sm"
                >
                {{ $tag->hashtag }}
                </a>
            @if($loop->last)
                </div>
            </div>
            @endif
        @endforeach
    
</div>