<!doctype html>
<html lang="en"> 

<head>
	<meta charset="UTF-8">
	<title>Kasyap Sweeteners ERP</title> 

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

	<script src="bootstrap/js/jquery-1.11.1.min.js"></script>

	<script src="bootstrap/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
<header>
	<nav class="navbar navbar-default" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display --> 
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span> 
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="./"><img src="img/ks_logo.png"/></a> 
		</div>

  	<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right"> 
				<li><a href="./">Home</a></li>
				<li><a href="./mis">MIS</a></li> 
				<li><a href="./accounts">Accounts</a></li> 
				<li><a href="./sales">Sales</a></li> 
				<li><a href="./admin">Admin</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>
</header>

@yield('content')

</body>

</html>