<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrador</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

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
				<a class="navbar-brand" href="#">ZROKbox</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

		      <ul class="nav navbar-nav">
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="{{URL::action(CategoriaControlador@create')}}"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Agregar</a></li>
		            <li><a href="{{URL::action('CategoriaControlador@index')}}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar</a></li>
		            <li><a href="#"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Eliminar</a></li>
		          </ul>
		        </li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="{{URL::to('/admin/producto')}}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  Agregar</a></li>
		            <li><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>  Editar</a></li>
		            <li><a href="#"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>  Eliminar</a></li>
		          </ul>
		        </li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Presentaciones <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  Agregar</a></li>
		            <li><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>  Editar</a></li>
		            <li><a href="#"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>  Eliminar</a></li>
		          </ul>
		        </li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  Agregar</a></li>
		            <li><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>  Editar</a></li>
		            <li><a href="#"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>  Eliminar</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">One more separated link</a></li>
		          </ul>
		        </li>		      		        		     
		      </ul>
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Cerrar Sesion</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>
