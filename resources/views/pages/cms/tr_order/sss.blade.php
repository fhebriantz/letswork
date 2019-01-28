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
                                                <label for="">Detail Order Transaksi<span class="text-danger">*</span></label>

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
                                                            <td><a href="{{url('detail/'.$detail->id.'/view')}}">{{$detail->kemasan}}</a></td>
                                                            <td>
                                                                <a class="btn btn-action marginright btn-pencil-list" href="{{url('detail/'.$detail->id.'/edit')}}"><img class="pencil-list" src="{{ asset('images/icon/pencil.png')}}" alt="" ></a>
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
                                                <p style="padding-top: 10px; color: #00b987"><strong>{{session()->get('message')}}</strong></p>
                                                <form method="POST" action="{{url('detail/'.$order->id_trans_order.'/input')}}" data-parsley-validate novalidate>
                                                {{ csrf_field() }}
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
                                                    <button class="btn btn-primary waves-light widthmobile"  type="submit" onclick="return confirm('Are you sure?');">
                                                        Tambah Barang
                                                    </button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>


                                        
                                        
                                    </div>
                                    <!-- end row -->
                    </div>
                    <div class="card-box">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12 col-md-12">
                                            


                                            <div class="">
                                                <form method="POST" action="{{url('/order/'.$order->id.'/edit')}}" data-parsley-validate novalidate>
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label for="id_dokter">Dokter</label>
                                                    <select name="id_dokter" class="form-control">
                                                        <option value="">Pilih Dokter</option>
                                                        @foreach($dokter as $dok)
                                                        <option value="{{$dok->id}}"
                                                            <?php if ($order->id_dokter == $dok->id): ?>
                                                            <?php echo "selected" ?>
                                                            <?php endif ?>>{{$dok->nama_dokter}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="id_medrep">Medrep</label>
                                                    <select name="id_medrep" class="form-control">
                                                        <option value="">Pilih Medrep</option>
                                                        @foreach($medrep as $med)
                                                        <option value="{{$med->id}}"
                                                            <?php if ($order->id_medrep == $med->id): ?>
                                                            <?php echo "selected" ?>
                                                            <?php endif ?>>{{$med->nama_medrep}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                
                                                
                                                <div class="form-group">
                                                    <label>Tanggal SO</label>
                                                    <div>
                                                        <div class="input-group">
                                                            <input type="text" autocomplete="off" class="form-control" name="tgl_so" placeholder="yyyy-mm-dd" value="{{$order->tgl_so}}" id="tgl_so">
                                                            <span class="input-group-addon bg-custom b-0"><i class="icon-calender"></i></span>
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Tanggal Transaksi</label>
                                                    <div>
                                                        <div class="input-group">
                                                            <input type="text" autocomplete="off" class="form-control" name="tgl_trans_order" placeholder="yyyy-mm-dd" value="{{$order->tgl_trans_order}}" id="tgl_trans_order">
                                                            <span class="input-group-addon bg-custom b-0"><i class="icon-calender"></i></span>
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="id_so">ID SO<span class="text-danger">*</span></label>
                                                    <input name="id_so"  autocomplete="off" required  value="{{$order->id_so}}"  type="number" placeholder="Masukan ID SO" name" class="form-control" id="id_so">
                                                </div>

                                                <div class="form-group">
                                                    <label for="no_so">No SO<span class="text-danger">*</span></label>
                                                    <input name="no_so"  autocomplete="off" required  value="{{$order->no_so}}"   type="number" placeholder="Masukan No SO" name" class="form-control" id="no_so">
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
                                                            <input type="text" autocomplete="off" class="form-control" name="tgl_tagihan" placeholder="yyyy-mm-dd" value="{{$order->tgl_tagihan}}" id="tgl_tagihan">
                                                            <span class="input-group-addon bg-custom b-0"><i class="icon-calender"></i></span>
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Tanggal Faktur</label>
                                                    <div>
                                                        <div class="input-group">
                                                            <input type="text" autocomplete="off" class="form-control" name="tgl_faktur" placeholder="yyyy-mm-dd" value="{{$order->tgl_faktur}}" id="tgl_faktur">
                                                            <span class="input-group-addon bg-custom b-0"><i class="icon-calender"></i></span>
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="id_faktur">ID Faktur<span class="text-danger">*</span></label>
                                                    <input name="id_faktur"  autocomplete="off" required  value="{{$order->id_faktur}}"  type="number" placeholder="Masukan ID SO" name" class="form-control" id="id_faktur">
                                                </div>

                                                <div class="form-group">
                                                    <label for="is_lunas">Lunas/Belum Lunas<span class="text-danger">*</span></label>
                                                    <select name="is_lunas" class="form-control">
                                                        <option value="">Pilih Kategori</option>
                                                        <option value="1"
                                                            <?php if ($order->is_lunas == 1): ?>
                                                            <?php echo "selected" ?>
                                                            <?php endif ?>
                                                            ><strong style="color: green">LUNAS</strong>
                                                        </option>
                                                        <option value="0"
                                                            <?php if ($order->is_lunas == 0): ?>
                                                            <?php echo "selected" ?>
                                                            <?php endif ?>
                                                            ><strong style="color: red">BELUM LUNAS</strong>
                                                        </option>
                                                    </select>
                                                </div>
                                                
                                                <div class="form-group text-right m-b-0">
                                                    <button class="btn btn-primary width50 waves-light" type="submit">
                                                        Simpan
                                                    </button>
                                                    <a href="{{url('/order')}}" class="width50 btn btn-secondary m-l-5">
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