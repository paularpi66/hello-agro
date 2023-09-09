@extends('layouts.website')
@section('website_content')


    <!-- veg cul part start here -->


    <section>
        <div class="container swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <div class="row ">
                <div class="col-12 ">
                    <h2 class="section_heading py-5 text-uppercase ">Vegitable Cultivation</h2>
                </div>
            </div>

            <div class="row">

            
                <div class="col-md-4 text-center single_vegitable">
                    <h2>BT EGGPLANT</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/vegetables/Bt-Eggplant.png" class="img-fluid" alt="">
                    <a href="{{ url('/bt_begun') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>EGGPLANT</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/vegetables/Eggplant.png" class="img-fluid" alt="">
                    <a href="{{ url('/begun') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>


                <div class="col-md-4 text-center single_vegitable">
                    <h2>TOMATO</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/vegetables/Tomato.png" class="img-fluid" alt="">
                    <a href="{{ url('/tomato') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>CAULIFLOWER</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/vegetables/cauliflower.png" class="img-fluid" alt="">
                    <a href="{{ url('/fulkopi') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>RADISH</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/vegetables/Radish.png" class="img-fluid" alt="">
                    <a href="{{ url('/mula') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>BITTER GOURD</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/vegetables/Bitter-gourd.png" class="img-fluid" alt="">
                    <a href="{{ url('/korola') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>GOURD</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/vegetables/gourd.png" class="img-fluid" alt="">
                    <a href="{{ url('/lau') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>PUMKIN</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/vegetables/pumpkin.png" class="img-fluid" alt="">
                    <a href="{{ url('/mistikumra') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>HYACINTH BEAN</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/vegetables/Hyacinth-bean.png" class="img-fluid" alt="">
                    <a href="{{ url('/sim') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>PEACOD</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/vegetables/peacod.png" class="img-fluid" alt="">
                    <a href="{{ url('/peacod') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>BUSH BEANS</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/vegetables/bush-beans.png" class="img-fluid" alt="">
                    <a href="{{ url('/bushbeans') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>RED AMARANTH</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/vegetables/Red-amaranth.png" class="img-fluid" alt="">
                    <a href="{{ url('/redamaranth') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>WATER AMARANTH</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/vegetables/Water-amaranth.png" class="img-fluid" alt="">
                    <a href="{{ url('/wateramarnath') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>LETTUCE</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/vegetables/Lettuce.png" class="img-fluid" alt="">
                    <a href="{{ url('/lettuce') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>LUFFA</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/vegetables/Luffa.png" class="img-fluid" alt="">
                    <a href="{{ url('/luffa') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>MALABR SPINACH</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/vegetables/Malabar-spinach.png" class="img-fluid" alt="">
                    <a href="{{ url('/malabrspinach') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>BROCCOLI</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/vegetables/Broccoli.png" class="img-fluid" alt="">
                    <a href="{{ url('/broccoli') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>SPINACH</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/vegetables/Spinach.png" class="img-fluid" alt="">
                    <a href="{{ url('/spinach') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>


                <div class="col-md-4 text-center single_vegitable">
                    <h2>HYBRIDE EGG PLANT</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/vegetables/Hyacinth-bean.png" class="img-fluid" alt="">
                    <a href="{{ url('/hybrideggplant') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>


                <div class="col-md-4 text-center single_vegitable">
                    <h2>LONG BEANS</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/vegetables/long-beans(borboti).jpg" class="img-fluid" alt="">
                    <a href="{{ url('/longbeans') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>


                <div class="col-md-4 text-center single_vegitable">
                    <h2>POTOL</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/vegetables/Potol.png" class="img-fluid" alt="">
                    <a href="{{ url('/potol') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>


                <div class="col-md-4 text-center single_vegitable">
                    <h2>SAJINA</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/vegetables/sajina.png" class="img-fluid" alt="">
                    <a href="{{ url('/sajina') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>


    


                <div class="col-md-4 text-center single_vegitable">
                    <h2>SPONGE GOURD</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/vegetables/Sponge-Gourd-(Dhundul).png" class="img-fluid" alt="">
                    <a href="{{ url('/ ') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>




            </div>

</section>

    <!-- veg cul part start here -->



    @endsection