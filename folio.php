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
		<h1 id='folioh' class='entry-title'> Folio </h1>
		<main id="main" class="site-folio row">
			<?php
			// query parameters
			$args = array(
				'post_type' => 'folio',
				'orderby' => 'date',
				'order' => 'DESC'
			);
			$folio = new WP_Query($args);
			?>
			
			
			<?php 
			//display content
			if( $folio->have_posts() ): ?>
				<?php while( $folio->have_posts() ): $folio->the_post(); ?>
					<article class="project col-md-3">
						<div class="proj_header">
						<a href='<?php the_permalink(); ?>'>	
							<h2><?php the_title(); ?></h2>
						</a>
						</div>
							<div class='cat'>
							<!--
							<?php the_category(); ?> 
							</div>
							<span class='tags'>
							<?php the_tags(); ?>
							</span>
							-->
						</div>
						<div class='proj-content'>
						<a href='<?php the_permalink(); ?>'>		
							<?php the_post_thumbnail(); ?>
						</a>
							<?php the_content(); ?>
						</div>
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
