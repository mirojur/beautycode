<?php /* Template name: Behandlungen Page */ 



get_header(); ?>  



        
        <content> 
        
        	
		 
                <div class="liquid-slider" id="slider-1">
                
                
                <?php
						$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );
					
						foreach( $mypages as $page ) {		
							$content = $page->post_content;
							if ( ! $content ) // Check for empty page
								continue;
												
				?>
							
                            <div>
                      			
                                <h2 class="title" >
								
								<?php 
								
								$mypagetype = $page->post_title; 
								echo $page->post_title; 
								
								?>
                                
                                </h2>
                      			
                                <?php
										$args = array (
											'post_type'              => 'behandlung',
											'meta_query'             => array(
																			array(
																				'key'       => 'typ',
																				'value'     => $mypagetype,
																			),
																		),
													  );
										
										
										$myQuery = new WP_Query( $args );
										
										while( $myQuery->have_posts() ) {
												
											$myQuery->the_post();								
											$custom = get_post_custom($myQuery->post->ID);
 											$typ = $custom["typ"][0];
											$subtype = $custom["subtype"][0];
											$beschreibung = $custom["Beschreibung"][0];
											$preis = $custom["Preis"][0];
											$dauer = $custom["dauer"][0];
											
					
											
								?>
                                            
                                           
                                           	<div class="behandlung">
    											<div class="behandlung-title"><p><?php echo the_title(); ?> </p></div> 
                                                <div class="behandlung-beschreibung"><p><?php echo $beschreibung; ?> </p></div> 
                                                <div class="behandlung-preis"><p><?php echo $preis; ?> </p></div> 
                                                <div class="behandlung-dauer"><p><?php echo $dauer; ?> </p></div>                                                    											  
											</div>
                                           
                                            
                                            
                                 <?php           
												
											
										}
										
										wp_reset_postdata();
								 ?>
    
    
                                
                                
                    		</div>
                        
                            
				
				<?php	}?>



                            
                    
                          
                    
                </div>

		      
        	
        </content>
        
        
        
 <?php get_footer(); ?>     
