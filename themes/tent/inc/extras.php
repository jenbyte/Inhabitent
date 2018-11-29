<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Inhabitent_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function tent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'tent_body_classes' );

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

	if(!$image){
	$hero_css = ".page-template-about .entry-header {
		background: grey;
		color: white;
		display: flex;
		display: -webkit-box;
		display: -webkit-flex;
		display: -ms-flexbox;
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
		display: -webkit-box;
		display: -webkit-flex;
		display: -ms-flexbox;
		justify-content: center;
		align-items: center;
		height: 100vh;
		width: 100%;
	}";
}
	wp_add_inline_style('tent-style', $hero_css);
}

add_action('wp_enqueue_scripts', 'inhabitent_hero_banner');


/*  
 * Modify the Product post type archive loop 
 */

function inhabitent_mod_post_type_archive( $query ){
	if(
		( is_post_type_archive(array( 'product' )) || $query->is_tax( 'product_type' ) )
		&& !is_admin()
		&& $query->is_main_query()
	){
		$query->set( 'orderby', 'title' );
		$query->set( 'order', 'ASC' );
		$query->set( 'posts_per_page', 16 );
	}
}
add_action( 'pre_get_posts', 'inhabitent_mod_post_type_archive' );


/*  
* Filter Product archive title 
*/
function inhabitent_archive_title( $title ){
	if( is_post_type_archive( 'product' ) ){
		$title = 'Shop Stuff';
	} elseif( is_tax( 'product_type' ) ){
		$title = sprintf( '%1$s', single_term_title( '', false) );
		// sprintf (string print format); replacing '%1$s' with a string that comes after it
	}
	return $title;
}
add_filter( 'get_the_archive_title', 'inhabitent_archive_title');


/*  Filter exerpt in Journal to Read More button */
function inhabitent_excerpt_more($more) {
	global $post;
  return '... <p><a class="black-btn" href="'. get_permalink($post->ID) . '"> Read more →</a></p>';
}
add_filter('excerpt_more', 'inhabitent_excerpt_more');

