<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Font here -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- Title here -->
    <title>Home - HelloAgro</title>
    <!-- Boostrap 5 here -->
    <link rel="stylesheet" href="{{asset('contents/website/assets')}}/css/bootstrap.min.css">
    <!-- Swiper css here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- Owl css here -->
    <link rel="stylesheet" href="{{asset('contents/website/assets')}}/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{asset('contents/website/assets')}}/css/owl.theme.default.min.css" />

    <!-- Fontawesome style here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" href="{{asset('contents/website/assets')}}/css/responsive.css">
    <link rel="stylesheet" href="{{asset('contents/website/assets')}}/css//hover-min.css">
    <!-- Main style here -->
    <link rel="stylesheet" href="{{asset('contents/website/assets')}}/css/style.css">
    <link href="{{asset('contents/admin')}}/css/jquery.dataTables.min.css" rel="stylesheet">

    <script src="{{asset('contents/admin')}}/js/datatables.min.js"></script>

	<script src="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
    <link href="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css" type="text/css" rel="stylesheet" />


</head>

<body>

    <!-- Header part start here -->
    <section>
        <div class="container">
            <div class="top_bar py-2">
                <div class="row">
                        <div class="col-md-4 my-auto">
                            <img src="{{asset('contents/website/assets')}}/img/leaf.png" alt="">
                            <span>Farming is now easier with us</span>
                        </div>

                        <div class="col-md-3">
                            <small><span>Phone no: 01632319899 <br> Email: helloagrobd@gmail.com</span></small>
                        </div>

                        <div class="col-md-2 my-auto">
                            <div id="google_translate_element"></div>
                        </div>

                            <div class="col-md-2 my-auto">

                                    @guest
                                        <button class="btn top_btn" data-bs-toggle="modal" data-bs-target="#exampleModal"> Sign IN</button>
                                    @else
                                    <ul class="navbar-nav ms-auto">
                                    <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#000!important" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>







                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                    </ul>
                                    @endguest


                                <!-- 
                                ====================================  
                                LOGIN FORM MODAL 
                                =======================================
                                -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h4 class="modal-title w-100 font-weight-bold">Login</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </button>
                                            </div>
                                            <div class="modal-body mx-3">
                                                <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                    <div class="md-form mb-5">
                                                    <i class="fa fa-envelope prefix grey-text" aria-hidden="true"></i> <label data-error="wrong" data-success="right" for="form3"> Email</label>
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                        
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                    </div>

                                                    <div class="md-form mb-4">
                                                        <i class="fa fa-key prefix grey-text" aria-hidden="true"></i>
                                                        </i><label data-error="wrong" data-success="right" for="form3"> Password</label>
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="md-form mb-4 text-center">
                                                        
                                                        <button type="submit" class="btn btn-primary login_btn btn_my w-100">
                                                            {{ __('Login') }}
                                                        </button>

                                                        @if (Route::has('password.request'))
                                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                {{ __('Forgot Your Password?') }}
                                                            </a>
                                                        @endif
                                                    </div>

                                                    </form>

                                            </div>
                                            <div class="text-center">
                                                <p>Not registered yet!                                 <a class="btn btn-link" href="{{url('register')}}">
        Click here to register</a> </p>
                                            </div>
                                        </div>
                                    </div>
                        </div>

                    </div>
@guest
@else
                    <div class="col">
                    <div class="shopping_cart_icon">
     <a href="{{url('/cart')}}"><i class="fa fa-shopping-cart"></i></a>
     <a href="{{url('/cart')}}" class="icon-shopping-cart" style="font-size: 25px">
     <asp:Label ID="lblCartCount" runat="server" CssClass="badge badge-warning"  ForeColor="White"/>{{ Cart::getTotalQuantity() }}</a>

</div>

                    </div>
