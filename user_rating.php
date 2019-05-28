<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
	<title>Freelancer Info</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">


	<!-- Bootstrap CSS CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" crossorigin="anonymous">

	<!-- Font Awesome JS -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" crossorigin="anonymous"></script>

	<!-- jQuery CDN - Slim version (=without AJAX) -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
	<!-- Popper.JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" crossorigin="anonymous"></script>
	<!-- Bootstrap JS -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style>
		.dropdown-submenu {
			position: relative;
		}

		.dropdown-submenu>.dropdown-menu {
			top: 0;
			left: 100%;
			margin-top: -6px;
			margin-left: -1px;
			-webkit-border-radius: 0 6px 6px 6px;
			-moz-border-radius: 0 6px 6px;
			border-radius: 0 6px 6px 6px;
		}

		.dropdown-submenu:hover>.dropdown-menu {
			display: block;
		}

		.dropdown-submenu>a:after {
			display: block;
			content: " ";
			float: right;
			width: 0;
			height: 0;
			border-color: transparent;
			border-style: solid;
			border-width: 5px 0 5px 5px;
			border-left-color: #ccc;
			margin-top: 5px;
			margin-right: -10px;
		}

		.dropdown-submenu:hover>a:after {
			border-left-color: #fff;
		}

		.dropdown-submenu.pull-left {
			float: none;
		}

		.dropdown-submenu.pull-left>.dropdown-menu {
			left: -100%;
			margin-left: 10px;
			-webkit-border-radius: 6px 0 6px 6px;
			-moz-border-radius: 6px 0 6px 6px;
			border-radius: 6px 0 6px 6px;
		}

		* {
			box-sizing: border-box;
		}

		body {
			font-family: Arial;
			margin: 0 auto;
			/* Center website */
			/*max-width: 800px; /* Max width */
			padding: 20px;
		}

		.idk {
			font-family: Arial;
			margin: 0 auto;
			/* Center website */
			max-width: 800px;
			/* Max width */
			padding: 20px;
		}

		.heading {
			font-size: 25px;
			margin-right: 25px;
		}

		.fa {
			font-size: 25px;
		}

		.checked {
			color: orange;
		}

		/* Three column layout */
		.side {
			float: left;
			width: 15%;
			margin-top: 10px;
		}

		.middle {
			float: left;
			width: 70%;
			margin-top: 10px;
		}

		/* Place text to the right */
		.right {
			text-align: right;
		}

		/* Clear floats after the columns */
		.row:after {
			content: "";
			display: table;
			clear: both;
		}

		/* The bar container */
		.bar-container {
			width: 100%;
			background-color: #f1f1f1;
			text-align: center;
			color: white;
		}

		/* Individual bars */
		.bar-5 {
			width: 60%;
			height: 18px;
			background-color: #4CAF50;
		}

		.bar-4 {
			width: 30%;
			height: 18px;
			background-color: #2196F3;
		}

		.bar-3 {
			width: 10%;
			height: 18px;
			background-color: #00bcd4;
		}

		.bar-2 {
			width: 4%;
			height: 18px;
			background-color: #ff9800;
		}

		.bar-1 {
			width: 15%;
			height: 18px;
			background-color: #f44336;
		}

		/* Responsive layout - make the columns stack on top of each other instead of next to each other */
		@media (max-width: 400px) {

			.side,
			.middle {
				width: 100%;
			}

			/* Hide the right column on small screens */
			.right {
				display: none;
			}
		}
	</style>


</head>

