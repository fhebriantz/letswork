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
                                    <h4 class="page-title">Master Kunjungan</h4>
                                    <ol class="breadcrumb p-0">
                                        <li>
                                            <a href="#">Slau</a>
                                        </li>
                                        <li>
                                            <a href="#">Kunjungan</a>
                                        </li>
                                        <li class="active">
                                            Input
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
                                                <form method="POST" action="{{url('/kunjungan/input')}}" data-parsley-validate novalidate>
                                                {{ csrf_field() }}

                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12 col-md-6">


                                            <div class="p-20">
                                                
                                                <div class="form-group">
                                                    <label for="nama_dokter">Nama Dokter<span class="text-danger">*</span></label>
                                                    <input name="nama_dokter" autocomplete="off" required  type="text" placeholder="Masukan Nama Dokter" name" class="form-control" id="nama_dokter">
                                                </div>
                                                 <div class="form-group">
                                                    <label>Tanggal Kunjungan</label>
                                                    <div>
                                                        <div class="input-group">
                                                            <input type="text" autocomplete="off" class="form-control" name="tgl_kunjungan" placeholder="yyyy-mm-dd" id="tgl_kunjungan">
                                                            <span class="input-group-addon bg-custom b-0"><i class="icon-calender"></i></span>
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="topik">Topik<span class="text-danger">*</span></label>
                                                    <textarea name="topik" class="form-control" autocomplete="off" id="" cols="30" rows="5" placeholder="Masukan topik" id="topik"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="komplain">Komplain<span class="text-danger">*</span></label>
                                                    <textarea name="komplain" class="form-control" autocomplete="off" id="" cols="30" rows="5" placeholder="Masukan Komplain" id="komplain"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="order">Order<span class="text-danger">*</span></label>
                                                    <input name="order" autocomplete="off" required   type="text" placeholder="Masukan Order" name" class="form-control" id="order">
                                                </div>
                                                 <div class="form-group">
                                                    <label for="aktifitas_kompetitor">Aktivitas Kompetitor<span class="text-danger">*</span></label>
                                                    <textarea name="aktifitas_kompetitor" class="form-control" autocomplete="off" id="" cols="30" rows="5" placeholder="Masukan Aktivitas Kompetitor" id="aktifitas_kompetitor"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="photo_upload">Upload Foto<span class="text-danger">*</span></label>
                                                    <input name="photo_upload" autocomplete="off" required   type="text" placeholder="Masukan Foto" name" class="form-control" id="photo_upload">
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
          $('#tgl_kunjungan').datepicker({
                
                    "format": "yyyy-mm-dd"
                
            });
          $('#periode_pengajuan').datepicker({
                
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