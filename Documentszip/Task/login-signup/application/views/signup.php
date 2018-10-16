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
	<script src="<?php echo $this->config->base_url();?>js/jquery.validate.js"  type="text/javascript"></script>

</head>
<br>
<header>Page header
	</header>
	<br>
	<br>
<body>
<?php echo validation_errors(); ?>
<?php echo form_open("Logincontroller/formvalidation"); ?>

	<div>
 <form action="" style="margin-left: 100px; " method="post">
 	<h1> &nbsp;Signup Form</h1>
 	<br>
 	<input id="tbfn" type="text" placeholder="Enter firstname" name="ufname" >
 	<br>
 	<p id="pfn" class="validmsg" style="color: red;">*Firstname Required!</p>

 	<br>
 	<input id="tbln" type="text" placeholder="Enter lastname" name="lname">
 	<br>
 	<p id="pln" class="validmsg" style="color: red;">*Lastname Required!</p>

   <br>
 	<input id="tbem" type="text" placeholder=" Enter email" name="email" size="20">
 	<br>
 	<p id="pem" class="validmsg" style="color: red;">*Email Required!</p>

 	<br>
 	<input id="tbpa" type="password" placeholder="Enter password" name="signpassword">
 	<br>
 	<p id="ppa" class="validmsg" style="color: red;">*Password Required!</p>

 	<br>
 	<input id="tbdo" type="date" placeholder="Enter Dob" name="udob" style="width: 178px;">
 	<br>
 	<p id="pdo" class="validmsg" style="color: red;">*Dob Required!</p>

<br>
     <input id="cbis" type="checkbox" name="isread" class="roles" value="1" > I have read this
     <br>
      	<p id="pis" class="validmsg" style="color: red;">*Please check this!</p>

   <br>
 	<button type="submit" id="btnlogi" name="btnlogback" value="backlogin"> Login</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <button id="btnsignup" name="btnproceed" value="welcome" >submit</button>
 </form>
</div>
<?php form_close(); ?>
</body>
<br>
<script type="text/javascript">

 


	$('#btnsignup').click(function(){
 var fname=$.trim($('#tbfn').val());
 var lname=$.trim($('#tbln').val());
 var email=$.trim($('#tbem').val());
  var pass=$.trim($('#tbpa').val());
 
  var dob=$.trim($('#tbdo').val());
 var isr=$('#cbis').val();

 if (fname  == '')
 {
 $('#pfn').css('display', 'inline');
 	return false;
 }
 if (lname == '')
 {
  $('#pln').css('display', 'inline');
 	return false;	
 }
   if (email == '')
 {
  $('#pem').css('display', 'inline');
 	return false;	
 }

  if (pass == '')
 {
  $('#ppa').css('display', 'inline');
 	return false;	
 }


  if (dob == '')
 {
  $('#pdo').css('display', 'inline');
 	return false;	
 }

if($('.roles:checkbox:checked').length == 0)
{
 $('#pis').css('display', 'inline');
 return false;
}
    
});




</script>

<footer>Page footer</footer>