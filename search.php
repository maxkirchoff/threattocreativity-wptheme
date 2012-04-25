<?php get_header();?>
<div style="clear:both;"></div>
		<div id="contentwrap">
			<div id="content">
				<div id="banner">
                </div>
				<div id="aligner">
				<h1 id="subtitle">- Search results for <?php echo the_search_query(); ?> -</h1>
				<!-- <div id="fun"></div> -->
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
                <div onclick="location.href='<?php the_permalink() ?>';" style="cursor:pointer;background:#<?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?>;" class="post bg thickbox" id="thickbox post-<?php the_ID(); ?>">
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
						<div align="center" class="entrywhole">
							<div align="left" class="entry">
							<?php post_thumb(); ?>	<?php the_excerpt('Read more &raquo;'); ?>
							</div>
						</div>
                    </div>
				</div>

				<?php endwhile; else: ?>
			<p>Sorry, your search returned nothing. Try something else.</p>
		<?php endif; ?>
				
                
				<div style="clear:both;">
                </div></div>

				<div align="center" id="navlink">
					<?php posts_nav_link(); ?>
                </div>
			</div>

			<?php get_sidebar();?>
	
    	</div>

<?php get_footer();?>