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


/* =========================
   FRANCHISE SECTION
=========================*/

.first-services {
    margin-top: 60px;
    width: 65%;
    margin-left: auto;
    margin-right: auto; /* ✅ centers the whole block */
    letter-spacing: 1px;
    text-align: center; /* ✅ centers inner content */
}

.first-services h2 {
    font-size: 35px;
    font-weight: 700;
    text-align: center;
}
.first-services p {
    font-weight: bold;
    font-size: 18px;
    color: #a8a8a8;
    margin-bottom: 50px;
    text-align: left;
}

.second-services {
    margin-top: 60px;
    width: 43%;
    margin-left: auto;
    margin-right: auto; /* ✅ centers the whole block */
    letter-spacing: 1px;
    text-align: center;
}
.second-services h2 {
    font-size: 35px;
    font-weight: 700;
    text-align: center;
}
.second-services p {
    font-weight: bold;
    font-size: 18px;
    color: #a8a8a8;
    margin-bottom: 50px;
    text-align: left;
}
.second-services ul li {
    font-weight: bold;
    font-size: 18px;
    color: #a8a8a8;
    text-align: left;
}
ul {
    margin-bottom: 70px;
}
/* ✅ LARGE TABLETS */
@media (max-width: 992px) {
    .first-services {
        width: 75%;
    }
    .second-services {
        width: 60%;
    }
}


/* ✅ TABLETS */
@media (max-width: 768px) {
    .first-services {
        width: 85%;
    }
    .second-services {
        width: 75%;
    }

    .first-services h2,
    .second-services h2 {
        font-size: 30px;
    }

    .first-services p,
    .second-services p,
    .second-services ul li {
        font-size: 17px;
    }
}


