@extends('appAdmin')
@section('content')
    {!! Form::model($categoria, ['route'=> ['admin.categoria.update', $categoria ->idcategoria], 'method'=>'PUT']) !!}
        <h3>Categoria</h3>
        <div class="container col-xs-12">
            <div class="form-grup">
        		{!!Form::label('Nombre:')!!}
        		{!!Form::text('nombreCategoria',null,['class'=>'form-control','placeholder'=>'Ingrese Nombre', 'required'])!!}
        	</div>
            </div>
        <div class="form-btn">
            {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
        </div>
    {!!form::close()!!}
    </div>
@endsection