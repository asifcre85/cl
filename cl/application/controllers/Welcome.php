<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 


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
		$this->load->view('welcome_message');
	}

	public function c()
	{
		$name=$_POST['name'];
		$this->mo->c($name);
		//$data['result'] = $this->mo->read();
		$this->load->view('welcome_message');
	}

	public function u()
	{
		$name1=$_POST['name1'];
		$id=$_POST['id1'];
		
		$this->mo->u($name1,$id);
		//$data['result'] = $this->mo->read();
		$this->load->view('welcome_message');
	}

	public function d()
	{
		$name=$_POST['name'];
		$this->mo->d($name);
		//$data['result'] = $this->mo->read();
		$this->load->view('welcome_message');
	}

	public function edit()
	{
	
		$this->load->view('edit');
	}

	public function datatable()
	{
	
		$this->load->view('datatable');
	}




}

?>