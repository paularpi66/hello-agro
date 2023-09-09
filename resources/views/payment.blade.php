@extends('layouts.website') 
@section('website_content') 
<form method="post" action="{{url('payment-save')}}">
      @csrf

<input type="hidden" name="order_id" value="{{$id}}">

<div class="container">
  <div class="row">
    <div class="col-lg-12 mb-lg-0 mb-3 text-center">
      <img src="{{asset('contents/website/assets')}}/img/payment_logo.png" alt="">
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <h2></h2>
              <h5>Bkash</h5>
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>1. Send Money <b>{{Cart::getSubTotal()}} TK</b>  TK to this Bkash No: <b>01632319899</b>
              </p>
              <label for="">2. Please put your bkash no here</label>
              <input type="text" id="bkash_no" name="bkash_no">
              <br>
              <br>
              <label for="">3. Please put transection id here</label>
              <input type="text" name="bkash_txnl">
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <h5>Rocket</h5>
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>1. Send Money <b>{{Cart::getSubTotal()}} TK</b> to this Rocket No: <b>01632319899</b>
              </p>
              <label for="">2. Please put your rocket no here</label>
              <input type="text" id="rocket_no" name="rocket_no">
              <br>
              <br>
              <label for="">3. Please put transection id here</label>
              <input type="text" name="rocket_txnl">
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <h5>Nagad</h5>
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>1. Send Money <b>{{Cart::getSubTotal()}} TK</b> to this Nagad No: <b>01632319899</b>
              </p>
              <label for="">2. Please put your nagad no here</label>
              <input type="text" id="nagad_no" name="nagad_no">
              <br>
              <br>
              <label for="">3. Please put transection id here</label>
              <input type="text" name="nagad_txnl">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-lg-12">
    <button onclick="return showValidationError();" class="w-100 btn btn-primary btn_my" type="submit">
        Submit your payment detail
</button>
    </div>
  </div>
</div>


</form>




    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');








.container .card .img-box {
    width: 80px;
    height: 50px;
}

.container .card img {
    width: 100%;
    object-fit: fill;
}

.container .card .number {
    font-size: 24px;
}







.form__div {
    height: 50px;
    position: relative;
    margin-bottom: 24px;
}

.form-control {
    width: 100%;
    height: 45px;
    font-size: 14px;
    border: 1px solid #DADCE0;
    border-radius: 0;
    outline: none;
    padding: 2px;
    background: none;
    z-index: 1;
    box-shadow: none;
}

.form__label {
    position: absolute;
    left: 16px;
    top: 10px;
    background-color: #fff;
    color: #80868B;
    font-size: 16px;
    transition: .3s;
    text-transform: uppercase;
}

.form-control:focus+.form__label {
    top: -8px;
    left: 12px;
    color: #1A73E8;
    font-size: 12px;
    font-weight: 500;
    z-index: 10;
}

.form-control:not(:placeholder-shown).form-control:not(:focus)+.form__label {
    top: -8px;
    left: 12px;
    font-size: 12px;
    font-weight: 500;
    z-index: 10;
}

.form-control:focus {
    border: 1.5px solid #1A73E8;
    box-shadow: none;
}
    </style>


<script>
          function showValidationError() {
            var counter = 0;

            if (document.getElementById("bkash_no").value != "") {
                counter++;
            }
            if (document.getElementById("nagad_no").value != "") {
                counter++;
            }
            if (document.getElementById("rocket_no").value != "") {
                counter++;
            }
            if (counter < 1) {
                alert("You haven't fillup your payment details");
                return false;
            }
            return true;
        }
</script>

@endsection