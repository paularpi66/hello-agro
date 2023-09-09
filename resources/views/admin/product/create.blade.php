@extends('layouts.admin')
@section('admin_content')
<main class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h2>Add Product</h2>
            <form action="{{url('admin/addproduct-sub')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="" required>
                </div>
                <br>

                <div class="form-group">
                    <label for="name">Product Short Description</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="" required>
                </div>
                <br>

                <div class="form-group">
                    <label for="name">Product Long Description</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="" required>
                </div>
                <br>

                <div class="form-group">
                    <label for="name">Product Category</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="" required>
                </div>
                <br>

                <div class="form-group">
                    <label for="amount">Product Amount</label>
                    <input type="text" onkeyup="calc(this.value)" name="amount" class="form-control" id="amount" aria-describedby="emailHelp" placeholder="Example: 6000" required>
                </div>
                <br>


               

                <div class="form-group">
                    <label for="img_p">Image of the Product</label>
                    <input type="file" name="image" class="img_plant" class="form-control-file" id="img_p">
                </div>
<br>
                
                <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
            </div>

            <div class="col-md-4 text-center">
                <h2>Sample Image</h2>
                <img src="{{asset('contents/admin/')}}/img/sample_project_img.jpg" height="100px" class="img-fluid" alt="Bt_Eggplant">
                <p class="mt-3">Recommended Size 280px X 216px </p>
            </div>
        </div>
    </div>
</main>
@endsection