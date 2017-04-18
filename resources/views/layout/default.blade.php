<!DOCTYPE html>
<html>
	<head>
		<!-- Title here -->
		<title>Projeto</title>
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		{{!! Html::style('css/bootstrap.min.css') !!}}
		{{!! Html::style('css/font-awesome.min.css') !!}}
		{{!! Html::style('css/jquery.gritter.css') !!}}
		{{!! Html::style('css/less-style.css') !!}}
		{{!! Html::style('css/style.css') !!}}
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

		{{!! Html::script('js/jquery.js') !!}}
		{{!! Html::script('js/bootstrap.min.js') !!}}
		{{!! Html::script('js/jquery-ui.min.js') !!}}
		{{!! Html::script('js/bootstrap-datetimepicker.min.js') !!}}
		{{!! Html::script('js/wysihtml5-0.3.0.js') !!}}
		{{!! Html::script('js/prettify.js') !!}}
		{{!! Html::script('js/bootstrap-wysihtml5.min.js') !!}}
		{{!! Html::script('js/jquery.validate.js') !!}}
		{{!! Html::script('js/jquery.steps.min.js') !!}}
		{{!! Html::script('js/jquery.knob.js') !!}}
		{{!! Html::script('js/jquery.slimscroll.min.js') !!}}
		{{!! Html::script('js/jquery.dataTables.min.js') !!}}
		{{!! Html::script('js/jquery.prettyPhoto.js') !!}}
		{{!! Html::script('js/jquery.rateit.min.js') !!}}
	    {{!! Html::script('js/moment.min.js') !!}}
	    {{!! Html::script('js/fullcalendar.min.js') !!}}
		{{!! Html::script('js/jquery.gritter.min.js') !!}}
		{{!! Html::script('js/custom.notification.js') !!}}
		{{!! Html::script('js/respond.min.js') !!}}
		{{!! Html::script('js/html5shiv.js') !!}}
		{{!! Html::script('js/custom.js') !!}}
	</body>
</html>
