<?php
session_start();
require('connection/connection.php');
	require('template/header.php');
	require('template/breadcrumb.php');
	?>

	<!-- Start Blog Area -->
	<section class="blog-area pt-100 pb-100">
		<div class="container">
			<div class="row">
				
				<div class="col-md-8  col-lg-8">
					<div class="blog-details">
						<div class="thumbnail">
							<img src="assets/img/single-blog-img.jpg" alt="blog details">
							<div class="date">
								<span><i class="far fa-calendar-alt"></i> 13 May 2021</span>
							</div>
						</div>
						<div class="content">
							<div class="auth">
								<span><i class="fas fa-user"></i>By Admin</span>
								<span><i class="far fa-comment-dots"></i> 02 Comments</span>
							</div>
							<h2>Is one single solution for all types of roofs possible?</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo.</p>
							<p>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi nulla quis nibh. Quisque a lectus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. malesuada erat ut turpis. Suspendisse urna nibh, viverra non semper suscipit ultrices nulla quis nibh.</p>
							<h3>High quality work for our customer.</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo.</p>
							<div class="share-post">
								<span>Share Post : </span>
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
								</ul>
							</div>
							<div class="comment-list-box">
								<h3>Comments (2)</h3>
								<ul>
									<li>
										<img src="assets/img/comments-img-1.jpg" alt="Image">
										<h3>Juanita Jones</h3>
										<span>13, May 2021</span>
										<p>Lorem ipsum dolora sit amet, consectetur adipiscing elit sed do eiusmod tempor incdidunt labore et dolore magna aliqua. Veniam quis nostrud exercitation ullaco laboris</p>
										<a href="#">Reply</a>
									</li>
									<li>
										<img src="assets/img/comments-img-2.jpg" alt="Image">
										<h3>Ward F. Nelson</h3>
										<span>13, May 2021</span>
										<p>Lorem ipsum dolora sit amet, consectetur adipiscing elit sed do eiusmod tempor incdidunt labore et dolore magna aliqua. Veniam quis nostrud exercitation ullaco laboris</p>
										<a href="#">Reply</a>
									</li>
								</ul>
							</div>
							<div class="comment-form">
								<h3>Leave a reply</h3>
								<form action="#">
									<div class="row">
										<div class="col-md-12">
											<textarea name="message" placeholder="Your Message"></textarea>
										</div>
										<div class="col-md-6">
											<input type="text" name="name" placeholder="Name">
										</div>
										<div class="col-md-6">
											<input type="email" name="email" placeholder="Email">
										</div>
										<div class="col-12">
											<input type="text" name="subject" placeholder="Subject">
										</div>
										<div class="col-12">
											<button type="submit">Comment Now</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<?php
				require('template/blog-single.php')
				?>
			</div>
		</div>
	</section>
	<!-- End Blog Area -->
	
	<?php
	require('template/footer.php');
	?>