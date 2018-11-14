<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

// change logo
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/inhabitent-logo-text-dark.svg);
		height:65px;
		width:320px;
		background-size: 320px 65px;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


//change link
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
	return 'Inhabitent';
	//mouse hover over logo will show 'Inhabitent'

}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/* Custom Hero Image for the About Page */

function inhabitent_hero_banner(){
	if(!is_page_template('about.php')){
		return;
	}

	$image = CFS()->get('about_header_image');
	// var_dump($image);


	if(!$image){
	$hero_css = ".page-template-about .entry-header {
		background: grey;
		color: white;
		display: flex;
		justify-content: center;
		align-items: center;
		height: 100vh;
		width: 100%;
	}";
} else {
	$hero_css = ".page-template-about .entry-header {
		background: grey;
		background: linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.4)),url({$image});
		background-size: cover;
		color: white;
		display: flex;
		justify-content: center;
		align-items: center;
		height: 100vh;
		width: 100%;
	}";
}
	wp_add_inline_style('tent-style', $hero_css);
}

add_action('wp_enqueue_scripts', 'inhabitent_hero_banner');




/* Filter the Product post type archieve */