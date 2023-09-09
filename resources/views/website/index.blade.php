@extends('layouts.website')
@section('website_content')


    <!-- Slider/banner part start here -->
    <section>
        <!-- Slider main container -->
        <div class="swiper ">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper ">
                <!-- Slides -->
                <div class="swiper-slide slide ">
                    <img src="{{asset('contents/website/assets')}}/img/banner/Banner1.png" class="img-fluid " alt=" ">
                    <div class="slide_text ">
                        <h1>Cultivators are the most valuable citizens,they are tied to their country.
                        </h1>
                    </div>
                </div>
                <div class="swiper-slide slide ">
                    <img src="{{asset('contents/website/assets')}}/img/banner/Banner2.png" class="img-fluid " alt=" ">
                    <div class="slide_text ">
                        <h1>Cultivators are the most valuable citizens,they are tied to their country.
                        </h1>
                    </div>
                </div>
                <div class="swiper-slide slide ">
                    <img src="{{asset('contents/website/assets')}}/img/banner/Banner3.png" class="img-fluid " alt=" ">
                    <div class="slide_text ">
                        <h1>Cultivators are the most valuable citizens,they are tied to their country.
                        </h1>
                    </div>
                </div>

            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

        </div>
    </section>

    <!-- Slider/banner part end here -->



    




    <!-- headline part start here -->

    <section class="headline_part " style="background-color: #f2f2f2; ">
        <div class="container ">
            <div class="row " style="background-color: #f2f2f2; ">
                <div class="col-md-12 ">
                    <marquee behavior="alternate" direction="right ">
                     we are redy to help you for any kind of Agricultural problem.Contact us for information related to Agriculture. We provide agricultiral information. we have created a big platfrom for farmers, new enterprenure and vets.
                    </marquee>
                </div>
            </div>
        </div>
    </section>


    <!-- headline part end here -->








    <!-- agriculture information part start here -->


    <section id="agri_sec">
        <div class="container swiper ">
            <div class="row ">
                <div class="col-12 ">
                    <h2 class="section_heading py-5 text-uppercase ">Agricultural Information</h2>
                </div>
            </div>














            <div class="row fadeOut owl-carousel custom1 owl-theme ">

            @foreach($all_data as $single_data)


                <div class="col-md-3 item ">
                    <div class="card border_box_del my_card ">



                        @if(!$single_data->image == "")
                                                <a href="{{ $single_data->btn_title }}">
                                                <img src="{{asset('uploads/image/'.$single_data->image)}}" class="card-img-top" alt="">
                                                </a>
                                                @else
                                                <a href="{{ $single_data->btn_title }}">
                                                <img src="{{asset('uploads/No_image_available.svg.webp')}}" class="card-img-top" alt="">
                                                </a>
                                                @endif




                        <div class="card-body">
                            
                    @if(!$single_data->info_title == "")
                    <a href="{{ $single_data->btn_title }}">
                    <h5 class="card-title">{{ $single_data->info_title }}</h5>

                    </a>
                    @else
                    <a href="{{ $single_data->btn_title }}">
                    <h5 class="card-title"> No Title</h5>

                    </a>
                    @endif








                            @if(!$single_data->description == "")
                            <a href="{{ $single_data->btn_title }}">
                            <p class="card-text ">
                            {{ Str::limit($single_data->description, 120) }}
                            </p>
                            </a>
                            @else
                            <a href="{{ $single_data->btn_title }}">
                            <p class="card-text ">No Description</p>
                            </a>
                            @endif




                            
                        </div>
                        <div class="call_to_action">
                            <a href="{{ $single_data->btn_title }}" class="btn btn-primary btn_my ">See More</a>
                            </div>
                    </div>
                </div>

            @endforeach
            </div>
        </div>
    </section>


    <!-- agriculture information part end here -->


    <!-- AVAIALBE PROJECT part start here -->


    <section id="available_project">
        <div class="container swiper ">
            <div class="row ">
                <div class="col-12 ">
                    <h2 class="section_heading py-5 text-uppercase ">Available project for Investment</h2>
                </div>
            </div>














            <div class="row fadeOut owl-carousel custom1 owl-theme ">
            @foreach($all_project as $single_project)

                <div class="col-md-4 item ">
                    <div class="card border_box_del my_card ">
                        <div class="project_img ">
                            



                            @if(!$single_project->image == "")
                                                <a href="{{url('/single-project/'.$single_project->id)}}"><img src="{{asset('uploads/image/'.$single_project->image)}}" class="card-img-top project_img_hoiv" alt=""></a>
                                                @else
                                                <a href="{{url('/single-project/'.$single_project->id)}}"><img src="{{asset('uploads/No_image_available.svg.webp')}}" class="card-img-top" alt=""></a>
                                                
                                                @endif








                            <div class="project_text ">
                                <span>BDT {{$single_project->per_unit}} per unit</span>
                            </div>

                            <div class="overlay_project_img"></div>
                        
                        </div>
                        <div class="card-body ">
                            <a href="{{url('/single-project/'.$single_project->id)}}"><h5 class="card-title ">{{$single_project->name}}</h5></a>
                            <a href="{{url('/single-project/'.$single_project->id)}}">
                            <p class="card-text "> <span><i class="fa-sharp fa-solid fa-location-dot "></i> {{$single_project->location}}</span><br> {{$single_project->duration}} contract period with {{$single_project->return}} Return on Funding.</p>
                            </a>
                            
                        </div>
                        <a href="{{url('/single-project/'.$single_project->id)}}" class="btn btn-primary btn_my ">Buy now</a>
                    </div>
                </div>

            @endforeach

            </div>
        </div>
    </section>


    <!-- AVAIALBE PROJECT part end here -->








    <!-- Bank loand information part start here -->


    <section id="bank_loan">
        <div class="container swiper ">
            <div class="row ">
                <div class="col-12 ">
                    <h2 class="section_heading py-5 text-uppercase ">BANK LOAn Information</h2>
                </div>
            </div>














            <div class="row fadeOut owl-carousel custom1 owl-theme ">

                <div class="col-md-4 item ">
                    <div class="card border_box_del my_card ">
                        <img src="{{asset('contents/website/assets')}}/img/primebank.jpg " class="card-img-top " alt="... ">
                        <div class="card-body ">
                            <h5 class="card-title ">Prime Bank</h5>
                            <p class="card-text ">Prime Bank is one of the leading private banks of Bangladesh established in 1995. Their agriculture loan schemes are the result of that continuous effort.
                            </p>
                            
                        </div>
                        <a href="https://www.primebank.com.bd/index.php/home/agriculture_banking " class="btn btn-primary btn_my ">See More</a>
                    </div>
                </div>

                <div class="col-md-4 item ">
                    <div class="card border_box_del my_card ">
                        <img src="{{asset('contents/website/assets')}}/img/krisibank.jpg " class="card-img-top " alt="... ">
                        <div class="card-body ">
                            <h5 class="card-title ">Bangladesh Krishi Bank</h5>
                            <p class="card-text ">Bangladesh Krishi Bank is the only specialized agricultural bank in the country. The bank, founded in 1973, is a fully government-owned and operated bank.</p>
                            
                        </div>
                        <a href="https://www.krishibank.org.bd/core-business/credit/farm-and-irrigation-equipment-loan/ " class="btn btn-primary btn_my ">See More</a>
                    </div>
                </div>

                <div class="col-md-4 item ">
                    <div class="card border_box_del my_card ">
                        <img src="{{asset('contents/website/assets')}}/img/uttarabank.jpg " class="card-img-top " alt="... ">
                        <div class="card-body ">
                            <h5 class="card-title ">Uttara Bank Limited</h5>
                            <p class="card-text ">Uttara Bank is one of the oldest and pre-independent private banks of Bangladesh. Largest in the private sector and offers loan schemes for diverse sectors including agriculture. </p>
                            
                        </div>
                        <a href="https://www.uttarabank-bd.com/index.php/home/sme " class="btn btn-primary btn_my ">See More</a>
                    </div>
                </div>


                <div class="col-md-4 item ">
                    <div class="card border_box_del my_card ">
                        <img src="{{asset('contents/website/assets')}}/img/Brac-Bank.png " class="card-img-top " alt="... ">
                        <div class="card-body ">
                            <h5 class="card-title ">BRAC Bank Tara</h5>
                            <p class="card-text ">The BRAC bank Tara loan choice when it comes to the agricultural sector. This is an all-in-one loan scheme devised for manufacturing, as well as agriculture. </p>
                            
                        </div>
                        <a href=" https://www.bracbank.com/tara/ " class="btn btn-primary btn_my ">See More</a>
                    </div>
                </div>


                <div class="col-md-4 item ">
                    <div class="card border_box_del my_card ">
                        <img src="{{asset('contents/website/assets')}}/img/Exim-bank.png " class="card-img-top " alt="... ">
                        <div class="card-body ">
                            <h5 class="card-title ">Exim Bank</h5>
                            <p class="card-text ">EXIM Bank offers agricultural loans as part of their EXIM Kishan. These two schemes serve two different purposes. The EXIM Kishan is designed as an investment loan.
                            </p>
                            
                        </div>
                        <a href="https://www.eximbankbd.com/agri/agri_banking " class="btn btn-primary btn_my ">See More</a>
                    </div>
                </div>


                <div class="col-md-4 item ">
                    <div class="card border_box_del my_card ">
                        <img src="{{asset('contents/website/assets')}}/img/IFIC-bank.png " class="card-img-top " alt="... ">
                        <div class="card-body ">
                            <h5 class="card-title ">IFIC <small>Aamar Suborno Gram</small></h5>
                            <p class="card-text ">The Suborno Gram scheme of IFIC bank is a specialized loan scheme devised for the crop and fisheries sector. The loan is available for the crop sector on a short-term loan basis.

                            </p>
                            
                        </div>
                        <a href="https://www.ificbank.com.bd/business/sub-product/ific-aamar-suborno-gram " class="btn btn-primary btn_my ">See More</a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Bank loand informationn part end here -->




    <!-- E COMMERCE part start here -->
    <section>
        <div class="container swiper ">
            <div class="row ">
                <div class="col-12 ">
                    <h2 class="section_heading py-5 text-uppercase ">E-commerce</h2>
                </div>
            </div>

            <div class="row ">

                <div class="col-md-6 ">
                    <h2 class="text_green ">For Selling</h2>
                    <div class=" ">
                        <img src="{{asset('contents/website/assets')}}/img/ecom.png " class="img-fluid " alt=" ">
                    </div>
                </div>

                <div class="col-md-6 my-auto ">
                    <h3 class="text_green ">Improving Access to Market for the Farmers</h3>
                    <p>
                        We use our tech-enabled supply chain network to aggregate fresh produce, directly from farming communities. Thus offering farmers, quality driven competitive prices factoring in all associated costs and expenses, simple payment terms and logistics support.
                        We work with wholesalers, modern trade retailers, exporters and processors to give them access to quality farm produce at a competitive price without having to deal with multiple intermediaries.
                    </p>
                    <a href="{{ url('/forselling') }}" class="btn btn_dif_sec ">Learn More</a>
                </div>

            </div>
        </div>
    </section>



    <section class="py-4 ">
        <div class="container swiper ">

            <div class="row ">



                <div class="col-md-6 my-auto ">
                    <h3 class="text_green ">We have the best offer on Agricultural Products</h3>
                    <p>
                        HelloAgro is a reputed agriculture importer and distributor organization in Bangladesh that is always thought about product quality and durability. We are running our business with a good reputation since 2020 in Dhaka, Bangladesh. We always care about
                        our customers buying ability but never compromise about product quality. We are admired for quality agriculture product in Bangladesh. So it is our best priority to have crops at a low price in Bangladesh keeping sincerity about
                        quality.

                    </p>
                    <a href="{{ url('/products') }}" class="btn btn_dif_sec ">Learn More</a>
                </div>

                <div class="col-md-6 ">
                    <h2 class="text_green ">For Buying</h2>
                    <div class=" ">
                        <img src="{{asset('contents/website/assets')}}/img/buying.png " class="img-fluid " alt=" ">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- E COMMERCE end here -->


    <!-- Professional Vet part start here -->

    
    <section id="">
        <div class="container swiper ">
            <div class="row ">
                <div class="col-12 ">
                    <h2 class="section_heading py-5 text-uppercase ">Professional Vet</h2>
                </div>
            </div>














