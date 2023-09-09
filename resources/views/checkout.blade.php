@extends('layouts.website')
@section('website_content')



 <div class="container my-5">
    <div class="row">
        <div class="col-md-12 mx-auto">
        <form method="post" >
      @csrf
        <div class="row">
        <div class="col-md-8 mb-4">
          <div class="card mb-4">
            <div class="card-header py-3">
              <h5 class="mb-0">Biling details</h5>
            </div>
            <div class="card-body">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row mb-4">
                <div class="form-outline">
                  <label class="form-label" for="form6Example1">Full name</label>
                  <input type="text" name="full_name" id="customer_name" value=" {{ Auth::user()->name }}" class="form-control" disabled>
                </div>
              </div>
              <!-- Text input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form6Example4">Full Address</label>
                <input name="full_address" type="text" id="address" class="form-control">
              </div>
              <!-- Email input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form6Example5">Email</label>
                <input type="email" name="email" value=" {{ Auth::user()->email }}" id="email" class="form-control" disabled>
              </div>
              <!-- Number input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form6Example6">Phone</label>
                <input name="phone" type="number" id="mobile" class="form-control">
                <input type="hidden" value="{{Cart::getSubTotal()}}" name="amount" id="total_amount" required/>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card mb-4">
            <div class="card-header py-3">
              <h5 class="mb-0">Summary</h5>
            </div>
            <div class="card-body">
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0"> Products <span>BDT {{Cart::getSubTotal()}}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                  <div>
                    <strong>Total amount</strong>
                    <strong>
                      <p class="mb-0">(including VAT)</p>
                    </strong>
                  </div>
                  <span>
                    <strong>BDT {{Cart::getSubTotal()}}</strong>
                  </span>
                </li>
              </ul>
            </div>
          </div>

          <div class="place_order">
            <button class="btn-block btn btn_my w-100" id="sslczPayBtn"
                        token="if you have any token validation"
                        postdata="your javascript arrays or objects which requires in backend"
                        order="If you already have the transaction generated for current order"
                        endpoint="{{ url('/pay-via-ajax') }}"> Pay Now
                </button>
          </div>
        </div>
        </div>
      </form>
        </div>
    </div>
 </div>









<!-- If you want to use the popup integration, -->
<script>
    var obj = {};
    obj.cus_name = $('#customer_name').val();
    obj.cus_phone = $('#mobile').val();
    obj.cus_email = $('#email').val();
    obj.cus_addr1 = $('#address').val();
    obj.amount = $('#total_amount').val();

    $('#sslczPayBtn').prop('postdata', obj);

    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR SANDBOX
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>
@endsection
