<?php
require('connection/connection.php');
	require('template/header.php');
	require('template/breadcrumb.php');
	?>

	<!-- Start Contact Area -->
	<section class="contact-area pt-100 pb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="contact-info">
						<ul>
							<li>
								<div class="icon">
									<i class="fas fa-map-marker-alt"></i>
								</div>
								<span>Location us on:</span>
								Consultingwiz, United States
							</li>
							<li>
								<div class="icon">
									<i class="fas fa-envelope-open-text"></i>
								</div>
								<span>Send us on:</span>
								infoconsult@support.com
							</li>
							<li>
								<div class="icon">
									<i class="fas fa-phone-alt"></i>
								</div>
								<span>Get us on:</span>
								(+1) 400 - 3290 - 0100
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="contact-form">
						<form action="#">
						<div class="row">
							<div class="col-md-6">
								<input type="text" name="name" required="required" placeholder="Your Name*">
							</div>
							<div class="col-md-6">
								<input type="email" name="email" required="required" placeholder="Your Email*">
							</div>
							<div class="col-md-6">
								<input type="text" name="phone" required="required" placeholder="Your Phone*">
							</div>
							<div class="col-md-6">
								<input type="text" name="subject" placeholder="Your Subject">
							</div>
							<div class="col-12">
								<textarea name="message" required="required" placeholder="Your Message*"></textarea>
							</div>
							<div class="col-12">
								<button type="submit">Send Message</button>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Contact Area -->
	<?php
	require('template/footer.php')
	?>