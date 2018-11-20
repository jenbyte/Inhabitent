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

				<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); 	?>
				<div class="taxonomy-description">
					<?=	the_archive_description( ); ?>
				</div>

			</header><!-- .page-header -->

			<!-- Product Grid -->
			<section class="product-grid">
				
				<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<div class="product-grid-item">	

						<a href="<?= get_permalink() ; ?>">
							<div class="thumbnail-wrapper">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'large' ); ?>
								<?php else : ?>
									<?php echo the_title( '<h2 class="product-title">', '</h2>' ); ?>
								<?php endif; ?>
							</div>  <!-- .thumbnail-wrapper -->
						</a>

						<div class="product-info">

							<?php the_title( '<h2 class="product-title">', '</h2>' ); ?>
							<div class="dots"></div>
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
					
			</section>

		</div><!-- .container -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
