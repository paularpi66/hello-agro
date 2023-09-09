@extends('layouts.website') 
@section('website_content') 

@if(!$alldata->isEmpty())

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto m-5 text-center">
       
<h4 class=" mb-5">Your invest application details</h4>

            <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Application ID</th>
      <th>Farm Name/Category</th>
      <th>Amount You Want</th>
      <th>Return You Want to Provide</th>
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

<div class="ms-3 text-center">
  <p class="fw-bold mb-1 text-cente">{{ $data->farm_name }}</p>
  <p class="text-muted mb-0 text-cente">{{ $data->farm_category }}</p>
</div>
</div>
      </td>
      <td>
      {{ $data->req_amount }}
     

      </td>

      <td>
      {{ $data->return_invest }}
     

      </td>


      <td>{{ $data->status == 0 ? 'Pending' : 'Approved' }}</td>

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
    <h3>You haven't apply anything</h3>
    <h4>Feel Free to Apply</h4>
    </div>
  </div>
</div>
@endif

@endsection