<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    {{-- NavBar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('welcome') }}">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link @if(Route::currentRouteName() == 'welcome') active @endif" aria-current="page" href="{{ route('welcome') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('showForm') }}">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                @if (Auth::user() != null)
                <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="btn btn-primary" type="submit">Logout</button>
                </form>
                @else
                <ul class="navbar-nav mb-2 mb-lg-0 text-center">
                    <li class="nav-item">
                        <a class="nav-link @if(Route::currentRouteName() == 'register') active @endif" href="{{ route('register') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::currentRouteName() == 'login') active @endif" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
                @endif
            </div>
        </div>
    </nav>

    {{ $slot }}
</body>

</html>