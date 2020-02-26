            </div>
	</div>
	

</div>
        </div><!-- close .*-inner (main-content) -->
    </div><!-- close .container -->
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
       <div id="footer-info">
        <div class="container">
            <div class="site-info">
				Copyright &copy; 2011 - <?php echo date("Y",time());?>  <a href="http://techarise.com/" title="techarise.com">TECHARISE.COM</a>  All rights reserved.
            </div><!-- close .site-info -->
        </div>
    </div>
</footer><!-- close #colophon -->
<script type="text/javascript">
    var baseurl = "<?php echo SITE_URL(); ?>";
</script>
<script type="text/javascript" src="<?php print HTTP_VENDOR_PATH; ?>js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php print HTTP_VENDOR_PATH; ?>js/popper.min.js"></script>
<script type="text/javascript" src="<?php print HTTP_VENDOR_PATH; ?>js/bootstrap.min.js"></script>


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







</body>
</html>
