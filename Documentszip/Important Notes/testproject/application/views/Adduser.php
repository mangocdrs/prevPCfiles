<!DOCTYPE html>
<html>
<head>
	<title>adduser</title>
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
	height:500px;
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
	    <form id="myform" action="" style="margin-left: 100px; " method="POST">
		 	<h1> &nbsp;AddUSer</h1>
		 	<br>
		 	<input id="tbfn" type="text" placeholder="Enter firstname" name="fname" >
		 	<br>
		 	<br>
		 	<input id="tbln" type="text" placeholder="Enter lastname" name="lname">
		 	<br>
		    <br>
		 	<input id="tbem" type="text" placeholder=" Enter email" name="email" size="20">
		 	<br>
		 	<br>
		 	<input id="tbpa" type="password" placeholder="Enter password" name="password">
		 	<br>
		 	<br>
		 	<input id="tbdo" type="date" placeholder="Enter Dob" name="dob" style="width: 178px;">
		 	<br>
            <br>
		    <input type="file" src="assets/images/" name="userimg">
		    <br>
			<br>
		    <p align="text-align: center;">
			<button type="submit" name="btnaddu" class="btn btn-default btn-danger" value="adding" >Adduser</button>
		
			<a href="<?php echo base_url()."Formcontroller/index"?>" class="btn btn-danger">Back</a>
			</p>
			<br>
			<!-- <a href="<?php echo base_url()."Formcontroller/index"?>" class="btn btn-default btn-danger  ">Login</a>	 -->
	 	</form>
	</div>

	<br>
	<br>


<script type="text/javascript">
	$(document).ready(function(){
         $("#myform").validate({
               rules:{

               	fname:{
               	required: true
               	// regex:/^[A-Z]{1}[\w]$/

               	},
               	lname:{

               		required: true


               	},
               	email:{
               		required:true,
               		email: true


               	},
               	password:{

					required:true,
					minlength:4,
					maxlength:14
               	},
               	dob:{

               		required:true
               	},
               	userimg:{
               		required:true

               	}


               },

               tooltip_options:{

               						fname:{placement:'right', html:true},
               						lname:{placement:'right', html:true},
               	    	    	    email:{placement:'right', html:true},
               	    	    	    password:{placement:'right', html:true},
               	    	    	    dob:{placement:'right', html:true},
               	    	    	    userimg:{placement:'right', html:true},




               					}


         });




	});



</script>
</body>
<footer>Page footer</footer>
</html>