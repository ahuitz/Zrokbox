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
		            <li><a href="/admin/categoria/create"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Agregar</a></li>
		            <li><a href="/admin/categoria"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar</a></li>
		            <li><a href="/admin/categoria/"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Mostrar</a></li>
		          </ul>
		        </li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="/producto/create"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  Agregar</a></li>
		            <li><a href="/producto"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>  Mostrar </a></li>
		            <!--li><a href="#"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>  Eliminar</a></li-->
		          </ul>
		        </li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Presentaciones <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="/admin/presentacion/create"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  Agregar</a></li>
		            <li><a href="/admin/presentacion"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>  Editar</a></li>
		            <li><a href="/admin/presentacion"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>  Mostrar</a></li>
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
