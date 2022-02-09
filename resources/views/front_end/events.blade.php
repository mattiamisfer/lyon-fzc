@extends('layouts.app')

@section('content')

<article class="inner-banner">
    <div class="page-heading">
      <h4>EVENTS</h4>
    </div>
    <!--page-heading-->
    <img src="{{ asset('assets/images/insidebanner.jpg')}}" alt="inner banner" class="img-responsive" width="100%"/> </article>
  <!--inner-banner-->
  <div class="bcrumbs">
    <div class="container">
      <ul>
        <li><a href="#">Home</a></li>
        <li>Events</li>
      </ul>
    </div>
  </div>

  <div class="account-wrap">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12 checkout-steps">
          <div style=""> <img src="{{ asset('assets/images/carzone/1.jpg')}}" alt="" style="" class="img-responsive"/>
            <div id="accordion">
              <div class="accordion-content border-none default">
                <div class="details-box">
                  <h3 class="project-head"><strong>Car Expo 2021</strong></h3>
                  <p class="text-justify">06 June 2018</p>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 checkout-steps">
          <div style=""> <img src="{{ asset('assets/images/carzone/2.jpg')}}" alt="" style="" class="img-responsive"/>
            <div id="accordion">
              <div class="accordion-content border-none default">
                <div class="details-box">
                  <h3 class="project-head"><strong>World automobile expo 2020</strong></h3>
                  <p class="text-justify">12 July 2019</p>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 checkout-steps">
          <div style=""> <img src="{{ asset('assets/images/carzone/3.jpg')}}" alt="" style="" class="img-responsive"/>
            <div id="accordion">
              <div class="accordion-content border-none default">
                <div class="details-box">
                  <h3 class="project-head"><strong>International wheels exhibition</strong></h3>
                  <p class="text-justify">3 March 2020</p>

                </div>
              </div>
            </div>
          </div>
        </div></div><br />
  <br />
        <div class="row">
        <div class="col-md-4 col-sm-12 checkout-steps">
          <div style=""> <img src="{{ asset('assets/images/carzone/4.jpg')}}" alt="" style="" class="img-responsive"/>
            <div id="accordion">
              <div class="accordion-content border-none default">
                <div class="details-box">
                  <h3 class="project-head"><strong>Car Expo 2021</strong></h3>
                  <p class="text-justify">5 Feb 2021
  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 checkout-steps">
          <div style=""> <img src="{{ asset('assets/images/carzone/5.jpg')}}" alt="" style="" class="img-responsive"/>
            <div id="accordion">
              <div class="accordion-content border-none default">
                <div class="details-box">
                  <h3 class="project-head"><strong>International wheels exhibition</strong></h3>
                  <p class="text-justify">10 April 2021
  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 checkout-steps">
          <div style=""> <img src="{{ asset('assets/images/carzone/6.jpg')}}" alt="" style="" class="img-responsive"/>
            <div id="accordion">
              <div class="accordion-content border-none default">
                <div class="details-box">
                  <h3 class="project-head"><strong>World automobile expo 2020</strong></h3>
                  <p class="text-justify">06 June 2018,
  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--row-->
    </div>
    <!--container-->
  </div>
  <!--account-wrap-->
  <br />
  <br />
  <!---contents-section--->
  <!-- FOOTER -->
@endsection
