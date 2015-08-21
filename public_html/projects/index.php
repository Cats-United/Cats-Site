<?php
include_once'/includes/db_connect.php';
include_once'/assets/cdn/main/php/project-thumb.php';
/* Analytics go here */
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" manifest="demo.appcache">
	<head>
			<?php include'assets/pages/main/php/head.php'; ?>
	</head>
	<body>
		<?php include'assets/pages/main/php/navigation.php'; ?>
		<!-- main page -->
		<div id="display" class="display">
			<!-- picture goes here -->
			<div id="title">
				<h1>Projects</h1>
			</div>
		</div>
		<div class="container">
			<div id="content">
				<table>
						<ul>
								<li>
									<thead>
											<h3>Example</h3>
									</thead>
									<tbody>
											<ul>
													<li>
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
