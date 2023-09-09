@extends('layouts.website')
@section('website_content')

@if($alldata->isEmpty())



<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Join as Seller</h3>
            <p class="blue-text">Just answer a few questions<br> so we can add you as a seller quickly to HelloAgro</p>
            <div class="card">
                <h5 class="text-center mb-4"> HelloAgro Seller are always special </h5>
                <form class="form-card" method="post" action="{{url('joinasseller_submit')}}" enctype="multipart/form-data"enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Full Name<span class="text-danger"> *</span></label> <input type="text" id="fname" name="full_name" placeholder="" onblur="validate(1)" required> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">NID No<span class="text-danger"> *</span></label> <input type="text" id="lname" name="nid" placeholder="" onblur="validate(2)" required> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nid Scan Copy<span class="text-danger"> *</span></label> <input type="file" id="fname" name="nid" onblur="validate(1)" required> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Self Photo<span class="text-danger"> *</span></label> <input type="file" id="lname" name="profile_photo" onblur="validate(2)" required> </div>
                    </div>
                    <div class="row justify-content-between text-left">

                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Father Name<span class="text-danger"> *</span></label> <input type="text" id="lname" name="fathername" placeholder="" onblur="validate(2)" required>  </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Mother Name<span class="text-danger"> *</span></label> <input type="text" id="fname" name="mothername" placeholder="" onblur="validate(1)" required> </div>
                        
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Personal Email<span class="text-danger"> *</span></label> <input type="text" id="email" name="email" placeholder="" onblur="validate(3)" required> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label> <input type="text" id="mob" name="phone" placeholder="" onblur="validate(4)" required> </div>
                    </div>




                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">District<span class="text-danger"> *</span></label> <input type="text" id="email" name="district" placeholder="" onblur="validate(3)" required> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Full Address<span class="text-danger"> *</span></label> <input type="text" id="mob" name="full_address" placeholder="" onblur="validate(4)" required> </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">How many product you have?<span class="text-danger"> *</span></label> <input type="text" id="bvc_reg_no" name="product_quantity" placeholder="" onblur="validate(3)" required> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Product type (Only 1 Line)<span class="text-danger"> *</span></label> <input type="text" id="experience" name="product_type" placeholder="" onblur="validate(4)" required> </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Average Product Price<span class="text-danger"> *</span></label> <input type="text" id="avg_product_price" name="avg_product_price" placeholder="" onblur="validate(3)" required> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Expected profit (Per product)<span class="text-danger"> *</span></label> <input type="text" id="expected_profit" name="expected_profit" placeholder="" onblur="validate(4)" required> </div>
                    </div>


                    <div class="row justify-content-between text-left my-4">
                        <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">Choose a Payment Method<span class="text-danger"> *</span></label>                             
                        
                            <select class="form-control" name="payment_method" id="" required>
                                
                                <option value="bkash" selected>Bkash</option>
                                
                               

                            </select> 
                        </div>

                        <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">Your Bkash Account No<span class="text-danger"> *</span></label> <input type="text" id="bkash_account_no" name="bkash_account_no" placeholder="" onblur="validate(3)" required> </div>

                        
                    </div>




                   
                    <div class="row justify-content-center">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Join as Seller</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<style>
    body{color: #000;overflow-x: hidden;height: 100%;background-image: url("https://i.imgur.com/GMmCQHC.png");background-repeat: no-repeat;background-size: 100% 100%}.card{padding: 30px 40px;margin-top: 60px;margin-bottom: 60px;border: none !important;box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2)}.blue-text{color: #00BCD4}.form-control-label{margin-bottom: 0}input, textarea, button{padding: 8px 15px;border-radius: 5px !important;margin: 5px 0px;box-sizing: border-box;border: 1px solid #ccc;font-size: 18px !important;font-weight: 300}input:focus, textarea:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;border: 1px solid #00BCD4;outline-width: 0;font-weight: 400}.btn-block{text-transform: uppercase;font-size: 15px !important;font-weight: 400;height: 43px;cursor: pointer}.btn-block:hover{color: #fff !important}button:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;outline-width: 0}
</style>

@else
<div class="container pt-5">
  <div class="row">
    <div class="col-12 text-center">

    @if(Auth::user()->role == '4')
        <div class="py-5 my-5">
        <h3>Your Already a seller of HelloAgro, so no need to apply.</h3>
        <h4><a href="{{ url('seller/me') }}">Click Here</a> for Login in Seller Panel</h4>

        </div>
    @else
    <h3>You already applied, you can't apply for seller more than once.</h3>
    <h4>Please wait untill we reviewd. </h4>
    <h5>Contact us, if you have any question. </h5>
    @endif
    </div>
  </div>
</div>
@endif

@endsection