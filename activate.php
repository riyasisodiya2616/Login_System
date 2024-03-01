<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:index.html');
}
?>

<html>
	<head>
		<title>home page</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<style>
		
		a{
		    color:#fff;
		}
		.logout{
			position: absolute;
			top:1vh;
			left:1vh;
			height: 5vh;
			width: 8vw;
			background-color: transparent;
			border-radius: 0.5em;
			color: white;
			cursor: pointer;
			border: 0.2em solid white;
			font-size: 1em;
		}
		.logout:hover{
			background-color: white;
			color: #162638;
			transition: 1s ease;
		}
	</style>
	<body>
		<div class="main">
		<button class = "logout">
		<a href="./logout.php">logout</a>
		</button>
		<h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
	</body>
</html>
