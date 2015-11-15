@extends('Forms.product')

@section('content')

	@foreach($imag as $img)

		<div class="col-md-4 chain-grid  simpleCart_shelfItem">

			        			<div class="grid-span-1">
			        				<a href="#"><img class="img-responsive " src="imgCatalog/{{$img->direccion}}" alt=""></a>
		   		     	
		   		     	</div>
		   		     		<div class="grid-chain-bottom ">
		   		     			<h6><a href="single.html">{{$img->nombreProducto}}</a></h6>
		   		     			<div class="star-price">
		   		     				<div class="price-at">
			   		     				<ul class="star-footer">
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
											<li><a href="#"><i> </i></a></li>
										</ul>
										</div>
										<div class="price-at-bottom ">
											<span class="item_price">Q. {{$img->precio}}</span>
										</div>

		   		     				<div class="clearfix"> </div>

								</div>
								<div>
									<h3><span class="label label-warning">{{$img->idcategoria}}</span></h3>
									<div class="clearfix"> </div>
								</div>								
		   		     		</div>	   	
		   		     	</div>


	 @endforeach
@stop

@section('menuCategoria')
	@foreach($catF as $ct)
	<li class="item1"><a href="#">{{$ct->nombreCategoria}} </a>
		</li>
	@endforeach
@stop