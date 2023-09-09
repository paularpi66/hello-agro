@extends('layouts.website')
@section('website_content')


<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Request a Invest</h3>
            <p class="blue-text">Just answer a few questions<br> so that we can personalize the right invest for you.</p>
            <div class="card">
                <h5 class="text-center mb-4"> We'll make true your dream </h5>
                <form class="form-card" method="post" action="{{url('applyforinvest')}}" enctype="multipart/form-data"enctype="multipart/form-data">
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
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Farm Category<span class="text-danger"> *</span></label> <input type="text" id="email" name="farm_category" placeholder="" onblur="validate(3)" required> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Farm Name<span class="text-danger"> *</span></label> <input type="text" id="mob" name="farm_name" placeholder="" onblur="validate(4)" required> </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Required amount<span class="text-danger"> *</span></label> <input type="text" id="email" name="req_amount" placeholder="" onblur="validate(3)" required> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Return on Funding (Percentage)<span class="text-danger"> *</span></label> <input type="text" id="return_invest" name="return_invest" placeholder="" onblur="validate(4)" required> </div>
                    </div> 


                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Required time (in month)<span class="text-danger"> *</span></label> <input type="text" id="email" name="duration" placeholder="" onblur="validate(3)" required> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Net Profit<span class="text-danger"> *</span></label> <input type="text" id="mob" name="net_profit" placeholder="" onblur="validate(4)" required> </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">District<span class="text-danger"> *</span></label> <input type="text" id="email" name="district" placeholder="" onblur="validate(3)" required> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Full Address<span class="text-danger"> *</span></label> <input type="text" id="mob" name="full_address" placeholder="" onblur="validate(4)" required> </div>
                    </div>


                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">How much Land You have?<span class="text-danger"> *</span></label> <textarea type="text" id="land_amount" name="land_amount" placeholder="" onblur="validate(4)" required></textarea> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">How you use our fund<span class="text-danger"> *</span></label> <textarea type="text" id="fund_used" name="fund_used" placeholder="" onblur="validate(4)" required></textarea> </div>
                    </div>

                    


                   
                    <div class="row justify-content-center">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Request a invest</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<style>
    body{color: #000;overflow-x: hidden;height: 100%;background-image: url("https://i.imgur.com/GMmCQHC.png");background-repeat: no-repeat;background-size: 100% 100%}.card{padding: 30px 40px;margin-top: 60px;margin-bottom: 60px;border: none !important;box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2)}.blue-text{color: #00BCD4}.form-control-label{margin-bottom: 0}input, textarea, button{padding: 8px 15px;border-radius: 5px !important;margin: 5px 0px;box-sizing: border-box;border: 1px solid #ccc;font-size: 18px !important;font-weight: 300}input:focus, textarea:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;border: 1px solid #00BCD4;outline-width: 0;font-weight: 400}.btn-block{text-transform: uppercase;font-size: 15px !important;font-weight: 400;height: 43px;cursor: pointer}.btn-block:hover{color: #fff !important}button:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;outline-width: 0}
</style>
@endsection