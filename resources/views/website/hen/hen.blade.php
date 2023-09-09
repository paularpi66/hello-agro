@extends('layouts.website')
@section('website_content')


    <!-- veg cul part start here -->


    <section>
        <div class="container swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <div class="row ">
                <div class="col-12 ">
                    <h2 class="section_heading py-5 text-uppercase ">Poultry Farming</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 text-center single_vegitable">
                    <h2>দেশী জাতের মুরগি</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/cow/deshi-murgi.png" class="img-fluid" alt="">
                    <a href="{{ url('/hen1') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>রোড আইল্যান্ড রেড (আর ,আই,আর)</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/cow/red-iland.png" class="img-fluid" alt="">
                    <a href="{{ url('/hen2') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>হোয়াইট লেগহর্ণ</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/cow/white-legout.png" class="img-fluid" alt="">
                    <a href="{{ url('/hen3') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>ফাওমি</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/cow/faumi.png" class="img-fluid" alt="">
                    <a href="{{ url('/hen4') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>সোনালী সংকর জাত </h2>
                    <img src="{{asset('contents/website/assets/')}}/img/cow/sonali-sonkor.png" class="img-fluid" alt="">
                    <a href="{{ url('/hen5') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>


            </div>

    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div></section>
   

    <!-- veg cul part start here -->



    @endsection