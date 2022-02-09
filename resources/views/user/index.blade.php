@extends('layouts.user')
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
                                <a href="{{ route('logout')}}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                >Log Out <i class="ti-shift-left"></i></a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

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
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="single_element">
                    <div class="quick_activity">
                        <div class="row">
                            <div class="col-12">
                                <div class="quick_activity_wrap">
                                    <div class="single_quick_activity">
                                        <h4>Current Package</h4>
                                        <h3>Silver </h3>
                                        <p>Saved 25%</p>
                                    </div>
                                    <div class="single_quick_activity">
                                        <h4>Upcoming Washes</h4>
                                        <h3><span class="counter">10</span> </h3>
                                        <p>Saved 25%</p>
                                    </div>
                                    <div class="single_quick_activity">
                                        <h4>Total No. of washes</h4>
                                        <h3><span class="counter">20</span> </h3>
                                        <p>Saved 25%</p>
                                    </div>
                                    <div class="single_quick_activity">
                                        <h4>Washes Remaining</h4>
                                        <h3><span class="counter">10</span> </h3>
                                        <p>Saved 65%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-8 col-md-8">
                <div class="white_box mb_30 min_430">
                    <div class="box_header  box_header_block">
                        <div class="main-title">
                            <h3 class="mb-0" >Total Washes Completed</h3>
                        </div>
                    </div>
                    <canvas height="200" id="visit-sale-chart"></canvas>
                </div>
            </div>
                   <div class="col-md-4 col-lg-4 col-xl-3 ">
                <div class="white_box mb_30 min_430">
                    <div class="box_header  box_header_block">
                        <div class="main-title">
                            <h3 class="mb-0" >Usage of Package</h3>
                        </div>
                    </div>
                    <div id="radial_2"></div>
                    <div class="radial_footer">
                        <div class="radial_footer_inner d-flex justify-content-between">
                            <div class="left_footer">
                                <h5> <span style="background-color: #EDECFE;"></span> Blance</h5>
                                <p>-$18,570</p>
                            </div>
                            <div class="left_footer">
                                <h5> <span style="background-color: #A4A1FB;"></span> Blance</h5>
                                <p>$31,430</p>
                            </div>
                        </div>
                        <div class="radial_bottom">
                            <p><a href="#">View Full Report</a></p>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>

<!-- footer part -->
 @include('layouts.footer')
</section>
@endsection
