<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Login (LoginController)
 * Login class to control to authenticate user credentials and starts user's session.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Login extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();

    }


    
    /**
     * This function used to check the user is logged in or not
     */
    function isLoggedIn()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {       
                     
            redirect('Admin/dashboard');

        }
        else
        {           
            redirect('Admin');
        }
    }
    
    
    	public function loginA($login,$password)
	{
		$json = file_get_contents("https://www.tunivisions.link/Api/AuthentificationAPI?email=".$login."&password=".$password ) ;
        
        var_dump( "https://www.tunivisions.link/Api/AuthentificationAPI?email=".$login."&password=".$password ) ;
        
        $sessionArray = json_decode($json);

        $sessionArray4 = array('userId'=>$sessionArray->userId,                    
                                        'role'=>$sessionArray->roleId,
                                        'clubID'=>$sessionArray->ClubID,
                                        'avatar'=>$sessionArray->avatar,
                                        'roleText'=>$sessionArray->role,
                                        'name'=>$sessionArray->name,
                                        'cellule' => $sessionArray->cellule,
                                        'isDeleted' => $sessionArray->isDeleted ,
                                        'SA' => $sessionArray->SA ,
                                        'isLoggedIn' => TRUE ,
                                    );

		$this->session->set_userdata($sessionArray4);
    
         
	}
        
    

/**
     * This function is used to logged out user from system
     */
    function logout() {
        $this->session->sess_destroy ();
        
        redirect ( '' );
    }
  

   



}

?>