@extends('layouts.website')
@section('website_content')


    <!-- veg cul part start here -->


    <section>
        <div class="container swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <div class="row ">
                <div class="col-12 ">
                    <h2 class="section_heading py-5 text-uppercase ">Flower Cultivation</h2>
                </div>
            </div>

            <div class="row">

            
                <div class="col-md-4 text-center single_vegitable">
                    <h2>African daisy</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/flower/African-daisy.png" class="img-fluid" alt="">
                    <a href="{{ url('/africandaisy') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>


            
                <div class="col-md-4 text-center single_vegitable">
                    <h2>Alpinia</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/flower/Alpinia.png" class="img-fluid" alt="">
                    <a href="{{ url('/alpinia') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>


            
                <div class="col-md-4 text-center single_vegitable">
                    <h2>Bougainvillea</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/flower/Bougainvillea.png" class="img-fluid" alt="">
                    <a href="{{ url('bougainvillea') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>


            
                <div class="col-md-4 text-center single_vegitable">
                    <h2>Cactus Paniculata</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/flower/cactus-paniculata.png" class="img-fluid" alt="">
                    <a href="{{ url('/cactuspaniculata') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>Chrysanthemum crassum</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/flower/Chrysanthemum-crassum.png" class="img-fluid" alt="">
                    <a href="{{ url('/chrysanthemumcrassum') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>Dahlia</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/flower/dahlia.png" class="img-fluid" alt="">
                    <a href="{{ url('/dahlia') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>


                <div class="col-md-4 text-center single_vegitable">
                    <h2>Flamingo Flower</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/flower/flamingo-flower.png" class="img-fluid" alt="">
                    <a href="{{ url('/flamingoflower') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>


                <div class="col-md-4 text-center single_vegitable">
                    <h2>Gladiolus</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/flower/gladiolus.png" class="img-fluid" alt="">
                    <a href="{{ url('/gladiolus') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>



                <div class="col-md-4 text-center single_vegitable">
                    <h2>Gypsophila Paniculata</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/flower/Gypsophila-paniculata.png" class="img-fluid" alt="">
                    <a href="{{ url('/gypsophilapaniculata') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>




                <div class="col-md-4 text-center single_vegitable">
                    <h2>Lily</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/flower/Lily.png" class="img-fluid" alt="">
                    <a href="{{ url('/lily') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>




                <div class="col-md-4 text-center single_vegitable">
                    <h2>Marigolds</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/flower/Marigolds.png" class="img-fluid" alt="">
                    <a href="{{ url('/marigolds') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>


                <div class="col-md-2"></div>

                <div class="col-md-4 text-center single_vegitable">
                    <h2>Archid</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/flower/orchid.png" class="img-fluid" alt="">
                    <a href="{{ url('/archid') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>





                <div class="col-md-4 text-center single_vegitable">
                    <h2>Tuberose</h2>
                    <img src="{{asset('contents/website/assets/')}}/img/flower/Tuberose.png" class="img-fluid" alt="">
                    <a href="{{ url('/tuberose ') }}" class="btn single_veg_btn hvr-grow">See more</a>
                </div>

                <div class="col-md-2"></div>


               


            </div>

</section>

    <!-- veg cul part start here -->



    @endsection