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
                                    <h4 class="page-title">Master Outlet User</h4>
                                    <ol class="breadcrumb p-0">
                                        <li>
                                            <a href="#">Slau</a>
                                        </li>
                                        <li>
                                            <a href="#">Outlet User</a>
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
                                                 @if (Session::has('message'))
                                                  <div class="alert alert-danger">{{ Session::get('message') }}</div>
                                                @endif
                                 <form method="POST" action="{{url('/outletuser/input')}}" data-parsley-validate novalidate>
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
                                                    <label for="id_user_group">User Group</label>
                                                    <select name="id_user_group" class="form-control">
                                                        <option value="">Pilih Kategori</option>
                                                        @foreach($usergroup as $group)
                                                        <option value="{{$group->id}}">{{$group->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="fullname">Nama Lengkap<span class="text-danger">*</span></label>
                                                    <input type="text" name="fullname"  required  value="{{ old('fullname') }}" placeholder="Name" name" class="form-control" id="fullname">
                                                </div>
                                                <div class="form-group">
                                                    <label for="gender">Jenis Kelamin</label>
                                                    <select name="gender" class="form-control">
                                                        <option>Pria</option>
                                                        <option>Wanita</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="handphone">Handphone<span class="text-danger">*</span></label>
                                                    <input name="handphone"  required  value="{{ old('handphone') }}" data-parsley-type="number" type="text" data-parsley-minlength="9" placeholder="Enter only number" name" class="form-control" id="handphone">
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">Alamat</label>
                                                    <textarea required class="form-control" id="summernote" name="address">{{ old('address') }}</textarea>
                                                </div>       
                                            </div>

                                        </div>

                                        <div class="col-sm-12 col-xs-12 col-md-6">
                                            <div class="p-20">
                                                <div class="form-group">
                                                        <label for="username">Username<span class="text-danger">*</span></label>
                                                        <input readonly="" type="text" name="username"  required  value="{{ old('username') }}" data-parsley-minlength="4" placeholder="Min 4 chars." name" class="form-control" id="username">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email<span class="text-danger">*</span></label>
                                                        <input readonly="" type="email" name="email" parsley-trigger="change" required  value="{{ old('email') }}" placeholder="Enter email" class="form-control" id="email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="old_password">Password Lama<span class="text-danger">*</span></label>
                                                        <input name="old_password" type="password" data-parsley-minlength="4" placeholder="Password Lama"  value=""  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pass1">Password Baru<span class="text-danger">*</span></label>
                                                        <input name="password" id="pass1" type="password" data-parsley-minlength="4" placeholder="Password"  value=""  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password_confirmation">Confirm Password <span class="text-danger">*</span></label>
                                                        <input name="password_confirmation" data-parsley-equalto="#pass1" data-parsley-minlength="4" type="password"  value="" placeholder="Password" class="form-control" id="password_confirmation">
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-light" type="submit">Simpan</button>
                                        <button type="reset" class="btn btn-secondary m-l-5">Batal</button>
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