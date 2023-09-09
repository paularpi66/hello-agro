@extends('layouts.website') 
@section('website_content') 

@if(!$alldata->isEmpty())
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto m-5 text-center">
       
<h4 class=" mb-5">Your submiited problem details</h4>
            <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Problem ID</th>
      <th>Problem Name/Detail</th>
      <th>Problem Image</th>
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
  <p class="fw-bold mb-1">{{ $data->problem_name }}</p>
  <p class="text-muted mb-0">{{ $data->problem_title }}</p>
</div>
</div>
      </td>
      <td>

      @if(!$data->problem_image1 == "")
                                                <a href="{{asset('uploads/nid/'.$data->problem_image1)}}" data-featherlight="image">
                                                <img
              src="{{asset('uploads/nid/'.$data->problem_image1)}}"
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
      <td>{{ $data->status == 0 ? 'Pending' : 'Solved' }}</td>

    </tr>
    @endforeach
  </tbody>
</table>

          
        </div>
    </div>
</div>
@else
<div class="container pt-5">
  <div class="row">
    <div class="col-12 text-center">
    <h3>You haven't any problem</h3>
    <h4>Feel Free to Submit Your Problem</h4>
    </div>
  </div>
</div>
@endif
@endsection