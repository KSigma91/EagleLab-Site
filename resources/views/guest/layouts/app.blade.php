<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EagleLab</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/back.css') }}">
        <!-- Script -->
        <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-md">
            <div class="container-fluid position-relative">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/EagleLab_Navbar.png') }}" alt="EagleLab-logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav d-flex justify-content-center align-items-center gap-4">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/service') }}">Servizi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/tool') }}">Strumentazione</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" to="/gallery">Galleria <i class="fas fa-chevron-down" style="font-size: .6rem;"></i></a>
                            </li> -->
                            <li class="nav-item dropdown position-relative">
                                <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Galleria <i class="fas fa-chevron-down" style="font-size: .6rem;"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark border-0 rounded-0 p-3 shadow" role="menu" aria-labelledby="dLabel">
                                    <li>
                                        <a class="dropdown-item d-flex justify-content-start align-items-center gap-3 p-2 py-3" href="{{ url('/gallery') }}">
                                            <img src="../assets/MavicAir2S.jpg" alt="Mavic-Air-2s">
                                            Dji Mavic Air 2S
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex justify-content-start align-items-center gap-3 p-2 py-3" href="{{ url('/gallery') }}">
                                            <img src="../assets/Spark.jpg" alt="Spark">
                                            Dji Spark
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/about') }}">Chi siamo</a>
                            </li>
                        </ul>
                        <a class="btn btn-sm btn-dark border-0 rounded-0 text-white" href="{{ route('pictures.index') }}">Modifica galleria</a>
                    </div>
                </div>
            </div>
        </nav>
        <div id="root"></div>

        <script src="js/front.js"></script>
    </body>
</html>
