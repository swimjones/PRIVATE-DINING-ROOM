<!DOCTYPE html>
<html>
<head>
	<title>PRIVATE DINING ROOM</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
	<link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri();?>/js/front.js"></script>
	<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div id=menu-pop-up class=menu-closed>
	<div id=menu-contents>
	<a class=menu-items href="http://<?php echo getenv('DOMAIN_NAME')?>">stories</a>
	<div class=divider></div>
	<a class=menu-items>categories</a>
	<div class=divider></div>
	<a class=menu-items>about us</a>
	<br><br><br>
	<button onclick="menuClose()">close</button>
	</div>
</div>
<div id=wrapper>
<div id=header class=menu-closed class=nav-down>
<button onclick="menuOpen()"><a id=navtext href="javascript:void(0);">&#9776;</a></button>
</div>