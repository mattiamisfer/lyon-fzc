@extends('layouts.backend')

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">{{ $page['name'] }}</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $page['title'] }}</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="card border-top border-0 border-4 border-danger">
                <div class="card-body p-5">
                    <div class="card-title d-flex align-items-center">

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
                    <hr>

                    {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                    <form class="row g-3" method="POST" action="{{ route('admin.category.store')}}">

                     @csrf


                        @foreach ($fields as $item)
                        <div class="col-12">
                            <label for="{!!  Str::of(str_replace(' ', '_', $item['label']))->lower();  !!}" class="form-label"> {{ $item['label']}}</label>
                            <div class="input-group">

                                @if ($item['icon'] ==true)
                                <span class="input-group-text bg-transparent">
                                    <i class="bx bxs-{{ $item['icon_name']}}"></i></span>
                                    @else
                                    <span class="input-group-text bg-transparent"></span>
                                @endif

                                <input type="{{$item['type']}}"
                                 class="form-control border-start-0"
                                  id="input_{{$item['name']}}"
                                  name="input_{{$item['name']}}"
                                  value="{{ old('input_'.$item['name']) }}"




                                   placeholder="{{ $item['label']}}">
                            </div>

                            @error('input_'.$item['name'])


                            <strong class="red">{{ $message }}</strong>
                    @enderror


                        </div>
                        @endforeach







                        <div class="col-12">
                            <button type="submit" class="btn btn-danger px-5">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
</div>

@endsection
