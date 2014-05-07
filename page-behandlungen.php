<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    

    <title>
    <?php
      
    
         wp_title( '|', true, 'right' );
    
       
    
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        //if ( $site_description && ( is_home() || is_front_page() ) )
            echo "  $site_description";
    
    
        ?>
    </title>
    
  


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/custom.css">
    


</head>

  <body>

     

    <!-- NAVBAR
    ================================================== -->
   <div class="navbar-wrapper">  
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">
  
         <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            
            
            <a class="brand" href="#">beautycode stuttgart</a>
            

            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">


                <?php 
                      $current_id = get_the_ID();

                      $args = array(
                        'sort_order' => 'ASC',
                        'sort_column' => 'menu_order',
                        'parent' => 0,                    
                      ); 

                      $mynavigation = get_pages($args);
                      
                      foreach ($mynavigation as $mynav) {
                      
                        


                      if($current_id == $mynav->ID){


                      $postChildren = get_children(array(
                          'post_parent' => $current_id,
                          'post_type' => 'page',
                          'post_status' => 'publish',
                      ));


                      if ($postChildren){



                        
                      }
                      

                      ?>
                                <li class="active"> <a href="<?php echo get_page_link($mynav->ID) ?>"><?php  echo get_the_title($mynav);   ?></a></li>
                      <?php
                              } else {

                                ?>
                                <li> <a href="<?php echo get_page_link($mynav->ID) ?>"><?php  echo get_the_title($mynav);   ?></a></li>
                      <?php

                              }
                            
                            }
                      ?>
            
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      
      <div class="carousel-inner">


          <div class="item active">
         
          <div class="container">
            <div class="carousel-caption">
              <p class="lead">

                  <?php   $content_post = get_post($current_id);
                          $content = $content_post->post_content;
                              echo $content;
                  ?>
              </p>           
            </div>
          </div>
        </div>

        
        <?php
            
            $custom_wp_query = new WP_Query();
            $all_wp_pages = $custom_wp_query->query(array('post_type' => 'page'));

            // Filter through all pages and find specified page's children
            $childrenOfCurrentPage = get_page_children( $current_id, $all_wp_pages );
            
            foreach ($childrenOfCurrentPage as $mychild) {
              
        ?>        
          <div class="item">
         
          <div class="container">
            <div class="carousel-caption">

                <h1><?php echo get_the_title($mychild);  ?></h1>
                <p><?php echo $mychild->post_content; ?></p>
            </div>
          </div>
          </div>



        <?php } ?>

        
      </div>
      
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>



      
    
    </div><!-- /.carousel -->




      <!-- FOOTER -->
      <div id="footer">
        <div class="container">
          <p>&copy; 2014 Salvamac.com &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </div>
      </div>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-transition.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-alert.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-modal.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-dropdown.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-scrollspy.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-tab.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-tooltip.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-popover.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-button.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-collapse.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-carousel.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="<?php bloginfo('template_directory'); ?>/js/holder.js"></script>
  

</body></html>