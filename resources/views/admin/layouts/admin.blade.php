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
    <link href="{{ url('/admin/plugins/switchery/switchery.min.css') }}" rel="stylesheet" />
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
                	<li>
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="image">
                                <img src="{{ url('Flags').'/'.Session::get('admin_flag') }}" width="20px" /> {{ Session::get('admin_country_name') }}
                            </span>
                        </a>
                    </li>
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                            @if(Auth::Guard('admin')->User()->avatar != "")
                            	<span class="image"><img src="{{ asset('media/avatar/').'/'.Auth::Guard('admin')->User()->avatar }}" alt= /></span>
                            @else
								<span class="image"><img src="{{ asset('/admin/img/user_profile.jpg') }}" alt= /></span>
                            @endif
							<span class="hidden-xs">{{ Auth::Guard('admin')->User()->name }}</span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu pull-right">
							<li class="divider"></li>
							<li>
                                <a href="{{ url('/admin/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out pull-right"></i> {{ utf8_encode(__('static.LogOut')) }}</a>
                                </a>
                                <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
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
				            
                            @if(Auth::Guard('admin')->User()->avatar != "")
                                <img src="{{ asset('media/avatar/').'/'.Auth::Guard('admin')->User()->avatar }}" alt= />
                            @else
								<img src="{{ asset('/admin/img/user_profile.jpg') }}" alt= />
                            @endif
				        </div>
				        <div class="info">
				            <div class="name dropdown">
				                <a href="javascript:;" data-toggle="dropdown">{{ Auth::Guard('admin')->User()->name }} <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('/admin/profile') }}">{{ utf8_encode(__('static.Edit')) }} {{ utf8_encode(__('static.Profile')) }}</a></li>
                                    <li class="divider"></li>
                                    <li>
                                    	<a href="{{ url('/admin/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out pull-right"></i> {{ utf8_encode(__('static.LogOut')) }}</a>
                                        </a>
                                    </li>
                                </ul>
				            </div>
				            <!--<div class="position">Admin User</div>-->
				        </div>
				    </li>
					<li class="nav-header">Navigation</li>
					<li class="{{ (request()->segment(2) == 'home') ? 'active' : '' }}">
						<a href="{{ url('/admin/home') }}">
						    <i class="fa fa-home"></i>
						    <span>{{ utf8_encode(__('static.Dashboard')) }}</span>
					    </a>
					</li>
                    @if(Auth::Guard('admin')->User()->booking == "1")
                    <li class="has-sub {{ (request()->segment(2) == 'booking') ? 'active' : '' }}">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
                        	<i class="fa fa-location-arrow"></i>
						    <span>{{ utf8_encode(__('static.Booking')) }}</span>
						</a>
						<ul class="sub-menu">
							<li class="{{ (request()->segment(3) == 'vehicle') ? 'active' : '' }}"><a href="{{url('/admin/booking/vehicle')}}">{{ utf8_encode(__('static.Vehicles')) }}</a></li>
							<li class="{{ (request()->segment(3) == 'construction-machine') ? 'active' : '' }}"><a href="{{url('/admin/booking/construction-machine')}}">{{ utf8_encode(__('static.Construction')) }} {{ utf8_encode(__('static.Machines')) }}</a></li>
                            <li class="{{ (request()->segment(3) == 'warehouse') ? 'active' : '' }}"><a href="{{url('/admin/booking/warehouse')}}">{{ utf8_encode(__('static.Warehouse')) }}</a></li>
                            <li class="{{ (request()->segment(3) == 'bulk-buy') ? 'active' : '' }}"><a href="{{url('/admin/booking/bulk-buy')}}">{{ utf8_encode(__('static.Bulk')) }} {{ utf8_encode(__('static.Buy')) }}</a></li>
						</ul>
					</li>
                    @endif
                    @if(Auth::Guard('admin')->User()->users == "1")
                    <li class="{{ (request()->segment(2) == 'user') ? 'active' : '' }}">
						<a href="{{url('/admin/user')}}">
						    <i class="fa fa-users"></i>
						    <span>{{ utf8_encode(__('static.Users')) }}</span>
					    </a>
					</li>
                    @endif
                    @if(Auth::Guard('admin')->User()->fares == "1")
                    <li class="{{ (request()->segment(2) == 'fare') ? 'active' : '' }}">
						<a href="{{url('/admin/fare')}}">
                        <i class="fas fa-money-bill"></i>
                        <span>{{ utf8_encode(__('static.Fares')) }}</span>
					    </a>
					</li>
                    @endif
                    @if(Auth::Guard('admin')->User()->vehicles == "1")
                    <li class="{{ (request()->segment(2) == 'vehicle') ? 'active' : '' }}">
						<a href="{{url('/admin/vehicle')}}">
                        <i class="fas fa-truck"></i>
                        <span>{{ utf8_encode(__('static.Vehicles')) }}</span>
					    </a>
					</li>  
                    @endif
                    @if(Auth::Guard('admin')->User()->construction_machines == "1")                  
                    <li class="{{ (request()->segment(2) == 'construction-machine') ? 'active' : '' }}">
						<a href="{{url('/admin/construction-machine')}}">
                        <i class="fas fa-space-shuttle"></i>
                        <span>{{ utf8_encode(__('static.Construction')) }} {{ utf8_encode(__('static.Machines')) }}</span>
					    </a>
					</li>
                    @endif
                    @if(Auth::Guard('admin')->User()->offer == "1")
                    <li class="{{ (request()->segment(2) == 'offer') ? 'active' : '' }}">
						<a href="{{url('/admin/offer')}}">
                        <i class="fas fa-boxes"></i>
                        <span>{{ utf8_encode(__('static.Offer')) }}</span>
					    </a>
					</li>
                    @endif
                    @if(Auth::Guard('admin')->User()->packaging == "1")
                    <li class="{{ (request()->segment(2) == 'packaging') ? 'active' : '' }}">
						<a href="{{url('/admin/packaging')}}">
                        <i class="fas fa-boxes"></i>
                        <span>{{ utf8_encode(__('static.Packaging')) }}</span>
					    </a>
					</li>
                    @endif
                    @if(Auth::Guard('admin')->User()->goods_deals == "1")
                    <li class="{{ (request()->segment(2) == 'gooddeal') ? 'active' : '' }}">
						<a href="{{url('/admin/gooddeal')}}">
						    <i class="fa fa-dice"></i>
						    <span>Bonnes affaires</span>
					    </a>
					</li>
                    @endif
                    @if(Auth::Guard('admin')->User()->cities == "1")
                    <li class="has-sub {{ (request()->segment(2) == 'city') ? 'active' : '' }} {{ (request()->segment(2) == 'suburb') ? 'active' : '' }}">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
                        	<i class="fas fa-globe-asia"></i>
						    <span>{{ utf8_encode(__('static.Cities')) }}</span> 
						</a>
						<ul class="sub-menu">
							<li class="{{ (request()->segment(2) == 'city') ? 'active' : '' }}"><a href="{{url('/admin/city')}}">{{ utf8_encode(__('static.Cities')) }}</a></li>
							<li class="{{ (request()->segment(2) == 'suburb') ? 'active' : '' }}"><a href="{{url('/admin/suburb')}}">{{ utf8_encode(__('static.Suburbs')) }}</a></li>
						</ul>
					</li>
                    @endif
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
        @yield('content')
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
	<script src="{{ asset('/admin/plugins/gritter/js/jquery.gritter.js') }}"></script>
    <script src="{{ asset('/admin/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js') }}"></script>
	<script src="{{ asset('/admin/plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
	<script src="{{ asset('/admin/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
	<script src="{{ asset('/admin/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('/admin/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
	<script src="{{ url('/admin/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js') }}"></script>
	<script src="{{ url('/admin/plugins/switchery/switchery.min.js') }}"></script>
 	<script src="{{ url('/admin/js/page-form-slider-switcher.demo.min.js') }}"></script>
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
