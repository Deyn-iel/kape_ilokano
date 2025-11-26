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

/* CENTER TEXT */
.text {
    text-align: center;
    margin-top: 50px;
}

.text h2 {
    display: inline-block;
    margin-bottom: 5px;
}

.text .hr {
    width: 120px;           /* adjust this to match your text width */
    height: 2px;            /* thickness */
    background-color: #ffffff;
    border: none;
    margin: 5px auto 0 auto;
}

/* Section Title (desktop default) */
.section-title {
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 18px;
}

/* Paragraph default */
p {
    font-size: 16px;
    line-height: 1.6;
    margin-bottom: 10px;
}

/* Tablets */
@media (max-width: 768px) {
    .section-title {
        font-size: 20px;
        margin-bottom: 16px;
    }

    p {
        font-size: 15px;
        margin-bottom: 8px;
    }
}

/* Mobile phones */
@media (max-width: 576px) {
    .section-title {
        font-size: 18px;
        margin-bottom: 14px;
        text-align: center;
    }

    p {
        font-size: 14px;
        margin-bottom: 6px;
        text-align: center;
        line-height: 1.5;
    }
}



/* Wrapper */
.field-group {
    position: relative;
    width: 100%;
    margin-bottom: 18px;
}

/* Inputs & textarea */
.form-field {
    width: 100%;
    padding: 14px 15px;
    background: transparent;
    border: 1px solid #ffffff;
    color: #ffffff;
    border-radius: 0;
    font-size: 16px;
    transition: 0.3s ease;
}
.field-group .label-message {
    top: 20%;
}
/* Make textarea match */
.form-field.textarea {
    resize: none;
}

/* Floating label */
.field-group label {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: rgba(255, 255, 255, 0.7);
    pointer-events: none;
    transition: 0.3s ease;
    font-size: 16px;
}

/* Move label up when typing or focused */
.form-field:focus + label,
.form-field:not(:placeholder-shown) + label {
    top: -10px;
    left: 10px;
    font-size: 12px;
    color: #00c7ff;
    background: transparent;
    padding: 0 6px;
}

/* Focus glow */
.form-field:focus {
    outline: none;
    border-color: #00c7ff;
    box-shadow: 0 0 8px rgba(0, 199, 255, 0.5);
}

/* Responsive */
@media (max-width: 576px) {
    .section-title {
        font-size: 20px;
    }
}


/* Submit Button */
.btn-submit {
    background: #ffffff;
    color: #0d3553;
    border: none;
    padding: 12px;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
}
.recaptcha {
    margin-top: 20px;
    font-size: 14px;
    opacity: 0.7;
}
/* Divider under text */
.hr {
    width: 120px;
    height: 2px;
    background-color: #ffffff;
    margin: 15px auto;
}

/* Section Layout */
.contact-section {
    margin-top: 50px;
    margin-bottom: 70px;
}

/* Responsive Fix */
@media (max-width: 768px) {
    .contact-section {
        text-align: center;
    }
    .col-md-5 {
        text-align: center;
    }
}

.map-container {
    width: 100%;      /* limit width for big screens */
    height: 600px;         /* default height */
    margin: 40px auto;     /* center + add top/bottom spacing */
    overflow: hidden;      /* clean edges */
}

/* Map iframe/embed responsiveness */
.map-container iframe,
.map-container embed {
    width: 100%;
    height: 100%;
    border: 0;
}

/* Tablets */
@media (max-width: 768px) {
    .map-container {
        height: 300px;
        margin: 30px auto;
    }
}

/* Mobile */
@media (max-width: 576px) {
    .map-container {
        height: 250px;
        margin: 20px auto;
    }
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

    <div class="text">
        <h2>Get in Touch</h2>
        <div class="hr"></div>
    </div>

    <div class="contact-section container mt-5">

    <div class="row justify-content-center">

        <!-- LEFT FORM -->
        <div class="col-md-6 mb-4">
            <h3 class="section-title">Contact Us</h3>

            <form>

                <div class="field-group">
                    <input type="text" class="form-field" placeholder=" " required>
                    <label>Full Name*</label>
                </div>

                <div class="field-group">
                    <input type="email" class="form-field" placeholder=" " required>
                    <label>Email Address*</label>
                </div>

                <div class="field-group">
                    <textarea class="form-field textarea" rows="5" placeholder=" " required></textarea>
                    <label class="label-message">Message*</label>
                </div>

                <button class="btn-submit w-100 mt-2">SEND</button>

            </form>
            <p class="recaptcha">
            This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.
        </p>
        </div>


        <!-- RIGHT INFO -->
        <div class="col-md-5 text-start">
            <h3 class="section-title">Pinnacle Global Franchising Group</h3>

            <p>G Building, San Fermin, Cauayan City, Isabela 3305</p>
            <p>(078) 2582529 | 0916 169 7513</p>

            <h4 class="section-title mt-4">Office Hours</h4>
            <p>Open today <strong>08:30 – 17:30</strong></p>
        </div>

    </div>

</div>



    <div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!4v1764042137958!6m8!1m7!1swA0k5r0z2CZXI99xTFpnVg!2m2!1d16.93307477261983!2d121.7656557130238!3f265.8663620251052!4f7.2472207469750884!5f0.586434097488085" 
    width="100%" 
  height="350" 
  style="border:0;" 
  allowfullscreen="" 
  loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


</div><!-- END MAIN WRAPPER -->

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
