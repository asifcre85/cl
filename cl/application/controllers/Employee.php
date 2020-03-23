<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Employee extends CI_Controller {
	public function __construct(){		
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('pagination');
		$this->load->model('Emp_model');
	}
	public function index(){
		$this->load->view('employee');
	}
	public function loadData($record=0) {
		$recordPerPage = 5;
		if($record != 0){
			$record = ($record-1) * $recordPerPage;
		}      	
      	$recordCount = $this->Emp_model->getRecordCount();
      	$empRecord = $this->Emp_model->getRecord($record,$recordPerPage);
      	$config['base_url'] = base_url().'index.php/Employee/loadData';
      	$config['use_page_numbers'] = TRUE;
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';
		$config['total_rows'] = $recordCount;
		$config['per_page'] = $recordPerPage;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['empData'] = $empRecord;
		echo json_encode($data);	
	}

	public function loadData1(){
		$search=$_POST['search'];
		$this->load->view('employee');
	}
}