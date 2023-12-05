<!-- Both Warp Start -->
<div class="both-warp">
    <div class="footer-warp pt-50 pb-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-widget">
                        <div class="logo">
                            <a href="{{route('home')}}">
                                <img src="{{ asset('uploads/profile/'.$profile->logo_footer)}}" alt="image">
                            </a>
                        </div>
                        <div class="first-tag">
                            {!!$profile->footer_details!!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="footer-widget">
                                <h3>Our Courses</h3>
                                <ul class="explore-link">
                                    @foreach ($foo_courses as $course)
                                    <li>
                                        <a href="{{ route('course_detail', ['slug' => $course->slug]) }}"
                                            class="nav-link">{{ $course->title }}</a>
                                    </li>
                                @endforeach
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="footer-widget">
                                <h3>Explore</h3>
                                <ul class="explore-link">
                                    <li>
                                        <a href="interview-question.html">Interview Question</a>
                                    </li>
                                    <li>
                                        <a href="fullstack-bootcamp.html">Bootcamps</a>
                                    </li>
                                    <li>
                                        <a href="{{route('grid_blog')}}">Blog</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="footer-widget">
                                <h3>Contact Us</h3>
                                <ul class="footer-contact">
                                    <li>
                                        <i class="ri-mail-line"></i>
                                        <p>{{$profile->email}}</p>
                                    </li>
                                    <li>
                                        <i class="ri-map-pin-line"></i>
                                        <p>{{$profile->address}}</p>
                                    </li>
                                    <li>
                                        <i class="ri-time-line"></i>
                                        <p>{{$profile->open}}</p>
                                    </li>
                                    <li>
                                        <img src="{{asset('user/images/svgs/phone2.svg')}}" alt="">
                                        <p>+977-{{$profile->phone}}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right-warp">
        <div class="container style1">
            <div class="inner-copy-warp">
                <p>© 2023 <span>{{$profile->name}}</span> - All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>
<!-- Both Warp End -->