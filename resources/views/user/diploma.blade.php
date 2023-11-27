@extends('user.layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset('user/css/course.css') }}">
@endpush
@section('content')
    <!--page title area start-->
    <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center"
        data-background="assets/img/page-title/page-title.jpg"
        style="background-image: url('{{ asset('user/images/courses/it.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="page__title-wrapper">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Diploma Programs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $diploma->title }}</li>
                            </ol>
                        </nav>
                        <span class="page__title-pre">{{ $diploma->tag }}</span>
                        <h5 class="page__title-3">{{ $diploma->title }}</h5>
                        <div class="course-heading">
                            <!-- <h3>React JS Training</h3> -->
                            <h6>{{ $diploma->sub_title }}</h6>
                        </div>
                        <div class="course-details">
                            {!! str_replace(
                                ['<ul>', '</ul>', '<li>', '</li>'],
                                ['', '', '<p><i class="fa fa-check"></i>', '</i></p>'],
                                $diploma->description,
                            ) !!}
                        </div>
                    </div>

                    <div class="button mt-45">
                        <a href="#"><button class="default-btn">Get Started For Free</button></a>
                        <a class="active" id="open-modal" href="#"><button class="default-btn2">Download Brochure <i
                                    class="fas fa-arrow-right"></i></button></a>
                    </div>
                    <div id="modal-overlay"></div>
                    <div id="modal">
                        <div class="appointment">
                            <div class="sign-up-form-wrap p-5">
                                <button id="close-modal">Close</button>
                                <div class="sign-up-form-header text-center mb-4">
                                    <!-- <h4 class="appointment_title mb-2">Make An Enquiry</h4> -->
                                    <p>Please fill the form to get latest brochure</p>
                                </div>
                                <form action="https://formspree.io/f/myyleorq" method="POST" id="dreamit-form"
                                    class="sign-up-form">
                                    <div class="form-group input-group">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name"
                                            required=""
                                            style="margin-bottom: 10px;
                                padding: 10px;">
                                    </div>
                                    <div class="form-group input-group">
                                        <input type="email" name="email" class="form-control" placeholder="Your Email"
                                            required=""
                                            style="margin-bottom: 10px;
                                padding: 10px;">
                                    </div>
                                    <div class="form-group input-group">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone Number"
                                            required=""
                                            style="margin-bottom: 10px;
                                padding: 10px;">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" id="submit" class="btn" value="Send">
                                    </div>
                                    <div class="form-check d-flex align-items-center text-center"></div>
                                </form>
                                <div id="status"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="faq-details-small-warp">
                        <div class="all-boxes consulting">
                            <h3>Join Us</h3>
                            @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif 
                        @if($errors->has('*'))
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first('*') }}
                        </div>
                    @endif
                            <form method="POST" accept="{{route('store_diploma_details',['slug' => $diploma->slug])}}">@csrf
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Full Name">
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email Address">
                                <input type="nymber" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="Phone">
                                <select class="form-select form-control"name="course_type" value="{{ old('course_type') }}" aria-label="Default select example">
                                    <option selected="">Course Type</option>
                                    @foreach ($diplomas as $item)
                                    <option value="{{$item->title}}">{{$item->title}}</option> 
                                    @endforeach
                                                                       
                                </select>
                                <textarea type="text" name="content" class="form-control" placeholder="Message"></textarea>
                                <button class="default-btn" type="submit">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--page title area ends-->

    <section class="page__title-area pt-20">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="course__wrapper">
                        <div class="counter-tng">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="counter_style_three wow flipInY animated" data-wow-delay="0ms"
                                        data-wow-duration="2500ms"
                                        style="visibility: visible; animation-duration: 2500ms; animation-delay: 0ms; animation-name: flipInY;">
                                        <div class="counter_style_three_icon pb-3">
                                            <div class="icon">
                                                <i class="fas fa-chart-line"></i>
                                            </div>
                                        </div>
                                        <div class="counter_style_three_text">
                                            <h6><span class="counter">{{$diploma->h_student}}</span><span>M</span> </h6>
                                        </div>
                                        <div class="counter_style_three_dex">
                                            <p>Happy Students</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="counter_style_three color2 wow flipInY animated" data-wow-delay="0ms"
                                        data-wow-duration="2500ms"
                                        style="visibility: visible; animation-duration: 2500ms; animation-delay: 0ms; animation-name: flipInY;">
                                        <div class="counter_style_three_icon pb-3">
                                            <div class="icon">
                                                <i class="far fa-lightbulb"></i>
                                            </div>
                                        </div>
                                        <div class="counter_style_three_text">
                                            <h6><span class="counter">{{$diploma->workshop}}</span><span>K</span> </h6>
                                        </div>
                                        <div class="counter_style_three_dex">
                                            <p>Workshops every month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="counter_style_three color3 wow flipInY animated" data-wow-delay="0ms"
                                        data-wow-duration="2500ms"
                                        style="visibility: visible; animation-duration: 2500ms; animation-delay: 0ms; animation-name: flipInY;">
                                        <div class="counter_style_three_icon pb-3">
                                            <div class="icon">
                                                <i class="fas fa-laptop-code"></i>
                                            </div>
                                        </div>
                                        <div class="counter_style_three_text">
                                            <h6><span class="counter">{{$diploma->trained}}</span><span>K</span> </h6>
                                        </div>
                                        <div class="counter_style_three_dex">
                                            <p>Professionals trained</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="course__highltights">
                            <h2 class="section-heading">{{$diploma->explore_title}}</h2>
                            {!!$diploma->explore_details !!}
                            <div class="highlights">
                                <h5 style="padding-bottom: 10px;">Highlights</h5>
                                <div class="row home11">
                                    <div class="col-lg-6">
                                        <div class="singel_about_left">
                                            <div class="singel_about_left_inner">
                                                <div class="about_icon mr-2">
                                                    <div class="icon">
                                                        <i class="fas fa-chalkboard-teacher"></i>
                                                    </div>
                                                </div>
                                                <div class="singel-about-content">
                                                    <p class="highlights-para">160+ Hours Instructor-Led Sessions</p>
                                                </div>
                                            </div>
                                            <div class="singel_about_left_inner">
                                                <div class="about_icon mr-2">
                                                    <div class="icon">
                                                        <i class="fas fa-clipboard-list"></i>
                                                    </div>
                                                </div>
                                                <div class="singel-about-content">
                                                    <p class="highlights-para">287+ Hands-On Exercises</p>
                                                </div>
                                            </div>
                                            <div class="singel_about_left_inner">
                                                <div class="about_icon mr-2">
                                                    <div class="icon">
                                                        <i class="far fa-window-restore"></i>
                                                    </div>
                                                </div>
                                                <div class="singel-about-content">
                                                    <p class="highlights-para">10+ Real-World Projects</p>
                                                </div>
                                            </div>
                                            <div class="singel_about_left_inner">
                                                <div class="about_icon mr-2">
                                                    <div class="icon">
                                                        <i class="fas fa-exclamation-circle"></i>
                                                    </div>
                                                </div>
                                                <div class="singel-about-content">
                                                    <p class="highlights-para">50+ Hours of Problem-Solving Sessions</p>
                                                </div>
                                            </div>
                                            <div class="singel_about_left_inner">
                                                <div class="about_icon mr-2">
                                                    <div class="icon">
                                                        <i class="fas fa-copy"></i>
                                                    </div>
                                                </div>
                                                <div class="singel-about-content">
                                                    <p class="highlights-para">30+ Auto-Graded Assessments</p>
                                                </div>
                                            </div>
                                            <div class="singel_about_left_inner">
                                                <div class="about_icon mr-2">
                                                    <div class="icon">
                                                        <i class="fas fa-industry"></i>
                                                    </div>
                                                </div>
                                                <div class="singel-about-content">
                                                    <p class="highlights-para">Masterclasses by Industry Experts</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="singel_about_left">
                                            <div class="singel_about_left_inner">
                                                <div class="about_icon mr-2">
                                                    <div class="icon">
                                                        <i class="fas fa-video"></i>
                                                    </div>
                                                </div>
                                                <div class="singel-about-content">
                                                    <p class="highlights-para">80+ Hours of Self-Paced Videos</p>
                                                </div>
                                            </div>
                                            <div class="singel_about_left_inner">
                                                <div class="about_icon mr-2">
                                                    <div class="icon">
                                                        <i class="fas fa-cloud"></i>
                                                    </div>
                                                </div>
                                                <div class="singel-about-content">
                                                    <p class="highlights-para">300+ Hours of Cloud Labs-Enabled Learning
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="singel_about_left_inner">
                                                <div class="about_icon mr-2">
                                                    <div class="icon">
                                                        <i class="fas fa-check-circle"></i>
                                                    </div>
                                                </div>
                                                <div class="singel-about-content">
                                                    <p class="highlights-para">Structured, Industry-Validated Curriculum
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="singel_about_left_inner">
                                                <div class="about_icon mr-2">
                                                    <div class="icon">
                                                        <i class="fas fa-user-tie"></i>
                                                    </div>
                                                </div>
                                                <div class="singel-about-content">
                                                    <p class="highlights-para">2 Hackathons and 3 Mock Interviews </p>
                                                </div>
                                            </div>
                                            <div class="singel_about_left_inner">
                                                <div class="about_icon mr-2">
                                                    <div class="icon">
                                                        <i class="fas fa-chalkboard"></i>
                                                    </div>
                                                </div>
                                                <div class="singel-about-content">
                                                    <p class="highlights-para">16+ Hours of Career Coaching </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course__tab-2 mt-45 mb-45">
                            <ul class="nav nav-tabs" id="courseTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                        data-bs-target="#description" type="button" role="tab"
                                        aria-controls="description" aria-selected="true"><i
                                            class="far fa-file-alt"></i><span>Description</span> </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="curriculum-tab" data-bs-toggle="tab"
                                        data-bs-target="#curriculum" type="button" role="tab"
                                        aria-controls="curriculum" aria-selected="false"><i
                                            class="fas fa-book"></i><span>Curriculum</span> </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="review-tab" data-bs-toggle="tab"
                                        data-bs-target="#review" type="button" role="tab" aria-controls="review"
                                        aria-selected="false"><i class="far fa-star"></i><span>Reviews</span> </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="outcome-tab" data-bs-toggle="tab"
                                        data-bs-target="#outcome" type="button" role="tab" aria-controls="outcome"
                                        aria-selected="false"><i class="far fa-list-alt"></i><span>Expected
                                            outcomes</span> </button>
                                </li>
                            </ul>
                        </div>
                        <div class="course__tab-content mb-50">
                            <div class="tab-content" id="courseTabContent">
                                <div class="tab-pane fade active show" id="description" role="tabpanel"
                                    aria-labelledby="description-tab">
                                    <div class="course__description">
                                        {!!$diploma->tab_description!!}
                                        <div class="course__tag-2 mb-35 mt-50">
                                            <i class="fas fa-tag"></i>
                                            <a href="#">Front End Development,</a>
                                            <a href="#">Big data,</a>
                                            <a href="#">AI,</a>
                                            <a href="#">Data analysis,</a>
                                            <a href="#">Web Development</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="curriculum" role="tabpanel"
                                    aria-labelledby="curriculum-tab">
                                    <div class="course__curriculum">
                                        <div class="accordion" id="course__accordion">
                                            <div class="accordion-item mb-50">
                                                <h2 class="accordion-header" id="experts">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#experts-content"
                                                        aria-expanded="false" aria-controls="experts-content">
                                                        Immersive Learning
                                                    </button>
                                                </h2>
                                                <div id="experts-content" class="accordion-collapse"
                                                    aria-labelledby="experts" data-bs-parent="#course__accordion">
                                                    <div class="accordion-body">
                                                        <div
                                                            class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                            <div class="course__curriculum-info">
                                                                <svg class="document" viewBox="0 0 24 24">
                                                                    <path class="st0"
                                                                        d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z">
                                                                    </path>
                                                                    <polyline class="st0" points="14,2 14,8 20,8 ">
                                                                    </polyline>
                                                                    <line class="st0" x1="16" y1="13"
                                                                        x2="8" y2="13"></line>
                                                                    <line class="st0" x1="16" y1="17"
                                                                        x2="8" y2="17"></line>
                                                                    <polyline class="st0" points="10,9 9,9 8,9 ">
                                                                    </polyline>
                                                                </svg>
                                                                <h3> <span>Teaching:</span> Live Instructor-Led Sessions
                                                                </h3>
                                                            </div>
                                                            <div class="course__curriculum-meta">
                                                                <span class="time"> <i class="far fa-clock"></i>175
                                                                    Hours</span>
                                                                <span class="question">16 Assignments</span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                            <div class="course__curriculum-info">
                                                                <svg viewBox="0 0 24 24">
                                                                    <polygon class="st0" points="23,7 16,12 23,17 ">
                                                                    </polygon>
                                                                    <path class="st0"
                                                                        d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z">
                                                                    </path>
                                                                </svg>
                                                                <h3> <span>Video: </span> Resources for practice</h3>
                                                            </div>
                                                            <div class="course__curriculum-meta">
                                                                <span class="time"><i class="far fa-clock"></i> 15
                                                                    minutes</span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                            <div class="course__curriculum-info">
                                                                <svg class="document" viewBox="0 0 24 24">
                                                                    <path class="st0"
                                                                        d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z">
                                                                    </path>
                                                                    <polyline class="st0" points="14,2 14,8 20,8 ">
                                                                    </polyline>
                                                                    <line class="st0" x1="16" y1="13"
                                                                        x2="8" y2="13"></line>
                                                                    <line class="st0" x1="16" y1="17"
                                                                        x2="8" y2="17"></line>
                                                                    <polyline class="st0" points="10,9 9,9 8,9 ">
                                                                    </polyline>
                                                                </svg>
                                                                <h3> <span>Reading: </span> Hands-On with Cloud Labs</h3>
                                                            </div>
                                                            <div class="course__curriculum-meta">
                                                                <span class="time"> <i class="far fa-clock"></i> 400+
                                                                    Hours</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion" id="course__accordion-2">
                                            <div class="accordion-item mb-50">
                                                <h2 class="accordion-header" id="projects">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#projects-content"
                                                        aria-expanded="false" aria-controls="projects-content">
                                                        Course Model
                                                    </button>
                                                </h2>
                                                <div id="projects-content" class="accordion-collapse"
                                                    aria-labelledby="projects" data-bs-parent="#course__accordion-2">
                                                    <div class="accordion-body">
                                                        <div
                                                            class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                            <div class="course__description-list">
                                                                {!! str_replace('<li>', '<li><i class="fas fa-check-circle"></i>', $diploma->course_modal) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                    <div class="course__review">
                                        <h3>Reviews</h3>
                                        <div class="course__review-rating mb-10">
                                            <div class="row g-0">
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                                    <div class="course__review-rating-info grey-bg text-center">
                                                        <h5>5</h5>
                                                        <ul>
                                                            <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                            <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                            <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                            <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                            <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                        </ul>
                                                        <p>4 Ratings</p>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                                    <div class="course__review-details grey-bg">
                                                        <h5>Detailed Rating</h5>
                                                        <div class="course__review-content mb-20">
                                                            <div
                                                                class="course__review-item d-flex align-items-center justify-content-between">
                                                                <div class="course__review-text">
                                                                    <span>5 stars</span>
                                                                </div>
                                                                <div class="course__review-progress">
                                                                    <div class="single-progress" data-width="100%"
                                                                        style="width: 100%;"></div>
                                                                </div>
                                                                <div class="course__review-percent">
                                                                    <h5>100%</h5>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="course__review-item d-flex align-items-center justify-content-between">
                                                                <div class="course__review-text">
                                                                    <span>4 stars</span>
                                                                </div>
                                                                <div class="course__review-progress">
                                                                    <div class="single-progress" data-width="30%"
                                                                        style="width: 30%;"></div>
                                                                </div>
                                                                <div class="course__review-percent">
                                                                    <h5>30%</h5>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="course__review-item d-flex align-items-center justify-content-between">
                                                                <div class="course__review-text">
                                                                    <span>3 stars</span>
                                                                </div>
                                                                <div class="course__review-progress">
                                                                    <div class="single-progress" data-width="0%"
                                                                        style="width: 0%;"></div>
                                                                </div>
                                                                <div class="course__review-percent">
                                                                    <h5>0%</h5>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="course__review-item d-flex align-items-center justify-content-between">
                                                                <div class="course__review-text">
                                                                    <span>2 stars</span>
                                                                </div>
                                                                <div class="course__review-progress">
                                                                    <div class="single-progress" data-width="0%"
                                                                        style="width: 0%;"></div>
                                                                </div>
                                                                <div class="course__review-percent">
                                                                    <h5>0%</h5>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="course__review-item d-flex align-items-center justify-content-between">
                                                                <div class="course__review-text">
                                                                    <span>1 stars</span>
                                                                </div>
                                                                <div class="course__review-progress">
                                                                    <div class="single-progress" data-width="0%"
                                                                        style="width: 0%;"></div>
                                                                </div>
                                                                <div class="course__review-percent">
                                                                    <h5>0%</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course__comment mb-30">
                                            <h3>2 Comments</h3>

                                            <ul>
                                                <li>
                                                    <div class="course__comment-box ">
                                                        <div class="course__comment-thumb float-start">
                                                            <img src="assets/images/courses/comment1.webp" alt="">
                                                        </div>
                                                        <div class="course__comment-content">
                                                            <div class="course__comment-wrapper ml-70 fix">
                                                                <div class="course__comment-info float-start">
                                                                    <h4>Ramesh Devkota</h4>
                                                                    <span>Feb 14, 2023</span>
                                                                </div>
                                                                <div
                                                                    class="course__comment-rating float-start float-sm-end">
                                                                    <ul>
                                                                        <li><a href="#"> <i class="fas fa-star"></i>
                                                                            </a></li>
                                                                        <li><a href="#"> <i class="fas fa-star"></i>
                                                                            </a></li>
                                                                        <li><a href="#"> <i class="fas fa-star"></i>
                                                                            </a></li>
                                                                        <li><a href="#"> <i class="fas fa-star"></i>
                                                                            </a></li>
                                                                        <li><a href="#"> <i class="fas fa-star"></i>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="course__comment-text ml-70">
                                                                <p>Durshikshya's IT course transformed me into a proficient
                                                                    developer with a holistic skill set!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="course__comment-box ">
                                                        <div class="course__comment-thumb float-start">
                                                            <img src="assets/images/courses/comment2.jpg" alt="">
                                                        </div>
                                                        <div class="course__comment-content">
                                                            <div class="course__comment-wrapper ml-70 fix">
                                                                <div class="course__comment-info float-start">
                                                                    <h4>Usha Shrestha</h4>
                                                                    <span>Feb 23, 2023</span>
                                                                </div>
                                                                <div
                                                                    class="course__comment-rating float-start float-sm-end">
                                                                    <ul>
                                                                        <li><a href="#"> <i class="fas fa-star"></i>
                                                                            </a></li>
                                                                        <li><a href="#"> <i class="fas fa-star"></i>
                                                                            </a></li>
                                                                        <li><a href="#"> <i class="fas fa-star"></i>
                                                                            </a></li>
                                                                        <li><a href="#"> <i class="fas fa-star"></i>
                                                                            </a></li>
                                                                        <li><a href="#" class="no-rating"> <i
                                                                                    class="fas fa-star"></i> </a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="course__comment-text ml-70">
                                                                <p>Enrolling in Durshikshya's IT course was the best career
                                                                    decision I ever made. Highly recommended!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="course__form">
                                            <h3>Write a Review</h3>
                                            <div class="course__form-inner">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-xxl-6">
                                                            <div class="course__form-input">
                                                                <input type="text" placeholder="Your Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-6">
                                                            <div class="course__form-input">
                                                                <input type="email" placeholder="Your Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-12">
                                                            <div class="course__form-input">
                                                                <input type="text" placeholder="Review Title">
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-12">
                                                            <div class="course__form-input">
                                                                <div class="course__form-rating">
                                                                    <span>Rating : </span>
                                                                    <ul>
                                                                        <li><a href="#"> <i class="fas fa-star"></i>
                                                                            </a></li>
                                                                        <li><a href="#"> <i class="fas fa-star"></i>
                                                                            </a></li>
                                                                        <li><a href="#"> <i class="fas fa-star"></i>
                                                                            </a></li>
                                                                        <li><a href="#" class="no-rating"> <i
                                                                                    class="fas fa-star"></i> </a></li>
                                                                        <li><a href="#" class="no-rating"> <i
                                                                                    class="fas fa-star"></i> </a></li>
                                                                    </ul>
                                                                </div>
                                                                <textarea placeholder="Review Summary"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xxl-12">
                                                            <div class="course__form-btn mt-10 mb-55">
                                                                <button type="submit" class="default-btn">Submit
                                                                    Review</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="outcome" role="tabpanel" aria-labelledby="outcome-tab">
                                    <div class="course__outcome mb-45">
                                        <div class="course__outcome-item">
                                            <div class="row align-items-center">
                                                <div class="course__outcome-info pl-45">
                                                   {!!$diploma->tab_outcomes!!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="course__share">
                                    <h3>Share :</h3>
                                    <ul>
                                        <li><a href="#" class="fb"><i class="fab fa-facebook-f"
                                                    style="color: #ffffff;"></i></a></li>
                                        <li><a href="#" class="tw"><i class="fab fa-instagram"
                                                    style="color: #ffffff;"></i></a></li>
                                        <li><a href="#" class="pin"><i class="fab fa-pinterest-p"
                                                    style="color: #ffffff;"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <div class="course__sidebar pl-70 p-relative">
                        <div class="course__sidebar-widget-2 white-bg mt-60 mb-60">
                            <div class="course__sidebar-course">
                                <h3 class="course__sidebar-title">Related courses</h3>
                                <ul>
                                    <li>
                                        <div class="course__sm d-flex align-items-center mb-30">
                                            <div class="course__sm-thumb mr-20">
                                                <a href="#">
                                                    <img src="assets/images/courses/Big Data.png" alt="">
                                                </a>
                                            </div>
                                            <div class="course__sm-content">
                                                <div class="course__sm-rating">
                                                    <ul>
                                                        <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                        <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                        <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                        <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                        <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                    </ul>
                                                </div>
                                                <h5><a href="#">Big Data</a></h5>
                                                <div class="course__sm-price">
                                                    <span>New Intake, August</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="course__sm d-flex align-items-center mb-30">
                                            <div class="course__sm-thumb mr-20">
                                                <a href="#">
                                                    <img src="assets/images/courses/database management.png"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="course__sm-content">
                                                <div class="course__sm-rating">
                                                    <ul>
                                                        <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                        <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                        <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                        <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                        <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                    </ul>
                                                </div>
                                                <h5><a href="#">Data Base</a></h5>
                                                <div class="course__sm-price">
                                                    <span>New Intake, March</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="course__sm d-flex align-items-center mb-30">
                                            <div class="course__sm-thumb mr-20">
                                                <a href="#">
                                                    <img src="assets/images/courses/data analysis.png" alt="">
                                                </a>
                                            </div>
                                            <div class="course__sm-content">
                                                <div class="course__sm-rating">
                                                    <ul>
                                                        <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                        <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                        <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                        <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                        <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                    </ul>
                                                </div>
                                                <h5><a href="#">Data Analysis</a></h5>
                                                <div class="course__sm-price">
                                                    <span>New Intake, March</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="course__sm d-flex align-items-center mb-30">
                                            <div class="course__sm-thumb mr-20">
                                                <a href="#">
                                                    <img src="assets/images/courses/Big Data.png" alt="">
                                                </a>
                                            </div>
                                            <div class="course__sm-content">
                                                <div class="course__sm-rating">
                                                    <ul>
                                                        <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                        <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                        <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                        <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                        <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                    </ul>
                                                </div>
                                                <h5><a href="#">Big Data</a></h5>
                                                <div class="course__sm-price">
                                                    <span>New Intake, August</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="course__sm d-flex align-items-center mb-30">
                                            <div class="course__sm-thumb mr-20">
                                                <a href="#">
                                                    <img src="assets/images/courses/Business Intelligence.png"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="course__sm-content">
                                                <div class="course__sm-rating">
                                                    <ul>
                                                        <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                        <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                        <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                        <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                        <li><a href="#"> <i class="fas fa-star"></i> </a></li>
                                                    </ul>
                                                </div>
                                                <h5><a href="#">Business Intelligencet</a></h5>
                                                <div class="course__sm-price">
                                                    <span>New Intake, August</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar__widget mb-55"
                            style="padding: 30px;
                         -webkit-box-shadow: 0px 30px 50px 0px rgba(1, 11, 60, 0.1);
                         -moz-box-shadow: 0px 30px 50px 0px rgba(1, 11, 60, 0.1);
                         box-shadow: 0px 30px 50px 0px rgba(1, 11, 60, 0.1);
                         -webkit-border-radius: 4px;
                         -moz-border-radius: 4px;
                         border-radius: 4px;">
                            <div class="sidebar__widget-head mb-35">
                                <h3 class="sidebar__widget-title">Diploma Course</h3>
                            </div>
                            <div class="sidebar__widget-content">
                                <div class="sidebar__category">
                                    <ul style="margin-left:-35px">
                                        <li><a href="blog.html">Diploma in Computing and IT</a></li>
                                        <li><a href="blog.html"> Information Technology</a></li>
                                        <li><a href="blog.html">Data Science and Machine Learning</a></li>
                                        <li><a href="blog.html">Data Analytics</a></li>
                                        <li><a href="blog.html">Software Engineering</a></li>
                                        <li><a href="blog.html">Digital Marketing</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="faq-details-small-warp">

                            <div class="all-boxes consulting">
                                <h3>Join Us</h3>
                                <form>
                                    <input type="text" class="form-control" placeholder="Full Name">
                                    <input type="text" class="form-control" placeholder="Email Address">
                                    <input type="text" class="form-control" placeholder="Phone">
                                    <select class="form-select form-control" aria-label="Default select example">
                                        <option selected="">Course Type</option>
                                        <option value="1">Front End Development</option>
                                        <option value="3">Data Sciene</option>
                                        <option value="3">Artificial Intelligence</option>
                                        <option value="2">Web Development</option>
                                        <option value="3">Business Intelligence</option>
                                    </select>
                                    <textarea type="text" class="form-control" placeholder="Message"></textarea>
                                    <button class="default-btn" type="submit">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text_left mb-30">
                    <div class="section_main_title">
                        <h2>Tools You'll Master</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="pb-80">
                    <p style="font-size: 18px;text-align: justify;">
                        Since technology plays an important role in the marketing industry, this program ensures that
                        you are well-versed with all tools that a digital marketer uses daily.
                    </p>
                    <!-- <p>HTML, CSS ,JS ,Bootstrap,Hook ,Redux</p>  -->
                    <div class="row">
                        <div class="col-lg-2 col-sm-6 col-xs-6">
                            <div class="technology d-flex justify-content-center align-items-center">
                                <img src="assets/images/technology/html.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-xs-6">
                            <div class="technology d-flex justify-content-center align-items-center">
                                <img src="assets/images/technology/css.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-xs-6">
                            <div class="technology d-flex justify-content-center align-items-center">
                                <img src="assets/images/technology/nodejs.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-xs-6">
                            <div class="technology d-flex justify-content-center align-items-center">
                                <img src="assets/images/technology/bootstrap.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about_area bg_color2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text_left pt-30 mb-30">
                        <div class="section_main_title">
                            <h2 style="margin-bottom: 50px;">What Makes Our Students Industry Ready</h2>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="course-container">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="col-lg-12">
                                    <div class="first-col">
                                        <button>Personal career guidance</button>
                                        <p>Our industry mentors help you carve out the best career path based on your
                                            skillset.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="first-col">
                                        <button>Interview training</button>
                                        <p>The placement team trains you via under-pressure mock interviews along with
                                            the resume-building process.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="course-img">
                                    <img src="assets/images/portfolio/outdoor.png" alt="">
                                </div>

                            </div>
                            <div class="col-lg-5">
                                <div class="col-lg-12">
                                    <div class="first-col">
                                        <button>Compulsory Internship</button>
                                        <p>Mandatory internships are part of the training to prepare you for the
                                            practical world.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="first-col">
                                        <button>Capstone project</button>
                                        <p>A practical project in a simulated business environment will prepare you to
                                            enter the industry</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container who mt-80">
        <h2 style="text-align: center;">Who Should Attend the Bootcamp</h>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <p><i class="far fa-check-circle"></i>Students</p>
                        <p><i class="far fa-check-circle"></i>IT Industry Professionals</p>
                        <p><i class="far fa-check-circle"></i>Freshers</p>
                    </div>
                    <div class="col-lg-4">
                        <p><i class="far fa-check-circle"></i>Novices</p>
                        <p><i class="far fa-check-circle"></i>Professionals in a tech adjacent role</p>
                    </div>
                    <div class="col-lg-4">
                        <p><i class="far fa-check-circle"></i>Developers</p>
                        <p><i class="far fa-check-circle"></i>Professionals from any industry</p>
                    </div>
                </div>

            </div>
    </div>
    <div class="container">
        <div class="video__testimonial mt-30 mb-30">
            <h2>Our Students Video Testimonial</h2>
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/LU1_2E48vyQ"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/DqEg7lzGKlQ"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/LU1_2E48vyQ"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection
