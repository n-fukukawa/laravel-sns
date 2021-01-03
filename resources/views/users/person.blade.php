<div class="mt-4 p-4 shadow">
    <!-- プロフィール画像、名前、フォローボタン -->
        <div class="flex">
                <div>
                    <a href="{{ route('users.show', ['name' => $person->name])}}">
                        <div><i class="fas fa-user-circle fa-3x"></i></div>
                        <div>{{ $person->name }}</div>
                    </a>
                </div>
                @if( Auth::id() !== $person->id )
                <follow-button 
                    class="ml-auto"
                    :initial-is-followed-by='@json($person->isFollowedBy(Auth::user()))'
                    :authorized='@json(Auth::check())'
                    endpoint="{{ route('users.follow', ['name' => $person->name]) }}"
                ></follow-button>
                @endif
        </div>
    </div>
    