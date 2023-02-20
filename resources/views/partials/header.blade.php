<header>
    <div class="up-header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="menu">
                        <li><a class="nav-link" href="#null">DC POWER&#153; VISA&#174;</a></li>
                        <li>
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#null" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    ADDITIONAL DC SITES 
                                  </a>
                                  <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="#null">Prova 1</a></li>
                                    <li><a class="dropdown-item" href="#null">Prova 2</a></li>
                                    <li><a class="dropdown-item" href="#null">Prova 3</a></li>
                                  </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3 mb-2">
        <div class="row d-flex justify-content-between align-items-center">
    
            {{-- logo --}}
    
            <div class="col">
                <a href="/" class="logo">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="DC">
                </a>
            </div>
    
            {{-- navbar --}}
    
            <nav class="col">
                <ul class="d-flex">
                    <li class="p-3 {{ Route::currentRouteName() == 'characters' ? 'active' : ''}}">
                        <a href="{{ route('characters')}}">Characters</a>
                    </li>
                    <li class="p-3 {{ Route::currentRouteName() == 'comics' ? 'active' : ''}}">
                        <a href="#null">Comics</a>
                    </li>
                    <li class="p-3 {{ Route::currentRouteName() == 'movies' ? 'active' : ''}}">
                        <a href="#null">Movies</a>
                    </li>
                    <li class="p-3 {{ Route::currentRouteName() == 'tv' ? 'active' : ''}}">
                        <a href="#null">Tv</a>
                    </li>
                    <li class="p-3 {{ Route::currentRouteName() == 'games' ? 'active' : ''}}">
                        <a href="#null">Games</a>
                    </li>
                    <li class="p-3 {{ Route::currentRouteName() == 'collectibles' ? 'active' : ''}}">
                        <a href="#null">Collectibles</a>
                    </li>
                    <li class="p-3 {{ Route::currentRouteName() == 'videos' ? 'active' : ''}}">
                        <a href="#null">Videos</a>
                    </li>
                    <li class="p-3 {{ Route::currentRouteName() == 'fans' ? 'active' : ''}}">
                        <a href="#null">Fans</a>
                    </li>
                    <li class="p-3 {{ Route::currentRouteName() == 'news' ? 'active' : ''}}">
                        <a href="#null">News</a>
                    </li>
                    <li class="p-3{{ Route::currentRouteName() == 'shop' ? 'active' : ''}}">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle border-0 p-0" href="#null" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Shop
                              </a>
                              <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item border-0 p-2" href="#null">Prova 1</a></li>
                                <li><a class="dropdown-item border-0 p-2" href="#null">Prova 2</a></li>
                                <li><a class="dropdown-item border-0 p-2" href="#null">Prova 3</a></li>
                              </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="p-3">
                        <input type='text' placeholder="Search">
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    {{-- jumbotron --}}

    <div class="jumbo">
    </div>
</header>