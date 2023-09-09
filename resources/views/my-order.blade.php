@extends('layouts.website') 
@section('website_content') 

@if(!$alldata->isEmpty())

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto m-5 text-center">
       
<h4 class=" mb-5">Your all buying/investing details</h4>

            <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Order ID</th>
      <th>Name</th>
      <th>Amount</th>
      <th>Status</th>
      <th>Manage</th>
    </tr>
  </thead>
  <tbody>



  @foreach($alldata as $data) 
    
<tr>
  <td>{{ $data->id  }}</td>
  <td>{{ $data->full_name  }}</td>
  <td>{{ $data->total_amount  }}</td>
  <td>{{ $data->order_status == 0 ? 'Pending' : 'Completed' }}</td>
  <td>
    <a href="{{ url('/myorder/view/'.$data->id) }}"> View Detail </a>
  </td>
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
    <h3>You haven't order/invest any project</h3>
    <a href="{{ url('/projects') }}">Order Now</a>
    </div>
  </div>
</div>
@endif

@endsection