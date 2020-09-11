<!DOCTYPE html>
<html>
	<head>
		@include('manage.blocks.head')
	</head>
	<body class="hold-transition sidebar-mini layout-fixed">
		<div class="wrapper">
			<!-- Navbar -->
			@include('manage.blocks.nav')
			<!-- /.navbar -->
			<!-- Main Sidebar Container -->
			@include('manage.blocks.aside')
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<!-- /.content-header -->
                <!-- Main content -->
				@yield('content')
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
			@include('manage.blocks.content-footer')
			<!-- Control Sidebar -->
			<aside class="control-sidebar control-sidebar-dark">

			</aside>
			<!-- /.control-sidebar -->
		</div>
		<!-- ./wrapper -->
		@include('manage.blocks.foot')
	</body>
</html>
