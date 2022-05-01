<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Media extends BaseController {

public function __construct()
    {
        parent::__construct();
        $this->load->model('media_model');
        $this->load->model('news_model');


    }

    public function index()
    {

        $data["albums"]=$this->media_model->albumListing();
        foreach ($data["albums"]  as $album ) {

           $album->contentRecords =$this->media_model->contentListing($album->albumId);
            $album->cover  =$this->media_model->Cover($album->albumId);

        }
       
        $data["newsRecords"]=$this->news_model->newsListing();
      $this->loadViews("media/view", $this->global, $data , NULL); 

      
    }


    public function Add()
    {
        $this->loadViews("media/new", $this->global, NULL , NULL); 
    }


    function addNew()
    {
                        $titre = $this->input->post('titre');
                        $description = $this->input->post('description');

                        $albumInfo = array('titre'=> $titre ,
                                              'description'=>$description,
                                             );

                       $albumId =  $this->media_model->addAlbum($albumInfo) ; 

                      
                        // Count total files
                         $countfiles = count($_FILES['media']['name']);
                     
                         // Looping all files
                         for($i=0;$i<$countfiles;$i++){
                           $filename = $_FILES['media']['name'][$i];
                           
                           // Upload file
                          if(move_uploaded_file($_FILES['media']['tmp_name'][$i],'uploads/media'.$filename) )
                          {

                            $contentInfo = array(
                                              'media'=>$filename ,
                                              'albumId'=>$albumId 
                                             );
                            $this->media_model->addContent($contentInfo) ; 
                          }
                            
                         }
                     
                       
                        
                    
                           if( $albumId > 0 )
                           {

                                $this->session->set_flashdata('success', 'l\'actualité a été ajouté avec succées');
                           }
                            else
                            {
                                $this->session->set_flashdata('error', 'Mise à jour erronée ');
                            } 
                    
                          
                          redirect('/Media/Add/')  ;
    }




	public function mediaListing()
	{
		$data["albumRecords"]=$this->media_model->albumListing();
       
		$this->loadViews("media/album", $this->global, $data , NULL); 
    }
    
    public function mediaById($albumId){

        $data["album"]=$this->media_model->albumContent($albumId);
		$this->loadViews("media/view", $this->global, $data , NULL); 

    }


	




}
