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
                                    <h4 class="page-title">Master Laundry Service</h4>
                                    <ol class="breadcrumb p-0">
                                        <li>
                                            <a href="#">Slau</a>
                                        </li>
                                        <li>
                                            <a href="#">Laundry Service</a>
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
                                                <form method="POST" action="{{url('/laundryservice/input')}}" data-parsley-validate novalidate>
                                                {{ csrf_field() }}

                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12 col-md-6">


                                            <div class="p-20">
                                                
                                                 <div class="form-group">
                                                    <label for="id_outlet">Outlet</label>
                                                    <select name="id_outlet" class="form-control">
                                                        <option value="">Pilih Kategori</option>
                                                        @foreach($outlet as $out)
                                                        <option value="{{$out->id}}">{{$out->outlet_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="item">Item<span class="text-danger">*</span></label>
                                                    <input name="item"  required  value="{{ old('item') }}"  type="text" placeholder="Enter only number" name" class="form-control" id="item">
                                                </div>
                                                <div class="form-group">
                                                    <label for="type">Tipe</label>
                                                    <select name="type" class="form-control">
                                                        <option value="">Pilih Kategori</option>
                                                        <option value="perbulan">Perbulan
                                                        </option>
                                                         <option value="pertahun">Pertahun
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Deskripsi</label>
                                                    <textarea required class="form-control" id="summernote" name="description">{{ old('description') }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Harga (Rp)</label>
                                                    <input name="price" type="text" value="{{ old('price') }}" placeholder="Enter only number" data-parsley-type="number" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label>Harga Dryclean(Rp)</label>
                                                    <input name="price_dryclean" type="text" value="{{ old('price_dryclean') }}" placeholder="Enter only number" data-parsley-type="number" class="form-control">
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