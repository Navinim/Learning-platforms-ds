<!-- Start Navbar Area -->
<nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{ asset('user/images/logo.png') }}" alt="logo" style="height: 40px;">
        </a>
        <button class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
            aria-controls="navbarOffcanvas">
            <span class="burger-menu">
                <span class="top-bar"></span>
                <span class="middle-bar"></span>
                <span class="bottom-bar"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a href="javascript:void(0)" class="dropdown-toggle nav-link with-image">
                        Courses
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($course_category as $item)
                            <li class="nav-item">
                                <a href="#" class="nav-link">{{ $item->title }}</a>
                                <ul class="dropdown-menu">
                                    @foreach ($item->courses as $course)
                                        <li class="nav-item">
                                            <a href="{{ route('course_detail', ['slug' => $course->slug]) }}"
                                                class="nav-link">{{ $course->title }}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <div class="header-widget d-flex align-items-center style2">
                    <div class="input-box">
                        <form>
                            <input type="text" class="form-control" placeholder="Search here...">
                            <button class="search-btn" type="submit">
                                <i class="ri-search-line"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <li class="nav-item">
                    <a href="javascript:void(0)" class="dropdown-toggle nav-link with-image">
                        Bootcamp
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($bootcamps as $item)
                        <li class="nav-item">
                            <a href="{{ route('bootcamp_details', ['slug' => $item->slug]) }}" class="nav-link">{{$item->title}}</a>
                        </li> 
                        @endforeach                       
                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="javascript:void(0)" class="dropdown-toggle nav-link with-image">
                        Diploma Programs
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($diplomas as $item)
                        <li class="nav-item">
                            <a href="{{route('diploma_details',['slug' => $item->slug])}}" class="nav-link">{{$item->title}}</a>
                        </li>
                        @endforeach
                        
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link">Express Diploma</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="express-diploma-in-ds-ml.html" class="nav-link">Express Diploma in Data
                                        Science and Machine Learning</a>
                                </li>
                                <li class="nav-item">
                                    <a href="express-diploma-in-da.html" class="nav-link"> Express Diploma in Data
                                        Analytics</a>
                                </li>
                                <li class="nav-item">
                                    <a href="express-diploma-in-se.html" class="nav-link"> Express Diploma in
                                        Software Engineering</a>
                                </li>
                                <li class="nav-item">
                                    <a href="express-diploma-in-dm.html" class="nav-link">Express Diploma in Digital
                                        Marketing</a>
                                </li>
                            </ul>
                        </li> --}}

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0)" class="dropdown-toggle nav-link with-image">
                        Resources
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-item">
                            <a href="blog.html" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="practice.html" class="nav-link">Practice Test</a>
                        </li>
                        <li class="nav-item">
                            <a href="interview-question.html" class="nav-link">Interview Question</a>
                        </li>
                    </ul>


                </li>
                <li class="nav-item">
                    <a href="javascript:void(0)" class="dropdown-toggle nav-link with-image">
                        Help
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-item">
                            <a href="faq.html" class="nav-link">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('contact')}}" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="others-option d-flex align-items-center">
                <div class="option-item style2">
                    <a href="login.html" class="default-btn">Log In</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- End Navbar Area -->
