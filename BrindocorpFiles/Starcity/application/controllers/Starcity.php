<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Starcity extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->load->view('index');
	}
	
	public function talent_directory()
	{
		$this->load->view('header');
		$this->load->view('talent_directory');
		$this->load->view('footer');
	}
	
	
	
	public function jobs()
	{
		$this->load->view('header');
		$this->load->view('jobs');
		$this->load->view('footer');
	}
	
	public function events()
	{
		$this->load->view('header');
		$this->load->view('events');
		$this->load->view('footer');
	}
	
	public function contests()
	{
		$this->load->view('header');
		$this->load->view('contests');
		$this->load->view('footer');
	}
	
	public function blog()
	{
		$this->load->view('header');
		$this->load->view('blog');
		$this->load->view('footer');
	}
	public function starcityadmin()
	{
		
		$this->load->view('admin');
		
	}
	public function users_landing()
	{
		$this->load->view('adminheader');
		$this->load->view('users_landing');
		
	}
	
	public function all_db()
	{
		$this->load->view('adminheader');
		$this->load->view('all_db');
		
	}
	
	public function messages()
	{
		$this->load->view('adminheader');
		$this->load->view('messages');
		
	}
	
	public function upload()
	{
		$this->load->view('adminheader');
		$this->load->view('upload');
		
	}
}
