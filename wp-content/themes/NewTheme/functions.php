<?php
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/images");

add_theme_support('nav-menus');
if ( function_exists('register_nav_menus')) {
	register_nav_menus(
		array(
			'main' => 'Main Nav'
		)
	);
}

if(function_exists("register_options_page"))
{
    register_options_page('Home');
    register_options_page('Contact Information');
  
 }
 
include_once('advanced-custom-fields/acf.php');

if ( function_exists('register_sidebars') )  
    register_sidebars(5);   

add_theme_support($feature);

add_image_size( 'photo-display', 1200, 400, True );

add_image_size('our-people-icon', 465, 237, True);
add_image_size('post-page-icon', 311, 404, True);
add_image_size( 'focus-icons', 80, 80, False );

add_theme_support('post-thumbnails');


function wp_new_excerpt($text)
{
	if ($text == '')
	{
		$text = get_the_content('');
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$text = strip_tags($text);
		$text = nl2br($text);
		$excerpt_length = apply_filters('excerpt_length', 30);
		$words = explode(' ', $text, $excerpt_length + 1);
		if (count($words) > $excerpt_length) {
			array_pop($words);
			array_push($words, '...');
			$text = implode(' ', $words);
		}
	}
	return $text;
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'wp_new_excerpt');


?>
<?php

function bootstrap_pagination($pages = '', $range = 2)
{
$showitems = ($range * 2)+1;

global $paged;
if(empty($paged)) $paged = 1;

if($pages == '')
{
global $wp_query;
$pages = $wp_query->max_num_pages;
if(!$pages)
{
$pages = 1;
}
}

if(1 != $pages)
{
echo "<div class='pagination pagination-centered'><ul>";
if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."'>&laquo;</a></li>";
if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a></li>";

for ($i=1; $i <= $pages; $i++)
{
if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
{
echo ($paged == $i)? "<li class='active'><span class='current'>".$i."</span></li>":"<li><a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a></li>";
}
}

if ($paged < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a></li>";
if ($paged < $pages-1 && $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."'>&raquo;</a></li>";
echo "</ul></div>\n";
}
}

?>