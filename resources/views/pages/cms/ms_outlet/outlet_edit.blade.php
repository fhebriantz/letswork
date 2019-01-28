@extends('layouts.cms')

@section('header')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
@endsection

@section('content')

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Master Outlet</h4>
                                    <ol class="breadcrumb p-0">
                                        <li>
                                            <a href="#">Slau</a>
                                        </li>
                                        <li>
                                            <a href="#">Outlet</a>
                                        </li>
                                        <li class="active">
                                            Edit
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="card-box">
                                                 @if ($errors->any())
                                                  <div class="alert alert-danger">
                                                    <ul>
                                                    @foreach ($errors->all() as $error)
                                                      <li>{{ $error }}</li>
                                                    @endforeach
                                                    </ul>
                                                  </div>
                                                @endif
                                                <form method="POST" action="{{url('/outlet/'.$outlet->id.'/edit')}}" data-parsley-validate novalidate>
                                                {{ csrf_field() }}

                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12 col-md-6">


                                            <div class="p-20">
                                                
                                                <div class="form-group">
                                                    <label for="outlet_name">Nama Outlet<span class="text-danger">*</span></label>
                                                    <input type="text" name="outlet_name"  required  value="{{$outlet->outlet_name}}" placeholder="Nama Outlet" name" class="form-control" id="outlet_name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">Alamat</label>
                                                    <textarea required class="form-control" id="summernote" name="address">{{$outlet->address}}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone_number">Nomor Telepon<span class="text-danger">*</span></label>
                                                    <input name="phone_number"  required  value="{{$outlet->phone_number}}" data-parsley-type="number" type="text" data-parsley-minlength="9" placeholder="Enter only number" name" class="form-control" id="phone_number">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email<span class="text-danger">*</span></label>
                                                    <input type="email" name="email" parsley-trigger="change" required  value="{{$outlet->email}}" placeholder="Enter email" class="form-control" id="email">
                                                </div>     
                                            </div>

                                        </div>

                                        <div class="col-sm-12 col-xs-12 col-md-6">
                                            <div class="p-20">
                                                <!-- RIGHT SIDE -->
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-light" type="submit">
                                            Simpan
                                        </button>
                                        <a href="{{url()->previous()}}" class="btn btn-secondary m-l-5">
                                            Batal
                                        </a>
                                    </div>
                                <input type="hidden" name="_method" value="PUT">
                            </form>
                                    <!-- end row -->
                    </div>
                </div>
            </div>

@endsection

@section('script')
 <script>
            var resizefunc = [];
        </script>

        <!-- Validation js (Parsleyjs) -->
        <script type="text/javascript" src="{{ asset('plugins/parsleyjs/parsley.min.js')}}"></script>

         <script type="text/javascript">
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>

        <!-- tesxteditor -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
        <script>
            $(document).ready(function() {
          $('#summernote').summernote();
        });
        </script>
@endsection