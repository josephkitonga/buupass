<?php defined('BASEPATH') or exit('No direct script access allowed');
// ini_set('display_errors', 0);
class Common
{
    protected $ci;
   
    public function __construct()
    {
        $this->ci = &get_instance();
    }


    public function loadSession()
    {
        return $this->ci->session->userdata('Xu6LWd4RjJFuQXFdNC2QL9PnfEgrlg');
    }

    public function loadHeaderData($Menue)
    {
	  //Load session	
        $session_data = $this->loadSession();

    //load model
        // $this->ci->load->model('Staff_model');
        // $this->ci->load->model('Maintenance_model');
	 
	  // get data from the database
        $headerData['first_name'] = $session_data['first_name'];
        $headerData['last_name'] = $session_data['last_name'];
        $headerData['user_id'] = $session_data['user_id'];
        $headerData['email'] = $session_data['email'];
        $headerData['user_type'] = $session_data['user_type_id'];
        $headerData['admin'] = $session_data['admin'];
        $headerData['user_account_id']  = $session_data['user_account_id'];
        
        $headerData["module"] = $Menue;

        // $headerData['service'] = $this->ci->Common_model->getService();

        // $headerData['Prefix'] = $staffInfoassocArray;
        // $headerData['Module'] = $this->ci->Maintenance_model->getModule();
        // $headerData['UserRights'] = $this->ci->Maintenance_model->getUserRights();
        // $headerData['staffinfo'] = $this->ci->Staff_model->get($session_data['staff_id']);

        return $headerData;
    }

    public function checkSession()
    {
     //check Session
        $Session = $this->ci->session->userdata('Xu6LWd4RjJFuQXFdNC2QL9PnfEgrlg');
        if (empty($Session)) {
     	//If no session, redirect to login page
            // redirect('login', 'refresh');
        }
        
    //     $session_data = $this->loadSession();
    //     if ($session_data['reset']==0) {
    //      $this->ci->session->set_flashdata('message',"Oops! Your account has been deactivated please reset your Password"); 
    //        redirect('Reset', 'refresh');
    //     }

    //    if ($session_data['status_id']==0) {
    //      $this->ci->session->set_flashdata('message',"Oops! Your account has been deactivated please Contact Us"); 
    //        redirect('login', 'refresh');
    //     }
        

    }
   
    // unique ids
    function uniqidReal($lenght = 13)
    {
    // uniqid gives 13 chars, but you could adjust it to your needs.
        if (function_exists("random_bytes")) {
            $bytes = random_bytes(ceil($lenght / 2));
        } elseif (function_exists("openssl_random_pseudo_bytes")) {
            $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
        } else {
            throw new Exception("no cryptographically secure random function available");
        }
        return substr(bin2hex($bytes), 0, $lenght);
    }

}

/* End of file Common.php */
/* Location: ./application/libraries/Common.php */