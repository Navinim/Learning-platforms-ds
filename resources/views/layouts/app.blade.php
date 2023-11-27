<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    {{-- <link rel="shortcut icon" href="{{asset('uploads/company-profile/'.$profile->favicon)}}">

    <title>{{$profile->company_title}}</title> --}}

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('admin/login/css/style.css')}}">
</head>

<body>
    <section class="ftco-section">
		<div class="container">
            @yield('content')
        </div>
    </section>
    <script src="{{asset('admin/login/js/jquery.min.js')}}"></script>
  <script src="{{asset('admin/login/js/popper.js')}}"></script>
  <script src="{{asset('admin/login/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('admin/login/js/main.js')}}"></script>
</body>

</html>

