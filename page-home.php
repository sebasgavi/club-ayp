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
						<h1 class="banner__contenedor__titulo"><?php the_field('titulo_banner'); ?></h1>
						<p class="banner__contenedor__parrafo">
							<?php the_field('texto_banner'); ?>
						</p>
						<div class="banner__contenedor__boton">DONAR</div>
					</div>
				</div>
				<!-- TERMINA BANNNER-->

				
				<!-- INICIA TESTIMONIOS-->
				<?php if( have_rows('testimonios') ): ?>
					<article class="container">
						<header>
							<h2 class="title-section">Testimonios</h2>
						</header>
						<section class="row">

							
						<?php while ( have_rows('testimonios') ) : the_row(); ?>
							<div class="row__column">
								<div class="testimony">
									<img src="<?php echo get_sub_field('imagen')['sizes']['thumbnail']; ?>" class="img-rounded"
										alt="">
									<h3><?php the_sub_field('nombre'); ?></h3>
									<p>
										<?php the_sub_field('testimonio'); ?>
										<a href="" target="_blank">ver mas</a>
									</p>
								</div>
							</div>

						<?php endwhile; ?>

						</section>
					</article>
				<?php endif; ?>
				<!-- TERMINA TESTIMONIOS-->


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
