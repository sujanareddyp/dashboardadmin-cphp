<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('footer');
	}
	public function signuplist()
	{
		$this->load->view('header');
		$this->load->view('footer');
	}
	public function contactlist()
	{
		$this->load->view('header');
		$this->load->view('footer');
	}
}
