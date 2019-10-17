<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Noveo Tech - CMS</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/favicon.png') }}" />
	<link href="http://fonts.googleapis.com/css?family=Nunito:400,300,700') }}" rel="stylesheet" id="fontFamilySrc" />
	<link href="{{ asset('/admin/plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('/admin/plugins/bootstrap/bootstrap-4.1.1/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('/admin/plugins/font-awesome/5.1/css/all.css') }}" rel="stylesheet" />
	<link href="{{ asset('/admin/css/animate.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('/admin/css/style.min.css') }}" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
    <link href="{{ asset('/admin/plugins/bootstrap-calendar/css/bootstrap_calendar.css') }}" rel="stylesheet" />
    <link href="{{ asset('/admin/plugins/gritter/css/jquery.gritter.css') }}" rel="stylesheet" />	
	<link href="{{ asset('/admin/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('/admin/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL CSS STYLE ================== -->
    
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('/admin/plugins/pace/pace.min.js') }}"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!--[if lt IE 9]>
	    <script src="{{ asset('/admin/crossbrowserjs/excanvas.min.js') }}"></script>
	<![endif]-->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="page-loader fade in"><span class="spinner">Loading...</span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade page-container page-header-fixed page-sidebar-fixed page-with-two-sidebar page-with-footer">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="index.html" class="navbar-brand"><img src="{{ asset('/home/img/smalllogo.png') }}" class="logo" alt="" alt="" /> Noveo Tech </a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->
				
				<!-- begin navbar-right -->
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<span class="image"><img src="{{ asset('/admin/img/user_profile.jpg') }}" alt= /></span>
							<span class="hidden-xs">John Smith</span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu pull-right">
							<li class="divider"></li>
							<li><a href="javascript:;">Log Out</a></li>
						</ul>
					</li>
				</ul>
				<!-- end navbar-right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar nav -->
				<ul class="nav">
				    <li class="nav-user">
				        <div class="image">
				            <img src="{{ asset('/admin/img/user_profile.jpg') }}" alt= />
				        </div>
				        <div class="info">
				            <div class="name dropdown">
				                <a href="javascript:;" data-toggle="dropdown">Thomas Evans <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:;">Edit Profile</a></li>
                                    <li class="divider"></li>
                                    <li><a href="javascript:;">Log Out</a></li>
                                </ul>
				            </div>
				            <div class="position">Enterprise User</div>
				        </div>
				    </li>
					<li class="nav-header">Navigation</li>
					<li class="active has-sub">
						<a href="{{ url('cms/') }}">
						    <i class="fa fa-home"></i>
						    <span>Dashboard</span>
					    </a>
					</li>
					<li>
						<a href="#">
						    <i class="fa fa-plus"></i>
						    <span>Add asset</span>
					    </a>
					</li>
                    <li>
						<a href="#">
						    <i class="fa fa-eye"></i>
						    <span>View booking</span>
					    </a>
					</li>
                    <li>
						<a href="#">
                        <i class="fas fa-boxes"></i>
                        <span>Bulk buying</span>
					    </a>
					</li>
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
        @yield('content')
		<!-- begin #sidebar-right -->
		<div id="sidebar-right" class="sidebar sidebar-right">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar-nav -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="width-half"><a class="active" href="#today" data-toggle="tab">Today</a></li>
                    <li class="width-half"><a href="#notifications" data-toggle="tab">Notifications</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="today">
                       
                    </div>
                    <div class="tab-pane" id="notifications">
                        
                    </div>
                </div>
				<!-- end sidebar-nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg sidebar-right"></div>
		<!-- end #sidebar-right -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('/admin/plugins/jquery/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('/admin/plugins/bootstrap/bootstrap-4.1.1/js/bootstrap.bundle.min.js') }}"></script>
	<!--[if lt IE 9]>
		<script src="{{ asset('/admin/crossbrowserjs/html5shiv.js') }}"></script>
		<script src="{{ asset('/admin/crossbrowserjs/respond.min.js') }}"></script>
	<![endif]-->
	<script src="{{ asset('/admin/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
	<script src="{{ asset('/admin/plugins/jquery-cookie/jquery.cookie.js') }}"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="{{ asset('/admin/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js') }}"></script>
    <script src="{{ asset('/admin/plugins/chart-js/Chart.min.js') }}"></script>
	<script src="{{ asset('/admin/plugins/gritter/js/jquery.gritter.js') }}"></script>
    <script src="{{ asset('/admin/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js') }}"></script>
	<script src="{{ asset('/admin/plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
	<script src="{{ asset('/admin/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
	<script src="{{ asset('/admin/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('/admin/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('/admin/js/demo.min.js') }}"></script>
    <script src="{{ asset('/admin/js/page-index-v3.demo.js') }}"></script>
    <script src="{{ asset('/admin/js/apps.min.js') }}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	@stack('scripts')
	<script>
		$(document).ready(function() {
		    App.init();
		    Demo.init();
		    PageDemo.init();
		});
	</script>
</body>
</html>
