<?php

defined("BASEPATH")  OR exit("Can not access direct to directory");

class Formcontroller extends CI_Controller
{ 

	function  __construct() 
	{ 
	    parent::__construct(); 
	    $this->load->library('form_validation');
	}


    public function index()
	{
      	
      	$this->load->model("Test_Model");
	    $data['tbldata']=$this->Test_Model->selectuserall();
		$data['pic']=$this->Test_Model->selectuser();
		$this->load->view("loginview", $data);
		$addbtn=$this->input->post('btnadd');

		 if($addbtn == 'add')
        {
        	echo "Pressed";
        }
	}
	public function adduser()
	{
		$this->load->view('Adduser');
        // $this->load->model("Test_Model");
        $this->load->model("Test_Model");
		$submit=$this->input->post('btnaddu');
	    if($submit == 'adding')
	    {
			$this->Test_Model->insertuser();
			echo "Data Inserted";
			redirect("Formcontroller/index");
	    }


	}
		
   
	public function deleteuser()
	{
		$id=$this->input->get('id');
      	$this->load->model('Test_Model');
		$this->Test_Model->deleteuser($id);
		redirect("Formcontroller/index", 'refresh');

	}
	public function setdata()
	{
		$id=$this->input->get('id');
		$this->load->model('Test_Model');
        $data['field']=$this->Test_Model->selectid($id);
     	$this->edituser($data);

       

	}
	public function edituser($data)
	{
		
		$this->load->model("Test_Model");
		$this->load->view('edituser',$data);
        $btnclick=$this->input->post("btnupdate");
		if($btnclick == 'update')
        {
	       		
	            $this->updatedata();
		        $id=$this->input->get('id');
		        redirect("Formcontroller/setdata?id=$id");
		        echo "Data updated";
		    }

	      
      
    }
    public function updatedata()
    {
    	$id=$this->input->get('id');
		$this->Test_Model->updateuser($id);


    }

    public function getsearch()
    {
       $this->load->model('Test_Model');
         $this->Test_Model->serachemail();
		$this->Test_Model->selectuser();
		$data['tbldata']=$this->Test_Model->serachemail();
		$data['pic']=$this->Test_Model->selectuser();
		
		$this->load->view('loginview', $data);

   
    }
    public function formvalidation()
	{
$valid=array(
array(
	'field' => 'userid',
	'label'=> 'Email',
	'rules' =>'required'
),
array(
      'field' =>'userpassword',
      'label' => 'password',
      'rules' => 'required'
        )


);
$this->form_validation->set_rules($valid);
if($this->form_validation->run() == FALSE)
{
 $this->index();
	}
	else
	{
		echo "valid form";
	}
}
    
		

}

?>