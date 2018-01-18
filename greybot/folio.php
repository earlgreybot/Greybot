<?php
/**
 *
 *Template Name: Folio
 *
 *
 *The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package greybot
 */

get_header(); ?>

	<div id="folio" class="content-area">
		<main id="main" class="site-folio">
			<?php
			$args = array(
				'post-type' => 'folio',
				'orderby' => 'menu_order',
				'order' => 'ASC'
			);
			$folio = new WP-Query($args);
			?>
			
			<?php if( $folio->have_posts() ): ?>
				<?php while( $folio->haveposts() ): $folio->the_post(); ?>
					<article class="project col-md-4">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</article>
				<?php endwhile; ?>
			<?php else: ?>
				<p>Sorry, there are no projects to be found. </p>
			<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
