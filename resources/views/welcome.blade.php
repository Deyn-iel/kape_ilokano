<!DOCTYPE html>
<html lang="{{ str_replace('-', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinnacle Global</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    html, body {
        height: 100%;
        overflow-x: hidden; /* prevent shifting */
        -webkit-overflow-scrolling: auto !important;
    }
        /* GLOBAL */
        body {
            background-color: #0d3553;
            color: #ffffff;
            font-family: 'Helvitica', sans-serif;
            margin: 0;
            padding: 0;
            transform: none !important; /* Prevents parent transform bug */
        }

        /* NAVBAR */
        .navbar {
            background-color: #0d3553;
            padding: 10px 0;
            font-size: 17px;
            padding-top: 20px;
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
        }
        .navbar-toggler-icon {
            filter: brightness(0) invert(1); /* makes icon white */
        }
        /* ACTIVE NAV-LINK LINE ON TOP */
        .nav-link.active {
            border-top: 2px solid #ffffff;
            padding-top: 7px;
            font-weight: bold;
        }
        .nav-link {
            border-top: 3px solid transparent;
            transition: 0.2s ease-in-out;
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
            margin-left: 100px;
            flex-wrap: nowrap;
        }

        .logo-item {
            width: 450px;
            height: 510px;
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
            height: 510px;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        .video-item iframe {
            width: 100%;
            height: 100%;
            object-fit: fill;
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
    }

    .logo-item,
    .video-item {
        width: 95%;
        height: 320px; /* SAME HEIGHT */
    }
}

/* Tablets */
@media (max-width: 768px) {

    .logo-item,
    .video-item {
        height: 300px; /* SAME HEIGHT */
        width: 100%;   /* keeps clean layout */
    }
}

/* Mobile */
@media (max-width: 576px) {

    .logo-item,
    .video-item {
        height: 220px; /* SAME HEIGHT */
    }

    /* FULL-WIDTH VIDEO EDGE-TO-EDGE */
    .video-item {
        width: 100vw;
        margin: 0;
        padding: 0;
        border-radius: 0;
    }
}
/* Wrapper */
.choices-button {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin: 100px auto;
    flex-wrap: wrap; /* ✅ allows wrapping on smaller screens */
}

/* Buttons */
.choices-button button {
    background: #ffffff;
    border: 2px solid #ffffff;
    padding: 12px 28px;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.3s ease;
}


/* Link styling */
.choices-button button a {
    color: #0d3553 !important;
    text-decoration: none;
    font-weight: 600;
    font-size: 16px;
    display: block;
}

/* Hover effect */
.choices-button button:hover {
    background: #ffffff;
    border-color: #0d3553;
}

.choices-button button:hover a {
    color: #0d3553 !important;
}

/* =========================
   ✅ RESPONSIVE
========================= */

/* Tablets */
@media (max-width: 768px) {
    .choices-button {
        gap: 15px;
    }

    .choices-button button {
        padding: 10px 22px;
    }

    .choices-button button a {
        font-size: 15px;
    }
}

/* Mobile */
@media (max-width: 576px) {
    .choices-button {
        flex-direction: column; /* ✅ stack buttons */
        width: 80%;
    }

    .choices-button button {
        width: 100%;
    }
}



/* =========================
   FRANCHISE SECTION
=========================*/

.franchise-title, .inquire-title {
    font-size: 25px;
    font-weight: 700;
    letter-spacing: 1px;
}

.underline {
    width: 120px;
    height: 2px;
    background-color: #ffffff;
    margin: 20px auto;
}

/* Circular Boxes */
.circle-box {
    width: 95%;
    height: 70%;
    background: #ffffff;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
    overflow: hidden;
    margin: 0 auto;
}

