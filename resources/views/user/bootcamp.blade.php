@extends('user.layouts.app')
@push('css')
<link rel="stylesheet" href="{{asset('user/css/course.css')}}">
<link rel="stylesheet" href="{{asset('user/css/bootcamp.css')}}">
@endpush
@section('content')
  <!--page title area start-->
 <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center"
 data-background="assets/img/page-title/page-title.jpg"
 style="background-image: url('{{asset('user/images/courses/fullstackdevelopment.png')}}');">
 <div class="container">
     <div class="row">
         <div class="col-xl-8">
             <div class="page__title-wrapper">
                 <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                         <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                         <li class="breadcrumb-item"><a href="#">Bootcamp</a></li>
                         <li class="breadcrumb-item active" aria-current="page">{{$bootcamp->title}}</li>
                     </ol>
                 </nav>
                 <span class="page__title-pre">{{$bootcamp->tag}}</span>
                 <h5 class="page__title-3">{{$bootcamp->title}}</h5>
                 <div class="course-heading">
                     <!-- <h3>React JS Training</h3> -->
                     <h6>{{$bootcamp->sub_title}}</h6>
                 </div>
                 <div class="course-details">                    
                     {!! str_replace(['<ul>', '</ul>', '<li>', '</li>'], ['', '', '<p><i class="fa fa-check"></i>', '</i></p>'], $bootcamp->banner_description) !!}
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
                             
                             <p>Please fill the form to get latest brochure</p>
                         </div>
                         <form action="https://formspree.io/f/myyleorq" method="POST" id="dreamit-form"
                             class="sign-up-form">
                             <div class="form-group input-group">
                                 <input type="text" name="name" class="form-control" placeholder="Your Name"
                                     required="" style="margin-bottom: 10px;
                        padding: 10px;">
                             </div>
                             <div class="form-group input-group">
                                 <input type="email" name="email" class="form-control" placeholder="Your Email"
                                     required="" style="margin-bottom: 10px;
                        padding: 10px;">
                             </div>
                             <div class="form-group input-group">
                                 <input type="text" name="phone" class="form-control" placeholder="Phone Number"
                                     required="" style="margin-bottom: 10px;
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
                     <form method="POST" accept="{{route('store_bootcamp_details',['slug' => $bootcamp->slug])}}">@csrf
                        <input type="text" name="name" class="form-control" placeholder="Full Name">
                        <input type="email" name="email" class="form-control" placeholder="Email Address">
                        <input type="nymber" name="phone" class="form-control" placeholder="Phone">
                        <select class="form-select form-control"name="course_type" aria-label="Default select example">
                            <option selected="">Course Type</option>
                            @foreach ($bootcamps as $item)
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
<main>
   @php
   $item = json_decode($memo->data, true);
