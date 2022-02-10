<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('assets/icon.png')}}" type="image/png" />
	<!--plugins-->

	<link href="{{ asset('backend/plugins/notifications/css/lobibox.min.css')}}" rel="stylesheet"/>
	<link href="{{ asset('backend/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
	<link href="{{ asset('backend/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{ asset('backend/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{ asset('backend/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	 

	<link href="{{ asset('backend/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{ asset('backend/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('backend/css/app.css')}}" rel="stylesheet">
	<link href="{{ asset('backend/css/icons.css')}}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ asset('backend/css/dark-theme.css')}}" />
	<link rel="stylesheet" href="{{ asset('backend/css/semi-dark.css')}}" />
	<link rel="stylesheet" href="{{ asset('backend/css/header-colors.css')}}" />

    @yield('style')
	<title>{{ config('app.name', 'Laravel') }}</title>
</head>

{{-- git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin git@github.com:mattiamisfer/car-zone.git
git push -u origin main --}}

<body onload="info_noti()">
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
				</div>
				<div>
					<img src="{{ asset('assets/img/header/logo.jpg')}}" class="logo-icon" alt="logo icon">
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="{{ route('admin.dashboard.index')}}" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
					{{-- <ul>
						<li> <a href="index.html"><i class="bx bx-right-arrow-alt"></i>Default</a>
						</li>
						<li> <a href="index2.html"><i class="bx bx-right-arrow-alt"></i>Alternate</a>
						</li>
					</ul> --}}
				</li>
		 


          



                <li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Offers</div>
					</a>
					<ul>
						<li> <a href="{{ route('admin.offers.create')}}">
                            <i class="bx bx-right-arrow-alt"></i>Add New</a>
						</li>
                        <li> <a href="{{ route('admin.offers.index')}}">
                            <i class="bx bx-right-arrow-alt"></i>List</a>
						</li>

					</ul>
				</li>


                <li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Subcription</div>
					</a>
					<ul>
						{{-- <li> <a href="{{ route('admin.category.create')}}">
                            <i class="bx bx-right-arrow-alt"></i>Add New</a>
						</li> --}}
                        <li> <a href="{{ route('admin.checkout.index')}}">
                            <i class="bx bx-right-arrow-alt"></i>List</a>
						</li>

					</ul>
				</li>
















			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="search-bar flex-grow-1">
					 
					</div>
					<div class="top-menu ms-auto">
						 
					</div>
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							{{-- <img src="assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar"> --}}
							<div class="user-info ps-3">
								<p class="user-name mb-0">{{ Auth::user()->name}}</p>
 							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							{{-- <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
							</li> --}}
							<li><a class="dropdown-item" href="{{ route('admin.changepassword.create')}}"><i class="bx bx-cog"></i><span>Settings</span></a>
							</li>
							{{-- <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-dollar-circle'></i><span>Earnings</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-download'></i><span>Downloads</span></a>
							</li> --}}
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>


                            <li>  <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                         <i class='bx bx-log-out-circle'></i>     {{ __('Logout') }}
                         </a></li>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--start page wrapper -->
	@yield('content');
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	{{-- <div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<h6 class="mb-0">Theme Styles</h6>
			<hr/>
			<div class="d-flex align-items-center justify-content-between">
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
					<label class="form-check-label" for="lightmode">Light</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
					<label class="form-check-label" for="darkmode">Dark</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
					<label class="form-check-label" for="semidark">Semi Dark</label>
				</div>
			</div>
			<hr/>
			<div class="form-check">
				<input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
				<label class="form-check-label" for="minimaltheme">Minimal Theme</label>
			</div>
			<hr/>
			<h6 class="mb-0">Header Colors</h6>
			<hr/>
			<div class="header-colors-indigators">
				<div class="row row-cols-auto g-3">
					<div class="col">
						<div class="indigator headercolor1" id="headercolor1"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor2" id="headercolor2"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor3" id="headercolor3"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor4" id="headercolor4"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor5" id="headercolor5"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor6" id="headercolor6"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor7" id="headercolor7"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor8" id="headercolor8"></div>
					</div>
				</div>
			</div>
			<hr/>
			<h6 class="mb-0">Sidebar Colors</h6>
			<hr/>
			<div class="header-colors-indigators">
				<div class="row row-cols-auto g-3">
					<div class="col">
						<div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
    <script src="{{ asset('backend/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{ asset('backend/js/jquery.min.js')}}"></script>
	<script src="{{ asset('backend/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{ asset('backend/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{ asset('backend/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{ asset('backend/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{ asset('backend/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{ asset('backend/plugins/chartjs/js/Chart.min.js')}}"></script>
	<script src="{{ asset('backend/plugins/chartjs/js/Chart.extension.js')}}"></script>
	<script src="{{ asset('backend/plugins/sparkline-charts/jquery.sparkline.min.js')}}"></script>
	<!--notification js -->
	<script src="{{ asset('backend/plugins/notifications/js/lobibox.min.js')}}"></script>
	<script src="{{ asset('backend/plugins/notifications/js/notifications.min.js')}}"></script>
	<script src="{{ asset('backend/js/index2.js')}}"></script>
	<!--app JS-->

    @yield('scripts')
	<script src="{{ asset('backend/js/app.js')}}"></script>
</body>

</html>
