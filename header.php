<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/styleall.css">
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
	<title>home page</title>
</head>

<body>
	<div class="header">
		<div class="header-top">
			<div class="wrap">
				<div class="h-logo">
					<img src="./images/t-logo.png" alt="Logo Image Here" />
				</div>
				<div class="nav-wrap">
					<ul class="group" id="example-one" style="float:right;">
						<li><a href="index.php">HOME</a></li>
						<li><a href="movie.php">MOVIES</a></li>
						<li>
							<?php include('config.php');
							// session_start();

							if (isset($_SESSION['user'])) {
								$us = mysqli_query($con, "select * from movie_registration where R_ID= '" . $_SESSION['user'] . "'");
								$user = mysqli_fetch_array($us); ?>
							<li style="text-transform: uppercase;"><a href="profile.php">
									<?php echo $user['R_NAME']; ?>
							</li>
							<li>
								</a><a href="logout.php">LOGOUT</a></li>
						<?php } else { ?>
							<li><a href="login.php">LOGIN</a></li>
							<li> <a href="registration.php">REGISTER</a>
							<?php }
							?>
						</li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>

		<div class="block">

			<div class="wrap">
				<form action="process_search.php" id="reservation-form" method="post" onsubmit="myFunction()">
					<div class="field">
						<input type="text" placeholder="Enter A Movie Name" required id="search111" name="search">
						<input type="submit" value="Search" id="button111">
					</div>
				</form>
				<div class="clear"></div>
			</div>
		</div>
	</div>