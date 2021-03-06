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
                                    <h4 class="page-title">Master Tagihan</h4>
                                    <ol class="breadcrumb p-0">
                                        <li>
                                            <a href="#">Slau</a>
                                        </li>
                                        <li>
                                            <a href="#">Tagihan</a>
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
                                                <div class="form-group">
                                                    <label>ID Trans Order</label>
                                                    <div>
                                                            <input type="text" autocomplete="off" readonly="" class="form-control" name="" placeholder="yyyy-mm-dd" value="{{$order->id_trans_order}}" id="">
                                                       
                                                    </div>
                                                </div>
                                                <label for="">Detail Order Transaksi<span class="text-danger">*</span></label>


                                                <table  id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Barang</th>
                                                            <th>Kemasan</th>
                                                            <th>Ukuran</th>
                                                            <th>Qty</th>
                                                            <th>Harga</th>
                                                            <th>Jumlah</th>
                                                        </tr>
                                                    </thead>


                                                    <tbody>             
                                                        <?php $no = 1; ?>
                                                        @foreach($detail as $detail)
                                                        <tr>
                                                            <td>{{$no++}}</td>
                                                            <td>{{$detail->nama_barang}}</td>
                                                            <td>{{$detail->kemasan}}</td>
                                                            <td>{{$detail->ukuran}}</td>
                                                            <td>{{$detail->qty}}</td>
                                                            <td>{{$detail->harga}}</td>
                                                            <td>{{$detail->total_harga}}</td>
                                                        </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>

                                                <div class="form-group">
                                                    <label for="total_bayar">Total Harga<span class="text-danger">*</span></label>
                                                    <input name="total_bayar" value="{{$sum}}"  autocomplete="off"     type="text" placeholder="0" readonly="" class="form-control" id="total_bayar">
                                                </div>
                                            </div>
                                        </div>


                                        
                                        
                                    </div>
                                    <!-- end row -->
                                </div>
                               
                    <div class="card-box">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12 col-md-12">
                                            

                                            <div class="">
                                                <form method="POST" action="{{url('/tagihan/'.$order->id.'/edit')}}" data-parsley-validate novalidate>
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label>Dokter</label>
                                                    <div>
                                                            <input type="text" autocomplete="off" readonly="" class="form-control" name="" placeholder="yyyy-mm-dd" value="{{$order->nama_dokter}}" id="">
                                                      
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Medrep</label>
                                                    <div>
                                                            <input type="text" autocomplete="off" readonly="" class="form-control" name="" placeholder="yyyy-mm-dd" value="{{$order->nama_medrep}}" id="">
                                                       
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal Transaksi</label>
                                                    <div>
                                                        <div class="input-group">
                                                            <input type="text" autocomplete="off" class="form-control" name="" placeholder="yyyy-mm-dd" value="{{$order->tgl_trans_order}}"  readonly="">
                                                            <span class="input-group-addon bg-custom b-0"><i class="icon-calender"></i></span>
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>
                                                


                                                <div class="form-group">
                                                    <label for="">No SO<span class="text-danger">*</span></label>
                                                    <input name=""  autocomplete="off"   value="{{$order->no_so}}"   type="number" placeholder="Masukan No SO" name" readonly="" class="form-control" id="">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>Tanggal SO</label>
                                                    <div>
                                                        <div class="input-group">
                                                            <input type="text" autocomplete="off" class="form-control" name="" placeholder="yyyy-mm-dd" readonly="" value="{{$order->tgl_so}}" id="">
                                                            <span class="input-group-addon bg-custom b-0"><i class="icon-calender"></i></span>
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="id_faktur">No Faktur<span class="text-danger">*</span></label>
                                                    <input name="id_faktur"  autocomplete="off" required  value="{{$order->id_faktur}}"  type="number" placeholder="Masukan No Faktur" name" class="form-control" id="id_faktur">
                                                </div>

                                                <div class="form-group">
                                                    <label>Tanggal Faktur</label>
                                                    <div>
                                                        <div class="input-group">
                                                            <input type="text" autocomplete="off" ="" class="form-control" name="tgl_faktur" placeholder="yyyy-mm-dd" value="{{$order->tgl_faktur}}" id="tgl_faktur">
                                                            <span class="input-group-addon bg-custom b-0"><i class="icon-calender"></i></span>
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Status Pelunasan</label>
                                                    <div>
                                                        <div class="input-group">
                                                            @if($order->is_lunas == 1)
                                                            <p><strong  style="color: green; font-size: 20px">Lunas</strong></p>
                                                            @elseif($order->is_lunas == 0)
                                                            <p><strong style="color: red; font-size: 20px">Belum Lunas</strong></p>
                                                            @endif
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>



                                                <div class="form-group text-right m-b-0">
                                                    <button class="btn btn-primary width50 waves-light"  onclick="return confirm('Are you sure want to submit?');" type="submit">
                                                        Simpan
                                                    </button>
                                                    <a href="{{url('/tagihan')}}" class="width50 btn btn-secondary m-l-5">
                                                        Batal
                                                    </a>
                                                </div>
                                            <input type="hidden" name="_method" value="PUT">
                                            </form>
                                                
                                                
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