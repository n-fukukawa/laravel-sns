<div class="mt-8 p-6 bg-white rounded shadow">
    <div class="flex space-x-2">
        <div class="w-10 h-10 bg-gray-300 rounded-full">
        </div>
        <div>
            <div class="font-bold">
               {{ $item->user->name }}
            </div>
            <div class="font-thin text-gray-600">
                {{ $item->created_at->format('Y/m/d H:i') }}
            </div>
        </div>
    </div>
    <div class="mt-4">
        <h3 class="text-2xl">{{ $item->title }}</h3>
        <div class="mt-2">
            {{ $item->body }}
        </div>
    </div>
</div>