@extends('layouts.website')
@section('website_content')


    <!-- veg cul part start here -->


    <section>
        <div class="container swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <div class="row ">
                <div class="col-12 ">
                    <h2 class="section_heading py-5 text-uppercase ">Oil Cultivation</h2>
                </div>
            </div>sunflower

            <div class="row">

            
                <div class="col-md-4 text-center single_vegitable">
                    <h2>Peantuts</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/oil/penuts.png" class="img-fluid" alt="">
                    <a href="{{ url('/peantuts') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>
            
                <div class="col-md-4 text-center single_vegitable">
                    <h2>Mustard</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/oil/Maustred.png" class="img-fluid" alt="">
                    <a href="{{ url('/mustard') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>
            
                <div class="col-md-4 text-center single_vegitable">
                    <h2>Soybean</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/oil/Soyabin.png" class="img-fluid" alt="">
                    <a href="{{ url('/soybean') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4 mx-auto text-center single_vegitable">
                    <h2>SunflowerSunflower</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/oil/sunflowe.png" class="img-fluid" alt="">
                    <a href="{{ url('/sunflower') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>
            
                <div class="col-md-4 mx-auto text-center single_vegitable">
                    <h2>Sesame seeds</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/oil/Sesame.png" class="img-fluid" alt="">
                    <a href="{{ url('/sesamseeds') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>
                <div class="col-md-2"></div>
            </div>



</section>

    <!-- veg cul part start here -->



    @endsection