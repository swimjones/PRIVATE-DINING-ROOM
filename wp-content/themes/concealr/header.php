<!DOCTYPE html>
<html>
<head>
	<title>PRIVATE DINING ROOM</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
	<link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre|Source+Serif+Pro:700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri();?>/js/front.js"></script>
	<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
</head>
<div id=wrapper>
<div id=header class=default>
	<div id=header_nav>
		<h1><a href="http://<?php echo getenv('DOMAIN_NAME')?>">PRIVATE DINING ROOM</a></h1>
		<a id=pipes_button href="javascript:void(0)" onclick="bye_menu();">&#9776;</a>
	</div>
	<ul class=no_menu>
		<div id=menuitems>
			<a id=mag href="http://<?php echo getenv('DOMAIN_NAME')?>">ideas</a>
			<a id=extras href="products">products</a>
			<a id=info href="philosophy">philosophy</a>
		</div>
	</ul>
</div>