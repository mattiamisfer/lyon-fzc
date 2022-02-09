@extends('layouts.app')
@section('content')

<article class="inner-banner">
    <div class="page-heading">
      <h4>CONTACT US</h4>
    </div>
    <!--page-heading-->
    <img src="{{ asset('assets/images/insidebanner.jpg')}}" alt="inner banner" class="img-responsive" width="100%"/> </article>
  <!--inner-banner-->
  <div class="bcrumbs" style="margin-bottom:0px;">
    <div class="container">
      <ul>
        <li><a href="#">Home</a></li>
        <li>Contact Us</li>
      </ul>
    </div>
  </div>

  <!-- BLOG CONTENT -->
  <div class="blog-content">
    <div class="container">
      <div class="row">
        <!-- Sidebar -->
        <aside class="col-sm-4">
          <div style=""> <img src="{{ asset('assets/images/carzone.png')}}" alt="" style="" class="img-responsive"/>
            <div id="accordion">
              <div class="accordion-content border-none default">
                <div class="details-box">
                  <h3 class="project-head"><strong>Carzone</strong></h3>
                  <p class="text-justify"><i class="fa fa-map-marker text-center"></i> Fashion Lower Ground Parking,<br> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Yas Mall Yas Island Abudhabi</p>
                  <p class="text-justify"><i class="fa fa-envelope-o text-center"></i> www.carzone.ae</p>
                  <p class="text-justify"><i class="fa fa-phone text-center"></i> + 971 2 5651506</p>
                </div>
              </div>
            </div>
          </div>
        </aside>
        <aside class="col-sm-8 space70">
          <h5 class="heading space40"><span>Contact Form</span></h5>
          <form method="post" action="#" id="form" role="form" class="form ">
            <div class="row">
              <div class="col-md-6 space20">
                <input name="name" id="name" class="input-md form-control" placeholder="Name *" maxlength="100" required="" type="text">
              </div>
              <div class="col-md-6 space20">
                <input name="email" id="email" class="input-md form-control" placeholder="Email *" maxlength="100" required="" type="email">
              </div>
            </div>
            <div class="space20">
              <input class="input-md form-control" placeholder="Subject" maxlength="100" required="" type="text">
            </div>
            <div class="space20">
              <textarea name="text" id="text" class="input-md form-control" rows="6" placeholder="Message" maxlength="400"></textarea>
            </div>
            <button type="submit" class="btn-black"> Send a Message </button>
          </form>
        </aside>
        <div class="clearfix"></div>

      </div>
    </div>
  </div>
  <div class="clearfix space20"></div>
  <!---contents-section--->
  <br />
  <br />
  <!-- FOOTER -->

@endsection
