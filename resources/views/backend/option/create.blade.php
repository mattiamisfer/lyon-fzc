@extends('layouts.backend')

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">

                <a href="{{ route('admin.option.index',request('id'))}}">Options List</a>
            </div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add Options</li>
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
                    <form class="row g-3" method="POST" action="{{ route('admin.option.store')}}">

                     @csrf

                     <input type="hidden" value="{{ request('id')}}" name="package_id"/>


                        @foreach ($fields as $item)
                        <div class="col-12">
                            <label for="{!!  Str::of(str_replace(' ', '_', $item['label']))->lower();  !!}" class="form-label"> {{ $item['label']}}</label>

                           @if ($item['type'] =='select')
                           <select class="form-select mb-3"   id="input_{{$item['name']}}"
                           name="input_{{$item['name']}}" aria-label="Default select example">
                            <option value="">Select Category</option>

                            @foreach ($item['list'] as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach


                        </select>

                        @elseif ($item['type'] =='textarea')
                        <textarea id="my-editor" name="input_{{ $item['name']}}" class="form-control"></textarea>


                        @elseif ($item['type'] =='image')
                     <div class="row">
                        <div class="col-8">
                            <div class="input-group">
                                <span class="input-group-btn">
                                  <a id="input_{{$item['name']}}" data-input="thumbnail_{{$item['name']}}" data-preview="holder_{{$item['name']}}" class="btn btn-primary">
                                    <i class="fa fa-picture-o"></i> Choose
                                  </a>
                                </span>
                                <input id="thumbnail_{{$item['name']}}" class="form-control" type="text" name="input_{{$item['name']}}">
                                                    </div>
                          </div>

                          <div class="col-4">
                            <div id="holder_{{$item['name']}}" style="margin-top:15px;max-height:100px;"></div>
                          </div>
                     </div>

                           @elseif ($item['type'] =='text')

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

                            @endif

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
