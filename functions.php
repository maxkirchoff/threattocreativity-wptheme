<?php
require_once ( get_template_directory() . '/theme-options.php' );
require( get_template_directory() . '/color-arrays.php' );
add_action('after_setup_theme','my_after_setup_theme_function');
function my_after_setup_theme_function(){
	add_theme_support( 'post-thumbnails', array( 'post' ) );
	add_theme_support('automatic-feed-links');
	add_theme_support( 'menus' );
	}
if ( ! isset( $content_width ) )
	$content_width = 600;
if ( function_exists('register_sidebar') )
    register_sidebar();
function post_thumb() {
$files = get_children('post_parent='.get_the_ID().'&post_type=attachment&post_mime_type=image');
  if($files) :
    $keys = array_reverse(array_keys($files));
    $j=0;
    $num = $keys[$j];
    $image=wp_get_attachment_image($num, 'thumbnail', false);
    $imagepieces = explode('"', $image);
    $imagepath = $imagepieces[1];
    $thumb=wp_get_attachment_image($num, 'thumbnail', false);
    print "$thumb";
  endif;
}



?>