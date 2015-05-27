<!DOCTYPE HTML>
<?php
    $cookie_name = "test";
    $cookie_value = "test";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
	<head>
        <meta charset="utf-8">
        <meta content="CatsUnited - Home">
		<link rel="shortcut icon" href="http://i.cubeupload.com/dljxkt.png" type="image/png">
		<link rel="stylesheet" href="http://catsunited.gwiddle.co.uk/stylesheet.css" type="text/css">
		<link rel="stylesheet" href="http://catsunited.gwiddle.co.uk/frontsection.css" type="text/css">
        <style>
        .background  {
            position: relative;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            background-color: #FFF;
            z-index: 1;
        }
        #front-section, #we-bake-cookies   {
            z-index: 50;
        }
        video   {
            display: inline-block;
        }
        body    {
            overflow-x: hidden;
        }
        textarea    {
            visibility: hidden;
        }
        </style>
	</head>
	<body>
    <?php
        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }
    ?>
    <?php
        if(count($_COOKIE) > 0) {
            echo "Cookies are enabled.";
        } else {
            echo "Cookies are disabled.";
        }
    ?>
    <?php include'topbar.php'; ?>
                <textarea>hidden</textarea>
                <div id="front-section">
                    <div id="welcome">
                        <input type="button" value="Dismiss" onClick="document.getElementById('front-section').style.visibility='hidden'">
                        <h3>Welcome to CatsUnited's Site!</h3>
                        <p>This website is where I will create a blog, a forum and share some of my upcoming projects.</p>
                        <!--
                        <video width="320" height="280" controls>
                             <p>If you can read this, then you're likely using an old browser. To run this correctly, use a newer browser.</p>
                        </video>
                        -->
                    </div>
                </div>
                <!--
                <div id="we-bake-cookies">
                    <input type="button" value="Dismiss" onClick="document.getElementById('we-bake-cookies').style.visibility='hidden'">
                    <h4>We use cookies.</h4>
                    <p>We use tasty cookies baked from our PHP code to run parts of the site such as the popular projects section.</p>
                </div>
                -->
		    <div id="pic">
		    </div>
                </div>
		<div class="container">
		</div>
    <div class="background">
        <div id="grey-background">
            <nav>
                <style>
                #grey-background    {
                    background-color: #C6C6C6;
                    height: 2000px;
                    width: 925px;
                    transform: rotate(45deg);
                    position: relative;
                    top: -1390px;
                    left: -280px;
                    z-index: -360;
                    transition: transform 2s;
                }
                #grey-background:hover  {
                   transform: scale(2,3); 
                }
                </style>
            </nav>
        </div>
        <div id="orange-background">
            <style>
                #orange-background  {
                    background-color: #FF9900;
                    height: 500px;
                    width: 500px;
                    position: relative;
                    top: -2420px;
                    left: 83.5%;
                    z-index: 280;
                    transition: transform 2s;
                }
                #orange-background:hover    {
                    transform: rotate(-45deg);
                }
                #orange-background-cover    {
                    background-color: #FFF;
                    height: 1000px;
                    width: 400px;
                    position: relative;
                    z-index: 310;
                    transform: rotate(-45deg);
                    top: 0;
                    left: 0;
                }
                </style>
            <div id="orange-background-cover">
            </div>
        </div>
        <div id="green-background">
            <style>
            #green-background   {
                background-color: #009933;
                height: 750px;
                width: 500px;
                top: 130%;
                left: 90%;
                position: relative;
                transform: rotate(45deg);
                z-index: 300;
                transition: transform 1.8s;
            }
            </style>
        </div>
    </div>
	</body>
</html>
