@extends('layouts.app')
@section('style')
<style>
    h6{
    font-size: 18px;
    font-weight: 700;
    text-align:center;
    margin-bottom: 40px;
    margin-top: 40px;
    }
    .fade{

    opacity: 1 !important;

    }
    .tab-pane img{
    width: 100%;
    height: auto;
    text-align:center;
    margin-bottom: 50px;
    margin-top: 10px;
    }
    </style>
@endsection
@section('content')


<article class="inner-banner">
    <div class="page-heading">
      <h4>Wash Clean & Dry</h4>
    </div>
    <!--page-heading-->
    <img src="{{ asset('assets/images/insidebanner.jpg') }}" alt="inner banner" class="img-responsive" width="100%"/> </article>
  <!--inner-banner-->
  <div class="bcrumbs">
    <div class="container">
      <ul>
        <li><a href="#">Home</a></li>
        <li>Services</li>
      </ul>
    </div>
  </div>
  <div class="featured-products">
    <div class="container">
      <div class="row">
     <!---   <div id="isotope" class="isotope" style="position: relative; height: 906.376px;">
          </div>-->

  <div class="tab-content">
      <div class="tab-pane fade show active" id="home">
      <h5 class="heading"><span>PREP</span></h5>








@foreach ($packages as $package)
<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
    <div class="srvhead">
    <span class="neg">{{ $package->name }}</span></div>
    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12"><img src="{{Storage::disk('s3')->url('images/'.$package->image)}}" class="img-responsive" width="100%"></div>
    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">


      {!!$package->content!!}
  



      
               @foreach ($package->price as $item)
               <a href="{{ route('checkout')}}" class="suv">{{ $item->name }} : {{ $item->price }} </a>

               @endforeach
        
    <div class="pagebrk"></div></div></div>
@endforeach





      </div>





      </div>
      </div>
  </div>

        </div>
      </div>
    </div>
  </div>

@endsection
