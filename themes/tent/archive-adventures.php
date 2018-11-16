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
					<p><a class="product-link" href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a></p>

			<?php endforeach; ?>
		</div><!-- .archive-links -->


		<!--  TODO product Grid -->
		
			
			<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="product-grid-item">	
						<?php
							get_template_part( 'template-parts/content' );
						?>
					<div class="product-info">
						<?php $product_name = the_title( '<h2 class="product-title">', '</h2>' ); 
							echo ucwords( $product_name ); ?>

						<div class="product-price">
							<?php $price = CFS()->get( 'price' );  ?>
							<?= "$$price"; ?>
						</div> <!-- .entry-price -->

					</div>	<!-- .product-info-->
					</div><!-- .product-grid-item-->
						<?php endwhile; ?>
					
						<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

						<?php endif; ?>
				
	




		</div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
