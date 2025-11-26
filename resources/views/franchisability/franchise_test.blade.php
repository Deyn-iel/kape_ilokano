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
}

/* BODY AS FLEX TO PUSH FOOTER DOWN */
body {
    background-color: #0d3553;
    color: #ffffff;
    font-family: 'Helvitica', sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
}

/* wrapper for content above footer */
.main-wrapper {
    flex: 1;
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
    filter: brightness(0) invert(1);
}

/* ACTIVE NAV-LINK LINE */
.nav-link.active {
    border-top: 2px solid #ffffff;
    padding-top: 7px;
    font-weight: bold;
}
.nav-link {
    border-top: 3px solid transparent;
    transition: 0.2s ease-in-out;
}

/* IMAGE SECTION */
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
    width: 65%;
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

/* Franchiseable Section */
.franchiseable {
    text-align: center;
    padding: 80px 20px;
}

/* Title */
.franchiseable h2 {
    font-size: 42px;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 15px;
    font-family: Georgia, serif; /* adjust if you're using Lovelo */
}

/* Subtitle */
.franchiseable p {
    font-size: 20px;
    color: #dbe8f2;
    margin-bottom: 40px;
}

/* Button */
.franchiseable a {
    display: inline-block;
    width: 40%;
    background: #ffffff;
    color: #0d3553;
    padding: 18px 50px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 700;
    letter-spacing: 2px;
    font-size: 14px;
    transition: 0.3s ease;
}

/* Hover */
.franchiseable a:hover {
    background: #b8b8b8;
}

/* =========================
   RESPONSIVE
========================= */

/* Tablets */
@media (max-width: 768px) {
    .franchiseable h2 {
        font-size: 32px;
    }

    .franchiseable p {
        font-size: 18px;
    }

    .franchiseable a {
        width: 90%;
        padding: 16px 0;
        font-size: 13px;
    }
}

/* Mobile */
@media (max-width: 576px) {
    .franchiseable {
        padding: 60px 15px;
    }

    .franchiseable h2 {
        font-size: 26px;
    }

    .franchiseable p {
        font-size: 16px;
    }

    .franchiseable a {
        width: 100%;
        padding: 15px 0;
        font-size: 12px;
    }
}


/* =========================
   FRANCHISE SECTION
=========================*/

.franchise-title, .inquire-title {
    font-size: 35px;
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
    width: 350px;
    height: 350px;
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
    font-size: 30px;
    font-weight: 600;
}

.brand-desc {
    font-size: 20px;
    opacity: 0.9;
}



/* RESPONSIVE FIXES */
@media (max-width: 1200px) {
    .image {
        flex-wrap: wrap;
        margin-top: 20px;
    }

    .logo-item {
        width: 95%;
        height: 300px;
    }
}

@media (max-width: 768px) {
    .logo-item {
        height: 250px;
    }
}

@media (max-width: 576px) {
    .logo-item {
        height: 200px;
    }
}

/* CHAT BUTTON */
#chat-button {
    position: fixed !important;
    bottom: 25px !important;
    right: 35px !important;
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
    z-index: 999999;
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
}

/* CHATBOX */
#chatbox {
    position: fixed !important;
    bottom: 100px !important;
    right: 25px !important;
    width: 320px;
    height: 420px;
    background: #ffffff;
    border-radius: 12px;
    overflow: hidden;
    display: none;
    flex-direction: column;
    z-index: 9999;
    box-shadow: 0 5px 20px rgba(0,0,0,0.25);
}

#chat-header {
    background: #0d3553;
    color: white;
    padding: 12px 15px;
    font-weight: bold;
    display: flex;
    justify-content: space-between;
}

#chat-messages {
    padding: 10px;
    height: 300px;
    overflow-y: auto;
    background: #f4f4f4;
}

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

#chat-input {
    display: flex;
    border-top: 1px solid #ccc;
}

#chat-text {
    flex: 1;
    border: none;
    padding: 10px;
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
</head>

<body>

<div class="main-wrapper"><!-- START WRAPPER -->

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
                        <a class="nav-link dropdown-toggle {{ request()->is('about/*') ? 'active' : '' }}" 
                            href="#" id="aboutDropdown" data-bs-toggle="dropdown">
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
                        <a class="nav-link dropdown-toggle {{ request()->is('franchisability/*') ? 'active' : '' }}" 
                            href="#" id="franchiseDropdown" data-bs-toggle="dropdown">
                            FRANCHISABILITY TEST
                            </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/franchisability/franchise_test') }}">Franchise Test</a></li>
                            <li><a class="dropdown-item" href="{{ url('/franchisability/8_keys') }}">8 Keys to Franchisability</a></li>
                            <li><a class="dropdown-item" href="{{ url('/franchisability/franchising_checklist') }}">Franchising Checklist</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/contact') }}" 
                            class="nav-link {{ request()->is('contact') ? 'active' : '' }}">
                            CONTACT US
                            </a>

                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- IMAGE + CENTERED TITLE -->
    <div class="image">
        <div class="image-item logo-item">
            <img src="{{ asset('img/logo.webp') }}" alt="Logo">
        </div>
    </div>


</div><!-- END MAIN WRAPPER -->

{{-- FRANCHISEABLE --}}
<div class="franchiseable">
    <h2>Are you Franchiseable?</h2>
    <p>Get a FREE FRANCHISABILITY TEST service from us.</p>
    <a href="https://docs.google.com/forms/d/e/1FAIpQLScyBRgBfjLhO53D4LSuAREDmFD4-Rj4_Bm18SlwIzknXdrfsQ/viewform?pli=1">TAKE FREE FRANCHISABILITY TEST</a>
</div>

<!-- ============================
     FRANCHISE NOW SECTION
============================= -->
<section class="franchise-section text-center mt-5">

    <h2 class="franchise-title">Our CLIENTS</h2>
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
<!-- CHAT BUTTON -->
<div id="chat-button">💬</div>

<!-- CHATBOX -->
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
<!-- FOOTER -->
<footer class="footer text-center">
    <h4 class="footer-title">Pinnacle Global Franchising Group Inc.</h4>
    <p class="footer-address">Unit 2, G Building, San Fermin, Cauayan City, Isabela 3305</p>
    <p class="footer-contact">(078) 2582529 | 0916 169 7513</p>
    <p class="footer-copy">Copyright © 2025 Pinnacle Global Franchising Group Inc.</p>
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

    messages.innerHTML += `<div class="message user">${text}</div>`;
    chatText.value = "";

    messages.scrollTop = messages.scrollHeight;

    setTimeout(() => {
        messages.innerHTML += `<div class="message bot">I'm thinking... (AI reply here)</div>`;
        messages.scrollTop = messages.scrollHeight;
    }, 800);
}
</script>

</body>
</html>
