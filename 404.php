<?php
session_start();
require('connection/connection.php');
	require('template/header.php');
	require('template/breadcrumb.php');
	?>

	
	<!-- Start Error Page -->
	<section class="error-page pt-100 pb-100">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="error-content">
						<h2>404!</h2>
						<h3> Sorry! Can't Find That Page! </h3>
						<p>Can't find what you need? Take a moment and do a search <br>below or start from our <a href="index.html">homepage.</a></p>
						<div class="error-search-form">
							<form action="#">
								<input type="search" name="search" placeholder="What you are searching for?">
								<button type="submit">Search</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Error Page -->
	
	<?php
	require('template/footer.php')
	?>