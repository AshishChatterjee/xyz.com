<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}
    public function blog()
	{
		$this->load->view('blog');
	}
	public function blogpage()
	{
		$this->load->view('blogpage');
	}

	public function login()
	{
		$this->load->view('login');
	}
}
