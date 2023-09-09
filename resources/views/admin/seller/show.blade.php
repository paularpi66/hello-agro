@extends('layouts.admin') 

@section('admin_content') 


<div class="container m-5">
<div class="row">
    <div class="col-md-11">
        <div class="h2">
        Full information of {{ $data->full_name }} Application

        </div>
    </div>
</div>
    <div class="row">
    <div class="col-md-5">
      <table class="table">
        <tr>
          <td>Apply ID</td>
          <td>:</td>
          <td>{{ $data->id }}</td>
        </tr>
        <tr>
          <td>Father Name</td>
          <td>:</td>
          <td>{{ $data->fathername }}</td>
        </tr>
        <tr>
          <td>Mother Name</td>
          <td>:</td>
          <td>{{ $data->mothername }}</td>
        </tr>
        <tr>
          <td>Email</td>
          <td>:</td>
          <td>{{ $data->email }}</td>
        </tr>
        <tr>
          <td>Phone</td>
          <td>:</td>
          <td>{{ $data->phone }}</td>
        </tr>


        <tr>
          <td>BVC Reg No</td>
          <td>:</td>
          <td>{{ $data->bvc_reg_no }}</td>
        </tr>
        <tr>
          <td>Experience</td>
          <td>:</td>
          <td>{{ $data->experience }}</td>
        </tr>

        <tr>
          <td>Full Address</td>
          <td>:</td>
          <td>{{ $data->full_address }}</td>
        </tr>
        <tr>
          <td>Specialist Area</td>
          <td>:</td>
          <td>{{ $data->specialist_area }}</td>
        </tr>

        
      </table>
    </div>
    <div class="col-md-5">
      <table class="table">
        <tr>
          <td>Expected Amount</td>
          <td>:</td>
          <td>{{ $data->expected_fee }}</td>
        </tr>

        <tr>
          <td>District</td>
          <td>:</td>
          <td>{{ $data->district }}</td>
        </tr>
        <tr>
          <td>Apply Date and Time</td>
          <td>:</td>
          <td>{{ $data->updated_at }}</td>
        </tr>
        
</table>
    </div>

    <div class="row text-center">
        <div class="col-md-4">


            <h4> NID of {{ $data->full_name }}</h4>
                                                @if(!$data->nid == "")
                                                <a href="{{asset('uploads/nid/'.$data->nid_pic)}}" data-featherlight="image">
                                                <img src="{{asset('uploads/nid/'.$data->nid_pic)}}" class="img-fluid" alt="">
                                                </a>
                                                @else

                                                <img src="{{asset('uploads/No_image_available.svg.webp')}}" class="img-fluid" class="img-fluid" width="" alt="">
                                                @endif
        </div>

        <div class="col-md-4">

        <h4>Photo of {{ $data->full_name }}</h4>


                                                @if(!$data->profile_photo == "")
                                                <a href="{{asset('uploads/profile/'.$data->profile_photo)}}" data-featherlight="image">
                                                <img src="{{asset('uploads/profile/'.$data->profile_photo)}}" alt="" class="img-fluid">
                                                </a>
                                                @else
                                                <img src="{{asset('uploads/No_image_available.svg.webp')}}" class="img-fluid" class="img-fluid" width="" alt="">
                                                @endif
        </div>
    </div>
    </div>
</div>






<style>
     tr > td:first-child {
    font-weight: bold;
}

tr > td:last-child {
    font-size: 20px
}
</style>

@endsection