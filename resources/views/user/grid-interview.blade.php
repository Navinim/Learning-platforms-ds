@extends('user.layouts.app')
@push('css')
    <!--contact-->
    <link rel="stylesheet" href="{{ asset('user/css/contact.css') }}">
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
                        <h3 class="page__title">Interview Question</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Resources</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Interview Question Lists</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page title area ends-->
    <section class="contact__area grey-bg-2 pt-100 pb-100 p-relative fix">
        <div class="container">
            <h1>Top Interview Questions and Answers</h1>
            <p style="margin-bottom: 30px;">Ramp up with the best interview questions and answers and proven interview tips.
                With interviews getting harder, it's time for you to get smarter with new interview skills. Start preparing
                today!</p>
            <div class="row">
                @foreach ($interviewCate as $item)
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                        <div class="contact__item text-center mb-30 white-bg">
                            <div class="contact__content">
                                <h3 class="contact__title">{{ $item->title }}</h3>
                                <p>{{ $item->sub_title }}</p>
                                @php
                                    $total = App\Models\InterviewCate::where('id', $item->id)
                                        ->withCount('interviews') // Count the related interviews
                                        ->value('interviews_count');
                                @endphp
                                <a href="{{route('interview_detail',$item->slug)}}"><button class="default-btn">{{$total}}
                                        Questions</button></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
