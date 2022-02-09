@extends('layouts.web')
@section('content')
<section id="main_content">
 
    <div class="row">
      <div class="col-md-8 leftcontent" >
        <img src="{{ asset('assets/img/contact.png')}}" width="100%"/>
      <!--col-md-12-->
	  </div>
	  <div class="col-md-4 rightcontent">
	  <h2>Contact Us</h2>
       <p>Talk to a member of our team and see how we can add value to your business. Better still, please fill in the details below and a member of our team will get in touch with you to discuss your requirement in detail.</p>
	   <form id="f1" class="f1">
	   <input type="input" class="contact" id="fname" name="fname" placeholder="Name"/>
	   <input type="input" class="contact" id="mobile" name="mobile" placeholder="Mobile"/>
	   <input type="input" class="contact" id="email" name="email" placeholder="Email"/>
	   <textarea id="message" class="contacttxt" name="message" placeholder="Message" rows="4"></textarea>
	   <input type="submit" id="ssubmit" name="ssubmit" />
	   </form>

	   

      <!--col-md-12-->
	  </div>
    <!--row-->
  </div>
  <!--container-->
</section>  
@endsection