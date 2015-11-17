@extends('index')
@section('scpt')
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
				
</script>	

<script src="js/simpleCart.min.js"> </script>
@endsection
@section('Ecateg')
<div class="product">
			<div class="container">
				<div class="col-md-3 product-price">
					  <div class="price-grid">
					    
	  <ul class="dropdown-menu1">
            
          </ul>
		  
		  	<div class="clearfix"> </div>
<!---->
 <script type="text/javascript" src="js/jquery-ui.min.js"></script>

      <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">

<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
 $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 500,
            values: [ 100, 400 ],
            slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
 });
$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

});//]]>  

</script>


<!---->
		</div>
				<div class=" rsidebar span_1_of_left">
					<div class="of-left">
						<h3 class="cate">CATEGORIAS</h3>
					</div>
		 <ul class="menu">
		 	@yield('menuCategoria')
		

	</ul>
					</div>
				<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
<!---->
	<div class="product-middle">		
					
				</div>	 
						
				
				</div>
				
		
			<!---->
			
				<!---->
				<div class="col-md-9 product-price1">
					<div class="mens-toolbar">
						<p class="showing">Showing 1–9 of 21 results</p>	                 
    	      
                	<div class="clearfix"></div>		
		        </div>
		        <div class="product-right-top">
		        	<div class="top-product">
		        		@yield('content')
	   		     	
	   		     	<div class="clearfix"> </div>
		        	</div>
		        	<!--codigo cortado-->
		        	
		        	
		        </div>
		        <ul class="start">
					<li><a href="#"><i> </i></a></li>
					<li><span>1</span></li>
					<li class="arrow"><a href="#">2</a></li>
					<li class="arrow"><a href="#">3</a></li>
					
					
					<li><a href="#"><i class="next"> </i></a></li>
				</ul>
				<div class="clearfix"> </div>
				</div>
				
			<div class="clearfix"> </div>
			
				<div class="shipping">
					<div class="col-md-3 col-md1">
						<div class=" phone">
						
							<div class="num">
								<span>12 34 56 78</span>
								<!--p>Monday - Saturday: 8am - 5pm PST</p-->
							</div>
							<i class="phone-in"> </i>
							<div class="clearfix"> </div>
						</div>
					
					</div>					
			<div class="clearfix"> </div>
			</div>					
				</div>				
			<!---->		
		</div>				
@endsection