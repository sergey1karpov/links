<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Overpass+Mono&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('welcome') }}">
                    <img src="https://i.ibb.co/T2r7Ymy/logo.png" class="img-fluid" style="width:27px">
                </a>   
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="border: 0">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-lg-0">
                        <li><a href="#" class="nav-link link-dark" style="font-family: 'Overpass Mono', monospace;">Блог</a></li>
                        <li><a href="#" class="nav-link link-dark" style="font-family: 'Overpass Mono', monospace;">Инструкция</a></li>
                        <li><a href="#" class="nav-link link-dark" style="font-family: 'Overpass Mono', monospace;">О Нас</a></li>
                        <li><a href="#" class="nav-link link-dark" style="font-family: 'Overpass Mono', monospace;">Контакты</a></li>
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link text-muted" aria-current="page" href="{{ route('userHomePage',  ['slug' => Auth::user()->slug]) }}" style="font-family: 'Overpass Mono', monospace;">Профиль</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-muted" aria-current="page" href="{{ route('editProfileForm',  ['id' => Auth::user()->id]) }}" style="font-family: 'Overpass Mono', monospace;">Настройки</a>
                                </li>
                                <li class="nav-item">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="nav-link text-muted" style="border: 0; outline: none; background-color: white;" style="font-family: 'Overpass Mono', monospace;">Выйти</button>   
                                    </form>
                                </li>
                            @else 
                                <li class="nav-item">
                                    <a class="nav-link text-muted" aria-current="page" href="{{ route('login') }}" style="font-family: 'Overpass Mono', monospace;">Войти</a>
                                </li>   
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link text-muted" aria-current="page" href="{{ route('register') }}" style="font-family: 'Overpass Mono', monospace;">Регистрация</a>
                                    </li> 
                                @endif
                            @endauth
                        @endif                
                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>
