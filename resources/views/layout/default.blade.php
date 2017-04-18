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
		<title>Barnie</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<!-- jQuery gritter -->
		<link href="css/jquery.gritter.css" rel="stylesheet">
		<!-- Custom Color CSS -->
		<link href="css/less-style.css" rel="stylesheet">
		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">

		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
	</head>

	<body>

		<div class="outer">

      @include('layout.sidebar')

			<!-- Mainbar starts -->
			<div class="mainbar">

				<!-- Mainbar head starts -->
				<div class="main-head">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-4 col-xs-6">
								<!-- Page title -->
								<h2><i class="fa fa-desktop lblue"></i> Dashboard</h2>
							</div>

							<div class="col-md-3 col-sm-4 col-xs-6">
								<!-- Search block -->
								<div class="head-search">
									<form class="form" role="form">
										<div class="input-group">
										  <input type="text" class="form-control" placeholder="Search...">
										  <span class="input-group-btn">
											<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
										  </span>
										</div>
									</form>
								</div>
							</div>

							<div class="col-md-3 col-sm-4 hidden-xs">
								<!-- Notifications -->
								<div class="head-noty text-center">

									  <!-- Notifications -->
									  <div class="dropdown">
										  <a href="#" id="notifications" data-toggle="dropdown" class="mhead-icon" ><i class="fa fa-bell"></i> <span class="label label-info">5</span></a>
										  <!-- Dropdown -->
										  <ul class="dropdown-menu" role="button" aria-labelledby="notifications">

											<!-- Dropdown menu head -->
											<li class="dropdown-head">
												Notifications <span class="label label-info pull-right">5</span>
											</li>
											<!-- Content -->
											<li><a href="#">
												<!-- Colored icon with text and time -->
												<i class="fa fa-user"></i> New User Registered <b class="pull-right">5 mins ago</b>
												<div class="clearfix"></div>
											</a></li>
											<li><a href="#">
												<i class="fa fa-shopping-cart"></i> New Order for Dress <b class="pull-right">10 mins ago</b>
												<div class="clearfix"></div>
											</a></li>
											<li><a href="#">
												<i class="fa fa-sign-out"></i> User Ravi Kumar Sign Out <b class="pull-right">20 hr ago</b>
												<div class="clearfix"></div>
											</a></li>
											<li><a href="#">
												<i class="fa fa-envelope"></i> New Message from Ravi <b class="pull-right">1 day ago</b>
												<div class="clearfix"></div>
											</a></li>
											<li><a href="#">
												<i class="fa fa-laptop"></i> Full Backup Completed <b class="pull-right">2 day ago</b>
												<div class="clearfix"></div>
											</a></li>

											<li class="dropdown-foot text-center">
												<a href="#">View All</a>
											</li>

										  </ul>
									  </div>

									  <!-- Messages -->
									  <div class="dropdown">
										  <a href="#" id="messages" data-toggle="dropdown" class="mhead-icon" ><i class="fa fa-envelope"></i> <span class="label label-danger">5</span></a>
										  <ul class="dropdown-menu" role="button" aria-labelledby="messages">

											<!-- Dropdown menu head -->
											<li class="dropdown-head">
												Messages <span class="label label-danger pull-right">5</span>
											</li>
											<!-- Content -->
											<li><a href="#">
												<!-- Title -->
												Hello How are you? <i class="fa fa-reply pull-right"></i>
												<!-- Para -->
												<span>Lorem ipsum dolor sit amet something elit.</span>
												<div class="clearfix"></div>
											</a></li>
											<li><a href="#">
												What are you doing today? <i class="fa fa-reply pull-right"></i>
												<span>Lorem ipsum dolor sit amet something elit.</span>
												<div class="clearfix"></div>
											</a></li>
											<li><a href="#">
												Why don't you come here? <i class="fa fa-reply pull-right"></i>
												<span>Lorem ipsum dolor sit amet something elit.</span>
												<div class="clearfix"></div>
											</a></li>

											<li class="dropdown-foot text-center">
												<a href="#">View All</a>
											</li>

										  </ul>
									  </div>

									  <!-- Users -->
									  <div class="dropdown">
										  <a href="#" id="users" data-toggle="dropdown" class="mhead-icon" ><i class="fa fa-user"></i> <span class="label label-success">5</span></a>
										  <!-- Dropdown -->
										  <ul class="dropdown-menu drop-users" role="button" aria-labelledby="users">

											<!-- Dropdown menu head -->
											<li class="dropdown-head">
												Users <span class="label label-success pull-right">5</span>
											</li>
											<!-- Content -->
											<li><a href="#">
												<!-- User image -->
												<img src="img/user1.png" alt="" class="img-responsive img-circle" />
												<!-- User details -->
												<div class="duser-content">
													Anjelina Jolie
													<span>Lorem ipsum dolor sit amet elit.</span>
												</div>
												<div class="clearfix"></div>
											</a></li>
											<li><a href="#">
												<img src="img/user2.png" alt="" class="img-responsive img-circle" />
												<div class="duser-content">
													Brad Pitt
													<span>Lorem ipsum dolor sit amet elit.</span>
												</div>
												<div class="clearfix"></div>
											</a></li>
											<li><a href="#">
												<img src="img/user1.png" alt="" class="img-responsive img-circle" />
												<div class="duser-content">
													Al Pacino
													<span>Lorem ipsum dolor sit amet elit.</span>
												</div>
												<div class="clearfix"></div>
											</a></li>

											<li class="dropdown-foot text-center">
												<a href="#">View All</a>
											</li>

										  </ul>
									  </div>

								</div>
								<div class="clearfix"></div>
							</div>


							<div class="col-md-3 hidden-sm hidden-xs">
								<!-- Head user -->
								<div class="head-user dropdown pull-right">
									<a href="#" data-toggle="dropdown" id="profile">
										<!-- Icon
										<i class="fa fa-user"></i>  -->

										<img src="img/user2.png" alt="" class="img-responsive img-circle"/>

										<!-- User name -->
										ashokram <span class="label label-danger">5</span>
										<i class="fa fa-caret-down"></i>
									</a>
									<!-- Dropdown -->
									<ul class="dropdown-menu" aria-labelledby="profile">
									    <li><a href="#">View/Edit Profile <span class="badge badge-info pull-right">6</span></a></li>
										<li><a href="#">Change Settings</a></li>
										<li><a href="#">Messages <span class="badge badge-danger pull-right">5</span></a></li>
										<li><a href="#">Sign Out</a></li>
									</ul>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

				</div>

				<!-- Mainbar head ends -->

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


						</div>

					</div>
				</div>

			</div>
			<!-- Mainbar ends -->

			<div class="clearfix"></div>
		</div>

		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- jQuery UI -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- Date Time Picker JS -->
		<script src="js/bootstrap-datetimepicker.min.js"></script>
		<!-- Bootstrap wysihtml5 JS -->
		<script src="js/wysihtml5-0.3.0.js"></script>
		<script src="js/prettify.js"></script>
		<script src="js/bootstrap-wysihtml5.min.js"></script>
		<!-- Validate JS -->
		<script src="js/jquery.validate.js"></script>
		<!-- Form wizard steps  JS -->
		<script src="js/jquery.steps.min.js"></script>
		<!-- jQuery Knob -->
		<script src="js/jquery.knob.js"></script>
		<!-- jQuery slim scroll -->
		<script src="js/jquery.slimscroll.min.js"></script>
		<!-- Data Tables JS -->
		<script src="js/jquery.dataTables.min.js"></script>
		<!-- Pretty Photo JS -->
		<script src="js/jquery.prettyPhoto.js"></script>
		<!-- Rate It JS -->
		<script src="js/jquery.rateit.min.js"></script>
		<!-- Full calendar -->
	    <script src="js/moment.min.js"></script>
	    <script src="js/fullcalendar.min.js"></script>
		<!-- jQuery gritter -->
		<script src="js/jquery.gritter.min.js"></script>
		<!-- jQuery gritter notification -->
		<script src="js/custom.notification.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="js/custom.js"></script>

		<!-- Javascript for this page -->

        <script type="text/javascript">
		</script>

	</body>
</html>
