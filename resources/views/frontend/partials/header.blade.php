<nav class="navbar navbar-expand-xl myNavBar bg-white" aria-label="Offcanvas navbar large">
    <div class="container-fluid px-0">
        <a class="navbar-brand" href="{{route('home')}}">
            <div class="logo">
                <img src="{{('frontend/assets/images/eczLogo.png')}}" alt="">
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2"
            aria-labelledby="offcanvasNavbar2Label">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Ecuzen</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 align-items-xl-center">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('front.about-us') ? 'active' : '' }}" href="{{route('front.about-us')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('front.career') ? 'active' : '' }}" href="{{route('front.career')}}">Career</a>
                    </li>
                    <li class="accordion nav-item d-xl-none mobile-menu-hide" id="accordionExample">
                        <div class="accordion-button nav-link" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            Industries
                        </div>

                        <div id="collapseOne" class="accordion-collapse collapse "
                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="tab-sub-menu">
                                    <li>
                                        <a href="#">
                                            All Industries
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.banking-and-finance-industry')}}">
                                            Banking Industries
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.manufacturing-industry')}}">
                                            Manufacturing Industry
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.b2b-b2c-and-reseller-industry')}}">
                                            B2B, B2C & Reseller Industry
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.education-industry')}}">
                                            Education Industry
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.e-commerce-industry')}}">
                                            E-commerce Industry
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.social-networking-industry')}}">
                                            Social Networking Industry
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.insurance-industry')}}">
                                            Insurance Industry
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.travel-and-hospitality-industry')}}">
                                            Travel & Hospitality Industry
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.sales-and-marketing-industry')}}">
                                            Sales & Marketing Industry
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.transportation-and-logistics-industry')}}">
                                            Transportation and Logistics
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.healthcare-industry')}}">
                                            Healthcare Industry
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.real-estate-industry')}}">
                                            Real Estate Industry
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.media-and-entertainment-industry')}}">
                                            Media & Entertainment Industry
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.automative-and-vehicle-industry')}}">
                                            Automative & Vehicle Industries
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.on-demand-industry')}}">
                                            On-Demand-Industry
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </li>

                    <li class="accordion nav-item d-xl-none mobile-menu-hide" id="accordionExample">
                        <div class="accordion-button nav-link" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsetwo" aria-expanded="true"
                            aria-controls="collapsetwo">
                            Service
                        </div>

                        <div id="collapsetwo" class="accordion-collapse collapse "
                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="tab-sub-menu">
                                    <li>
                                        <a href="#">
                                            Our All Services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.web-development-service')}}">
                                            Web Development
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.app-development-service')}}">
                                            App Development
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.cloud-computing-service')}}">
                                            Cloud Computing
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.degital-and-media-marketing-service')}}">
                                            Digital & Media Marketing
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.design-and-enperience-service')}}">
                                            Design & Experience
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.it-support-and-consulting-service')}}">
                                            IT Support & Consulting
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.business-development-service')}}">
                                            Business Development
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.white-labeling-service')}}">
                                        White Labeling
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.project-managment-service')}}">
                                        Project Management
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('front.content-management-services')}}">
                                        Content Management
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </li>

                    <!-- <li class="accordion nav-item d-xl-none mobile-menu-hide" id="accordionExample">
                        <div class="accordion-button nav-link" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsethree" aria-expanded="true"
                            aria-controls="collapsethree">
                            Software
                        </div>

                        <div id="collapsethree" class="accordion-collapse collapse "
                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="tab-sub-menu">
                                    <li>
                                        <a href="#">
                                            Our Software
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            B2B, B2C and Reseller Software
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Restaurant Management Software
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            School Management Software
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Travel Booking Software
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Insurance Software
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Education Software
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Gaming Software
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            MLM Software
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Event Management Softwares
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            CRM Software
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Finance Software
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            On Demand Software
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </li>

                    <li class="accordion nav-item d-xl-none mobile-menu-hide" id="accordionExample">
                        <div class="accordion-button nav-link" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsefour" aria-expanded="true"
                            aria-controls="collapsefour">
                            Fintech Service
                        </div>

                        <div id="collapsefour" class="accordion-collapse collapse "
                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="tab-sub-menu">
                                    <li>
                                        <a href="#">
                                            Our Fintech Service
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Aadhaar Enabled Payment System (AEPS)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Bharat Bill Payment System (BBPS)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Domestic Money Transfer (DMT)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Multi-Recharge Service
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Payout Service
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Pancard Service
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Payment Gateway Service
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Fastag Service
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </li>

                    <li class="accordion nav-item d-xl-none mobile-menu-hide" id="accordionExample">
                        <div class="accordion-button nav-link" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsefive" aria-expanded="true"
                            aria-controls="collapsefive">
                            API Services
                        </div>

                        <div id="collapsefive" class="accordion-collapse collapse "
                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="tab-sub-menu">
                                    <li>
                                        <a href="#">
                                            Our API Services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            AEPS Payment API
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            BBPS API Provider
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            DMT API Provider
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            UPI Payment API Provider
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Payout API Provider
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Pancard API Provider
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Whatsapp API Provider
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Aadhaar Verification API Provider
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Recharge API Provider
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </li> -->

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('front.case-study') ? 'active' : '' }}" href="{{route('front.case-study')}}">Case Study</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('front.blogs') ? 'active' : '' }}" href="{{route('front.blogs')}}">Blogs</a>
                    </li>
                </ul>
                <ul class="navbar-nav justify-content-end d-flex align-items-xl-center">
                    <li class="get-quote-btn nav-btn mb-xl-0 mb-4">
                        <a class="nav-link buttoncss Get-quote" href="#">Get a Quote</a>
                    </li>
                    <li class="nav-btn ecuzenlife mb-xl-0 mb-4">
                        <a class="nav-link buttoncss hire_us" href="#">Life @ Ecuzen</a>
                    </li>
                    <li class="nav-btn phn-btn mb-xl-0 mb-4">
                        <div class="btn-phn">
                            <a class="nav-link buttoncss" href="#">
                                <img src="{{('frontend/assets\images\phone.svg')}}" alt="phone" height="20px">
                            </a>
                            <div class="drp-down">
                                <div class="call-enquiry">
                                    <div class="heading">
                                        <span class="lineimg">
                                            <img src="{{('frontend/assets\images\rectangleline.png')}}">
                                        </span>
                                        <span class="main-heading">Get in Touch</span>
                                    </div>
                                    <div class="sales-team">
                                        <div class="team-heading">Ecuzen Sales Team</div>
                                        <a class="main-content" title="phone" href="tel:+91 9549166444">
                                            <div class="d-flex align-items-center info ">
                                                <div class="icon">
                                                    <img src="{{asset('frontend/assets\images\phonec.png')}}">
                                                </div>
                                                <div class="info-main">
                                                    <div class="location">
                                                        India
                                                    </div>
                                                    <div class="content">
                                                        +91 9549166444
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="main-content" title="LinkedIn"
                                            href="https://www.linkedin.com/company/ecuzensoftware/?viewAsMember=true">
                                            <div class="d-flex align-items-center info ">
                                                <div class="icon">
                                                    <img src="{{('frontend/assets\images\linkedIn.png')}}">
                                                </div>
                                                <div class="info-main">
                                                    <div class="location">
                                                        LinkedIn
                                                    </div>
                                                    <div class="content">
                                                        Ecuzen Software Private Limited
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="main-content" title="Mail"
                                            href="mailto:info@ecuzen.com">
                                            <div class="d-flex align-items-center info ">
                                                <div class="icon">
                                                    <img src="{{('frontend/assets\images\emailc.png')}}">
                                                </div>
                                                <div class="info-main">
                                                    <div class="location ">
                                                        Email
                                                    </div>
                                                    <div class="content">
                                                        info@ecuzen.com
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="sales-team">
                                        <div class="team-heading">Ecuzen HR Team</div>
                                        <a class="main-content" title="Mail"
                                            href="mailto:info@ecuzen.com">
                                            <div class="d-flex align-items-center info ">
                                                <div class="icon">
                                                    <img src="{{('frontend/assets\images\emailc.png')}}">
                                                </div>
                                                <div class="info-main">
                                                    <div class="location ">
                                                        Email
                                                    </div>
                                                    <div class="content">
                                                        info@ecuzen.com
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </li>
                    <li class="nav-btn d-none d-xl-block">
                        <a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasExample"
                            role="button" aria-controls="offcanvasExample">
                            <img src="{{('frontend/assets\images\btntole.svg')}}" alt="phone" height="30px">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>