@extends('appAdmin')

@section('content')

	{!!Form::open(['route'=>'producto.store', 'method'=>'POST','files'=>true])!!}
		<div class="form-group">
			{!!Form::label('Nombre producto')!!}
			{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre del producto'])!!}	
		</div>
		<div class="form-group">
			{!!Form::label('Precio:')!!}
			{!!Form::text('preProd',null,['class'=>'form-control','placeholder'=>'Ingrese el precio del producto'])!!}	
		</div>
		<div class="form-group">
			{!!Form::label('Descripción:')!!}
			{!!Form::text('desProd',null,['class'=>'form-control','placeholder'=>'Descripción del producto'])!!}	
		</div>
		<div class="form-group">			
			{!!Form::label('Categoria','Categoria:')!!}
			{!!Form::select('catProd',$catP,['class'=>'form-control'])!!}			
		</div>
		<div class="form-group">			
			{!!Form::label('Presentacion','Presentacion:')!!}
			{!!Form::select('presProd',$presP)!!}			
		</div>
		<div class="form-group">
			{!!Form::label('Fileinput: ')!!}
			{!!Form::File('Imagen') !!}			
		</div>		
			{!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}								
	{!!Form::close()!!}
	@foreach($catP as $ct)
	@endforeach
	@foreach($presP as $ps)
	@endforeach
@endsection
