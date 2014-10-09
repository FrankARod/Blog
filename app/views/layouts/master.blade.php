<html>
<head>
	<title></title>
	
	<!-- jQuery -->
	<script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
	
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
					<li><a href="{{{ action('PostsController@create') }}}">New Post</a></li>
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
	</div>	
</body>
</html>