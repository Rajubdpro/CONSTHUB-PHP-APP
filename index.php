<?php
require('front-controller/FrontendController.php');
$obj = new FrontendController();
$slider = $obj->displaySlider();
require('template/header.php');
?>
	<!-- Start Hero Area -->
	<section class="hero-area">
		<div class="hero-slider-full owl-carousel">
		
		<?php foreach($slider as $sliderData){?>
			<!-- Single -->
			<div class="hero-slider-single" style="background-image: url('admin/uploads/slider/<?php echo $sliderData['photo']?>');">
				<div class="container">
					<div class="row">
						<div class="col-lg-7">
							<div class="hero-slider-single-content">
								<div class="hero-slider-single-content-full">
									<h2><?php echo $sliderData['heading'];?></h2>
									<p>Donec scelerisque dolor id nunc dictum, interdum gravida mauris rhoncus. Aliquam at ultrices nunc.</p>
									<div class="slider-btn">
										<a class="button-1" href="#">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php }?>

		</div>
	</section>
	<!-- End Hero Area -->
	<!-- Start About Area -->
	<section class="about-area pt-100 pb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="about-img">
						<img src="assets/img/about.jpg" alt="about">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about-info">
						<h3>About our company</h3>
						<p>Lorem Ipsum is simply text of the. Lorem Ipsum is simply text of the stry stext of the stry simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply text of the. Lorem Ipsum is simply text of the stry Lorem Ipsum is simply text of the.</p>
						<div class="about-info-list">
							<div class="row">
								<div class="col-md-6">
									<ul>
										<li><i class="far fa-check-square"></i> Safe & Secure</li>
										<li><i class="far fa-check-square"></i> Global Solutions</li>
										<li><i class="far fa-check-square"></i> Trusted Company</li>
										<li><i class="far fa-check-square"></i> 25 years of Experience</li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul>
										<li><i class="far fa-check-square"></i> Business Opportunities</li>
										<li><i class="far fa-check-square"></i> Lifetime Support</li>
										<li><i class="far fa-check-square"></i> Exclusive Partnerships</li>
										<li><i class="far fa-check-square"></i> Quality Services</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="about-info-btn">
							<a class="button-1" href="#">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Area -->
	<!-- Start Our Services Area -->
	<section class="our-services-area pt-100 pb-70 section-bg">
		<div class="container">
			<!-- Section TItle -->
			<div class="row">
				<div class="col-12">
					<div class="section-title text-center mb-50">
						<h2>Our Services</h2>
						<p>Collaboratively administrate empowered markets via plug-and-play networks. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="services-item">
						<div class="icon">
							<i class="fas fa-tasks"></i>
						</div>
						<h2>Road Construction</h2>
						<p>We’ll generate a sitemap for your site, submit it to search engine is and track crawler access.</p>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="services-item">
						<div class="icon">
							<i class="fas fa-border-none"></i>
						</div>
						<h2>Building Renovation</h2>
						<p>We’ll generate a sitemap for your site, submit it to search engine is and track crawler access.</p>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="services-item">
						<div class="icon">
							<i class="fas fa-pencil-ruler"></i>
						</div>
						<h2>Architecture Design</h2>
						<p>We’ll generate a sitemap for your site, submit it to search engine is and track crawler access.</p>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="services-item">
						<div class="icon">
							<i class="fab fa-servicestack"></i>
						</div>
						<h2>Roof Repairing</h2>
						<p>We’ll generate a sitemap for your site, submit it to search engine is and track crawler access.</p>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="services-item">
						<div class="icon">
							<i class="fas fa-sync-alt"></i>
						</div>
						<h2>Isolation</h2>
						<p>We’ll generate a sitemap for your site, submit it to search engine is and track crawler access.</p>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="services-item">
						<div class="icon">
							<i class="far fa-gem"></i>
						</div>
						<h2>Commercial Interior</h2>
						<p>We’ll generate a sitemap for your site, submit it to search engine is and track crawler access.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Our Services Area -->
	<!-- Start Our Project Area -->
	<section class="our-project pt-100 pb-70">
		<div class="container">
			<!-- Section TItle -->
			<div class="row">
				<div class="col-12">
					<div class="section-title text-center mb-50">
						<h2>Our Projects</h2>
						<p>Collaboratively administrate empowered markets via plug-and-play networks. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-2 col-lg-3">
					<div class="project-list">
						<ul>
							<li data-filter="all">all</li>
							<li data-filter=".reconstruction">Reconstruction</li>
							<li data-filter=".architecutre">Architecutre</li>
							<li data-filter=".construction">Construction</li>
							<li data-filter=".isolation">Isolation</li>
							<li data-filter=".renovation">Renovation</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-10 col-lg-9">
					<div class="row project-full portF">
						<!-- Single -->
						<div class="col-lg-4 col-md-6 mb-30 mix reconstruction construction">
							<div class="project-item">
								<img src="assets/img/project/1.jpg" alt="project">
								<div class="project-item-overly">
									<div class="project-item-overly-full">
										<a class="zoom-img" href="assets/img/project/1.jpg"><i class="fas fa-search"></i></a>
										<a href="#"><i class="fas fa-link"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Single -->
						<div class="col-lg-4 col-md-6 mb-30 mix architecutre">
							<div class="project-item">
								<img src="assets/img/project/2.jpg" alt="project">
								<div class="project-item-overly">
									<div class="project-item-overly-full">
										<a class="zoom-img" href="assets/img/project/2.jpg"><i class="fas fa-search"></i></a>
										<a href="#"><i class="fas fa-link"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Single -->
						<div class="col-lg-4 col-md-6 mb-30 mix construction renovation">
							<div class="project-item">
								<img src="assets/img/project/3.jpg" alt="project">
								<div class="project-item-overly">
									<div class="project-item-overly-full">
										<a class="zoom-img" href="assets/img/project/3.jpg"><i class="fas fa-search"></i></a>
										<a href="#"><i class="fas fa-link"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Single -->
						<div class="col-lg-4 col-md-6 mb-30 mix isolation">
							<div class="project-item">
								<img src="assets/img/project/4.jpg" alt="project">
								<div class="project-item-overly">
									<div class="project-item-overly-full">
										<a class="zoom-img" href="assets/img/project/4.jpg"><i class="fas fa-search"></i></a>
										<a href="#"><i class="fas fa-link"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Single -->
						<div class="col-lg-4 col-md-6 mb-30 mix reconstruction architecutre">
							<div class="project-item">
								<img src="assets/img/project/5.jpg" alt="project">
								<div class="project-item-overly">
									<div class="project-item-overly-full">
										<a class="zoom-img" href="assets/img/project/5.jpg"><i class="fas fa-search"></i></a>
										<a href="#"><i class="fas fa-link"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Single -->
						<div class="col-lg-4 col-md-6 mb-30 mix isolation renovation">
							<div class="project-item">
								<img src="assets/img/project/6.jpg" alt="project">
								<div class="project-item-overly">
									<div class="project-item-overly-full">
										<a class="zoom-img" href="assets/img/project/6.jpg"><i class="fas fa-search"></i></a>
										<a href="#"><i class="fas fa-link"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Our Project Area -->
	<!-- Start call-to-action-section Area -->
	<section class="call-to-action-section pt-100 pb-100">
		<div class="container">
			<div class="row">
				<div class="text-column col-md-8 col-sm-12 col-xs-12">
					<h2>We are providing good & on <span>time services</span> to our valuable customers.</h2>
				</div>
				<div class="btn-column col-md-4 col-sm-12 col-xs-12">
					<a class="button-1" href="#">Contact us</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End call-to-action-section Area -->
	<!-- Start Testimonial Area -->
	<section class="testimonial-area pt-100 pb-100 section-bg">
		<div class="container">
			<!-- Section TItle -->
			<div class="row">
				<div class="col-12">
					<div class="section-title text-center mb-50">
						<h2>Clients From World</h2>
						<p>Collaboratively administrate empowered markets via plug-and-play networks. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="testimonial-full owl-carousel">
						<!-- Single -->
						<div class="testimonial-single">
							<div class="cient-info">
								<div class="img-box">
									<img src="assets/img/thumb-1.png" alt="img">
								</div>
								<div class="text">
									<h2>Astley Jenifer</h2>
									<h4>Newyork</h4>
									<div class="ratting">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="text-box">
								<p>They have got my project on time with the competition with ahighly skilled, well-organized andexperienced team of professional Engineers well document.well-organized andexperienced team of professional Engineers well document.</p>
							</div>
							<div class="quote-icon">
								<i class="fas fa-quote-left"></i>
							</div>
						</div>
						<!-- Single -->
						<div class="testimonial-single">
							<div class="cient-info">
								<div class="img-box">
									<img src="assets/img/thumb-2.png" alt="img">
								</div>
								<div class="text">
									<h2>Astley Jenifer</h2>
									<h4>Newyork</h4>
									<div class="ratting">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="text-box">
								<p>They have got my project on time with the competition with ahighly skilled, well-organized andexperienced team of professional Engineers well document.well-organized andexperienced team of professional Engineers well document.</p>
							</div>
							<div class="quote-icon">
								<i class="fas fa-quote-left"></i>
							</div>
						</div>
						<!-- Single -->
						<div class="testimonial-single">
							<div class="cient-info">
								<div class="img-box">
									<img src="assets/img/thumb-3.png" alt="img">
								</div>
								<div class="text">
									<h2>Astley Jenifer</h2>
									<h4>Newyork</h4>
									<div class="ratting">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="text-box">
								<p>They have got my project on time with the competition with ahighly skilled, well-organized andexperienced team of professional Engineers well document.well-organized andexperienced team of professional Engineers well document.</p>
							</div>
							<div class="quote-icon">
								<i class="fas fa-quote-left"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonial Area -->
	<!-- Start Request Area -->
	<section class="request-area">
		<div class="request-area-left">
			<div class="request-area-left-content">
				<h2>Request A Call Back</h2>
				<p>Lorem Ipsum is simply text of the. Lorem Ipsum is simply text of the stry stext of the stry simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply text of the. </p>
				<ul>
					<li>
						<i class="fas fa-map-marker-alt"></i>
						<strong>Address : </strong>121, Park Drive, Varick Str <br>New York, NY 10012, USA
					</li>
					<li>
						<i class="fas fa-phone-alt"></i>
						<strong>Phone : </strong>+1 (514) 312-5678
					</li>
					<li>
						<i class="far fa-envelope"></i>
						<strong>Gmail : </strong>example123@gmail.com
					</li>
				</ul>
				<div class="social-request">
					<ul>
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fab fa-skype"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="request-area-right">
			<div class="request-area-right-form">
				<form action="#">
					<div class="row">
						<div class="col-md-6">
							<div class="request-input-field">
								<input type="text" name="name" placeholder="Your Name">
								<i class="far fa-user"></i>
							</div>
						</div>
						<div class="col-md-6">
							<div class="request-input-field">
								<input type="email" name="email" placeholder="Your Email">
								<i class="far fa-envelope"></i>
							</div>
						</div>
						<div class="col-md-6">
							<div class="request-input-field">
								<input type="text" name="phone" placeholder="Your Phone">
								<i class="far fa-star"></i>
							</div>
						</div>
						<div class="col-md-6">
							<div class="request-input-field">
								<input type="text" name="subject" placeholder="Your Subject">
								<i class="far fa-star"></i>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="request-input-field">
								<textarea name="message" placeholder="Your Message"></textarea>
								<i class="fas fa-pen"></i>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="request-input-field">
								<button class="button-1" type="submit">Submit Request</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!-- End Request Area -->
	<!-- Start Latest blog Area -->
	<section class="latest-blog pt-100 pb-70">
		<div class="container">
			<!-- Section TItle -->
			<div class="row">
				<div class="col-12">
					<div class="section-title text-center mb-50">
						<h2>Our Latest Blog</h2>
						<p>Collaboratively administrate empowered markets via plug-and-play networks. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="latest-blog-single">
						<div class="thumbnail">
							<img src="assets/img/blog/1.jpg" alt="latest blog">
						</div>
						<div class="content">
							<h2><a href="#">The story of a man named</a></h2>
							<div class="auth-meta">
								<span><i class="fas fa-user"></i> Admin</span>
								<span><i class="far fa-comment-dots"></i> 02</span>
								<span><i class="far fa-calendar-alt"></i> 5/11/2021</span>
							</div>
							<p>These days are all share them with me bight when the lady met this fellow...</p>
						</div>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="latest-blog-single">
						<div class="thumbnail">
							<img src="assets/img/blog/2.jpg" alt="latest blog">
						</div>
						<div class="content">
							<h2><a href="#">The story of a man named</a></h2>
							<div class="auth-meta">
								<span><i class="fas fa-user"></i> Admin</span>
								<span><i class="far fa-comment-dots"></i> 02</span>
								<span><i class="far fa-calendar-alt"></i> 5/11/2021</span>
							</div>
							<p>These days are all share them with me bight when the lady met this fellow...</p>
						</div>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="latest-blog-single">
						<div class="thumbnail">
							<img src="assets/img/blog/3.jpg" alt="latest blog">
						</div>
						<div class="content">
							<h2><a href="#">The story of a man named</a></h2>
							<div class="auth-meta">
								<span><i class="fas fa-user"></i> Admin</span>
								<span><i class="far fa-comment-dots"></i> 02</span>
								<span><i class="far fa-calendar-alt"></i> 5/11/2021</span>
							</div>
							<p>These days are all share them with me bight when the lady met this fellow...</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Latest blog Area -->
	<!-- Start Client Logo Area -->
	<section class="client-logo pt-50 pb-50 section-bg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="client-logo-full owl-carousel">
						<!-- Single -->
						<div class="single-logo">
							<img src="assets/img/1.png" alt="logo">
						</div>
						<!-- Single -->
						<div class="single-logo">
							<img src="assets/img/2.png" alt="logo">
						</div>
						<!-- Single -->
						<div class="single-logo">
							<img src="assets/img/3.png" alt="logo">
						</div>
						<!-- Single -->
						<div class="single-logo">
							<img src="assets/img/1.png" alt="logo">
						</div>
						<!-- Single -->
						<div class="single-logo">
							<img src="assets/img/2.png" alt="logo">
						</div>
						<!-- Single -->
						<div class="single-logo">
							<img src="assets/img/3.png" alt="logo">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Client Logo Area -->
	<?php
	require('template/footer.php')
	?>