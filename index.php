<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="favicon.ico" />
	<title>Snake Game</title>
	<script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js" integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;800&display=swap" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="styles.css">

</head>

<body>
	<nav class="navbar navbar-light bg-light">
		<div class="container-fluid">
			<a style="margin-left: 1000px;" class="navbar-brand" href="logout.php">Logout</a>
		</div>
		<div class="container noselect">
			<div class="wrapper">
				<button id="replay">
					<i class="fas fa-play"></i>
					RESTART
				</button>
				<div id="canvas">
				</div>
				<div id="ui">
					<h2>SCORE
					</h2>
					<span id="score">00</span>
				</div>
			</div>
			<div id="author">
				<h1>SNAKE</h1>
			</div>
		</div>
		<!-- Javascript -->
		<script src="script.js"></script>
</body>

</html>