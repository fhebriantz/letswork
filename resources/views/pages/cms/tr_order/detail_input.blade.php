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
                                    <h4 class="page-title">Master Detail</h4>
                                    <ol class="breadcrumb p-0">
                                        <li>
                                            <a href="#">Slau</a>
                                        </li>
                                        <li>
                                            <a href="#">Detail</a>
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


                                            <div class="p-20">
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
                                                            <th>Action</th>
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
                                                            <td>
                                                                <form method="POST" style="display: inline-block;" action="{{url('/detail/'.$detail->id.'/delete')}}">
                                                                {{ csrf_field() }}
                                                                <button class="btn btn-action marginright btn-trash-list" type="submit" name="delete" onclick="return confirm('Are you sure want to delete {{$detail->id}}?');"><img class="trash-list" src="{{ asset('images/icon/trash.png')}}" alt=""></button> 
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                                <div class="form-group">
                                                    <label for="total_bayar">Total Harga<span class="text-danger">*</span></label>
                                                    <input name="total_bayar" value="{{$sum}}"  autocomplete="off"     type="text" placeholder="0" readonly="" class="form-control" id="total_bayar">
                                                </div>
                                                <p style="padding-top: 10px; color: #00b987"><strong>{{session()->get('message')}}</strong></p>
                                                
                                                <form method="POST" action="{{url('/detail/'.$id_trans_order.'/input')}}" data-parsley-validate novalidate>
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label for="nama_barang">Nama Barang<span class="text-danger">*</span></label>
                                                    <input name="nama_barang"  autocomplete="off"     type="text" placeholder="Masukan Nama Barang" name" class="form-control" id="nama_barang">
                                                </div>
                                                <div class="form-group">
                                                    <label for="kemasan">Kemasan<span class="text-danger">*</span></label>
                                                    <input name="kemasan"  autocomplete="off"     type="text" placeholder="Masukan Kemasan" name" class="form-control" id="kemasan">
                                                </div>
                                                <div class="form-group">
                                                    <label for="qty">Jumlah<span class="text-danger">*</span></label>
                                                    <input name="qty"  autocomplete="off"     type="number" max="99999" placeholder="Masukan Jumlah" name" class="form-control" id="qty">
                                                </div>
                                                <div class="form-group">
                                                    <label for="ukuran">Ukuran<span class="text-danger">*</span></label>
                                                    <input name="ukuran"  autocomplete="off"  type="text" placeholder="Masukan Ukuran" name" class="form-control" id="ukuran">
                                                </div>
                                                <div class="form-group">
                                                    <label for="harga">Harga<span class="text-danger">*</span></label>
                                                    <input name="harga"  autocomplete="off"     type="number" placeholder="Masukan Stok" name" class="form-control" id="harga">
                                                </div>



                                                <div class="form-group text-right m-b-0">
                                                    <button class="btn btn-primary waves-light" style="width: 100%" type="submit">
                                                        Tambahkan Barang
                                                    </button>
                                                </div>
                                                
                                            </div>

                                        </div>

                                        </form>

                                        <div class="col-sm-12 col-xs-12 col-md-12">
                                            <div class="p-20">
                                                <!-- RIGHT SIDE -->
                                            </div>
                                        </div>
                                        
                                    </div>
                                <form method="POST" action="{{url('/detail/'.$id_trans_order.'/active')}}" data-parsley-validate novalidate>
                                                {{ csrf_field() }}
                                    <div class="form-group text-right m-b-0">

                                        <input name="total_bayar" hidden="" value="{{$sum}}"  autocomplete="off"     type="text" placeholder="0" readonly="" class="form-control" id="total_bayar">

                                        <button class="btn btn-primary waves-light" type="submit">
                                            Simpan & Selesai
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
          $('#tgl_lahir').datepicker({
                
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