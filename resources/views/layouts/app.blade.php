<!DOCTYPE html>
<html>
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="keywords" content="" />
<meta name="description" content="">
<meta name="author" content="">
<title>Carzone  || Home ||</title>
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Google Webfont -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400,100,300,300italic,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">

<!-- CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/font-awesome/css/font-awesome.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/js/vendors/isotope/isotope.css')}}">
<link rel="stylesheet" href="{{ asset('assets/js/vendors/slick/slick.css')}}">
<link rel="stylesheet" href="{{ asset('assets/js/vendors/rs-plugin/css/settings.css')}}">
<link rel="stylesheet" href="{{ asset('assets/js/vendors/select/jquery.selectBoxIt.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/subscribe-better.css')}}">
<link rel="stylesheet" href="../../../../ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/ui-lightness/jquery-ui.css">
<link rel="stylesheet" href="{{ asset('assets/plugin/owl-carousel/owl.carousel.css')}}">
<link rel="stylesheet" href="{{ asset('assets/plugin/owl-carousel/owl.theme.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/style-1.css')}}"/>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        @yield('style')
</head>
<body>
<div class="body">
  <!-- TOPBAR -->
  <div class="top_bar">
    <div class="container">
      <div class="row">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <div class="tb_center pull-right">
                <ul >
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li >
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li  >
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li  >

                                 <a class="dropdown-item" href="{{ route('logout') }}"
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
            <div class="tb_center pull-right">
              <ul>
                <li><i class="fa fa-phone"></i> <a href="#"> + 971 2 5651506</a></li>
                <li><i class="fa fa-envelope-o"></i> <a href="#">info@carzone.ae </a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- HEADER -->
<header>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="row">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <!-- Logo -->
          <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/carzone.png')}}" style="width:250px; height:auto;" class="img-responsive" alt=""/></a> </div>
        <!-- Cart & Search -->

        <!-- Navmenu -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="{{ Request::is('/') ? 'active' : ''}}"><a href="/" class="dropdown-toggle active" role="button" aria-expanded="false">Home</a></li>
            <li  class="{{ Request::is('about-us') ? 'active' : ''}}"> <a   href="{{ route('about')}}" >About Us</a></li>
            <li  class="dropdown  "  ><a href="#" class="dropdown-toggle" data-toggle="dropdown"
                role="button" aria-expanded="false">Store</a>
<ul class="dropdown-menu submenu" role="menu">


<li class=""><a href="{{ route('collection.igl') }}">IGL COATING </a></li>

<li class=""><a href="{{ route('collection.stek') }}">STEK  AUTOMATIVE </a></li>


</ul>
</li>
			 <li  class="dropdown  "  ><a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                role="button" aria-expanded="false">Services..</a>
                            <ul class="dropdown-menu submenu" role="menu">

{{-- 
                         @foreach ($categories as $category)
                                <li class=""><a href="{{ route('services',$category->id) }}">{{ $category->name}}</a></li>
                                @endforeach --}}



                            </ul>
                        </li>

			<li class="{{ Request::is('service-centres') ? 'active' : ''}}" > <a href="{{ route('centre')}}">SERVICE CENTRES</a></li>
			<li class="{{ Request::is('events') ? 'active' : ''}}"> <a href="{{ route('events')}}">EVENTS</a></li>
			<li class="{{ Request::is('packages') ? 'active' : ''}}"> <a href="{{ route('package')}}">PACKAGES</a></li>
            <li  class="{{ Request::is('contact-us') ? 'active' : ''}}"><a href="{{ route('contact')}}" class="dropdown-toggle" role="button" aria-expanded="false">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>
<!-- SLIDER -->

