<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-int
 */

?>

<?php global $wpint_options;?>

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<?php $footer_logo_url = $wpint_options['footer_logo']['url'];?>
					<div class="logo">
						<a class="footer__logo-link" href="<?php echo home_url(); ?>">
						<?php if($footer_logo_url) { ?>
							<img src="<?php echo esc_url($footer_logo_url); ?>" alt="Лесторг" class="footer__logo">
						<?php } else {
							echo "No image.";
						};?>
						</a>
					</div>
				</div>
				<div class="col-lg-9">
					<nav class="footer-menu-w">
						<?php
							wp_nav_menu(array(
								'theme_location' => 'footermenu-1',
								'menu_id' => 'footer-menu',
								'container' => 'ul',
								'menu_class' => 'footer-menu',
							));
						?>
					</nav>
					<!-- <ul class="footer-menu">
						<li class="footer-menu__item"><a href="#" class="footer-menu__link">Продукция</a></li>
						<li class="footer-menu__item"><a href="#" class="footer-menu__link">Оплата и доставка</a></li>
						<li class="footer-menu__item"><a href="#" class="footer-menu__link">Наши преимущества</a></li>
						<li class="footer-menu__item"><a href="#" class="footer-menu__link">Фотогалерея</a></li>
						<li class="footer-menu__item"><a href="#" class="footer-menu__link">Контакты</a></li>
					</ul> -->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 d-flex justify-content-end">
					<div class="metrics"><img src="<?php echo get_template_directory_uri(); ?>/img/metrics_dummy.png" alt="#" class="metrics__img"></div>
					<div class="copyright">&copy; <a href="mailto:xjt@mail.ru" class="footer_dev-email">xjt, 2018.</a></div>
				</div>
			</div>
		</div>
	</footer>

	<!--<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wp-int' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'wp-int' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'wp-int' ), 'wp-int', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div>
	</footer>
</div>-->

<?php wp_footer(); ?>

</body>
</html>
