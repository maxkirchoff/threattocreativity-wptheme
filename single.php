<?php get_header();?>

	<div id="contentwrap"><div id="content2"><div id="contentpost">

		<div id="banner"></div>

		<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<div class="post_single" id="post-<?php the_ID(); ?>" >

			<div class="postdate_single"><?php the_time('m.d.Y') ?></div>

			<div class="posttitle_single"><?php the_title(); ?></div>

			<div id="cattag"><?php edit_post_link('Edit This', '', ' |'); ?>
  Categories: <?php the_category(', '); ?></div>


			<div align="center" class="entrywhole">

				<div align="left" class="entry">

					<?php the_content('Read more &raquo;'); ?>

				</div>

			</div>
<div id="cattag"><?php the_tags('Tags:', ', ', ''); ?> </div>
		</div>
		<div style="clear:both;"></div>
		<?php wp_link_pages('before=<div id="page-links">Pages: &after=</div>'); ?>
		<div><?php comments_template(); ?></div>

		<?php endwhile; ?>

		<?php endif; ?>

	</div>

	<div id="navigationwrap">

	</div>

</div>

		<?php get_sidebar();?>
</div>




<?php get_footer();?>