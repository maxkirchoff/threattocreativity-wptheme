<style type="text/css">
<?php
		// INCLUDE COLOR ARRAYS
		require ( get_template_directory() . '/color-arrays.php' );
		
		// GET THEME OPTION FOR COLORS
    	$options = get_option('threattocreativity_theme_options');
    		
    	// PASS THEME OPTION FOR COLOR INTO VAR
   		$colorswitch = $options['colorscheme'];
   		
   		// IS THERE CUSTOM COLORS? yes or no?
   		$customoption = $options['customoption'];
   		
   		// WHAT ARE THE CUSTOM COLORS?
   		$ccolors = $options['customcolors'];
   		
   		
   		//LOOKS FOR CUSTOM SETTING AND USES IT IF SET
   		if ($customoption == "yes") { 
						$customarray = explode(", ", stripslashes($ccolors));
						?>
						.widgettitle {
				background: <?php $color = $customarray[array_rand($customarray)];
				echo $color; ?>; 
			}
			#recent-posts .widgettitle {
				background: <?php $color = $customarray[array_rand($customarray)];
				echo $color; ?>; 
			}
			#archives .widgettitle {
				background: <?php $color = $customarray[array_rand($customarray)];
				echo $color; ?>;
			}
			#linkcat-2 .widgettitle {
				background: <?php $color = $customarray[array_rand($customarray)];
				echo $color; ?>;
			}
			#recent-comments .widgettitle {
				background: <?php $color = $customarray[array_rand($customarray)];
				echo $color; ?>;
			}
			#sidebar .sidebar_header {
				background: <?php $color = $customarray[array_rand($customarray)];
				echo $color; ?>;
			}
			.searchform {
				background: <?php $color = $customarray[array_rand($customarray)];
				echo $color; ?>;
			}
			.commentlist li {
				border-bottom:1px solid <?php $color = $customarray[array_rand($customarray)];
				echo $color; ?>;
			}
			.blogtitle a {
				color: <?php $color = $customarray[array_rand($customarray)];
				echo $color; ?>;
			}
			.blogtitle a:hover {
				color: <?php $color = $customarray[array_rand($customarray)];
				echo $color; ?>;
			}
			#nav a, #nav a:visited {
				background: <?php $color = $customarray[array_rand($customarray)];
				echo $color; ?>;
			}
			#nav a:hover {
				background: <?php $color = $customarray[array_rand($customarray)];
				echo $color; ?>;
			}
			.blogdescription {
				background: <?php $color = $customarray[array_rand($customarray)];
				echo $color; ?>;
			}
			ol.commentlist li.comment ul.children li.depth-2 { 
				border-left:5px solid <?php $color = $customarray[array_rand($customarray)];
				echo $color; ?>; 
			}
			ol.commentlist li.comment ul.children li.depth-3 { 
				border-left:5px solid <?php $color = $customarray[array_rand($customarray)];
				echo $color; ?>; 
			}
			ol.commentlist li.comment ul.children li.depth-4 { 
				border-left:5px solid <?php $color = $customarray[array_rand($customarray)];
				echo $color; ?>; 
			}
			ol.commentlist li.parent { 
				border-left:5px solid <?php $color = $customarray[array_rand($customarray)];
				echo $color; ?>; 
			}
		<?php
		} else {

		// ASSIGNS COLOR TO BOX ACCORDING TO THEME OPTION COLOR
		if ($colorswitch == "crayola") {
			?>
			.widgettitle {
				background: <?php $color = $crayola[array_rand($crayola)];
				echo $color; ?>; 
			}
			#recent-posts .widgettitle {
				background: <?php $color = $crayola[array_rand($crayola)];
				echo $color; ?>; 
			}
			#archives .widgettitle {
				background: <?php $color = $crayola[array_rand($crayola)];
				echo $color; ?>;
			}
			#linkcat-2 .widgettitle {
				background: <?php $color = $crayola[array_rand($crayola)];
				echo $color; ?>;
			}
			#recent-comments .widgettitle {
				background: <?php $color = $crayola[array_rand($crayola)];
				echo $color; ?>;
			}
			#sidebar .sidebar_header {
				background: <?php $color = $crayola[array_rand($crayola)];
				echo $color; ?>;
			}
			.searchform {
				background: <?php $color = $crayola[array_rand($crayola)];
				echo $color; ?>;
			}
			.commentlist li {
				border-bottom:1px solid <?php $color = $crayola[array_rand($crayola)];
				echo $color; ?>;
			}
			.blogtitle a {
				color: <?php $color = $crayola[array_rand($crayola)];
				echo $color; ?>;
			}
			.blogtitle a:hover {
				color: <?php $color = $crayola[array_rand($crayola)];
				echo $color; ?>;
			}
			#nav a, #nav a:visited {
				background: <?php $color = $crayola[array_rand($crayola)];
				echo $color; ?>;
			}
			#nav a:hover {
				background: <?php $color = $crayola[array_rand($crayola)];
				echo $color; ?>;
			}
			.blogdescription {
				background: <?php $color = $crayola[array_rand($crayola)];
				echo $color; ?>;
			}
			ol.commentlist li.comment ul.children li.depth-2 { 
				border-left:5px solid <?php $color = $crayola[array_rand($crayola)];
				echo $color; ?>; 
			}
			ol.commentlist li.comment ul.children li.depth-3 { 
				border-left:5px solid <?php $color = $crayola[array_rand($crayola)];
				echo $color; ?>; 
			}
			ol.commentlist li.comment ul.children li.depth-4 { 
				border-left:5px solid <?php $color = $crayola[array_rand($crayola)];
				echo $color; ?>; 
			}
			ol.commentlist li.parent { 
				border-left:5px solid <?php $color = $crayola[array_rand($crayola)];
				echo $color; ?>; 
			}
			<?php
					} elseif ($colorswitch == "red") {
							?>
			.widgettitle {
				background: <?php $color = $reds[array_rand($reds)];
				echo $color; ?>; 
			}
			#recent-posts .widgettitle {
				background: <?php $color = $reds[array_rand($reds)];
				echo $color; ?>; 
			}
			#archives .widgettitle {
				background: <?php $color = $reds[array_rand($reds)];
				echo $color; ?>;
			}
			#linkcat-2 .widgettitle {
				background: <?php $color = $reds[array_rand($reds)];
				echo $color; ?>;
			}
			#recent-comments .widgettitle {
				background: <?php $color = $reds[array_rand($reds)];
				echo $color; ?>;
			}
			#sidebar .sidebar_header {
				background: <?php $color = $reds[array_rand($reds)];
				echo $color; ?>;
			}
			.searchform {
				background: <?php $color = $reds[array_rand($reds)];
				echo $color; ?>;
			}
			.commentlist li {
				border-bottom:1px solid <?php $color = $reds[array_rand($reds)];
				echo $color; ?>;
			}
			.blogtitle a {
				color: <?php $color = $reds[array_rand($reds)];
				echo $color; ?>;
			}
			.blogtitle a:hover {
				color: <?php $color = $reds[array_rand($reds)];
				echo $color; ?>;
			}
			#nav a, #nav a:visited {
				background: <?php $color = $reds[array_rand($reds)];
				echo $color; ?>;
			}
			#nav a:hover {
				background: <?php $color = $reds[array_rand($reds)];
				echo $color; ?>;
			}
			.blogdescription {
				background: <?php $color = $reds[array_rand($reds)];
				echo $color; ?>;
			}
			ol.commentlist li.comment ul.children li.depth-2 { 
				border-left:5px solid <?php $color = $reds[array_rand($reds)];
				echo $color; ?>; 
			}
			ol.commentlist li.comment ul.children li.depth-3 { 
				border-left:5px solid <?php $color = $reds[array_rand($reds)];
				echo $color; ?>; 
			}
			ol.commentlist li.comment ul.children li.depth-4 { 
				border-left:5px solid <?php $color = $reds[array_rand($reds)];
				echo $color; ?>; 
			}
			ol.commentlist li.parent { 
				border-left:5px solid <?php $color = $reds[array_rand($reds)];
				echo $color; ?>; 
			}	
			<?php
					} elseif ($colorswitch == "blue") {
						?>
			.widgettitle {
				background: <?php $color = $blues[array_rand($blues)];
				echo $color; ?>; 
			}
			#recent-posts .widgettitle {
				background: <?php $color = $blues[array_rand($blues)];
				echo $color; ?>; 
			}
			#archives .widgettitle {
				background: <?php $color = $blues[array_rand($blues)];
				echo $color; ?>;
			}
			#linkcat-2 .widgettitle {
				background: <?php $color = $blues[array_rand($blues)];
				echo $color; ?>;
			}
			#recent-comments .widgettitle {
				background: <?php $color = $blues[array_rand($blues)];
				echo $color; ?>;
			}
			#sidebar .sidebar_header {
				background: <?php $color = $blues[array_rand($blues)];
				echo $color; ?>;
			}
			.searchform {
				background: <?php $color = $blues[array_rand($blues)];
				echo $color; ?>;
			}
			.commentlist li {
				border-bottom:1px solid <?php $color = $blues[array_rand($blues)];
				echo $color; ?>;
			}
			.blogtitle a {
				color: <?php $color = $blues[array_rand($blues)];
				echo $color; ?>;
			}
			.blogtitle a:hover {
				color: <?php $color = $blues[array_rand($blues)];
				echo $color; ?>;
			}
			#nav a, #nav a:visited {
				background: <?php $color = $blues[array_rand($blues)];
				echo $color; ?>;
			}
			#nav a:hover {
				background: <?php $color = $blues[array_rand($blues)];
				echo $color; ?>;
			}
			.blogdescription {
				background: <?php $color = $blues[array_rand($blues)];
				echo $color; ?>;
			}
			ol.commentlist li.comment ul.children li.depth-2 { 
				border-left:5px solid <?php $color = $blues[array_rand($blues)];
				echo $color; ?>; 
			}
			ol.commentlist li.comment ul.children li.depth-3 { 
				border-left:5px solid <?php $color = $blues[array_rand($blues)];
				echo $color; ?>; 
			}
			ol.commentlist li.comment ul.children li.depth-4 { 
				border-left:5px solid <?php $color = $blues[array_rand($blues)];
				echo $color; ?>; 
			}
			ol.commentlist li.parent { 
				border-left:5px solid <?php $color = $blues[array_rand($blues)];
				echo $color; ?>; 
			}	
			<?php
					} elseif ($colorswitch == "green") {
						?>
			.widgettitle {
				background: <?php $color = $greens[array_rand($greens)];
				echo $color; ?>; 
			}
			#recent-posts .widgettitle {
				background: <?php $color = $greens[array_rand($greens)];
				echo $color; ?>; 
			}
			#archives .widgettitle {
				background: <?php $color = $greens[array_rand($greens)];
				echo $color; ?>;
			}
			#linkcat-2 .widgettitle {
				background: <?php $color = $greens[array_rand($greens)];
				echo $color; ?>;
			}
			#recent-comments .widgettitle {
				background: <?php $color = $greens[array_rand($greens)];
				echo $color; ?>;
			}
			#sidebar .sidebar_header {
				background: <?php $color = $greens[array_rand($greens)];
				echo $color; ?>;
			}
			.searchform {
				background: <?php $color = $greens[array_rand($greens)];
				echo $color; ?>;
			}
			.commentlist li {
				border-bottom:1px solid <?php $color = $greens[array_rand($greens)];
				echo $color; ?>;
			}
			.blogtitle a {
				color: <?php $color = $greens[array_rand($greens)];
				echo $color; ?>;
			}
			.blogtitle a:hover {
				color: <?php $color = $greens[array_rand($greens)];
				echo $color; ?>;
			}
			#nav a, #nav a:visited {
				background: <?php $color = $greens[array_rand($greens)];
				echo $color; ?>;
			}
			#nav a:hover {
				background: <?php $color = $greens[array_rand($greens)];
				echo $color; ?>;
			}
			.blogdescription {
				background: <?php $color = $greens[array_rand($greens)];
				echo $color; ?>;
			}
			ol.commentlist li.comment ul.children li.depth-2 { 
				border-left:5px solid <?php $color = $greens[array_rand($greens)];
				echo $color; ?>; 
			}
			ol.commentlist li.comment ul.children li.depth-3 { 
				border-left:5px solid <?php $color = $greens[array_rand($greens)];
				echo $color; ?>; 
			}
			ol.commentlist li.comment ul.children li.depth-4 { 
				border-left:5px solid <?php $color = $greens[array_rand($greens)];
				echo $color; ?>; 
			}
			ol.commentlist li.parent { 
				border-left:5px solid <?php $color = $greens[array_rand($greens)];
				echo $color; ?>; 
			}	
			<?php
					} elseif ($colorswitch == "purple") {
						?>
			.widgettitle {
				background: <?php $color = $purples[array_rand($purples)];
				echo $color; ?>; 
			}
			#recent-posts .widgettitle {
				background: <?php $color = $purples[array_rand($purples)];
				echo $color; ?>; 
			}
			#archives .widgettitle {
				background: <?php $color = $purples[array_rand($purples)];
				echo $color; ?>;
			}
			#linkcat-2 .widgettitle {
				background: <?php $color = $purples[array_rand($purples)];
				echo $color; ?>;
			}
			#recent-comments .widgettitle {
				background: <?php $color = $purples[array_rand($purples)];
				echo $color; ?>;
			}
			#sidebar .sidebar_header {
				background: <?php $color = $purples[array_rand($purples)];
				echo $color; ?>;
			}
			.searchform {
				background: <?php $color = $purples[array_rand($purples)];
				echo $color; ?>;
			}
			.commentlist li {
				border-bottom:1px solid <?php $color = $purples[array_rand($purples)];
				echo $color; ?>;
			}
			.blogtitle a {
				color: <?php $color = $purples[array_rand($purples)];
				echo $color; ?>;
			}
			.blogtitle a:hover {
				color: <?php $color = $purples[array_rand($purples)];
				echo $color; ?>;
			}
			#nav a, #nav a:visited {
				background: <?php $color = $purples[array_rand($purples)];
				echo $color; ?>;
			}
			#nav a:hover {
				background: <?php $color = $purples[array_rand($purples)];
				echo $color; ?>;
			}
			.blogdescription {
				background: <?php $color = $purples[array_rand($purples)];
				echo $color; ?>;
			}
			ol.commentlist li.comment ul.children li.depth-2 { 
				border-left:5px solid <?php $color = $purples[array_rand($purples)];
				echo $color; ?>; 
			}
			ol.commentlist li.comment ul.children li.depth-3 { 
				border-left:5px solid <?php $color = $purples[array_rand($purples)];
				echo $color; ?>; 
			}
			ol.commentlist li.comment ul.children li.depth-4 { 
				border-left:5px solid <?php $color = $purples[array_rand($purples)];
				echo $color; ?>; 
			}
			ol.commentlist li.parent { 
				border-left:5px solid <?php $color = $purples[array_rand($purples)];
				echo $color; ?>; 
			}	
			<?php	
					} elseif ($colorswitch == "black") {
						?>
			.widgettitle {
				background: <?php $color = $blacks[array_rand($blacks)];
				echo $color; ?>; 
			}
			#recent-posts .widgettitle {
				background: <?php $color = $blacks[array_rand($blacks)];
				echo $color; ?>; 
			}
			#archives .widgettitle {
				background: <?php $color = $blacks[array_rand($blacks)];
				echo $color; ?>;
			}
			#linkcat-2 .widgettitle {
				background: <?php $color = $blacks[array_rand($blacks)];
				echo $color; ?>;
			}
			#recent-comments .widgettitle {
				background: <?php $color = $blacks[array_rand($blacks)];
				echo $color; ?>;
			}
			#sidebar .sidebar_header {
				background: <?php $color = $blacks[array_rand($blacks)];
				echo $color; ?>;
			}
			.searchform {
				background: <?php $color = $blacks[array_rand($blacks)];
				echo $color; ?>;
			}
			.commentlist li {
				border-bottom:1px solid <?php $color = $blacks[array_rand($blacks)];
				echo $color; ?>;
			}
			.blogtitle a {
				color: <?php $color = $blacks[array_rand($blacks)];
				echo $color; ?>;
			}
			.blogtitle a:hover {
				color: <?php $color = $blacks[array_rand($blacks)];
				echo $color; ?>;
			}
			#nav a, #nav a:visited {
				background: <?php $color = $blacks[array_rand($blacks)];
				echo $color; ?>;
			}
			#nav a:hover {
				background: <?php $color = $blacks[array_rand($blacks)];
				echo $color; ?>;
			}
			.blogdescription {
				background: <?php $color = $blacks[array_rand($blacks)];
				echo $color; ?>;
			}
			ol.commentlist li.comment ul.children li.depth-2 { 
				border-left:5px solid <?php $color = $blacks[array_rand($blacks)];
				echo $color; ?>; 
			}
			ol.commentlist li.comment ul.children li.depth-3 { 
				border-left:5px solid <?php $color = $blacks[array_rand($blacks)];
				echo $color; ?>; 
			}
			ol.commentlist li.comment ul.children li.depth-4 { 
				border-left:5px solid <?php $color = $blacks[array_rand($blacks)];
				echo $color; ?>; 
			}
			ol.commentlist li.parent { 
				border-left:5px solid <?php $color = $blacks[array_rand($blacks)];
				echo $color; ?>; 
			}	
			<?php
					} else {
						?>
						.widgettitle {
			background: #<?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?>; 
			}
		#recent-posts .widgettitle {
			background: #<?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?>; 
			}
		#archives .widgettitle {
			background: #<?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?>;
			}
		#linkcat-2 .widgettitle {
			background: #<?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?>;
			}
		#recent-comments .widgettitle {
			background: #<?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?>;
			}
		#sidebar .sidebar_header {
			background: #<?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?>;
			}
		.searchform {
			background: #<?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?>;
			
			}
		.commentlist li {
			border-bottom:1px solid #<?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?>;
			}
		.blogtitle a {
			color: #<?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?> !important;
			}
		.blogtitle a:hover {
			color: #<?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?> !important;
			}
		#nav a, #nav a:visited {
			background: #<?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?> !important;
			}
		#nav a:hover {
			background: #<?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?> !important;
			}
		.blogdescription {
			background: #<?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?> !important;
			}
		ol.commentlist li.comment ul.children li.depth-2 { 
			border-left:5px solid #<?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?>; 
			}
		ol.commentlist li.comment ul.children li.depth-3 { 
			border-left:5px solid #<?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?>; 
			}
		ol.commentlist li.comment ul.children li.depth-4 { 
			border-left:5px solid #<?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?>; 
			}
		ol.commentlist li.parent { 
			border-left:5px solid #<?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?><?php echo rand(0, 9); ?>; 
			}
<?php					} 
		}
					?>
</style>