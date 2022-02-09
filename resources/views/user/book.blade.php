@extends('user.index')
@section('content')
<section class="main_content dashboard_part">
    <!-- menu  -->
<div class="container-fluid no-gutters">
    <div class="row">
        <div class="col-lg-12 p-0">
            <div class="header_iner d-flex justify-content-between align-items-center">
                <div class="sidebar_icon d-lg-none">
                    <i class="ti-menu"></i>
                </div>
                <div class="serach_field-area">
                        <div class="search_inner">

                        </div>
                    </div>
                <div class="header_right d-flex justify-content-between align-items-center">
                    <div class="header_notification_warp d-flex align-items-center">
                        <li>
                            <a href="#"> <img src="img/icon/bell.svg" alt=""> </a>
                        </li>
                        <li>
                            <a href="#"> <img src="img/icon/msg.svg" alt=""> </a>
                        </li>
                    </div>
                    <div class="profile_info">
                        <img src="img/client_img.png" alt="#">
                        <div class="profile_info_iner">
                            <p>Welcome Admin!</p>
                            <h5>Travor James</h5>
                               <div class="profile_info_details">
                                  <a href="#">View Profile <i class="ti-user"></i></a>
                                  <a href="#">Edit Profile <i class="ti-settings"></i></a>
                                  <a href="#">Change Password <i class="ti-settings"></i></a>
                                  <a href="#">Log Out <i class="ti-shift-left"></i></a>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ menu  -->
  <div class="main_content_iner ">
      <div class="container-fluid plr_30 body_white_bg pt_30">
          <h3>Book your Slot</h3>
          <form method="POST">
          <div class="row ">
              <div class="col-lg-4">
                  <div class="white_box mb_30">
                      <div class="input_wrap common_date_picker mb_20">
                          <label for="#">Start date</label>
                          <input name="start_date" class="input_form" id="start_datepicker" placeholder="Pick a start date">
                      </div>
                  </div>
              </div>


              <div class="col-lg-4">
                <div class="white_box mb_30">
                    <div class="input_wrap common_date_picker mb_20">
                        <label for="#">Start date</label>
                <select name="start_time" id="start_time" class="form-control with-icon" data-validetta="required">
                    <option selected="" value="">Drop In Time</option>
                    <option value="12:00 PM">12:00 PM</option><option value="12:30 PM">12:30 PM</option><option value="01:00 PM">01:00 PM</option><option value="01:30 PM">01:30 PM</option>
                    <option value="02:00 PM">02:00 PM</option><option value="02:30 PM">02:30 PM</option>


                    <option value="05:30 PM">05:30 PM</option><option value="06:00 PM">06:00 PM</option><option value="06:30 PM">06:30 PM</option><option value="07:00 PM">07:00 PM</option><option value="07:30 PM">07:30 PM</option><option value="08:00 PM">08:00 PM</option><option value="08:30 PM">08:30 PM</option><option value="09:00 PM">09:00 PM</option><option value="09:30 PM">09:30 PM</option><option value="10:00 PM">10:00 PM</option>
                </select>
                    </div>
                </div>
              </div>






               <div class="col-lg-6">
                  <div class="white_box mb_30">
                      <div class="input_wrap common_date_picker mb_20">
                          <label for="#">Service Station</label>
                         <select class="form-control choose_time" name="package" id="package">
                             <option >Choose your Service station</option>
                             @foreach ($packages as  $package)
                             <option value="{{$package->id}}">{{$package->name}} </option>
                             @endforeach

                          </select>
                      </div>
                  </div>
              </div>

              <div class="col-lg-6">
                <div class="white_box mb_30">
                    <div class="input_wrap common_date_picker mb_20">
                        <label for="#">Option</label>
                        <select class="form-control option" name="type" id="type">
                            <option ></option>
                        </select>

                    </div>
                </div>
              </div>

                <div class="col-lg-6" id="messagebox">

                </div>


              <input type="hidden" id="token" value="{{ csrf_token() }}">


          </div>
           <button type="button" id="butsave" class="btn btn-info">Check Availability</button>
           <br>
          </form>
      </div>
  </div>

  @include('layouts.footer')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    //  $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });

    $(".choose_time").change(function(e){
        $.ajaxSetup({
      headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        e.preventDefault();
        var id = $(this).find("option:selected").val();



        // var name = $("input[name=name]").val();
        // var password = $("input[name=password]").val();
        // var email = $("input[name=email]").val();

       var option =  $('.option');
       option.empty();

        $.ajax({
           type:'POST',
           url:"{{ route('ajaxRequest.post') }}",
          // _token: '{{csrf_token()}}' ,
           data:{id:id},
           success:function(data){
              alert(data.success);
              console.log(data);
              var data = data.success;
              for (var i = 0; i < data.length; i++) {

                  console.log(data[i].id);
                 option.append('<option id=' + data[i].id + ' value=' + data[i].id + '>' + data[i].name + '</option>');
            }
           }
        });

    });









var messagebox = $('#messagebox').hide();

    $('#butsave').on('click', function(e) {

      

        $.ajaxSetup({
      headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    e.preventDefault();
		$("#butsave").attr("disabled", "disabled");
		var start_date = $('#start_datepicker').val();
		var start_time = $('#start_time').val();
		var package = $('#package').val();
		var type = $('#type').val();
        var token = $('#token').val();


        alert(start_date);
		if(start_date!="" && start_time!="" && package!="" && type!=""){
			$.ajax({

				url: "/user/booking",
				type: "POST",

				data: {
					start_date: start_date,
					start_time: start_time,
					package: package,
					type: type,
                    token: token
				},
				cache: false,

				success: function(dataResult,responseText,xhr){
                    console.log(dataResult);
                    $("#butsave").removeAttr("disabled");

                    var result = JSON.stringify(dataResult);
					 // var dataResult = JSON.parse(dataResult);
					  if(xhr.status==200){
                        messagebox.show();
                         if(dataResult.status ==1) {
                            

                             messagebox.html("<p style='color:red;'>"+ dataResult.message+" </p>");

                         } else if(dataResult.status == 2)  {
                            messagebox.html("<p style='color:green;'>"+ dataResult.message+" </p>");

                         }
                         else {

                            messagebox.html("<p style='color:green;'>"+ dataResult.message+" </p>");

                         }
					// 	$("#butsave").removeAttr("disabled");
					// 	$('#fupForm').find('input:text').val('');
					// 	$("#success").show();
					// 	$('#success').html('Data added successfully !');
					  }
					  else if(dataResult.statusCode==201){
				   alert("Error occured !");
					  }

				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
    </script>
</section>
@endsection
