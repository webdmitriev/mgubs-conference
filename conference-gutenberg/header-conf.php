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

	<header class="header-block pos-f t-0 l-0 w-100p bgc-orange z1000">
		<div class="header-mobile pos-a t-0 l-0 d-none w-100p h-100vh z90">
			<div class="mobile-bg pos-a t-0 l-0 w-100p h-100p z5"></div>
			<div class="mobile-content pos-a t-0 r-0 d-block w-100p h-100vh pt-20 bgc-white z10">

				<div class="mobile-search-icon pos-r d-block cursor-p">
					<svg class="img" width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M23.5 29C16.0442 29 10 22.9558 10 15.5C10 8.04416 16.0442 2 23.5 2C30.9558 2 37 8.04416 37 15.5C37 22.9558 30.9558 29 23.5 29Z" stroke="#313135" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"/>
						<path d="M14 25L2 37" stroke="#313135" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"/>
					</svg>
				</div>
				<div class="mobile-search-block d-none w-100p"><?php get_search_form(); ?></div>

				<div class="mobile-close"></div>
				<div class="mobile-menu d-block w-100p overflow-y-scroll">
					<?php
						wp_nav_menu( [
							'theme_location'  => 'Header menu',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'menu-list',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						] );
					?>
					<?php
						wp_nav_menu( [
							'theme_location'  => 'Header menu 2',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'menu-list',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						] );
					?>
					<?php
						wp_nav_menu( [
							'theme_location'  => 'Header menu 3',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'menu-list',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						] );
					?>
				</div>

				<div class="mobile-eyes pos-f r-0 b-0 df-sp-ce w-100p pt-5 pr-15 pb-15 pl-15 bgc-white z10">
					<div></div>
					<div class="mobile-eye_content df-fe-ce">
						<a href="https://mgubs.ru/svedeniya-ob-obrazovatelnoj-organizaczii/" class="mobile-page d-block mr-20"><svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="29" cy="29" r="29" fill="#C4C4C4"/><path d="M22 25H38V23H22V25Z" fill="white"/><path d="M38 30H22V28H38V30Z" fill="white"/><path d="M22 35H38V33H22V35Z" fill="white"/><path fill-rule="evenodd" clip-rule="evenodd" d="M43 44H17V11H33L43 21V44ZM41 42H19V13H32L32 18H22V20H32V22L41 22V42ZM34 15.8284L38.1716 20L34 20V15.8284Z" fill="white"/></svg></a>
						<a href="https://en.mgubs.ru/" target="_blank" rel="noopener noreferrer" class="mgu-en" title="EN-RU">
							<svg class="img" width="106" height="58" viewBox="0 0 106 58" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect x="0.5" y="0.5" width="105" height="57" rx="28.5" stroke="#C4C4C4"/>
								<rect x="51" y="3" width="52" height="52" rx="26" fill="#313135"/>
								<path d="M17.3509 37H15.4809V21.6C15.8036 21.6 16.5442 21.5927 17.7029 21.578C18.8616 21.5633 19.4996 21.556 19.6169 21.556C23.2689 21.556 25.0949 23.0813 25.0949 26.132C25.0949 27.2613 24.7649 28.2147 24.1049 28.992C23.4596 29.7547 22.6749 30.2533 21.7509 30.488L26.8769 37H24.5889L19.8589 30.84H17.3509V37ZM19.5069 23.316C19.0376 23.316 18.3189 23.3307 17.3509 23.36V29.08H19.6169C20.5556 29.08 21.3696 28.816 22.0589 28.288C22.7629 27.7453 23.1149 27.034 23.1149 26.154C23.1149 24.262 21.9122 23.316 19.5069 23.316ZM41.7396 21.6V30.576C41.7396 32.7907 41.175 34.448 40.0456 35.548C38.9163 36.648 37.4936 37.198 35.7776 37.198C33.8563 37.198 32.309 36.6187 31.1356 35.46C29.977 34.2867 29.3976 32.6073 29.3976 30.422V21.6H31.2676V30.07C31.2676 31.7567 31.6563 33.0767 32.4336 34.03C33.2256 34.9687 34.3403 35.438 35.7776 35.438C37.0683 35.438 38.073 34.998 38.7916 34.118C39.5103 33.2233 39.8696 31.918 39.8696 30.202V21.6H41.7396Z" fill="#C4C4C4"/>
								<path d="M64.1674 37V21.6H72.8574V23.36H66.0374V28.332H72.1974V30.092H66.0374V35.24H73.0774V37H64.1674ZM89.6917 37H88.1957L78.5817 24.9V37H76.8217V21.6H78.3177L87.9317 33.744V21.6H89.6917V37Z" fill="white"/>
							</svg>
						</a>
					</div>
				</div>

			</div>
		</div>
	</header>

	<link rel="stylesheet" href="<?= get_template_directory_uri() . '/old-template/blocks/header/index.min.css' ?>">