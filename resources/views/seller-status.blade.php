@extends('layouts.website') 
@section('website_content') 

@if(!$alldata->isEmpty())
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto m-5 text-center">
       
<h4 class=" mb-5">Your submiited appplicaton details</h4>
            <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Applicaton ID</th>
      <th>Your Name/Specialist Area</th>
      <th>Your Image</th>
      <th>Your Expected Profit</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
  @foreach($alldata as $data) 
    <tr>
      <td>
      {{ $data->id }}
      </td>
      <td>
      <div class="d-flex align-items-center">

<div class="ms-3">
  <p class="fw-bold mb-1">{{ $data->full_name }}</p>
  <p class="text-muted mb-0">{{ $data->specialist_area }}</p>
</div>
</div>
      </td>
      <td>

      @if(!$data->profile_photo == "")
                                                <a href="{{asset('uploads/profile/'.$data->profile_photo)}}" data-featherlight="image">
                                                <img
              src="{{asset('uploads/profile/'.$data->profile_photo)}}"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
                                                </a>
                                                @else
                                                <img
              src="{{asset('uploads/No_image_available.svg.webp')}}"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
                                                @endif

      </td>

      <td>{{ $data->expected_fee }}</td>

      <td>{{ $data->status == 0 ? 'Pending' : 'Approved' }}</td>

    </tr>
    @endforeach
  </tbody>
</table>

          
        </div>
    </div>
</div>

@if($data->status == 1)
<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <h3>Congrats, Now you are a registered seller on HelloAgro</h3>
      <h4><a href="{{ url('seller/me') }}">Click Here</a> for Login in Seller Panel</h4>
    </div>
  </div>
</div>
@endif
@else
<div class="container pt-5">
  <div class="row">
    <div class="col-12 text-center">
    <h3>You haven't apply anything</h3>
    <h4>Feel Free to Apply</h4>
    </div>
  </div>
</div>


@endif
@endsection