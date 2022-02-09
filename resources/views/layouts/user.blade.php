<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Carwash Userportal</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <link rel="icon" href="img/favicon.png" type="image/png"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css')}}" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="{{ asset('user/vendors/themefy_icon/themify-icons.css')}}" />
    <!-- swiper slider CSS -->
    <link rel="stylesheet" href="{{ asset('user/vendors/swiper_slider/css/swiper.min.css')}}" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="{{ asset('user/vendors/select2/css/select2.min.css')}}" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="{{ asset('user/vendors/niceselect/css/nice-select.css')}}" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('user/vendors/owl_carousel/css/owl.carousel.css')}}" />
    <!-- gijgo css -->
    <link rel="stylesheet" href="{{ asset('user/vendors/gijgo/gijgo.min.css')}}" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('user/vendors/font_awesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('user/vendors/tagsinput/tagsinput.css')}}" />
    <!-- datatable CSS -->
    <link rel="stylesheet" href="{{ asset('user/vendors/datatable/css/jquery.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('user/vendors/datatable/css/responsive.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('user/vendors/datatable/css/buttons.dataTables.min.css')}}" />
    <!-- text editor css -->
    <link rel="stylesheet" href="{{ asset('user/vendors/text_editor/summernote-bs4.css')}}" />
    <!-- morris css -->
    <link rel="stylesheet" href="{{ asset('user/vendors/morris/morris.css')}}">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="{{ asset('user/vendors/material_icon/material-icons.css')}}" />

    <!-- menu css  -->
    <link rel="stylesheet" href="{{ asset('user/css/metisMenu.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('user/css/colors/default.css')}}" id="colorSkinCSS">
</head>
<body class="crm_body_bg">


    @yield('content')
<!-- main content part here -->

 <!-- sidebar  -->
 <!-- sidebar part here -->
<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a href="index.html"><img src="img/logo.png" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="mm-active">
          <a class=""  href="{{ route('dashboard.index')}}"  aria-expanded="false">
         <img src="img/menu-icon/1.svg" alt="">
            <span>Dashboard</span>
          </a>
           </li>
		<li class="mm-active">
          <a class=""  href="{{ route('booking.index')}}"  aria-expanded="false">
       <img src="img/menu-icon/3.svg" alt="">
            <span>Book a wash</span>
          </a>
           </li>
		<li class="mm-active">
          <a class=""  href="transaction-history.html"  aria-expanded="false">
       <img src="img/menu-icon/2.svg" alt="">
            <span>Transaction History</span>
          </a>
           </li>
	<!--<li class="mm-active">-->
 <!--         <a class=""  href="reviews.html"  aria-expanded="false">-->
 <!--  <img src="img/menu-icon/6.svg" alt="">-->
 <!--           <span>Reviews & Ratings</span>-->
 <!--         </a>-->
 <!--          </li>-->
		<li class="mm-active">
          <a class=""  href="feedback.html"  aria-expanded="false">
       <img src="img/menu-icon/6.svg" alt="">
            <span>Post feedback/comment</span>
          </a>
           </li>

      </ul>

</nav>
<!-- sidebar part end -->
 <!--/ sidebar  -->

<!-- footer part -->


<!-- main content part end -->

<!-- footer  -->
<!-- jquery slim -->
<script src="{{ asset('user/js/jquery-3.4.1.min.js')}}"></script>
<!-- popper js -->
<script src="{{ asset('user/js/popper.min.js')}}"></script>
<!-- bootstarp js -->
<script src="{{ asset('user/js/bootstrap.min.js')}}"></script>
<!-- sidebar menu  -->
<script src="{{ asset('user/js/metisMenu.js')}}"></script>
<!-- waypoints js -->
<script src="{{ asset('user/vendors/count_up/jquery.waypoints.min.js')}}"></script>
<!-- waypoints js -->
<script src="{{ asset('user/vendors/chartlist/Chart.min.js')}}"></script>
<!-- counterup js -->
<script src="{{ asset('user/vendors/count_up/jquery.counterup.min.js')}}"></script>
<!-- swiper slider js -->
<script src="{{ asset('user/vendors/swiper_slider/js/swiper.min.js')}}"></script>
<!-- nice select -->
<script src="{{ asset('user/vendors/niceselect/js/jquery.nice-select.min.js')}}"></script>
<!-- owl carousel -->
<script src="{{ asset('user/vendors/owl_carousel/js/owl.carousel.min.js')}}"></script>
<!-- gijgo css -->
<script src="{{ asset('user/vendors/gijgo/gijgo.min.js')}}"></script>
<!-- responsive table -->
<script src="{{ asset('user/vendors/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('user/vendors/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('user/vendors/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('user/vendors/datatable/js/buttons.flash.min.js')}}"></script>
<script src="{{ asset('user/vendors/datatable/js/jszip.min.js')}}"></script>
<script src="{{ asset('user/vendors/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{ asset('user/vendors/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{ asset('user/vendors/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('user/vendors/datatable/js/buttons.print.min.js')}}"></script>

<script src="{{ asset('user/js/chart.min.js')}}"></script>
<!-- progressbar js -->
<script src="{{ asset('user/vendors/progressbar/jquery.barfiller.js')}}"></script>
<!-- tag input -->
<script src="{{ asset('user/vendors/tagsinput/tagsinput.js')}}"></script>
<!-- text editor js -->
<script src="{{ asset('user/vendors/text_editor/summernote-bs4.js')}}"></script>

<script src="{{ asset('user/vendors/apex_chart/apexcharts.js')}}"></script>

<!-- custom js -->
<script src="{{ asset('user/js/custom.js')}}"></script>

<!-- active_chart js -->
<script src="{{ asset('user/js/active_chart.js')}}"></script>
<script src="{{ asset('user/vendors/apex_chart/radial_active.js')}}"></script>
<script src="{{ asset('user/vendors/apex_chart/stackbar.js')}}"></script>
<script src="{{ asset('user/vendors/apex_chart/area_chart.js')}}"></script>
<!-- <script src="vendors/apex_chart/pie.js"></script> -->
<script src="{{ asset('user/vendors/apex_chart/bar_active_1.js')}}"></script>
<script src="{{ asset('user/vendors/chartjs/chartjs_active.js')}}"></script>


</body>

 </html>
