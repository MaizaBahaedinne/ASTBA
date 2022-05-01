

	<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';

class Admin extends BaseController{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('howweare_model');
		$this->load->model('values_model');
		$this->load->model('vision_model');
		$this->load->model('mission_model');

		$this->isLoggedIn() ;
	}

	public function index()
	{
		
		$this->loadViews("admin/login", $this->global, NULL , NULL); 
	}

		public function dashboard()
	{
		$this->loadViews("admin/dashboard", $this->global, NULL , NULL); 
	}


	

/**
     * This function is used to logged out user from system
     */
    function logout() {
        $this->session->sess_destroy ();
        
        redirect ('');
    }
  



}


?>
