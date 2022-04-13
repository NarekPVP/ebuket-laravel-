<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}"/>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @yield('head')
</head>
<body>
    <!-- Evgenii header -->
    <div class="header flex">
        <div class="col-desk-23">
            <div class="logo">
                <a href="/"><img src="{{ asset('img/logo.svg') }}"></a>
            </div>
            <div class="sell-btn">
                @guest()
                    <button class="main-btn main-blue" data-bs-toggle="modal" data-bs-target="#exampleModal4">{{ __('index.text1') }}</button>
                @endguest
            </div>
        </div>
        <div class="col-desk-62 flex">
            <div class="top-s-sell">
                <div class="city-select">
                    <div class="select">
                        <button class="btn main-btn before-chevron" type="button" id="dropdownMenu1" data-bs-toggle="dropdown">
                        Киев
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a role="menuitem" tabindex="-2" href="#">Киев</a></li>
                            <li><a role="menuitem" tabindex="-1" href="#">Чернигов</a></li>
                            <li><a role="menuitem" tabindex="-1" href="#">Ивано-Франковск</a></li>
                        </ul>
                    </div>
                </div>
                <div class="search">
                  <img class="img-abs" src="{{ asset('img/search.svg') }}">

                  <input type="text" class="searchTerm" placeholder="идеальный букет из сухоцветов">
                  <button type="submit" class="searchButton main-blue main-btn">поиск</button>
               </div>
               <div class="language-select">
                    <div class="select">
                        <button class="btn main-btn before-chevron" type="button" id="dropdownMenu2" data-bs-toggle="dropdown">
                            {{ app()->getLocale() }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            @foreach(['uk', 'ru'] as $lang)
                                <li><a role="menuitem" tabindex="-2" href="{{ \App\Lang::getLangUrl($lang) }}">{{ $lang }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-desk-15">
            <div class="flex align-center flex-end">
                @guest()
                    <button type="button" data-bs-toggle="modal" class="main-blue profile" data-bs-target="#exampleModal"><img src="{{ asset('img/user.svg') }}"></button>
                @else
                    <a href="{{ route('home', app()->getLocale()) }}" type="button" class="main-blue profile"><img src="{{ asset('img/user.svg') }}"></a>
                @endguest
                <div class="profile main-blue">
                    <img src="{{ asset('img/heart.svg') }}">
                </div>
                <div class="profile main-blue">
                    <img src="{{ asset('img/sale.svg') }}">
                </div>
            </div>
        </div>
        <?php $categories = \TCG\Voyager\Models\Category::all(); ?>
        @if(isset($categories))
            <div class="category-fast">
                <div class="top-sell">
                    @foreach($categories as $category)
                        <div class="cat-sell light-black"><a href="{{ route('category.single', $category->slug) }}">{{ $category->name }}</a></div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>

    <!-- menu for mob -->
    <div class="abs-menu-bot">
        <div class="menu-icon">
            <div class="block-for-not">
                <button class="menu-icon"><img src="{{ asset('img/home.png') }}"></button>
            </div>
        </div>
        <div class="menu-icon">
            <div class="block-for-not">
                <button class="menu-icon"><img src="{{ asset('img/heart-menu.png') }}"></button>
            </div>
        </div>
        <div class="menu-icon">
            <div class="block-for-not">
                <button class="menu-icon"><img src="{{ asset('img/bag-menu.png') }}"></button>
            </div>
        </div>
        <div class="menu-icon">
            <div class="block-for-not">
                <button class="menu-icon active" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{ asset('img/user.svg') }}"></button>
            </div>
        </div>
    </div>

    @yield('content')

    <!-- footer -->

    <footer>
        <div class="preloader-div">
            <div class="pre-loader">
              <div class="shape">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
              </div>
              <div class="shadow">
                <div class="shape-shadow"></div>
                <div class="shape-shadow"></div>
                <div class="shape-shadow"></div>
              </div>
            </div>
        </div>
        <div class="top-footer flex">
            <div class="col-fot-1 col-fot">
                <div class="logo">
                    <img src="{{ asset('img/logo.svg') }}">
                </div>
            </div>
            <div class="col-fot-2 col-fot flex">
                <div class="menu-fot">
                    <h2>Lorem</h2>
                    <h3><a href="#">lorem</a></h3>
                    <h3><a href="#">lorem</a></h3>
                    <h3><a href="#">lorem</a></h3>
                    <h3><a href="#">lorem</a></h3>
                </div>
                <div class="menu-fot">
                    <h2>Lorem</h2>
                    <h3><a href="#">lorem</a></h3>
                    <h3><a href="#">lorem</a></h3>
                    <h3><a href="#">lorem</a></h3>
                    <h3><a href="#">lorem</a></h3>
                </div>
                <div class="menu-fot">
                    <h2>Lorem</h2>
                    <h3><a href="#">lorem</a></h3>
                    <h3><a href="#">lorem</a></h3>
                    <h3><a href="#">lorem</a></h3>
                    <h3><a href="#">lorem</a></h3>
                </div>
            </div>
            <div class="col-fot-3 col-fot">
                <div class="mail-fot">
                    <a href="#">e-Buket.mail</a>
                </div>
            </div>
        </div>
        <div class="bot-footer flex">
            <p>lorem  лорем  lorem</p>
        </div>
    </footer>

    <form action="{{ route('logout', app()->getLocale()) }}" method="POST" id="logout-form">
        @csrf
    </form>

    <!-- Modals -->
    @include('layouts.modals')
    <!-- End Modals -->
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4dbb83356d.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.mCustomScrollbar.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.mousewheel-3.0.6.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/masked.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}?v={{ time() }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

    @yield('js')

</body>
</html>
