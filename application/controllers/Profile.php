<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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
        
        $data['Profile'] = $this->User_model->getUsers($session_data['user_id']);
        $data['userType'] = $this->User_model->getUserType();
		$data['Country'] = $this->Common_model->getCountry();
		$data['service'] = $this->Common_model->getService();
		$data['mediaType'] = $this->Common_model->getMediaType();
		
		$this->load->view('templete/header',$headerData);
		$this->load->view('user/profile_view',$data);
		$this->load->view('templete/footer',$headerData);
	}


	public function updateUserProfile($value='')
	{
		//get session data
		$session_data = $this->common->loadSession();
		$service_id = $this->input->post('service_id');
		$service_description = $this->input->post('service_description');
		$uploadArray = array();
		$refArray = array();
		$ip = $this->input->ip_address();
        $filePath = './assets/uploads/';
        $config['upload_path']          = $filePath;
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);

        $serviceArray = array('user_service_id' => uniqid(),'user_id' => $session_data['user_id'],'service_id'=>$service_id,'description'=>$service_description,'system_date'=>date('Y-m-d'));

        for ($i=0; $i <=5 ; $i++) { 

        	if ($this->input->post('ref_name_'.$i)) {

                $refData = array('referee_id' => uniqid(),'user_id' => $session_data['user_id'],'ip' =>$ip,'name' => $this->input->post('ref_name_'.$i),'phone'=>$this->input->post('ref_phone_'.$i));
             	// array_push($refArray, $refData);
             	$this->Common_model->insertReferee($refData);
        	}
            

	        if (!$this->upload->do_upload('docs_'.$i))
	        {
	                $error = array('error' => $this->upload->display_errors());

	                // print_r($error);
	        }
	        else
	        {       $upload_data = $this->upload->data();
	        		$Url = ltrim($filePath.$upload_data['file_name'], './');
	        		$media_type_id = $this->input->post('media_type_id_'.$i);

	                $data = array('upload_data' => $this->upload->data());
	                $uploadData = array('media_url_id'=>uniqid(),'user_id' => $session_data['user_id'],'url' => $Url,'service_id'=>$service_id,'media_type_id'=>$media_type_id);
	               // array_push($uploadArray, $uploadData);
	                $this->Common_model->insertMediaUrl($uploadData);

	        }
    	}

    	$this->Common_model->insertUserService($serviceArray);

        redirect('Profile', 'refresh');

	}


	

	
	
     

}
