@extends('user.layouts.app')
@push('css')
    <!--contact-->
    <link rel="stylesheet" href="{{ asset('user/css/contact.css') }}">
@endpush
@section('content')
<!--page title area start-->
<section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="assets/img/page-title/page-title.jpg" style="background-image: url('{{asset('user/images/page-tittle/contact.png')}}');">
    <div class="container">
       <div class="row">
          <div class="col-xxl-12">
             <div class="page__title-wrapper mt-110">
                <h3 class="page__title">Interview Question</h3>                         
                <nav aria-label="breadcrumb">
                   <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Resources</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Interview Question Details</li>
                   </ol>
                </nav>
             </div>
          </div>
       </div>
    </div>
 </section>
<!--page title area ends-->
<div class="container">
    <div class="faq-details-warp ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="faq-details-big-warp">
                        <div class="content">
                            {!! $interviewCate->details!!}
                        </div>
                        <div class="question">
                            <h3>Frequently asked Questions in Interview</h3>
                            <div class="accordion-widget">
                                <div class="accordion" id="accordionExample">
                                    @foreach ($interviews as $item)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading{{ $item->id }}">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $item->id }}" aria-expanded="false" aria-controls="collapse{{ $item->id }}">
                                                {{ $item->question }}
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $item->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $item->id }}" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                {{ $item->answer }}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="faq-details-small-warp">
                        <div class="all-boxes course-type">
                            <h3>Interview Question Categories</h3>
                            <ul>
                                @foreach ($cate as $item)
                                <li>
                                    <a href="{{route('interview_detail',$item->slug)}}">
                                        <div class="icon"></div>
                                       {{$item->title}}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
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
                        <div class="gallerysection" style="margin-top: 30px;">
                            {{-- <div class="clients">
                                <div class="container clientcontainer">
                                    <h4 style="text-align: center;">Course Categories</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="owl-carousel owl-theme clients-carousel">
                                                <div class="item box"><a href="crash-course.html"><img alt="client logo" class="client-img" src="assets/images/courses/Big Data.png" style="
                                                    width: 100%; object-fit: cover;"><span class="view-more">View More</span></a></div>
                                                <div class="item box"><a href="crash-course.html"><img alt="client logo" class="client-img" src="assets/images/courses/data analysis.png" style="height: 300px;
                                                    width: 100%; object-fit: cover;"><span class="view-more">View More</span></a></div>
                                                <div class="item box"><a href="crash-course.html"><img alt="client logo" class="client-img" src="assets/images/courses/Business Intelligence.png" style="height: 300px;
                                                    width: 100%; object-fit: cover;"><span class="view-more">View More</span></a></div>
                                                <div class="item box"><a href="crash-course.html"><img alt="client logo" class="client-img" src="assets/images/courses/data science.jpg" style="height: 300px;
                                                    width: 100%; object-fit: cover;"><span class="view-more">View More</span></a></div>
                                                <div class="item box"><a href="crash-course.html"><img alt="client logo" class="client-img" src="assets/images/courses/database management.png" style="height: 300px;
                                                    width: 100%; object-fit: cover;"><span class="view-more">View More</span></a></div>
                                                <div class="item box"><a href="crash-course.html"><img alt="client logo" class="client-img" src="assets/images/blogs/php.jfif" style="height: 300px;
                                                    width: 100%; object-fit: cover;"><span class="view-more">View More</span></a></div>
                                                <div class="item box"><a href="crash-course.html"><img alt="client logo" class="client-img" src="assets/images/courses/react.jpg" style="height: 300px;
                                                    width: 100%; object-fit: cover;"><span class="view-more">View More</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js">
                            </script> 
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
                            </script> 
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
                            </script> 
                            <script>
                                   $('.clients-carousel').owlCarousel({
                               autoplay: true,
                               loop: true,
                               margin: 10,
                               dots: false,
                               slideTransition: 'linear',
                               autoplayTimeout: 4500,
                               autoplayHoverPause: true,
                               autoplaySpeed: 4500,
                               responsive: {
                                 0: {
                                   items: 1
                                 },
                                 500: {
                                   items: 2
                                 },
                                 600: {
                                   items: 2
                                 },
                                 800: {
                                   items: 2
                                 },
                                 1200: {
                                   items: 1
                                 }
                        
                               }
                             });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection