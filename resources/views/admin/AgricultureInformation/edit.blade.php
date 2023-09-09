@extends('layouts.admin')
@section('admin_content')
<main class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h2>Edit Agricultural Information</h2>
            <form action="{{url('admin/agriinfo-update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="plant_name">Plant Name</label>
                    <input type="text" name="plant_name" class="form-control" id="plant_name" aria-describedby="emailHelp" value="{{ $data->info_title }}" placeholder="Section Title">
                    <input type="hidden" name="id" value="{{ $data->id }}">
                </div>
                <br>
                <div class="form-group">
                    <label for="btn_title">Button Link</label>
                    <input value="{{ $data->btn_title }}" type="text" name="btn_title" class="form-control" id="btn_title" aria-describedby="emailHelp" placeholder="Button Title">
                </div>
                
                <br>
                <div class="form-group">
                    <label for="descrip">Description</label>
                    <input value="{{ $data->description }}" type="text" name="description" class="form-control" id="descrip" aria-describedby="emailHelp" placeholder="Description write hre">
                </div>

                

                <br>
                <div class="form-group">
                    <label for="plant_image">Image of the Plant</label>
                    <input type="file" name="img_plant" class="img_plant" class="form-control-file" id="plant_image">
                </div>

                <br>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            </div>

            <div class="col-md-4 text-center">
                <h2>Present Image</h2>
                @if(!$data->image == "")
                                        <img class="img-fluid" src="{{asset('uploads/image/'.$data->image)}}" alt="">
                                        @else
                                        <img src="{{asset('uploads/No_image_available.svg.webp')}}" class="img-fluid" width="280px" height="216px" alt="">
                                        @endif
            </div>
        </div>
    </div>
</main>
@endsection