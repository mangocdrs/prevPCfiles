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
<script src="<?php echo $this->config->base_url();?>js/jquery.validate.js"  type="text/javascript"></script>
</head>
<br>
<header>Page header
	</header>
	<br>

	<br>
<body>
	<div>
 <form id="myform"  style="margin-left: 100px;" action="" method="post">
 	<h1> &nbsp;Login Form</h1>

 	<br>
 	<input id="usermail" type="text" placeholder="Enetr email id" name="usermail" size="20">
 	<br>
 	<p id="puname" class="validmsg" style="color: red;">*Email Required!</p>
 	<br>
 	<input id="upass" type="password" placeholder="Enter password" name="upassword">
 	<br>
 	<p id="pupass" class="validmsg" style="color: red;">*Password Required!</p>
   <br>
 	<button id="btnlogin" type="submit" name="btnlog" value="logsave">Login</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

 	<button id="btnsignup"   name="btnsign" value="signsave">Signup</button>
  <!--    <button  id="Signup" type="button" onclick="window.location.replace('index.php/Logincontroller/signup');">Signup</button> -->
          
 </form>
</div>
<script src="<?php echo $this->config->base_url();?>js/jquery.js"  type="text/javascript"></script>
<script src="<?php echo $this->config->base_url();?>js/jquery.validate.js"  type="text/javascript"></script>
</body>
<br>

<script type="text/javascript">



	<simple jquery validation>
$('#btnlogin').click(function(){
 var name=$.trim($('#umail').val());
 var pass=$.trim($('#upass').val());

 if (name  == '')
 {
 $('#puname').css('display', 'inline');
 	return false;
 }
 if (pass == '')
 {
  $('#pupass').css('display', 'inline');
 	return false;	
 }


});


</script>


<footer>Page footer</footer>
</html>