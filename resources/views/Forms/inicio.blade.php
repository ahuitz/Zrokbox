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

@section('Ebaner')
<div class="banner">
		<div class="banner-top">
	         <h2>BIENVENIDOS</h2>
	         <p>Variedad de productos <span>para
	         	su vehiculo</span></p>
</div>
 	</div>	
@endsection

@section('prodMuestra')
<div class="content">
	<div class="container">
		
		<div class="sap_tabs">
			<label class="line"> </label>
			<h2>LATES ARRIVAL</h2>	
						 <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>GALONES</span></li>
							  <div class="clearfix"></div>
						  </ul>				  	 
							<div class="resp-tabs-container">
							    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<div class="tab_img">
									  <div class="img-top simpleCart_shelfItem">
										
					   		  			   <img src="images/pi4.jpg" class="img-responsive" alt=""  />
											
								              <div class="tab_desc">
												 											 
												 	<div class="agency ">
													<div class="agency-left">
														<h6 class="jean">ABRILLANTADOR</h6>														
														<div class="clearfix"> </div>
													</div>
													<div class="agency-right">
														
														<ul class="social-in">
															<li><a href="#"><i> </i></a></li>
															<li><a href="#"><i > </i></a></li>
															<li><a href="#"><i> </i></a></li>
															<li><a href="#"><i > </i></a></li>
															<li><a href="#"><i > </i></a></li>
														</ul>
														<div class="clearfix"> </div>
													</div>
												 </div>
											  </div>
										
										</div>
										<div class="img-top simpleCart_shelfItem">
										  
					   		  			   <img src="images/pi3.jpg" class="img-responsive" alt=""/>
											<div class="tab_desc">
												<div class="agency ">
													<div class="agency-left">
														<h6 class="jean">SHAMPOO</h6>
														
														<div class="clearfix"> </div>
													</div>
													<div class="agency-right">
													
														<ul class="social-in">
															<li><a href="#"><i> </i></a></li>
															<li><a href="#"><i > </i></a></li>
															<li><a href="#"><i> </i></a></li>
															<li><a href="#"><i > </i></a></li>
															<li><a href="#"><i > </i></a></li>
														</ul>
														<div class="clearfix"> </div>
													</div>
												 </div>
											  </div>
											 </div>
											  <div class="img-top simpleCart_shelfItem">
										  
					   		  			   <img src="images/pi4.jpg" class="img-responsive" alt=""/>
											<div class="tab_desc">
												 
												 <div class="agency ">
													<div class="agency-left">
														<h6 class="jean">ABRILLANTADOR</h6>
														
														<div class="clearfix"> </div>
													</div>
													<div class="agency-right">														
														<ul class="social-in">
															<li><a href="#"><i> </i></a></li>
															<li><a href="#"><i > </i></a></li>
															<li><a href="#"><i> </i></a></li>
															<li><a href="#"><i > </i></a></li>
															<li><a href="#"><i > </i></a></li>
														</ul>
														<div class="clearfix"> </div>
													</div>
												 </div>
											  </div>
											</div>
											<div class="clearfix"></div>
							     </div>	
									 	        					 
						  </div>							    						    
                  </div>
          </div>
         </div>
		<!---->
	</div>
	<!---->	
		
		<div class="map">
					<iframe src="https://maps.google.com.gt/maps?f=q&source=s_q&hl=es-419&geocode=+&q=proexc&ie=UTF8&hq=proexc&hnear=Quezaltenango,+Quetzaltenango&t=m&z=14&iwloc=A&cid=1659912939443667071&ll=14.838265,-91.509635&output=embed"></iframe>
				</div>
</div>
@endsection