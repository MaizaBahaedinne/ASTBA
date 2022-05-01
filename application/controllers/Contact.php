

	<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';

class Contact extends BaseController{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('howweare_model');
		$this->load->model('values_model');
		$this->load->model('vision_model');
		$this->load->model('mission_model');
	}



	public function addNew ()
	{	

		 $nom = $this->input->post('nom');
		 $email = $this->input->post('email');
		 $text = $this->input->post('text');

		  $contentInfo = array(
                                              'nom'=>$nom ,
                                              'email'=>$email ,
                                              'text'=>$text ,
                                             );


		 var_dump($contentInfo) ;

	//	redirect("/") ;
	}




}


?>
