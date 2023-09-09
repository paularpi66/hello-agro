@extends('layouts.website')
@section('website_content')


    

<div class="container my-5 text-center">
    <div class="row mx-auto">
        
            <div class="col-md-4">
                <div class="card info_card_my" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">নদী বা জলাশয়ে খাঁচায় মাছ চাষ </h5>
                        <a href="{{ url('/fish1') }}" class="btn btn-primary single_veg_btn hvr-grow">Details</a>
                    </div>
                </div>
            </div> 
        
        
            <div class="col-md-4">
                <div class="card info_card_my" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"> বেশি উৎপাদন পেতে মৎস্য চাষের কয়েকটি কৌশল </h5>
                        <a href="{{ url('/fish2') }}" class="btn btn-primary single_veg_btn hvr-grow">Details</a>
                    </div>
                </div>
            </div> 
        
        
            <div class="col-md-4">
                <div class="card info_card_my" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">  বায়োফ্লক: সবচেয়ে সাশ্রয়ী আধুনিক মাছ চাষ প্রযুক্তি  </h5>
                        <a href="{{ url('/fish3') }}" class="btn btn-primary single_veg_btn hvr-grow">Details</a>
                    </div>
                </div>
            </div> 
        
            
         
            




    </div>
</div>




@endsection