@extends('layouts.web')
@section('content')
<section id="main_content">
 
    <div class="row">
      {{-- <div class="col-md-8 leftcontent" >
        <img src="{{ asset('assets/img/offer.png')}}" width="100%"/>
      <!--col-md-12-->
	  </div> --}}
      @if (count($offers) >= 1)

      @foreach ($offers as $item)
          
     
      <div class="col-md-4 rightcontent" >
        <p style="text-align:center !important;"><img src="{{ asset( 'storage/'.$item->image)}}" width="30%" /></p>
       
         {{-- {{ asset( 'storage/'.$item->image)}} --}}

              
 <h3 style="text-align:center; color:#000;">{{ $item->title}}</h3>
 <p><small><span style="color:#000;">{{ $item->description}}</span></small></p>
 <p><small><span style="color:#000;">Offer valid until the {{ \Carbon\Carbon::parse($item->validation)->format('d')}}st {{ \Carbon\Carbon::parse($item->validation)->format('F')}} {{ \Carbon\Carbon::parse($item->validation)->format('Y')}}.</span></small></p>
 <div class="col-md-12">
 <div class="col-md-6" style="text-align:center !important;">
 <a type="button" id="price" class="price" value="AED.250">{{$item->price}}</a>
 </div>
 <div class="col-md-6" style="text-align:center;">
 <a  id="order" href="{{ route('checkout',['id' => $item->id,'slug' => $item->slug])}}" class="order" >Order Now</a>
 </div>
 </div>
       <!--col-md-12-->
       </div>
       @endforeach
      @endif
	
    <!--row-->
  </div>
  <!--container-->
</section>  
@endsection