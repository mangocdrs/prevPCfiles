<?php

defined('BASEPATH') OR exit('No direct script access allowed');

 class Blog2 extends CI_Controller {



 	public function index()
 	{

 // $this->load->view('blogview');
 $this->load->view('practice/header');
  $this->load->view('practice/footer');
 	}

 	public function loadhelp()
 	{
 		$this->load->helper('new_helper');

 		echo test_method("Help is not available");
 	}


 	public function loadlib()
 	{
 		$this->load->library('form_validation');
 	}
 }
?>