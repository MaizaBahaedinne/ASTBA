<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Values extends BaseController {
	public function __construct()
	{

		parent::__construct();
		$this->load->model('Values_model');
	}

	public function Edit($valuesId){
		$data["values"]=$this->values_model->valuesInfo();
		$this->loadViews("values/edit", $this->global, $data , NULL);
	}

	function editValues($valuesId){
		$value1Ar = $this->input->post('value1Ar');
		$value1Fr = $this->input->post('value1Fr');
		$value1En = $this->input->post('value1En');
		$value2Ar = $this->input->post('value2Ar');
		$value2Fr = $this->input->post('value2Fr');
		$value2En = $this->input->post('value2En');
		$value3Ar = $this->input->post('value3Ar');
		$value3Fr = $this->input->post('value3Fr');
		$value3En = $this->input->post('value3En');
		$value1icon = $this->input->post('value1icon');
		$value2icon = $this->input->post('value2icon');
		$value3icon = $this->input->post('value3icon');





		$valuesInfo = array('value1Ar'=> $value1Ar ,
			'value1Fr'=>$value1Fr,
			'value1En' =>$value1En,
			'value2Ar'=>$value2Ar,
			'value2Fr'=>$value2Fr,
			'value2En'=>$value2En,
			'value3Ar'=>$value3Ar,
			'value3Fr'=>$value3Fr,
			'value3En'=>$value3En,
			'value1icon'=>$value1icon,
			'value2icon'=>$value2icon,
			'value3icon'=>$value3icon


		);




			$resualt =  $this->values_model->editValues($valuesInfo) ;
			if( $resualt > 0 )
			{

				$this->session->set_flashdata('success', 'l\'actualité a été ajouté avec succées');
			}
			else
			{
				$this->session->set_flashdata('error', 'Mise à jour erronée ');
			}


		redirect('/Values/edit/'.$resualt)  ;





	}

}


?>
