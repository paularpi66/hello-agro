@extends('layouts.seller')
@section('admin_content')
<main class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h2>Add Category</h2>
            <form action="{{url('/seller/me/addcategory/submit')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="" required>
                </div>
                <br>

                
            <br>
                
                <button type="submit" class="btn btn-primary">Add Category</button>
            </form>
            </div>


        </div>
    </div>
</main>
@endsection