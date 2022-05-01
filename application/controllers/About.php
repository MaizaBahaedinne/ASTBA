

	<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';

class About extends BaseController{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('howweare_model');
		$this->load->model('values_model');
		$this->load->model('vision_model');
		$this->load->model('mission_model');
	}



	public function index()
	{
		$data["newsRecords"]=$this->howweare_model->howweareInfo();
		$this->loadViews("about/view", $this->global, $data , NULL); 
	}




}


?>
