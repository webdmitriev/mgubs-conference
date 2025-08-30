<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webdmitriev
 */

$url = get_template_directory_uri();

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">

	<?php wp_head(); ?>
</head>

<body class="template-conference">

	<section class="conference-header">
		<div class="container">
			<div class="df-sp-ce w-100p">
				<a href="<?php echo get_home_url(); ?>" class="conference-header__logotype"><img class="img img-contain" src="<?php echo esc_url($url); ?>/assets/img/conference/header/header-logotype.svg" alt="www" /></a>
				<button class="conference-header__burger"><img class="img img-contain" src="<?php echo esc_url($url); ?>/assets/img/conference/header/burger.svg" alt="www" /></button>
			</div>
		</div>
	</section>