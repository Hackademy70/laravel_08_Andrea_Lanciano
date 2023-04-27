<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'FlixFlex' }}</title>
    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/05cf7470eb.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    {{-- NavBar --}}
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand my-bold-logo" href="{{ route('welcome') }}">FlixFlex</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light @if(Route::currentRouteName() == 'welcome') my-active @endif" aria-current="page" href="{{ route('welcome') }}">Home</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a class="nav-link text-light @if(Route::currentRouteName() == 'showForm') my-active @endif" href="{{ route('showForm') }}">Add a movie</a>
                    </li>
                    @endauth
                </ul>
                @if (Auth::user() != null)
                <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="my-btn" type="submit">Logout  <i class="fa-solid fa-arrow-right-from-bracket"></i></i></button>
                </form>
                @else
                <ul class="navbar-nav mb-2 mb-lg-0 text-center">
                    <li class="nav-item">
                        <a class="nav-link text-light @if(Route::currentRouteName() == 'login') my-not-active @endif" href="{{ route('login') }}">Login<i class="ms-1 my-icon fa-solid fa-arrow-right-to-bracket"></i></a>
                    </li>
                </ul>
                @endif
            </div>
        </div>
    </nav>

    {{ $slot }}
</body>

</html>