@yield('content')




























   <!-- FOOTER -->
   <footer>
    <div class="container">
      <div class="row">
      <div class="col-md-4 col-sm-12 widget-footer">
   <img src="{{ asset('assets/images/carzone.png')}}" alt="" class="img-responsive"/> <br>
       <p style="text-align: justify;">Car Zone is a well-recognized and one of the BEST industry’s leading Product Distributor and Car Care company in the UAE. We’ve a very diverse business model. We not only offer variety of vehicle care services but also deals in huge range of Car Protection, Window Tint Film Car Care Products and Tools. That makes “CAR ZONE” a definite one stop shop.
       </p>

        </div>
        <div class="col-md-2 widget-footer col-sm-12">
          <h5>Quick Links</h5>
          <ul class="list-unstyled footer">
            <li class=""><a href="index.html"><i class="fa fa-angle-double-left"></i> Home</a></li>
            <li class=""><a href="aboutus.html"><i class="fa fa-angle-double-left"></i> About Us</a></li>
            <li class=""><a href="service-centers.html"><i class="fa fa-angle-double-left"></i> Service Centers</a></li>
             <li class=""><a href="events.html"><i class="fa fa-angle-double-left"></i> Events</a></li>
              <li class=""><a href="packages.html"><i class="fa fa-angle-double-left"></i> Packages</a></li>
            <li class=""><a href="contact.html"><i class="fa fa-angle-double-left"></i> Contact Us</a></li>
            <li class=""><a href="privacy.html"><i class="fa fa-angle-double-left"></i> Privacy Policy</a></li>
            <li class=""><a href="tandc.html"><i class="fa fa-angle-double-left"></i> Terms & Conditions</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-12 widget-footer">
          <h5>Products</h5>
          <ul class="list-unstyled footer" style="margin-bottom:22px;">
            <li class=""><a href="products.html"><i class="fa fa-angle-double-left"></i> STEK PPF (Paint Protection Film)</a></li>
            <li class=""><a href="products.html"><i class="fa fa-angle-double-left"></i> STEK Window Tint Film</a></li>
            <li class=""><a href="products.html"><i class="fa fa-angle-double-left"></i> IGL- Range of Detailing Products</a></li>

          </ul>

           <h5>Services</h5>
           <ul class="list-unstyled footer" style="margin-bottom:22px;">
            <li class=""><a href="washclean.html"><i class="fa fa-angle-double-left"></i> Wash Clean & Dry</a></li>
            <li class=""><a href="detail-polishing.html"><i class="fa fa-angle-double-left"></i> Detailing & Polishing</a></li>
            <li class=""><a href="protection.html"><i class="fa fa-angle-double-left"></i> Protection</a></li>

          </ul>
        </div>

        <div class="col-md-3 col-sm-12 widget-footer">
          <h5>Contact</h5>

          <ul>
            <li>
              <p><i class="fa fa-map-marker"></i> Fashion Lower Ground Parking
     <br />
                &nbsp;&nbsp;
                Yas Mall, Yas Island, Abudhabi
                <br />
                &nbsp;&nbsp; United Arab Emirates</p>
            </li>
            <li>
              <p><i class="fa fa-phone"></i> + 971 2 5651506</p>
            </li>
            <li>
              <p><i class="fa fa-envelope"></i> info@czone.ae</p>
            </li>
            <li>
              <p><i class="fa fa-fax"></i> + 971 2 5651506</p>
            </li>

          </ul>
           <div class="clearfix"></div>
          <ul class="f-social">
            <li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
            <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
            <li><a href="https://feedburner.google.com/" class="fa fa-rss"></a></li>
            <li><a href="mailto:email@website.com" class="fa fa-envelope"></a></li>

            <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
          </ul>

        </div>


      </div>
    </div>
  </footer>
  <!-- FOOTER COPYRIGHT -->
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-sm-7">
          <ul class="flinks">
            <li><a href="index.html">Site Map</a></li>
            <li><a href="index.html">Search Terms</a></li>
            <li><a href="index.html">Customer Service</a></li>
          </ul>
          <br>
        </div>
        <div class="col-md-5 col-sm-5">
          <p class="pull-right">&copy; 2021 Carzone. All Right Reserved. Powered By <a href="http://affinityopus.com/">Affinity Interactive </a></p>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div id="backtotop"><i class="fa fa-chevron-up"></i></div>
  <!-- Javascript -->
  <script src="{{ asset('assets/js/jquery.js')}}"></script>
  <script type="text/javascript">
                                              // Call this function once the rest of the document is loaded
                                              function loadAddThis() {
                                                  addthis.init()
                                              }
          </script>
  <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/plugin/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('assets/js/bs-navbar.js')}}"></script>
  <script src="{{ asset('assets/js/vendors/isotope/isotope.pkgd.js')}}"></script>
  <script src="{{ asset('assets/js/vendors/slick/slick.min.js')}}"></script>
  <script src="{{ asset('assets/js/vendors/tweets/tweecool.min.js')}}"></script>
  <script src="{{ asset('assets/js/vendors/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
  <script src="{{ asset('assets/js/vendors/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.sticky.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.subscribe-better.js')}}"></script>
  <script src="{{ asset('assets/js/jquery-ui.min.js')}}"></script>
  <script src="{{ asset('assets/js/vendors/select/jquery.selectBoxIt.min.js')}}"></script>
  <script src="{{ asset('assets/js/main.js')}}"></script>
  </body>
  </html>
