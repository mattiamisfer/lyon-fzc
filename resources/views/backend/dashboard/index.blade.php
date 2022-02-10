@extends('layouts.backend')

@section('content')
<div class="page-wrapper">
    <div class="page-content">


        <div class="card radius-10">
            <div class="card-content">
                <div class="row row-group row-cols-1 row-cols-xl-4">
                    <div class="col">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Total Offer</p>
                                    <h4 class="mb-0 text-primary">{{ $offer->count()}}</h4>
                                </div>
                                <div class="ms-auto"><i class="bx bx-cart font-35 text-primary"></i>
                                </div>
                            </div>
                            <div class="progress radius-10 my-2" style="height:4px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 65%"></div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Total Checkouts</p>
                                    <h4 class="mb-0 text-danger">{{ $checkout->count()}}</h4>
                                </div>
                                <div class="ms-auto"><i class="bx bx-wallet font-35 text-danger"></i>
                                </div>
                            </div>
                            <div class="progress radius-10 my-2" style="height:4px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 65%"></div>
                            </div>
                         </div>
                    </div>
                     
                   
                </div>
            </div>
        </div>


      
         
      

          


           



    </div>
</div>
@endsection
