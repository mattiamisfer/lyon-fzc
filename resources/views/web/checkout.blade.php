@extends('layouts.web')
@section('content')

<section id="main_content" style="margin-bottom: 50px;">
 
    <div class="row">
  
        <div class="col-xs-offset-3 col-xs-6 col-md-offset-4 col-md-4">
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
            {{ Aire::open()
                ->route('checkout.post')
                ->post() }}

                <input type="hidden" value="{{$offer->id}}" name="offer_id">
            {{-- <input type="email" class="form-control" name="email" placeholder="email"> --}}
            {{ Aire::input('name', 'Name')
        ->id('name')
        ->autoComplete('off')
         
        ->placeholder('Please Enter Name')
        ->type('text') }}

        {{
            Aire::email('email', 'Enter Your Email')
            ->placeholder('Please Enter Email');
   
        }}
        {{
            Aire::tel('mobile', 'Mobile Number')
            ->placeholder('Please Enter Mobile Number');
  
        }}

        {{
            Aire::number('quantity', 'Enter Quantity')
  ->value(1)
  ->step(1);
        }}

        {{
            Aire::textArea('address', 'Address')
            ->addClass('form-control');
        }}

        {{
            Aire::submit('Check Out')->variant()->green()->addClass('btn btn-primary form-control');

        }}

{{ Aire::close() }}
            </div>


    
    <!--row-->
  </div>
  <!--container-->
</section>  
@endsection