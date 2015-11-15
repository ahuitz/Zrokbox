@extends('appAdmin')

@section('content')
<html>
<head>

	<title>Editar Categoria</title>
</head>
<body>
	<div class="page-header">
 		<h1>Editando Categoria<small></small></h1>
	</div>
	<div class="col-md-3 col-md-offset-0">
		
	{!! Form::open(['route' => 'admin.categoria.update', 'method' => 'PUT']) !!}
		<div class="form-group">
    		<label for="nombre">Nombre</label>
    		<input type="text" class="form-control" id="nombre" placeholder="Ingrese el Nombre">
  		</div>
		<button type="Submit" class="btn btn-success">Actualizar</button>
	{!! Form::close()!!}

	<!--form method="POST" action= "http://localhost:8000/admin/categoria" accept-charset="UTF-8">
  		<input type="hidden" name="_token" value="{{ csrf_token() }}">
  		<div class="form-group">
    		<label for="exampleInputEmail1">Nombre</label>
    		<input type="text" class="form-control" id="nombre" placeholder="Ingrese el Nombre">
  		</div>
  		<button type="Submit" class="btn btn-success">Actualizar</button>
	</form-->
	<div class="table-responsive" class="col-md-3 col-md-offset-6">
		<table class="table table-bordered">
		</table>
	</div>

	<!--form method="POST" action= "http://localhost:8000/admin/categoria" accept-charset="UTF-8">
	 	<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<label class="col-md-4 control-label">Nombre</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="nombre">
					</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-primary">Aceptar</button>

						</div>
	</form-->
	</div>
	</div>


</body>
<!--body>
	{!! Form::open(['route' => 'admin.categoria.store', 'method' => 'POST']) !!}
		<div class="col-md-6">
			<input type="text" class="form-control" name="nombre">
		</div>
		<button type="submit">Enviar Formulario</button>
	{!! Form::close()!!}
</body-->
</html>
@endsection