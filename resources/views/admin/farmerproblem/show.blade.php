@extends('layouts.admin') 

@section('admin_content') 


<div class="container m-5">
<div class="row">
    <div class="col-md-11">
        <div class="h2">
        Full information of {{ Auth::user()->name }} Farm Problem

        </div>
    </div>
</div>
    <div class="row">
    <div class="col-md-5">
      <table class="table">
        <tr>
          <td>Problem ID</td>
          <td>:</td>
          <td>{{ $data->id }}</td>
        </tr>

        <tr>
          <td>Problem Name</td>
          <td>:</td>
          <td>{{ $data->problem_name }}</td>
        </tr>
        <tr>
          <td>Problem Title</td>
          <td>:</td>
          <td>{{ $data->problem_title }}</td>
        </tr>
        <tr>
          <td>Problem Detail</td>
          <td>:</td>
          <td>{{ $data->problem_detail }}</td>
        </tr>
        <tr>
          <td>Phone</td>
          <td>:</td>
          <td>{{ $data->phone }}</td>
        </tr>


        <tr>
          <td>Full Address</td>
          <td>:</td>
          <td>{{ $data->addresss }}</td>
        </tr>


        
      </table>
    </div>
    <div class="col-md-5">
      <table class="table">

        <tr>
          <td>Problem Created Date and Time</td>
          <td>:</td>
          <td>{{ $data->updated_at }}</td>
        </tr>

                <tr>
          <td>Problem Submitted By</td>
          <td>:</td>
          <td>{{ Auth::user()->name }}</td>
        </tr>
        
</table>
    </div>

    <div class="row text-center">
        <div class="col-md-4">


            <h4> Problem Image 1</h4>
                                                @if(!$data->problem_image1 == "")
                                                <a href="{{asset('uploads/nid/'.$data->problem_image1)}}" data-featherlight="image">
                                                <img src="{{asset('uploads/nid/'.$data->problem_image1)}}" class="img-fluid" alt="">
                                                </a>
                                                @else

                                                <img src="{{asset('uploads/No_image_available.svg.webp')}}" class="img-fluid" class="img-fluid" width="" alt="">
                                                @endif
        </div>

        <div class="col-md-4">

        <h4>Problem Image 2</h4>


                                                @if(!$data->problem_image2 == "")
                                                <a href="{{asset('uploads/profile/'.$data->problem_image2)}}" data-featherlight="image">
                                                <img src="{{asset('uploads/profile/'.$data->problem_image2)}}" alt="" class="img-fluid">
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