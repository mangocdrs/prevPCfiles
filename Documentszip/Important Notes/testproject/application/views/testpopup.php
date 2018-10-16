<!DOCTYPE html>
<html>
<head>
	<title>popup</title>
				<link rel="stylesheet" href="<?php echo $this->config->base_url()?>assets/bootstrap/bootstrap.min.css" />
    <script src="<?php echo $this->config->base_url();?>assets/jquery/jquery-3.3.1.min.js"  type="text/javascript"></script>
    <script src="<?php echo $this->config->base_url();?>assets/bootstrap/bootstrap.min.js"  type="text/javascript">  </script>
    <script src="<?php echo $this->config->base_url();?>assets/jquery/jquery.validate.js"  type="text/javascript"></script>
    <script src="<?php echo $this->config->base_url();?>assets/jquery/jquery-validate.bootstrap-tooltip.js"  type="text/javascript"></script>
</head>
<body>

<button class="btn btn-primary btn-lg" data-toggle="modal1" data-target="#myModal">
        Launch demo modal
    </button>


When i click below button

   <button id="myBtn" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
       show
    </button>
I open below popup(modal)

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
               Are you sure do you want to delete?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>	

<script type="text/javascript">
	
	// $(document).ready(function () {

 //     // Attach Button click event listener 
 //    $("#myBtn").click(function(){

 //         // show Modal
 //         $('#myModal').modal('show');
//  //    });
// });
</script>
</body>
</html>