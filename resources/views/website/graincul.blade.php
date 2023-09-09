@extends('layouts.website')
@section('website_content')


    <!-- veg cul part start here -->


    <section>
        <div class="container swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <div class="row ">
                <div class="col-12 ">
                    <h2 class="section_heading py-5 text-uppercase ">Grain Cultivation</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 text-center single_vegitable">
                    <h2>Corn</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/grain/corn.png" class="img-fluid" alt="">
                    <a href="{{ url('/corn-all') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>Baby Corn</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/grain/baby-corn.png" class="img-fluid" alt="">
                    <a href="{{ url('/baby-corn') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>Wheat</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/grain/wheat.png" class="img-fluid" alt="">
                    <a href="{{ url('/wheat') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>Barley</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/grain/barley.png" class="img-fluid" alt="">
                    <a href="{{ url('/barli') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>Foxtail Millet</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/grain/foxtail-millet.png" class="img-fluid" alt="">
                    <a href="{{ url('/coun') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>Oats</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/grain/oats.png" class="img-fluid" alt="">
                    <a href="{{ url('/china') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>


            </div>

    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div></section>
   

    <!-- veg cul part start here -->



    @endsection