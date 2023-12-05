@extends('user.layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset('user/css/blog.css') }}">
@endpush
@section('content')
    <!--page title area start-->
    <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center"
        data-background="assets/img/page-title/page-title.jpg"
        style="background-image: url('{{ asset('user/images/page-tittle/contact.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">BLOG</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Resources</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page title area ends-->
    <!--blog starts-->
    <div class="container">
        <section class="blog__area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="row">
                            @foreach ($blog as $item)
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="blog__wrapper">
                                        <div class="blog__item white-bg mb-30 transition-3 fix">
                                            <div class="blog__thumb w-img fix">
                                                <a href="blog-details.html">
                                                    <img src="{{ asset('uploads/blogs/' . $item->banner) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="blog__content">
                                                <div class="blog__tag">
                                                    <a href="#">{{ $item->tag->title }}</a>
                                                </div>
                                                <h3 class="blog__title"><a href="#">{{ $item->title }}</a></h3>

                                                <div class="blog__meta d-flex align-items-center justify-content-between">
                                                    <div class="blog__author d-flex align-items-center">
                                                        <div class="blog__author-info">
                                                            <h5>{{ $item->owner }}</h5>
                                                        </div>
                                                    </div>
                                                    <div class="blog__date d-flex align-items-center">
                                                        <i class="far fa-clock"></i>
                                                        <span>{{ $item->created_at->format('F d, Y') }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="basic-pagination wow fadeInUp mt-30" data-wow-delay=".2s"
                                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;    margin-left: -23px;">
                                    <ul class="d-flex align-items-center">
                                        <li class="prev">
                                            <a href="#" class="link-btn link-prev">
                                                Prev
                                                <i class="fas fa-arrow-left"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>1</span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="#">
                                                <span>2</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>3</span>
                                            </a>
                                        </li>
                                        <li class="next">
                                            <a href="#" class="link-btn">
                                                Next
                                                <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="blog__sidebar pl-70">
                            <div class="sidebar__widget mb-60">
                                <div class="sidebar__widget-content">
                                    <div class="sidebar__search p-relative">
                                        <form action="#">
                                            <input type="text" placeholder="Search for courses...">
                                            <button type="submit">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 584.4 584.4" style="enable-background:new 0 0 584.4 584.4;"
                                                    xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path class="st0"
                                                                d="M565.7,474.9l-61.1-61.1c-3.8-3.8-8.8-5.9-13.9-5.9c-6.3,0-12.1,3-15.9,8.3c-16.3,22.4-36,42.1-58.4,58.4    c-4.8,3.5-7.8,8.8-8.3,14.5c-0.4,5.6,1.7,11.3,5.8,15.4l61.1,61.1c12.1,12.1,28.2,18.8,45.4,18.8c17.1,0,33.3-6.7,45.4-18.8    C590.7,540.6,590.7,499.9,565.7,474.9z">
                                                            </path>
                                                            <path class="st1"
                                                                d="M254.6,509.1c140.4,0,254.5-114.2,254.5-254.5C509.1,114.2,394.9,0,254.6,0C114.2,0,0,114.2,0,254.5    C0,394.9,114.2,509.1,254.6,509.1z M254.6,76.4c98.2,0,178.1,79.9,178.1,178.1s-79.9,178.1-178.1,178.1S76.4,352.8,76.4,254.5    S156.3,76.4,254.6,76.4z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__widget mb-55">
                                <div class="sidebar__widget-head mb-35">
                                    <h3 class="sidebar__widget-title">Recent posts</h3>
                                </div>
                                <div class="sidebar__widget-content">
                                    <div class="rc__post-wrapper">
                                        @for ($i = 0; $i < 4; $i++)
                                            @if (isset($blog[$i]))
                                                <div class="rc__post d-flex align-items-center">
                                                    <div class="rc__thumb mr-20">
                                                        <a href="blog-details.html"><img
                                                                src="{{ asset('uploads/blogs/' . $blog[$i]->banner) }}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="rc__content">
                                                        <div class="rc__meta">
                                                            <span>{{ $blog[$i]->created_at->format('F d, Y') }}
                                                            </span>
                                                        </div>
                                                        <h6 class="rc__title"><a
                                                                href="blog-details.html">{{ $blog[$i]->title }}</a></h6>
                                                    </div>
                                                </div>
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__widget mb-55">
                                <div class="sidebar__widget-head mb-35">
                                    <h3 class="sidebar__widget-title">Category</h3>
                                </div>
                                <div class="sidebar__widget-content">
                                    <div class="sidebar__category">
                                        <ul>
                                            <li><a href="blog.html">Programming Language (10)</a></li>
                                            <li><a href="blog.html">Technology (5)</a></li>
                                            <li><a href="blog.html">Development (8)</a></li>
                                            <li><a href="blog.html">Database (5)</a></li>
                                            <li><a href="blog.html">Aritifical Intelligence (3)</a></li>
                                            <li><a href="blog.html">Data Science (10)</a></li>
                                            <li><a href="blog.html">Laptop 2023(5)</a></li>
                                            <li><a href="blog.html">CPU (8)</a></li>
                                            <li><a href="blog.html">Big Data (5)</a></li>
                                            <li><a href="blog.html">Web Design (3)</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__widget mb-55">
                                <div class="sidebar__widget-head mb-35">
                                    <h3 class="sidebar__widget-title">Tags</h3>
                                </div>
                                <div class="sidebar__widget-content">
                                    <div class="sidebar__tag">
                                        @foreach ($tags as $item)
                                        <a href="#">{{$item->title}}</a>
                                        @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__widget mb-55">
                                <div class="sidebar__banner w-img">
                                    <img src="assets/images/blogs/banner-1.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