/* IMAGE FIX (Perfect Fit in Circle) */
.circle-box img {
    width: 100%;
    height: 100%;
    width: auto;
    height: auto;
    object-fit: contain;
    display: block;
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


/* =========================
   INQUIRE SECTION
=========================*/

/* Center form fields */
form {
    display: flex;
    flex-direction: column;
    align-items: center;
}



/* Focus effect */
.form-field:focus {
    outline: none;
    border-color: #00c7ff;
    background: rgba(255, 255, 255, 0.12);
    box-shadow: 0 0 8px rgba(0, 199, 255, 0.6);
}

/* Hover effect */
.form-field:hover {
    border-color: #ffffff;
}

/* Responsive */
@media (max-width: 768px) {
    .form-field {
        width: 80%;
    }
}

@media (max-width: 576px) {
    .form-field {
        width: 100%;
    }
}

/* Wrapper */
.field-group {
    position: relative;
    width: 65%;
    margin-bottom: 20px;
}

/* Input style */
.form-field {
    width: 100%;
    padding: 14px 15px;
    background: transparent;
    border: 1px solid rgba(255, 255, 255, 0.6);
    color: #fff;
    font-size: 16px;
    border-radius: 0;
    transition: 0.3s ease;
}

/* Placeholder normal state */
.form-field::placeholder {
    color: rgba(255, 255, 255, 0.7);
    transition: 0.3s ease;
}

/* Floating label */
.field-group label {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    pointer-events: none;
    color: rgba(255, 255, 255, 0.7);
    font-size: 16px;
    transition: 0.3s ease;
}
.field-group .label-message {
    top: 20%;
}
/* When focusing */
.form-field:focus::placeholder {
    opacity: 0; /* hides placeholder smoothly */
}

/* FLOAT when focused or has text */
.form-field:focus + label,
.form-field:not(:placeholder-shown) + label {
    top: -10px;
    left: 12px;
    font-size: 13px;
    color: #00c7ff;
    padding: 0 6px;
}

/* Focus border glow */
.form-field:focus {
    border-color: #00c7ff;
    outline: none;
    background: rgba(255, 255, 255, 0.12);
}

/* Responsive */
@media (max-width: 768px) {
    .field-group { width: 80%; }
}

@media (max-width: 576px) {
    .field-group { width: 100%; }
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

/* Floating Chat Button */
#chat-button {
    position: fixed !important;
    inset: auto env(safe-area-inset-bottom) env(safe-area-inset-right) auto;
    bottom: 25px !important;
    right: 35px !important;

    will-change: transform;
    translate: 0 0;

    background: #0d3553;
    color: white;
    width: 70px;
    height: 70px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 28px;
    border-radius: 50%;
    cursor: pointer;
    z-index: 999999; /* higher to avoid bootstrap */
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);

    /* Prevent shifting on mobile scroll */
    transform: translateZ(0);
    backface-visibility: hidden;
    -webkit-transform: translateZ(0);
    -webkit-backface-visibility: hidden;

    transition: all 0.2s ease-in-out;
}


/* Chatbox Window */
#chatbox {
    position: fixed !important;
    bottom: 100px !important;
    right: 25px !important;
    will-change: transform;
    width: 320px;
    height: 420px;
    background: #ffffff;
    border-radius: 12px;
    overflow: hidden;
    display: none;
    flex-direction: column;
    z-index: 9999;
    box-shadow: 0 5px 20px rgba(0,0,0,0.25);
    transition: all 0.3s ease;
}

/* Header */
#chat-header {
    background: #0d3553;
    color: white;
    padding: 12px 15px;
    font-weight: bold;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

#chat-header button {
    background: none;
    border: none;
    color: white;
    font-size: 20px;
    cursor: pointer;
}

/* Messages */
#chat-messages {
    padding: 10px;
    height: 300px;
    overflow-y: auto;
    background: #f4f4f4;
}

/* Messages Styling */
.message {
    padding: 8px 12px;
    border-radius: 10px;
    margin-bottom: 8px;
    max-width: 80%;
}

.user {
    background: #0d3553;
    color: white;
    margin-left: auto;
}

.bot {
    background: #e1e1e1;
    color: black;
}

/* Input */
#chat-input {
    display: flex;
    border-top: 1px solid #ccc;
}

#chat-text {
    flex: 1;
    border: none;
    padding: 10px;
}

#chat-text:focus {
    outline: none;
}

#send-btn {
    background: #0d3553;
    color: white;
    border: none;
    padding: 0 18px;
    cursor: pointer;
}




/* FOOTER */
footer.footer {
    text-align: center;
    padding: 50px 0;
    background: #0d3553;
}

/* Footer title */
.footer-title {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 15px;
}

/* Footer text */
.footer-address,
.footer-contact,
.footer-copy {
    font-size: 20px;
    opacity: 0.9;
    margin: 10px 0;
}

.footer-copy {
    margin-top: 20px;
}

/* =========================
   RESPONSIVE FOOTER
========================= */

/* Tablets */
@media (max-width: 768px) {
    footer.footer {
        padding: 50px 0;
    }

    .footer-title {
        font-size: 22px;
    }

    .footer-address,
    .footer-contact,
    .footer-copy {
        font-size: 14px;
        margin: 8px 0;
    }
}

/* Mobile */
@media (max-width: 576px) {
    footer.footer {
        padding: 50px; /* adds side spacing */
    }

    .footer-title {
        font-size: 22px;
    }

    .footer-address,
    .footer-contact,
    .footer-copy {
        font-size: 14px;
        margin: 6px 0;
        line-height: 1.6; /* better readability */
    }
}

    </style>
    {{-- @vite('resources/css/app.css') --}}
</head>

