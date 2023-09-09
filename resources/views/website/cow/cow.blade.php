@extends('layouts.website')
@section('website_content')


    <!-- veg cul part start here -->


    <section>
        <div class="container swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <div class="row ">
                <div class="col-12 ">
                    <h2 class="section_heading py-5 text-uppercase ">Cow Farming</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 text-center single_vegitable">
                    <h2>শাহিওয়াল গরু</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/cow/siddhi-goru.png" class="img-fluid" alt="">
                    <a href="{{ url('/cow1') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>সিদ্ধি গরু</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/cow/siddhi-goru.png" class="img-fluid" alt="">
                    <a href="{{ url('/cow2') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>ফিজিয়ান গরু</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/cow/frijian-goru.png" class="img-fluid" alt="">
                    <a href="{{ url('/cow3') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>সংকর জাতের গরু</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/cow/sonkor-jater-goru.png" class="img-fluid" alt="">
                    <a href="{{ url('/cow4') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>ভাল দুগ্ধবতী গাভী</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/cow/valo-duddhogavi-goru.png" class="img-fluid" alt="">
                    <a href="{{ url('/cow5') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>


            </div>

    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div></section>
   

    <!-- veg cul part start here -->



    @endsection