@extends('layouts.website')
@section('website_content')



    <!-- AVAIALBE vet part start here -->


    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 py-5">
                <h2>
                    Hello Agro Vets
                </h2>
            </div>
        </div>
        <div class="row">

     

      @foreach($alldata as $single)

      <div class="col-md-4">
            
            <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{asset('uploads/profile/'.$single->profile_photo)}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{ $single->full_name }}</h5>
              <p class="card-text"><b>{{ $single->specialist_area }} Expert</b></p>
              <p class="card-text"><small class="text-muted">BVC Reg No: {{ $single->bvc_reg_no }}</small></p>
            </div>
          </div>
        </div>
      </div>
      
              </div>
      @endforeach
      <!-- column  -->
      <!-- column  -->

      </div>
    </div>

      <!-- column  -->
      
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <marquee behavior="alternate" direction="right">
                <h4>Need a Vet? <a href="{{ url('/farmerproblem') }}">Submit Your Farm Problem ?</a></h4>
            </marquee>
        </div>
    </div>
</div>

    <!-- AVAIALBE PROJECT part end here -->


    @endsection