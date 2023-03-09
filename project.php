<?php
session_start();
require('connection/connection.php');
	require('template/header.php');
	require('template/breadcrumb.php');
	?>


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

	<?php
	require('template/footer.php')
	?>