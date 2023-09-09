@extends('layouts.website')
@section('website_content')


    <!-- veg cul part start here -->


    <section>
        <div class="container swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <div class="row ">
                <div class="col-12 ">
                    <h2 class="section_heading py-5 text-uppercase ">Fruit Cultivation</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 text-center single_vegitable">
                    <h2>Amra</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/fruit/Amra.png" class="img-fluid" alt="">
                    <a href="{{ url('/amra') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>



                <div class="col-md-4 text-center single_vegitable">
                    <h2>Banana</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/fruit/Banana.png" class="img-fluid" alt="">
                    <a href="{{ url('/banana') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>Burmese-Grape</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/fruit/Burmese-Grape.png" class="img-fluid" alt="">
                    <a href="{{ url('/burmesegrape') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>Carambola</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/fruit/Carambola.png" class="img-fluid" alt="">
                    <a href="{{ url('/carambola') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>coconut</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/fruit/coconut.png" class="img-fluid" alt="">
                    <a href="{{ url('/coconut') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>Guava</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/fruit/Guava.png" class="img-fluid" alt="">
                    <a href="{{ url('/guava') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>Indian Blackberry</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/fruit/Indian-blackberry.png" class="img-fluid" alt="">
                    <a href="{{ url('/indianblackberry') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>Jackfruit</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/fruit/Jackfruit.png" class="img-fluid" alt="">
                    <a href="{{ url('/jackfruit') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>Lemon</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/fruit/Lemon.png" class="img-fluid" alt="">
                    <a href="{{ url('/lemon') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>Mango</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/fruit/mango.png" class="img-fluid" alt="">
                    <a href="{{ url('/mango') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>


                <div class="col-md-4 text-center single_vegitable">
                    <h2>Olive</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/fruit/olive.png" class="img-fluid" alt="">
                    <a href="{{ url('/olive') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>Orange</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/fruit/Orange.png" class="img-fluid" alt="">
                    <a href="{{ url('/orange') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>Stone Apple</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/fruit/Stone-apple.png" class="img-fluid" alt="">
                    <a href="{{ url('/stoneapple') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>Custard Apple</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/fruit/Sugar-apple.png" class="img-fluid" alt="">
                    <a href="{{ url('/custardapple') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>Sweet-Orange</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/fruit/SWEET-ORANGES.png" class="img-fluid" alt="">
                    <a href="{{ url('/sweetorange') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>Termarind</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/fruit/Termarind.png" class="img-fluid" alt="">
                    <a href="{{ url('/termarind') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>Watermelon</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/fruit/watermelon.png" class="img-fluid" alt="">
                    <a href="{{ url('/watermelon') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>Wax-apple</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/fruit/wax-apple.png" class="img-fluid" alt="">
                    <a href="{{ url('/waxapple') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>



            </div>

    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div></section>
   

    <!-- veg cul part start here -->



    @endsection