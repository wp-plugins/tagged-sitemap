<?php
/**
 * @package Tagged_Sitemap
 * @version 1.0
 */
/*
Plugin Name: Tagged Sitemap
Plugin URI: http://wordpress.org/extend/plugins/tagged-sitemap/
Description: Creates a shortcode [tagged-sitemap] that renders a nested list with all the pages and tags for page.
Author: Michael Ha
Version: 1.0
Author URI: http://khmha.com/
*/

include_once('functions.php');

function render_page_sitemap() {

	echo '<ul id="sitemap-pages">';

	wp_list_pages_custom('title_li');
	
	echo '</ul>';
	
}


function render_tags() {

	$tags = get_tags();

	if ($tags) {
		
		echo '<div id="sitemap-tags">Tags: ';
	
		foreach ( $tags as $tag ) {
		
			echo '<a class="';
			
			echo 'tag-item-' . $tag->term_id;
			
			echo '" href="#">' . $tag->name . '</a> ';
		
		}
		
		echo '</div>';
	
	}

}

function tagged_sitemap_func() {

	ob_start();

	render_tags();
	
	echo '<br/>';
	
	render_page_sitemap();

	return ob_get_clean();
}

add_shortcode('tagged-sitemap', 'tagged_sitemap_func');

//enqueue plugin javascript file and jquery file
wp_enqueue_script('tagged_sitemap_js', WP_PLUGIN_URL . '/tagged-sitemap/tagged-sitemap.js', array('jquery'), '1.0' );

//enqueue plugin stylesheet file
wp_enqueue_style('tagged_sitemap_css', WP_PLUGIN_URL . '/tagged-sitemap/tagged-sitemap.css');