<!-- Start Mobile Device Navbar Area -->
<div class="responsive-navbar offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvas">
    <div class="offcanvas-header">
        <a href="{{route('home')}}" class="logo d-inline-block">
            <img src="{{ asset('user/images/logo.png') }}" alt="logo">
        </a>
        <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="ri-close-line"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <div class="accordion" id="navbarAccordion">
            <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo33" aria-expanded="false" aria-controls="collapseTwo33">
                    Courses
                </button>
                <div id="collapseTwo33" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                    <div class="accordion-body">
                        <div class="accordion" id="navbarAccordion2">
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#web" aria-expanded="false" aria-controls="web">
                                    Web Development
                                </button>
                                <div id="web" class="accordion-collapse collapse"
                                    data-bs-parent="#navbarAccordion2">
                                    <div class="accordion-body">
                                        <div class="accordion" id="webAccordion">
                                            <div class="accordion-item">
                                                <a href="full-stack-development.html" class="accordion-link">
                                                    Full Stack Development
                                                </a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="ui-ux-design.html" class="accordion-link">
                                                    UI/UX Design
                                                </a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="software-engineering.html" class="accordion-link">
                                                    Software Engineer
                                                </a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="frontend.html" class="accordion-link">
                                                    Front-End Development
                                                </a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="react.html" class="accordion-link">
                                                    React Training
                                                </a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="nodejs.html" class="accordion-link">
                                                    Node Js Training
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#datascience" aria-expanded="false" aria-controls="datascience">
                                    Data Science
                                </button>
                                <div id="datascience" class="accordion-collapse collapse"
                                    data-bs-parent="#navbarAccordion2">
                                    <div class="accordion-body">
                                        <div class="accordion" id="datascienceAccordion">
                                            <div class="accordion-item">
                                                <a href="data-science.html" class="accordion-link">
                                                    Data Science
                                                </a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="data-engineer.html" class="accordion-link">
                                                    Data Engineer
                                                </a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="data-analytics.html" class="accordion-link">
                                                    Data Analytics
                                                </a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="ai-machine-learning.html" class="accordion-link">
                                                    AI and Machine Learning
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#database" aria-expanded="false" aria-controls="database">
                                    Database
                                </button>
                                <div id="database" class="accordion-collapse collapse"
                                    data-bs-parent="#navbarAccordion2">
                                    <div class="accordion-body">
                                        <div class="accordion" id="databaseAccordion">
                                            <div class="accordion-item">
                                                <a href="mysql.html" class="accordion-link">
                                                    MySQL Course
                                                </a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="mongodb.html" class="accordion-link">
                                                    Mongo Db Certification
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <a href="software-development.html" class="accordion-link">
                                    software-development
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Bootcamp
                </button>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                    <div class="accordion-body">
                        <div class="accordion" id="navbarAccordion2">
                            <div class="accordion-item">
                                <a href="bootcamps-details.html" class="accordion-link">Full Stack Development</a>
                            </div>
                            <div class="accordion-item">
                                <a href="bootcamps-details.html" class="accordion-link">Data Science Bootcamps</a>
                            </div>
                            <div class="accordion-item">
                                <a href="bootcamps-details.html" class="accordion-link">Web Deveopment Bootcamps</a>
                            </div>
                            <div class="accordion-item">
                                <a href="bootcamps-details.html" class="accordion-link">Front End Developer</a>
                            </div>
                            <div class="accordion-item">
                                <a href="bootcamps-details.html" class="accordion-link">Apply AI Bootcamps</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo34" aria-expanded="false" aria-controls="collapseTwo34">
                    Diploma Programs
                </button>
                <div id="collapseTwo34" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                    <div class="accordion-body">
                        <div class="accordion" id="navbarAccordion2">
                            <div class="accordion-item">
                                <a href="certification-in-it.html" class="accordion-link">
                                    Certificate in Information Technology
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="diploma-in-com-it.html" class="accordion-link">
                                    Diploma in Computing and IT
                                </a>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#web" aria-expanded="false" aria-controls="web">
                                    Express Diploma
                                </button>
                                <div id="web" class="accordion-collapse collapse"
                                    data-bs-parent="#navbarAccordion2">
                                    <div class="accordion-body">
                                        <div class="accordion" id="webAccordion">
                                            <div class="accordion-item">
                                                <a href="express-diploma-in-ds-ml.html" class="accordion-link">
                                                    Express Diploma in Data Science and Machine Learning
                                                </a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="express-diploma-in-da.html" class="accordion-link">
                                                    Express Diploma in Data Analytics
                                                </a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="express-diploma-in-se.html" class="accordion-link">
                                                    Express Diploma in Software Engineering
                                                </a>
                                            </div>
                                            <div class="accordion-item">
                                                <a href="express-diploma-in-dm.html" class="accordion-link">
                                                    Express Diploma in Digital Marketing
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo35" aria-expanded="false" aria-controls="collapseTwo35">
                    Resources
                </button>
                <div id="collapseTwo35" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                    <div class="accordion-body">
                        <div class="accordion" id="navbarAccordion2">
                            <div class="accordion-item">
                                <a href="blog.html" class="accordion-link">
                                    Blog
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="practice-test.html" class="accordion-link">
                                    Practice Test
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="interview-question.html" class="accordion-link">
                                    Interview Question
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo333" aria-expanded="false" aria-controls="collapseTwo333">
                    Help
                </button>
                <div id="collapseTwo333" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion23">
                    <div class="accordion-body">
                        <div class="accordion" id="navbarAccordion23">
                            <div class="accordion-item">
                                <a href="faq.html" class="accordion-link">
                                    FAQ
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="contact.html" class="accordion-link">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="others-option d-flex align-items-center">
            <!-- <div class="option-item">
                <ul>
                    <li>
                        <div class="icon">
                            <img src="assets/images/svgs/phone1.svg" alt="image">
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <span>Call Anytime</span>
                            <a href="tel:99654892986">54786547521</a>
                        </div>
                    </li>
                </ul>
            </div> -->
            <div class="side-widget d-flex align-items-center style3">
                <div class="input-box">
                    <form>
                        <input type="text" class="form-control" placeholder="Search here...">
                        <button class="search-btn" type="submit">
                            <i class="ri-search-line"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="option-item">
                <a href="login.html" class="default-btn">Log In</a>
            </div>
        </div>
    </div>
</div>
<!-- End Mobile Device Navbar Area -->
