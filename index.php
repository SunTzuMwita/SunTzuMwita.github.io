<!DOCTYPE html>
<html>
<head>
	<title>HomePage</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs
	/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/
	bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/
	jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/
	js/bootstrap.min.js"></script>
	<style type="text/css">
		li a{
			padding: 20px;
			border-radius: 3px;
			margin-top: 20px;
			color: black;	
		}
		li a:hover{
			background-color: white;
		}
		ul{
			list-style-type: none;
		}
		body{
			padding: 23px;
		}
		nav{
			padding: 10px;
			background-color: mediumseagreen;
		}
	</style>
</head>
<body>
	<nav>
			<div class="container-fluid">
				<div class="navbar-header">
				<a href="index.php" class="navbar-brand" style="color: black">M.F.A.</a>
				</div>
			<ul class="navbar-nav">
				<li><a href="index.php">Home</a></li>
				<li class="active"><a href="entries.php">Grade Entries</a></li>
				<li><a href="aboutus.php">About Us</a></li>
				<li><a href="contactus.php">Contact Us</a></li>
			</ul>
			</div>
	</nav>
	<h1>Mwita Foundation Academy</h1>
	<div class="container">
		<div id="mwita" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="item active"><img src="classroom.jpg" width="100%" height="100px"></div>
				<div class="item"><img src="art.jpg" width="100%" height="100px"></div>
				<div class="item"><img src="african.jpg" width="100%" height="100px"></div>
				<div class="item"><img src="teacher.jpg" width="100%" height="100px"></div>
			</div>
			<a href="#mwita" class="left carousel-control" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only"></span>
			</a>
			<a href="#mwita" class="right carousel-control" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only"></span>
			</a>
		</div>
	</div>
	<div class="container">
		<div class="jumbotron">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">
			<header><b>School Motto:</b></header>
			<img src="logo.jpg" width="300px" height="" class="img-rounded">
			<p>A Building With Four Walls And Tomorrow Inside.</p>
		</div>
		<div class="col-sm-4">
			<header><b>Mission Statement:</b></header>
			<img src="logo.jpg" width="300x" class="img-circle">
			<p>We give the students wings and teach them to Fly high above the rest.</p>
		</div>
		<div class="col-sm-4">
			<header><b>Vision:</b></header>
			<img src="logo.jpg" width="300px" class="img-thumbnail">
			<p>Engaging all students in partnership with family and community to become informed, compassionate, global citizens.</p>
		</div>
	</div>
	<div class="container">
		<div class="jumbotron">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
	<br>
	<footer style="text-align: center;background-color: mediumseagreen;
		padding: 10px;font-size: 23px;">
		Copyright &copy;M.F.A. <br>
		+254715434197 <br>
		&reg;Mwita Foundation Academy
	</footer>

</body>
</html>