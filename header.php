<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-responsive.min.css">
  	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
  	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/styles.css">
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    
    <title>
    <?php
      
    
         wp_title( '|', true, 'right' );
    
       
    
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        //if ( $site_description && ( is_home() || is_front_page() ) )
            echo "  $site_description";
    
    
        ?>
    </title>
    
    <?php  wp_head(); ?>
</head>

<body>

	<div class="container">
    
    	<div class="row">

    		<div class="span4">

    			<logo><img src="<?php bloginfo('template_directory');?>/logo.png" /></logo>
            </div>
			

    		<div class="span8">

						<?php 
													
								$defaults = array(
								'depth'           =>1,
								'items_wrap' => '<ul class="nav nav-tabs">%3$s</ul>' 
								);
							
							wp_nav_menu( $defaults );			
						 ?>
	

            </div>
                
              
        </div>