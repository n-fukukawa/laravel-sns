<div class="mt-4 p-4 shadow">
<!-- プロフィール画像、名前、フォローボタン -->
    <div class="flex">
            <div>
                <a href="{{ route('users.show', ['name' => $user->name]) }}">
                    <div><i class="fas fa-user-circle fa-3x"></i></div>
                    <div>{{ $user->name }}</div>
                </a>
        </div>
            @if( Auth::id() !== $user->id )
            <follow-button 
                class="ml-auto"
                :initial-is-followed-by='@json($user->isFollowedBy(Auth::user()))'
                :authorized='@json(Auth::check())'
                endpoint="{{ route('users.follow', ['name' => $user->name]) }}"
            ></follow-button>
            @endif
    </div>

<!-- フォロー数、フォロワー数 -->
    <div class="flex mt-4">
        <div class="mr-4">
            <a href="{{ route('users.followings', ['name' => $user->name]) }}" class="inline-block text-gray-500">
                {{ $user->count_followings }} フォロー
            </a>
        </div>
        <div>
            <a href="{{ route('users.followers', ['name' => $user->name]) }}" class="inline-block text-gray-500">
                {{ $user->count_followers }} フォロワー
            </a>
        </div>
    </div>
</div>
