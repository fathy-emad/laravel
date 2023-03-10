@extends('user._layouts.auth')

@section('title', 'login')

@section('font') @endsection

@section('style')
    <style>
        .error-message {
            color: darkred;
        }
    </style>
@endsection

@section('header_script') @endsection

@section('content')

    <!-- Sing in  Form -->
    <section class="sign-up">
        <div class="container">
            <div class="signup-content">
                <div class="signup-image">
                    <figure><img src="{{ Vite::asset('resources/images/user/auth/signin-image.jpg') }}" alt="sing up image"></figure>
                    <a href="{{ route('user.register') }}" class="signup-image-link">Create an account</a>
                </div>

                <div class="signup-form">
                    <h2 class="form-title">Sign in</h2>
                    <form method="POST" class="register-form" id="login-form" action="{{ route('user.store.login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="my-email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="my-email" value="{{ old('email') }}" placeholder="Your Email"/>
                            @error('email') <div class="error-message">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label for="my-password"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="my-password" value="{{ old('password') }}" placeholder="Password"/>
                            @error('password') <div class="error-message">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember" id="remember" value="1" class="agree-term" />
                            <label for="remember" class="label-agree-term"><span><span></span></span>Remember me</label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                        </div>
                    </form>
                    <div class="social-login">
                        <span class="social-label">Or login with</span>
                        <ul class="socials">
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer_script') @endsection
