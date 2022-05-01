<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';

class Vision extends BaseController {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('vision_model');
	}

	public function Edit($visionId){
		$data["vision"]=$this->vision_model->visionInfo();
		$this->loadViews("vision/edit", $this->global, $data , NULL);
	}

	function editvision($valuesId){
		$textAr = $this->input->post('textAr');
		$textFr = $this->input->post('textFr');
		$textEn = $this->input->post('textEn');





		$visionInfo = array('textAr'=> $textAr ,
			'textFr'=> $textFr ,
			'textEn'=> $textEn


		);




		$resualt =  $this->vision_model->editVision($visionInfo) ;
		if( $resualt > 0 )
		{

			$this->session->set_flashdata('success', 'l\'actualité a été ajouté avec succées');
		}
		else
		{
			$this->session->set_flashdata('error', 'Mise à jour erronée ');
		}


		redirect('/Vision/edit/'.$resualt)  ;





	}
}

?>
