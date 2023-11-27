@extends('layouts.app')

@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <form class="form-signin" action="{{ route('login') }}" method="POST"> @csrf

                <h2 class="form-signin-heading">{{ route('login') }}</h2>
                <div class="login-wrap">
                    <input id="email" type="email" style="margin-bottom: 10px;"
                        class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                        required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label class="checkbox">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        {{ __('Remember Me') }}
                        <span class="pull-right">
                            @if (Route::has('password.request'))
                                <a data-toggle="modal" href="#myModal">
                                    {{ __('Forgot Password?') }}
                                </a>
                            @endif

                        </span>
                    </label>
                    <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>

                    <p>or you can sign in via social network</p>
                    <div class="login-social-link">
                        <a href="index.html" class="facebook">
                            <i class="fa fa-facebook"></i>
                            Facebook
                        </a>
                        <a href="index.html" class="twitter">
                            <i class="fa fa-twitter"></i>
                            Twitter
                        </a>
                    </div>                 

                </div>
            </form>


            <!-- Modal -->
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal"
                class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">{{ __('Reset Password') }}</h4>
                        </div>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('password.email') }}" method="POST"> @csrf
                            <div class="modal-body">
                                <label for="email">{{ __('Email Address') }}</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autofocus>

                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                <button class="btn btn-success"
                                    type="submit">{{ __('Send Password Reset Link') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- modal -->


        </div>
    </div> --}}
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
            <div class="wrap d-md-flex">
                <div class="img" style="background-image: url(admin/login/images/bg-1.jpg);">
                </div>
                <div class="login-wrap p-4 p-md-5">
                    <div class="d-flex">
                        <div class="w-100">
                            <h3 class="mb-4">Sign In</h3>
                        </div>
                        <div class="w-100">
                            <p class="social-media d-flex justify-content-end">
                                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-facebook"></span></a>
                                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-twitter"></span></a>
                            </p>
                        </div>
                    </div>
                    <form class="signin-form" action="{{ route('login') }}" method="POST"> @csrf
                        <div class="form-group mb-3">
                            <label class="label" for="email">Username</label>
                            <input type="text" name="email" class="form-control" placeholder="Username" value="{{ old('email') }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="label" for="password">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign
                                In</button>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50 text-left">
                                <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w-50 text-md-right">
                                <a href="#">Forgot Password</a>
                            </div>
                        </div>
                    </form>
                    <p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
