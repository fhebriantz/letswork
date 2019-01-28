@extends('layouts.cms')

@section('header')
<!-- Header -->
@endsection

@section('content')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Form elements</h4>
                                    <ol class="breadcrumb p-0">
                                        <li>
                                            <a href="#">Uplon</a>
                                        </li>
                                        <li>
                                            <a href="#">Forms</a>
                                        </li>
                                        <li class="active">
                                            Form elements
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="row">
                        	<div class="col-sm-12">
                        		<div class="card-box">

                        			<h4 class="header-title m-t-0 m-b-30">Input Types</h4>


                        			<div class="row">
                        				<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-12">
                                            <form>
                                                <fieldset class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                           placeholder="Enter email">
                                                    <small class="text-muted">We'll never share your email with anyone
                                                        else.
                                                    </small>
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control"
                                                           id="exampleInputPassword1" placeholder="Password">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label for="exampleSelect1">Example select</label>
                                                    <select class="form-control" id="exampleSelect1">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label for="exampleTextarea">Example textarea</label>
                                                    <textarea class="form-control" id="exampleTextarea"
                                                              rows="3"></textarea>
                                                </fieldset>

                                                <fieldset class="form-group">
                                                    <label >Example Readonly</label>
                                                    <input class="form-control" type="text" placeholder="Readonly input here…" readonly>
                                                </fieldset>
                                                 <fieldset>
                                                    <div class="form-group has-success">
                                                        <label class="form-control-label" for="inputSuccess1">Input with
                                                            success</label>
                                                        <input type="text" class="form-control form-control-success"
                                                               id="inputSuccess1">
                                                    </div>
                                                    <div class="form-group has-warning">
                                                        <label class="form-control-label" for="inputWarning1">Input with
                                                            warning</label>
                                                        <input type="text" class="form-control form-control-warning"
                                                               id="inputWarning1">
                                                    </div>
                                                    <div class="form-group has-danger">
                                                        <label class="form-control-label" for="inputDanger1">Input with
                                                            danger</label>
                                                        <input type="text" class="form-control form-control-danger"
                                                               id="inputDanger1">
                                                    </div>
                                                </fieldset>
                                                <fieldset>
	                                                <div class="form-group row">
	                                                    <label for="inputEmail3"
	                                                           class="col-sm-2 form-control-label">Email</label>
	                                                    <div class="col-sm-10">
	                                                        <input type="email" class="form-control" id="inputEmail3"
	                                                               placeholder="Email">
	                                                    </div>
	                                                </div>
	                                                <div class="form-group row">
	                                                    <label for="inputPassword3" class="col-sm-2 form-control-label">Password</label>
	                                                    <div class="col-sm-10">
	                                                        <input type="password" class="form-control" id="inputPassword3"
	                                                               placeholder="Password">
	                                                    </div>
	                                                </div>
	                                                <div class="form-group row">
	                                                    <label class="col-sm-2">Radios</label>
	                                                    <div class="col-sm-10">
	                                                        <div class="radio">
			                                                    <input type="radio" name="radio" id="radio1" value="option1" checked>
			                                                    <label for="radio1">
			                                                        Option one is this and that&mdash;be sure to include why
	                                                                it's great
			                                                    </label>
			                                                </div>
			                                                <div class="radio">
			                                                    <input type="radio" name="radio" id="radio2" value="option2">
			                                                    <label for="radio2">
			                                                        Option two can be something else and selecting it will
	                                                                deselect option one
			                                                    </label>
			                                                </div>
			                                                <div class="radio">
			                                                    <input type="radio" name="radio" id="radio3" value="option3" disabled>
			                                                    <label for="radio3">
			                                                        Option three is disabled
			                                                    </label>
			                                                </div>

	                                                    </div>
	                                                </div>
	                                                <div class="form-group row">
	                                                    <label class="col-sm-2">Checkbox</label>
	                                                    <div class="col-sm-10">
	                                                        <div class="checkbox checkbox-primary">
	                                                            <input id="checkbox21" type="checkbox">
	                                                            <label for="checkbox21">
	                                                                Check me out
	                                                            </label>
	                                                        </div>
	                                                    </div>
	                                                </div>
                                                </fieldset>
                                                <fieldset>
                                                	<div class="">
				                                        <h6 class="m-b-20 text-muted">Checkboxes</h6>
				                                        <label class="c-input c-checkbox">
				                                            <input type="checkbox">
				                                            <span class="c-indicator"></span>
				                                            Check this custom checkbox
				                                        </label>

				                                        <label class="c-input c-checkbox">
				                                            <input type="checkbox">
				                                            <span class="c-indicator"></span>
				                                            Check this custom checkbox
				                                        </label>
				                                    </div>

				                                    <div class="m-t-30">
				                                        <h6 class="m-b-20 text-muted">Radios</h6>
				                                        <label class="c-input c-radio">
				                                            <input id="radio11" name="radio" type="radio">
				                                            <span class="c-indicator"></span>
				                                            Toggle this custom radio
				                                        </label>
				                                        <label class="c-input c-radio">
				                                            <input id="radio21" name="radio" type="radio">
				                                            <span class="c-indicator"></span>
				                                            Or toggle this other custom radio
				                                        </label>
				                                    </div>

				                                    <div class="m-t-30">
				                                        <h6 class="m-b-20 text-muted">Select menu</h6>
				                                        <select class="c-select">
				                                            <option selected>Open this select menu</option>
				                                            <option value="1">One</option>
				                                            <option value="2">Two</option>
				                                            <option value="3">Three</option>
				                                        </select>
				                                    </div>

				                                    <div class="m-t-30">
				                                        <h6 class="m-b-20 text-muted">File browser</h6>
				                                        <label class="file">
				                                            <input type="file" id="file">
				                                            <span class="file-custom"></span>
				                                        </label>
				                                    </div>
                                                </fieldset>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                        				</div><!-- end col -->
                        			</div><!-- end row -->
                        		</div>
                        	</div><!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- container -->

                </div> <!-- content -->

            </div>
            <!-- End content-page -->


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

@endsection

@section('script')

        <script>
            var resizefunc = [];
        </script>
<!-- Header -->
@endsection