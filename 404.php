<?php get_header();?>

	<div id="content">
		<div id="banner"></div>
			<div class="pagetitle">Error 404</div>
			<p>We can't find the page you have requested, but maybe you should check out the archives below for something:</p>
			<ul>
				<?php wp_get_archives('monthly', '', 'html', '', '', TRUE); ?>
			</ul>
		</div>
		<div id="navigationwrap">
			<?php get_sidebar();?>
        </div>
	</div>
<?php get_footer();?>