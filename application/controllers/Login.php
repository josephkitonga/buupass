<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->model('User_model');
    }

    function index() {

    	// $this->load->view('templetes/header_view');
		$this->load->view('user/login_view');
        
    }


    public function VerifyLogin(){
	    //Field validation succeeded.  Validate against database
	    $email = $this->input->post('email');
	    $password = $this->input->post('password');

	    //query the database
	    $result = $this->User_model->login($email, $password);

	    if ($result) {
	     $sess_array = array();
	    foreach ($result as $row) {
	    $sess_array = array('user_id' => $row->user_id,'first_name' => $row->first_name,'last_name' => $row->last_name,'email' => $row->email,'user_type_id'=>$row->user_type_id,'reset'=> $row->reset,'admin' => $row->admin,'status_id'=>$row->status_id,'user_account_id'=>$row->user_account_id);
	     $this->session->set_userdata('Xu6LWd4RjJFuQXFdNC2QL9PnfEgrlg', $sess_array);
	    }
	    // return true;
	    echo 'sucess';
	        // redirect('Home', 'refresh');
	    } else {

	    //  $this->form_validation->set_message('check_database', 'Invalid username or password');
	     echo 'errr';
	    // return false;
	    }

    }


        public function Logout()
        {

        $this->session->unset_userdata('Xu6LWd4RjJFuQXFdNC2QL9PnfEgrlg');
        session_destroy();
        redirect('home', 'refresh');
        }



}
        

?>