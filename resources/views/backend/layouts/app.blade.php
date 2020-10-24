<!DOCTYPE html>
<html lang="en">
<head>
	@include('backend.layouts.header')
</head>
<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">
		<!-- Side Bar -->
		@include('backend.layouts.sidebar')

		<!-- Content Wrapper -->
    	<div id="content-wrapper" class="d-flex flex-column">

      		<!-- Main Content -->
      		<div id="content">

      			<!-- Topbar -->
      			@include('backend.layouts.topbar')
				
      			<!-- Begin Page Content -->
		        <div class="container-fluid">
		        	@yield('content')
		        </div>
      		</div>

      		<!-- Footer -->
      		@include('backend.layouts.footer')
      	</div>
  	</div>

 	<!-- Logout Modal-->
 	@include('backend.layouts.logout-modal')

 	<!-- Script -->
 	@include('backend.layouts.script')
</body>
</html>