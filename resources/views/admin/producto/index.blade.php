@extends('appAdmin')

@section('content')
<div class="Imagen">
		<table class="table">
			<thead>
				<th>Nombre producto</th>
				<th>Precio</th>
				<th>Descripción</th>
				<th>Categoría</th>
				<th>Presentación</th>
				<th>Imagen</th>
			</thead>
			@foreach($imag as $img)
				<tbody>
					<td>{{$img->nombreProducto}}</td>
					<td>{{$img->precio}}</td>
					<td>{{$img->descripcion}}</td>
					<td>{{$img->nombreCategoria}}</td>
					<td>{{$img->nombrePresentacion}}</td>					
					<td>
						<img src="/imgCatalog/{{$img->direccion}}" alt="" style="width:100px"/>						
					</td>
					
				</tbody>				
			@endforeach
		</table>		
		</div>
@endsection