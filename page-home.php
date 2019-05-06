<?php get_header(); ?>

	

	<main role="main">
		<!-- section -->
		<section>
			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<!-- INICIA BANNNER-->
				<div class="banner">
					<div class="banner__contenedor">
						<h1 class="banner__contenedor__titulo">Titulo Bello del Banner</h1>
						<p class="banner__contenedor__parrafo">
							<?php the_content(); ?>
						</p>
						<div class="banner__contenedor__boton">DONAR</div>
					</div>
				</div>
				<!-- TERMINA BANNNER-->

				

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
