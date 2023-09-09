@extends('layouts.website') 
@section('website_content')
<!-- checkout part start here -->
<div class="container mt-5">
  <section>
    <div class="">
      <form method="post" action="{{url('checkout')}}">
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


              <div class="form-outline mb-4">

                <label class="form-label">I'm buying</label>
                                <select class="form-control" name="order_type" required>
                                    <option disabled selected>Order Type</option>
                                    <option value="1">Project</option>
                                    <option value="2">Product</option>
                                </select>
              </div>
                




              <div class="form-outline">
                  <label class="form-label" for="form6Example1">Full name</label>
                  <input type="text" value="{{ Auth::user()->name}}" name="full_name" class="form-control" required>

<input type="hidden" name="total_amount" value="{{ Cart::getTotal() }}">
                </div>
              </div>




              <!-- Text input -->
              <div class="form-outline mb-4">

                <label class="form-label">Country</label>
                                <select class="form-control" name="country" required>
                                    <option disabled>Choose country</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                </select>
              </div>

              <!-- Text input -->
              <div class="form-outline mb-4">

                <label class="form-label">Town / City</label>
                <input class="form-control" value="{{ Auth::user()->town_city}}" type="text" name="city_town" required>

              </div>
              <!-- Text input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form6Example4">Full Address</label>
                <input class="form-control" value="{{ Auth::user()->full_address}}" type="text" placeholder="Street address" name="full_address" required>               </div>
              <!-- Email input -->
              <div class="form-outline mb-4">
                <label>Email <span>*</span></label>
                                <input class="form-control" value="{{ Auth::user()->email}}" type="email" name="email"  required>
              </div>
              <!-- Email input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form6Example5">Zip code</label>
                <input class="form-control" value="{{ Auth::user()->zip_code}}" type="text" name="zip_code" required>
              </div>
              <!-- Number input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form6Example6">Phone</label>
                <input class="form-control" value="{{ Auth::user()->phone}}" type="text" name="phone" required>
              </div>
              <!-- Number input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form6Example6">Order Note</label>
                <textarea class="form-control" name="order_note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
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
            <button type="subnit" class="btn btn_my w-100" >Pay Now</button>
          </div>
        </div>
        </div>
      </form>
    </div>
  </section>
</div>
<!-- checkout part end here --> 
@endsection