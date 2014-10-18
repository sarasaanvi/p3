<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type = "text/css" href=<?php public_path();?>"/style_hemadri.css">	
	<title>		
		@yield('title',"Developer's Best Friend")
	</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
	<link rel="stylesheet" type = "text/css" href="style_hemadri.css">	
</head>
<body>
	<div id = "header">		
		<img src= <?php public_path();?>"/LogoImage.png" style="width:150px;height:150px">
	</div>
	<div id = "header">	
		<br>
		<h1>Welcome to Developer's Best Friend</h1>			
	</div>
	<br>
	<div id = "container">
		@yield('content')
	</div>
</body>
