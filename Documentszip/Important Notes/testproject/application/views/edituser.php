<!DOCTYPE html>
<html>
<head>
	<title>Edituser</title>
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
	height:580px;
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
			 	<h1> &nbsp;EditUSer</h1>
			 	<?php $field;
			 	foreach ($field as $rows) { ?>
			 	
			 	<br>
			 	<input id="tbfn" type="text" placeholder="Enter firstname" value="<?php echo $rows->firstname;?>" name="ufname" >
			 	<br>
			 	<br>
			 	<input id="tbln" type="text" placeholder="Enter lastname" value="<?php echo $rows->lastname;?>" name="ulname">
			 	<br>
			    <br>
			 	<input id="tbem" type="text" placeholder=" Enter email" value="<?php echo $rows->email;?>" name="uemail" size="20">
			 	<br>
			 	<br>
			 	<input id="tbpa" type="password" placeholder="Enter password" value="<?php echo $rows->password; ?>" name="upassword">
			 	<br>
			    <br>
			 	<input id="tbdo" type="date" placeholder="Enter Dob" name="udob" value="<?php echo $rows->dob;?>" style="width: 178px;">
			 	<br>
			    <br>
			   <img src="<?php echo base_url();?>assets/images/<?php echo $rows->userimage;?>" style="width:100px; height:100px; ">
			
                <br>
                <br>
               <div class="clearfix">
               </div>
                <input type="file"  name="uimg">
			    
			    <br>
			    <br>
				<p align="text-align: center;">
				<button class="btn btn-info" type="submit" name="btnupdate"   value="update">update</button>
			
				<a href="<?php echo base_url()."Formcontroller/index"?>" class="btn btn-danger">Back</a>
				</p>
					<?php  } ?>
		</form>
	</div>

	<br>
	<br>

<script type="text/javascript">

$("#myform").validate({
    rules:{
      ufname:{
      			required: true


      },
      ulname:{
      	required: true
        
      },
      uemail:{
      			required: true,
      			email: true

      },
      upassword:{
      				
      				maxlength: 14,
      				minlength: 4


      },
      udob:{

      		required: true

      },
      uimg:{

      		required: true
      }
 

    },
messages:{

	uemail:{

		email: "Enter a valid Email"
	},
	uimg:{
		required: "Image Required"
	},
	udob:{
		required: "Dob required"
	}
},

tooltip_options:{

               						ufname:{placement:'right', html:true},
               						ulname:{placement:'right', html:true},
               	    	    	    uemail:{placement:'right', html:true},
               	    	    	    upassword:{placement:'right', html:true},
               	    	    	    udob:{placement:'right', html:true},
               	    	    	    uimg:{placement:'bottom', html:true},




               					}

});



</script>

</body>	
<footer>Page footer</footer>
</html>