<!DOCTYPE html>
<html lang="{{ str_replace('-', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinnacle Global</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        /* GLOBAL */
        body {
            background-color: #0d3553;
            color: #ffffff;
            font-family: Helvetica;
            margin: 0;
            padding: 0;
        }

        /* NAVBAR */
        .navbar {
            background-color: #0d3553;
            padding: 10px 0;
        }

        .navbar-nav .nav-link {
            color: #ffffff !important;
            margin: 0 12px;
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        .dropdown-menu {
            background-color: #ffffff;
        }

        .dropdown-item {
            color: #797979 !important;
        }

        /* SIMPLE TOGGLE */
        .navbar-toggler {
            border: none;
            background-color: #ffffff !important;
        }


        /* =========================
           IMAGE + VIDEO SECTION
        ==========================*/

        .image {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0;
            width: 100%;
            margin-top: 40px;
            flex-wrap: nowrap;
        }

        .logo-item {
            width: 450px;
            height: 400px;
            background-color: #042a47;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo-item img {
            width: 80%;
            height: 80%;
            object-fit: contain;
        }

        .video-item {
            width: 900px;
            height: 400px;
            overflow: hidden;
            border: 2px solid black;
            margin: 0;
            padding: 0;
        }

        .video-item iframe {
            width: 100%;
            height: 100%;
            object-fit: fill; /* No cut, no zoom */
            margin: 0 !important;
            padding: 0 !important;
            border: none !important;
            display: block;
        }


        /* =========================
           RESPONSIVE BEHAVIOR
        ==========================*/

        /* Large Tablets */
        @media (max-width: 1200px) {
            .image {
                flex-wrap: wrap;
                margin-top: 20px;
                gap: 15px;
            }

            .video-item {
                width: 95%;
                height: 320px;
            }

            .logo-item {
                width: 95%;
                height: 300px;
            }
        }

        /* Tablets */
        @media (max-width: 768px) {

            .logo-item {
                height: 250px;
            }

            .video-item {
                height: 220px;
            }
        }

        /* Mobile */
        @media (max-width: 576px) {

            .logo-item {
                height: 200px;
            }

            .video-item {
                height: 180px;
            }
        }
        /* Franchise Section */
.franchise-title, .inquire-title {
    font-size: 25px;
    font-weight: 700;
    letter-spacing: 1px;
}

.underline {
    width: 120px;
    height: 3px;
    background-color: #ffffff;
    margin: 10px auto 0 auto;
}

/* Circular Boxes */
.circle-box {
    width: 330px;
    height: 330px;
    background: #ffffff;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 40px;
    margin: 0 auto;
}

.circle-box img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

/* Brand Text */
.brand-name {
    font-size: 26px;
    font-weight: 600;
}

.brand-desc {
    font-size: 18px;
    opacity: 0.9;
}

/* Inquire Section */
.form-field {
    background: transparent;
    border: 1px solid #ffffff;
    color: #ffffff;
    padding: 12px 15px;
}

.form-field::placeholder {
    color: #ffffff;
    opacity: 0.7;
}

.btn-submit {
    background: #ffffff;
    color: #0d3553;
    border: none;
    padding: 10px 35px;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
}

.recaptcha {
    margin-top: 20px;
    font-size: 14px;
    opacity: 0.7;
}

/* Footer */
.footer-title {
    font-size: 22px;
    font-weight: 600;
}

.footer-address,
.footer-contact,
.footer-copy {
    font-size: 16px;
    opacity: 0.9;
}


    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <!-- CLEAN TOGGLE BUTTON -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav text-center">

                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link">HOME</a>
                    </li>

                    <!-- ABOUT MENU -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" data-bs-toggle="dropdown">
                            ABOUT
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/about/pinnacle') }}">Pinnacle Global</a></li>
                            <li><a class="dropdown-item" href="{{ url('/about/why') }}">Why Pinnacle?</a></li>
                            <li><a class="dropdown-item" href="{{ url('/about/franchise') }}">Franchise Consultant</a></li>
                            <li><a class="dropdown-item" href="{{ url('/about/clients') }}">Clients</a></li>
                        </ul>
                    </li>

                    <!-- SERVICES MENU -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" data-bs-toggle="dropdown">
                            OUR SERVICES
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/our_service/services') }}">Services</a></li>
                            <li><a class="dropdown-item" href="{{ url('/our_service/strategic') }}">Strategic Planning</a></li>
                            <li><a class="dropdown-item" href="{{ url('/our_service/legal') }}">Legal Documentation</a></li>
                            <li><a class="dropdown-item" href="{{ url('/our_service/franchise_sales') }}">Franchise Sales Training</a></li>
                            <li><a class="dropdown-item" href="{{ url('/our_service/operations') }}">Operations Services</a></li>
                            <li><a class="dropdown-item" href="{{ url('/our_service/franchise_marketing') }}">Franchise Marketing Ser.</a></li>
                            <li><a class="dropdown-item" href="{{ url('/our_service/special') }}">Special Services</a></li>
                        </ul>
                    </li>

                    <!-- FRANCHISABILITY -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="franchiseDropdown" data-bs-toggle="dropdown">
                            FRANCHISABILITY TEST
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/franchisability/franchise_test') }}">Franchise Test</a></li>
                            <li><a class="dropdown-item" href="{{ url('/franchisability/8_keys') }}">8 Keys to Franchisability</a></li>
                            <li><a class="dropdown-item" href="{{ url('/franchisability/franchising_checklist') }}">Franchising Checklist</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/contact') }}" class="nav-link">CONTACT US</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <!-- IMAGE + VIDEO SECTION -->
    <div class="image">

        <div class="image-item logo-item">
            <img src="{{ asset('img/logo.webp') }}" alt="Logo">
        </div>

        <div class="image-item video-item">
            <iframe
                src="https://player.vimeo.com/video/1101086567?h=fada1a13bc&autoplay=1&loop=1&autopause=0&muted=1&title=0&byline=0&portrait=0&controls=0"
                frameborder="0"
                allow="autoplay; fullscreen"
                allowfullscreen>
            </iframe>
        </div>

    </div>

<!-- ============================
     FRANCHISE NOW SECTION
============================= -->
<section class="franchise-section text-center mt-5">

    <h2 class="franchise-title">FRANCHISE NOW!</h2>
    <div class="underline"></div>

    <div class="container mt-5">
        <div class="row justify-content-center g-5">

            <!-- KAPE ILOKANO -->
            <div class="col-md-5 col-lg-4 text-center">
                <div class="circle-box">
                    <img src="{{ asset('img/kape_ilokano.png') }}" alt="Kape Ilokano">
                </div>
                <h3 class="brand-name mt-3">Kape Ilokano</h3>
                <p class="brand-desc">Serving Naimas Nga Kape</p>
            </div>

            <!-- PATATAS PROJECT -->
            <div class="col-md-5 col-lg-4 text-center">
                <div class="circle-box">
                    <img src="{{ asset('img/patatas.png') }}" alt="Patatas Project">
                </div>
                <h3 class="brand-name mt-3">Patatas Project</h3>
                <p class="brand-desc">Fries that Fuel Dreams</p>
            </div>

        </div>

        <!-- ROW 2 -->
        <div class="row justify-content-center mt-5 g-5">

            <!-- MARIA COFFEE -->
            <div class="col-md-5 col-lg-4 text-center">
                <div class="circle-box">
                    <img src="{{ asset('img/maria_coffee.png') }}" alt="Maria Coffee">
                </div>
                <h3 class="brand-name mt-3">Maria Coffee</h3>
                <p class="brand-desc">
                    Something good<br>is going to happen
                </p>
            </div>

            <!-- WINGS 2 GO -->
            <div class="col-md-5 col-lg-4 text-center">
                <div class="circle-box">
                    <img src="{{ asset('img/wings2go.png') }}" alt="Wings 2 Go">
                </div>
                <h3 class="brand-name mt-3">Wings 2 Go</h3>
                <p class="brand-desc">Best Chicken Wings of All Time</p>
            </div>

        </div>
    </div>
</section>


<!-- ============================
      INQUIRE NOW FORM
============================= -->

<section class="inquire mt-5 text-center">

    <h2 class="inquire-title">INQUIRE NOW!</h2>
    <div class="underline"></div>

    <p class="inquire-sub">Feel free to inquire. Thank you!</p>

    <div class="container mt-4">
        <form>

            <input type="text" class="form-control form-field mb-3" placeholder="Full Name*" required>

            <input type="email" class="form-control form-field mb-3" placeholder="Email*" required>

            <textarea class="form-control form-field mb-3" rows="5" placeholder="Message*" required></textarea>

            <button type="submit" class="btn-submit mt-2">SUBMIT</button>

        </form>

        <p class="recaptcha">
            Este sitio está protegido por reCAPTCHA y aplican las Política de privacidad y los Términos de servicio de Google.
        </p>
    </div>
</section>


<!-- ============================
      FOOTER
============================= -->
<footer class="footer text-center mt-5 pb-5">

    <h4 class="footer-title">Pinnacle Global Franchising Group Inc.</h4>

    <p class="footer-address">
        Unit 2, G Building, San Fermin, Cauayan City, Isabela 3305
    </p>

    <p class="footer-contact">
        (078) 2582529 | 0916 169 7513
    </p>

    <p class="footer-copy mt-3">
        Copyright © 2025 Pinnacle Global Franchising Group Inc.
    </p>

</footer>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
