@extends('user.layouts.app')
@push('css')
    <!--contact-->
    <link rel="stylesheet" href="{{ asset('user/css/contact.css') }}">
@endpush
@section('content')
    <!--page title area start-->
    <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center"
        data-background="assets/img/page-title/page-title.jpg"
        style="background-image: url('{{asset('user/images/page-tittle/contact.png')}}');">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">Contact</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Help</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--page title area ends-->
    <div class="container">
        <section class="contact__area pt-100 pb-100">
            <div class="row">
                <div class="col-xxl-7 col-xl-7 col-lg-6">
                    <div class="contact__wrapper">
                        <div class="section__title-wrapper mb-40">
                            <h2 class="section__title">Get Intouch</h2>
                            <p>Have a question or just want to say hi? We'd love to hear from you.</p>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="contact__form">
                            <form method="POST" action="{{route('storeContact')}}" enctype="multipart/form-data">@csrf
                                <div class="row">
                                   <div class="col-xxl-6 col-xl-6 col-md-6">
                                      <div class="contact__form-input">
                                         <input type="text" placeholder="Your Name" name="name" required>
                                      </div>
                                   </div>
                                   <div class="col-xxl-6 col-xl-6 col-md-6">
                                      <div class="contact__form-input">
                                         <input type="email" placeholder="Your Email" name="email" required>
                                      </div>
                                   </div>
                                   <div class="col-xxl-6 col-xl-6 col-md-6">
                                    <div class="contact__form-input">
                                       <input type="number" placeholder="Phone Number" name="phone" required>
                                    </div>
                                 </div>
                                   <div class="col-xxl-6 col-xl-6 col-md-6">
                                      <div class="contact__form-input">
                                         <input type="text" placeholder="Subject" name="subject">
                                      </div>
                                   </div>
                                   <div class="col-xxl-12">
                                      <div class="contact__form-input">
                                         <textarea placeholder="Enter Your Message" name="content"></textarea>
                                      </div>
                                   </div>
                                   <div class="col-xxl-12">
                                      <div class="contact__form-agree  d-flex align-items-center mb-20">
                                         <input class="e-check-input" type="checkbox" name="is_checked" value="1" {{ 'is_checked' ? 'checked' : '' }} id="e-agree" required>
                                         <label class="e-check-label" for="e-agree">I agree to the<a href="#">Terms &amp; Conditions</a></label>
                                      </div>
                                   </div>
                                   <div class="col-xxl-12">
                                      <div class="contact__btn">
                                         <button type="submit" class="default-btn" style="border: none; margin-top: 20px;">Send your message</button>
                                      </div>
                                   </div>
                                </div>
                             </form>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 offset-xxl-1 col-xl-4 offset-xl-1 col-lg-5 offset-lg-1">
                    <div class="contact__info white-bg p-relative z-index-1">
                        <div class="contact__info-inner white-bg">
                            <ul>
                                <li>
                                    <div class="contact__info-item d-flex align-items-start mb-35">
                                        <div class="contact__info-icon mr-15">
                                            <svg class="map" viewBox="0 0 24 24">
                                                <path class="st0"
                                                    d="M21,10c0,7-9,13-9,13s-9-6-9-13c0-5,4-9,9-9S21,5,21,10z"></path>
                                                <circle class="st0" cx="12" cy="10" r="3"></circle>
                                            </svg>
                                        </div>
                                        <div class="contact__info-text">
                                            <h4>Kathmandu Office</h4>
                                            <p><a target="_blank"
                                                    href="https://www.google.com/maps/place/Dursikshya+Education+Network/@27.7098628,85.3123318,17z/data=!3m1!4b1!4m6!3m5!1s0x39eb193edf6bd2af:0x44ac26fce7c33d8c!8m2!3d27.7098628!4d85.3149067!16s%2Fg%2F11nr_qbw0_?entry=ttu">Above
                                                    Mandala Book Point, Kanti Path, Kathmandu 44600</a></p>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact__info-item d-flex align-items-start mb-35">
                                        <div class="contact__info-icon mr-15">
                                            <svg class="mail" viewBox="0 0 24 24">
                                                <path class="st0"
                                                    d="M4,4h16c1.1,0,2,0.9,2,2v12c0,1.1-0.9,2-2,2H4c-1.1,0-2-0.9-2-2V6C2,4.9,2.9,4,4,4z">
                                                </path>
                                                <polyline class="st0" points="22,6 12,13 2,6 "></polyline>
                                            </svg>
                                        </div>
                                        <div class="contact__info-text">
                                            <h4>Email us directly</h4>
                                            <p><a href="mailto:info@durshikshya.com"> info@durshikshya.com </a></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact__info-item d-flex align-items-start mb-35">
                                        <div class="contact__info-icon mr-15">
                                            <svg class="call" viewBox="0 0 24 24">
                                                <path class="st0"
                                                    d="M22,16.9v3c0,1.1-0.9,2-2,2c-0.1,0-0.1,0-0.2,0c-3.1-0.3-6-1.4-8.6-3.1c-2.4-1.5-4.5-3.6-6-6  c-1.7-2.6-2.7-5.6-3.1-8.7C2,3.1,2.8,2.1,3.9,2C4,2,4.1,2,4.1,2h3c1,0,1.9,0.7,2,1.7c0.1,1,0.4,1.9,0.7,2.8c0.3,0.7,0.1,1.6-0.4,2.1  L8.1,9.9c1.4,2.5,3.5,4.6,6,6l1.3-1.3c0.6-0.5,1.4-0.7,2.1-0.4c0.9,0.3,1.8,0.6,2.8,0.7C21.3,15,22,15.9,22,16.9z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="contact__info-text">
                                            <h4>Phone</h4>
                                            <p><a href="tel:+977-01-5358003">Hotline: +977-01-5358003</a></p>
                                            <p><a href="tel:+977 9801090638">Whatsapp: +977 9801090638</a></p>
                                            <p><a href="tel:+977 9801090638">Viber: +977 9801090638</a></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="contact__social pl-30">
                                <h4>Follow Us</h4>
                                <ul>
                                    <li><a href="#" class="fb"><i class="fab fa-facebook-f"
                                                style="color: #ffffff;"></i></a></li>
                                    <li><a href="#" class="in"><i class="fab fa-instagram"
                                                style="color: #ffffff;"></i></a></li>
                                    <li><a href="#" class="pin"><i class="fab fa-pinterest-p"
                                                style="color: #ffffff;"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
