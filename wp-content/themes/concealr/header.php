<!DOCTYPE html>
<html>
<head>
	<title>PRIVATE DINING ROOM</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
	<link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri();?>/js/front.js"></script>
	<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
</head>
<body>
<div id=menu-pop-up class=menu-closed>
	<a href="<?php getenv('DOMAIN_NAME');?>">stories</a>
	<div class=divider></div>
	<a>categories</a>
	<div class=divider></div>
	<a>about us</a>
	<button onclick="menuClose()"><a href="javascript:void(0);">close</a></button>
</div>
<div id=wrapper>
<div id=header class=menu-closed class=nav-down>
<button onclick="menuOpen()"><a id=navtext href="javascript:void(0);">navigation</a></button>
</div>