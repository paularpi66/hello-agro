@extends('layouts.admin')
@section('admin_content')
<main class="content">
    <div class="container">
        <div class="row">
        <div class="col-md-6 mx-auto">
                <h2>Edit Project</h2>
            <form action="{{url('admin/project-update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Project Name</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" value="{{ $data->name }}" placeholder="" required>
                    <input type="hidden" name="id" value="{{ $data->id }}">
                </div>
                <br>

                <div class="form-group">
                    <label for="amount">Project Amount</label>
                    <input type="text" name="amount" class="form-control" id="amount" aria-describedby="emailHelp" value="{{ $data->amount }}" placeholder="Example: 6000" required>
                </div>
                <br>


                <div class="form-group">
                    <label for="per_unit">Per Unit Charge</label>
                    <input type="text" name="per_unit" class="form-control" id="per_unit" aria-describedby="emailHelp" value="{{ $data->per_unit }}" placeholder="Example: 6000(Same as the Amount)" required>
                </div>
                <br>


                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name="location" class="form-control" id="location" aria-describedby="emailHelp" value="{{ $data->location }}" placeholder="Example: Dhaka" required>
                </div>
                <br>


                <div class="form-group">
                    <label for="tagline">Tagline</label>
                    <input type="text" name="tagline" class="form-control" id="tagline" aria-describedby="emailHelp" value="{{ $data->tagline }}" placeholder="" required>
                </div>
                <br>


                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" name="duration" class="form-control" id="duration" aria-describedby="emailHelp" value="{{ $data->duration }}" placeholder="Example: 7 months" required>
                </div>
                <br>


                <div class="form-group">
                    <label for="return">Return</label>
                    <input type="text" name="return" class="form-control" id="return" aria-describedby="emailHelp" value="{{ $data->return }}" placeholder="Example: 10%" required>
                </div>
                <br>


                <div class="form-group">
                    <label for="net_profit">Net Profit</label>
                    <input type="text" name="net_profit" class="form-control" id="net_profit" aria-describedby="emailHelp" value="{{ $data->net_profit }}" placeholder="Example: 600" required>
                </div>
                <br>


                <div class="form-group">
                    <label for="profit">Profit</label>
                    <input type="text" name="profit" class="form-control" id="profit" aria-describedby="emailHelp" value="{{ $data->profit }}" placeholder="Example: 12%" required>
                </div>
                <br>


                <div class="form-group">
                    <label for="risk">Risk</label>
                    <input type="text" name="risk" class="form-control" id="risk" aria-describedby="emailHelp" value="{{ $data->risk }}" placeholder="Example: 50%" required>
                </div>
                <br>

                <div class="form-group">
                    <label for="img_p">New Image of the Project</label>
                    <input type="file" name="image" class="img_plant" class="form-control-file" id="img_p">
                </div>
<br>
                
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            </div>

            <div class="col-md-4 text-center">
                <h2>Present Image</h2>
                <img src="{{asset('uploads/image/'.$data->image)}}" height="100px" class="img-fluid" alt="Bt_Eggplant">
                <p class="mt-3">Recommended Size 280px X 216px </p>
            </div>
        </div>
    </div>
</main>
@endsection