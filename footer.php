			<!-- EMPIEZA FOOTER -->
			<footer class="footer">
				<div class="footer__main-container">
					<div class="footer__main-container__newsletter">
						<p class="footer__main-container__newsletter__p">Mantenme al tanto de las últimas noticias de A&P</p>
						<div class="footer__main-container__newsletter__form">
							<input type="text" class="footer__main-container__newsletter__form__email-field">
							<button class="footer__main-container__newsletter__form__submit-button">¡Suscribirme!</button>
						</div>
					</div>
			
					<div class="footer__main-container__powered-by">
						<div class="footer__main-container__powered-by__title">
							<p class="footer__main-container__powered-by__title__p">Desarrolado por</p>
						</div>
			
						<hr class="footer__main-container__powered-by__divider">
			
						<div class="footer__main-container__powered-by__developer">
							<div class="footer__main-container__powered-by__developer__image">
								<img src="<?php echo get_template_directory_uri(); ?>/img/footer/the-programming-club-logo.jpg" alt="">
							</div>
							<h3 class="footer__main-container__powered-by__developer__name">The Programming Club</h3>
						</div>
					</div>
				</div>

				<div class="footer__social-media">
					<div class="footer__social-media__title">
						<p class="footer__social-media__title__p">Siguenos en</p>
					</div>

					<div class="footer__social-media__item-container">
						<div class="footer__social-media__item-container__item">
							<img class="footer__social-media__item-container__item__img" src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook-icon.png" alt="">
						</div>
						<div class="footer__social-media__item-container__item">
							<img class="footer__social-media__item-container__item__img" src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram-icon.png" alt="">
						</div>
					</div>
				</div>
			</footer>
			<!-- TERMINA FOOTER -->
		
		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

	</body>
</html>
