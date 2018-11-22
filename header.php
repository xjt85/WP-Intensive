<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-int
 */

?>
<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head();?>
</head>

<body <?php body_class();?>>

<header class="header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/header-bg.png');">
		<div class="container">
			<div class="header__top-line">
				<div class="row">
					<div class="col-md-5"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-header.png" alt="Лесторг" class="header__logo"></div>
					<div class="col-lg-4">
						<div class="header__address"><i class="icon-small address-icon"></i>г. Томск. ул. Дальне-Ключевская, 189</div>
						<div class="header__email"><i class="icon-small email-icon"></i>dima@web-format.net</div>
					</div>
					<div class="col-md-3">
						<div class="header__phone"><i class="icon-small phone-icon"></i>8 800 100 5250</div>
						<div class="button-wrapper"><button class="button button_redial">Заказ звонка</button></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<h2 class="h1 header__h1">Пилим качественный<br>пиломатериал</h2>
						<p class="header__p1">под ваши размеры<br>и потребности!</p>
						<span class="header__span">компания на постоянной основе закупает лес круглый разных пород!</p>
					</div>
				</div>
			</div>
		</div>
	</header>

<!--<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'wp-int');?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
the_custom_logo();
if (is_front_page() && is_home()):
?>
				<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name');?></a></h1>
				<?php
else:
?>
				<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name');?></a></p>
				<?php
endif;
$wp_int_description = get_bloginfo('description', 'display');
if ($wp_int_description || is_customize_preview()):
?>
				<p class="site-description"><?php echo $wp_int_description; /* WPCS: xss ok. */ ?></p>
			<?php endif;?>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'wp-int');?></button>
			<?php
wp_nav_menu(array(
    'theme_location' => 'menu-1',
    'menu_id' => 'primary-menu',
));
?>
		</nav>
	</header>
-->
	<div id="content" class="site-content">
