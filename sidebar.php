		<div id="sidebar">

				

			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			
		<h2 class="widgettitle">Pages</h2>
		<ul>
			<?php wp_list_pages('title_li='); ?>
		</ul>
		<h2 class="widgettitle">Categories</h2>
		<ul>
			 <?php wp_list_categories('orderby=name&title_li='); ?>
		</ul>
		<h2 class="widgettitle">Archives</h2>
		<ul>
			 <?php wp_get_archives('type=monthly'); ?>
		</ul>
		
		<h2 class="widgettitle">Meta</h2>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<li><a href="<?php bloginfo('rss2_url'); ?>" title="Syndicate this site using RSS"><abbr title="Really Simple Syndication">RSS</abbr></a></li>
			<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="The latest comments to all posts in RSS">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
			<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
			<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
			<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform."><abbr title="WordPress">WP</abbr></a></li>
			<?php wp_meta(); ?>
		</ul>
		
		<?php endif; ?>
		</div>