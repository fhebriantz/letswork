<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<!-- start: Css -->
	@include('include_cms/head')
	<!-- end: Css -->
  	@yield('header')
</head>

<body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

        	<!-- Top Bar Start -->
			@include('include_cms/topbar')
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
			@include('include_cms/left_sidebar')
            <!-- ========== Left Sidebar End ========== -->

		@yield('content')

            <!-- ========== footer Start ========== -->
			@include('include_cms/footer')
            <!-- ========== footer End ========== -->

        </div>
        <!-- END wrapper -->
</body>
	@include('include_cms/script')
 	@yield('script')
</html>