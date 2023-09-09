@extends('layouts.website')
@section('website_content')


    <!-- veg cul part start here -->


    <section>
        <div class="container swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <div class="row ">
                <div class="col-12 ">
                    <h2 class="section_heading py-5 text-uppercase ">Vegetable Cultivation</h2>
                </div>
            </div>

            <div class="row">

            @foreach($all_data as $single_data)
                <div class="col-md-4 text-center single_vegitable">
                    
                    @if(!$single_data->plant_name == "")
                    <h2>{{ $single_data->plant_name }}</h2>
                    @else
                    <h2> No Title Here</h2>
                    @endif

                                        @if(!$single_data->image == "")
                                        <img class="img-fluid" src="{{asset('uploads/image/'.$single_data->image)}}" alt="">
                                        @else
                                        <img src="{{asset('uploads/No_image_available.svg.webp')}}" class="img-fluid" width="261px" height="261px" alt="">
                                        @endif
                    <a href="#" class="btn single_veg_btn hvr-grow">{{ $single_data->btn_title }}</a>
                </div>
            @endforeach

                
            </div>
        </div>
    </section>


    <!-- veg cul part start here -->



    @endsection