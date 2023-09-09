@extends('layouts.website')
@section('website_content')


    <!-- veg cul part start here -->


    <section>
        <div class="container swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <div class="row ">
                <div class="col-12 ">
                    <h2 class="section_heading py-5 text-uppercase ">Goat Farming</h2>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4 text-center single_vegitable">
                    <h2>ব্ল্যাক বেঙ্গল ছাগল</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/cow/Black-bengol-goat.png" class="img-fluid" alt="">
                    <a href="{{ url('/goat1') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                
                <div class="col-md-4 text-center single_vegitable">
                    <h2>যমুনাপাড়ী ছাগল</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/cow/jamunapari-chagol.png" class="img-fluid" alt="">
                    <a href="{{ url('/goat2') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                
                <div class="col-md-4 text-center single_vegitable">
                    <h2>বারবারি ছাগল</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/cow/barbari-dou-pathi.png" class="img-fluid" alt="">
                    <a href="{{ url('/goat4') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4"></div>
                
                <div class="col-md-4 text-center single_vegitable">
                    <h2>ব্রাউন বেঙ্গল ছাগল</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/cow/brown-bengol.png" class="img-fluid" alt="">
                    <a href="{{ url('/goat3') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>
                <div class="col-md-4"></div>


                
                




            </div>

    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div></section>
   

    <!-- veg cul part start here -->



    @endsection