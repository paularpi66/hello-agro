@extends('layouts.website')
@section('website_content')


    

<div class="container my-5 text-center">
    <div class="row mx-auto">
        
            <div class="col-md-4">
                <div class="card info_card_my" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">বারি লেবু-১</h5>
                        <a href="{{ url('/lemon1') }}" class="btn btn-primary single_veg_btn hvr-grow">Details</a>
                    </div>
                </div>
            </div> 
        

        
            <div class="col-md-4">
                <div class="card info_card_my" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">বারি লেবু-২</h5>
                        <a href="{{ url('/lemon2') }}" class="btn btn-primary single_veg_btn hvr-grow">Details</a>
                    </div>
                </div>
            </div> 
        
            <div class="col-md-4">
                <div class="card info_card_my" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">বারি লেবু-৩</h5>
                        <a href="{{ url('/lemon3') }}" class="btn btn-primary single_veg_btn hvr-grow">Details</a>
                    </div>
                </div>
            </div> 
        
            <div class="col-md-4">
                <div class="card info_card_my" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">বারি লেবু-৬</h5>
                        <a href="{{ url('/lemon4') }}" class="btn btn-primary single_veg_btn hvr-grow">Details</a>
                    </div>
                </div>
            </div> 
        

         
            




    </div>
</div>




@endsection