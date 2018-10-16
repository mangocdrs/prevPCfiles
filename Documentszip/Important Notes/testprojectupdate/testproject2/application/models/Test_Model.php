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

    public function selectuser()
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
        $firstname=$this->input->post('ufname');
        $lastname=$this->input->post('ulname');
        $email=$this->input->post('uemail');
        $password=$this->input->post('upassword');
        $dob=$this->input->post('udob');
        $userimage=$this->input->post('uimg');
        $pass=$this->input->post('upassword');
        $img=$this->input->post('uimg');

        
        if(empty($pass) && empty($img))
        {

            $data=array
            (
                'firstname' =>$firstname,
                'lastname' => $lastname,
                'email' =>$email,
                'dob' =>$dob,
                 );
                $this->db->get('UserData');
                $this->db->where('id',$id );
                $this->db->update('UserData', $data);

        }
        elseif (empty($pass)) 
        {
            $data=array
            (
                'firstname' =>$firstname,
                'lastname' => $lastname,
                'email' =>$email,
                'dob' =>$dob,
                'userimage' =>$userimage
                 );
                $this->db->get('UserData');
                $this->db->where('id',$id );
               
                $this->db->update('UserData', $data);
 
        }
        elseif (empty($img)) 
        {
             $data=array
            (
                'firstname' =>$firstname,
                'lastname' => $lastname,
                'email' =>$email,
                'password' =>$password,
                'dob' =>$dob
            
                 );
                $this->db->get('UserData');
                $this->db->where('id',$id );
               
                $this->db->update('UserData', $data);
            
        }
        else
        {
             $data=array
            (
                'firstname' =>$firstname,
                'lastname' => $lastname,
                'email' =>$email,
                'password' =>$password,
                'dob' =>$dob,
                'userimage' =>$userimage
                 );
                $this->db->get('UserData');
                $this->db->where('id',$id );
               
                $this->db->update('UserData', $data);


        }

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

    public function serachemail()
    {
          $findkey=$this->input->post('tbsearch');
        $this->db->like('email', $findkey, 'after');
        $this->db->or_like('firstname', $findkey, 'after'); 
        $this->db->or_like('lastname', $findkey, 'after');  
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


}

?>