<header>
    <div class="container">

        <div class="aside">
            <span>DC POWER™ VISA®</span>
            <select>
                <option selected>ADDITIONAL DC SITES</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>

        <div class="content-bar">

            <figure>
                <a href="{{route("home")}}">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo">
                </a>
            </figure>
            <nav>

                <ul class="gap-3">
                    <li @if (Route::currentRouteName() == 'characters') class="active" @endif>
                    <a class="link" href="{{route("characters")}}">characters</a>
                    </li>
                    <li @if (Route::currentRouteName() == 'comics') class="active" @endif>
                    <a class="link" href="{{route("comics")}}">comics</a>
                    </li>
                    <li @if (Route::currentRouteName() == 'movies') class="active" @endif>
                    <a class="link" href="{{route("movies")}}">movies</a>
                    </li>
                    <li @if (Route::currentRouteName() == 'games') class="active" @endif>
                    <a class="link" href="{{route("games")}}">games</a>
                    </li>
                    <li @if (Route::currentRouteName() == 'collectibles') class="active" @endif>
                    <a class="link" href="{{route("collectibles")}}">collectibles</a>
                    </li>
                    <li @if (Route::currentRouteName() == 'videos') class="active" @endif>
                    <a class="link" href="{{route("videos")}}">videos</a>
                    </li>
                    <li @if (Route::currentRouteName() == 'fans') class="active" @endif>
                    <a class="link" href="{{route("fans")}}">fans</a>
                    </li>
                    <li @if (Route::currentRouteName() == 'news') class="active" @endif>
                    <a class="link" href="{{route("news")}}">news</a>
                    </li>
                    <li @if (Route::currentRouteName() == 'shop') class="active" @endif>
                    <a class="link" href="{{route("shop")}}">shop</a>
                    </li>
                </ul>
            </nav>
            <div class="search-wrapper">
                <input type="text" placeholder="SEARCH">
                <span>X</span>
            </div>
        </div>
    </div>
</header>
