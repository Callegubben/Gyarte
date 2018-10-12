<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<title>Here you get knowledge</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" typer"text/css" href="Style.css">
</head>
<body>
	<a href="Index.php"><img class="logo" src="Title.png"></a>
<header>
	<nav>

		<div class="main-wrapper">
			
			<div class="nav-login">
				<?php
					if (isset($_SESSION['u_id'])) 
					{
					echo '<form action="includes/logout.inc.php" method="POST"> 
						<button type="submit" name="submit">Logout</button>
						</form>';
					} else {
					echo '<form action="includes/login.inc.php" method="POST">
						<input type="text" name="uid" placeholder="Username/e-mail">
						<input type="password" name="pwd" placeholder="password">
						<button type="submit" name="submit">Login</button>
						</form>
						<a href="signup.php">Sign Up</a>';
					}
				?>
			</div>
		</div>
	</nav>
</header>