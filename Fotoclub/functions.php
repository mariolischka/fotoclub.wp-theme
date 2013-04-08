<?php

register_nav_menu( 'internal', 'Internal Menu' );
if ( ! function_exists( 'esplanade_widgets_init' ) ) :
/**
 * Registers theme widget areas
*
* @uses register_sidebar()
*
* @since Esplanade 1.0
*/
function  esplanade_widgets_init() {
	$title_tag = esplanade_get_option( 'widget_title_tag' );

	//keep the original ones as reference is by id number

	// The header widget area is intended exclusively for displaying ads.
	register_sidebar(
	array(
	'name' => 'Header',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside><!-- .widget -->',
	'before_title' => '<' . $title_tag . ' class="widget-title">',
	'after_title' => '</' . $title_tag . '>'
			)
	);
	register_sidebar(
	array(
	'name' => 'Sidebar Top',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside><!-- .widget -->',
	'before_title' => '<' . $title_tag . ' class="widget-title">',
	'after_title' => '</' . $title_tag . '>'
			)
	);
	register_sidebar(
	array(
	'name' => 'Sidebar Left',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside><!-- .widget -->',
	'before_title' => '<' . $title_tag . ' class="widget-title">',
	'after_title' => '</' . $title_tag . '>'
			)
	);
	register_sidebar(
	array(
	'name' => 'Sidebar Right',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside><!-- .widget -->',
	'before_title' => '<' . $title_tag . ' class="widget-title">',
	'after_title' => '</' . $title_tag . '>'
			)
	);
	register_sidebar(
	array(
	'name' => 'Sidebar Bottom',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside><!-- .widget -->',
	'before_title' => '<' . $title_tag . ' class="widget-title">',
	'after_title' => '</' . $title_tag . '>'
			)
	);
	register_sidebar(
	array(
	'name' => 'Footer',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside><!-- .widget -->',
	'before_title' => '<' . $title_tag . ' class="widget-title">',
	'after_title' => '</' . $title_tag . '>'
			)
	);
	register_sidebar(
	array(
	'name' => '404 Page',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside><!-- .widget -->',
	'before_title' => '<' . $title_tag . ' class="widget-title">',
	'after_title' => '</' . $title_tag . '>'
			)
	);
	//end of original ones

	register_sidebar(
	array(
	'name' => 'Public Sidebar Startpage',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside><!-- .widget -->',
	'before_title' => '<' . $title_tag . ' class="widget-title">',
	'after_title' => '</' . $title_tag . '>'
			)
	);

	register_sidebar(
	array(
	'name' => 'Internal Sidebar Top',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside><!-- .widget -->',
	'before_title' => '<' . $title_tag . ' class="widget-title">',
	'after_title' => '</' . $title_tag . '>'
			)
	);

	register_sidebar(
	array(
	'name' => 'Internal Sidebar Bottom',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside><!-- .widget -->',
	'before_title' => '<' . $title_tag . ' class="widget-title">',
	'after_title' => '</' . $title_tag . '>'
			)
	);
	register_sidebar(
	array(
	'name' => 'Internal Footer',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside><!-- .widget -->',
	'before_title' => '<' . $title_tag . ' class="widget-title">',
	'after_title' => '</' . $title_tag . '>'
			)
	);
	register_sidebar(
	array(
	'name' => 'Sidebar Forum',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside><!-- .widget -->',
	'before_title' => '<' . $title_tag . ' class="widget-title">',
	'after_title' => '</' . $title_tag . '>'
			)
	);
}
endif;

add_action( 'widgets_init', 'esplanade_widgets_init' );

add_action( 'after_setup_theme', 'childtheme_formats', 11 );
function childtheme_formats(){
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image' ) );
}

//if ( ! function_exists( 'esplanade_post_class' ) ) :
/**
 * Add class has-thumbnail to posts that have a thumbnail set
*  override as parent do not add this for gallery and image (for unknown reason)
* @since Esplanade 1.0
*/
/*
function esplanade_post_class( $classes, $class, $post_id ) {
	if( is_home() && ! is_paged() ) {
		global $esplanade_teaser_odd, $esplanade_count;
		if( ! isset( $esplanade_teaser_odd ) )
			$esplanade_teaser_odd = 1;
		if( ! isset( $esplanade_count ) )
			$esplanade_count = 0;
		$esplanade_count++;
		if( esplanade_is_teaser() ) {
			$classes[] = 'teaser';
			if( $esplanade_teaser_odd ) {
				$classes[] = 'teaser-odd';
				$esplanade_teaser_odd = 0;
			} else
				$esplanade_teaser_odd = 1;
		}
	}
	if( ! is_singular() && has_post_thumbnail() )
		$classes[] = 'has-thumbnail';
	return $classes;
}
endif;
?>
*/