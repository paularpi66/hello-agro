@extends('layouts.website')
@section('website_content')
<style>
        
        .submit_btn {
            width: 100%;
            margin-top: 25px;
            float: left;
        }
        .warning {
            color: red;
            margin-top: 1px;
        }

        input:focus-visible{
            border: 2px solid #000;
            outline: 0;
        }

        #password_strength{
            font-weight:bold;
        }

    </style>

        <!-- Register form part start here -->
        <section class="" style="background-color: #fff;">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">

                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-2 order-lg-1">

                                    <img src="{{asset('contents/website/assets')}}/img/register_form_bg.png" class="img-fluid" alt="Sample image">

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-5 order-1 order-lg-2">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                                    <form method="post" autocomplete="off" action="{{ route('register') }}" id="sign_up_form" onsubmit="return blank_protection()">
                                    @csrf
                                        <div class="field_name">
                                            <label for="">Full Name</label>
                                        </div>
                                        <div class="input_field">
                                            <input name="name" class="form-control" type="text" id="f_name" onblur="name_validation()" oninput="name_validation()" onchange="name_validation()" required>
                                            <p id="name_error" class="warning"> </p>
                                        </div>

                                        <div class="field_name">
                                            <label for="">Mobile No</label>
                                        </div>
                                        <div class="input_field">
                                            <input name="mobile_no" class="form-control"  type="text" id="f_number" onblur="phone_validation()" oninput="phone_validation()" onchange="phone_validation()" required>
                                            <p id="phone_error" class="warning"> </p>
                                        </div>

                                        <div class="field_name">
                                            <label for="">NID No</label>
                                        </div>
                                        <div class="input_field">
                                            <input name="nid" class="form-control"  type="text" id="nid_no" onblur="nid_validation()" oninput="nid_validation()" onchange="nid_validation()" required>
                                            <p id="nid_error" class="warning"> </p>
                                        </div>

                                        <div class="field_name">
                                            <label for="">Email</label>
                                        </div>
                                        <div class="input_field">
                                            <input name="email" class="form-control" type="email" id="email" onblur="email_validation()" oninput="email_validation()" onchange="email_validation()" required>
                                            <p id="email_error" class="warning"> </p>
                                        </div>

                                        <div class="field_name">
                                            <label class="" for="">Password</label>
                                        </div>
                                        <div class="input_field password_field">
                                            <input name="password" class="form-control" type="password" id="password" onkeyup="password_validation()" onblur="password_validation()" oninput="password_validation()" onchange="password_validation()" required>
                                            <p id="password_strength" > </p>
                                            <p id="password_error" class="warning"> </p>
                                        </div>

                                        <div class="field_name">
                                            <label for="">Confirm Password</label>
                                        </div>
                                        <div class="input_field">
                                            <input name="password_confirmation" class="form-control" style="display: inline;" onkeyup="confirm_password()" onblur="confirm_password()" type="password" id="password2" required>
                                            <p id="password_error2" class="warning"> </p>
                                            
                                        </div>

                                        
                                        <div class="submit_btn">
                                            <input type="submit" class="btn btn-primary btn_my w-100" onclick="return blank_protection()" value="Register Now">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection