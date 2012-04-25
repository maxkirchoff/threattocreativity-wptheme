<?php get_header();?>
<?php 
		// INCLUDE COLOR ARRAYS
		require ( get_template_directory() . '/color-arrays.php' );
			
		// GET THEME OPTION FOR COLORS
    	$options = get_option('threattocreativity_theme_options');
    		
    	// PASS THEME OPTION FOR COLOR INTO VAR
   		$colorswitch = $options['colorscheme'];
   		
   		// IS THERE CUSTOM COLORS?
   		$customoption = $options['customoption'];
   		
   		// WHAT ARE THE CUSTOM COLORS?
   		$ccolors = $options['customcolors'];
?>	
	<div style="clear:both;"></div>
		<div id="contentwrap">
			<div id="content">
				<div id="banner">
                </div>
				<div id="aligner">
				<!-- <div id="fun"></div> -->
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
                <div onclick="location.href='<?php the_permalink() ?>';" style="cursor:pointer;background:<?php
					// ASSIGNS COLOR TO BOX ACCORDING TO THEME OPTION COLOR
					if ($customoption == "yes") { 
						$customarray = explode(", ", stripslashes($ccolors));
						$color = $customarray[array_rand($customarray)];
						echo $color;
					} else {
					
						if ($colorswitch == "crayola") {
							$color = $crayola[array_rand($crayola)];
							echo $color;
						} elseif ($colorswitch == "red") {
							$color = $reds[array_rand($reds)];
							echo $color;	
						} elseif ($colorswitch == "blue") {
							$color = $blues[array_rand($blues)];
							echo $color;	
						} elseif ($colorswitch == "green") {
							$color = $greens[array_rand($greens)];
							echo $color;
						} elseif ($colorswitch == "purple") {
							$color = $purples[array_rand($purples)];
							echo $color;	
						} elseif ($colorswitch == "black") {
							$color = $blacks[array_rand($blacks)];
							echo $color;
						} else {
							$color1 = $traditional[array_rand($traditional)];
							$color2 = $traditional[array_rand($traditional)];
							$color3 = $traditional[array_rand($traditional)];
							$color4 = $traditional[array_rand($traditional)];
							$color5 = $traditional[array_rand($traditional)];
							$color6 = $traditional[array_rand($traditional)];
							echo "#". $color1 ."". $color2 ."". $color3 ."". $color4 ."". $color5 ."". $color6 ."";
						} 
					}
					?>;" <?php post_class('post bg thickbox'); ?> id="post-<?php the_ID(); ?>">
                	<div class="bg">
						<div class="postdate">
							<?php the_time('m.d.Y') ?>
                        </div>
						<div class="posttitle">
                        	<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                        </div>
						<div>
                        	<small>
                            	Categories: <?php the_category(', '); ?> | <?php comments_popup_link('Add a Comment', '1 Comment', '% Comments'); ?>
                            </small>
                        </div>
						<div class="entrywhole">
							<div class="entry">
							<?php 
								if(has_post_thumbnail()) {
									the_post_thumbnail('thumbnail'); 
								} else {
									post_thumb();
								}
							?>
							<?php 
								the_excerpt('Read more &raquo;'); 
							?>
							</div>
						</div>
                    </div>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
				<div style="clear:both;">
                </div></div>
				<div id="navlink">
					<?php posts_nav_link(); ?>
                </div>
			</div>
			<?php get_sidebar();?>
    	</div>
<?php get_footer();?>