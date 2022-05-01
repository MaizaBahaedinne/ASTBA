<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';

class Howweare extends BaseController{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('howweare_model');
	}




	public function Edit($howweareId){
		$data["howweare"]=$this->howweare_model->howweareInfo();
		$this->loadViews("howweare/edit", $this->global, $data , NULL);
	}

	function editHowweareId($howweareId){
		$textAr = $this->input->post('textAr');
		$textFr = $this->input->post('textFr');
		$textEn = $this->input->post('textEn');




		$howweareInfo = array('textAr'=> $textAr ,
			'textFr'=> $textFr ,
			'textEn'=> $textEn




		);




		$resualt =  $this->howweare_model->editHowweare($howweareInfo) ;
		if( $resualt > 0 )
		{

			$this->session->set_flashdata('success', 'l\'actualité a été ajouté avec succées');
		}
		else
		{
			$this->session->set_flashdata('error', 'Mise à jour erronée ');
		}


		redirect('/Howweare/edit/'.$resualt)  ;





	}




}


?>
