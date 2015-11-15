@extends('appAdmin')


<?php $message=Session::get('message')?>

@if($message == 'store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Ingreso Exitoso</strong> Presentacion Creada.
</div>
@endif


@if($message == 'edit')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Actualizacion Exitosa!</strong> Presentacion Actualizada.
</div>
@endif


@section('content')
<!--
Vista -> Cuadro para buscar categoria
-->
{!! Form::open(['href' => '../public/presentacion', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right' , 'role' => 'search']) !!}
    <div class="form-group">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoria']) !!}
    </div>
        <button type="submit" class="btn btn-primary">Buscar</button> 
{!! Form::close() !!}

    <div class="container-fluid">
        <table class="table table-condensed">
            <thead>
            <h3>Presentacion</h3>
                <th>Nombre</th>
            </thead>
            @foreach($presentation as $presentacion)
            <tbody>
                <td>{{$presentacion->nombrePresentacion}}</td>
                <td>{!!link_to_route('admin.presentacion.edit', $title = 'Editar', $parameters = $presentacion->idpresentacion, $attributes = ['class'=>'btn btn-primary']);!!}</td>
            </tbody>
            @endforeach
        </table>
    </div>
@stop