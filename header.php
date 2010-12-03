<?php	include('php/functions.php'); ?>
<?php	$self = $_SERVER['PHP_SELF']; ?>
<?php	$base = substr($self, 1, strrpos($self,".")-1); ?>
<!doctype html>  

<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Andrew Gioia</title>
  <meta name="description" content="The personal and professional webspace of Andrew Gioia">
  <meta name="author" content="Andrew Gioia">
  <base href="http://localhost:8888" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">

  <link rel="stylesheet" href="css/style.css?v=2">
  <script src="js/libs/modernizr-1.6.min.js"></script>

</head>

<body>

	<header>
		<div>
			<h1><a href="home" class="home round-3">Andrew Gioia</a></h1>
			<em>/</em>
			<span id="nav-span">
				<a href="javascript:void(0);" class="page round-l">Work</a><a href="javascript:void(0);" id="nav-button" class="drop round-r"><small>&#9660;</small></a>
			</span>
			<ul id="nav" class="round-3 hidden">
				<li><a href="blog" class="round-3">Live</a></li>
				<li><a href="blog" class="round-3">Work</a></li>
				<li><a href="contact" class="round-3">Contact</a></li>
				<li><a href="background" class="round-3">Background</a></li>
				<li><a href="#" class="round-3">Something longer</a></li>
			</ul>
		</div>
	</header>
	
	<div id="container">