<div class="row">

            @foreach($professional_vet->slice(0, 3)  as $single)
            <div class="col-md-4" >
            
            <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{asset('uploads/profile/'.$single->profile_photo)}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{ $single->full_name }}</h5>
              <p class="card-text"><b>{{ $single->specialist_area }} Expert</b></p>
              <p class="card-text"><small class="text-muted">BVC Reg No: {{ $single->bvc_reg_no }}</small></p>
            </div>
          </div>
        </div>
      </div>
      
              </div>

            @endforeach
            </div>

            <div class="row">
                <div class="col-2 mx-auto mt-4">
                <a href="{{ url('/our-vets') }}" class="btn btn-primary btn_my">See More</a>
                </div>
            </div>


</section>
    <!-- Professional Vet part end here -->



    <!-- Inverstor Experience part start here -->



    <section>
        <div class="container swiper ">
            <div class="row ">
                <div class="col-12 ">
                    <h2 class="section_heading text_green py-5 text-uppercase ">INVESTOR EXPERIENCE</h2>
                </div>
            </div>

            <div class="row ">

                <div class="col-md-4 ">


                    <div class="card border_box_del " style="width: 18rem; ">
                        <!-- <img class="card-img-top " src="... " alt="Card image cap "> -->

                        <iframe width="100% " height=" " src="https://youtube.com/embed/BbhVK8xz1mw" title="YouTube video player " frameborder="0 " allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture " allowfullscreen></iframe>
                        <div class="card-body ">
                            <h5 class="card-title text_green ">Investor of corn project</h5>
                            <p class="card-text ">Shimu Paul, Dhaka, Bangladesh.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ">


                    <div class="card border_box_del " style="width: 18rem; ">
                        <!-- <img class="card-img-top " src="... " alt="Card image cap "> -->

                        <iframe width="100% " height=" " src="https://youtube.com/embed/rid2qi52xwQ" title="YouTube video player " frameborder="0 " allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture " allowfullscreen></iframe>
                        <div class="card-body ">
                            <h5 class="card-title text_green ">Investor of Poultry Farm</h5>
                            <p class="card-text ">Shakila Shraboni, Dhaka, Bangladesh.</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 ">


                    <div class="card border_box_del " style="width: 18rem; ">
                        <!-- <img class="card-img-top " src="... " alt="Card image cap "> -->

                        <iframe width="100% " height=" " src="https://youtube.com/embed/Y2_qCB64te4" title="YouTube video player " frameborder="0 " allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture " allowfullscreen></iframe>
                        <div class="card-body ">
                            <h5 class="card-title text_green ">Investor of corn project</h5>
                            <p class="card-text ">Md.  Muminur Rahman, Dhaka, Bangladesh.</p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <!-- Inverstor Experience part end here -->


    <!-- Farmers Experience part start here -->



    <section>
        <div class="container swiper ">
            <div class="row ">
                <div class="col-12 ">
                    <h2 class="section_heading text_green py-5 text-uppercase ">FARMERS EXPERIENCE</h2>
                </div>
            </div>

            <div class="row ">

                <div class="col-md-4 ">


                    <div class="card border_box_del " style="width: 18rem; ">
                        <!-- <img class="card-img-top " src="... " alt="Card image cap "> -->

                        <iframe width="100% " height=" " src="https://www.youtube.com/embed/GlXGjqvuuyw" title="YouTube video player " frameborder="0 " allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture " allowfullscreen></iframe>
                        <div class="card-body ">
                            <h5 class="card-title text_green ">New Enterprenure</h5>
                            <p class="card-text ">Sharboni Paul, Dhaka, Bangladesh.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ">


                    <div class="card border_box_del " style="width: 18rem; ">
                        <!-- <img class="card-img-top " src="... " alt="Card image cap "> -->

                        <iframe width="100% " height=" " src="https://youtube.com/embed/S1vCRWHD1kk" title="YouTube video player " frameborder="0 " allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture " allowfullscreen></iframe>
                        <div class="card-body ">
                            <h5 class="card-title text_green ">New Enterprenure</h5>
                            <p class="card-text ">Bani Paul, Natore, Bangladesh.</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 ">


                    <div class="card border_box_del " style="width: 18rem; ">
                        <!-- <img class="card-img-top " src="... " alt="Card image cap "> -->

                        <iframe width="100% " height=" " src="https://youtube.com/embed/oSPQp8xAlNY" title="YouTube video player " frameborder="0 " allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture " allowfullscreen></iframe>
                        <div class="card-body ">
                            <h5 class="card-title text_green ">New Enterprenure</h5>
                            <p class="card-text ">Shefali Barui, SreeMongol, Bangladesh.</p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <!-- Farmers Experience part end here -->

    <!-- Footer part start here -->


    @endsection