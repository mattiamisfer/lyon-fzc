@extends('layouts.app')
@section('content')

<article class="inner-banner">
    <div class="page-heading">
      <h4>ABOUT US</h4>
    </div>
    <!--page-heading-->
    <img src="{{ asset('assets/images/insidebanner.jpg')}}" alt="inner banner" class="img-responsive" width="100%"/> </article>
  <!--inner-banner-->
  <div class="bcrumbs">
    <div class="container">
      <ul>
        <li><a href="#">Home</a></li>
        <li>About</li>
      </ul>
    </div>
  </div>
  <section class="contents">
    <div class="container">
      <div class="content-box">
        <div class="row">
          <div class="col-md-12">
          <h3 style="color:#D8001D; margin-bottom:60px;"><strong>The Ultimate Protection</strong></h3>
          <div class="col-md-6 col-md-12">
          <img src="{{ asset('assets/images/bg/abouttop.jpg')}}" alt="inner banner" class="img-responsive" width="100%"/>
          </div>
          <div class="col-md-6 col-md-12">
          <p class="text-justify" style="color:#222;">Car Zone is a well-recognized and one of the BEST industry’s leading Product Distributor and Car Care company in the UAE.  We’ve a very diverse business model. We not only offer variety of vehicle care services but also deals in huge range of Car Protection, Window Tint Film Car Care Products and Tools. That makes “CAR ZONE” a definite one stop shop.</p>

   <p class="text-justify" style="color:#222;">Our vision is to consistently provide QUALITY SERVICE and WORKMANSHIP to our valuable clients. We offer our retail and corporate accounts with friendly, professional and specialized services to their vehicle’s needs. We aim in a responsible business growth that is back boned by creating a healthy competition in and out of the company. Our mission is to spread across the UAE and go world-wide with a sustained growth level.
  </p>
            <p class="text-justify"  style="color:#222;">At Car Zone, we value talent and keep our doors wide open for those who has the potential and really want to create an impact. We offer each individual a plat form that supports their knowledge implementation. We believe that real strength of a company lies in its men. Their growth is a combined growth of our company. We never hesitate to step forward for any social cause. Our Business Model We’ve a very diverse business model. We not only offer variety of vehicle care services but also deals in huge range of car care products.
  </p>

              </div>
              </div>
              <div class="col-md-12" style="background-color:#FFF; margin-top:60px; margin-bottom:60px;text-align:center; ">
               <video controls="" style="max-width: 100%; height: auto; " width="1080">
              <source src="{{ asset('assets/images/promo.mp4')}}" type="video/mp4">
              </video>
              </div>
              <div class="col-md-12" style="background-color:#FFF; margin-top:60px; margin-bottom:60px; ">
                 <img src="{{ asset('assets/images/bg/aboutsusbc.jpg')}}" alt="inner banner" class="img-responsive" width="100%"/> </div>
               <div class="col-md-12">
   <!---<h3 style="color:#D8001D;">Services Centers</h3>--->
   <div class="col-md-6 col-md-12">
              <h3 class="project-head" style="color:#D8001D; margin-bottom:20px;"><strong>CARZONE Service Center</strong></h3>
                  <p class="text-justify"   style="color:#222;"> Car Zone is a well-recognized and one of the BEST industry’s leading Car Care company in the UAE.</p>
                  <p class="text-justify"   style="color:#222;">Our reputation & experience in the automobile services and car care products are simply unmatched of quality and innovation. We’ve fleets of certified professionals in all sections of our company that continuously provide their expertise to their level best to make sure the quality assurance and smooth operations.</p>
                  <p class="text-justify"   style="color:#222;">We are proud to announce that we are the 1st company in the Arabian Gulf to offer a proper certification program for both professionals and nonprofessionals training to enhance their skill set in car detailing.</p>
                              <h3 class="project-head" style="color:#D8001D; margin-bottom:20px;"><strong>Green and Clean : </strong></h3>

                  <p class="text-justify"   style="color:#222;">Under Carzone Management implementing the BEST industry’s leading Car Care company in the UAE.</p>
          </div>
   <div class="col-md-6 col-md-12">
   <img src="{{ asset('assets/images/bg/aboutbottom.jpg')}}" alt="inner banner" class="img-responsive" width="100%"/>
          </div>

          </div>
          <!---col-md-12--->
        </div>
        <!---row--->
        <br />
        <br />
      </div>
      <!----content-box---->
    </div>
    <!---container---->
    <br />
    <br />
  </section>
   <!--<div class="account-wrap">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 checkout-steps">
          <div style="">
            <div id="accordion">
              <div class="accordion-content border-none default">
                <div class="details-box">
                  <h3 class="project-head"><strong>Our Business Model</strong></h3>
                  <p class="text-justify"> <strong>We Give You The Best</strong></p>
                  <p class="text-justify">We’ve a very diverse business model. We not only offer variety of vehicle care services but also deals in huge range of car care products.</p>
                  <p class="text-justify">That makes “CAR ZONE” a definite one stop shop.</p>
                   </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     row-->
    </div>
    <!--container-->
  </div>
  <!---contents-section--->
  <br />
  <br />
  <!-- FOOTER -->
@endsection
