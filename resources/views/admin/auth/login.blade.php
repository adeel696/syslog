<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Noveo Tech</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Nunito:400,300,700" rel="stylesheet" id="fontFamilySrc" />
	<link href="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin/plugins/bootstrap/bootstrap-4.1.1/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin/plugins/font-awesome/5.1/css/all.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin/css/animate.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin/css/style.min.css') }}" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
    
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('admin/plugins/pace/pace.min.js') }}"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!--[if lt IE 9]>
	    <script src="admin/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
</head>
<body class="pace-top">
	<!-- begin #page-loader -->
	<div id="page-loader" class="page-loader fade in"><span class="spinner">Loading...</span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade page-container">
	    <!-- begin login -->
		<div class="login">
		    <!-- begin login-brand -->
            <div class="login-brand bg-inverse text-white">
                <img src="{{ asset('admin/img/logo-white.png') }}" height="36" class="pull-right" alt="" /> Login Panel
            </div>
		    <!-- end login-brand -->
		    <!-- begin login-content -->
            <div class="login-content">
                <form method="POST" action="{{ url('admin/login') }}" name="login_form" class="form-input-flat">
                    @csrf
                    @if(session()->has('login_error'))
                    <div class="alert alert-success">
                    {{ session()->get('login_error') }}
                    </div>
                    @endif
                    <div class="form-group">
                    	<input id="email" type="text" class="form-control input-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required="" autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                    	<input id="password" type="password" class="form-control input-lg{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
    
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                    	<select class="form-control input-lg" id="Country" name="country_id" style="height: 46px;padding: 10px 16px;font-size: 18px;line-height: 1.3333333;border-radius: 6px;background: #ebeced;border-color: #ebeced;">
						  <?php
							foreach(App\Models\Country::All() as $Country)
							{
								echo '<option value="'.$Country->id.'">'.$Country->name.'</option>';
							}
						  ?>
                      	</select>
                    </div>
                    <div class="row m-b-20">
                        <div class="col-lg-12">
                        	<button type="submit" class="btn btn-lime btn-lg btn-block">Sign in to your account</button>
                            
                        </div>
                    </div>
                </form>
            </div>
		    <!-- end login-content -->
		</div>
		<!-- end login -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('admin/plugins/jquery/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('admin/plugins/bootstrap/bootstrap-4.1.1/js/bootstrap.bundle.min.js') }}"></script>
	<!--[if lt IE 9]>
		<script src="admin/crossbrowserjs/html5shiv.js"></script>
		<script src="admin/crossbrowserjs/respond.min.js"></script>
	<![endif]-->
	<script src="{{ asset('admin/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
	<script src="{{ asset('admin/plugins/jquery-cookie/jquery.cookie.js') }}"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="{{ asset('admin/js/demo.min.js') }}"></script>
    <script src="{{ asset('admin/js/apps.min.js') }}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
		    App.init();
		    Demo.initThemePanel();
		});
	</script>
</body>
</html>


