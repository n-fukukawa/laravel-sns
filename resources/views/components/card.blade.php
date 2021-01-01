<div class="mt-8 p-6 bg-white rounded shadow">
    <div class="flex space-x-2">
        <div class="w-10 h-10 bg-gray-300 rounded-full">
        </div>
        <div class="flex-grow">
            <div class="font-bold">
               {{ $item->user->name }}
            </div>
            <div class="font-thin text-gray-600">
                {{ $item->created_at->format('Y/m/d H:i') }}
            </div>
        </div>
        <div>
            <ul>
                <li class="text-gray-800 text-sm"><a href="{{ route('articles.edit', ['article' => $item ]) }}">記事を編集する</a></li>
                <li class="text-gray-800 text-sm">記事を削除する</li>
            </ul>
        </div>
    </div>
    <div class="mt-4">
        <h3 class="text-2xl">{{ $item['title'] }}</h3>
        <div class="mt-2">
            {{ $item->body }}
        </div>
    </div>
</div>