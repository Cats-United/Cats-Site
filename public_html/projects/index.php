<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
			<?php include'assets/pages/main/php/head.php'; ?>
	</head>
	<body>
		<?php include'assets/pages/main/php/navigation.php'; ?>
		<!-- main page -->
		<div id="display" class="display">
			<!-- picture goes here -->
			<div id="title" class="software">
				<h1>CatsUnited - Projects</h1>
				<br/>
				<h4>Right now, there <?php ?> on this page.</h4>
			</div>
		</div>
		<div class="container">
			<div id="content">
				<table class="software">
						<ul>
								<li class="carousel">
									<thead>
											<h3>Featured Projects</h3>
									</thead>
									<tbody>
											<ul>
													<li>
															<?php include'/assets/cdn/main/php/project-thumb.php'; ?>
													</li>
											</ul>
									</tbody>
								</li>
								<li class="carousel">
									<thead>
											<h3>Recent Projects</h3>
									</thead>
									<tbody>
											<ul>
													<li>
															<?php include'/assets/cdn/main/php/project-thumb.php'; ?>
													</li>
											</ul>
									</tbody>
								</li>
								<li class="carousel">
									<thead>
											<h3>All Javascript Projects</h3>
									</thead>
									<tbody>
											<ul>
													<li>
															<?php include'/assets/cdn/main/php/project-thumb.php'; ?>
													</li>
											</ul>
									</tbody>
								</li>
								<li class="carousel">
									<thead>
											<h3>All Java/C++ Projects</h3>
									</thead>
									<tbody>
											<ul>
													<li>
															<?php include'/assets/cdn/main/php/project-thumb.php'; ?>
													</li>
											</ul>
									</tbody>
								</li>
								<li class="carousel">
									<thead>
											<h3>All Python Projects</h3>
									</thead>
									<tbody>
											<ul>
													<li>
															<?php include'/assets/cdn/main/php/project-thumb.php'; ?>
													</li>
											</ul>
									</tbody>
								</li>
						</ul>
				</table>
			</div>
		</div>
		<?php include'assets/pages/main/php/footer.php'; ?>
	</body>
</html>
