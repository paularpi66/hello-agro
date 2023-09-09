@extends('layouts.website')
@section('website_content')


    <!-- cart part start here -->

    <section class="vh-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <p><span class="h2">Shopping Cart</span><span class="h4">({{ Cart::getTotalQuantity() }} item in your cart) <small>(Don't add product and project at a time)</small></span></p>

                    <div class="card mb-4" style="background-color: #ddd;">
                        <div class="card-body p-4">
                        @if(!Cart::getContent()->count() == 0)
                        @foreach(Cart::getContent() as $item)
                            <div class="row align-items-center" style="border: 5px solid #fff">
                                <div class="col-md-2">
                                @if(!$item->attributes->imageName== "")
                                                <img src="{{asset('uploads/image/'.$item->attributes->imageName)}}" class="card-img-top" alt="">
                                                @else
                                                <img src="{{asset('uploads/No_image_available.svg.webp')}}" class="card-img-top" alt="">
                                                @endif
                                </div>
                                <div class="col-md-2 d-flex justify-content-center">
                                    <div>
                                        <p class="small text-muted mb-4 pb-2">Name</p>
                                        <p class="lead fw-normal mb-0">{{$item->name}}</p>
                                    </div>
                                </div>

                                <div class="col-md-2 d-flex justify-content-center">
                                    <div>
                                        <p class="small text-muted mb-4 pb-2">Quantity</p>
                                        <p class="lead fw-normal mb-0">{{$item->quantity}}</p>
                                    </div>
                                </div>
                                <div class="col-md-2 d-flex justify-content-center">
                                    <div>
                                        <p class="small text-muted mb-4 pb-2">Price</p>
                                        <p class="lead fw-normal mb-0"> BDT {{$item->price}}</p>
                                    </div>
                                </div>
                                <div class="col-md-2 d-flex justify-content-center">
                                    <div>
                                        <p class="small text-muted mb-4 pb-2">Total</p>
                                        <p class="lead fw-normal mb-0">BDT {{ $item->price*$item->quantity }}</p>
                                    </div>
                                </div>
                                <div class="col-md-2 d-flex justify-content-center">
                                    <div>
                                        <p class="small text-muted mb-4 pb-2">Manage</p>
                                        
                                        <p><a href="{{url('cart/remove/'.$item->id)}}">Remove<i class="pe-7s-close"></i></a></p>
                                        
                                    </div>
                                </div>

                                
                            </div>
                            @endforeach
                            @else

                            <h2>No item in cart</h2>
                            @endif
                        </div>
                    </div>
                    @if(!Cart::getContent()->count() == 0)
                    <div class="card mb-5" style=" background-color: #ddd; ">
                        <div class="card-body p-4 ">

                            <div class="float-end ">
                                <p class="mb-0 me-5 d-flex align-items-center ">
                                    <span class="small text-muted me-2 ">Order total:</span> <span class="lead fw-normal ">BDT {{Cart::getSubTotal()}}</span>
                                </p>
                            </div>

                        </div>
                    </div>
                    @endif

                    <div class="d-flex justify-content-end ">
                        <a href="{{ url('/projects') }}" class="btn btn-light btn_my btn-lg me-2 ">Continue shopping</a>
                        @if(!Cart::getContent()->count() == 0)
                        <a href="{{ url('/checkout') }}" class="btn btn-primary btn_my btn-lg ">Proceed to Checkout</a>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- cart part end here -->



    @endsection