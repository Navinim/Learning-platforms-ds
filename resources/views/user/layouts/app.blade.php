<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Links Of CSS File -->
    <link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/fonts/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/scrollCue.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.0/css/all.min.css"
        integrity="sha512-UJqci0ZyYcQ0AOJkcIkUCxLS2L6eNcOr7ZiypuInvEhO9uqIDi349MEFrqBzoy1QlfcjfURHl+WTMjEdWcv67A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" />
    <link rel="stylesheet" href="{{asset('user/css/default.css')}}">

    <!--typewriter-->
    <link rel="stylesheet" href="{{asset('user/css/typewriter.css')}}">

    <!--card-->
    <link rel="stylesheet" href="{{asset('user/css/card.css')}}">
    
    

    <!--owl carousel-->
    <link rel="stylesheet" href="{{asset('user/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/owl.theme.default.min.css')}}">



    <!-- Title -->
    <title>Durshikshya</title>
    <link rel="icon" type="image/svg" href="{{asset('user/images/Durshikshya-favicon.png')}}">

    <script src="{{asset('user/js/jquery.min.js')}}"></script>
    <script src="{{asset('user/css/bootstrap.min.css')}}"></script>

    <style>
        .hero-wrap{
            height: calc(100vh - 100px) !important;
        }
    </style>
    @stack('css')
</head>

<body>
    <!-- Start Navbar Area -->
    @include('user.includes.header')
    <!-- End Navbar Area -->
        @yield('content')
    @include('user.includes.footer') 
    @include('user.includes.go_to_top')
    
<!--tab boostrap js-->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{asset('user/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('user/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('user/js/scrollCue.min.js')}}"></script>
<script src="{{asset('user/js/custom.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="{{asset('user/js/owl.carousel.min.js')}}"></script>
<!--typewriter js-->
<script src="{{asset('user/js/type.js')}}"></script>
<script src="{{asset('user/js/partner.js')}}"></script>

<script>
    $(document).ready(function(){
        $('.close-modal').on('click', function(){
            console.log('close modal');
            $modal = $(this).data('target');
            console.log($modal);
            $($modal).css('background', '#000');
            $($modal).css('display', 'none');
            
        });
    });
</script>
@stack('js')
</body>

</html>    