<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'EagleLab') }}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Script -->
        <script src="{{ asset('js/bootstrap.js') }}" defer></script>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/back.css') }}">
        <style>
            .navbar {
                width: 100%;
                height: 80px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-md bg-secondary shadow-sm">
            <div class="container-fluid position-relative">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav d-flex justify-content-center gap-4">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('guest.layouts.app') }}">{{ __('Torna al sito') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('image.index') }}">{{ __('Lista immagini') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('image.create') }}">{{ __('Aggiungi immagini') }} +</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <main role="main">
            @yield('content')
        </main>
    </body>
</html>