<body>
    <header>
        @yield('section')
    </header>
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
                        <a href="{{ url('/') }}" 
                            class="nav-link {{ request()->is('/') ? 'active' : '' }}">HOME</a>
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
                        <a class="nav-link dropdown-toggle {{ request()->is('our_service/*') ? 'active' : '' }}" 
                            href="#" id="servicesDropdown" data-bs-toggle="dropdown">
                            OUR SERVICES
                            </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('our_service/#') }}">Services</a></li>
                            <li><a class="dropdown-item" href="{{ url('our_service/#Strategic') }}">Strategic Planning</a></li>
                            <li><a class="dropdown-item" href="{{ url('our_service/#') }}">Legal Documentation</a></li>
                            <li><a class="dropdown-item" href="{{ url('our_service/#') }}">Franchise Sales Training</a></li>
                            <li><a class="dropdown-item" href="{{ url('our_service/#') }}">Operations Services</a></li>
                            <li><a class="dropdown-item" href="{{ url('our_service/#') }}">Franchise Marketing Ser.</a></li>
                            <li><a class="dropdown-item" href="{{ url('our_service/#') }}">Special Services</a></li>
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
                    
                    {{-- afaeeae --}}


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
                    <img src="{{ asset('img/kape.webp') }}" alt="Kape Ilokano">
                </div>
                <h3 class="brand-name mt-3">Kape Ilokano</h3>
                <p class="brand-desc">Serving Naimas Nga Kape</p>
            </div>

            <!-- PATATAS PROJECT -->
            <div class="col-md-5 col-lg-4 text-center">
                <div class="circle-box">
                    <img src="{{ asset('img/patatas.webp') }}" alt="Patatas Project">
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
                    <img src="{{ asset('img/maria_cofee.webp') }}" alt="Maria Coffee">
                </div>
                <h3 class="brand-name mt-3">Maria Coffee</h3>
                <p class="brand-desc">
                    Something good<br>is going to happen
                </p>
            </div>

            <!-- WINGS 2 GO -->
            <div class="col-md-5 col-lg-4 text-center">
                <div class="circle-box">
                    <img src="{{ asset('img/wings.webp') }}" alt="Wings 2 Go">
                </div>
                <h3 class="brand-name mt-3">Wings 2 Go</h3>
                <p class="brand-desc">Best Chicken Wings of All Time</p>
            </div>

        </div>
    </div>
</section>
{{-- choices buttons --}}
<div class="choices-button">
                <button><a class="nav-link" href="{{ url('/franchise/application') }}">APPLY NOW</a></button>
                <button><a class="nav-link" href="{{ url('/franchise/supplies') }}">ORDER NOW</a></button>
                <button><a class="nav-link" href="{{ url('/franchise/requirements') }}">UPLOAD REQUIREMENTS</a></button>
            </div>


<!-- ============================
      INQUIRE NOW FORM
============================= -->

<section class="inquire mt-5 text-center">

    <h2 class="inquire-title">INQUIRE NOW!</h2>
    <div class="underline"></div>

    <p class="inquire-sub">Feel free to inquire. Thank you!</p>

    <div class="container mt-4">
        <form>

            <div class="field-group">
                <input type="text" class="form-field" placeholder="" required>
                <label>Full Name*</label>
            </div>

            <div class="field-group">
                <input type="email" class="form-field" placeholder="" required>
                <label>Email*</label>
            </div>

            <div class="field-group">
                <textarea class="form-field" placeholder="" rows="5" required></textarea>
                <label class="label-message">Message*</label>
            </div>



            <button type="submit" class="btn-submit mt-2">SUBMIT</button>

        </form>

        <p class="recaptcha">
            This site is protected by reCAPTCHA and the <a href="https://policies.google.com/privacy">Google Privacy</a> Policy and <a href="https://policies.google.com/terms">Terms of Service</a> apply.
        </p>
    </div>
</section>

<!-- Floating Chat Button -->
<div id="chat-button">💬</div>

<!-- Chatbox Window -->
<div id="chatbox">
    <div id="chat-header">
        <span>Message Pinnacle</span>
        <button id="close-chat">×</button>
    </div>

    <div id="chat-messages"></div>

    <div id="chat-input">
        <input type="text" id="chat-text" placeholder="Type a message...">
        <button id="send-btn">➤</button>
    </div>
</div>

<hr>
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
<script>
    const btn = document.getElementById("chat-button");
    const chatbox = document.getElementById("chatbox");
    const closeChat = document.getElementById("close-chat");
    const sendBtn = document.getElementById("send-btn");
    const chatText = document.getElementById("chat-text");
    const messages = document.getElementById("chat-messages");

    btn.onclick = () => {
        chatbox.style.display = "flex";
        btn.style.display = "none";
    };

    closeChat.onclick = () => {
        chatbox.style.display = "none";
        btn.style.display = "flex";
    };

    sendBtn.onclick = sendMessage;

    chatText.addEventListener("keypress", e => {
        if (e.key === "Enter") sendMessage();
    });

    function sendMessage() {
        let text = chatText.value.trim();
        if (text === "") return;

        // Display user message
        messages.innerHTML += `<div class="message user">${text}</div>`;
        chatText.value = "";

        // Auto scroll
        messages.scrollTop = messages.scrollHeight;

        // Temporary bot reply
        setTimeout(() => {
            messages.innerHTML += `<div class="message bot">I'm thinking... (AI reply here)</div>`;
            messages.scrollTop = messages.scrollHeight;
        }, 800);
    }
</script>

</body>
</html>
