@extends('layouts.website')
@section('website_content')


    

<div class="container my-5 text-center">
    <div class="row mx-auto">
        
            <div class="col-md-4">
                <div class="card info_card_my" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">বারি কলা-১</h5>
                        <a href="{{ url('/banana1') }}" class="btn btn-primary single_veg_btn hvr-grow">Details</a>
                    </div>
                </div>
            </div> 
        

            <div class="col-md-4">
                <div class="card info_card_my" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">বারি কলা-২</h5>
                        <a href="{{ url('/banana2') }}" class="btn btn-primary single_veg_btn hvr-grow">Details</a>
                    </div>
                </div>
            </div> 
        
            
            <div class="col-md-4">
                <div class="card info_card_my" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">বারি কলা-৩</h5>
                        <a href="{{ url('/banana3') }}" class="btn btn-primary single_veg_btn hvr-grow">Details</a>
                    </div>
                </div>
            </div> 
        
              
            <div class="col-md-4">
                <div class="card info_card_my" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">বারি কলা-৪</h5>
                        <a href="{{ url('/banana4') }}" class="btn btn-primary single_veg_btn hvr-grow">Details</a>
                    </div>
                </div>
            </div> 
            <div class="col-md-4">
                <div class="card info_card_my" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">বারি কলা-৫</h5>
                        <a href="{{ url('/banana5') }}" class="btn btn-primary single_veg_btn hvr-grow">Details</a>
                    </div>
                </div>
            </div> 
             




    </div>
</div>




@endsection