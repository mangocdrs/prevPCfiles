<?php
defined("BASEPATH") OR exit ("can not access direct to directory");

class Logincontroller extends CI_Controller{

	public $data;

 function  __construct() { 
         parent::__construct(); 
      
         	$this->load->database('default');
	$this->load->library('session');
	$this->load->library('form_validation');

	// $this->load->library('jquery_validation');	

      }

	public function index()
	{


		$this->load->view('login');
        $data=$this->input->post('usermail');
	
         $_SESSION['username']=$data;

	
		$subform =$this->input->post('btnsign');
$subform1 =$this->input->post('btnlog');

if($subform1 == 'logsave')
{
	// $_SESSION['password']=$_POST['upassword'];
	// 	$_SESSION['username']=$_POST['usermail'];


			$this->load->model("Form_Model");
           
            $check=$this->Form_Model->selectemail();
            	$checkpas=$this->Form_Model->selectpass();
             if($check == true)
             {
                  if($checkpas == true)
                   { 
                          redirect('index.php/Logincontroller/welcome');


                                     }

              else
              {
              	echo "Enter a valid id or password";
              }
           
            	

            }
         
		

      

		}

		if($subform == 'signsave')

		{

redirect('index.php/Logincontroller/signup');
		} 

	}

	

	public function signup()
	{

		$this->load->view('signup');
				$subform =$this->input->post('btnproceed');
$subform1 =$this->input->post('btnlogback');

		if($subform1 == 'backlogin')
		{

redirect('index.php/Logincontroller/index');
		} 

		if($subform == 'welcome')
		{
			$_SESSION['username']=$this->input->post('email');
			$this->load->model('Form_Model');
			$check=$this->Form_Model->selectemail();
    if($check == true)
             {
             	echo "Email id reserved already";
             }
		else
		{

		$this->Form_Model->insert();
			
		redirect('/Logincontroller/welcome');
	}
		// $this->Form_Model->insert();
			
		// redirect('/Logincontroller/welcome');	
			
		}
	}
//also check existing email


		
	


	public function welcome()


	{ 


		// $data['heading']= $_POST['usermail'];
		// $data['userinfo']=$_SESSION['username'];

		if($_SESSION['username'] !=null)
		
		{
			$this->load->view('welcomepage');
        }
		
		else
       {
		redirect('Logincontroller/index');
		}	

		$logform =$this->input->post('btnlogout');
        if($logform == 'btnlogout')

		{
			session_destroy();

redirect('index.php/Logincontroller/index');
		} 
	}

	public function test()
	{
		$this->load->model('Form_Model');

		$this->Form_Model->select();
	}

	public function formvalidation()
	{
		// $this->load->library('jquery_validation');



$valid=array(
array(
	'field' => 'ufname',
	'label'=> 'First Name',
	'rules' =>'trim|regex_match[/^[A-Z]{1}[A-Za-z]{1,10}$/]'),
array(
      'field' =>'lname',
      'label' => 'Last Name',
      'rules' => 'trim|regex_match[/^[A-Z]{1}[A-Za-z]{1,10}$/]'
        ),
array(
      'field' =>'email',
      'label' => 'Email',
      'rules' => 'trim|regex_match[/^([\w\.-]+)@([\w\.-]+)\.([a-z]{2,8})$/]'
        ),
array(
      'field' =>'upassword',
      'label' => 'Password',
      'rules' => 'trim|regex_match[/^[\d]{6,12}$/]'
        )


);

$messages=  array(
 'username'=> array( 'required' =>  "username required"),
 'upassword'=> array( 'required' => "userpassword is required" )
);
// $this->jquery_validation->set_rules($valid);
// $this->jquery_validation->set_messages($messages);

$this->form_validation->set_rules($valid);
if($this->form_validation->run() == FALSE)
{
	
$this->load->view('signup');
	}
	else
	{
		$this->signup();
	}
}



}

