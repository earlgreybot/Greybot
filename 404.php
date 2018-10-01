<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package greybot
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! Something went wrong that page can&rsquo;t be found.', 'greybot' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<p id="nothingfound"><?php esc_html_e( 'It looks like nothing was found at this location', 'greybot' ); ?></p>
				
								<img src="http://www.earlgreybot.com/wp-content/uploads/2018/09/path4791.png" alt="a confused looking robot looking at a 404 error" id="error404">
						</div>
						<div class="col-md-6">
						<ul class="wherenext">
							<a href=http://www.earlgreybot.com/><li class="wherenext">	
								<img src="http://www.earlgreybot.com/wp-content/uploads/2018/01/idea.svg" class="wherenext" alt="">
								<span class="wherenext">If you're after more information about me, check out my about page</span>
							</li></a>
							<a href=http://www.earlgreybot.com/folio><li class="wherenext">
								<img src="http://www.earlgreybot.com/wp-content/uploads/2018/01/graphic-tool.svg" class="wherenext" alt="">
								<span class="wherenext"> If you're looking for a specific project try the search or looking through my folio here</span>
							</li></a>
							<a href=http://www.earlgreybot.com/journal><li class="wherenext">
								<img src="http://www.earlgreybot.com/wp-content/uploads/2018/01/open-book.svg" class="wherenext" alt="">
								<span class="wherenext">If you're looking for a particular blog post or piece of writing, try my journal</span>
							</li></a>
							<a href=http://www.earlgreybot.com/contact><li class="wherenext">
								<img src="http://www.earlgreybot.com/wp-content/uploads/2018/01/smartphone-1.svg" class="wherenext" alt="">
								<span class="wherenext"> Don't know what you're looking for? want to let me know what's gotten lost, contact me</span>
							</li></a>
						</ul>
						</div>
					</div>
				</div>


				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
