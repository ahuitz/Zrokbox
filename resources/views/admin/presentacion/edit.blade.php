@extends('appAdmin')
@section('content')
    {!! Form::model($presentacion, ['route'=> ['admin.presentacion.update', $presentacion ->idpresentacion], 'method'=>'PUT']) !!}
        <h3>Presentacion</h3>
        <div class="container col-xs-12">
            <div class="form-grup">
        		{!!Form::label('Nombre:')!!}
        		{!!Form::text('nombrePresentacion',null,['class'=>'form-control','placeholder'=>'Ingrese Nombre', 'required'])!!}
        	</div>
            </div>
        <div class="form-btn">
            {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
        </div>
    {!!form::close()!!}
    </div>
@endsection

