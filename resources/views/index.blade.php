<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>ZROKBOX| Home :: Software</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Amberegul Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,700,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<!--//fonts-->
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!--//slider-script-->
@yield('scpt')
 

</head>
<body> 
<!--header-->	

<div class="header">
	<div class="header-top">		
		<div class="container">			
			<div class="header-top-in">				
				<ul class="support">
					<li ><a href="mailto:info@example.com" ><i > </i>zrokbox.com</a></li>
					<li ><span ><i class="tele-in"> </i>12 34 56 78</span></li>			
				</ul>
				<ul class=" support-right">
					<li ><a href="{{URL::action('HomeController@index')}}" ><i class="men"> </i>Iniciar Sesion</a></li>
					<li ><a href="account.html" ><i class="tele"> </i>Crear cuenta</a></li>			
				</ul>
				<div class="clearfix"> </div>
			</div>
			</div>
			<div class="header-bottom">
			<div class="container">			
				<div class="logo">
					<h1><a href="index.html">ZROKbox</a></h1>
				</div>
				<div class="top-nav">
				<!-- start header menu -->
		<ul class="megamenu skyblue">
			<li><a  href="{{URL::action('FrontController@index')}}">Inicio</a></li>
			
			<li class="active grid"><a  href="#">Categoria</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<!--h4>SUBMENU1</h4-->								
										<ul>											
												@foreach($catF as $ct)
												<li><a href="about.html">{{$ct->nombreCategoria}}</a></li>
												@endforeach											
										</ul>	
							</div>							
						</div>
						
						
					</div>
					
    				</div>
				</li>	
		<!--li ><a  href="404.html">Blog</a></li-->				
				<li><a  href="{{URL::action('FrontController@create')}}">Productos</a>

				<!--div class="megapanel">
					<div class="row">
						<div class=" col-nav">
							<div class="h_nav">
								<h4>PRODUCTO NUEVO</h4>
								<div class="sell">
									<div class="men">
										<a href="product.html"><img src="images/pi.jpg" alt="" ></a>
									</div>
									<div class="men-in">
										<h6>Lorem Ipsum</h6>
										<span>$.60.00</span>
									</div>
									<div class="clearfix"> </div>
								</div>	
									
							</div>							
						</div>
						</div>
    				</div-->
				</li>
				
				<li><a  href="{{URL::action('FrontController@edit')}}">Contacto</a>
					
				</li>
		 </ul> 
		 <!---->
		 <div class="search-in" >
			<div class="search" >
						<form action="search.html">
							<input type="text" value="Keywords" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Keywords';}" class="text">
							<input type="submit" value="SEARCH">
						</form>
							<div class="close-in"><img src="images/close.png" alt="" /></div>
					</div>
						<div class="right"><button> </button></div>
				</div>
						<script type="text/javascript">
							$('.search').hide();
							$('button').click(function (){
							$('.search').show();
							$('.text').focus();
							}
							);
							$('.close-in').click(function(){
							$('.search').hide();
							});
						</script>


<div class="clearfix"> </div>
					<!---->
				</div>
				
			</div>
			<div class="clearfix"> </div>			
		</div>		
		</div>		
	@yield('Ebaner')

</div>
<!---->
@yield('Ecateg')
@yield('prodMuestra')
@yield('contact')
<!---->
	<div class="footer">		
		<div class="container">			

			<div class="col-md-4 footer-middle">
				<h3>NUESTROS PRODUCTOS</h3>
					@foreach($imag as $pc)
					<div class="product-go">
						<!--PRODUCTOS DE LA PRIMERA CATEGORIA -->

							<div class="grid-product">
								<h6><a href="#" >{{$pc->nombreProducto}}</a></h6>
								<ul class="star-footer">
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
								</ul>
								<span class=" price-in"><!--small>$70.00</small--> Precio Q. {{$pc->precio}}</span>
							</div>
								<div class="fashion">
									<a href="#"><img class="img-responsive " src="imgCatalog/{{$pc->direccion}}" alt="">										
									<!--p>SALE</p--></a>
								</div>
							<div class="clearfix"> </div>
							</div>						
						@endforeach

			</div>
			<div class="col-md-4 footer-bottom">
				<div class="logo-footer">
					<div class="logo-bottom">
						<a href="#"><img src="images/lo.png" alt="" style="width:120px"></a>
					</div>
					<div class="logo-the">
						<h4>ZROKbox</h4>
						<p>Servicio de catalogo
						para todo tipo de empresas</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="indo">
				<!--p class="in">Bandung, Indonesia <span>40553</span></p-->
					<ul class="social-footer ">
						<li><span><i> </i>12 34 56 78 </span></li>
						<li><span><i class="down"> </i>zrokbox</span></li>
						<li><a href="mailto:info@example.com"><i class="mes"> </i>zrokbox@mail.com</a></li>
						<li><a href="#"><i class="mes-in"> </i>http://zrokbox.com</a></li>
					</ul>
					<!--a href="#"><img src="images/pa.png" alt=""></a-->
					</div>
			</div>
			<div class="clearfix"> </div>
			<p class="footer-class"> <a href="" target="_blank"></a> </p>
		</div>
	</div>
<!---->
</body>
</html>