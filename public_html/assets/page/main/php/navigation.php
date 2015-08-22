<nav>
	<div class="container">
		<li><a href="../"><div class="largetext" id="<?php if ($_SERVER['PHP_SELF'] == "/index.php") {echo'nav-selected';} else {/* nope */} ?>">CATSUNITED</div></a></li>
		<li><a href="/projects">Projects</a></li>
		<noscript>
			<li><a>For best experience, please switch on Javascript.</a></li>
		</noscript>
		<li><a href="/forums">Forums</a></li>
		<li><a href="#news" onclick="theNews()">News</a></li>
		<li><a href="/blog">Blog</a></li>
		<li><a href="https://github.com/CatsUnitedComputers/Cats-Site/wiki">Wiki</a></li>
		<li><a href="http://cats-united.github.io">Github</a></li>
		<li>
		<!-- will be moved to assets/page/php/search.php -->
		<a><input id="searchbar" class="search" placeholder="Search..." type="search"></input><button type="submit"><i class="fa fa-search"></i></button></a>
		<div id="suggestions" class="search">
		<!-- Search suggestions go here if that page exists. Will be part of search engine. -->
		</div>
		</li>
	</div>
</nav>
<!--[if lte IE 9]>
	<div id="old-browser" class="banner">
		<h4>Old Browser:</h4><p> Your browser is old and may not support all the elements required for this site. Please use another browser like <a href="http://www.google.com/chrome/">Google Chrome</a> or <a href="https://www.mozilla.org/en-US/firefox/new/">Firefox</a>, or ugrade your current one.</p>
	</div>
<![endif]-->
