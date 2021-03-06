@extends('layouts.cms')

@section('header')
<link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
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
                                                

                                    <div class="row">
                                        

                                        <div class="col-sm-12 col-xs-12 col-md-12">
                                            <div class="">
                                                <label for="">Detail Order Transaksi</label>

                                                <table  id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Kemasan</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>


                                                    <tbody>             
                                                        <?php $no = 1; ?>
                                                        @foreach($detail as $detail)
                                                        <tr>
                                                            <td>{{$no++}}</td>
                                                            <td><a href="{{url('detailtransaksi/'.$detail->id.'/edit')}}">{{$detail->kemasan}}</a></td>
                                                            <td>
                                                                <a class="btn btn-action marginright btn-pencil-list" href="{{url('detailtransaksi/'.$detail->id.'/edit')}}"><img class="pencil-list" src="{{ asset('images/icon/pencil.png')}}" alt="" ></a>
                                                            </td>
                                                        </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                        
                                        
                                    </div>
                                    <!-- end row -->
                    </div>
                    <div class="card-box">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12 col-md-12">
                                            


                                            <div class="">
                                                <div class="form-group">
                                                    <label>ID Trans Order</label>
                                                    <div>
                                                            <input type="text" autocomplete="off" readonly="" class="form-control" name="" value="{{$order->id_trans_order}}" id="">
                                                       
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Status Transaksi</label>
                                                    <div>
                                                            <input type="text" autocomplete="off" readonly="" class="form-control" name=""  value="{{$order->status_name}}" id="">
                                                       
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Dokter</label>
                                                    <div>
                                                            <input type="text" autocomplete="off" readonly="" class="form-control" name=""  value="{{$order->nama_dokter}}" id="">
                                                      
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Medrep</label>
                                                    <div>
                                                            <input type="text" autocomplete="off" readonly="" class="form-control" name="" value="{{$order->nama_medrep}}" id="">
                                                       
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="form-group">
                                                    <label>Tanggal SO</label>
                                                    <div>
                                                        <div class="input-group">
                                                            <input type="text" autocomplete="off" readonly="" class="form-control" name="tgl_so" value="{{$order->tgl_so}}" id="">
                                                            <span class="input-group-addon bg-custom b-0"><i class="icon-calender"></i></span>
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Tanggal Transaksi</label>
                                                    <div>
                                                        <div class="input-group">
                                                            <input type="text" autocomplete="off" readonly="" class="form-control" name="tgl_trans_order"  value="{{$order->tgl_trans_order}}" id="">
                                                            <span class="input-group-addon bg-custom b-0"><i class="icon-calender"></i></span>
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="no_so">No SO</label>
                                                    <input name="no_so"  autocomplete="off" required readonly=""  value="{{$order->no_so}}"   type="number"name" class="form-control" id="no_so">
                                                </div>
                                                
                                                
                                            </div>

                                        </div>
                        </div>
                    </div>

                    <div class="card-box">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12 col-md-12">
                                            

                                                
                                                <div class="form-group">
                                                    <label>Tanggal Tagihan</label>
                                                    <div>
                                                        <div class="input-group">
                                                            <input type="text" readonly="" autocomplete="off" class="form-control" name="tgl_tagihan" value="{{$order->tgl_tagihan}}" id="">
                                                            <span class="input-group-addon bg-custom b-0"><i class="icon-calender"></i></span>
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Tanggal Faktur</label>
                                                    <div>
                                                        <div class="input-group">
                                                            <input type="text" readonly="" autocomplete="off" class="form-control" name="tgl_faktur" value="{{$order->tgl_faktur}}" id="">
                                                            <span class="input-group-addon bg-custom b-0"><i class="icon-calender"></i></span>
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="id_faktur">ID Faktur</label>
                                                    <input name="id_faktur" readonly="" autocomplete="off" required  value="{{$order->id_faktur}}"  type="number" name" class="form-control" id="id_faktur">
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Lunas/Belum Lunas</label>
                                                    @if($order->is_lunas == 0)
                                                    <input name="" readonly="" autocomplete="off" required  value="Belum Lunas"  type="text" name" class="form-control" id="">
                                                    @elseif($order->is_lunas == 1)
                                                    <input name="" readonly="" autocomplete="off" required  value="Sudah Lunas"  type="text" name" class="form-control" id="">
                                                    @endif
                                                    
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Sisa Bayar</label>
                                                    @if($order->is_lunas == 0)
                                                    <input name="" readonly="" autocomplete="off" required  value="Belum Lunas"  type="text" name" class="form-control" id="">
                                                    @elseif($order->is_lunas == 1)
                                                    <input name="" readonly="" autocomplete="off" required  value="Sudah Lunas"  type="text" name" class="form-control" id="">
                                                    @endif
                                                    
                                                </div>

                                                <div class="form-group text-right m-b-0">
                                                    <a href="{{url('/transaksi')}}" class="width50 btn btn-secondary m-l-5">
                                                        Kembali
                                                    </a>
                                                </div>
                                                
                                            </div>

                                        </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection

@section('script')
<!-- Required datatable js -->
        <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{ asset('plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('plugins/datatables/jszip.min.js')}}"></script>
        <script src="{{ asset('plugins/datatables/pdfmake.min.js')}}"></script>
        <script src="{{ asset('plugins/datatables/vfs_fonts.js')}}"></script>
        <script src="{{ asset('plugins/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{ asset('plugins/datatables/buttons.print.min.js')}}"></script>
        <script src="{{ asset('plugins/datatables/buttons.colVis.min.js')}}"></script>
        <!-- Responsive examples -->
        <script src="{{ asset('plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{ asset('plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function() {

                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    filter: false,
                    paging: false,
                    "bPaginate": false,
                    "bInfo": false,
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>
        <script src="{{ asset('plugins/bootstrap-inputmask/bootstrap-inputmask.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('plugins/autoNumeric/autoNumeric.js')}}" type="text/javascript"></script>

        <script type="text/javascript">
          jQuery(function($) {
              $('.autonumber').autoNumeric('init');
          });
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