<!-- Hero Warp Start -->

<div id="owl-banner-slider" class="owl-carousel owl-theme">
    @foreach ($slider as $item)
        <div class="hero-warp"
            style="background-image: url('{{ asset('uploads/slider/' . $item->image) }}');
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    height: 100%">
            <div class="container">
                <div class=" inner-hero-warp">
                    <div class="">
                        <div class="row align-items-start">
                            <div class="col-lg-6 col-md-6">
                                <div class="hero-content">
                                    <p class="top">{{ $item->tag }}</p>
                                    <h1>{{ $item->title }}</h1>
                                    <h1 class="subjects">
                                        <a href="" class="typewrite" data-period="3000"
                                            data-type='[ "{{ $item->typed1 }}", "{{ $item->typed2 }}" ]'>
                                            <span class="wrap"></span>
                                        </a>
                                    </h1>
                                    {!! $item->description !!}
                                    <div class="hero-btn">
                                        <a href="#" class="default-btn">Bootcamp</a>
                                        <a href="#" class="default-btn style2">Crash Course</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="custom-modal" id="embeddedModal">
                                                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        @foreach ($bootcampmemos as $items)
                                                            <?php
                                                                
                                                                $item = json_decode($items->data, true);
                                                                $startDate = Illuminate\Support\Carbon::parse($item['start']);
                                                                $endDate = Illuminate\Support\Carbon::parse($item['end']);
                                                                $daysDifference = $startDate->diffInDays($endDate);
                                                            ?>
                                                            <div class="carousel-item active">
                                                                <h2>{{ ucwords(str_replace('-', ' ', $items->type)) }}
                                                                </h2>
                                                                <hr class="custom-hr">
                                                                <p class="duration">Duration: {{$daysDifference}} Days</p>
                                                                <p>{{ $item['detail'] }}</p>
                                                                <button class="btn btn-info">Learn More</button>
                                                            </div>
                                                        @endforeach
                                                    </div>

                                                </div>
                                                <a href="javascript:void(0)" class="close-modal"
                                                    data-target="#embeddedModal">x</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<!-- Hero Warp End -->
