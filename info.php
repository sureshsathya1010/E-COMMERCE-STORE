
<!DOCTYPE html>
<html>
	<head>
	<title>personal information  </title>
	<style>*{text-align:center; font-family:courier new;font-size: 25px;font-weight:bold;}
	/*
		body{
		background-color:powderblue;
		opacity:0.8;
		}
		*/
		body{
		background-image:url("orange.jpg"),url("vegbasket.jpg");
		background-repeat: no-repeat;
		background-attachment:fixed;
		background-size:cover;
		background-origin:padding-box; /* padding-box,content,border*/
		padding:55px 55px ;
		//background-position:right top;
		margin:50px 50px 50px 50px;
		//border:2px ridge black;
		border-width:5px 10px;
		//outline: 10px groove red;
		//outline-offset:10px;

		}

		.fill{
		border:5px solid black;
		padding:10px;
		margin:15px;
		background-color:hotpink;
		color:black;
		}

		a.one:link , a.one:visited {
		background-color:hotpink;
		color:black;
		text-align:center;
		text-decoration:none;
		padding:15px 25px;
		display:inline-block;
		}

		a.one:hover , a.one:active{
		 background-color:black;
		color:white;
		}

		.success{
		background-color:green;
		}
		.success:hover{
		background-color:white;
		}
		</style>
	</head>

	<body>
		<h1 class="fill" style="text-transform:capitalize;">FILL THE DETAILS BELOW</h1>

	<form method="post">

		<label for="name"><h4> NAME </h4></label>
		<input type="text" placeholder="enter your name" id="name" name="name">

		<label for="pass"><h4> PASSWORD </h4></label>
		<input type="password" placeholder="enter your password" id="pass" name="pass">

		<label for="mail"><h4> EMAIL </h4></label>
		<input type="email" placeholder="enter your email" id="mail" name="mail">

		<label for="address"><h4> ADDRESS </h4></label>
		<input type="text" placeholder="enter your address" id="address" name="address">
		<br>

		<label for="suggestions"><h4>suggestions</h4></label>
		<input type="text" placeholder="suggestions" id="suggestions" name="suggestions">
		<br>

		<br><input type="submit" name="submit" style="background-color:  grey; font-weight:bold;"><br>
	</form>

		<br>


<?php

$NAME = htmlspecialchars($_POST['name']);
$PASS = htmlspecialchars($_POST['pass']);
$MAIL = htmlspecialchars($_POST['mail']);
$ADD  = htmlspecialchars($_POST['address']);
$SUGG = htmlspecialchars($_POST['suggestions']);
$file ='';

$user = 'root';
$password = 'root';
$db = 'mysql';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);
$conn = new mysqli($host, $user, $password, $db, $port);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO userdetails(name,pass,mail,addr,sugg) VALUES ('$NAME','$PASS','$MAIL','$ADD','$SUGG')";

if ($conn->query($sql) === TRUE) {
	echo "<br>";
	include 'imagegif.html';

} else {
  	echo "<br><br> ENTER VALID DETAILS ABOVE";

}

$conn->close();
	?>
</br>
<pre>
<div>


<a class="one" href="avail.php" target="_blank"> NEXT</a>
</pre>
</br>
</body>
</html>
