<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_to_WordPress
 */

get_header();
?>
	<section class="feature-image feature-image-default-alt" data-type="background" speed="2">
		<h1 class="page-title">
			<?php
				the_archive_title();
				the_archive_description( '<small class="archive-description">', '</small>' )
			?>
		</h1>
	</section>

	<div class="container">
		<div id="primary" class="row">
			<main id="content" class="col-sm-8">
				<?php
					if ( have_posts() ) :
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							get_template_part( 'template-parts/content', get_post_type() );

						endwhile;

						the_posts_navigation();
					else :

						get_template_part( 'template-parts/content', 'none' );
			
					endif;
				?>
			</main>

			<aside class="col-sm-4">
				<?php get_sidebar(); ?>
			</aside>
		</div>
	</div>

<?php
get_footer();
