@extends('appAdmin')

@section('content')
	
	{!!Form::model($imag,['route'=>['producto.update', $imag->idproducto],'method'=>'PUT','files'=>true])!!}
		<div class="form-group">
			{!!Form::label('Nombre producto')!!}
			{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre del producto','required'])!!}	
		</div>
		<div class="form-group">
			{!!Form::label('Precio:')!!}
			{!!Form::text('preProd',null,['class'=>'form-control','placeholder'=>'Ingrese el precio del producto','required'])!!}	
		</div>
		<div class="form-group">
			{!!Form::label('Descripción:')!!}
			{!!Form::text('desProd',null,['class'=>'form-control','placeholder'=>'Descripción del producto','required'])!!}	
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
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}								
	{!!Form::close()!!}
	{!!Form::open(['route'=>['producto.destroy',$imag->idproducto],'method'=>'DELETE'])!!}
	{!!Form::submit('Eliminar',['class'=>'btn btn-primary'])!!}

	@foreach($catP as $ct)
	@endforeach
	@foreach($presP as $ps)
	@endforeach
@endsection
