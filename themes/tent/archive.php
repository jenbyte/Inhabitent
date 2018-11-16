<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="product-area">
		<main id="main" class="site-main" role="main">
<div class="container">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->


		<div class="archive-links">
			<?php 
			$terms = get_terms(array(
				'taxonomy' => 'product_type',
				'hide_empty' => 0, 
			));
		
			foreach($terms as $term): ?>
					<!-- <p><?php echo $term->description; ?></p> -->
					<p><a class="product-link" href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a></p>

			<?php endforeach; ?>
		</div>

			<!--  TODO product Grid -->
			<section class="product-grid">
				<div class="product-grid-item"></div>
					<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php
								get_template_part( 'template-parts/content' );
							?>

						<?php endwhile; ?>

						<?php the_posts_navigation(); ?>

						<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>
				
			</section>



<!-- // Grid -->
<?php
		$items = array(
		'orderby' => 'name',
		'post_type' => 'post',
		);
		$product_item = get_posts( $items ); // returns an array of posts
	?>
	<h1 class="page-title">Shop Stuff</h1>
	<section class="product-grid">
		<?php foreach ( $product_item as $item ) : setup_postdata( $item ); ?>
			<article class="product-grid-item">
				<div class="thumbnail-wrapper">	
					<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>
				</div>
				<div class="product-info">
					<?php the_title( '<h2 class="product-title">', '</h2>' ); ?>
					<div class="product-price">
						<?php $price = CFS()->get( 'price' );  ?>
						<?= "$$price"; ?>
					</div> <!-- .entry-price -->

					<!-- <div class="front-journal-title">
						<a href="<?php the_posts_navigation(); ?>">
							<?php the_title(); ?>
						</a>
					</div> -->
				</div>	
			</article>
		<?php endforeach; wp_reset_postdata(); ?>
	</section>




		</div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