/* ✅ MOBILE */
@media (max-width: 576px) {
    .first-services,
    .second-services {
        width: 100%;
        padding: 0 20px; /* adds side spacing */
    }

    .first-services h2,
    .second-services h2 {
        font-size: 26px;
    }

    .first-services p,
    .second-services p,
    .second-services ul li {
        font-size: 16px;
        line-height: 1.6;
    }
}
.underline {
    width: 100px;
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
                            <li><a class="dropdown-item" href="{{ url('our_service/#Services') }}">Services</a></li>
                            <li><a class="dropdown-item" href="{{ url('our_service/#Strategic') }}">Strategic Planning</a></li>
                            <li><a class="dropdown-item" href="{{ url('our_service/#') }}">Legal Documentation</a></li>
                            <li><a class="dropdown-item" href="{{ url('our_service/#') }}">Franchise Sales Training</a></li>
                            <li><a class="dropdown-item" href="{{ url('our_service/#') }}">Operations Services</a></li>
                            <li><a class="dropdown-item" href="{{ url('our_service/#') }}">Franchise Marketing Ser.</a></li>
                            <li>
    <a class="dropdown-item" href="{{ url('/our_service') }}#SpecialServices">
        Special Services
    </a>
</li>

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




    <div class="first-services">
        <h2>Services</h2>
    <div class="underline"></div>
    <p>While the needs of franchisors may vary, certain foundational consulting services are vital for any business preparing to franchise.
        Pinnacle Global Franchising Group is built to deliver these services with both speed and precision.
        <br><br> Whether it's updating a single document or managing a full-scale franchise development program, our experienced team adapts to meet the specific requirements of each client. With all franchise solutions offered under one roof, we provide expert guidance, identify opportunities, resolve challenges, and implement strategies efficiently, ensuring your business stays competitive and compliant in today’s marketplace.</p>
    </div>
    
    <div class="second-services">
    <h2>Strategic Planning</h2>
    <div class="underline"></div>

    <p><strong>Strategic Franchise Planning</strong>
    <br>Every successful franchise journey begins with a solid, strategic business plan.
        At Pinnacle Global Franchising, our expert consultants work closely with you to evaluate your current market position and analyze the competitive landscape.
        Based on this assessment, we help you determine where to expand, who your ideal franchisees are, and how best to position your brand for growth.
    <br><br>We also guide you in setting essential financial parameters including franchise fees, royalty rates, and marketing fund contributions. Once your strategy is defined, Pinnacle Global Franchising develops tailored programs and professionally designed materials to support your franchise rollout.
    <br><br><strong>Our Strategic Planning Services Include:</strong></p>
    <ul>
        <li>On-site Business Evaluation by a Senior Consultant
            <br>(Franchisability Review and Business Model Assessment)</li>
        <li>Franchise Structure Development and Revenue Stream Design</li>
        <li>Comprehensive Competitor Analysis and Market Research</li>
    </ul>

    <h2>Legal Documentation</h2>
    <div class="underline"></div>
    <p><strong>Franchise Legal Agreements</strong>
        <br><br>A well-crafted franchise agreement is essential to clearly define the legal and operational relationship between the franchisor and the franchisee. Pinnacle Global Franchising’s legal team will prepare a comprehensive Franchise Agreement tailored to your business and aligned with current industry standards and evolving franchise laws.
        <br><br>This agreement will be developed based on insights gathered from our in-depth program analysis and strategic recommendations ensuring all aspects of the franchise offering are thoroughly covered.
        <br><br><strong>Types of Agreements We Offer:</strong>
    </p>
    <ul>
        <li><strong>Unit Franchise Agreement</strong> – For individual franchise locations.</li>
        <li><strong>Area Development Agreement</strong> – For franchisees developing multiple units within a specific territory.</li>
        <li><strong>Master Franchise Agreement</strong> – For granting franchise rights across a wider region or country.</li>
        <li><strong>Joint Venture Agreement</strong> – For collaborative ownership and operation of franchise units.</li>
    </ul>

    <h2>Franchise Sales Training</h2>
    <div class="underline"></div>
    <p><strong>Franchise Sales Training & Support</strong>
        <br><br>While Pinnacle Global Franchising does not act as a broker for our clients, we provide comprehensive <strong>franchise sales training</strong> as part of our core services. Our seasoned franchise consultants, with years of industry experience, equip new and existing franchisors with the skills and knowledge needed to effectively sell their franchise.
        <br><br>Participants receive hands-on training, a detailed “how-to” manual, and personalized guidance on proven sales techniques. To ensure continued success, we also offer <strong>ongoing implementation consulting</strong> helping clients apply what they’ve learned to real-world sales situations.
        <br><br>For entrepreneurs seeking to <strong>invest in a franchise</strong> or get support in <strong>franchise reselling</strong>, we recommend visiting our trusted partner, <strong>U-Franchise Sales & Management</strong> the leading franchise sales company in the Philippines.
    </p>

    <h2>Operations Services</h2>
    <div class="underline"></div>
    <p><strong>Franchise Operations Manual Development</strong>
        <br><br>Pinnacle Global Franchising’s team of expert consultants will create a detailed <strong>Franchise Operations Manual</strong> that outlines every essential task needed to run your business covering processes from opening to daily operations through to closing.
        <br><br>This manual becomes an indispensable reference for franchisees, reinforcing training and ensuring operational consistency across all units.
        <br><br><strong>Our Operations Support Includes:</strong>
    </p>
    <ul>
        <li><strong>Initial Analysis & Framework Design</strong> – A thorough assessment of your current systems and processes.</li>
        <li><strong>Customized Operations Manual Development</strong> – Step-by-step procedures tailored to your business model.</li>
        <li><strong>Operations Consulting</strong> – Expert guidance to streamline workflows and maximize efficiency.</li>
    </ul>

    <h2>Franchise Marketing Services</h2>
    <div class="underline"></div>
    <p><strong>Franchise Marketing Strategy & Support</strong>
        <br><br>Once you've identified your ideal franchise markets and target franchisee profile during the planning phase, the next step is to effectively communicate your opportunity. Pinnacle Global Franchising will craft a <strong>comprehensive marketing strategy</strong> tailored to attract the right prospects—using both media and non-media channels that are cost-effective and results-driven.
        <br><br>Our team will develop your <strong>core franchise messaging and content</strong>, to be featured in marketing materials such as brochures, websites, advertisements, and more—ensuring a clear, compelling presentation of your brand.
        <br><br><strong>Our Franchise Marketing Services Include:</strong>
    </p>
    <ul>
        <li><strong>Franchise Marketing Plan</strong> – A targeted, strategic roadmap for lead generation.</li>
        <li><strong>Franchise Brochure Content & Core Messaging</strong> – Professionally written, brand-aligned materials.</li>
        <li><strong>Marketing Consulting & Ongoing Support</strong> – Expert guidance through every stage of your campaign.</li>
        <li><strong>Media & Non-Media Outreach</strong> – Leveraging networks, events, and platforms to boost visibility.</li>
    </ul>

    <h2>Special Services</h2>
    <div class="underline"></div>
    <p><strong>Ongoing Support & Supplemental Franchise Services</strong>
        <br><br>At Pinnacle Global Franchising, we are committed to the long-term success of every client. Beyond initial development, we offer a range of <strong>supplemental services</strong> designed to support continuous growth, optimize performance, and strengthen your franchise system over time.
        <br><br>Whether you're expanding locally or internationally, refining your model, or equipping your team with the right skills—our consultants provide expert guidance every step of the way.
        <br><br><strong>Our Extended Franchise Services Include:</strong>
    </p>
    <ul>
        <li><strong>International Franchising Support</strong></li>
        <li><strong>Master Franchise & Area Development Programs</strong></li>
        <li><strong>Franchise Trainings & Seminars</strong></li>
        <li><strong>Franchise Program Audit & Review</strong></li>
        <li><strong>Franchise Management Training & Consulting</strong></li>
        <li><strong>General Franchise Consulting</strong></li>
        <li><strong>Business Modeling & Prototype Development</strong></li>
        <li><strong>Franchisability Studies</strong></li>
    </ul>
    </div>



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
