@extends('layouts.website')
@section('website_content')



    <!-- AVAIALBE PROJECT part start here -->


    <style>
        .btn.btn-primary.btn_my {
	width: 100%;
	margin-bottom: 17px;
        }
    </style>

    <section id="available_project">
        <div class="container">
            <div class="row ">
                <div class="col-12 ">
                    <h2 class="section_heading py-5 text-uppercase ">Available project for Investment</h2>
                </div>
            </div>














            <div class="row">
            @foreach($all_project as $single_project)

                <div class="col-md-4">
                    <div class="card border_box my_card ">
                        <div class="project_img ">
                            



                            @if(!$single_project->image == "")
                                                <img src="{{asset('uploads/image/'.$single_project->image)}}" class="card-img-top" alt="">
                                                @else
                                                <img src="{{asset('uploads/No_image_available.svg.webp')}}" class="card-img-top" alt="">
                                                @endif








                            <div class="project_text ">
                                <span>BDT {{$single_project->per_unit}} per unit</span>
                            </div>
                        
                        
                        </div>
                        <div class="card-body ">
                            <h5 class="card-title ">{{$single_project->name}}</h5>
                            <p class="card-text "> <span><i class="fa-sharp fa-solid fa-location-dot "></i> {{$single_project->location}}</span><br> {{$single_project->duration}} contract period with {{$single_project->return}} Return on Funding.</p>
                            <a href="{{url('/single-project/'.$single_project->id)}}" class="btn btn-primary btn_my ">Buy now</a>
                        </div>
                    </div>
                </div>

            @endforeach

            </div>
        </div>
    </section>


    <!-- AVAIALBE PROJECT part end here -->



    @endsection