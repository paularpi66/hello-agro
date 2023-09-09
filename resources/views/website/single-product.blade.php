@extends('layouts.website')
@section('website_content')


    <!-- single proj part start here -->


    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-4">
                    
                
                @if(!$single_product->image == "")
                                                <img src="{{asset('uploads/product/'.$single_product->image)}}" class="card-img-top mb-5 mb-md-0" alt="">
                                                @else
                                                <img src="{{asset('uploads/No_image_available.svg.webp')}}" class="img-fluid" class="card-img-top mb-5 mb-md-0" alt="">
                                                @endif
            
            
            
            </div>
                <div class="col-md-6">
                    <div class="small mb-1"><span><i class="fa-sharp fa-solid fa-location-dot "></i> Bangladesh</span></div>
                    <h1 class="display-5 fw-bolder">{{$single_product->name}}</h1>
                    <div class="fs-5 mb-5">
                        <span class="">BDT <span style="font-weight: 1000;" class="text_green">{{$single_product->price}}</span> </span>
                    </div>

                    <div class="">
                        <table class="table table-stripped">
                            <tbody>
                                <tr>
                                    <td>Category: 
                                        @if($single_product->category == "")
                                No Category   
                                @else
                                {{$single_product->category->name}}
                                @endif
                            </td>
                                </tr>
                                <tr>
                                    <td>Seller Name : {{$single_product->user_name}}</td>
                                    <td>
                                    
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex">

                        <input class="form-control text-center me-3" id="inputQuantity" disabled type="num" name="quantity" value="1" style="max-width: 3rem" readonly>
                        <a class="btn btn-outline-dark add_to_cart_btn flex-shrink-0" href='{{ url("cart/add2/{$single_product->id}") }}'>
                            <i class="bi-cart-fill me-1"></i>
                            Add To Cart
</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Description
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                    {{$single_product->description}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Short Description
                            </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                    {{$single_product->short_description}}

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              FAQ
                            </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="c14 doc-content">
                                        <div>
                                            <p class="c19"><span class="c4">Frequently Asked Questions</span></p>
                                        </div>
                                        <p class="c17"><span class="c2">What is HelloAgro?</span></p>
                                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis officiis fugit minima magni delectus praesentium. Voluptatibus esse cumque officia corrupti quisquam ducimus nesciunt delectus impedit. Quam esse cumque
                                            perspiciatis porro quo aspernatur! Eligendi porro labore excepturi impedit, placeat dolore adipisci laboriosam dicta ex quaerat amet illo tempore praesentium tenetur, aliquam blanditiis totam recusandae perspiciatis
                                            dignissimos consequatur voluptatem magni. Rem adipisci temporibus numquam impedit facere similique suscipit quo, nihil ullam doloribus! Aut eligendi perspiciatis odio aliquid libero adipisci nemo, velit vel
                                            labore quo sapiente quaerat rerum neque iste, ipsum hic, officiis facilis similique veritatis iure dignissimos tenetur sint optio. Nesciunt, illum?</p>
                                        <p class="c1"><span class="c2">How does it work?</span></p>
                                        <ol class="c13 lst-kix_t0o4iy4o92fq-0 start" start="1">
                                            <li class="c10 li-bullet-0"><span class="c8"><a class="c22" href="{{ url('register') }}">Sign-up</a></span>
                                                <span class="c3 c9">&nbsp;to create your profile on the HelloAgro platform.</span>
                                            </li>
                                            <li class="c10 li-bullet-0"><span>Choose an available </span><span class="c8"><a class="c22" href="{{ url('/#available_project') }}">project</a></span>
                                                <span class="c3 c9">&nbsp;for purchase</span>
                                            </li>
                                            <li class="c10 li-bullet-0"><span class="c3 c9">Transfer or send the amount to a HelloAgro Bank Account or Mobile Banking.</span></li>
                                            <li class="c10 li-bullet-0"><span class="c3 c9">Send your Payment slip/screenshot to HelloAgro credit.</span></li>
                                            <li class="c10 li-bullet-0"><span class="c3 c9">Select your project and click Buy Button</span></li>
                                            <li class="c10 li-bullet-0"><span class="c3 c9">Follow the instructions step by step</span></li>
                                            <li class="c10 li-bullet-0"><span class="c3 c9">Re-invest the profit or </span></li>
                                            <li class="c10 li-bullet-0"><span>Withdraw the amount to your Bank Account or Mobile Banking.</span></li>
                                        </ol>
                                        <p class="c1"><span class="c2">How to open a HelloAgro Account or Sign up?</span></p>
                                        <p class="c16"><span>You only need a valid email address and password with your name to open an HelloAgro account. You can open an account from here - </span><span class="c8"><a class="c22" href="{{ url('register') }}">Register</a></span>
                                            <span class="c3 c9">&nbsp;</span>
                                        </p>
                                        
                                        <p class="c1"><span class="c2">Who's responsible for any losses? </span></p>
                                        <p class="c16"><span class="c15">HelloAgro will take responsibility for Non-Insurance projects. Insurance Company responsible for Insurance covered projects. Sponsor’s responsible for Shariah compliance projects.</span></p>
                                        <p class="c1"><span class="c2">When do I get my returns? </span></p>
                                        <p>Each farm has a timeline/cycle; all payments are made to investors when the farming cycle is complete. Investors can easily track farm progress and updates on their dashboard.</p>
                                        <p class="c1"><span class="c2">What is a Farm Cycle? </span></p>
                                        <p class="c7"><span class="c3 c0">The period from after the sponsoring window, through the farming period until after harvest and sales.</span></p>
                                        <p class="c1"><span class="c2">What is my return? </span></p>
                                        <p class="c7"><span class="c0 c3">Your seed input (Capital) plus a percentage of your seed input, depending on the farm cycle and window you sponsored.</span></p>
                                        <p class="c1"><span class="c2">Can I have multiple sponsorships? </span></p>
                                        <p class="c7"><span class="c3 c18">YES, You can.</span></p>
                                        <p class="c25"><span class="c2">Can I sponsor from any country? </span></p>
                                        <p class="c7"><span class="c3 c18">Yes, you can sponsor from anywhere in the world.</span></p>
                                        <p class="c1"><span class="c21 c23">Who's eligible to sponsor?</span><span class="c3 c20">&nbsp;</span></p>
                                        <p class="c7"><span class="c3 c18">A sponsor must </span><span class="c18">be at least</span><span class="c3 c0">&nbsp;18 years old to participate or with the help of a guardian if below 18.</span></p>
                                        <p class="c6"><span class="c3 c0"></span></p>
                                        <p class="c16 c24"><span class="c3 c12"></span></p>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- single proj part end here -->



    @endsection