@extends('layouts.cms')

@section('header')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
        <link href="{{ asset('plugins/timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">
        <link href="{{ asset('plugins/mjolnic-bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
        <link href="{{ asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
        <link href="{{ asset('plugins/clockpicker/bootstrap-clockpicker.min.css')}}" rel="stylesheet">
        <link href="{{ asset('plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
@endsection

@section('content')

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Master Order</h4>
                                    <ol class="breadcrumb p-0">
                                        <li>
                                            <a href="#">Slau</a>
                                        </li>
                                        <li>
                                            <a href="#">Order</a>
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
                                                <form method="POST" action="{{url('/order/input')}}" data-parsley-validate novalidate>
                                                {{ csrf_field() }}

                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12 col-md-12">

                                            <div class="">
                                                <div class="form-group" hidden="">
                                                    <label for="id_trans_order">ID Trans Order<span class="text-danger">*</span></label>
                                                    <input name="id_trans_order"  autocomplete="off" required  readonly=""  type="number" value="{{$id_trans_order}}" placeholder="Masukan Stok" name" class="form-control" id="id_trans_order">
                                                </div>

                                                <div class="form-group">
                                                    <label for="id_dokter">Dokter</label>
                                                    <select name="id_dokter" class="form-control">
                                                        <option value="">Pilih Dokter</option>
                                                        @foreach($dokter as $dok)
                                                        <option value="{{$dok->id}}">{{$dok->nama_dokter}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="id_medrep">Medrep</label>
                                                    <select name="id_medrep" class="form-control">
                                                        <option value="">Pilih Medrep</option>
                                                        @foreach($medrep as $med)
                                                        <option value="{{$med->id}}">{{$med->nama_medrep}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                  
                                            </div>

                                        </div>

                                        
                                    </div>
                                    <!-- end row -->
                    </div>

                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-light" type="submit">
                                            Lanjutkan
                                        </button>
                                        <a href="{{url('/order')}}" class="btn btn-secondary m-l-5">
                                            Kembali
                                        </a>
                                    </div>
                            </form>
                                    <!-- end row -->
                    </div>
                </div>
            </div>

@endsection

@section('script')


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
          $('#tgl_so').datepicker({
                
                    "format": "yyyy-mm-dd"
                
            });
          $('#tgl_trans_order').datepicker({
                
                    "format": "yyyy-mm-dd"
                
            });
          
          $('#tgl_tagihan').datepicker({
                
                    "format": "yyyy-mm-dd"
                
            });

          $('#tgl_faktur').datepicker({
                
                    "format": "yyyy-mm-dd"
                
            });
        });
        </script>
        <script src="{{ asset('plugins/moment/moment.js')}}"></script>
        <script src="{{ asset('plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
        <script src="{{ asset('plugins/mjolnic-bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
        <script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{ asset('plugins/clockpicker/bootstrap-clockpicker.js')}}"></script>
        <script src="{{ asset('plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

        <script src="{{ asset('pages/jquery.form-pickers.init.js')}}"></script>

        
        <script>
            var resizefunc = [];
        </script>


@endsection