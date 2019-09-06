<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
		
		$data['userType'] = $this->User_model->getUserType();
		$data['Country'] = $this->Common_model->getCountry();
		$data['service'] = $this->Common_model->getService();
		$data['Gender'] = $this->Common_model->getGender();

		$this->load->view('user/register_view',$data);
	}


	 
    public function VerifyReg(){
	    //Field validation succeeded.  Validate against database
	    $email = $this->input->post('email');
		$password = $this->input->post('reg_password');
		$userArr = $this->input->post();
		$userArr['user_id'] = uniqid();
		$userArr['password'] = $password;
		unset($userArr['conf_password']);
		unset($userArr['reg_password']);

	    //query the database
	    $result = $this->User_model->login($email, $password);

	    if ($result) {	 
	    // return true;
	    echo 'exists';
	        // redirect('Home', 'refresh');

	    // print_r($userArr);
	    } else {
		
			$this->User_model->addUser($userArr);
			
	    //  $this->form_validation->set_message('check_database', 'Invalid username or password');
	     echo 'sucess';
	    // return false;

	     // print_r($userArr);
	    }

    }
}
