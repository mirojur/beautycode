<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package beautycode
 */
?>

	  <footer>
        	<p><b>salvamac.com<b> &copy; 2014</p>            
	  </footer>   
        
    </div>


  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.touchSwipe.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.liquid-slider.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/prism.js"></script>
  <script>
 		 $('#slider-1').liquidSlider({autoSlide:true,minHeight: 350,includeTitle:false}); 
  </script>

<?php wp_footer(); ?>

</body>
</html>