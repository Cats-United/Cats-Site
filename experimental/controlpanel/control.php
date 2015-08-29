<!-- CONTROL PANEL -->
<?php
include_once '.includes/functions.php';
include_once'./incldues/db_connect.php';

sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
/* TODO:
*  Be able to import files from your computer and then send that to the server (PHP/HTML/JS) 6/09/15
*  Create a description page for project page imports (PHP/HTML/CSS/JS) 12/09/15
*  Get title and extension areas functional, along with code to run JS code and show and download link to Other. (PHP/JS) 12/09/15
*  Make News Articles functional, plus RSS feeds (PHP/HTML/CSS/JS) 1/10/15
*  Get carousels running (HTML/CSS/PHP/JS) 1/10/15
*  Get search feature functional (PHP/JS) 21/10/15
*/

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>pretty</title>
	</head>
	<body>
		<form method="post">
			<input name="username"></input>
			<input name="password" type="password"></input>
			<button>Look I'm a button!</button>
		</form>
		<div id="controlpanel">
			<table>
				<thead>
					<h1>Control Panel</h1>
				</thead>
				<tbody>
					<td>
						<ul>
							<li>
								<thead>
									<li>
										<h3>Project Importer</h3>
									</li>
								</thead>
								<tbody>
									<ul>
										<li>
											Name: DO NOT ADD FILE EXTENSION
										</li>
										<li>
											<input placeholder="Name"></input>
										</li>
									</ul>
									<ul>
										<li>
											Code
										</li>
										<li>
											<button>Javascript</button>
											<button>Java/Other</button>
											<ul>
												<li>
													<button>Import JS Project</button>
													<p class="result"></p>
												</li>
												<li>
													<button>Import Other Project</button>
													<p class="result"></p>
												</li>
											</ul>
										</li>
									</ul>
								</tbody>
							</li>
							<li>
								<thead>
									<h3>Manage Users</h3>
								</thead>
								<tbody>
									<ul>
										<li>
											<button>Add User</button>
											<ul>
												<form method="post" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" name="register">
													<li>
														<input name="username" placeholder="Username" required></input>
													</li>
													<li>
														<input name="password" type="password" placeholder="Password" required></input>
													</li>
													<li>
														<input placeholder="Email" type="email" required></input>
													</li>
													<li>
														<input type="submit" name="submit" value="Submit">
													</li>
												</form>
												<?php
													if (login_check($mysqli) == true) {
																	echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';
											 
														echo '<p>Do you want to change user? <a href="includes/logout.php">Log out</a>.</p>';
													} else {
																	echo '<p>Currently logged ' . $logged . '.</p>';
																	echo "<p>If you don't have a login, please <a href='register.php'>register</a></p>";
													}
											?>
											</ul>
										</li>
										<li>
											<h4>Search Users</h4>
											<input placeholder="Search for a user." type="search"></input>
											<input type="submit" name="submit" value="Submit">
											<?php/*search for users*/?>
										</li>
									</ul>
								</tbody>
							</li>
							<li>
								<thead>
									<h3>Manage News Articles</h3>
								</thead>
								<tbody>
									<ul>
										<li>
											<button>Add New Article</button>
											<form method="post" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>">
												<li>
													<input name="text" placeholder="Name of Article" required/>
												</li>
												<li>
													<textarea rows="6" cols="40" required placeholder="Type your article here...">
													</textarea>
													<input type="submit" name="submit" value="Submit">
												</li>
											</form>
										</li>
									</ul>
								</tbody>
							</li>
						</ul>
					</td>
					<li>
						<button>DONE!</button>
					</li>
				</tbody>
			</table>
		</div>
	</body>
</html>
