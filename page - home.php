<?php
/**
 * Template Name: Home
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
<div id="barba-wrapper">

	<div class="barba-container">

		<div id="primary" class="content-area">

			<main id="main" class="site-main">

				<section id="hero">

					<div class="hero">

						<div class="heroOverlay">

							<div class="heroHeadingWrap fullWidth">

								<div id="homeHeading" class="col50">

									<div class="heroHeading">

										<h1 class="whiteText">H1 Hero Heading</h1>

										<p class="whiteText">Hero Subheading</p>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

				<div class="mobileHeroHeading">

					<h1 class="whiteText">Hero Heading </h1>

					<p class="whiteText">Hero Subheading</p>

				</div>

				<section id="homeHeroNav">
					<div class="flex-container pageWidth">

						<a class="col30 homeNavLink" href="http://localhost/InsightResponsive/"><div class="centerText"><i class="fas fa-home"></i><p class="whiteText">Mobile Nav 1</p></div></a>

						<a class="col30 homeNavLink" href="http://localhost/InsightResponsive/"><div class="centerText"><i class="fas fa-home"></i><p class="whiteText">Mobile Nav 2</p></div></a>

						<a class="col30 homeNavLink" href="http://localhost/InsightResponsive/"><div class="centerText"><i class="fas fa-home"></i><p class="whiteText">Mobile Nav 3</p></div></a>

					</div>
				</section>
				<section id="pageContent">

					<div>

						<section id ="expressIntro">

							<div class="fullWidth flex-container">

								<div class="col50">

								</div>

								<div id="introText" class="blockText col50">

									<h2 class="redText underlinedHeading">Primary Benefit</h2>

									<p>Here at Insight Creative, we pride ourselves in ensuring that all our customers experience only the best marketing agency Green Bay has to offer. You will find a wide variety of marketing services along with experienced and knowledgeable staff members who will help identify the best opportunities for your business</p>

									<a href="http://localhost/InsightResponsive/"><button class="centerButton redButton">Learn More About Us</button></a>

								</div>

							</div>

						</section>

						<section id ="recyclingServices">

							<div>

								<div class="pageWidth">

									<h2 class="redText centerText">Marketing Services</h2>

									<p id="serviceDesc" class="centerText">

										Text here text here

									</p>

								</div>

								<div class="fullWidth flex-container">

									<div class="col30 serviceImage">

										<a href="http://localhost/InsightResponsive/">

											<div class="overlayWrap">

												<img class="blockImage" src="">

												<div class="serviceTitle">

													<h3 class="title whiteText">Great Service 1</h3>

													<p class="whiteText desc">
														Text here
													</p>

												</div>

												<div class="featureOverlay">

													<div class="borderedOverlay">

													</div>

												</div>

											</div>

										</a>

									</div>

									<div class="col30 serviceImage">

										<a href="http://localhost/InsightResponsive/">

											<div class="overlayWrap">

												<img class="blockImage" src="">

												<div class="serviceTitle">

													<h3 class="title whiteText">Great Service 2</h3>

													<p class="whiteText desc">
														Text here
													</p>

												</div>

												<div class="featureOverlay">

													<div class="borderedOverlay">

													</div>

												</div>

											</div>

										</a>

									</div>

									<div class="col30 serviceImage">

										<a href="http://localhost/InsightResponsive/">

											<div class="overlayWrap">

												<img class="blockImage" src="">

												<div class="serviceTitle">

													<h3 class="title whiteText">Great Service</h3>

													<p class="whiteText desc">
														Text Here
													</p>

												</div>

												<div class="featureOverlay">

													<div class="borderedOverlay">

													</div>

												</div>

											</div>

										</a>

									</div>

								</div>

							</div>

						</section>

						<section id="acceptableMaterials">
							<div class="fullWidth flex-container-reverse">

								<div class="col50">

									<div class="blockText">

										<h2 class="redText underlinedHeading">Services We Provide</h2>

										<ul>

											<li>Web Design</li>
											<li>Graphic Design</li>
											<li>Media Buying</li>
											<li>Copywriting</li>
											<li>Video</li>
											<li>Photography</li>
											<li>Social Media</li>
											<li>Public Relations</li>

										</ul>

										<a href="http://localhost/InsightResponsive/"><button class="redButton">View All Marketing Services</button></a>

									</div>

								</div>

								<div class="col50">

									<img class="blockImage" src="">

								</div>

							</div>
						</section>

						<div class="siteCTAWrap">

							<a href="http://localhost/InsightResponsive/">

								<div class="CTAcontent">

									<h3 class="whiteText">Still looking to learn more? Contact one of our experts</h3>

									<div class="centeredButton">

										<a href="http://localhost/InsightResponsive/"><button class="whiteButton">Contact Us</button></a>

									</div>

								</div>

							</a>

						</div>

						<section id="contact">

							<div class="contentBlock flex-container">

								<div class="col50">

									<h4>Insight Creative</h4>

									<a class="plainLink" target="_blank" href="">

										<p>1816 Sal St.</p></a>

										<p>Green Bay WI</p>

										<a class="plainLink" href="tel:(555)555-5555">(555)555-5555</a>

										<br>

									</div>

									<div class="col50">

										<iframe src="" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

									</div>

								</div>

							</section>

						</section>

					</div>

			</main>

		</div>

	</div>

</div>

<?php

get_footer();
