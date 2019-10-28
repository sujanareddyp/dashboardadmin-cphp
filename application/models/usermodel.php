<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class UserModel extends CI_model
	{
	//==========================================//
	var $db;//create a object variable for database
		function __construct() {
			parent::__construct();
			$this->db = $this->load->database('default', TRUE);//db connection
		}	
		
		public function savecontact($name,$email,$mobile,$message)
		{
			$sql="insert into contact(name,email,mobile,message)
			values('$name','$email','$mobile','$message')";
			$this->db->query($sql);
			return true;
		}
		
		
		
	//===============================================//
	}//model closes




?>