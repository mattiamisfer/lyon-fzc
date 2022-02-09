@extends('layouts.web')
@section('content')
<div class="slider-container" id="slider-container">
	<div class="slider">
	
		
	     <div class="slide">
		<a href="#" target="_self"><img src="{{ asset('assets/img/banner1.jpg')}}" alt="" class="img-responsive" width="100%"></a>
		</div> 
		 <div class="slide">
		<a href="#" target="_self"><img src="{{ asset('assets/img/banner2.jpg')}}" alt="" class="img-responsive" width="100%"></a>
		</div> 
	     <div class="slide">
		<a href="#" target="_self"><img src="{{ asset('assets/img/banner3.jpg')}}" alt="" class="img-responsive" width="100%"></a>
		</div> 
	   
		
	   

	
	</div>

	<div class="switch" id="prev"><span></span></div>
	<div class="switch" id="next"><span></span></div>
</div>
    
@endsection