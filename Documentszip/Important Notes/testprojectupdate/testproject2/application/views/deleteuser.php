<!DOCTYPE html>
<html>
<head>
	<title>Deleteuser</title>
					<style type="text/css">		
				header,footer
				{
					background-color: cyan;
					width: 100%;
					height: 50px;
					text-align:center;
					font-size: 50px;	
				}
				#formdiv
				{
					background-color: #00FFFF;
					width: 500px;
					height:400px;
					margin:auto;
					border: 2px solid black;
				}
				

					</style>

							<link rel="stylesheet" href="<?php echo $this->config->base_url()?>assets/bootstrap/bootstrap.min.css" />
    <script src="<?php echo $this->config->base_url();?>assets/jquery/jquery-3.3.1.min.js"  type="text/javascript"></script>
    <script src="<?php echo $this->config->base_url();?>assets/bootstrap/bootstrap.min.js"  type="text/javascript">  </script>
    <script src="<?php echo $this->config->base_url();?>assets/jquery/jquery.validate.js"  type="text/javascript"></script>
    <script src="<?php echo $this->config->base_url();?>assets/jquery/jquery-validate.bootstrap-tooltip.js"  type="text/javascript"></script>

</head>


<br>
<header>Page header
		</header>
		<br>
		<br>
<body>
	   <div id="formdiv">
			 <form id="myform" action="" style="margin-left: 100px;" method="POST">
			 	<h1>Delete User</h1>
			 	<br>
			 	<input id="tbfn" type="text"  placeholder="Enter email" name="umail">
				<br>
				<br>
				<p style="text-align: center;">
		      	<button type="submit" id="btnlog" name="btnlogback" style="" value="backlogin"> Delete</button>
				<p> 
			</form>
				<br>
				<br>
				<br>
		</div>


<script type="text/javascript">
	
	$(document).ready(function(){
$("#myform").validate({
	rules:{

		umail:{
			required: true,
			email: true
		}
	},
		 messages: {
       umail:{
                required: "Enter your Email",
                email: "Enter a valid email.",
            },
            tooltip_option:{

            	umail:{placement:'right',html:true}
            }

	
}

});


	});
</script>
</body>
<br>
<footer>Page footer</footer>