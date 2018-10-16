<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Form_Model extends CI_Model {

public $firstname;
public $lastname;
public $email;
public $password;
public $dob;
public $isread;

 function __construct()
{
	  parent::__construct(); 
	$this->load->database('default');
	$this->load->library('session');
}
public function insert()
{
	// $pass=$this->input->post('signpassword');
	// $pass=$_POST["upassword"];
$pass=$this->input->post('signpassword');

$hpass= hash("sha256", $pass);

    // $this->firstname = $_POST['ufname'];

    $this->firstname = $this->input->post('ufname');

	// $this->lastname =$_POST['lname'];
	$this->lastname= $this->input->post('lname');
	// $this->email=$_POST['email'];
	$this->email= $this->input->post('email');

    // $this->password = hash("sha256", $pass);

    $this->password=$hpass;
	// $this->dob =$_POST['udob'];

	$this->dob =$this->input->post('udob');
	// $this->isread =$_POST['isread'];

	$this->isread=$this->input->post('isread');

	$this->db->insert('UserTable',$this);

}

public function selectpass()
{

	$some=$this->input->post('upassword');

$dpass=hash("sha256", $some);
echo $some;
$this->db->where('password',$dpass);
$query=$this->db->get('UserTable');

if($query->num_rows() >0)
{
	return true;

}
else
{
	return false;
}

}

public function selectemail()
{

	// $data=hash("sha256" , $_POST['upassword']);
	// $_SESSION['password']=$data;
$data=$_SESSION['username'];

$this->db->where('email',$data);
$query=$this->db->get('UserTable');

if ($query->num_rows() > 0)
 {
        return true;

}

else
{
	return false;
}


}

// 		$data=$_POST['usermail'];

//   $_SESSION['username']=$data;
//  $data1=hash("sha256" , $_POST['upassword']);
// $array= array("email" => $data, "password" => $data1);
// 	  $this->db->where($array);
// 	  // $this->db->where('password',$data1);
//     $query = $this->db->get('UserTable');
  
  
//     if ((empty($query->result())))
//     {
//      return true;
//     }
//     else
//     {
//     	return false;
//     }


public function signup1()
{}






}


?>