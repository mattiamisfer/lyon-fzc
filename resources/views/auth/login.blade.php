@extends('layouts.web')
@section('content')


<article class="inner-banner">
    <div class="page-heading">
      <h4>LOGIN</h4>
    </div>
    <!--page-heading-->
    {{-- <img src="{{ asset('assets/images/insidebanner.jpg')}}" alt="inner banner" class="img-responsive" width="100%"/> </article> --}}
  <!--inner-banner-->
  {{-- <div class="bcrumbs" style="margin-bottom:0px;">
    <div class="container">
      <ul>
        <li><a href="#">Home</a></li>
        <li>Login</li>
      </ul>
    </div>
  </div> --}}

  <!-- BLOG CONTENT -->
  <div class="blog-content">
    <div class="container">
      <div class="row">
        <!-- Sidebar -->
        <div class="logindiv col-sm-6 col-md-offset-3 space70"
        <aside class="">
       <div class="col-md-12 space20" style="text-align:center;">
                 <h3 style="color:#fff;">Login</h3>
              </div>
        </aside>
         <aside class=""  style="margin-top: -50px;">
       <div class="col-md-12 space20" style="text-align:center;">
        <form  method="POST" action="{{ route('login') }}" id="form" role="form" class="form ">
            <div class="row">
                @csrf

              <div class="col-md-12 space20">
                <input   id="email"
                 class="input-md form-control" placeholder="Email *"
                 class="form-control @error('email') is-invalid @enderror"
                 name="email" value="{{ old('email') }}"
                  required autocomplete="email" autofocus
                  maxlength="100" required="" type="text">
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong style="color: red">{{ $message }}</strong>
                  </span>
              @enderror
              </div>
              <div class="col-md-12 space20">
                <input
                class="form-control @error('password') is-invalid @enderror"
                 name="password" required autocomplete="current-password"
                id="password" class="input-md form-control"
                placeholder="Password *" maxlength="100" required=""
                type="password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong style="color: red">{{ $message }}</strong>
                </span>
            @enderror
              </div>
            </div>

            <button type="submit" class="btn-primary btn"> Login </button>

            {{-- <a href="{{ route('register')}}">Register</a> --}}
          </form>
          </div>
        </aside>



      </div>
    </div>
  </div>
  <div class="clearfix space20"></div>
  <!---contents-section--->
  <br />
  <br />
  <!-- FOOTER -->
@endsection