<body>
	<div class="wrapper">
		<!-- Page Content  -->
		<div id="content">
			<nav class="navbar navbar-inverse navbar-expand-lg navbar-fixed-top">
				<div class="container-fluid">
					<div class="nav navbar-nav">
						<div class="navbar-header">
							<img src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.thelogomix.com%2Ffiles%2Fimagecache%2Fv3-logo-detail%2Ffreelance%2520folder.jpg&f=1" alt="logo" style="width:50px;">
						</div>
						<div class="navbar-header">
							<a class="navbar-brand" href="#"> FREELANCER2HIRE</a>
						</div>
						<form class="navbar-form navbar-left" action="/action_page.php">
							<div class="form-group">
								<input type="text" class="form-control" name="search_qry" placeholder="Search">
							</div>
							<button type="Search" class="btn btn-default">Search</button>
						</form>
					</div>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php"><i class="fas fa-home-lg"></i></span> Home</a></li>
						<?php
						if (sizeof($_SESSION) == 0) {
							echo '
                        <li><a href="sign_up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="log_in.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                                ';
						}
						if (sizeof($_SESSION) == 1) {
							echo '
                        <li><a href="user_watchlist.php?user=' . $_SESSION['user'] . '"><span class="glyphicon glyphicon-heart"></span> ' . $_SESSION['user'] . '\'s Playlist</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                                ';
						}
						?>
						<li><a href="#"><strong>Help?</strong></a></li>
					</ul>
				</div>
			</nav>
			<br>
			<br>
			<br>


			<?php
			if ($_SERVER['REQUEST_METHOD'] == 'GET') {

				$Name = $_GET['Name'];

				$filter = ['Name' => $Name];
				$options = [];

				$dbname = 'Freelancers';
				$c_user = 'employee';

				$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');

				$query = new MongoDB\Driver\Query($filter, $options);
				$cursor = $manager->executeQuery("$dbname.$c_user", $query);

				//$arr = iterator_to_array($cursor);
				//print_r($filter);

				foreach ($cursor as $c) {
					echo '
		<div class="container-fluid border rounded m-3">
		<div class="card shadow-md col-10 justify-content-center align-items-center mx-auto m-3">
			<div class="row text-center">
				<div class="text-center mx-auto">
					<a href="user_rating.php?id=' . $c->_id . '">
						<img class="img-fluid" src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fd2gg9evh47fn9z.cloudfront.net%2F800px_COLOURBOX20578531.jpg&f=1" alt=""  style="height:100%; width: 50%">
					</a>
				</div>
				<div class="bg-light border dark mx-auto">
					<strong><h3>' . $c->Name . '</h3></strong>
					<p>
						<br><strong>Annual Salary: </strong>' . $c->Annual_Salary . ' | <strong>Full or Part-Time: </strong>' . $c->Full_or_Part_Time . ' | <strong>Hourly Rate: </strong>' . $c->Hourly_Rate . '
                        <hr><strong>Job Title: </strong>' . $c->Job_Titles . '
                        <hr><strong>Department: </strong>' . $c->Department . '
                        <br><strong>Salary or Hourly: </strong>' . $c->Salary_or_Hourly . '
                        <br><strong>Working Hours: </strong>' . $c->Typical_Hours . '
					</p>
					<a class="btn btn-primary" href="add_2_watch.php?user=' . $_SESSION['user'] . '&&title=' . $c->Name . '">Add to Watchlist</a>
				</div>
			</div>
			<div class="row m-5">
				<a class="btn btn-lg btn-warning" href="user_rating.php?Name=' . $c->Name . '&&mail=true">
					E-mail
				</a>
			</div>
				';

					if (isset($_GET['mail'])) {
						$res = shell_exec("python3 /home/shivam/Study/vs_prac/mail2_python.py 2>&1");
						echo '
			<div class="row m-3">
				<span class="display-5">
					' . $res . '
				</span>
			</div>
			';
					}

					echo '
		</div>
			<br>
			<br>
		<div class="idk">
			<span class="heading">User Rating</span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<p>4.1 average based on 254 reviews.</p>
			<hr style="border:3px solid #f1f1f1">

			<div class="row">
			<div class="side">
				<div>5 star</div>
			</div>
			<div class="middle">
				<div class="bar-container">
				<div class="bar-5"></div>
				</div>
			</div>
			<div class="side right">
				<div>150</div>
			</div>
			<div class="side">
				<div>4 star</div>
			</div>
			<div class="middle">
				<div class="bar-container">
				<div class="bar-4"></div>
				</div>
			</div>
			<div class="side right">
				<div>63</div>
			</div>
			<div class="side">
				<div>3 star</div>
			</div>
			<div class="middle">
				<div class="bar-container">
				<div class="bar-3"></div>
				</div>
			</div>
			<div class="side right">
				<div>15</div>
			</div>
			<div class="side">
				<div>2 star</div>
			</div>
			<div class="middle">
				<div class="bar-container">
				<div class="bar-2"></div>
				</div>
			</div>
			<div class="side right">
				<div>6</div>
			</div>
			<div class="side">
				<div>1 star</div>
			</div>
			<div class="middle">
				<div class="bar-container">
				<div class="bar-1"></div>
				</div>
			</div>
			<div class="side right">
				<div>20</div>
			</div>
		</div>
		</div>
		';
				}
			}
			?>
		</div>
	</div>
	<br><br><br><br>
</body>3

</html>

<!--

-->