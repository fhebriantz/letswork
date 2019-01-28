@extends('layouts.cms')

@section('header')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<style>
    .outer {
  display: table;
  height: 130px;
  width: 100%;
}

.middle {
  display: table-cell;
  vertical-align: middle;
}
/**/
.inner {
  margin-right: auto;
  width: 400px;
}
.price-detail{
    font-size: 60px;
    color: #1bb99a;
}
</style>
@endsection

@section('content')

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Master Customer</h4>
                                    <ol class="breadcrumb p-0">
                                        <li>
                                            <a href="#">Slau</a>
                                        </li>
                                        <li>
                                            <a href="#">Customer</a>
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

                                            @if($laundry->promo_name == "" || $laundry->promo_name == null)
                                            <?php $harga_akhir = $laundry->total_payment;?>
                                            @else
                                            <?php if ($laundry->promo_type == 'potongan_harga'): ?>
                                            <?php $harga_akhir = $laundry->total_payment - $laundry->promo_nominal;?>
                                            <?php elseif ($laundry->promo_type == 'diskon'): ?>
                                            <?php $harga_akhir = $laundry->total_payment - ($laundry->total_payment * $laundry->promo_nominal)/100;?>
                                            <?php else: ?>
                                            <?php $harga_akhir = $laundry->total_payment;?>
                                            <?php endif ?>
                                            @endif

                                            @if($laundry->addservice_price >= 1)
                                            <?php $harga_total = $harga_akhir + $laundry->addservice_price;?>
                                            @else
                                            <?php $harga_total = $harga_akhir;?>
                                            @endif

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2>{{$laundry->outlet_name}}</h2>
                                            <p>ID Transaksi : <strong>{{$laundry->id_trlaundry}}</strong></p>
                                            <p>Pegawai Kasir : <strong>{{$laundry->employee_name}}</strong></p>
                                            Tanggal Transaksi : <strong>{{ \Carbon\Carbon::parse($laundry->date_in)->format('d F Y H:i:s')}}</strong>
                                        </div>
                                        <div class="col-md-6 outer">
                                          <div class="middle">
                                            <div class="inner">
                                              <h1 class="price-detail autonumber" data-a-sign="Rp ">{{$harga_total}}</h1>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label for="">Nama Customer</label>
                                            <p>{{$laundry->cust_fullname}}</p>


                                            <label for="">Jenis Kelamin</label>
                                            <p>{{$laundry->cust_gender}}</p>


                                            <label for="">Nomor Telepon</label>
                                            <p>{{$laundry->cust_handphone}}</p>
                                            
                                            <label for="">Alamat Customer</label>
                                            <p>{{$laundry->cust_address}}, {{$laundry->cust_kelurahan}} <br>{{$laundry->cust_kecamatan}}, {{$laundry->cust_kabkota}}, {{$laundry->cust_provinsi}}, {{$laundry->cust_kodepos}}</p>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="card-box">
                                            <label for="">Tanggal</label>
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Jenis Tanggal</th>
                                                        <th>Tanggal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tanggal Masuk</td>
                                                        <td>{{ \Carbon\Carbon::parse($laundry->date_in)->format('d F Y H:i:s')}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Estimasi</td>
                                                        <td>{{ \Carbon\Carbon::parse($laundry->date_end_estimated)->format('d F Y H:i:s')}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Mulai</td>
                                                        <td>{{ \Carbon\Carbon::parse($laundry->date_start)->format('d F Y H:i:s')}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Selesai</td>
                                                        <td>{{ \Carbon\Carbon::parse($laundry->date_end)->format('d F Y H:i:s')}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Diambil</td>
                                                        <td>{{ \Carbon\Carbon::parse($laundry->date_out)->format('d F Y H:i:s')}}</td>
                                                    </tr>
                                                </tbody>
                                            </table> 
                                </div>


                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label for="">Jumlah Baju</label>
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th>Jumlah</th>
                                                        <th>Harga Normal</th>
                                                        <th>Harga Dryclean</th>
                                                    </tr>
                                                </thead>


                                                <tbody>    
                                                    @foreach($item as $barang)         
                                                    <tr>
                                                        <td>{{$barang->item}}</td>
                                                        <td>{{$barang->qty}}</td>
                                                        <td class="autonumber" data-a-sign="Rp ">{{$barang->price}}</td>
                                                        <td class="autonumber" data-a-sign="Rp ">{{$barang->price_dryclean}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>


                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-sm-6 test">

                                            <label for="">Kode Promo</label>
                                            <p>@if($laundry->promo_name == "" || $laundry->promo_name == null)-@else{{$laundry->promo_code}}@endif</p>
                                            

                                            <label for="">Promo</label>
                                            <p>@if($laundry->promo_name == "" || $laundry->promo_name == null)-@else{{$laundry->promo_name}}@endif</p>

                                            <label for="">Tipe Promo</label>
                                            <p>@if($laundry->promo_name == "" || $laundry->promo_name == null)-@else{{$laundry->promo_type}}@endif</p>

                                            <label for="">Nominal</label>
                                            <p>@if($laundry->promo_name == "" || $laundry->promo_name == null)-@else{{$laundry->promo_nominal}}@endif</p>

                                            <label for="">Harga Awal</label>
                                            <p class="autonumber" data-a-sign="Rp ">{{$laundry->total_payment}}</p>

                                            <label for="">Harga Akhir</label>
                                            <p class="autonumber" data-a-sign="Rp ">{{$harga_akhir}}</p>

                                            <label for="">Servis Tambahan</label>
                                            <p>@if($laundry->addservice_item == 0 || $laundry->addservice_item == null)-@else{{$laundry->addservice_item}}@endif</p>
                                            
                                            <label for="">Harga Servis Tambahan</label>
                                            <p class="autonumber" data-a-sign="Rp ">{{$laundry->addservice_price}}</p>
                                            
                                        </div>
                                        <div class="col-sm-6 test">
                                            <label for="">Jenis Cucian</label>
                                            <p>@if($laundry->is_express == 1) Cuci Express
                                            @else Cuci Biasa
                                            @endif</p>


                                            <label for="">Penjemputan</label>
                                            <p>@if($laundry->is_pickup == 1) Cucian Dijemput
                                            @else Cucian Tidak Dijemput
                                            @endif</p>

                                            <label for="">Pengambilan</label>
                                            <p>@if($laundry->is_delivery == 1) Cucian Diantar
                                            @else Cucian Tidak Diantar
                                            @endif </p>

                                            <label for="">Jumlah Satuan</label>
                                            <p>@if($laundry->qty_satuan == 0 || $laundry->qty_satuan == null || $laundry->qty_satuan == "")@else{{$laundry->qty_satuan}}@endif</p>

                                            <label for="">Jumlah Kiloan (kg)</label>
                                            <p>{{$laundry->qty_kiloan}} kg</p>

                                            <label for="">Status</label>
                                            <p>{{$laundry->status}}</p>

                                            <label for="">Total Harga</label>
                                            <p class="autonumber" data-a-sign="Rp ">{{$harga_total}}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-box">
                                    <label for="">Pembayaran</label>
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Tipe</th>
                                                <th>Tipe Pembayaran</th>
                                                <th>Jumlah</th>
                                                <th>Pemilik Akun</th>
                                                <th>Tanggal</th>
                                            </tr>
                                        </thead>


                                        <tbody>     
                                            @foreach($payment as $bayar)        
                                            <tr>
                                                <td>{{$bayar->type}}</td>
                                                <td>{{$bayar->payment_type}}</td>
                                                <td class="autonumber" data-a-sign="Rp ">{{$bayar->amount}}</td>
                                                <td>{{$bayar->account_holder}}</td>
                                                <td>{{ \Carbon\Carbon::parse($bayar->payment_date)->format('d F Y H:i:s')}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="card-box">
                                    <label for="">Status Pengerjaan</label>
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Status</th>
                                                <th>Pegawai</th>
                                            </tr>
                                        </thead>


                                        <tbody>     
                                            @foreach($task as $status)     
                                            <tr>
                                                <td>{{$status->status}}</td>
                                                <td>{{$status->outlet_user}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
        <script src="{{ asset('plugins/autoNumeric/autoNumeric.js')}}" type="text/javascript"></script>

        <script type="text/javascript">
          jQuery(function($) {
              $('.autonumber').autoNumeric('init');
          });
        </script>
@endsection