@endphp
  <!-- page title area start -->
  <section class="page__title-area pt-50">
     <div class="container">
        <div class="row">
           <div class="col">
              <div class="course__meta-2 d-sm-flex mb-30">
                 <div class="course__teacher-3 d-flex align-items-center mr-70 mb-30">
                    <div class="course__teacher-info-3">
                       <h5>Experts</h5>
                       <p><a href="#">{{ $item['expert'] }}</a></p>
                    </div>
                 </div>
                 <div class="course__update mr-80 mb-30">
                    <h5>Last Update:</h5>
                    <p>{{ \Carbon\Carbon::parse($memo['updated_at'])->format('F j, Y') }}
                  </p>
                 </div>
                 <div class="course__update mb-30">
                    <h5>Location:</h5>
                    <p>{{ $item['venue'] }}</p>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </section>
  <!-- page title area end -->

  <!-- event details area start -->
  <section class="event__area pb-30">
     <div class="container">
        <div class="row">
           <div class="col-xxl-8 col-xl-8 col-lg-8">
              <div class="events__wrapper">
                 <div class="events__thumb mb-35 w-img">
                    <img src="{{asset('uploads/bootcamps/'.$bootcamp->banner)}}" alt="">
                 </div>
                 <div class="events__details mb-35">
                    <h3>Bootcamp Description</h3>
                    {!!$bootcamp->description!!}
                 </div>
                 <div class="events__allow mb-40">
                    <h3>This event will allow participants to gain:</h3>                    
                      {!! str_replace('<li>', '<li><i class="fas fa-check-circle"></i>', $bootcamp->event_gain) !!}
                                    
                 </div>
                 <div class="events__tag">
                    <span><i class="fas fa-tag"></i></span>
                    <a href="#">Big data,  </a>
                    <a href="#">Data analysis,</a>
                    <a href="#">Data Science,</a>
                    <a href="#">AI,</a>
                    <a href="#">Front-End Development</a>
                 </div>
              </div>
           </div>
           <div class="col-xxl-4 col-xl-4 col-lg-4">
              <div class="events__sidebar pl-70">
                 <div class="events__sidebar-widget white-bg mb-50">
                    <div class="events__sidebar-shape">
                       <img class="events-sidebar-img-2" src="{{asset('user/img/events/event-shape-2.png')}}" alt="">
                       <img class="events-sidebar-img-3" src="{{asset('user/img/events/event-shape-3.png')}}" alt="">
                    </div>
                    <div class="events__info">
                       <div class="events__info-meta mb-25 d-flex align-items-center justify-content-between">
                          {{-- <div class="events__info-price">
                             <h5>Full Stack<span></span> </h5>
                             <!-- <h5 class="old-price">$142.00</h5> -->
                          </div> --}}
                          <div class="events__info-discount">
                             <span>Bootcamp Details</span>
                          </div>
                       </div>
                       <div class="events__info-content mb-35">
                          <ul>
                             <li class="d-flex align-items-center">
                                 <div class="events__info-icon">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                       <path class="st0" d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z"/>
                                       <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 "/>
                                    </svg>
                                 </div>
                                 <div class="events__info-item">
                                    <h5><span>Start: </span> {{ \Carbon\Carbon::parse($item['start'])->format('F j, Y') }}
                                    </h5>
                                 </div>
                              </li>
                             <li class="d-flex align-items-center">
                                <div class="events__info-icon">
                                   <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                      <path class="st0" d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z"/>
                                      <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 "/>
                                   </svg>
                                </div>
                                <div class="events__info-item">
                                   <h5><span>End: </span> {{ \Carbon\Carbon::parse($item['end'])->format('F j, Y') }}</h5>
                                </div>
                             </li>
                             <li class="d-flex align-items-center">
                                <div class="events__info-icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                     <circle cx="8" cy="8" r="7" fill="none" stroke="blue" stroke-width="1"/>
                                     <line x1="8" y1="8" x2="8" y2="4" stroke="blue" stroke-width="1"/>
                                     <line x1="8" y1="8" x2="12" y2="8" stroke="blue" stroke-width="1"/>
                                 </svg>   
                                </div>
                                <div class="events__info-item">
                                   <h5><span>Time:</span>{{ $item['time'] }}</h5>
                                </div>
                             </li>
                             <li class="d-flex align-items-center">
                                <div class="events__info-icon">
                                   <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                      <path class="st0" d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z"/>
                                      <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 "/>
                                   </svg>
                                </div>
                                <div class="events__info-item">
                                   <h5><span>Venue: </span> {{ $item['venue'] }}</h5>
                                </div>
                             </li>
                          </ul>
                       </div>
                       <div class="events__join-btn">
                          <a href="{{route('contact')}}" class="default-btn w-100">Enroll <i class="fas fa-arrow-right" style="color: #ffffff;"></i></a>
                       </div>
                    </div>
                 </div>
                 <div class="events__sidebar-widget white-bg mb-50">
                    <div class="events__sponsor">
                       <h3 class="events__sponsor-title">Sponsors</h3>
                       <div class="events__sponsor-thumb mb-35">
                          <img src="{{asset('uploads/sponsors/'.$sponsor->image)}}" alt="">
                       </div>
                       <div class="events__sponsor-info">
                          <h3>{{$sponsor->title}}</h3>
                          <h4><span>{{$sponsor->details}}</span></h4>
                       </div>
                    </div>
                 </div>
                 <div class="events__sidebar-widget white-bg mb-50">
                     <div class="events__bootcamp">
                        <h3 class="events__bootcamp-title">Bootcamps Categories</h3>
                        <div class="events__bootcamp-info">
                           <a href="#"><h3>Data Science Bootcamp</h3></a>
                           <a href="#"><h3>Web Development Bootcamp</h3></a>
                           <a href="#"><h3>Front End Developer Bootcamp</h3></a>
                           <a href="#"><h3>Apply AI Bootcamps</h3></a>
                           <a href="#"><h3>Full Stack Development Bootcamps</h3></a>
                        </div>
                     </div>
                  </div>
              </div>
           </div>
        </div>
     </div>
  </section>
  <!-- event details area end -->
</main>
@endsection