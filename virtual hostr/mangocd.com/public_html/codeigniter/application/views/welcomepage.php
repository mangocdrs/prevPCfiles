<?php


?>
<!DOCTYPE html>
<html>
<head>


	<title>login</title>
	<style type="text/css">
		


		header,footer
{
	background-color: cyan;
	width: 100%;
	height: 50px;
	text-align:center;
	font-size: 50px;

	
}
div
{
	background-color: #00FFFF;
	width: 400px;
	height:200px;
	margin:auto;
	border: 2px solid black;
}
	</style>

</head>
<br>
<header>Page header
	</header>
	<br>
	<br>
<body>
	<div>

 	<br>
 	<h2>welcome:<?php echo $_SESSION['username'];?> </h2>

 	<br>
 	<br>
 	
<form method="POST">
 	<button style="margin-left: 175px;" type="submit" name="btnlogout" value="btnlogout">Logout</button>
 </form>
</div>
<br>
 	


</body>
<br>


<footer>Page footer</footer>
</html>