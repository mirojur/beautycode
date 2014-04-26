<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css"/>
    
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/liquid-slider.css">
  	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animate.css">
  	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/prism.css">
  	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/styles.css">
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.2.0/pure-min.css">
    
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
    
    	<header>
    		<logo><img src="<?php bloginfo('template_directory');?>/logo.png" /></logo>
            
            	
				<nav>
					<topnavi id="access" role="navigation">
						<?php 
													
								$defaults = array(
								'depth'           =>1
							);
							
							wp_nav_menu( $defaults );			
						 ?>
					</topnavi><!-- #access -->
                    
                    <!--<subnavi> 
					
							if($post->post_parent == 0)
							{
								wp_list_pages("title_li=&child_of=".$post->ID);
							}
							else
							{
								wp_list_pages("title_li=&child_of=".$post->post_parent);
							}
													
							
                    </subnavi> -->       
                                                        
                    
                </nav>
                
              
        </header>

