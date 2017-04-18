{{-- <!doctype html>
<html>
<head> --}}
<!-- my head section goes here -->
<!-- my css and js goes here -->
{{-- </head>
<body>
  <div class="container">
    <header> @include('layout.header') </header>
      <div class="sidebar"> @include('layout.sidebar') </div>
      <div class="contents"> @yield('content') </div>
    <footer> @include('layout.footer') </footer>
  </div>
</body>
</html> --}}



<!DOCTYPE html>
<html>
	<head>
		<!-- Title here -->
		<title>Projeto</title>
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/jquery.gritter.css" rel="stylesheet">
		<link href="css/less-style.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link rel="shortcut icon" href="#">
	</head>
	<body>
		<div class="outer">
      		@include('layout.sidebar')

			<!-- Mainbar starts -->
			<div class="mainbar">
				@include('layout.header')
				<div class="main-content">
					<div class="container">
						<div class="page-content">
							<!-- Heading -->
							<div class="single-head">
								<!-- Heading -->
								<h3 class="pull-left"><i class="fa fa-desktop purple"></i> Your Page</h3>
								<!-- Bread crumbs -->
								<div class="breads pull-right">
									<strong>Nav</strong> : <a href="#">Home</a> / <a href="#">Sign</a> / Home
								</div>
								<div class="clearfix"></div>
							</div>
							@yield('content')
						</div>
					</div>
				</div>
			</div>
			<!-- Mainbar ends -->
			<div class="clearfix"></div>
		</div>

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/bootstrap-datetimepicker.min.js"></script>
		<script src="js/wysihtml5-0.3.0.js"></script>
		<script src="js/prettify.js"></script>
		<script src="js/bootstrap-wysihtml5.min.js"></script>
		<script src="js/jquery.validate.js"></script>
		<script src="js/jquery.steps.min.js"></script>
		<script src="js/jquery.knob.js"></script>
		<script src="js/jquery.slimscroll.min.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/jquery.prettyPhoto.js"></script>
		<script src="js/jquery.rateit.min.js"></script>
	    <script src="js/moment.min.js"></script>
	    <script src="js/fullcalendar.min.js"></script>
		<script src="js/jquery.gritter.min.js"></script>
		<script src="js/custom.notification.js"></script>
		<script src="js/respond.min.js"></script>
		<script src="js/html5shiv.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>
