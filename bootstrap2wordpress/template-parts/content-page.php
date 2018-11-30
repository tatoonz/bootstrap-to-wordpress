<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_to_WordPress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) :
		?>
			<div class="post-details">
				<i class="fas fa-user"></i> <?php the_author(); ?>
				<i class="fas fa-clock"></i> <time><?php the_date(); ?></time>
				<i class="fas fa-folder-open"></i> <?php the_category(', '); ?>
				<i class="fas fa-tags"></i> <?php the_tags(); ?>

				<div class="post-comments-badge">
					<a href="<?php comments_link(); ?>">
						<i class="fas fa-comments"></i> <?php comments_number(0, 1, '%'); ?>
					</a>
				</div>
				<?php edit_post_link('Edit', '<i class="fas fa-pencil-alt"></i> ', ''); ?>
			</div>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if (has_post_thumbnail()): ?>
		<div class="post-image">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php endif; ?>

	<div class="post-body">
		<?php the_content(); ?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
