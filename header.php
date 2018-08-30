<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Insight-Responsive
 */
?>
<!doctype html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link href="http://localhost/InsightResponsive/wp-content/themes/upe_customChild/Assets/webfonts/fontawesome-all.css" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class = "menu">

		<div class = "linkWrap">

			<ul class="linkList">

				<li>

					<a class="menuLink" href = "http://localhost/InsightResponsive/">Menu Link 1</a>

				</li>

				<li>

					<a class="menuLink" href = "http://localhost/InsightResponsive/">Menu Link 2</a>

				</li>

				<li>

					<a class="menuLink" href = "http://localhost/InsightResponsive/">Menu Link 3</a>

				</li>

				<li>

					<a class="menuLink" href = "http://localhost/InsightResponsive/">Menu Link 4</a>

				</li>

				<li>

					<a class="redButton menuLink" href = "http://localhost/InsightResponsive/">Menu Link 5</a>

				</li>

			</ul>

		</div>

		<div class = "closeMenu">

			<svg xmlns = "http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id ="Layer_1" x="0px" y="0px" width="20px" height = "20px" viewBox = "0 0 20 20" xml:space="preserve" class="svg-raw replaced-svg">

				<path fill = "#324037" d="M18.19,19.771l-8.153-8.152l-8.152,8.153l-1.603-1.604l8.152-8.152L0.281,1.862L1.886,0.26l8.152,8.152  l8.154-8.153l1.602,1.604l-8.152,8.153l8.153,8.154L18.19,19.771z">

				</path>

			</svg>

		</div>

</div>

<div id="page" class="site">

	<header id="masthead" class="site-header">

		<div class="secondaryNavigation">

			<div class="pageWidth secondaryMenuWrap">

				<i class="fas fa-envelope whiteIcon"></i>

				<a class="secondaryLink" href="mailto:null@insightcreative.com">info@insightcreative.com</a>

				<i class="fas fa-phone whiteIcon"></i>

				<a class="secondaryLink" href="tel:(555)555-5555">(555)555-5555</a>

				<a id="faqLink" class="secondaryLink" href="http://localhost/InsightResponsive/">Secondary Link</a>

			</div>

		</div>

		<div id="site-navigation" class="main-navigation">

			<nav>

				<div class="pageWidth menuLinkWrap">

						<a href="http://localhost/InsightResponsive/"><img src="http://localhost/InsightResponsive/wp-content/uploads/2018/08/insightLogo.png" class="siteLogo" ></a>

						<ul class="linkList2">

							<li>

								<a class="menuLink" href = "http://localhost/InsightResponsive/">Menu Link 1</a>

							</li>

							<li>

								<a class="menuLink" href = "http://localhost/InsightResponsive/">Menu Link 2</a>

							</li>

							<li>

								<a class="menuLink" href = "http://localhost/InsightResponsive/">Menu Link 3</a>

							</li>

							<li>

								<a class="menuLink" href = "http://localhost/InsightResponsive/">Menu Link 4</a>

							</li>

							<li>

								<a class="redButton" href = "http://localhost/InsightResponsive/">Menu Link 5</a>

							</li>

						</ul>

						<div class = "menuButtonWrap">

							<div class = "menuTextWrap">

								<span class = "menuText">Menu</span>

								<span class = "menuBars">

									<span></span>

									<span></span>

									<span></span>
								</span>

							</div>

						</div>

				</div>

			</nav>

		</div><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
