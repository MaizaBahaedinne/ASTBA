<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';

class Successtory extends BaseController {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('successtory_model');
	}
	public function Edit($successtoryId){
		$data["successtory"]=$this->successtory_model->successtoryInfo();
		$this->loadViews("successtory/edit", $this->global, $data , NULL);
	}

	function editSuccesstory($storyId){
		$textAr = $this->input->post('textAr');
		$textFr = $this->input->post('textFr');
		$textEn = $this->input->post('textEn');


		$successtoryInfo = array('textAr'=> $textAr ,
			'textFr'=> $textFr ,
			'textEn'=> $textEn
		);




		$resualt =  $this->successtory_model->editSuccesstory($successtoryInfo) ;
		if( $resualt > 0 )
		{

			$this->session->set_flashdata('success', 'l\'actualité a été ajouté avec succées');
		}
		else
		{
			$this->session->set_flashdata('error', 'Mise à jour erronée ');
		}


		redirect('/Successtory/edit/'.$resualt)  ;





	}
}
?>
