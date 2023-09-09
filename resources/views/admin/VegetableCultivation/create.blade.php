@extends('layouts.admin')
@section('admin_content')
<main class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h2>Add Vegetable Cultivation</h2>
            <form action="{{url('admin/addvegcul-sub')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="plant_name">Plant Name</label>
                    <input type="text" name="plant_name" class="form-control" id="plant_name" aria-describedby="emailHelp" placeholder="Section Title" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="btn_title">Button Title</label>
                    <input value="See more" type="text" name="btn_title" class="form-control" id="btn_title" aria-describedby="emailHelp" placeholder="Button Title" required>
                </div>
                
                <br>
                <div class="form-group">
                    <label for="btn_title">Description</label>
                    <input value="Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque neque debitis perferendis, iusto similique necessitatibus " type="text" name="description" class="form-control" id="btn_title" aria-describedby="emailHelp" placeholder="Description write hre" required>
                </div>

                

                <br>
                <div class="form-group">
                    <label for="plant_image">Image of the Plant</label>
                    <input type="file" name="img_plant" class="img_plant" class="form-control-file" id="plant_image" required>
                </div>

                <br>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
            </div>

            <div class="col-md-4 text-center">
                <h2>Sample Image</h2>
                <img src="{{asset('contents/admin/')}}/img/Bt_Eggplant.png" height="100px" class="img-fluid" alt="Bt_Eggplant">
                <p class="mt-3">Recommended Size 261px X 261px </p>
            </div>
        </div>
    </div>
</main>
@endsection