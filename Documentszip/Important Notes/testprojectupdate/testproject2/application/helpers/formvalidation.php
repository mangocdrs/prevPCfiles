<?php
if(! defined('BASEPATH') OR exit (can not acces directory directly));

if(!function_exists('formvalid'))
{

public function formvalid()
{

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
}

}

?>