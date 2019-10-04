<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
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
						    <i class="fa fa-location-arrow"></i>
						    <span>Booking</span>
					    </a>
					</li>
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
				<li class="breadcrumb-item active">Dashboard v3</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Dashboard v3 <small>header small text goes here...</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
                <!-- begin col-10 -->
			    <div class="col-lg-10">
			        <!-- begin radius-container -->
                    <div class="radius-container m-b-30">
                        <!-- begin panel -->
                        <div class="panel no-rounded-corner bg-inverse text-white wrapper m-b-0">
                            <!-- begin btn-group -->
                            <div class="btn-group btn-group-xs pull-right">
                                <a href="#" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-cog"></i> Settings <b class="caret text-muted"></b>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="javascript:;">Last Week</a></li>
                                    <li><a href="javascript:;">Last Month</a></li>
                                    <li><a href="javascript:;">Last Year</a></li>
                                </ul>
                            </div>
                            <!-- end btn-group -->
                            <!-- begin title -->
                            <h4 class="text-white m-t-0 m-b-10">
                                <i class="fa fa-snowflake-o text-success-light"></i> Sales Report 
                                <small class="text-muted m-l-5">past 12 months</small>
                            </h4>
                            <!-- end title -->
                            <!-- begin chart -->
                            <canvas id="monthly-report-chart" height="100"></canvas>
                            <!-- end chart -->
                        </div>
                        <!-- end panel -->
                        <!-- begin panel -->
                        <div class="panel pagination-inverse bg-white clearfix no-rounded-corner m-b-0">
                            <!-- begin table -->
                            <table id="data-table" data-order='[[1,"asc"]]' class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="width-100">Month</th>
                                        <th>Orders</th>
                                        <th>Earning</th>
                                        <th data-sorting="disabled"></th>
                                        <th class="width-50" data-sorting="disabled"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>January</td>
                                        <td>1,929 items sold</td>
                                        <td>$19,290</td>
                                        <td class="p-5"><div data-render="sparkline"></div></td>
                                        <td class="p-5"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-cog"></i> View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>February</td>
                                        <td>1,392 items sold</td>
                                        <td>$13,920</td>
                                        <td class="p-5"><div data-render="sparkline"></div></td>
                                        <td class="p-5"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-cog"></i> View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>March</td>
                                        <td>988 items sold</td>
                                        <td>$9,880</td>
                                        <td class="p-5"><div data-render="sparkline"></div></td>
                                        <td class="p-5"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-cog"></i> View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>April</td>
                                        <td>780 items sold</td>
                                        <td>$7,800</td>
                                        <td class="p-5"><div data-render="sparkline"></div></td>
                                        <td class="p-5"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-cog"></i> View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>May</td>
                                        <td>1,023 items sold</td>
                                        <td>$10,230</td>
                                        <td class="p-5"><div data-render="sparkline"></div></td>
                                        <td class="p-5"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-cog"></i> View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>June</td>
                                        <td>502 items sold</td>
                                        <td>$5,020</td>

                                        <td class="p-5"><div data-render="sparkline"></div></td>
                                        <td class="p-5"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-cog"></i> View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>July</td>
                                        <td>1,499 items sold</td>
                                        <td>$14,990</td>
                                        <td class="p-5"><div data-render="sparkline"></div></td>
                                        <td class="p-5"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-cog"></i> View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>August</td>
                                        <td>684 items sold</td>
                                        <td>$6,840</td>
                                        <td class="p-5"><div data-render="sparkline"></div></td>
                                        <td class="p-5"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-cog"></i> View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>September</td>
                                        <td>433 items sold</td>
                                        <td>$4,330</td>
                                        <td class="p-5"><div data-render="sparkline"></div></td>
                                        <td class="p-5"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-cog"></i> View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>October</td>
                                        <td>581 items sold</td>
                                        <td>$5,810</td>
                                        <td class="p-5"><div data-render="sparkline"></div></td>
                                        <td class="p-5"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-cog"></i> View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>November</td>
                                        <td>1,239 items sold</td>
                                        <td>$12,390</td>
                                        <td class="p-5"><div data-render="sparkline"></div></td>
                                        <td class="p-5"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-cog"></i> View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>December</td>
                                        <td>893 items sold</td>
                                        <td>$8,930</td>
                                        <td class="p-5"><div data-render="sparkline"></div></td>
                                        <td class="p-5"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-cog"></i> View Details</a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- end table -->
                        </div>
                        <!-- end panel -->
                    </div>
                    <!-- end radius-container -->
		        </div>
                <!-- end col-10 -->
                <!-- begin col-2 -->
                <div class="col-lg-2">
                    <div class="row">
                        <div class="col-lg-12 col-lg-4 col-xs-6">
                            <!-- begin widget -->
                            <div class="widget widget-stat bg-inverse text-white">
                                <div class="widget-stat-btn"><a href="#" data-click="widget-reload"><i class="fa fa-redo"></i></a></div>
                                <div class="widget-stat-number">13,492</div>
                                <div class="widget-stat-text">Items Sold</div>
                            </div>
                            <!-- end widget -->
                        </div>
                        <div class="col-lg-12 col-lg-4 col-xs-6">
                            <!-- begin widget -->
                            <div class="widget widget-stat bg-inverse text-white">
                                <div class="widget-stat-btn"><a href="#" data-click="widget-reload"><i class="fa fa-redo"></i></a></div>
                                <div class="widget-stat-number">$139K <i class="fa fa-caret-up text-lime-light"></i></div>
                                <div class="widget-stat-text">Revenue</div>
                            </div>
                            <!-- end widget -->
                        </div>
                        <div class="col-lg-12 col-lg-4 col-xs-6">
                            <!-- begin widget -->
                            <div class="widget widget-stat bg-inverse text-white">
                                <div class="widget-stat-btn"><a href="#" data-click="widget-reload"><i class="fa fa-redo"></i></a></div>
                                <div class="widget-stat-number">1.2m</div>
                                <div class="widget-stat-text">Page Views</div>
                            </div>
                            <!-- end widget -->
                        </div>
                        <div class="col-lg-12 col-lg-4 col-xs-6">
                            <!-- begin widget -->
                            <div class="widget widget-stat bg-inverse text-white">
                                <div class="widget-stat-btn"><a href="#" data-click="widget-reload"><i class="fa fa-redo"></i></a></div>
                                <div class="widget-stat-number">135k <i class="fa fa-caret-down text-danger-light"></i></div>
                                <div class="widget-stat-text">Visitors</div>
                            </div>
                            <!-- end widget -->
                        </div>
                        <div class="col-lg-12 col-lg-4 col-xs-6">
                            <!-- begin widget -->
                            <div class="widget widget-stat bg-inverse text-white">
                                <div class="widget-stat-btn"><a href="#" data-click="widget-reload"><i class="fa fa-redo"></i></a></div>
                                <div class="widget-stat-number">10.29%</div>
                                <div class="widget-stat-text">Bounce Rate</div>
                            </div>
                            <!-- end widget -->
                        </div>
                        <div class="col-lg-12 col-lg-4 col-xs-6">
                            <!-- begin widget -->
                            <div class="widget widget-stat bg-inverse text-white">
                                <div class="widget-stat-btn"><a href="#" data-click="widget-reload"><i class="fa fa-redo"></i></a></div>
                                <div class="widget-stat-number">54.3k <i class="fa fa-caret-down text-danger-light"></i></div>
                                <div class="widget-stat-text">New Visitors</div>
                            </div>
                            <!-- end widget -->
                        </div>
                        <div class="col-lg-12 col-lg-4 col-xs-6">
                            <!-- begin widget -->
                            <div class="widget widget-stat bg-inverse text-white">
                                <div class="widget-stat-btn"><a href="#" data-click="widget-reload"><i class="fa fa-redo"></i></a></div>
                                <div class="widget-stat-number">60.4k</div>
                                <div class="widget-stat-text">Returned Visitors</div>
                            </div>
                            <!-- end widget -->
                        </div>
                        <div class="col-lg-12 col-lg-4 col-xs-6">
                            <!-- begin widget -->
                            <div class="widget widget-stat bg-inverse text-white">
                                <div class="widget-stat-btn"><a href="#" data-click="widget-reload"><i class="fa fa-redo"></i></a></div>
                                <div class="widget-stat-number">05:10 <i class="fa fa-caret-up text-lime-light"></i></div>
                                <div class="widget-stat-text">Avg. Time on Site</div>
                            </div>
                            <!-- end widget -->
                        </div>
                    </div>
                </div>
                <!-- end col-2 -->
		    </div>
		    <!-- end row -->
			
            <!-- begin #footer -->
            <div id="footer" class="footer">
                <span class="pull-right">
                    <a href="javascript:;" class="btn-scroll-to-top" data-click="scroll-top">
                        <i class="fa fa-arrow-up"></i> <span class="hidden-xs">Back to Top</span>
                    </a>
                </span>
                &copy; 2018 <b>Source Admin</b> All Right Reserved
            </div>
            <!-- end #footer -->
		</div>
		<!-- end #content -->
		
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
                        <ul class="nav">
                            <li class="nav-date">
                                Sunday, May 31 st
                            </li>
                            <li class="divider"></li>
                            <li class="nav-header">Stocks</li>
                            <li>
                                <ul class="stock-list">
                                    <li>
                                        <div class="name">AAPL</div>
                                        <div class="value">130.28</div>
                                        <div class="percentage"><span class="label label-inverse">- 1.14%</span></div>
                                    </li>
                                    <li>
                                        <div class="name">DOWJ</div>
                                        <div class="value">18010.68</div>
                                        <div class="percentage"><span class="label label-inverse">- 0.64%</span></div>
                                    </li>
                                    <li>
                                        <div class="name">SBUX</div>
                                        <div class="value">51.96</div>
                                        <div class="percentage"><span class="label label-success">+ 0.29%</span></div>
                                    </li>
                                    <li>
                                        <div class="name">NKE</div>
                                        <div class="value">18010.68</div>
                                        <div class="percentage"><span class="label label-inverse">- 0.62%</span></div>
                                    </li>
                                    <li>
                                        <div class="name">YHOO</div>
                                        <div class="value">42.94</div>
                                        <div class="percentage"><span class="label label-inverse">- 0.31%</span></div>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li class="nav-header">Calendar</li>
                            <li>
                                <div id="schedule-calendar"></div>
                            </li>
                            <li class="divider"></li>
                            <li class="nav-header">Latest Post</li>
                            <li>
                                <ul class="nav-post">
                                    <li>
                                        <div class="image">
                                            <img src="{{ asset('/admin/img/latest_post_1.jpg') }}" alt= />
                                        </div>
                                        <div class="info">
                                            <div class="title">Mauris ac condimentum erat. Curabitur porta pretium ultricies.</div>
                                            <div class="time">Today, 8.12am</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="{{ asset('/admin/img/latest_post_2.jpg') }}" alt= />
                                        </div>
                                        <div class="info">
                                            <div class="title">Cras pretium ipsum vel nulla laoreet malesuada sed at turpis.</div>
                                            <div class="time">Yesterday, 11.42pm</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="{{ asset('/admin/img/latest_post_3.jpg') }}" alt= />
                                        </div>
                                        <div class="info">
                                            <div class="title">Ut sit amet vulputate ante. Nunc quis convallis arcu.</div>
                                            <div class="time">Posted on 3 days ago</div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                        </ul>
                    </div>
                    <div class="tab-pane" id="notifications">
                        <ul class="nav">
                            <li class="nav-header">Mailbox</li>
                            <li>
                                <ul class="notification-list">
                                    <li>
                                        <div class="media"><i class="fa fa-check"></i></div>
                                        <div class="info">
                                            <div class="title"><a href="javascript:;">PHP version updated</a></div>
                                            <div class="time">Yesterday, 6.06pm</div>
                                            <div class="desc">Donec tristique malesuada nibh quis lobortis. Quisque viverra faucibus hendrerit.</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><i class="fa fa-bug text-danger"></i></div>
                                        <div class="info">
                                            <div class="title"><a href="javascript:;">10 Unknown mysql query detected</a></div>
                                            <div class="time">Yesterday, 12.05am</div>
                                            <div class="desc">Integer fermentum arcu et dolor sodales, quis laoreet justo aliquam.</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><img src="{{ asset('/admin/img/user_2.jpg') }}" alt= /></div>
                                        <div class="info">
                                            <div class="title"><a href="javascript:;">New email from David</a></div>
                                            <div class="time">Just now</div>
                                            <div class="desc">Nunc metus orci, lobortis eu luctus quis, dictum mollis ante.</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><img src="{{ asset('/admin/img/user_4.jpg') }}" alt= /></div>
                                        <div class="info">
                                            <div class="title"><a href="javascript:;">New email from Terry</a></div>
                                            <div class="time">Today, 12.05am</div>
                                            <div class="desc">Integer fermentum arcu et dolor sodales, quis laoreet justo aliquam.</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><img src="{{ asset('/admin/img/user_3.jpg') }}" alt= /></div>
                                        <div class="info">
                                            <div class="title"><a href="javascript:;">New email from Tom (2)</a></div>
                                            <div class="time">Yesterday, 5.23pm</div>
                                            <div class="desc">Integer fermentum arcu et dolor sodales, quis laoreet justo aliquam.</div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li class="nav-header">Activities Log</li>
                            <li>
                                <ul class="notification-list">
                                    <li>
                                        <div class="media"><i class="fa fa-cog"></i></div>
                                        <div class="info">
                                            <div class="title"><a href="javascript:;">Your scheduled post has been published</a></div>
                                            <div class="time">Just now</div>
                                            <div class="desc">Aenean lobortis libero libero, vitae imperdiet dolor dictum id.</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><i class="fa fa-shield-alt"></i></div>
                                        <div class="info">
                                            <div class="title"><a href="javascript:;">Turn on the firewall</a></div>
                                            <div class="time">Today, 7.08am</div>
                                            <div class="desc">Donec at augue in mi egestas luctus fermentum et ex.</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><i class="fa fa-user-plus"></i></div>
                                        <div class="info">
                                            <div class="title"><a href="javascript:;">Added 2 admin user</a></div>
                                            <div class="time">Today, 6.40am</div>
                                            <div class="desc">Quisque elementum urna placerat mi vestibulum lacinia.</div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                        </ul>
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
	
	<script>
		$(document).ready(function() {
		    App.init();
		    Demo.init();
		    PageDemo.init();
		});
	</script>
</body>
</html>
