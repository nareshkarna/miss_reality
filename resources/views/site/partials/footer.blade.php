<!-- footer -->
	<footer class="Footer-main">
		<div class="container">
			<div class="row">
				<!-- first -->
				<div class="col">
					<div class="Footer-heading">Support links</div>
					<div class="Footer-list-outer">
						<ul class="Footer-list">
							<li><a href="">Home</a></li>							
							<li><a href="">About Us</a></li>
							<li><a href="">Service</a></li>
							<li><a href="">Blog</a></li>
							<li><a href="">Contact us</a></li>
						</ul>
					</div>
				</div>
				<!-- /first -->

				<!-- second -->
				<div class="col">
					<div class="Footer-heading">Join As Agent</div>
					<div class="Footer-list-outer">
						<div class="row">
							<div class="col-sm-3 hidden-xs">
								<img src="<?php echo URL::to('dist/images/agent.png');?>" alt="agents" class="img-responsive">
							</div>
							<div class="col-md-9 col-sm-3 col-xs-12">
								<p> Lorem must explain to you how
								all this mistaolt cing pleasure 
								praising ain wasnad I will give 
								you a complete pain was prex
								 plain to you lorem
								 </p>
								 <a href="/register/agent" type="join" class="btn btn-agent submit-contact-home">Join </a>
							</div>
						</div>
					</div>
				</div>
				<!-- /second -->

				<!-- Three -->
				<div class="col">
					<div class="Footer-heading">Social Media</div>
					<div class="Footer-list-outer">
						<div class="Footer-social">
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
				</div>
				<!-- /Three -->
			</div>
		</div>
	</footer>
	<!-- bottom -->
	<div class="bottom_footer">
		<div class="reserve-text"> <span>Copyright &copy; 2018 Property Manager All Right Reserve</span> </div>
	</div>
	<!-- /bottom -->
	<!-- /footer -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="js/jquery.min.js"></script> -->


	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#home-slider').skdslider({delay:5000, animationSpeed: 2000,showNextPrev:true,showPlayButton:true,autoSlide:true,animationType:'fading'});
			
		});

jQuery(document).ready(function ($) {
	"use strict";
	
	var modelApp = {
		
		/* ---------------------------------------------
		 Mobile Select
		--------------------------------------------- */
		mobileSelect: function() {
			var $selectSelector = $(".about-mobile");
			$selectSelector.on("change", function (e) {
				var url = $(this).val();
				if($.isNumeric(url) === true) {
					var $tabNav = $(".about-tab li a");
			    	$tabNav.eq(url).tab('show'); 
				} else {
					window.location = url;
				}
			});
		}
};

		/* ---------------------------------------------
	 Document ready function
	 --------------------------------------------- */
	$(function() {
		modelApp.mobileSelect();
	});
	
});
	</script>
  </body>
</html>
