@extends('user._layouts.auth')

@section('title', 'registration')

@section('style')

@endsection

@section('content')
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>

                                    <form class="mx-1 mx-md-4" method="post" action="/login">
                                        @csrf

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" id="email" name="email" class="form-control"
                                                       placeholder="Your Email" required />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="password" name="password" class="form-control"
                                                       placeholder="Password" required/>
                                            </div>
                                        </div>

                                        <div class="form-check d-flex justify-content-start mb-5" style="margin-left: 15px">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="remember_me"
                                                    name="remember_me"/>
                                            <label class="form-check-label" for="form2Example3"> Remember me </label>
                                        </div>

                                        <div class="form-check d-flex justify-content-start mb-5">
                                            <a href="{{ route('user.register') }}">Are you registered?</a>&nbsp;
                                            <a href="#"> Forgot your password?</a>
                                        </div>


                                        <div class="d-flex justify-content-start mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg">Login</button>&ensp;

                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                         class="img-fluid" alt="Sample image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
