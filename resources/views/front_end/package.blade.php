@extends('layouts.app')
@section('content')

<article class="inner-banner">
    <div class="page-heading">
      <h4>PACKAGES</h4>
    </div>
    <!--page-heading-->
    <img src="{{ asset('assets/images/insidebanner.jpg')}}" alt="inner banner" class="img-responsive" width="100%"/> </article>
  <!--inner-banner-->
  <div class="bcrumbs">
    <div class="container">
      <ul>
        <li><a href="#">Home</a></li>
        <li>Packages</li>
      </ul>
    </div>
  </div>

  <div class="account-wrap">
    <div class="container">
      <div class="row">


        @foreach ($plans as $plan)



        <div class="col-md-3 col-sm-12 checkout-steps1">
          <div style="">
            <div id="accordion">
              <div class="accordion-content border-none default">
                <div class="details-box">
                <p class="text-justify text-uppercase"> <strong>{{$plan->name}} </strong></p>
                <hr>
                  <h3 class="project-head"><strong>AED {{$plan->amount}} .VAT</strong></h3>
                  <hr>

                  {!! $plan->description!!}
               


                  @if (empty(Auth::user()->id))
                  <a href="{{ route('login')}}">
                    <button type="button" class="btn btn-warning photo-gallery"  >Book Now</button>
                    </a>

                    @else
                    <a href="">
                        <button type="button" class="btn btn-warning photo-gallery"  >Book Now</button>
                        </a>
                  @endif



                </div>
              </div>
            </div>
          </div>
        </div>

        @endforeach






        </div>
      <!--row-->
    </div>
    <!--container-->
  </div>
  <!--account-wrap-->
  <br />
  <br />
@endsection
