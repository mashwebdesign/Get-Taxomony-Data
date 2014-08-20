 <?php $terms = wp_get_post_terms( $WP_Query->post->ID, array( 'Load', 'Seats' ) ); ?>
								
		<?php 	
									
				foreach ( $terms as $term ) :
							    	
					echo $term->name;
                            			
				endforeach; 
					
    	?>