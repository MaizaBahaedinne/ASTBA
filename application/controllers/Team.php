<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';

class Team extends BaseController {
	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		
		$response = file_get_contents('https://tunivisions.link/Api/Hierarchy');
		$data = json_decode($response);
		$this->loadViews("team/view", $this->global, $data , NULL); 
	}


}
?>
