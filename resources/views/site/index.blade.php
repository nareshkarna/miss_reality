@include('site.partials.header')


	<!-- slider -->
	<div class="skdslider">
		<ul id="home-slider" class="slides">
			<li>
				<img src="<?php echo URL::to('dist/images/1.jpg');?>" />				
			</li>
			<li>
				<img src="<?php echo URL::to('dist/images/img-1.jpg');?>" />
			</li>
		</ul>
		<div class="content-main-slider">
			<div class="content-inner-slider">
				<h1>Find Your Property</h1>
				<div class="search-area-slide">
					<div class="row justify-content-between">
						<div class="col-8">
							<input type="email" class="form-control" placeholder="Where do you want to live?" spellcheck="false">
						</div>
						<div class="col-4">
							<button type="button" class="btn btn-primary btn-lg btn-block">Find Now</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /slider -->

	<!-- Properties For Rent -->


	<!-- service -->
	<section class="service-home">
		<div class="container">
			<div class="sec-title">
				<h1>Our Services</h1>
			</div>

			<!-- listing -->
			<div class="latest-outer">
				<div class="row">
					<!-- service 1 -->
					<div class="col-sm-6">
						<div class="service-area">
							<div class="img-service">
								<img src="<?php echo URL::to('dist/images/property_grid-1.png');?>">
							</div>
							<div class="content-service">
								<h2>Service 1</h2>
								<div class="desc-service">
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
								</div>
							</div>
						</div>
					</div>
					<!-- /service 1 -->
					<!-- service 1 -->
					<div class="col-sm-6">
						<div class="service-area">
							<div class="img-service">
								<img src="<?php echo URL::to('dist/images/property_grid-1.png');?>">
							</div>
							<div class="content-service">
								<h2>Service 1</h2>
								<div class="desc-service">
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
								</div>
							</div>
						</div>
					</div>
					<!-- /service 1 -->
					<!-- service 1 -->
					<div class="col-sm-6">
						<div class="service-area">
							<div class="img-service">
								<img src="<?php echo URL::to('dist/images/property_grid-1.png');?>">
							</div>
							<div class="content-service">
								<h2>Service 1</h2>
								<div class="desc-service">
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
								</div>
							</div>
						</div>
					</div>
					<!-- /service 1 -->
					<!-- service 1 -->
					<div class="col-sm-6">
						<div class="service-area">
							<div class="img-service">
								<img src="<?php echo URL::to('dist/images/property_grid-1.png');?>">
							</div>
							<div class="content-service">
								<h2>Service 1</h2>
								<div class="desc-service">
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
								</div>
							</div>
						</div>
					</div>
					<!-- /service 1 -->
				</div>
			</div>
			<!-- /listing -->
		</div>
	</section>
	<!-- /service -->

	<!-- About -->   
	<section class="aboutus-area">
		<div class="container">
			<div class="sec-title">
				<h1>About Us</h1>
				<!-- <div class="border-shape"></div>
				<p>Welcome to our House Rent Company</p> -->
			</div>
			<div class="row">
				<div class="col-sm-2">
					<div class="tab-list">
						<ul class="nav nav-tabs about-tab hidden-xs hidden-sm" role="tablist">
							<li role="presentation"><a class="active" href="#home" aria-controls="home" role="tab" data-toggle="tab">About Company</a>
							</li>
							<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Terms &amp; Condition</a>
							</li>
							<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Our specialty</a>
							</li>							
						</ul>
						<form class="hidden-big">
							<select class="about-mobile">
								<option value="0">About Company</option>
								<option value="1">Terms &amp; Condition</option>
								<option value="2">Our specialty</option>
							</select>
						</form>
					</div> <!-- /.tab-list -->
				</div> <!-- /.col-md-2 -->

				<div class="col-sm-10">
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="home">
							<div class="row">
								<div class="col-sm-6">
									<div class="text-content">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
										<ul>
											<li>Amorem ipsum dolor sit amet, consectetur </li>
											 <li>Cras etitikis mauris egeth lorem ultricies</li>
											 <li>Amorem ipsum dolor sit amet, consectetur </li>
											 <li>Cras etitikis mauris egeth lorem ultricies</li>
											 <li>Amorem ipsum dolor sit amet, consectetur </li>
											 <li>Cras etitikis mauris egeth lorem ultricies</li>
										</ul>
									</div><!-- /.text-content -->    
								</div><!-- /.col-md-6 -->
								<div class="col-sm-6">
									<div class="image-content">
										<img src="<?php echo URL::to('dist/images/about-image.png');?>" alt="about">
									</div><!-- /.text-content -->
								</div><!-- /.col-md-6 -->
							</div><!-- /.row -->
						</div> <!-- /.home -->
						  
						<div role="tabpanel" class="tab-pane fade" id="profile">
							<div class="row">
								<div class="col-sm-6">
									<div class="text-content">
										<p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris egeth lorem ultricies ferme is ntum a inti diam. Morbi mollis pellden tesque offs aiug ueia nec rhoncus. Nam ute ultricies. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam. Morbi mollis pellen tesque offs aiug ueia nec rhoncus. Nam ute ultricies.</p>
										<ul>
											<li>Amorem ipsum dolor sit amet, consectetur </li>
											<li>Cras etitikis mauris egeth lorem ultricies</li>
											<li>Amorem ipsum dolor sit amet, consectetur </li>
											<li>Cras etitikis mauris egeth lorem ultricies</li>
											<li>Amorem ipsum dolor sit amet, consectetur </li>
											<li>Cras etitikis mauris egeth lorem ultricies</li>
										</ul>
									</div><!-- /.text-content -->    
								</div><!-- /.col-md-6 -->
								<div class="col-sm-6">
									<div class="image-content">
										<img src="<?php echo URL::to('dist/images/about-image.png');?>" alt="about">
									</div><!-- /.text-content -->
								</div><!-- /.col-md-6 -->
							</div><!-- /.row -->
						</div> <!-- /.profile -->
						
						<div role="tabpanel" class="tab-pane fade" id="messages">
							<div class="row">
								<div class="col-sm-6">
									<div class="text-content">
										<p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris egeth lorem ultricies ferme is ntum a inti diam. Morbi mollis pellden tesque offs aiug ueia nec rhoncus. Nam ute ultricies. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam. Morbi mollis pellen tesque offs aiug ueia nec rhoncus. Nam ute ultricies.</p>
										<ul>
											<li>Amorem ipsum dolor sit amet, consectetur </li>
											<li>Cras etitikis mauris egeth lorem ultricies</li>
											<li>Amorem ipsum dolor sit amet, consectetur </li>
											<li>Cras etitikis mauris egeth lorem ultricies</li>
											<li>Amorem ipsum dolor sit amet, consectetur </li>
											<li>Cras etitikis mauris egeth lorem ultricies</li>
										</ul>
									</div><!-- /.text-content -->    
								</div><!-- /.col-md-6 -->
								<div class="col-sm-6">
								  <div class="image-content">
									  <img src="<?php echo URL::to('dist/images/property_grid-1.png');?>" alt="about">
								  </div><!-- /.text-content -->
								</div><!-- /.col-md-6 -->
							</div><!-- /.row -->
						 </div> <!-- /.messages -->
					</div> <!-- /.tab-content -->
				 </div><!-- /.col-md-10 -->
			</div><!-- /.row -->
		</div>
	</section>
	<!-- About -->  
   
	<section class="listing-home">
		<div class="container">
			<div class="sec-title">
				<h1>Listing</h1>
			</div>

			<!-- listing -->
			<div class="latest-outer">
				<div class="row">
					<!-- lastest 1 -->
					<div class="col-sm-4">
						<div class="card">
							<div class="summary-thumbnail-outer-container">
								<div class="summary-thumbnail-container">
									<div class="sqs-image-wrapper">
										<img src="<?php echo URL::to('dist/images/for-rent.png');?>" class="card-img-top">
									</div>
								</div>
							</div>										
							<div class="card-body">
								<div class="room-info">
									<div class="address-room">
										<div class="room-title-left">
											<h2 class="card-title"><a href="">Lovely Modern Home</a></h2>
											<div class="location-room"><i class="fa fa-map-marker" aria-hidden="true"></i> Los Angeles, US</div>
										</div>

										<div class="quantity">
											<ul>
												<li><span>Area</span>1600 Sqft</li>
												<li><span>Rooms</span>9</li>
												<li><span>Baths</span>3</li>
												<li><span>Garage</span>1</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- <div class="room-meta">
									<ul>
										<li><i class="fa fa-user"></i>Owner</li>
										<li><i class="fa fa-calendar"></i>1 day Ago</li>
										<li class="price">Price: 240kr.</li>
									</ul>								
								</div> -->
							</div>
						</div>
					</div>
					<!-- lastest 1 -->
					<!-- lastest 1 -->
					<div class="col-sm-4">
						<div class="card">
							<div class="summary-thumbnail-outer-container">
								<div class="summary-thumbnail-container">
									<div class="sqs-image-wrapper">
										<img src="<?php echo URL::to('dist/images/property_grid-1.png');?>" class="card-img-top">
									</div>
								</div>
							</div>										
							<div class="card-body">
								<div class="room-info">
									<div class="address-room">
										<div class="room-title-left">
											<h2 class="card-title"><a href="">Lovely Modern Home</a></h2>
											<div class="location-room"><i class="fa fa-map-marker" aria-hidden="true"></i> Los Angeles, US</div>
										</div>

										<div class="quantity">
											<ul>
												<li><span>Area</span>1600 Sqft</li>
												<li><span>Rooms</span>9</li>
												<li><span>Baths</span>3</li>
												<li><span>Garage</span>1</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- <div class="room-meta">
									<ul>
										<li><i class="fa fa-user"></i>Owner</li>
										<li><i class="fa fa-calendar"></i>1 day Ago</li>
										<li class="price">Price: 240kr.</li>
									</ul>								
								</div> -->
							</div>
						</div>
					</div>
					<!-- lastest 1 -->
					<!-- lastest 1 -->
					<div class="col-sm-4">
						<div class="card">
							<div class="summary-thumbnail-outer-container">
								<div class="summary-thumbnail-container">
									<div class="sqs-image-wrapper">
										<img src="<?php echo URL::to('dist/images/for-rent.png');?>" class="card-img-top">
									</div>
								</div>
							</div>										
							<div class="card-body">
								<div class="room-info">
									<div class="address-room">
										<div class="room-title-left">
											<h2 class="card-title"><a href="">Lovely Modern Home</a></h2>
											<div class="location-room"><i class="fa fa-map-marker" aria-hidden="true"></i> Los Angeles, US</div>
										</div>

										<div class="quantity">
											<ul>
												<li><span>Area</span>1600 Sqft</li>
												<li><span>Rooms</span>9</li>
												<li><span>Baths</span>3</li>
												<li><span>Garage</span>1</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- <div class="room-meta">
									<ul>
										<li><i class="fa fa-user"></i>Owner</li>
										<li><i class="fa fa-calendar"></i>1 day Ago</li>
										<li class="price">Price: 240kr.</li>
									</ul>								
								</div> -->
							</div>
						</div>
					</div>
					<!-- lastest 1 -->
					<!-- lastest 1 -->
					<div class="col-sm-4">
						<div class="card">
							<div class="summary-thumbnail-outer-container">
								<div class="summary-thumbnail-container">
									<div class="sqs-image-wrapper">
										<img src="<?php echo URL::to('dist/images/property_grid-1.png');?>" class="card-img-top">
									</div>
								</div>
							</div>										
							<div class="card-body">
								<div class="room-info">
									<div class="address-room">
										<div class="room-title-left">
											<h2 class="card-title"><a href="">Lovely Modern Home</a></h2>
											<div class="location-room"><i class="fa fa-map-marker" aria-hidden="true"></i> Los Angeles, US</div>
										</div>

										<div class="quantity">
											<ul>
												<li><span>Area</span>1600 Sqft</li>
												<li><span>Rooms</span>9</li>
												<li><span>Baths</span>3</li>
												<li><span>Garage</span>1</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- <div class="room-meta">
									<ul>
										<li><i class="fa fa-user"></i>Owner</li>
										<li><i class="fa fa-calendar"></i>1 day Ago</li>
										<li class="price">Price: 240kr.</li>
									</ul>								
								</div> -->
							</div>
						</div>
					</div>
					<!-- lastest 1 -->
					<!-- lastest 1 -->
					<div class="col-sm-4">
						<div class="card">
							<div class="summary-thumbnail-outer-container">
								<div class="summary-thumbnail-container">
									<div class="sqs-image-wrapper">
										<img src="<?php echo URL::to('dist/images/for-rent.png');?>" class="card-img-top">
									</div>
								</div>
							</div>										
							<div class="card-body">
								<div class="room-info">
									<div class="address-room">
										<div class="room-title-left">
											<h2 class="card-title"><a href="">Lovely Modern Home</a></h2>
											<div class="location-room"><i class="fa fa-map-marker" aria-hidden="true"></i> Los Angeles, US</div>
										</div>

										<div class="quantity">
											<ul>
												<li><span>Area</span>1600 Sqft</li>
												<li><span>Rooms</span>9</li>
												<li><span>Baths</span>3</li>
												<li><span>Garage</span>1</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- <div class="room-meta">
									<ul>
										<li><i class="fa fa-user"></i>Owner</li>
										<li><i class="fa fa-calendar"></i>1 day Ago</li>
										<li class="price">Price: 240kr.</li>
									</ul>								
								</div> -->
							</div>
						</div>
					</div>
					<!-- lastest 1 -->
					<!-- lastest 1 -->
					<div class="col-sm-4">
						<div class="card">
							<div class="summary-thumbnail-outer-container">
								<div class="summary-thumbnail-container">
									<div class="sqs-image-wrapper">
										<img src="<?php echo URL::to('dist/images/property_grid-1.png');?>" class="card-img-top">
									</div>
								</div>
							</div>										
							<div class="card-body">
								<div class="room-info">
									<div class="address-room">
										<div class="room-title-left">
											<h2 class="card-title"><a href="">Lovely Modern Home</a></h2>
											<div class="location-room"><i class="fa fa-map-marker" aria-hidden="true"></i> Los Angeles, US</div>
										</div>

										<div class="quantity">
											<ul>
												<li><span>Area</span>1600 Sqft</li>
												<li><span>Rooms</span>9</li>
												<li><span>Baths</span>3</li>
												<li><span>Garage</span>1</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- <div class="room-meta">
									<ul>
										<li><i class="fa fa-user"></i>Owner</li>
										<li><i class="fa fa-calendar"></i>1 day Ago</li>
										<li class="price">Price: 240kr.</li>
									</ul>								
								</div> -->
							</div>
						</div>
					</div>
					<!-- lastest 1 -->
					
				</div>
			</div>
			<!-- /listing -->
		</div>
	</section>
	<!-- /Properties For Rent -->


	<!-- contact -->
	<section>
		<div class="container">
			<div class="sec-title">
				<h1>Contact Us</h1>
				<!-- <div class="border-shape"></div> -->
				<p>Thank you for your interest. For questions or comments, <br>please use the information listed here. We look forward to hearing from you soon.</p>
			</div>
			<div class="row justify-content-between">
				<div class="col-12 col-sm-5 contact-form">
					<div class="input-group">
						<div class="input-group-addon"><i aria-hidden="true" class="fa fa-user"></i></div>
						<input class="form-control" placeholder="Name" type="text">
					</div>
					<div class="input-group">
						<div class="input-group-addon"><i aria-hidden="true" class="fa fa-envelope-o"></i></div>
						<input class="form-control" placeholder="Email" type="text">
					</div>
					<div class="input-group">
						<div class="input-group-addon"><i aria-hidden="true" class="fa fa-phone"></i></div>
						<input class="form-control" placeholder="Phone Number" type="text">
					</div>
					<div class="input-group">
						<div class="input-group-addon"><i aria-hidden="true" class="fa fa-comment"></i></div>
						<textarea class="form-control" placeholder="Message"></textarea>
					</div>
					<div class="" style="margin-left:50px;">
						<input class="btn submit-contact-home btn-lg" value="SUBMIT" type="submit"> 
					</div>
				</div>

				<div class="col-12 col-sm-6 info-rental">
					<div>
						
						<strong>Address</strong> 
						<p>Roebuck Road<br>
						Walsall, West Midlands WS3 1AL<br>
						We are near Walsall town centre.<br>
						</p>
					</div>
					
						<strong>Hours of Operation</strong>
						<p>Monday - Sunday, 8:00 a.m. - 8:00 p.m.<br>
						Out-Of-Hours Consultations Available On Evenings
					</p>
					
					<p>
						<strong>Email:- </strong> info@tailormaidevents.com
					</p>
					
					<p>
						<strong>Call:- </strong> 0123 456 789 
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- /contact -->



@include('site.partials.footer')