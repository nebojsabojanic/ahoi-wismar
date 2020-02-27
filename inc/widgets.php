<?php
function sidebar_widgets_init() {

	register_sidebar( array(
		'name' => __( 'In Header Widget Area', 'rmccollin' ),
		'id' => 'in-header-widget-area',
		'description' => __( 'A widget area located to the right hand side of the header, next to the site title and description.', 'rmccollin' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	   ) );

}
add_action( 'widgets_init', 'sidebar_widgets_init' );
?>