@extends('user.layouts.app')
@push('css')
<style>
    ul{
        list-style-type: none;
    }
</style>
    
@endpush
@section('content')
@include('user.includes.home_slider')
    <!--partners start-->
    <div class="container partner">
        <h4>Partnering with world's leading Universities and Companies</h4>
        <div id="owl-demo" class="owl-carousel owl-theme">
            @foreach ($associates as $item)
                @if ($item->is_associate !==1)
                <div class="item"><img src="{{ asset('uploads/university/'. $item->image) }}" alt="Owl Image"></div>
                @endif
            @endforeach            
        </div>
    </div>
    <!--partners start-->

    <!--explore courses start-->
    <div class="explore-oc">
        <div class="container">
            <div class="heading-oc">
                <h2>Explore our <span>Courses</span></h2>
                <p class="text-align-justify">Embark on a journey of knowledge and growth with our diverse range of
                    meticulously crafted courses. Whether you're seeking to enhance your skills, broaden your
                    horizons,
                    or dive into a new field altogether, our curated selection of courses offers something for
                    everyone.
                </p>
            </div>
            <div class="academic-section">
                <div class="line-heading">
                    <h3>Academic Programs <span><a href="#" hidden>View all Courses</a></span></h3>
                </div>
            </div>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all"
                        type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-demand-tab" data-bs-toggle="pill" data-bs-target="#pills-demand"
                        type="button" role="tab" aria-controls="pills-demand" aria-selected="false">In-Demand
                        Courses</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-bootcamp-tab" data-bs-toggle="pill" data-bs-target="#pills-bootcamp"
                        type="button" role="tab" aria-controls="pills-bootcamp"
                        aria-selected="false">Bootcamps</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-crashcourse-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-crashcourse" type="button" role="tab" aria-controls="pills-crashcourse"
                        aria-selected="false">Crash Courses</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-diploma-tab" data-bs-toggle="pill" data-bs-target="#pills-diploma"
                        type="button" role="tab" aria-controls="pills-diploma" aria-selected="false">Diploma</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                    <div class="container courses">
                        <div id="owl-course" class="owl-carousel owl-theme">
                            
                            <div class="courseborder">
                                <img src="assets/images/courses/tcourse1.jpg" class="img-responsive" alt=""
                                    width="100%" style="height: 150px;">
                                <div class="info">
                                    <div>
                                        <h5>Next Batch</h5>
                                        <div class="text-center icon" style="color: #fff">
                                            Start: 20 April 2023

                                            <ul class="text-left">
                                                <li>
                                                    <div>Introducton to Big Data</div>
                                                </li>
                                                <li>
                                                    <div>Future Trends in Big Data</div>
                                                </li>
                                                <!-- <li><div>Object Storage Options</div></li> -->
                                            </ul>

                                            <a href="#" style="text-decoration: none;color: #000"><button
                                                    class="btn">View Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tcourse-details">
                                    <h5 style="text-align: center;font-size: 18px">AI</h5>

                                    <i>Reviews</i>
                                    <div style="display: flex;align-items:center">
                                        <div class="my-rating" style="display: inline;margin-right: 10px">
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-empty-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                        </div>
                                        <span style="font-size: 15px">4 &nbsp;(1200)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="courseborder">
                                <img src="assets/images/courses/Business Intelligence.png" class="img-responsive"
                                    alt="" width="100%" style="height: 150px;">
                                <div class="info">
                                    <div>
                                        <h5>Next Batch</h5>
                                        <div class="text-center icon" style="color: #fff">
                                            Start: 20 April 2023

                                            <ul class="text-left">
                                                <li>
                                                    <div>Introducton to BI</div>
                                                </li>
                                                <li>
                                                    <div>Importance and Benefits of BI</div>
                                                </li>
                                                <!-- <li><div>Object Storage Options</div></li> -->
                                            </ul>

                                            <a href="#" style="text-decoration: none;color: #000"><button
                                                    class="btn">View Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tcourse-details">
                                    <h5 style="text-align: center;font-size: 18px">Business Intelligence</h5>

                                    <i>Reviews</i>
                                    <div style="display: flex;align-items:center">
                                        <div class="my-rating" style="display: inline;margin-right: 10px">
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-empty-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                        </div>
                                        <span style="font-size: 15px">4 &nbsp;(1200)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="courseborder">
                                <img src="assets/images/courses/data analysis.png" class="img-responsive" alt=""
                                    width="100%" style="height: 150px;">
                                <div class="info">
                                    <div>
                                        <h5>Next Batch</h5>
                                        <div class="text-center icon" style="color: #fff">
                                            Start: 20 April 2023

                                            <ul class="text-left">
                                                <li>
                                                    <div>Understanding Data Analysis</div>
                                                </li>
                                                <li>
                                                    <div>Data Analysis Workflow</div>
                                                </li>
                                                <!-- <li><div>Object Storage Options</div></li> -->
                                            </ul>

                                            <a href="#" style="text-decoration: none;color: #000"><button
                                                    class="btn">View Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tcourse-details">
                                    <h5 style="text-align: center;font-size: 18px">Data analysis</h5>

                                    <i>Reviews</i>
                                    <div style="display: flex;align-items:center">
                                        <div class="my-rating" style="display: inline;margin-right: 10px">
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-empty-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                        </div>
                                        <span style="font-size: 15px">4 &nbsp;(1200)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="courseborder">
                                <img src="assets/images/courses/data science.png" class="img-responsive" alt=""
                                    width="100%" style="height: 150px;">
                                <div class="info">
                                    <div>
                                        <h5>Next Batch</h5>
                                        <div class="text-center icon" style="color: #fff">
                                            Start: 20 April 2023

                                            <ul class="text-left">
                                                <li>
                                                    <div>Defining Data Science
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>Role of Data Scientists</div>
                                                </li>
                                                <!-- <li><div>Object Storage Options</div></li> -->
                                            </ul>

                                            <a href="#" style="text-decoration: none;color: #000"><button
                                                    class="btn">View Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tcourse-details">
                                    <h5 style="text-align: center;font-size: 18px">Data Science</h5>

                                    <i>Reviews</i>
                                    <div style="display: flex;align-items:center">
                                        <div class="my-rating" style="display: inline;margin-right: 10px">
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-empty-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                        </div>
                                        <span style="font-size: 15px">4 &nbsp;(1200)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="courseborder">
                                <img src="assets/images/courses/database management.png" class="img-responsive"
                                    alt="" width="100%" style="height: 150px;">
                                <div class="info">
                                    <div>
                                        <h5>Next Batch</h5>
                                        <div class="text-center icon" style="color: #fff">
                                            Start: 20 April 2023

                                            <ul class="text-left">
                                                <li>
                                                    <div>Defining DBMS
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>DBMS Overview</div>
                                                </li>
                                                <!-- <li><div>Object Storage Options</div></li> -->
                                            </ul>

                                            <a href="#" style="text-decoration: none;color: #000"><button
                                                    class="btn">View Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tcourse-details">
                                    <h5 style="text-align: center;font-size: 18px">Database management</h5>

                                    <i>Reviews</i>
                                    <div style="display: flex;align-items:center">
                                        <div class="my-rating" style="display: inline;margin-right: 10px">
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-empty-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                        </div>
                                        <span style="font-size: 15px">4 &nbsp;(1200)</span>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-demand" role="tabpanel" aria-labelledby="pills-demand-tab">
                    <div class="container courses">
                        <div id="owl-indemand" class="owl-carousel owl-theme">

                            <div class="courseborder">
                                <img src="assets/images/courses/Big Data.png" class="img-responsive" alt=""
                                    width="100%" style="height: 150px;">
                                <div class="info">
                                    <div>
                                        <h5>Next Batch</h5>
                                        <div class="text-center icon" style="color: #fff">
                                            Start: 20 April 2023

                                            <ul class="text-left">
                                                <li>
                                                    <div>Introducton to Big Data</div>
                                                </li>
                                                <li>
                                                    <div>Future Trends in Big Data</div>
                                                </li>
                                                <!-- <li><div>Object Storage Options</div></li> -->
                                            </ul>

                                            <a href="#" style="text-decoration: none;color: #000"><button
                                                    class="btn">View Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tcourse-details">
                                    <h5 style="text-align: center;font-size: 18px">Big Data</h5>

                                    <i>Reviews</i>
                                    <div style="display: flex;align-items:center">
                                        <div class="my-rating" style="display: inline;margin-right: 10px">
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-empty-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                        </div>
                                        <span style="font-size: 15px">4 &nbsp;(1200)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="courseborder">
                                <img src="assets/images/courses/Business Intelligence.png" class="img-responsive"
                                    alt="" width="100%" style="height: 150px;">
                                <div class="info">
                                    <div>
                                        <h5>Next Batch</h5>
                                        <div class="text-center icon" style="color: #fff">
                                            Start: 20 April 2023

                                            <ul class="text-left">
                                                <li>
                                                    <div>Introducton to BI</div>
                                                </li>
                                                <li>
                                                    <div>Importance and Benefits of BI</div>
                                                </li>
                                                <!-- <li><div>Object Storage Options</div></li> -->
                                            </ul>

                                            <a href="#" style="text-decoration: none;color: #000"><button
                                                    class="btn">View Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tcourse-details">
                                    <h5 style="text-align: center;font-size: 18px">Business Intelligence</h5>

                                    <i>Reviews</i>
                                    <div style="display: flex;align-items:center">
                                        <div class="my-rating" style="display: inline;margin-right: 10px">
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-empty-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                        </div>
                                        <span style="font-size: 15px">4 &nbsp;(1200)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="courseborder">
                                <img src="assets/images/courses/data analysis.png" class="img-responsive"
                                    alt="" width="100%" style="height: 150px;">
                                <div class="info">
                                    <div>
                                        <h5>Next Batch</h5>
                                        <div class="text-center icon" style="color: #fff">
                                            Start: 20 April 2023

                                            <ul class="text-left">
                                                <li>
                                                    <div>Understanding Data Analysis</div>
                                                </li>
                                                <li>
                                                    <div>Data Analysis Workflow</div>
                                                </li>
                                                <!-- <li><div>Object Storage Options</div></li> -->
                                            </ul>

                                            <a href="#" style="text-decoration: none;color: #000"><button
                                                    class="btn">View Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tcourse-details">
                                    <h5 style="text-align: center;font-size: 18px">Data analysis</h5>

                                    <i>Reviews</i>
                                    <div style="display: flex;align-items:center">
                                        <div class="my-rating" style="display: inline;margin-right: 10px">
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-empty-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                        </div>
                                        <span style="font-size: 15px">4 &nbsp;(1200)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="courseborder">
                                <img src="assets/images/courses/data science.png" class="img-responsive"
                                    alt="" width="100%" style="height: 150px;">
                                <div class="info">
                                    <div>
                                        <h5>Next Batch</h5>
                                        <div class="text-center icon" style="color: #fff">
                                            Start: 20 April 2023

                                            <ul class="text-left">
                                                <li>
                                                    <div>Defining Data Science
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>Role of Data Scientists</div>
                                                </li>
                                                <!-- <li><div>Object Storage Options</div></li> -->
                                            </ul>

                                            <a href="#" style="text-decoration: none;color: #000"><button
                                                    class="btn">View Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tcourse-details">
                                    <h5 style="text-align: center;font-size: 18px">Data Science</h5>

                                    <i>Reviews</i>
                                    <div style="display: flex;align-items:center">
                                        <div class="my-rating" style="display: inline;margin-right: 10px">
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-empty-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                        </div>
                                        <span style="font-size: 15px">4 &nbsp;(1200)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="courseborder">
                                <img src="assets/images/courses/database management.png" class="img-responsive"
                                    alt="" width="100%" style="height: 150px;">
                                <div class="info">
                                    <div>
                                        <h5>Next Batch</h5>
                                        <div class="text-center icon" style="color: #fff">
                                            Start: 20 April 2023

                                            <ul class="text-left">
                                                <li>
                                                    <div>Defining DBMS
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>DBMS Overview</div>
                                                </li>
                                                <!-- <li><div>Object Storage Options</div></li> -->
                                            </ul>

                                            <a href="#" style="text-decoration: none;color: #000"><button
                                                    class="btn">View Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tcourse-details">
                                    <h5 style="text-align: center;font-size: 18px">Database management</h5>

                                    <i>Reviews</i>
                                    <div style="display: flex;align-items:center">
                                        <div class="my-rating" style="display: inline;margin-right: 10px">
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-empty-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                        </div>
                                        <span style="font-size: 15px">4 &nbsp;(1200)</span>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="item">
                                    <div class="course-card">
                                        <div class="logo-rate">
                                            <div class="uni-logo">
                                                <img src="assets/images/courses/Big Data.png" alt="big data">
                                            </div>
                                            <div class="rate">
                                                <p>Featured</p>
                                                <div class="star-review">
                                                    <div class="star-images">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span>Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <h4>Big data is used in a wide range of industries and applications.</h4>
                                        </div>
                                        <div class="course-start">
                                            <p> Course Start: 20 April 2023</p>
                                        </div>
                                        <div class="flexible-learn">
                                            <div class="flexible-durtion">
                                                <p>Duration:</p>
                                                <span>4 Months</span>
                                            </div>
                                            <div class="learn">
                                                <a href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="course-card">
                                        <div class="logo-rate">
                                            <div class="uni-logo">
                                                <img src="assets/images/courses/Business Intelligence.png" alt="big data">
                                            </div>
                                            <div class="rate">
                                                <p>Featured</p>
                                                <div class="star-review">
                                                    <div class="star-images">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span>Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <h4>BI typically involves several stages, including data collection.</h4>
                                        </div>
                                        <div class="course-start">
                                            <p> Course Start: 20 April 2023</p>
                                        </div>
                                        <div class="flexible-learn">
                                            <div class="flexible-durtion">
                                                <p>Duration:</p>
                                                <span>4 Months</span>
                                            </div>
                                            <div class="learn">
                                                <a href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="course-card">
                                        <div class="logo-rate">
                                            <div class="uni-logo">
                                                <img src="assets/images/courses/data analysis.png" alt="data analysis">
                                            </div>
                                            <div class="rate">
                                                <p>Featured</p>
                                                <div class="star-review">
                                                    <div class="star-images">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span>Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <h4>Data analytics involves several stages, including data collection.</h4>
                                        </div>
                                        <div class="course-start">
                                            <p> Course Start: 20 April 2023</p>
                                        </div>
                                        <div class="flexible-learn">
                                            <div class="flexible-durtion">
                                                <p>Duration:</p>
                                                <span>4 Months</span>
                                            </div>
                                            <div class="learn">
                                                <a href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="course-card">
                                        <div class="logo-rate">
                                            <div class="uni-logo">
                                                <img src="assets/images/courses/data science.png" alt="data science">
                                            </div>
                                            <div class="rate">
                                                <p>Featured</p>
                                                <div class="star-review">
                                                    <div class="star-images">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span>Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <h4>Data science typically involves several stages, including data
                                                collection.
                                            </h4>
                                        </div>
                                        <div class="course-start">
                                            <p> Course Start: 20 April 2023</p>
                                        </div>
                                        <div class="flexible-learn">
                                            <div class="flexible-durtion">
                                                <p>Duration:</p>
                                                <span>4 Months</span>
                                            </div>
                                            <div class="learn">
                                                <a href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="course-card">
                                        <div class="logo-rate">
                                            <div class="uni-logo">
                                                <img src="assets/images/courses/database management.png"
                                                    alt="data management">
                                            </div>
                                            <div class="rate">
                                                <p>Featured</p>
                                                <div class="star-review">
                                                    <div class="star-images">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span>Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <h4>Data management typically involves several stages, including data
                                                collection.</h4>
                                        </div>
                                        <div class="course-start">
                                            <p> Course Start: 20 April 2023</p>
                                        </div>
                                        <div class="flexible-learn">
                                            <div class="flexible-durtion">
                                                <p>Duration:</p>
                                                <span>4 Months</span>
                                            </div>
                                            <div class="learn">
                                                <a href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="course-card">
                                        <div class="logo-rate">
                                            <div class="uni-logo">
                                                <img src="assets/images/courses/software development.png"
                                                    alt="software development">
                                            </div>
                                            <div class="rate">
                                                <p>Featured</p>
                                                <div class="star-review">
                                                    <div class="star-images">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span>Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <h4>Software development is used in a wide range of industries and
                                                applications.
                                            </h4>
                                        </div>
                                        <div class="course-start">
                                            <p> Course Start: 20 April 2023</p>
                                        </div>
                                        <div class="flexible-learn">
                                            <div class="flexible-durtion">
                                                <p>Duration:</p>
                                                <span>4 Months</span>
                                            </div>
                                            <div class="learn">
                                                <a href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-bootcamp" role="tabpanel" aria-labelledby="pills-bootcamp-tab">
                    <div class="container courses">
                        <div id="owl-bootcamp" class="owl-carousel owl-theme">

                            <div class="courseborder">
                                <img src="assets/images/courses/Big Data.png" class="img-responsive" alt=""
                                    width="100%" style="height: 150px;">
                                <div class="info">
                                    <div>
                                        <h5>Next Batch</h5>
                                        <div class="text-center icon" style="color: #fff">
                                            Start: 20 April 2023

                                            <ul class="text-left">
                                                <li>
                                                    <div>Introducton to Big Data</div>
                                                </li>
                                                <li>
                                                    <div>Future Trends in Big Data</div>
                                                </li>
                                                <!-- <li><div>Object Storage Options</div></li> -->
                                            </ul>

                                            <a href="#" style="text-decoration: none;color: #000"><button
                                                    class="btn">View Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tcourse-details">
                                    <h5 style="text-align: center;font-size: 18px">Big Data</h5>

                                    <i>Reviews</i>
                                    <div style="display: flex;align-items:center">
                                        <div class="my-rating" style="display: inline;margin-right: 10px">
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-empty-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                        </div>
                                        <span style="font-size: 15px">4 &nbsp;(1200)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="courseborder">
                                <img src="assets/images/courses/Business Intelligence.png" class="img-responsive"
                                    alt="" width="100%" style="height: 150px;">
                                <div class="info">
                                    <div>
                                        <h5>Next Batch</h5>
                                        <div class="text-center icon" style="color: #fff">
                                            Start: 20 April 2023

                                            <ul class="text-left">
                                                <li>
                                                    <div>Introducton to BI</div>
                                                </li>
                                                <li>
                                                    <div>Importance and Benefits of BI</div>
                                                </li>
                                                <!-- <li><div>Object Storage Options</div></li> -->
                                            </ul>

                                            <a href="#" style="text-decoration: none;color: #000"><button
                                                    class="btn">View Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tcourse-details">
                                    <h5 style="text-align: center;font-size: 18px">Business Intelligence</h5>

                                    <i>Reviews</i>
                                    <div style="display: flex;align-items:center">
                                        <div class="my-rating" style="display: inline;margin-right: 10px">
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-empty-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                        </div>
                                        <span style="font-size: 15px">4 &nbsp;(1200)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="courseborder">
                                <img src="assets/images/courses/data analysis.png" class="img-responsive"
                                    alt="" width="100%" style="height: 150px;">
                                <div class="info">
                                    <div>
                                        <h5>Next Batch</h5>
                                        <div class="text-center icon" style="color: #fff">
                                            Start: 20 April 2023

                                            <ul class="text-left">
                                                <li>
                                                    <div>Understanding Data Analysis</div>
                                                </li>
                                                <li>
                                                    <div>Data Analysis Workflow</div>
                                                </li>
                                                <!-- <li><div>Object Storage Options</div></li> -->
                                            </ul>

                                            <a href="#" style="text-decoration: none;color: #000"><button
                                                    class="btn">View Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tcourse-details">
                                    <h5 style="text-align: center;font-size: 18px">Data analysis</h5>

                                    <i>Reviews</i>
                                    <div style="display: flex;align-items:center">
                                        <div class="my-rating" style="display: inline;margin-right: 10px">
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-empty-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                        </div>
                                        <span style="font-size: 15px">4 &nbsp;(1200)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="courseborder">
                                <img src="assets/images/courses/data science.png" class="img-responsive"
                                    alt="" width="100%" style="height: 150px;">
                                <div class="info">
                                    <div>
                                        <h5>Next Batch</h5>
                                        <div class="text-center icon" style="color: #fff">
                                            Start: 20 April 2023

                                            <ul class="text-left">
                                                <li>
                                                    <div>Defining Data Science
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>Role of Data Scientists</div>
                                                </li>
                                                <!-- <li><div>Object Storage Options</div></li> -->
                                            </ul>

                                            <a href="#" style="text-decoration: none;color: #000"><button
                                                    class="btn">View Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tcourse-details">
                                    <h5 style="text-align: center;font-size: 18px">Data Science</h5>

                                    <i>Reviews</i>
                                    <div style="display: flex;align-items:center">
                                        <div class="my-rating" style="display: inline;margin-right: 10px">
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-empty-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                        </div>
                                        <span style="font-size: 15px">4 &nbsp;(1200)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="courseborder">
                                <img src="assets/images/courses/database management.png" class="img-responsive"
                                    alt="" width="100%" style="height: 150px;">
                                <div class="info">
                                    <div>
                                        <h5>Next Batch</h5>
                                        <div class="text-center icon" style="color: #fff">
                                            Start: 20 April 2023

                                            <ul class="text-left">
                                                <li>
                                                    <div>Defining DBMS
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>DBMS Overview</div>
                                                </li>
                                                <!-- <li><div>Object Storage Options</div></li> -->
                                            </ul>

                                            <a href="#" style="text-decoration: none;color: #000"><button
                                                    class="btn">View Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tcourse-details">
                                    <h5 style="text-align: center;font-size: 18px">Database management</h5>

                                    <i>Reviews</i>
                                    <div style="display: flex;align-items:center">
                                        <div class="my-rating" style="display: inline;margin-right: 10px">
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-empty-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                        </div>
                                        <span style="font-size: 15px">4 &nbsp;(1200)</span>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="item">
                                    <div class="course-card">
                                        <div class="logo-rate">
                                            <div class="uni-logo">
                                                <img src="assets/images/courses/Big Data.png" alt="big data">
                                            </div>
                                            <div class="rate">
                                                <p>Featured</p>
                                                <div class="star-review">
                                                    <div class="star-images">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span>Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <h4>Big data is used in a wide range of industries and applications.</h4>
                                        </div>
                                        <div class="course-start">
                                            <p> Course Start: 20 April 2023</p>
                                        </div>
                                        <div class="flexible-learn">
                                            <div class="flexible-durtion">
                                                <p>Duration:</p>
                                                <span>4 Months</span>
                                            </div>
                                            <div class="learn">
                                                <a href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="course-card">
                                        <div class="logo-rate">
                                            <div class="uni-logo">
                                                <img src="assets/images/courses/Business Intelligence.png" alt="big data">
                                            </div>
                                            <div class="rate">
                                                <p>Featured</p>
                                                <div class="star-review">
                                                    <div class="star-images">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span>Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <h4>BI typically involves several stages, including data collection.</h4>
                                        </div>
                                        <div class="course-start">
                                            <p> Course Start: 20 April 2023</p>
                                        </div>
                                        <div class="flexible-learn">
                                            <div class="flexible-durtion">
                                                <p>Duration:</p>
                                                <span>4 Months</span>
                                            </div>
                                            <div class="learn">
                                                <a href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="course-card">
                                        <div class="logo-rate">
                                            <div class="uni-logo">
                                                <img src="assets/images/courses/data analysis.png" alt="data analysis">
                                            </div>
                                            <div class="rate">
                                                <p>Featured</p>
                                                <div class="star-review">
                                                    <div class="star-images">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span>Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <h4>Data analytics involves several stages, including data collection.</h4>
                                        </div>
                                        <div class="course-start">
                                            <p> Course Start: 20 April 2023</p>
                                        </div>
                                        <div class="flexible-learn">
                                            <div class="flexible-durtion">
                                                <p>Duration:</p>
                                                <span>4 Months</span>
                                            </div>
                                            <div class="learn">
                                                <a href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="course-card">
                                        <div class="logo-rate">
                                            <div class="uni-logo">
                                                <img src="assets/images/courses/data science.png" alt="data science">
                                            </div>
                                            <div class="rate">
                                                <p>Featured</p>
                                                <div class="star-review">
                                                    <div class="star-images">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span>Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <h4>Data science typically involves several stages, including data
                                                collection.
                                            </h4>
                                        </div>
                                        <div class="course-start">
                                            <p> Course Start: 20 April 2023</p>
                                        </div>
                                        <div class="flexible-learn">
                                            <div class="flexible-durtion">
                                                <p>Duration:</p>
                                                <span>4 Months</span>
                                            </div>
                                            <div class="learn">
                                                <a href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="course-card">
                                        <div class="logo-rate">
                                            <div class="uni-logo">
                                                <img src="assets/images/courses/database management.png"
                                                    alt="data management">
                                            </div>
                                            <div class="rate">
                                                <p>Featured</p>
                                                <div class="star-review">
                                                    <div class="star-images">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span>Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <h4>Data management typically involves several stages, including data
                                                collection.</h4>
                                        </div>
                                        <div class="course-start">
                                            <p> Course Start: 20 April 2023</p>
                                        </div>
                                        <div class="flexible-learn">
                                            <div class="flexible-durtion">
                                                <p>Duration:</p>
                                                <span>4 Months</span>
                                            </div>
                                            <div class="learn">
                                                <a href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="course-card">
                                        <div class="logo-rate">
                                            <div class="uni-logo">
                                                <img src="assets/images/courses/software development.png"
                                                    alt="software development">
                                            </div>
                                            <div class="rate">
                                                <p>Featured</p>
                                                <div class="star-review">
                                                    <div class="star-images">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span>Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <h4>Software development is used in a wide range of industries and
                                                applications.
                                            </h4>
                                        </div>
                                        <div class="course-start">
                                            <p> Course Start: 20 April 2023</p>
                                        </div>
                                        <div class="flexible-learn">
                                            <div class="flexible-durtion">
                                                <p>Duration:</p>
                                                <span>4 Months</span>
                                            </div>
                                            <div class="learn">
                                                <a href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-crashcourse" role="tabpanel"
                    aria-labelledby="pills-crashcourse-tab">
                    <div class="container courses">
                        <div id="owl-crashcourse" class="owl-carousel owl-theme">

                            <div class="courseborder">
                                <img src="assets/images/courses/Big Data.png" class="img-responsive" alt=""
                                    width="100%" style="height: 150px;">
                                <div class="info">
                                    <div>
                                        <h5>Next Batch</h5>
                                        <div class="text-center icon" style="color: #fff">
                                            Start: 20 April 2023

                                            <ul class="text-left">
                                                <li>
                                                    <div>Introducton to Big Data</div>
                                                </li>
                                                <li>
                                                    <div>Future Trends in Big Data</div>
                                                </li>
                                                <!-- <li><div>Object Storage Options</div></li> -->
                                            </ul>

                                            <a href="#" style="text-decoration: none;color: #000"><button
                                                    class="btn">View Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tcourse-details">
                                    <h5 style="text-align: center;font-size: 18px">Big Data</h5>

                                    <i>Reviews</i>
                                    <div style="display: flex;align-items:center">
                                        <div class="my-rating" style="display: inline;margin-right: 10px">
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-empty-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                        </div>
                                        <span style="font-size: 15px">4 &nbsp;(1200)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="courseborder">
                                <img src="assets/images/courses/Business Intelligence.png" class="img-responsive"
                                    alt="" width="100%" style="height: 150px;">
                                <div class="info">
                                    <div>
                                        <h5>Next Batch</h5>
                                        <div class="text-center icon" style="color: #fff">
                                            Start: 20 April 2023

                                            <ul class="text-left">
                                                <li>
                                                    <div>Introducton to BI</div>
                                                </li>
                                                <li>
                                                    <div>Importance and Benefits of BI</div>
                                                </li>
                                                <!-- <li><div>Object Storage Options</div></li> -->
                                            </ul>

                                            <a href="#" style="text-decoration: none;color: #000"><button
                                                    class="btn">View Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tcourse-details">
                                    <h5 style="text-align: center;font-size: 18px">Business Intelligence</h5>

                                    <i>Reviews</i>
                                    <div style="display: flex;align-items:center">
                                        <div class="my-rating" style="display: inline;margin-right: 10px">
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-empty-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                        </div>
                                        <span style="font-size: 15px">4 &nbsp;(1200)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="courseborder">
                                <img src="assets/images/courses/data analysis.png" class="img-responsive"
                                    alt="" width="100%" style="height: 150px;">
                                <div class="info">
                                    <div>
                                        <h5>Next Batch</h5>
                                        <div class="text-center icon" style="color: #fff">
                                            Start: 20 April 2023

                                            <ul class="text-left">
                                                <li>
                                                    <div>Understanding Data Analysis</div>
                                                </li>
                                                <li>
                                                    <div>Data Analysis Workflow</div>
                                                </li>
                                                <!-- <li><div>Object Storage Options</div></li> -->
                                            </ul>

                                            <a href="#" style="text-decoration: none;color: #000"><button
                                                    class="btn">View Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tcourse-details">
                                    <h5 style="text-align: center;font-size: 18px">Data analysis</h5>

                                    <i>Reviews</i>
                                    <div style="display: flex;align-items:center">
                                        <div class="my-rating" style="display: inline;margin-right: 10px">
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-empty-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                        </div>
                                        <span style="font-size: 15px">4 &nbsp;(1200)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="courseborder">
                                <img src="assets/images/courses/data science.png" class="img-responsive"
                                    alt="" width="100%" style="height: 150px;">
                                <div class="info">
                                    <div>
                                        <h5>Next Batch</h5>
                                        <div class="text-center icon" style="color: #fff">
                                            Start: 20 April 2023

                                            <ul class="text-left">
                                                <li>
                                                    <div>Defining Data Science
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>Role of Data Scientists</div>
                                                </li>
                                                <!-- <li><div>Object Storage Options</div></li> -->
                                            </ul>

                                            <a href="#" style="text-decoration: none;color: #000"><button
                                                    class="btn">View Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tcourse-details">
                                    <h5 style="text-align: center;font-size: 18px">Data Science</h5>

                                    <i>Reviews</i>
                                    <div style="display: flex;align-items:center">
                                        <div class="my-rating" style="display: inline;margin-right: 10px">
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-empty-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                        </div>
                                        <span style="font-size: 15px">4 &nbsp;(1200)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="courseborder">
                                <img src="assets/images/courses/database management.png" class="img-responsive"
                                    alt="" width="100%" style="height: 150px;">
                                <div class="info">
                                    <div>
                                        <h5>Next Batch</h5>
                                        <div class="text-center icon" style="color: #fff">
                                            Start: 20 April 2023

                                            <ul class="text-left">
                                                <li>
                                                    <div>Defining DBMS
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>DBMS Overview</div>
                                                </li>
                                                <!-- <li><div>Object Storage Options</div></li> -->
                                            </ul>

                                            <a href="#" style="text-decoration: none;color: #000"><button
                                                    class="btn">View Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tcourse-details">
                                    <h5 style="text-align: center;font-size: 18px">Database management</h5>

                                    <i>Reviews</i>
                                    <div style="display: flex;align-items:center">
                                        <div class="my-rating" style="display: inline;margin-right: 10px">
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-empty-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                        </div>
                                        <span style="font-size: 15px">4 &nbsp;(1200)</span>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="item">
                                    <div class="course-card">
                                        <div class="logo-rate">
                                            <div class="uni-logo">
                                                <img src="assets/images/courses/Big Data.png" alt="big data">
                                            </div>
                                            <div class="rate">
                                                <p>Featured</p>
                                                <div class="star-review">
                                                    <div class="star-images">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span>Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <h4>Big data is used in a wide range of industries and applications.</h4>
                                        </div>
                                        <div class="course-start">
                                            <p> Course Start: 20 April 2023</p>
                                        </div>
                                        <div class="flexible-learn">
                                            <div class="flexible-durtion">
                                                <p>Duration:</p>
                                                <span>4 Months</span>
                                            </div>
                                            <div class="learn">
                                                <a href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="course-card">
                                        <div class="logo-rate">
                                            <div class="uni-logo">
                                                <img src="assets/images/courses/Business Intelligence.png" alt="big data">
                                            </div>
                                            <div class="rate">
                                                <p>Featured</p>
                                                <div class="star-review">
                                                    <div class="star-images">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span>Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <h4>BI typically involves several stages, including data collection.</h4>
                                        </div>
                                        <div class="course-start">
                                            <p> Course Start: 20 April 2023</p>
                                        </div>
                                        <div class="flexible-learn">
                                            <div class="flexible-durtion">
                                                <p>Duration:</p>
                                                <span>4 Months</span>
                                            </div>
                                            <div class="learn">
                                                <a href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="course-card">
                                        <div class="logo-rate">
                                            <div class="uni-logo">
                                                <img src="assets/images/courses/data analysis.png" alt="data analysis">
                                            </div>
                                            <div class="rate">
                                                <p>Featured</p>
                                                <div class="star-review">
                                                    <div class="star-images">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span>Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <h4>Data analytics involves several stages, including data collection.</h4>
                                        </div>
                                        <div class="course-start">
                                            <p> Course Start: 20 April 2023</p>
                                        </div>
                                        <div class="flexible-learn">
                                            <div class="flexible-durtion">
                                                <p>Duration:</p>
                                                <span>4 Months</span>
                                            </div>
                                            <div class="learn">
                                                <a href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="course-card">
                                        <div class="logo-rate">
                                            <div class="uni-logo">
                                                <img src="assets/images/courses/data science.png" alt="data science">
                                            </div>
                                            <div class="rate">
                                                <p>Featured</p>
                                                <div class="star-review">
                                                    <div class="star-images">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span>Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <h4>Data science typically involves several stages, including data
                                                collection.
                                            </h4>
                                        </div>
                                        <div class="course-start">
                                            <p> Course Start: 20 April 2023</p>
                                        </div>
                                        <div class="flexible-learn">
                                            <div class="flexible-durtion">
                                                <p>Duration:</p>
                                                <span>4 Months</span>
                                            </div>
                                            <div class="learn">
                                                <a href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="course-card">
                                        <div class="logo-rate">
                                            <div class="uni-logo">
                                                <img src="assets/images/courses/database management.png"
                                                    alt="data management">
                                            </div>
                                            <div class="rate">
                                                <p>Featured</p>
                                                <div class="star-review">
                                                    <div class="star-images">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span>Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <h4>Data management typically involves several stages, including data
                                                collection.</h4>
                                        </div>
                                        <div class="course-start">
                                            <p> Course Start: 20 April 2023</p>
                                        </div>
                                        <div class="flexible-learn">
                                            <div class="flexible-durtion">
                                                <p>Duration:</p>
                                                <span>4 Months</span>
                                            </div>
                                            <div class="learn">
                                                <a href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="course-card">
                                        <div class="logo-rate">
                                            <div class="uni-logo">
                                                <img src="assets/images/courses/software development.png"
                                                    alt="software development">
                                            </div>
                                            <div class="rate">
                                                <p>Featured</p>
                                                <div class="star-review">
                                                    <div class="star-images">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span>Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <h4>Software development is used in a wide range of industries and
                                                applications.
                                            </h4>
                                        </div>
                                        <div class="course-start">
                                            <p> Course Start: 20 April 2023</p>
                                        </div>
                                        <div class="flexible-learn">
                                            <div class="flexible-durtion">
                                                <p>Duration:</p>
                                                <span>4 Months</span>
                                            </div>
                                            <div class="learn">
                                                <a href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-diploma" role="tabpanel" aria-labelledby="pills-diploma-tab">
                    <div class="container courses">
                        <div id="owl-diploma" class="owl-carousel owl-theme">

                            <div class="courseborder">
                                <img src="assets/images/courses/Big Data.png" class="img-responsive" alt=""
                                    width="100%" style="height: 150px;">
                                <div class="info">
                                    <div>
                                        <h5>Next Batch</h5>
                                        <div class="text-center icon" style="color: #fff">
                                            Start: 20 April 2023

                                            <ul class="text-left">
                                                <li>
                                                    <div>Introducton to Big Data</div>
                                                </li>
                                                <li>
                                                    <div>Future Trends in Big Data</div>
                                                </li>
                                                <!-- <li><div>Object Storage Options</div></li> -->
                                            </ul>

                                            <a href="#" style="text-decoration: none;color: #000"><button
                                                    class="btn">View Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tcourse-details">
                                    <h5 style="text-align: center;font-size: 18px">Big Data</h5>

                                    <i>Reviews</i>
                                    <div style="display: flex;align-items:center">
                                        <div class="my-rating" style="display: inline;margin-right: 10px">
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-empty-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                        </div>
                                        <span style="font-size: 15px">4 &nbsp;(1200)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="courseborder">
                                <img src="assets/images/courses/Business Intelligence.png" class="img-responsive"
                                    alt="" width="100%" style="height: 150px;">
                                <div class="info">
                                    <div>
                                        <h5>Next Batch</h5>
                                        <div class="text-center icon" style="color: #fff">
                                            Start: 20 April 2023

                                            <ul class="text-left">
                                                <li>
                                                    <div>Introducton to BI</div>
                                                </li>
                                                <li>
                                                    <div>Importance and Benefits of BI</div>
                                                </li>
                                                <!-- <li><div>Object Storage Options</div></li> -->
                                            </ul>

                                            <a href="#" style="text-decoration: none;color: #000"><button
                                                    class="btn">View Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tcourse-details">
                                    <h5 style="text-align: center;font-size: 18px">Business Intelligence</h5>

                                    <i>Reviews</i>
                                    <div style="display: flex;align-items:center">
                                        <div class="my-rating" style="display: inline;margin-right: 10px">
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-empty-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                        </div>
                                        <span style="font-size: 15px">4 &nbsp;(1200)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="courseborder">
                                <img src="assets/images/courses/data analysis.png" class="img-responsive"
                                    alt="" width="100%" style="height: 150px;">
                                <div class="info">
                                    <div>
                                        <h5>Next Batch</h5>
                                        <div class="text-center icon" style="color: #fff">
                                            Start: 20 April 2023

                                            <ul class="text-left">
                                                <li>
                                                    <div>Understanding Data Analysis</div>
                                                </li>
                                                <li>
                                                    <div>Data Analysis Workflow</div>
                                                </li>
                                                <!-- <li><div>Object Storage Options</div></li> -->
                                            </ul>

                                            <a href="#" style="text-decoration: none;color: #000"><button
                                                    class="btn">View Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tcourse-details">
                                    <h5 style="text-align: center;font-size: 18px">Data analysis</h5>

                                    <i>Reviews</i>
                                    <div style="display: flex;align-items:center">
                                        <div class="my-rating" style="display: inline;margin-right: 10px">
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-empty-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                        </div>
                                        <span style="font-size: 15px">4 &nbsp;(1200)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="courseborder">
                                <img src="assets/images/courses/data science.png" class="img-responsive"
                                    alt="" width="100%" style="height: 150px;">
                                <div class="info">
                                    <div>
                                        <h5>Next Batch</h5>
                                        <div class="text-center icon" style="color: #fff">
                                            Start: 20 April 2023

                                            <ul class="text-left">
                                                <li>
                                                    <div>Defining Data Science
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>Role of Data Scientists</div>
                                                </li>
                                                <!-- <li><div>Object Storage Options</div></li> -->
                                            </ul>

                                            <a href="#" style="text-decoration: none;color: #000"><button
                                                    class="btn">View Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tcourse-details">
                                    <h5 style="text-align: center;font-size: 18px">Data Science</h5>

                                    <i>Reviews</i>
                                    <div style="display: flex;align-items:center">
                                        <div class="my-rating" style="display: inline;margin-right: 10px">
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-empty-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                        </div>
                                        <span style="font-size: 15px">4 &nbsp;(1200)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="courseborder">
                                <img src="assets/images/courses/database management.png" class="img-responsive"
                                    alt="" width="100%" style="height: 150px;">
                                <div class="info">
                                    <div>
                                        <h5>Next Batch</h5>
                                        <div class="text-center icon" style="color: #fff">
                                            Start: 20 April 2023

                                            <ul class="text-left">
                                                <li>
                                                    <div>Defining DBMS
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>DBMS Overview</div>
                                                </li>
                                                <!-- <li><div>Object Storage Options</div></li> -->
                                            </ul>

                                            <a href="#" style="text-decoration: none;color: #000"><button
                                                    class="btn">View Details</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tcourse-details">
                                    <h5 style="text-align: center;font-size: 18px">Database management</h5>

                                    <i>Reviews</i>
                                    <div style="display: flex;align-items:center">
                                        <div class="my-rating" style="display: inline;margin-right: 10px">
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-active-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-active-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                            <div class="jq-star" style="width:25px;  height:25px;"><svg version="1.0"
                                                    class="jq-star-svg" shape-rendering="geometricPrecision"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    width="305px" height="305px" viewBox="60 -62 309 309"
                                                    style="enable-background:new 64 -59 305 305; stroke-width:4px;"
                                                    xml:space="preserve">
                                                    <style type="text/css">
                                                        .svg-empty-561 {
                                                            fill: url(#561_SVGID_1_);
                                                        }

                                                        .svg-hovered-561 {
                                                            fill: url(#561_SVGID_2_);
                                                        }

                                                        .svg-active-561 {
                                                            fill: url(#561_SVGID_3_);
                                                        }

                                                        .svg-rated-561 {
                                                            fill: crimson;
                                                        }
                                                    </style>
                                                    <linearGradient id="561_SVGID_1_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:lightgray"></stop>
                                                        <stop offset="1" style="stop-color:lightgray"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_2_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:orange"></stop>
                                                        <stop offset="1" style="stop-color:orange"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="561_SVGID_3_" gradientUnits="userSpaceOnUse"
                                                        x1="0" y1="-50" x2="0" y2="250">
                                                        <stop offset="0" style="stop-color:#FEF7CD"></stop>
                                                        <stop offset="1" style="stop-color:#FF9511"></stop>
                                                    </linearGradient>
                                                    <polygon data-side="center" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 "
                                                        style="fill: transparent; stroke: black;"></polygon>
                                                    <polygon data-side="left" class="svg-empty-561"
                                                        points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                    <polygon data-side="right" class="svg-empty-561"
                                                        points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 "
                                                        style="stroke-opacity: 0;"></polygon>
                                                </svg></div>
                                        </div>
                                        <span style="font-size: 15px">4 &nbsp;(1200)</span>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="item">
                                    <div class="course-card">
                                        <div class="logo-rate">
                                            <div class="uni-logo">
                                                <img src="assets/images/courses/Big Data.png" alt="big data">
                                            </div>
                                            <div class="rate">
                                                <p>Featured</p>
                                                <div class="star-review">
                                                    <div class="star-images">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span>Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <h4>Big data is used in a wide range of industries and applications.</h4>
                                        </div>
                                        <div class="course-start">
                                            <p> Course Start: 20 April 2023</p>
                                        </div>
                                        <div class="flexible-learn">
                                            <div class="flexible-durtion">
                                                <p>Duration:</p>
                                                <span>4 Months</span>
                                            </div>
                                            <div class="learn">
                                                <a href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="course-card">
                                        <div class="logo-rate">
                                            <div class="uni-logo">
                                                <img src="assets/images/courses/Business Intelligence.png" alt="big data">
                                            </div>
                                            <div class="rate">
                                                <p>Featured</p>
                                                <div class="star-review">
                                                    <div class="star-images">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span>Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <h4>BI typically involves several stages, including data collection.</h4>
                                        </div>
                                        <div class="course-start">
                                            <p> Course Start: 20 April 2023</p>
                                        </div>
                                        <div class="flexible-learn">
                                            <div class="flexible-durtion">
                                                <p>Duration:</p>
                                                <span>4 Months</span>
                                            </div>
                                            <div class="learn">
                                                <a href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="course-card">
                                        <div class="logo-rate">
                                            <div class="uni-logo">
                                                <img src="assets/images/courses/data analysis.png" alt="data analysis">
                                            </div>
                                            <div class="rate">
                                                <p>Featured</p>
                                                <div class="star-review">
                                                    <div class="star-images">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span>Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <h4>Data analytics involves several stages, including data collection.</h4>
                                        </div>
                                        <div class="course-start">
                                            <p> Course Start: 20 April 2023</p>
                                        </div>
                                        <div class="flexible-learn">
                                            <div class="flexible-durtion">
                                                <p>Duration:</p>
                                                <span>4 Months</span>
                                            </div>
                                            <div class="learn">
                                                <a href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="course-card">
                                        <div class="logo-rate">
                                            <div class="uni-logo">
                                                <img src="assets/images/courses/data science.png" alt="data science">
                                            </div>
                                            <div class="rate">
                                                <p>Featured</p>
                                                <div class="star-review">
                                                    <div class="star-images">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span>Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <h4>Data science typically involves several stages, including data
                                                collection.
                                            </h4>
                                        </div>
                                        <div class="course-start">
                                            <p> Course Start: 20 April 2023</p>
                                        </div>
                                        <div class="flexible-learn">
                                            <div class="flexible-durtion">
                                                <p>Duration:</p>
                                                <span>4 Months</span>
                                            </div>
                                            <div class="learn">
                                                <a href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="course-card">
                                        <div class="logo-rate">
                                            <div class="uni-logo">
                                                <img src="assets/images/courses/database management.png"
                                                    alt="data management">
                                            </div>
                                            <div class="rate">
                                                <p>Featured</p>
                                                <div class="star-review">
                                                    <div class="star-images">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span>Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <h4>Data management typically involves several stages, including data
                                                collection.</h4>
                                        </div>
                                        <div class="course-start">
                                            <p> Course Start: 20 April 2023</p>
                                        </div>
                                        <div class="flexible-learn">
                                            <div class="flexible-durtion">
                                                <p>Duration:</p>
                                                <span>4 Months</span>
                                            </div>
                                            <div class="learn">
                                                <a href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="course-card">
                                        <div class="logo-rate">
                                            <div class="uni-logo">
                                                <img src="assets/images/courses/software development.png"
                                                    alt="software development">
                                            </div>
                                            <div class="rate">
                                                <p>Featured</p>
                                                <div class="star-review">
                                                    <div class="star-images">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span>Rating</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <h4>Software development is used in a wide range of industries and
                                                applications.
                                            </h4>
                                        </div>
                                        <div class="course-start">
                                            <p> Course Start: 20 April 2023</p>
                                        </div>
                                        <div class="flexible-learn">
                                            <div class="flexible-durtion">
                                                <p>Duration:</p>
                                                <span>4 Months</span>
                                            </div>
                                            <div class="learn">
                                                <a href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--explore courses end-->



    <!-- why choose  Start -->
    <div class="choose pt-30 pb-30">
        <div class="container">
                 <div class="heading-oc">
                <h2>Why<span> Durshikshya ?</span></h2>
                {{ Str::after(Str::before($profile->why_detail, '</p>'), '<p>') }}
            </div>
            <div class="row chooserow">
                <div class="choosecontent">
                    <img class="imagechoose" src="{{ asset('uploads/profile/'.$profile->why_banner)}}" alt="Image">
                </div>
                <div class="choosecontent">
                    <!-- <h3>Develop the skills to move fast and stay ahead.</h3> -->
                    {{-- {{ Str::after($profile->why_detail, '</p>') }} --}}
                    @php
                        $contentWithoutFirstParagraph = Str::after($profile->why_detail, '</p>');
                        
                    @endphp
                    {!! str_replace(
                        ['<ul>', '</ul>', '<li>', '</li>'],
                        ['<ul class="choose-list">', '</ul>', '<li><i class="fas fa-check-circle"></i>', '</li>'],
                        $contentWithoutFirstParagraph
                    ) !!}   
                </div>
            </div>
        </div>
    </div>
    <!-- About Warp End -->
        <div class="clients pt-30 pb-50">
        <div class="container clientcontainer">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-heading">
                        <h2>Our Association with These Worldwide Universities</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme clients-carousel">                       
                        @foreach ($associates as $item)
                        @if ($item->is_associate ==1)
                            <div class="item box">                            
                                <div class="item"><img src="{{ asset('uploads/university/'. $item->image) }}" alt="Owl Image"></div>
                            </div>                        
                        @endif
                    @endforeach                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Benefit Warp Start -->
    <div class="benefit-warp pb-30">
        <div class="container style1">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="zoom-out-right" data-aos-duration="1000">
                    <div class="benefit-image">
                        <img src="{{asset('user/images/benefits/benefit1.png')}}" class="benefit1" alt="image">
                        <img src="{{asset('user/images/benefits/benefit2.png')}}" class="benefit2" alt="image">
                        <img src="{{asset('user/images/benefits/benefit3.jpg')}}" class="benefit3" alt="image">
                        <div class="benefit-card" data-aos="flip-left" data-aos-duration="2500">
                            {!!$dream->slogan!!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="benefit-content single-section">
                        <!-- <span class="title">Our Services</span> -->
                        <h2>{{$dream->title}}</h2>
                        {!!$dream->detail!!}
                        <ul>                            
                            @foreach (json_decode($dream->deals) as $index => $item)
                            <li>
                                <div class="icon">
                                    <i class="fas {{$item->icon}}"></i>
                                </div>
                                <div class="content">
                                    <h5>{{$item->title}}</h5>
                                    <p>{{$item->detail}}</p>
                                </div>
                            </li>
                            @endforeach                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Benefit Warp End -->
    <div class="container collab">
        <div class="container">
            <div class="heading-collab">
                <h3>Collaborate, Learn &amp; <span>Network Globally</span></h3>

                <p>Achieve higher education while balancing full-time jobs with our Flexible Courses, Personalized
                    Support, and Networking Opportunities.</p>
            </div>

            <div class="stat-bg-area">
                <div class="girl-bg"><img alt="" src="{{asset('user/images/collab/collab -bg.png')}}"></div>
                @foreach ($network as $item)
                @if ($item->id == 1)
                    <div class="first-phas">
                        <div class="personal-tutor">
                            <img  src="{{url('uploads/networks/'.$item->image)}}" alt="image">
                            <div class="para">
                                <h5>{{ $item->title }}</h5>
                                <p>{{ $item->detail }}</p>
                            </div>
                        </div>
                    
                @elseif ($item->id == 2)
                    <div class="network-global">
                        <img  src="{{url('uploads/networks/'.$item->image)}}" alt="image">
                        <div class="para">
                            <h5>{{ $item->title }}</h5>
                            <p>{{ $item->detail }}</p>
                        </div>
                    </div>
                </div>
                @else
                    <div class="second-phas">
                        <div class="industy-exp">
                            <img  src="{{url('uploads/networks/'.$item->image)}}" alt="image">
                            <div class="para">
                                <h5>{{ $item->title }}</h5>
                                <p>{{ $item->detail }}</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach                
            </div>
        </div>
    <div>

    <div class="container insight-section">
        <div class="container">
            <div class="insight-heading">
                <h3>From Our <span>Insights</span></h3>

                <p>We ensure you're always informed and engaged. Explore a variety of topics through our diverse
                    blogs,
                    candid student and employee interviews, life-transforming book reviews, and inspiring student
                    testimonials.</p>
            </div>

            <div class="big-latest row justify-content-between">
                <div class="col-md-7">
                    @foreach ($course as $item)
                    <div class="big-preview">
                        <img src="{{ asset('uploads/courses/' . $item->banner) }}" alt="">
                        <div class="para-area">
                            <a href="{{ route('course_detail', ['slug' => $item->slug]) }}">
                                <h5>{{$item->title}} </h5>
                            </a>
                            {!!$item->details!!}
                            <div class="auth-time">
                                <div class="author">
                                    <p><span>Durshikshya</span> | <span>3</span> MINS READ</p>
                                </div>
                                <div class="date">
                                    <p>{{ $item->created_at->format('F d, Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                <div class="col-md-4">
                    <div class="latest-article">
                        <h4>Latest Article</h4>
                        @foreach ($blogs as $item)
                        <div class="article-single">
                            <img src="{{ asset('uploads/blogs/' . $item->banner) }}" alt="">
                            <div class="content-right">
                                <h5>{{$item->title}}</h5>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                        @endforeach                  
                       
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($bootcamps as $item)
                <div class="col-md-3 mt-4">
                    <div class="review-single">
                        <img src="{{ asset('uploads/bootcamps/' . $item->banner) }}">
                        <div class="content-area">
                            <span>Practice Based Modules</span>
                            <h5>{{$item->title}}</h5>
                            <a href="{{ route('bootcamp_details', ['slug' => $item->slug]) }}">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach              
                
            </div>
            <div class="view-all">
                <a href="#">View All</a>
            </div>
        </div>
    </div>


    <!-- Feedback Warp Start -->
    <div class="feedback-warp pt-30 pb-30">
        <div class="container style1">
            <div class="section-title style1">
                <span class="title">Our Students Feedback</span>
                <h2>What Are They Talking About Us?</h2>
            </div>
            <div class="row justify-content-center">
                @foreach ($testimonial as $item)
                @if($item->id % 2 == 0)
                    <div class="col-lg-4 col-sm-6" data-cue="slideInUp">
                        <div class="feedback-widget">
                            <div class="content">
                                {!!$item->feedback!!}
                            </div>
                            <div class="client d-flex align-items-center justify-content-between">
                                <div class="client-self d-flex align-items-center">
                                    <div class="image">
                                        <img src="{{url('uploads/testi/'.$item->image)}}" alt="image">
                                    </div>
                                    <div class="self">
                                        <h4>{{$item->name}}</h4>
                                        <span>{{$item->position}}</span>
                                    </div>
                                </div>
                                <div class="icon">
                                    <img src="{{asset('user/images/svgs/client.svg')}}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                    @else

                    <div class="col-lg-4 col-sm-6" data-cue="slideInUp">
                        <div class="feedback-widget">
                            <div class="client style2 d-flex align-items-center justify-content-between">
                                <div class="client-self d-flex align-items-center">
                                    <div class="image">
                                        <img src="{{url('uploads/testi/'.$item->image)}}" alt="image">
                                    </div>
                                    <div class="self">
                                        <h4>{{$item->name}}</h4>
                                        <span>{{$item->position}}</span>
                                    </div>
                                </div>
                                <div class="icon">
                                    <img src="{{asset('user/images/svgs/client.svg')}}" alt="image">
                                </div>
                            </div>
                            <div class="content style2">
                                {!!$item->feedback!!}
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach              
               
            </div>
        </div>
    </div>
    <!-- Feedback Warp End -->
@endsection
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $('.clients-carousel').owlCarousel({
            autoplay: true,
            loop: true,
            margin: 30,
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
                    items: 3
                },
                800: {
                    items: 4
                },
                1200: {
                    items: 5
                }

            }
        });
    </script>
@endpush
