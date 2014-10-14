<html>
<head>
	<title></title>
	
	<!-- jQuery -->
	<script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="/font-awesome-4.2.0/css/font-awesome.min.css">
	
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{{ action('PostsController@index') }}}">Muh Blug</a>
			</div> 
			
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="{{ action('HomeController@showResume') }}">Resume</a></li>
					<li><a href="{{ action('HomeController@showPortfolio') }}">Portfolio</a></li>
				</ul>

			<form class="navbar-form navbar-left" role="search" action="{{ action('PostsController@index') }}">
				<input type="text" id="search" name="search" class="form-control" placeholder="Search Blog">
				
				<div class="form-group">	
					<span class="input-group-btn">
						<button class="btn btn-default"><i class="fa fa-search"></i></button>
					</span>
				</div>
			</form>
				
				<ul class="nav navbar-nav navbar-right">
					@if(Auth::check())
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->first_name }} <span class="caret"></span></a>
							
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ action('PostsController@create') }}">New Post</a></li>
								<li class="divider"></li>
								<li><a href="{{ action('HomeController@doLogout') }}">Logout</a></li>
							</ul>
						</li>

					@else
						<li><a href="{{ action('HomeController@showLogin') }}">Login</a></li>
					@endif
				</ul>
			</div>
		</div>
	</nav>	
	<div class="container">
		@if (Session::has('successMessage'))
			<div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
		@endif
		
		@if (Session::has('errorMessage'))
			<div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
		@endif

		@yield('content')

		<hr>
		<footer>FrankTech 2014</footer>
	</div>	
</body>
</html>