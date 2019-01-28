@extends('layouts.cms')

@section('header')
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
        <!-- Include Required Prerequisites -->
        <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
@endsection

@section('content')

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Master Promo</h4>
                                    <ol class="breadcrumb p-0">
                                        <li>
                                            <a href="#">Slau</a>
                                        </li>
                                        <li>
                                            <a href="#">Promo</a>
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
                                                <form method="POST" action="{{url('/promo/'.$promo->id.'/edit')}}" data-parsley-validate novalidate>
                                                {{ csrf_field() }}

                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12 col-md-6">


                                            <div class="p-20">
                                                
                                                 <div class="form-group">
                                                    <label for="id_outlet">Outlet</label>
                                                    <select name="id_outlet" class="form-control">
                                                        <option value="">Pilih Kategori</option>
                                                        @foreach($outlet as $out)
                                                        <option value="{{$out->id}}"
                                                            <?php if ($promo->id_outlet == $out->id): ?>
                                                            <?php echo "selected" ?>
                                                            <?php endif ?>>{{$out->outlet_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="promo_code">Promo Kode<span class="text-danger">*</span></label>
                                                    <input name="promo_code"  required  value="{{$promo->promo_code}}"  type="text"  class="form-control" id="promo_code">
                                                </div>
                                                <div class="form-group">
                                                    <label for="promo_name">Nama Promo<span class="text-danger">*</span></label>
                                                    <input name="promo_name"  required  value="{{$promo->promo_name}}"  type="text"  class="form-control" id="promo_name">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nominal</label>
                                                    <input name="nominal" type="text" value="{{$promo->nominal}}" placeholder="Enter only number" data-parsley-type="number" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="type">Tipe</label>
                                                    <select name="type" class="form-control">
                                                        <option value="potongan_harga"
                                                        <?php if ($promo->type == "potongan_harga"): ?>
                                                            <?php echo "selected" ?>
                                                            <?php endif ?>>Potongan Harga</option>
                                                        <option value="diskon" 
                                                        <?php if ($promo->type == "diskon"): ?>
                                                            <?php echo "selected" ?>
                                                            <?php endif ?>>Diskon</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Deskripsi</label>
                                                    <textarea required class="form-control" id="summernote" name="description">{{$promo->description}}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Date Range With Time</label>
                                                    <div>
                                                        <input type="text" class="form-control" id="daterange" name="daterange" autocomplete="off" value="{{$promo->start_date}} s/d {{$promo->end_date}}" readonly="" />
                                                    </div>
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
          $('#daterange').daterangepicker({
                "showISOWeekNumbers": true,
                "timePicker": true,
                "autoUpdateInput": true,
                "locale": {
                    "cancelLabel": 'Clear',
                    "format": "YYYY-MM-DD HH:MM:SS",
                    "separator": " s/d ",
                    "applyLabel": "Apply",
                    "cancelLabel": "Cancel",
                    "fromLabel": "From",
                    "toLabel": "To",
                    "customRangeLabel": "Custom",
                    "weekLabel": "W",
                    "daysOfWeek": [
                        "Min",
                        "Sen",
                        "Sel",
                        "Rab",
                        "Kam",
                        "Jum",
                        "Sab"
                    ],
                    "monthNames": [
                        "Januari",
                        "Februari",
                        "Maret",
                        "April",
                        "Mei",
                        "Juni",
                        "Juli",
                        "Augustus",
                        "September",
                        "Oktober",
                        "November",
                        "Desember"
                    ],
                    "firstDay": 1
                },
                "linkedCalendars": true,
                "showCustomRangeLabel": false,
                "startDate": "{{$promo->start_date}}",
                "endDate": "{{$promo->end_date}}",
                "opens": "center"
            });

        });
        </script>

                <!-- Include Date Range Picker -->
        <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />





@endsection