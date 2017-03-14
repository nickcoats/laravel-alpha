<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="_token" content="{{ csrf_token() }}" />
	<title>Alpha Capital Management Group</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/admin.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link href="{{ asset('/css/bootstrap.verticaltabs.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css">
	<link href="{{ asset('font-awesome-4.3.0/css/font-awesome.min.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- Scripts -->
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
	<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
	<script src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	<script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('admin') }}"><img src="{{ asset('img/alpha_capital_logo.png') }}" alt="Alpha Capital Management Group" class="admin-nav"></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<!--<li><a href="{{ url('/') }}">Home</a></li>-->
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<!--<li><a href="{{ url('/auth/register') }}">Register</a></li>-->
					@else
						<li><a href="{{ url('admin') }}">Dashboard</a></li>
						<li><a href="{{ url('/') }}">Frontend</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Create <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('article/create') }}">Blog Post</a></li>
								<li><a href="{{ url('bio/create') }}">Partner Bio</a></li>
							</ul>
						</li>
						<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	<div id="wrap">
		<div id="main" class="container clear-top">
			@yield('content')
		</div>
	</div>

	<script type="text/javascript">
		$(function() {
		    $.ajaxSetup({
		        headers: {
		            'X-CSRF-Token': $('meta[name="_token"]').attr('content')
		        }
		    });
		});
	</script>
</body>
<footer id="footer" class="sticky-footer">
  <div class="container text-center">
    <p class="text-muted" style="padding-top: 2%">&copy; Alpha Capital Management Group</p>
  </div>
</footer>
</html>
