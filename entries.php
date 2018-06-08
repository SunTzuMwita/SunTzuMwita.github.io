<!DOCTYPE html>
<html>
<head>
	<title>Grading System</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
	<nav class="navbar-fixed-top">
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
	<br><br>
	<h1>Mwita Foundation Academy</h1>

	<form action="grades.php" method="POST">
		Student Name: <br>
		<input type="text" name="studentname" required=""
		placeholder="Enter Full Name">
		<br>
		Admission Number: <br>
		<input type="text" name="adm" required=""
		placeholder="Enter Admission Number" maxlength="4">
		<br>
		<label>Subject Scores</label><br>
		Mathematics:	<input type="text" name="math" required="" 
		placeholder="Points" maxlength="2"><br><br>
		English:	<input type="text" name="eng" required="" 
		placeholder="Points" maxlength="2"><br><br>
		Kiswahili:	<input type="text" name="swahili" required="" 
		placeholder="Points" maxlength="2"><br><br>
		Physics:	<input type="text" name="phyc" required="" 
		placeholder="Points" maxlength="2"><br><br>
		Biology:	<input type="text" name="bio" required="" 
		placeholder="Points" maxlength="2"><br><br>
		Chemistry:	<input type="text" name="chem" required="" 
		placeholder="Points" maxlength="2"><br><br>
		Computer Studies:	<input type="text" name="comp" required="" 
		placeholder="Points" maxlength="2"><br><br>
		<input type="submit" name="Submit">
		<input type="reset" name="Reset">
	</form>
	<br>
	<footer style="text-align: center;background-color: mediumseagreen;
		font-size: 23px;">
		Copyright &copy;M.F.A. <br>
		+254715434197 <br>
		&reg;Mwita Foundation Academy
	</footer>
</body>
</html>