<?php

defined("BASEPATH")  OR exit("Can not access direct to directory");

class Formcontroller extends CI_Controller
{ 

	function  __construct() 
	{ 
	    parent::__construct(); 
	}


    public function index()
	{
      	
      	$this->load->model("Test_Model");
	    $data['tbldata']=$this->Test_Model->selectuserall();
		$data['pic']=$this->Test_Model->selectimage();
	    $this->load->view("loginview", $data, 'refresh'); 
	}

	public function searching()
	{
		  $findkey=$this->input->post('searchfield');
         $this->load->model('Test_Model');
         $this->Test_Model->searchuserdata($findkey);
		// $this->Test_Model->selectimage();
		// $data['tbldata']=$this->Test_Model->searchuserdata();
		// $data['pic']=$this->Test_Model->selectimage();
		
		// $this->load->view('loginview', $data);

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
	        $pass=$this->input->post('upassword');
	        if(!empty($pass))
	        {
	         		
	            $this->updatedata();
		        $id=$this->input->get('id');
		        redirect("Formcontroller/setdata?id=$id");
		        echo "Data updated";
	        }
	        else
	        {
	         	redirect("Formcontroller/index");
	        }
        }

    }
    public function updatedata()
    {
    	$id=$this->input->get('id');
		$this->Test_Model->updateuser($id);


    }

    public function test1()
    {

    	$this->load->view("testpopup");
    	
    }
		

}

?>