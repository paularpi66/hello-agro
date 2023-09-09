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
                    <h2 class="section_heading py-5 text-uppercase ">Available product for Buying</h2>
                </div>
            </div>














            <div class="row">
            @foreach($products as $single_product)

            <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
            data-mdb-ripple-color="light">



            


                                        @if(!$single_product->image == "")
                                        <a href="{{url('/single-product/'.$single_product->id)}}">
                                        <img class="w-100" height="272px" src="{{asset('uploads/product/'.$single_product->image)}}" alt="">
                                        </a>
                                        @else
                                        <a href="{{url('/single-product/'.$single_product->id)}}">
                                        <img class="w-100" height="272px" src="{{asset('uploads/noimage.jpg')}}" alt="">
                                        </a>
                                        @endif



            <a href="#!">
              <div class="mask">
                <div class="d-flex justify-content-start align-items-end h-100"></div>
              </div>
              <div class="hover-overlay">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </div>
            </a>
          </div>
          <div class="card-body">
            <a href="" class="text-reset">
              <a href="{{url('/single-product/'.$single_product->id)}}"><h5 class="card-title mb-3">{{ $single_product->name }}</h5></a>
            </a>
            <a href="" class="text-reset">
              <p>
              @if($single_product->category == "")
                                No Category   
                                @else
                                {{$single_product->category->name}}
                                @endif
              
              
            
            
            </p>
            </a>
            <h6 class="mb-3">	&#2547;{{ $single_product->price }}</h6>

            <a href="{{url('/single-product/'.$single_product->id)}}" class="btn btn-primary btn_my ">Buy now</a>
          </div>
        </div>
      </div>

            @endforeach

            </div>
        </div>
    </section>


    <!-- AVAIALBE PROJECT part end here -->



    @endsection