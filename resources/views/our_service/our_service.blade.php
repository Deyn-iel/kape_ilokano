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

/* Services Wrapper */
.services {
    max-width: 900px;
    margin: 0 auto;
    padding: 40px 20px;
    text-align: center;
    line-height: 1.7;
}

/* Main page title */
.services > h2 {
    margin-top: 40px;
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 25px;
}

/* Section titles */
.service-title {
    font-size: 26px;
    font-weight: 700;
    margin-top: 45px;
    margin-bottom: 12px;
    position: relative;
    display: inline-block;
}

/* Line under title */
.service-title::after {
    content: "";
    display: block;
    width: 60%;
    height: 3px;
    background: #ffffff;
    margin: 8px auto 0;
    border-radius: 2px;
}

/* Paragraph styling */
.services p {
    margin-bottom: 18px;
}

/* Responsive */
@media (max-width: 576px) {
    .services {
        padding: 25px 15px;
    }

    .service-title {
        font-size: 22px;
    }

    .services > h2 {
        font-size: 26px;
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
                            <li><a class="dropdown-item" href="{{ url('our_service/#') }}">Strategic Planning</a></li>
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
<div class="services">

    <h2>SERVICES</h2>

    <p>While the needs of franchisors may vary, certain foundational consulting services are vital for any business preparing to franchise.

Pinnacle Global Franchising Group is built to deliver these services with both speed and precision.

<br><br>

Whether it's updating a single document or managing a full-scale franchise development program, our experienced team adapts to meet the specific requirements of each client. With all franchise solutions offered under one roof, we provide expert guidance, identify opportunities, resolve challenges, and implement strategies efficiently, ensuring your business stays competitive and compliant in today’s marketplace.</p>

    <h3 class="service-title">Strategic Planning</h3>
    <p> Strategic Franchise Planning <br> <br>



Every successful franchise journey begins with a solid, strategic business plan.

At Pinnacle Global Franchising, our expert consultants work closely with you to evaluate your current market position and analyze the competitive landscape.

Based on this assessment, we help you determine where to expand, who your ideal franchisees are, and how best to position your brand for growth.



We also guide you in setting essential financial parameters including franchise fees, royalty rates, and marketing fund contributions. Once your strategy is defined, Pinnacle Global Franchising develops tailored programs and professionally designed materials to support your franchise rollout.



Our Strategic Planning Services Include:



<ul> Business Evaluation by a Senior Consultant
(Franchisability Review and Business Model Assessment)
Franchise Structure Development and Revenue Stream Design
Comprehensive Competitor Analysis and Market Research</ul></p>

    <h3 class="service-title">Legal Documentation</h3>
    <p>Franchise Legal Agreements



A well-crafted franchise agreement is essential to clearly define the legal and operational relationship between the franchisor and the franchisee. Pinnacle Global Franchising’s legal team will prepare a comprehensive Franchise Agreement tailored to your business and aligned with current industry standards and evolving franchise laws.



This agreement will be developed based on insights gathered from our in-depth program analysis and strategic recommendations ensuring all aspects of the franchise offering are thoroughly covered.



Types of Agreements We Offer:



Unit Franchise Agreement – For individual franchise locations.
Area Development Agreement – For franchisees developing multiple units within a specific territory.
Master Franchise Agreement – For granting franchise rights across a wider region or country.
Joint Venture Agreement – For collaborative ownership and operation of franchise units.</p>

    <h3 class="service-title">Franchise Sales Training</h3>
    <p>Franchise Sales Training & Support



While Pinnacle Global Franchising does not act as a broker for our clients, we provide comprehensive franchise sales training as part of our core services. Our seasoned franchise consultants, with years of industry experience, equip new and existing franchisors with the skills and knowledge needed to effectively sell their franchise.



Participants receive hands-on training, a detailed “how-to” manual, and personalized guidance on proven sales techniques. To ensure continued success, we also offer ongoing implementation consulting helping clients apply what they’ve learned to real-world sales situations.



For entrepreneurs seeking to invest in a franchise or get support in franchise reselling, we recommend visiting our trusted partner, U-Franchise Sales & Management the leading franchise sales company in the Philippines.</p>

    <h3 class="service-title">Operations Services</h3>
    <p>Franchise Operations Manual Development



Pinnacle Global Franchising’s team of expert consultants will create a detailed Franchise Operations Manual that outlines every essential task needed to run your business covering processes from opening to daily operations through to closing.



This manual becomes an indispensable reference for franchisees, reinforcing training and ensuring operational consistency across all units.



Our Operations Support Includes:



Initial Analysis & Framework Design – A thorough assessment of your current systems and processes.
Customized Operations Manual Development – Step-by-step procedures tailored to your business model.
Operations Consulting – Expert guidance to streamline workflows and maximize efficiency.</p>

    <h3 class="service-title">Franchise Marketing Services</h3>
    <p>Franchise Marketing Strategy & Support



Once you've identified your ideal franchise markets and target franchisee profile during the planning phase, the next step is to effectively communicate your opportunity. Pinnacle Global Franchising will craft a comprehensive marketing strategy tailored to attract the right prospects—using both media and non-media channels that are cost-effective and results-driven.



Our team will develop your core franchise messaging and content, to be featured in marketing materials such as brochures, websites, advertisements, and more—ensuring a clear, compelling presentation of your brand.



Our Franchise Marketing Services Include:



Franchise Marketing Plan – A targeted, strategic roadmap for lead generation.
Franchise Brochure Content & Core Messaging – Professionally written, brand-aligned materials.
Marketing Consulting & Ongoing Support – Expert guidance through every stage of your campaign.
Media & Non-Media Outreach – Leveraging networks, events, and platforms to boost visibility.</p>

    <h3 class="service-title">Special Services</h3>
    <p>Ongoing Support & Supplemental Franchise Services



At Pinnacle Global Franchising, we are committed to the long-term success of every client. Beyond initial development, we offer a range of supplemental services designed to support continuous growth, optimize performance, and strengthen your franchise system over time.



Whether you're expanding locally or internationally, refining your model, or equipping your team with the right skills—our consultants provide expert guidance every step of the way.



Our Extended Franchise Services Include:



International Franchising Support
Master Franchise & Area Development Programs
Franchise Trainings & Seminars
Franchise Program Audit & Review
Franchise Management Training & Consulting
General Franchise Consulting
Business Modeling & Prototype Development
Franchisability Studies</p>

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
