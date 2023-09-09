@extends('layouts.website')
@section('website_content')


    <!-- veg cul part start here -->


    <section>
        <div class="container swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <div class="row ">
                <div class="col-12 ">
                    <h2 class="section_heading py-5 text-uppercase ">Spice Cultivation</h2>
                </div>
            </div>

            <div class="row">

            
                <div class="col-md-4 text-center single_vegitable">
                    <h2>Bay Leaf</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/spice/bay-leaf.png" class="img-fluid" alt="">
                    <a href="{{ url('/spice1') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>
            
                <div class="col-md-4 text-center single_vegitable">
                    <h2>Betel Leaf</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/spice/Betel-Leaf.png" class="img-fluid" alt="">
                    <a href="{{ url('/spice2') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>
            
                <div class="col-md-4 text-center single_vegitable">
                    <h2>Black Cumin</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/spice/black-cumin.png" class="img-fluid" alt="">
                    <a href="{{ url('/spice3') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>
            
                <div class="col-md-4 text-center single_vegitable">
                    <h2>Black Pepper</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/spice/black-pepper.png" class="img-fluid" alt="">
                    <a href="{{ url('/spice4') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>
            
                <div class="col-md-4 text-center single_vegitable">
                    <h2>Cinnamon</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/spice/Cinnamon.png" class="img-fluid" alt="">
                    <a href="{{ url('/spice5') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>
            
                <div class="col-md-4 text-center single_vegitable">
                    <h2>Coriander</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/spice/Coriander.png" class="img-fluid" alt="">
                    <a href="{{ url('/spice6') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>
            
                <div class="col-md-4 text-center single_vegitable">
                    <h2>Cumin</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/spice/cumin.png" class="img-fluid" alt="">
                    <a href="{{ url('/spice7') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>
            
                <div class="col-md-4 text-center single_vegitable">
                    <h2>FenneL Seed</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/spice/Fennel-seed.png" class="img-fluid" alt="">
                    <a href="{{ url('/spice8') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>
            
                <div class="col-md-4 text-center single_vegitable">
                    <h2>Fenugreek</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/spice/fenugreek.png" class="img-fluid" alt="">
                    <a href="{{ url('/spice9') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>
            
                <div class="col-md-4 text-center single_vegitable">
                    <h2>Garlic</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/spice/Garlic.png" class="img-fluid" alt="">
                    <a href="{{ url('/spice10') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>
            
                <div class="col-md-4 text-center single_vegitable">
                    <h2>Ginger</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/spice/ginger.png" class="img-fluid" alt="">
                    <a href="{{ url('/spice11') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>
            
            
                <div class="col-md-4 text-center single_vegitable">
                    <h2>Onion</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/spice/onion.png" class="img-fluid" alt="">
                    <a href="{{ url('/spice12') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>
            

            

            
            </div>



</section>

    <!-- veg cul part start here -->



    @endsection