@extends('layouts.app')

@section('content')

<article class="inner-banner">
    <div class="page-heading">
      <h4>Check Out</h4>
    </div>
    <!--page-heading-->
    <img src="{{ asset('assets/images/insidebanner.jpg')}}" alt="inner banner" class="img-responsive" width="100%"/> </article>
  <!--inner-banner-->
  <div class="bcrumbs" style="margin-bottom:0px;">
    <div class="container">
      <ul>
        <li><a href="#">Home</a></li>
        <li>Check Out</li>
      </ul>
    </div>
  </div>

  <!-- BLOG CONTENT -->
  <div class="blog-content">
    <div class="container">
      <div class="row">
        <!-- Sidebar -->

        <aside class="col-sm-6 col-md-offset-3 space70">
       <div class="col-md-6 space20" style="text-align:center;">
                <img src="{{ asset('assets/images/guest.png')}}" height="120px" width="120px"/>
               <p> <a href="{{ route('guest')}}" class="user">Login as Guest</a></p>
              </div>
  <div class="col-md-6 space20" style="text-align:center;">
                <img src="{{ asset('assets/images/user.png')}}" height="120px" width="120px"/>
               <p>  <a href="{{ route('login') }}" class="user">Registed user login</a></p>
              </div>
        </aside>

        <div class="clearfix"></div>
        <div class="col-md-12">
          <div class="google-map ">
            <div id="map-canvas"></div>
          </div>
          <div class="space60"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix space20"></div>
  <!---contents-section--->
  <br />
  <br />
  <!-- FOOTER -->
@endsection
