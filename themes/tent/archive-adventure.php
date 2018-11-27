<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="archive-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				<h1 class="page-title">Latest Adventures</h1>
			</header><!-- .page-header -->


		<section class="adv-grid">
	
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
					
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>

					<?php endif; ?>

					<div class='adv-info'>
						<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						<a class="white-btn" href="<?php echo get_the_permalink(); ?>">
							read more
						</a>
					</div>
					<?php if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta">
							<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
					
				</article><!-- #post-## -->
		

				<?php endwhile; ?>
					<?php the_posts_navigation(); ?>

				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
					
				<?php endif; ?>
	
		</section>



	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
