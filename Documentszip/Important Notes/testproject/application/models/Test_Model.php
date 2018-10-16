<?php

defined('BASEPATH') OR exit ('can not acces directly to directory');

class Test_Model extends CI_Model
{
  

  		public 	$firstname;
		public 	$lastname;
		public 	$email;
		public 	$password;
		public 	$dob;
		public 	$userimage;

		 function  __construct() 
	   { 
	        parent::__construct(); 

	        $this->load->database('default');
	        $this->load->helper('form');
            $this->load->helper('url');	
       }

	public function selectuserall()
	{
		
        $query=$this->db->get('UserData');

     	if($query->num_rows()>0)
     	{
     		  	return $query->result();
     	}
     	else
     	{
     		return false;
     	}

    }

    public function selectimage()
    {

    	$id= $this->input->post('userid');
    	$pass=$this->input->post('userpassword');
    	$this->db->where('email',$id);
    	$this->db->where('password',$pass);
    	$query=$this->db->get('UserData');

    	if($query->num_rows()> 0)
    	{

    		$data=$query->row_array();
    		$value=$data['userimage'];
    		return $value;
    	}
    	else

    	{
    		return false;
        }
    }

    public function selectid($id)
    {
        $this->db->get('UserData');
        $this->db->where('id',$id );
        $query=$this->db->get('UserData');
        if($query->num_rows()>0)
        {
        return $query->result();
        }
        else
        {
        return false;
        }
    }

    public function insertuser()
    {

         
        $this->firstname=$this->input->post('fname');
		$this->lastname=$this->input->post('lname');
		$this->email=$this->input->post('email');
		$this->password=$this->input->post('password');
		$this->dob=$this->input->post('dob');
		$this->userimage=$this->input->post('userimg');
 		$this->db->insert('UserData', $this);
 		if($this->db->affected_rows()>0)
 		{
 			return true;
 		}
 		else
 		{
 			return false;
 		}
 		
	}


    public function updateuser($id)
    {
        $this->firstname=$this->input->post('ufname');
		$this->lastname=$this->input->post('ulname');
		$this->email=$this->input->post('uemail');
		$this->password=$this->input->post('upassword');
		$this->dob=$this->input->post('udob');
		$this->userimage=$this->input->post('uimg');
        $this->db->get('UserData');
        $this->db->where('id',$id );
        $this->db->update('UserData', $this);

        if($this->db->affected_rows() == '1')
        {

        	return true;
        }
        else
        {
        	return false;
        }


    }

    public function deleteuser($id)
    {

		$this->db->get('UserData');
		$this->db->where('id',$id);
		$this->db->delete('UserData');

		if($this->db->affected_rows()== '1')
		{
			return true;

		}
		else
		{
            return false;
		}



    }

    public function searchuserdata($findkey)
    {
   $this->Test_Model->searchuserdata();
        $this->Test_Model->selectimage();
        $data['tbldata']=$this->Test_Model->searchuserdata();
        $data['pic']=$this->Test_Model->selectimage();
        
        $this->load->view('loginview', $data);

      
    }


}

?>