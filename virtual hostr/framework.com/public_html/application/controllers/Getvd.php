<?php

defined("BASEPATH") OR exit("Do not direct access to directory");

class Getvd extends CI_Controller {


	public  function  index()
	{


		// $data= array(
		// 	'title' => 'getbyarray',
		// 	'heading' => 'setting view values',
		// 	'message' => 'message about view value set by array in Controller check code for more details');
$data['title']='my new title';
$data['heading']='new heading';
$data['message']='new message';
	$this->load->view('practice/arrayview',$data);


	} 


	public function foreach1()
	{
	$data['title']= 'foreachtilte';
	$data['listdo']= array ('cleanhouse','call mon','run errands');
$data['heading']='Heading for Foreach loop';

$this->load->view('practice/foreachview',$data);

	}

	public function getmodel()
	{
	
		
		$this->load->model('Testing_Model');
		$data['h']=$this->Testing_Model->getth();
		$this->load->view('viewdata', $data);


	}



}

?>