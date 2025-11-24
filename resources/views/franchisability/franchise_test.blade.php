<!DOCTYPE html>
<html lang="{{ str_replace('-', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinnacle Global</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #0d3553;
            color: #ffffff;
            font-family: Helvetica;
        }

        .navbar {
            background-color: #0d3553;
            padding: 15px 0;
        }

        .navbar-nav {
            margin: 0 auto;
        }

        .navbar-nav .nav-link {
            color: #ffffff !important;
            margin: 0 15px;
            font-weight: 500;
            letter-spacing: 1px;
        }

        .dropdown-menu {
            background-color: #ffffff;
            gap: 10px;
        }

        .dropdown-item {
            color: #797979 !important;
        }

        .dropdown-item:hover {
            background-color: #ffffff !important;
        }
        
    </style>
</head>

<body>

    <!-- NAVBAR -->
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">
    <div class="container">

        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav text-center">

                <!-- HOME -->
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link">HOME</a>
                </li>

                <!-- ABOUT DROPDOWN -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="aboutDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        ABOUT
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                        <li><a class="dropdown-item" href="{{ url('/about/pinnacle') }}">Pinnacle Global</a></li>
                        <li><a class="dropdown-item" href="{{ url('/about/why') }}">Why Pinnacle?</a></li>
                        <li><a class="dropdown-item" href="{{ url('/about/franchise') }}">Franchise Consultant</a></li>
                        <li><a class="dropdown-item" href="{{ url('/about/clients') }}">Clients</a></li>
                    </ul>
                </li>

                <!-- SERVICES DROPDOWN -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="servicesDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        OUR SERVICES
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="{{ url('/our_service/services') }}">Services</a></li>
                        <li><a class="dropdown-item" href="{{ url('/our_service/strategic') }}">Strategic Planning</a></li>
                        <li><a class="dropdown-item" href="{{ url('/our_service/legal') }}">Legal Documentation</a></li>
                        <li><a class="dropdown-item" href="{{ url('/our_service/franchise_sales') }}">Franchise Sales Training</a></li>
                        <li><a class="dropdown-item" href="{{ url('/our_service/operations') }}">Operations Services</a></li>
                        <li><a class="dropdown-item" href="{{ url('/our_service/franchise_marketing') }}">Franchise Marketing Ser.</a></li>
                        <li><a class="dropdown-item" href="{{ url('/our_service/special') }}">Special Services</a></li>
                    </ul>
                </li>

                <!-- FRANCHISABILITY DROPDOWN -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="franchiseDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        FRANCHISABILITY TEST
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="franchiseDropdown">
                        <li><a class="dropdown-item" href="{{ url('/franchisability/franchise_test') }}">Franchise Test</a></li>
                        <li><a class="dropdown-item" href="{{ url('/franchisability/8_keys') }}">8 Keys to Franchisability</a></li>
                        <li><a class="dropdown-item" href="{{ url('/franchisability/franchising_checklist') }}">Franchising Checklist</a></li>
                    </ul>
                </li>

                <!-- CONTACT -->
                <li class="nav-item">
                    <a href="{{ url('/contact') }}" class="nav-link">CONTACT US</a>
                </li>

            </ul>
        </div>
    </div>
</nav>








    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