@endguest
                </div>
            </div>
        </div>
    </section>



    <header class="header_bg " id="header_part ">
        <div class="container ">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{asset('contents/website/assets')}}/img/logo.png" class="img-fluid" alt="">
                    </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
                <div class="collapse navbar-collapse" id="main_nav">


                    

                <ul class="navbar-nav mx-auto">
                        <li class="nav-item active"> <a class="nav-link" href="{{ url('/') }}">Home </a> </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">  Services  </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('/agriculture-information') }}"> Agriculture Information &raquo; </a>
                                    <ul class="submenu dropdown-menu">

                                    @foreach($all_data as $single)
                                        <li><a class="dropdown-item" href="{{ $single->btn_title }}">{{ $single->info_title }}</a></li>

                                    @endforeach
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('/projects') }}"> All Projects &raquo; </a>
                                    <ul class="submenu dropdown-menu">

                                    @foreach($all_project_nav as $single)
                                        <li><a class="dropdown-item text-capitalize" href="{{url('/single-project/'.$single->id)}}">{{ $single->name }}</a></li>

                                    @endforeach
                                    </ul>
                                </li>

                                <li><a class="dropdown-item" href="#"> Ecommerce &raquo; </a>
                                    <ul class="submenu dropdown-menu">

                                        <li><a class="dropdown-item text-capitalize" href="{{ url('/forselling') }}">For Selling</a></li>
                                        <li><a class="dropdown-item text-capitalize" href="{{ url('/products') }}">For Buying</a></li>

                                    </ul>
                                </li>

                                <li><a class="dropdown-item" href="{{ url('/our-vets') }}"> Our Vets </a>
                                </li>

                            </ul>
                            </li>

                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">  Apply  </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"> Apply for Investment (Farmer) &raquo; </a>
                                    <ul class="submenu dropdown-menu">

                                    <li><a class="dropdown-item text-capitalize" href="{{ url('/apply') }}">Submit New Application</a></li>
                                    <li><a class="dropdown-item text-capitalize" href="{{ url('/check-my-app-inv') }}">Check Application Status</a></li>

                                    </ul>
                                </li>
                                

                                <li><a class="dropdown-item" href="#"> Need a Vet ? &raquo; </a>
                                    <ul class="submenu dropdown-menu">

                                        <li><a class="dropdown-item text-capitalize" href="{{ url('/farmerproblem') }}">Submit Your Problem</a></li>
                                        <li><a class="dropdown-item text-capitalize" href="{{ url('/check-my-app-farm') }}">Check Problem Status</a></li>

                                    </ul>
                                </li>

                                <li><a class="dropdown-item" href="#"> Join as Vet &raquo; </a>
                                    <ul class="submenu dropdown-menu">

                                        <li><a class="dropdown-item text-capitalize" href="{{ url('/joinasvet') }}">Apply as Vet</a></li>
                                        <li><a class="dropdown-item text-capitalize" href="{{ url('/check-my-vet-app') }}">Check Application Status</a></li>

                                    </ul>
                                </li>

                                <li><a class="dropdown-item" href="#"> Join as Seller &raquo; </a>
                                    <ul class="submenu dropdown-menu">

                                        <li><a class="dropdown-item text-capitalize" href="{{ url('/forselling') }}">Apply as Seller</a></li>
                                        <li><a class="dropdown-item text-capitalize" href="{{ url('/check-my-seller-app') }}">Check Application Status</a></li>
                                    </ul>
                                </li>


                            </ul>
                            </li>
                        

                            @guest
        <li class="nav-item active"> <a class="nav-link" href="{{ url('/login') }}">Login</a> 		<li class="nav-item dropdown">
        <li class="nav-item active"> <a class="nav-link" href="{{ url('/register') }}">Register</a> 		<li class="nav-item dropdown">
        @else




        @if(Auth::user()->role == '1')
        @else

        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">  My Order  </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('/myorder') }}"> Project Order </a></li>
                                
                                <li><a class="dropdown-item" href="{{ url('/product/myorder') }}"> Product Order </a></li>
                                

                                


                            </ul>
                            </li>


        
        @endif




        @if(Auth::user()->role == '3')
                                <li class="nav-item active"> <a class="nav-link" href="{{ url('/vet/me') }}">Vet Panel </a> </li>
                                
                                @endif
        <li class="nav-item active">
        <a class="nav-link" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
        </li>
        @endguest
                    </ul>

                </div>
                <!-- navbar-collapse.// -->
            </div>
            <!-- container-fluid.// -->
        </nav>
        </div>
    </header>

    <!-- Header part end here -->

    <!--  -->


    @yield('website_content')



    <footer class="mt-5 text-light ">
        <div class="container ">
            <div class="row ">
                <div class="col-md-4 ">
                    <div class="footer_logo pt-4 ">
                        <img src="{{asset('contents/website/assets')}}/img/footer_logo.png " class="img-fluid " alt=" ">
                    </div>
                    <div class="footer_text ">
                        <small><p>Your food growing partner</p></small>
                        <b><h6>Have a Questions?</h6></b>
                        <div class="row ">
                            <div class="col-1 "><span class="footer_icon "><i class="fa-sharp fa-solid fa-location-dot "></i></span></div>
                            <div class="col ">
                                House:32, Road:4,Washpur Garden City, KeraniGanj, Dhaka
                            </div>
                        </div>

                        <div class="row mt-2 ">
                            <div class="col-1 "><span class="footer_icon "><i class="fa-solid fa-phone "></i></span></div>
                            <div class="col ">
                                
                                +8801632319899 <br> +8801533409518
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-12 ">
                                <div class="social_media_icon ms-5 ">
                                   <a href="https://www.facebook.com/profile.php?id=100089215482560"> <span><i class="fa-brands fa-facebook "></i></span></a>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 ">
                    <h3 class="pt-4 ">Our Project</h3>
                    <ul class="footer_list ">
                    @foreach($all_project_nav as $single)

                                        <a href="{{url('/single-project/'.$single->id)}}"><li>{{ $single->name }}</li></a>
                    @endforeach

                    </ul>
                </div>
                <div class="col-md-4 ">
                    <h3 class="pt-4 ">Others
                    </h3>
                    <ul class="footer_list ">
                        <a href="{{ url('/privacy-policy') }}"><li>Privacy Policy</li></a>
                        <a href="{{ url('/terms-condition') }}"><li>Terms and Condition</li></a>
                        <a href="{{ url('/login') }}"><li>Login</li></a>
                        <a href="{{ url('/register') }}"><li>Register</li></a>
                    </ul>
                </div>

            </div>

            <div class="row py-5 ">
                <div class="col-md-12 text-center ">
                    <span>Copyright &copy;2022 All rights reserved by helloagro.farm </span>
                </div>
            </div>
        </div>
    </footer>



    <!-- Footer part end here -->

    <!-- Header part start here -->
    <!-- Header part end here -->

    <!-- Header part start here -->
    <!-- Header part end here -->

    <!-- Header part start here -->
    <!-- Header part end here -->

    <!-- Header part start here -->
    <!-- Header part end here -->

    <!-- Header part start here -->
    <!-- Header part end here -->

    <!-- Header part start here -->
    <!-- Header part end here -->

    <!-- jQuery here -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js " integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin=" anonymous "></script>
    <!-- Popper js here -->
    <script src="{{asset('contents/website/assets')}}/js/popper.min.js "></script>
    <!-- Bootstrap js here -->
    <script src="{{asset('contents/website/assets')}}/js/bootstrap.min.js "></script>
    <!-- Swiper js here -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js "></script>
    <!-- Swiper js here -->
    <script src="{{asset('contents/website/assets')}}/js/owl.carousel.min.js "></script>
    <!-- translate js here -->
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <!-- main js here -->
    <script src="{{asset('contents/website/assets')}}/js/main.js "></script>
    





    <!-- Messenger Chat  Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "108746525439229");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v15.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>




      <!-- TIDO CHAT CODE -->

      <script src="//code.tidio.co/tg11z0gz2w4l5vpqvgtgfqpzdlzh1ulf.js" async></script>




      <style>
        @media all and (min-width: 992px) {
	.navbar .dropdown-menu-end{ right:0; left: auto;  }
	.navbar .nav-item .dropdown-menu{  display:block; opacity: 0;  visibility: hidden; transition:.3s; margin-top:0;  }
	.navbar .nav-item:hover .nav-link{ color: #fff;  }
	.navbar .dropdown-menu.fade-down{ top:80%; transform: rotateX(-75deg); transform-origin: 0% 0%; }
	.navbar .dropdown-menu.fade-up{ top:180%;  }
	.navbar .nav-item:hover .dropdown-menu{ transition: .3s; opacity:1; visibility:visible; top:100%; transform: rotateX(0deg); }
}	
      </style>

      <!-- SSL Commerz -->

      <script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>

<script>

document.addEventListener("DOMContentLoaded", function(){
// make it as accordion for smaller screens
if (window.innerWidth < 992) {

  // close all inner dropdowns when parent is closed
  document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
    everydropdown.addEventListener('hidden.bs.dropdown', function () {
      // after dropdown is hidden, then find all submenus
        this.querySelectorAll('.submenu').forEach(function(everysubmenu){
          // hide every submenu as well
          everysubmenu.style.display = 'none';
        });
    })
  });

  document.querySelectorAll('.dropdown-menu a').forEach(function(element){
    element.addEventListener('click', function (e) {
        let nextEl = this.nextElementSibling;
        if(nextEl && nextEl.classList.contains('submenu')) {	
          // prevent opening link if link needs to open dropdown
          e.preventDefault();
          if(nextEl.style.display == 'block'){
            nextEl.style.display = 'none';
          } else {
            nextEl.style.display = 'block';
          }

        }
    });
  })
}
// end if innerWidth
}); 
// DOMContentLoaded  end





</script>


<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>




</body>

</html>