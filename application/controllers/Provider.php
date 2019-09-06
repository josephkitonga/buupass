<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Provider extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index()
	{
			// check Session
		$this->common->checkSession();

    	//get session data
		$session_data = $this->common->loadSession();

		 //get header data  from the databas
		$headerData = $this->common->loadHeaderData('Dashboard');

		$serviceID = $this->uri->segment(2);


		$data['users'] = $this->User_model->get();
		$data['service'] = $this->Common_model->getService();
		$data['serviceProviders'] = $this->Common_model->getUserService($serviceID);
		$data['serviceID'] = get_service_name($serviceID);
		
		$this->load->view('templete/header_white',$headerData);
		$this->load->view('service/listing_view',$data);
		$this->load->view('templete/footer',$headerData);
	}


}
