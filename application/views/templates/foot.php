<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>No 2, Jamins Close</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+234-812-9944-224</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>info@jamin.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Hot deals</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Smartphones</a></li>
									<li><a href="#">Cameras</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#" title="VISA"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#" title="Credit Card"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#" title="PayPal"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#" title="Master Card"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#" title="Discover"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#" title="Amex"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This site was designed <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Jamin</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
<script type="text/javascript">
    var baseurl = "<?php echo SITE_URL(); ?>";
</script>
<script type="text/javascript" src="<?php print HTTP_VENDOR_PATH; ?>js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php print HTTP_VENDOR_PATH; ?>js/popper.min.js"></script>
<script type="text/javascript" src="<?php print HTTP_VENDOR_PATH; ?>js/bootstrap.min.js"></script>
		<script src="<?php print HTTP_JS_PATH; ?>/jquery.min.js"></script>
		<script src="<?php print HTTP_JS_PATH; ?>/bootstrap.min.js"></script>
		<script src="<?php print HTTP_JS_PATH; ?>/slick.min.js"></script>
		<script src="<?php print HTTP_JS_PATH; ?>/nouislider.min.js"></script>
		<script src="<?php print HTTP_JS_PATH; ?>/jquery.zoom.min.js"></script>
		<script src="<?php print HTTP_JS_PATH; ?>/main.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

<script type="text/javascript" src="<?php print HTTP_JS_PATH; ?>/common.js"></script>	
<script type="text/javascript" src="<?php print HTTP_JS_PATH; ?>/cart.js"></script>

<script>$(document).ready(function() {$('.fancybox').fancybox();});</script>
                <script>function productZoom(){
                        $(".product-zoom").elevateZoom({
                          gallery: 'ProductThumbs',
                          galleryActiveClass: "active",
                          zoomType: "inner",
                          cursor: "crosshair"
                        });$(".product-zoom").on("click", function(e) {
                          var ez = $('.product-zoom').data('elevateZoom');
                          $.fancybox(ez.getGalleryList());
                          return false;
                        });
                        
                        };
                      function productZoomDisable(){
                        if( $(window).width() < 767 ) {
                          $('.zoomContainer').remove();
                          $(".product-zoom").removeData('elevateZoom');
                          $(".product-zoom").removeData('zoomImage');
                        } else {
                          productZoom();
                        }
                      };

                      productZoomDisable();

                      $(window).resize(function() {
                        productZoomDisable();
                      });
                </script>
                <script>
                    $('.product-thumbnail').owlCarousel({
                       
                        nav: true,
                        dots:false,
                        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                        
                    });
                </script>

<script type="text/javascript">
            //script for time and date
            function show2() {
                if (!document.all && !document.getElementById)
                    return
                thelement = document.getElementById ? document.getElementById("tick2") : document.all.tick2
                var Digital = new Date()
                var hours = Digital.getHours()
                var minutes = Digital.getMinutes()
                var seconds = Digital.getSeconds()
                var dn = "PM"
                if (hours < 12)
                    dn = "AM"
                if (hours > 12)
                    hours = hours - 12
                if (hours == 0)
                    hours = 12
                if (minutes <= 9)
                    minutes = "0" + minutes
                if (seconds <= 9)
                    seconds = "0" + seconds
                var ctime = hours + ":" + minutes + ":" + seconds + " " + dn
                thelement.innerHTML = ctime
                setTimeout("show2()", 1000)
            }
            window.onload = show2;
</script>

<script type="text/javascript">
	// submit form without page refresh for forms

                $("#order-pay-now").click(function (e) {
                    if (document.getElementById('checkout-form').checkValidity()) {
                        e.preventDefault();
                        $("#loader").show();
                        $.ajax({
                            //url: 'action.php',
                            method: 'post',
                            data: $("#checkout-form").serialize() + '&action=order-pay-now',
                            success: function (response) {
                                $("#alert").show();
                                $("#result").html(response);
                                $("#loader").hide();
                            }
                        });
                    }
                    return true;
                });
</script>


	</body>
</html>