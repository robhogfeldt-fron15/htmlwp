<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underrob
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<!-- <body class="home fullscreen" <?php body_class(array( "home", "fullscreen")); ?>> -->
<body <?php body_class(); ?>>
<div class="loadreveal reveal"></div>
<div id="loadscreen" style="opacity: 0; display: none;"><div id="loader"><span></span></div></div>
<div id="page" class="site">

	<header role="banner" id="header">

			<div class="wrapper">

				<!-- Logo __-->
				<h1 id="logo">
					<a href="index.html" rel="home" id="logo-svg-animated" class="lazy-line" style="width: 61px; height: 47px;">
						<img src="imgs/logo-white.png" alt="logo">
					<!-- <svg viewBox="0 0 61 47" xmlns="http://www.w3.org/2000/svg">
						<path d="M 1.2505478,46.27343 23.764736,2.9730943 44.485758,45.469682 57.951943,45.466578 36.981817,2.0967575 32.333883,2.0623078" stroke="#000" fill-opacity="0" stroke-opacity="1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" style="stroke-dasharray: 162.371px, 162.371px; stroke-dashoffset: 0px; display: block;">
						</path>
						<path d="m 10.023604,45.504841 5.526006,0 5.699735,-12.190112 3.493386,0" stroke="#000" fill-opacity="0" stroke-opacity="1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" style="stroke-dasharray: 22.4762px, 22.4762px; stroke-dashoffset: 0px; display: block;">
						</path>
					</svg> -->
				</a>
				</h1>

				<!-- Main menu __-->



				<nav id="mainmenu" role="navigation">

					<div id="menu-burger"><i class="icon-menu"></i></div>
					<div id="searchicon">
						<i class="icon-search"></i>
						<form action="/" method="get" id="searchbar">
							<fieldset>
								<input type="text" name="s" id="searchbar-input" value="">
								<button type="submit" id="searchbar-submit"></button>
							</fieldset>
						</form>
					</div>

				<?php wp_nav_menu(array(

					'container' => 'div',
					'container_id' => 'menu',
					'menu_id'         => 'menu',
					'items_wrap'      => '<ul id=\"%1$s\" class=\"menu-item-has-children\">%3$s</ul>',
				)); ?>


				</nav>
			</div> <!-- END .wrapper -->

		</header>
