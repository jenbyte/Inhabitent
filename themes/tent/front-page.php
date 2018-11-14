<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="front-content-area">
		<main id="main" class="site-main" role="main">

<section class="home-header">
	<img src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-full.svg'?>"
	class="logo" alt="Inhabitent full logo" />
</section>


<?php /*
 * Shop Entry
 */ ?>
<h2 class="front-title">Shop Stuff</h2>
<section class="front-shop">
	<?php 
		// Get the terms for our products and do some clever stuff with images.
	$terms = get_terms(array(
		'taxonomy' => 'product_type',
		'hide_empty' => 0, 
	));
	
	foreach($terms as $term): ?>
		<div class="frontpage-term">
			<img src="<?php echo get_template_directory_uri() . '/images/' . $term->slug . '.svg'; ?>" 
				alt="<?php echo $term->name; ?>" />
			<p><?php echo $term->description; ?></p>
			<p><a class="brand-btn" href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?> Stuff</a></p>
		</div>
	<?php endforeach; ?>
</section>


<?php
/*
 * Get blog Journal entries
 */
	$args = array(
	'order' => 'ASC',
	'posts_per_page' => 3,
	'post_type' => 'post',
	);
	$journal_posts = get_posts( $args ); // returns an array of posts
?>
<h1 class="front-title">Inhabitent Jounral</h1>
<section class="front-journal">
	<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
		<article class="journal-entry">
			<div class="post-thumbnail">	
				<?php 
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('large'); 
					} 
				?>
			</div>
			<div class="post-entry">
				<span class="front-meta">
					<?php  red_starter_posted_on(); 
					echo ' / ';
					comments_number( '0 Comments', '1 Comment', '% Comments' ); 
					?>
				</span>
				<div class="front-journal-title">
					<a href="<?php get_the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</div>
				<a class="black-btn" href="<?php echo get_the_permalink(); ?>">
					Read Entry
				</a>
			</div>	
		</article>
	<?php endforeach; wp_reset_postdata(); ?>
</section>
		</main><!-- #main -->
	</div><!-- #primary -->


		



<?php get_footer(); ?>
