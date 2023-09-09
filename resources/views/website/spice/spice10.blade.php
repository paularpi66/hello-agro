@extends('layouts.website')
@section('website_content')


    

<div class="container my-5 text-center">
    <div class="row mx-auto">
        

            <div class="col-md-4">
                <div class="card info_card_my" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">বারি রসুন -১</h5>
                        <a href="{{ url('/barigarlic1') }}" class="btn btn-primary single_veg_btn hvr-grow">Details</a>
                    </div>
                </div>
            </div>         

            <div class="col-md-4">
                <div class="card info_card_my" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">বারি রসুন -২</h5>
                        <a href="{{ url('/barigarlic2') }}" class="btn btn-primary single_veg_btn hvr-grow">Details</a>
                    </div>
                </div>
            </div>         

            <div class="col-md-4">
                <div class="card info_card_my" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">বারি রসুন -৩</h5>
                        <a href="{{ url('/barigarlic3') }}" class="btn btn-primary single_veg_btn hvr-grow">Details</a>
                    </div>
                </div>
            </div>          

            <div class="col-md-4"></div>

            <div class="col-md-4">
                <div class="card info_card_my" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">বারি রসুন -৪</h5>
                        <a href="{{ url('/barigarlic4') }}" class="btn btn-primary single_veg_btn hvr-grow">Details</a>
                    </div>
                </div>
            </div> 

            <div class="col-md-4"></div>



            
         
            




    </div>
</div>




@endsection