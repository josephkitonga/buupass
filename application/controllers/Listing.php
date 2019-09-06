<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Listing extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    
    public function index()
	{
			// check Session
		$this->common->checkSession();

    	//get session data
		$session_data = $this->common->loadSession();

		 //get header data  from the databas
		$headerData = $this->common->loadHeaderData('Dashboard');

		// $data['users'] = $this->User_model->get();
		// $data['service'] = $this->Common_model->getService();

		$data = $this->input->get();
		$data['locations'] = $this->Config_model->get();
		$data['buses'] = $this->Config_model->getBuses();
  
		$this->load->view('templete/header',$headerData);
		$this->load->view('listing_view',$data);
		$this->load->view('templete/footer',$headerData);
	}

}


?>