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
	width: 450px;
	height:400px;
	margin:auto;
	border: 2px solid black;
}
.validmsg
{
	display: none;
}
.error
{
	color: red;
}

tooltip {
padding: 5px;
font-size: 11px;
opacity: 0.85;
filter: alpha(opacity=85);
background-repeat: no-repeat;
background-image: url(tooltip.gif);
}
.tooltip-inner {
padding: 5px 10px;
max-width: 200px;
pointer-events: none;
color: white;
text-align: center;
background-color: black;
border-radius: 3px;
box-shadow: 0 0 3px rgba(0, 0, 0, 0.25);
}
.tooltip-bottom {
background-position: top center;
}
.tooltip-top {
background-position: bottom center;
}
.tooltip-left {
background-position: right center;
}
.tooltip-right {
background-position: left center;
}
	</style>
  <link rel="stylesheet" type="text/css" href="css/tooltip.css">
</head>

<!-- <script type="text/javascript" src="<?php echo $this->config->base_url();?>javascript/jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->config->base_url();?>javascript/jquery.min.js"></script> -->
<script type="text/javascript" src="<?php echo $this->config->base_url();?>javascript/jquery.validate.js"></script>

<script type="text//javascript" src="<?php echo $this->config->base_url();?>javascript/jquery.tooltip.js"></script>


<br>
<header>Page header
	</header>
	<br>
	<br>
<body>
	<div>
 <form id="myform" action="" style="margin-left: 100px; " method="POST">
 	<h1> Login</h1>
 	<br>
 	<input id="tbfn" type="text" title="Name Required!" placeholder="Enter firstname" name="username" >
<br>
 	<br>
 	<input id="tbln"  type="Password" title="Password Required!" placeholder="Enter Password" name="upassword">
 	<br>
 

   <br>
 	<button type="submit" id="btnlog" name="btnlogback" value="backlogin"> Login</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <button id="btnsignup" name="btnproceed" value="welcome" >submit</button>
 </form>
</div>
<script src='http://code.jquery.com/jquery-1.9.1.min.js'></script> 
<script src='jquery.tooltip.js'></script> 

<script>

	$("p").tooltip({
content: "test",
align: 'top'

});
</script>
</body>
<br>
<footer>Page footer</footer>