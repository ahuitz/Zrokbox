@extends('appAdmin')


<?php $message=Session::get('message')?>

@if($message == 'store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Operación Exitosa!</strong> Categoria Creada.
</div>

@endif


@if($message == 'edit')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Operación Exitosa!</strong> Categoria Actualizada.
</div>

@endif


@section('content')
<!--
Vista -> Cuadro para buscar categoria
-->
{!! Form::open(['href' => '../public/categoria', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right' , 'role' => 'search']) !!}
    <div class="form-group">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoria']) !!}
    </div>
        <button type="submit" class="btn btn-primary">Buscar</button> 
{!! Form::close() !!}

    <div class="container-fluid">
        <table class="table table-condensed">
            <thead>
            <h3>Categoria</h3>
                <th>Nombre</th>
            </thead>
            @foreach($categorie as $categoria)
            <tbody>
                <td>{{$categoria->nombreCategoria}}</td>
                <td>{!!link_to_route('admin.categoria.edit', $title = 'Editar', $parameters = $categoria->idcategoria, $attributes = ['class'=>'btn btn-primary']);!!}</td>
            </tbody>
            @endforeach
        </table>
        {!!$categorie->render()!!}
    </div>
@stop