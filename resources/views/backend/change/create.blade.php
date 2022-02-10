@extends('layouts.backend')

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">{{$page['name']}}</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{$page['title']}}</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="card border-top border-0 border-4 border-danger">
                <div class="card-body p-5">
                    <div class="row">

                        @if (Session::has('success'))

                        <div class="alert alert-success" role="alert">
                          {{ Session::get('success') }}
                        </div>
                        @endif
                        @if (Session::has('failure'))
                        <div class="alert alert-danger" role="alert">
                          {{ Session::get('failure') }}
                        </div>
                     @endif
                    </div>
                    

                    {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                
                {{ Aire::open()
                    ->route('admin.changepassword.store')
                    ->post() }}




                <div class="row">

                    {{ Aire::input('name', 'Name')
->id('name')
->autoComplete('off')
->groupClass('col-md-6')
->placeholder('Please Enter Title')
->value($user->name)
->type('text') }}


{{
    Aire::email('email', 'Enter Your Email')
    ->groupClass('col-md-6')
    ->value($user->email)
->placeholder('Please Enter Email');
}}
{{
    Aire::password('password', 'Enter your password')
    ->groupClass('col-md-6')
    
->placeholder('Please Enter Password');

}}

{{
    Aire::password('password_confirmation', 'Enter Confirm password')
    ->groupClass('col-md-6')
->placeholder('Please Enter Confirm Passowrd');

}}
                 

{{-- @error('category_id')


<strong class="red">{{ $message }}</strong>
@enderror --}}

 

 



                  
 




 
 


 
    
           
                <div class="col-md-6">
                    {{
                        Aire::submit('Change Password') ->addClass('btn btn-success  form-control  mt-4 ');
                         
                    }}
                  </div>

                 



                </div>
 

                    
                      
            

                     {{ Aire::close() }}
                     

                     







                        
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
</div>

@endsection

@section('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
{{-- <script src="//cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script> --}}
<script src="{{ asset('backend/ckeditor_4.17.1_full/ckeditor/ckeditor.js')}}"></script>
<script>
  $('#input_image').filemanager('filepath');
 $('#lfm1').filemanager('filepath1');


 </script>


 <script>
       var options = {
      filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
      filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
      filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
      filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };

    CKEDITOR.replace('my-editor', options);


    </script>
@endsection
