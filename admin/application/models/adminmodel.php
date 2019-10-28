<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class AdminModel extends CI_model
	{
	//==========================================//
	var $db;//create a object variable for database
		function __construct() {
			parent::__construct();
			$this->db = $this->load->database('default', TRUE);//db connection
		}	
		
		public function fetchallcontacts()
		{
			$sql="select * from contact";
			$res=$this->db->query($sql);
			$alldata=$res->result();//fetch all records
			return $alldata;
			
		}
		public function deletemycontact($id)
		{
			$sql="delete from contact where id='$id'";
			$this->db->query($sql);
			return true;
			
		}
		public function editmycontact($id)
		{
			$sql="select * from contact where id='$id'";
			$res=$this->db->query($sql);
			$mycontact=$res->row(); //fetch paticular record(single)
			return $mycontact;
			
		}
		public function updatemycontact($name,$email,$mobile,$message,$cid)
		{
			$sql="update contact  set name='$name',
									 email='$email',
									 mobile='$mobile',
									 message='$message' 
									 where id='$cid'";
			$this->db->query($sql);
			return true;
			
		}
		public function savemyblogs($title,$desc,$bimage)
		{
			$sql="insert into blogs(title,description,image)
			values('$title','$desc','$bimage')";
			$this->db->query($sql);
			return true;
		}
		public function checkmylogin($email,$pass)
		{
			$sql="select * from admin where email='$email' and password='$pass'";
			
			$res=$this->db->query($sql);
			if($res->num_rows()>0)
			{
				$row=$res->row();//fetch praticular record
				
				
				$data=array("id"=>$row->id,"name"=>$row->name);//making mixed array which we need to pass to session
				
				$this->session->set_userdata($data);//setting the session variable using set_userdata()
				
				return true;
			}
			else{
				return false;
			}
		}
		public function savecontactajax($name,$email,$mobile,$message)
		{
			$sql="insert into contact(name,email,mobile,message)
			values('$name','$email','$mobile','$message')";
			$this->db->query($sql);
			return true;
		}
		public function deletecontactajax($cid)
		{
			$sql="delete from contact where id='$cid'";
			$this->db->query($sql);
			return true;
		}
		public function editcontactajax($cid)
		{
			$sql="select * from contact where id='$cid'";
			$res=$this->db->query($sql);
			$mydata=$res->row();
			return $mydata;
		}
		public function updatecontactajax($name,$email,$mobile,$message,$id)
		{
			$sql="update contact set name='$name',
									email='$email',
									mobile='$mobile',
									message='$message'
									where id='$id'";
			$this->db->query($sql);
			return true;
		}
	//===============================================//
	}//adminmodel closes




?>