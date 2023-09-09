@extends('layouts.website')
@section('website_content')


<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Problem on your Farm ? </h3>
            <p class="blue-text">Please tell us detail about the problem,<br> our vet will try best to assist you</p>
            <div class="card">
                <h5 class="text-center mb-4"> HelloAgro Vet are always special </h5>
                <form class="form-card" method="post" action="{{url('submitfarmerproblem')}}" enctype="multipart/form-data"enctype="multipart/form-data">
                    @csrf

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Problem Name<span class="text-danger"> *</span></label> <input type="text" id="fname" name="problem_name" placeholder="" onblur="validate(1)" required> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Problem Title<span class="text-danger"> *</span></label> <input type="text" id="lname" name="problem_title" placeholder="" onblur="validate(2)" required> </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">Problem Detail<span class="text-danger"> *</span></label> <textarea type="text" id="fname" name="problem_detail" placeholder="" onblur="validate(1)" required></textarea> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Problem Image 1<span class="text-danger"> *</span></label> <input type="file" id="fname" name="problem_image1" onblur="validate(1)" required> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Problem Image 2 (Optional)</label> <input type="file" id="lname" name="problem_image2" onblur="validate(2)"> </div>
                    </div>
                    <div class="row justify-content-between text-left">

                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone<span class="text-danger"> *</span></label> <input type="text" id="lname" name="phone" placeholder="" onblur="validate(2)" required>  </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Full Address<span class="text-danger"> *</span></label> <input type="text" id="fname" name="addresss" placeholder="" onblur="validate(1)" required> </div>
                        
                    </div>


                    <div class="row justify-content-between text-left my-4">
                        <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">Choose a Vet<span class="text-danger"> *</span></label>                             
                        
                            <select class="form-control" name="vet_id" id="" required>
                                
                                <option value="" diabled>Select a vet</option>
                                @foreach($all_vet as $single_vet)
                                <option value="{{ $single_vet->user_id }}">{{ $single_vet->full_name }} ({{ $single_vet->specialist_area }} Expert) </option>
                                @endforeach

                            </select> 
                        </div>
                    </div>






                   
                    <div class="row justify-content-center">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Submit Your Problem</button> </div>
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