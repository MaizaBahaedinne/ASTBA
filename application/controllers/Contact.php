

	<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';

class Contact extends BaseController{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('contact_model');
	}



	public function addNew ()
	{	

		 $nom = $this->input->post('nom');
		 $email = $this->input->post('email');
		 $text = nl2br($this->input->post('text'));

		  $contentInfo = array(
                                              'nom'=>$nom ,
                                              'email'=>$email ,
                                              'text'=>$text ,
                                             );

		 $this->contact_model->addContact($contentInfo) ; 

		redirect("/?c=1") ;
	}




}


?>
