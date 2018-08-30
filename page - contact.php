<?php
/**
 * Template Name: Contact Express
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Insight-Responsive
 */
get_header();

?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main">

			<section>

				<div id="contactHero" class="hero">

					<div class="heroOverlay">

						<div class="heroHeadingWrap fullWidth">

							<div id="homeHeading" class="col50">

								<div class="heroHeading">

									<h1 class="whiteText">Contact Us</h1>

								</div>

							</div>

						</div>

					</div>

				</div>

			</section>

			<div class="mobileHeroHeading">

				<h1 class="whiteText">Contact Us</h1>

			</div>

			<section id ="contactContent">

				<div id="contactWrap">

					<div class="pageWidth flex-container centeredContainer">

						<div id="formWrap">

							<h4 class="redText">Contact Express Recycling Solutions</h4>

							<p>
								We know recycling can be confusing. Have some questions that you still need help with?
							</p>

							<h3 class="redText">Call us at <a class="plainLink" href="tel: (715)423-4999">(715)423-4999</a></h3>

							<p>Or fill out the form below and we'll get back to you as soon as we can!</p>

							<?php echo do_shortcode('[caldera_form id="CF5b3a7c9dc03ea"]'); ?>

						</div>

					</div>

				</div>

				<div class="fullWidth flex-container paddedSection">

					<div class="col30 contactWrap">

						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22807.346811730524!2d-89.81892673334161!3d44.39379776256782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880088481020408f%3A0xb96b50ee5af1c418!2sExpress+Recycling+Solutions%2C+Inc.!5e0!3m2!1sen!2sus!4v1531486305566" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

						<h5 class="greenText">Express Recycling Solutions Inc.</h5>

						<a class="plainLink" href="tel:715-423-4999">(715)423-4999</a>

						<p>480 Strodman Ave.<br> Wisconsin Rapids, WI 54494</p>

					</div>

					<div class="col30 contactWrap">

						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22807.346811730524!2d-89.81892673334161!3d44.39379776256782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88006204a85b4e43%3A0x4c3b661f41ec56cc!2sExpress+Recycling+Solutions%2C+Inc!5e0!3m2!1sen!2sus!4v1531486367922" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

						<h5 class="greenText">Express Recycling Solutions Inc.</h5>

						<a class="plainLink" href="tel:715-451-8888">(715)451-8888</a>

						<p>2330 36th St. N<br> Wisconsin Rapids, WI 54494</p>

					</div>

					<div class="col30 contactWrap">

						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2845.2450926302013!2d-89.5768866844081!3d44.51013297910129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88005a5911b01f4f%3A0xb459b5f2cd2ca099!2sExpress+Recycling+Solutions%2C+Inc!5e0!3m2!1sen!2sus!4v1531486447544" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

						<h5 class="greenText">Express Recycling Solutions Inc.</h5>

						<a class="plainLink" href="tel:715-342-9999">(715)342-9999</a>

						<p>2608 Water St.<br> Stevens Point, WI 54481</p>

					</div>

				</div>

			</section>

		</main>

	</div>

<?php

get_footer();
