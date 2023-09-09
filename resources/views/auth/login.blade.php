@extends('layouts.website')
@section('website_content')
<section class="">
        <!-- Jumbotron -->
        <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
            <div class="container">
                <div class="row gx-lg-5 align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h1 class="my-5 display-3 fw-bold ls-tight">
                            Hello Agro <br>
                            <span class="text-primary text_green">for your agriculture</span>
                        </h1>
                        <p style="color: hsl(217, 10%, 50.8%)">
                        HelloAgro is designed to bridge the gap between small-scale farmers and available agro sponsors. It's an impact agro-tech startup that has developed an online platform that enables anyone on the earth to easily sponsor crop farming and livestock projects for increasing food production while promoting youth participation in agribusiness. These investment helps empower our farmers strengthening, global food and nutrition security, impacting farmers lives but at the same time growing the sponsor's income.
                        </p>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="card">
                            <div class="card-body py-5 px-md-5">
                                <form method="POST" action="{{ route('login') }}">
                                @csrf
                                    <!-- 2 column grid layout with text inputs for the first and last names -->

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label class="form-label" for="form3Example3">Email address</label>
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label class="form-label" for="form3Example4">Password</label>
                                    </div>

                                    <!-- Checkbox -->
                                    <div class="form-check d-flex justify-content-start mb-4">
                                        <input class="form-check-input me-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                      Remember Me
                    </label>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" class="btn login_btn w-100 btn-primary btn-block mb-4">
                    Login
                  </button>
                  @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    <a class="btn btn-link" href="{{url('register')}}">
Click here to register</a>
                                    
                                @endif

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>


@endsection