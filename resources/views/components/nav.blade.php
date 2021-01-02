<div class="bg-yellow-500">
    <nav class="container mx-auto flex text-white">
        <a class="flex-grow py-4" href="/">Memo</a>
        <ul class="flex space-x-4">
            @guest
                <li><a class="inline-block py-4" href="{{ route('register') }}">ユーザ登録</a></li>
                <li><a class="inline-block py-4" href="{{ route('login') }}">ログイン</a></li>
            @endguest
            @auth
                <li><a class="inline-block py-4" href="{{ route('articles.create') }}">投稿する</a></li>
                <li><a class="inline-block py-4" href="">▼</a>
                    <div>
                        <button form="logout-button" type="submit">ログアウト</button>
                    </div>
                </li>
                <form id="logout-button" method="POST" action="{{ route('logout') }}">
                    @csrf
                </form>
                {{-- <li><a class="inline-block py-4" href="">●</a></li> --}}
            @endauth
        </ul>
    </nav>
</div>