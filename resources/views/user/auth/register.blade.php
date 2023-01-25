@extends('user._layouts.auth')

@section('title', 'registration')

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
    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" class="register-form" id="register-form" action="{{ route('user.store.register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="first_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" placeholder="Your First Name"/>
                            @error('first_name') <div class="error-message">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label for="last_name"><i class="zmdi zmdi-accounts-alt material-icons-name"></i></label>
                            <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" placeholder="Your Last Name"/>
                            @error('last_name') <div class="error-message">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Your Email"/>
                            @error('email') <div class="error-message">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                            <input type="number" name="phone" id="phone" value="{{ old('phone') }}" placeholder="Your Phone"/>
                            @error('phone') <div class="error-message">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="password" placeholder="Password"/>
                            @error('password') <div class="error-message">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password"/>
                            @error('password_confirmation') <div class="error-message">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" value="1" placeholder="Repeat your password" class="agree-term"/>
                            <label for="agree-term" class="label-agree-term">I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            @error('agree-term') <div class="error-message">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" id="signup" class="form-submit" value="Register"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="{{ Vite::asset('resources/images/user/auth/signup-image.jpg') }}" alt="sing up image"></figure>
                    <a href="{{ route('user.login') }}" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer_script') @endsection
