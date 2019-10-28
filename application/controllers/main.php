<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Main extends CI_controller
{
	function __construct() {
		parent::__construct();
		$this->load->model('usermodel');
		$this->load->library('session');
	}

//==========================================================================//
	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function homepage()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function aboutpage()
	{
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}
	public function servicepage()
	{
		$this->load->view('header');
		$this->load->view('services');
		$this->load->view('footer');
	}
	public function portfoliopage()
	{
		$this->load->view('header');
		$this->load->view('portfolio');
		$this->load->view('footer');
	}
	public function contactpage()
	{
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}
	public function savecontact()
	{
		$name=$_POST['fname'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$message=$_POST['msg'];
		$status=$this->usermodel->savecontact($name,$email,$mobile,$message);
		if($status==true)
		{
			$this->session->set_flashdata("msg","data Saved successfully");
			header("location:contact.php");
		}
		
	}
//==================================================================================//	
}


?>