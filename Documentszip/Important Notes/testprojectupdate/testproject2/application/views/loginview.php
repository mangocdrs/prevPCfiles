<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
					width: 450px;
					height:350px;
					margin:auto;
					border: 2px solid black;
				}
				p{
					display:none;
					color: red;
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
		<?php echo validation_errors(); ?>
	     <div id="formdiv">
	     	
	     	<?php echo form_open('formcontroller/formvalidation'); ?>
			<form id="myform" action="" style="margin-left: 100px; " method="POST">

			
			 	<br> &emsp; &emsp; 
			 	<img  src="<?php echo base_url();?>assets/images/<?php echo $pic;?>" style="width:100px;height:100px; border-radius:55px;"  onerror="this.src='<?php echo base_url();?>assets/images/default.jpeg';">
		<div class="clearfix"></div>
			    <br>
			 	<input id="tbem"  placeholder="Enter Email Id"    name="userid" >
				<br>
				<p id="puid">Name Required!</p>
			 	<br>
			 	<input id="tbpas"  type="password" placeholder="Enter Password" name="userpassword" >
			 	<br>

			    <br>
			    <br>
			&emsp; &emsp;&emsp; 
			 	<button type="submit" class="btn btn-danger btn-default " id="btnlog" name="btnlogin" style="" value="login" > Login</button>
			 
<br>
<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 	 <a  href="<?php echo base_url()."formcontroller/adduser"?>" class="btn btn-default btn-danger ">Adduser</a>	
		 	</form> 
	<?php echo form_close();?>	 		
		 
			 <br>
			 <br>
			 <br>
			 <form id="myform2" action="<?php echo base_url();?>Formcontroller/getsearch" method="POST">
			 	<div>
			 		<div class="col-md-5 pull-right">
                   <button type="submit" class="btn btn-default btn-danger " name="btnsearch"   value="search"> Search </button> 
                   <a class="btn btn-default btn-danger pull-right" href="<?php echo base_url()."formcontroller/index"?>">	Show All
					</a>
					 </div>
					 <div class="pull-right  col-md-7">
						<input type="text" class="form-control" name="tbsearch">
					</div>
					</div>

					
					

				
				
</form>



			
		 </div>
	
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
		 <div align="center">
		  	<table border="1" class="table  table-responsive">
				
					<thead>
					<tr>
						
					<th>Id</th>
					<th>FirstName</th>
					<th>LastName</th>
					<th>Email</th>
					<!-- <th>Password</th> -->
					<th>DOB</th>
					<th>Image</th>
					<th>Edit</th>
					<th>Delete</th>

					</tr>
					</thead>
					<tbody>
					<?php
					foreach ($tbldata as $row) {
					?>
					<tr>
					     <td><?php echo $row->id;?> </td>
					     <td><?php echo $row->firstname;?></td>                                       
					     <td><?php echo $row->lastname; ?></td>
					     <td><?php echo $row->email; ?></td>
					    <!--  <td><?php echo $row->password; ?></td> -->
					     <td><?php echo $row->dob;?> </td>
					      <td> 
					     <img src="<?php echo base_url();?>assets/images/<?php echo $row->userimage;?>" width="50" height="40">
					     </td>
					      <td><a href="<?php echo base_url()."formcontroller/setdata?id=".$row->id ?>" <button class="btn btn-info" name="btnedit">Edit</button></td> </a>
					    
					      <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal" >Delete</a>
					      </button></td>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Deleting User</h4>
            </div>
            <div class="modal-body">
                Do you want to delete?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
           <a href="<?php echo base_url()."formcontroller/deleteuser?id=".$row->id ?>" class="btn btn-danger">Yes</a>
            </div>
        </div>
    </div>
</div>

					</tr>
					<?php  } ?>

					</tbody>

					 </table>
					
					</div>

<script>
$(document).ready(function(){


$("#myform").validate({

	rules:{
		userid:{
			required: true,
			email: true
		},
		userpassword:{
           required:true,
           maxlength:14,
           minlength:4
		}
	},
	tooltip_option:{

		userid:{placement: 'right',html:true},
		userpassword:{placement: 'bottom',html:true}
	}



});
	});
</script>

	</body>
	<br>
<footer>Page footer</footer>