@extends('layouts.website')
@section('website_content')



    <!-- AVAIALBE PROJECT part start here -->


    <section id="agri_sec">
        <div class="container swiper ">
            <div class="row ">
                <div class="col-12 ">
                    <h2 class="section_heading py-5 text-uppercase ">Agricultural Information</h2>
                </div>
            </div>














            <div class="row">

            @foreach($all_agri as $single_agri)


                <div class="col-md-4 mt-3">
                    <div class="card border_box my_card ">



                        @if(!$single_agri->image == "")
                                                <a href="{{ $single_agri->btn_title }}">
                                                <img src="{{asset('uploads/image/'.$single_agri->image)}}" class="card-img-top" alt="">
                                                </a>
                                                @else
                                                <a href="{{ $single_agri->btn_title }}">
                                                <img src="{{asset('uploads/No_image_available.svg.webp')}}" class="card-img-top" alt="">
                                                </a>
                                                @endif




                        <div class="card-body">
                            
                    @if(!$single_agri->info_title == "")
                    <a href="{{ $single_agri->btn_title }}">
                    <h5 class="card-title">{{ $single_agri->info_title }}</h5>

                    </a>
                    @else
                    <a href="{{ $single_agri->btn_title }}">
                    <h5 class="card-title"> No Title</h5>

                    </a>
                    @endif








                            @if(!$single_agri->description == "")
                            <a href="{{ $single_agri->btn_title }}">
                            <p class="card-text ">
                            {{ Str::limit($single_agri->description, 120) }}
                            </p>
                            </a>
                            @else
                            <a href="{{ $single_agri->btn_title }}">
                            <p class="card-text ">No Description</p>
                            </a>
                            @endif




                            <div class="call_to_action">
                            <a href="{{ $single_agri->btn_title }}" class="btn btn-primary btn_my ">See More</a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
            </div>
        </div>
    </section>


    <!-- AVAIALBE PROJECT part end here -->



    @endsection