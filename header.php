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

<?php global $wpint_options;?>

<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<!--Получение данных head из functions.php
стили, скрипты и тд-->
	<?php wp_head();?>

</head>

<body <?php body_class();?>>

<!--хедер-->
<header class="header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/header-bg.png');">
	<?php $header_logo_url = $wpint_options['header_logo']['url'];?>
	
	<!-- <?php print_r($wpint_options['header_phone']);?> -->
	<div class="container">
		<div class="header__top-line">
			<div class="row">
				<div class="col-md-5">
					<a href="<?php echo home_url(); ?>" class="header__logo-link">
					<?php if($header_logo_url) { ?>
						<img src="<?php echo esc_url($header_logo_url); ?>" alt="Лесторг" class="header__logo">
					<?php } else {
						echo "No image.";
					};?>
					</a>
				</div>
				<div class="col-lg-4">
					<div class="header__address">
						<i class="icon-small address-icon"></i>
						<div class="ymaps-geolink">
						<?php if ($wpint_options['header_address']) {
							echo esc_attr($wpint_options['header_address']);
						} else {
							echo 'No address.';
						} ; ?>
						</div>
					</div>
					<div>
						<a href="mailto:<?php if ($wpint_options['header_email']) {
							echo $wpint_options['header_email'];
						} else {
							echo '#';
						}; ?>" class="header__email"><i class="icon-small email-icon"></i>
						<?php if ($wpint_options['header_email']) {
							echo $wpint_options['header_email'];
						} else {
							echo 'No e-mail.';
						}; ?>
						</a>
					</div>
				</div>
				<div class="col-md-3">
					<div>
						<a href="tel:<?php if ($wpint_options['header_phone']) {
							echo esc_attr($wpint_options['header_phone']);
						} else {
							echo '#';
						} ; ?>" class="header__phone"><i class="icon-small phone-icon"></i>
						<?php if ($wpint_options['header_phone']) {
							echo esc_attr($wpint_options['header_phone']);
						} else {
							echo 'No phone.';
						} ; ?>
						</a>
					</div>
					<div class="button-wrapper"><button class="button button_redial">Заказ звонка</button></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="nav-wrapper">
					<nav class="main-menu">
						<?php
							wp_nav_menu(array(
								'theme_location' => 'menu-1',
								'container' => 'ul',
								'menu_class' => 'main-menu__ul',
							));
						?>
					</nav>
					<form action="<?php echo esc_url(home_url("/")); ?>" method="GET" class="search-form">
						<input type="text" name="s" id="">
						<button class="button search-button"><i class="fas fa-search"></i></button>
					</form>
				</div>
			</div>
		</div>
		<div class="header__bottom-line">
			<div class="row">
				<div class="col-md-6">
					<h2 class="h1 header__h1">
					<?php if ($wpint_options['header_h1']) {
						echo esc_attr($wpint_options['header_h1']);
					} else {
						echo 'No header.';
					} ; ?>
					</h2>
					<p class="header__p1">под ваши размеры<br>и потребности</p>
					<span class="header__span">компания на постоянной основе закупает лес круглый разных пород!</p>
				</div>
			</div>
		</div>
	</div>
</header>

