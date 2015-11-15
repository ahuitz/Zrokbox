@extends('appAdmin')

@section('content')
<html>
<head>
	<title>Agregar Presentacion</title>
</head>
<body>
	<div class="page-header">
 		<h1>Nueva Presentacion<small></small></h1>
	</div>
	<div class="col-md-3 col-md-offset-0">	
	{!! Form::open(['route' => 'admin.presentacion.store', 'method' => 'POST']) !!}
		<div class="col-md-6">
			<input type="text" class="form-control" name="nombre">
		</div>
		{!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
	{!! Form::close()!!}

	<div class="table-responsive" class="col-md-3 col-md-offset-6">
		<table class="table table-bordered">
		</table>
	</div>
	</div>
	</div>
</body>
</html>
@endsection