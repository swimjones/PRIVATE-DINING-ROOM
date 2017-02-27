<!DOCTYPE html>
<html>
<head>
	<title>private-diningroom.com</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre:300" rel="stylesheet">
	<style type="text/css">
		body{
	margin:0;
}

*{
	box-sizing:border-box;
}

#content{
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,50%);
	width:50%;
}

#logo{
	font-family:Charter;
	font-size: 3em;
}

#site_title{
	font-family:"Frank Ruhl Libre";
}

.row{
	width:100%;
	border: 1px solid red;
	height:5px;
	background-color: red;
}

.left_title{
	color:white;
	float:left;
	padding:0;
	width:49%;
	font-family:Bodoni;
	transition-duration: 1.5s;
}

.right_title{
	color:white;	
	float:right;
	font-style:italic;
	font-family:Bodoni;
	padding:0;
	width:49%;
	text-align:right;
	transition-duration: 1.5s;
}

a{text-decoration: none ;color:black;font-family:'Helvetica';font-size:2em;}
a:hover{color:red;transition-duration:1s;}
	</style>
</head>


<body>
<div style="top:-20px" id=content>
		<p id=logo>£</p>
		<p id=site_title>private-diningroom.com</p>
		<div class=row></div><br>
		<a href="<?php echo base_url();?>">information</a>
</div>
</body>
</html>