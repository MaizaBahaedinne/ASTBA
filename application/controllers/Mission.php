<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';


class Mission extends BaseController {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mission_model');
	}

	public function Edit($missionId){
		$data["mission"]=$this->mission_model->missionInfo();
		$this->loadViews("mission/edit", $this->global, $data , NULL);
	}
	function editMission($missionId){
		$textAr = $this->input->post('textAr');
		$textFr = $this->input->post('textFr');
		$textEn = $this->input->post('textEn');






		$missionInfo = array('textAr'=> $textAr ,
			'textFr'=> $textFr ,
			'textEn'=> $textEn



		);




		$resualt =  $this->mission_model->editMission($missionInfo) ;
		if( $resualt > 0 )
		{

			$this->session->set_flashdata('success', 'l\'actualité a été ajouté avec succées');
		}
		else
		{
			$this->session->set_flashdata('error', 'Mise à jour erronée ');
		}


		redirect('/Mission/edit/'.$resualt)  ;





	}
}

?>
