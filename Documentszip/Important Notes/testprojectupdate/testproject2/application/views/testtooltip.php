<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    
    
  </style>
  <title>TOoltip</title>
    <link rel="stylesheet" href="<?php echo $this->config->base_url()?>assets/bootstrap/bootstrap.min.css" />
    <script src="<?php echo $this->config->base_url();?>assets/jquery/jquery-3.3.1.min.js"  type="text/javascript"></script>
    <script src="<?php echo $this->config->base_url();?>assets/bootstrap/bootstrap.min.js"  type="text/javascript">  </script>
    <script src="<?php echo $this->config->base_url();?>assets/jquery/jquery.validate.js"  type="text/javascript"></script>
    <script src="<?php echo $this->config->base_url();?>assets/jquery/jquery-validate.bootstrap-tooltip.js"  type="text/javascript"></script>
</head>
<body>

<form id="myform" align="center" style="margin-top: 20px;">

    
    <input type="text" placeholder="Enter Name" name="name" >
      <br>
      <br>
      <input type="text" placeholder="Enter email" name="uemail" title="">
      <br>
      <br>
      <input type="password" placeholder="Enter password" name="upassword">
      <br>
      <br>
      <button class="btn btn-danger">Submit</button>
     




<!--  -->




<script type="text/javascript">

$(document).ready(function(){


  $("#myform").validate({
    rules:{

      uname:{

        required: true
      },
      uemail:{

        required: true
      },

      upassword:{

        required: true
      }


    },
   tooltip_options:{
    uname:{ placement: 'top',html:true},
    uemail:{ placement: 'top',html:true},
    upassword:{placement: 'top',html: true }


    }
  });
});

</script>
</body>
</html>