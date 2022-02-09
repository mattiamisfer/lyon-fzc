@extends('layouts.app')

@section('content')
<article class="inner-banner">
    <div class="page-heading">
      <h4>SERVICE CENTERS</h4>
    </div>
    <!--page-heading-->
    <img src="{{ asset('assets/images/insidebanner.jpg') }}" alt="inner banner" class="img-responsive" width="100%"/> </article>
  <!--inner-banner-->
  <div class="bcrumbs">
    <div class="container">
      <ul>
        <li><a href="#">Home</a></li>
        <li>Service Centers</li>
      </ul>
    </div>
  </div>

  <div class="account-wrap">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12 checkout-steps">
          <div style=""> <img src="images/green_clean.jpeg" alt="" style="" class="img-responsive"/>
            <div id="accordion">
              <div class="accordion-content border-none default">
                <div class="details-box">
                  <h3 class="project-head"><strong>Green & Clean L.L.C</strong></h3>
                  <p class="text-justify"><i class="fa fa-map-marker text-center"></i>Basement Parking, Khalidiya Mall</p>
                  <p class="text-justify"><i class="fa fa-envelope-o text-center"></i>www.greenandclean.ae</p>
                  <p class="text-justify"><i class="fa fa-phone text-center"></i> + 971 2 641 5794</p>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 checkout-steps">
          <div style=""> <img src="images/carzone.png" alt="" style="" class="img-responsive"/>
            <div id="accordion">
              <div class="accordion-content border-none default">
                <div class="details-box">
                  <h3 class="project-head"><strong>Carzone</strong></h3>
                  <p class="text-justify"><i class="fa fa-map-marker text-center"></i> Fashion Lower Ground Parking, Yas Mall Yas Island Abudhabi</p>
                  <p class="text-justify"><i class="fa fa-envelope-o text-center"></i> www.carzone.ae</p>
                  <p class="text-justify"><i class="fa fa-phone text-center"></i> + 971 2 5651506</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12" style="max-width: 100%; height: auto; margin-top: 10px; margin-bottom: 50px; text-align:center;">
          <div class="google-map ">
            <div id="map-canvas">

       <video preload="" autoplay="" muted="" playsinline="" loop="" controls="" style="max-width: 100%; height: auto; margin-top: 10px;margin-bottom: 50px; text-align:center;" width="100%">

                                        <source src="location.mp4" type="video/mp4">


                                          </video>

            </div>
          </div>
          <p> </p>
        </div>
      </div>
      <!--row-->
    </div>
    <!--container-->
  </div>
  <!---contents-section--->
  <br />
  <br />
  <!-- FOOTER -->
@endsection
