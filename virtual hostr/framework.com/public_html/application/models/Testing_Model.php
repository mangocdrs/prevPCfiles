<?php

 class Testing_Model extends CI_Model{

public $title;
public $content;
public $dat;
public function _construct()
{
	

}

public function index()
{

}


public function getth()

{
	$this->load->database('default');

$query = $this->db->get('TableModel');
  return $query->result();

 }

}

?>