<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
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
	height:400px;
	margin:auto;
	border: 2px solid black;
}
.validmsg
{
	display: none;
}
	</style>
	<script src="<?php echo $this->config->base_url();?>js/jquery.js"  type="text/javascript"></script>

</head>
<br>
<header>Page header
	</header>
	<br>
	<br>
<body>
<?php echo validation_errors(); ?>
</body>
<footer>Page footer</footer>