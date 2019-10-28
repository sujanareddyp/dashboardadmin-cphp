<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminMain extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('adminmodel');
		$this->load->library('session');
		
		if($this->session->userdata("id")=="")
		{
			$this->session->set_flashdata("msg", "Sorry, Unauthorized access!");
			header("location:index.php");
		
		}
	}//contructor closes
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function signuplist()
	{
		$this->load->view('header');
		$this->load->view('header');
		$this->load->view('footer');
	}
	public function contactlist()
	{
		$this->load->view('header');
		$data['cont']=$this->adminmodel->fetchallcontacts();
		$this->load->view('contactlist',$data);
		$this->load->view('footer');
	}
	public function deletecontact()
	{
		$id=$_REQUEST['id'];
		$status=$this->adminmodel->deletemycontact($id);
		if($status==true){
		$this->session->set_flashdata("msg","Record deleted successfully");
		header("Location:contactlist.php");
		}
	}
	public function editcontact()
	{
		$id=$_REQUEST['id'];
		$data['econt']=$this->adminmodel->editmycontact($id);
		$this->load->view('header');
		$this->load->view('editcontact',$data);
		$this->load->view('footer');
		
		
		
	}
	public function updatecontact()
	{
		$name=$_POST['fname'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$message=$_POST['msg'];
		$cid=$_POST['cid'];
		$status=$this->adminmodel->updatemycontact($name,$email,$mobile,$message,$cid);
		if($status==true)
		{
			$this->session->set_flashdata("msg","contact updated successfully");
			header("Location:contactlist.php");
		}
		else{
			$this->session->set_flashdata("msg","some error while updating");
			header("Location:editcontact.php");
		}
		
		
	}
	public function addblogs()
	{
		$this->load->view('header');
		$this->load->view('addblogs');
		$this->load->view('footer');
		
	}
	public function saveblogs()
	{
		$title=$_POST['title'];
		$desc=$_POST['description'];
		$bimage=$_FILES['blogimage']['name'];
		
		move_uploaded_file($_FILES['blogimage']['tmp_name'],"assets/blogs/".$bimage);
		$status=$this->adminmodel->savemyblogs($title,$desc,$bimage);
		if($status==true)
		{
			$this->session->set_flashdata("msg","blogs Uploaded");
			header("Location:addblog.php");
		}
	}
	public function logout()
	{
		$data=array("id"=>"","name"=>""); 
		//setting the array key to blank and passing it to set_userdata()
		$this->session->set_userdata($data);
		$this->session->set_flashdata("msg","You have logged out successfully.");
		header("Location:index.php");//1)check in routes
		
	}
	public function addcontactajax()
	{
		$this->load->view('header');
			$this->load->view('addcontactajax');
		$this->load->view('footer');
		
	}
	public function savecontactajax()
	{
		$name=$_POST['n'];//here we will use key given in myajax.js file to mydata json variable
		$email=$_POST['e'];
		$mobile=$_POST['mob'];
		$message=$_POST['mesg'];
		$status=$this->adminmodel->savecontactajax($name,$email,$mobile,$message);
		if($status==true)
		{
			echo"data saved successfully";
			
		}
		else{
			echo("some error");
		}
		
	}
	public function contactlistajax()
	{
		$this->load->view('header');
		$data['cont']=$this->adminmodel->fetchallcontacts();
		$this->load->view('contactlist2',$data);
		$this->load->view('footer');
		
	}
	public function deletecontactajax()
	{
		$cid=$_POST['cid']; //this is the key passed in json variable mydata
		$status=$this->adminmodel->deletecontactajax($cid);
		if($status==true)
		{
			echo "record deleted successfully";
		}
		else{
			echo"some error";
		}
	}
	public function editcontactajax()
	{
		$cid=$_POST['cid'];
		$alldata['econt']=$this->adminmodel->editcontactajax($cid);
		$row=$alldata['econt'];
		echo"<form class='form-horizontal'>";
			echo"<div class='form-group'>
					<label>Name</label>
					<input type='text' name='fname' id='efname'class='form-control' value='$row->name' />
				</div>";
			echo"<div class='form-group'>
					<label>Email</label>
					<input type='text' name='email' id='eemail'class='form-control' value='$row->email' />
				</div>";
			echo"<div class='form-group'>
				<label>Mobile</label>
				<input type='text' name='mobile' id='emobile'class='form-control' value='$row->mobile'/>
			</div>";
			echo"<div class='form-group'>
				<label>id</label>
				<input type='text' name='id' id='eid'class='form-control' value='$row->id' readonly/>
			</div>";
			echo"<div class='form-group'>
				<label>Message</label>
				<textarea name='msg' id='emsg' class='form-control' >$row->message</textarea>
			</div>";
			echo"<div class='form-group'>
				
				<button type='button'  onclick='validateupdatecontact()'class='btn btn-primary btn-block'>Update</button>
			</div>";
		echo"</form>";
		
	}
	public function updatecontactajax()
	{
		$name=$_POST['n'];//here we will use key given in myajax.js file to mydata json variable
		$email=$_POST['e'];
		$mobile=$_POST['mob'];
		$message=$_POST['mesg'];
		$id=$_POST['eid'];
		$status=$this->adminmodel->updatecontactajax($name,$email,$mobile,$message,$id);
		if($status==true)
		{
			echo"data saved successfully";
			
		}
		else{
			echo("some error");
		}
		
		
	}
//===================================================================//
}//admin modelcloses
