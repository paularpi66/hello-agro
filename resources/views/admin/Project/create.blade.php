@extends('layouts.admin')
@section('admin_content')
<main class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h2>Add Project</h2>
            <form action="{{url('admin/addproject-sub')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Project Name</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="" required>
                </div>
                <br>

                <div class="form-group">
                    <label for="amount">Project Amount</label>
                    <input type="text" onkeyup="calc(this.value)" name="amount" class="form-control" id="amount" aria-describedby="emailHelp" placeholder="Example: 6000" required>
                </div>
                <br>


                <div class="form-group">
                    <label for="per_unit">Per Unit Charge</label>
                    <input type="text" name="per_unit" class="form-control" id="per_unit" aria-describedby="emailHelp" placeholder="Example: 6000(Same as the Amount)" required>
                </div>
                <br>


                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name="location" class="form-control" id="location" aria-describedby="emailHelp" placeholder="Example: Dhaka" required>
                    <input type="hidden" value="nothing" name="tagline" class="form-control" id="tagline" aria-describedby="emailHelp" placeholder="">
                </div>
                <br>




                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" name="duration" class="form-control" id="duration" aria-describedby="emailHelp" placeholder="Example: 7 months" required>
                </div>
                <br>


                <div class="form-group">
                    <label for="return">Return (Example 10%)</label>
                    <input type="text" name="return" onkeyup="calc(this.value)" class="form-control return" id="return" aria-describedby="emailHelp" value="10%" placeholder="Example: 10" required>
                </div>
                <br>


                <div class="form-group">
                    <label for="net_profit">Net Profit</label>
                    <input type="text" name="net_profit" class="form-control" id="net_profit" aria-describedby="emailHelp" placeholder="" required disabled>
                </div>
                <br>


                <script>

                    
                    function calc (value){
                        var amount = document.getElementById('amount').value;
                        let return_inv = value ;
                        document.getElementById('profit').value = return_inv;
                        return_inv = return_inv.replace(/%/g, '');
                        Number(return_inv);
                        document.getElementById('net_profit').value = (amount*return_inv)/100;
                        document.getElementById('per_unit').value = amount;
                        
                    }
                </script>

                <div class="form-group">
                    <label for="profit">Profit (Example 10%)</label>
                    <input type="text" name="profit" class="form-control" id="profit" aria-describedby="emailHelp" value="10%" disabled placeholder="Example: 12%" required>
                </div>
                <br>


                <div class="form-group">
                    <label for="risk">Risk</label>
                    <input type="text" name="risk" class="form-control" id="risk" aria-describedby="emailHelp" placeholder="Example: 50%" required>
                </div>
                <br>

                <div class="form-group">
                    <label for="img_p">Image of the Project</label>
                    <input type="file" name="image" class="img_plant" class="form-control-file" id="img_p">
                </div>
<br>
                
                <button type="submit" class="btn btn-primary">Add</button>
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