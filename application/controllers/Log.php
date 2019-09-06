<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {

	public function index()
	{
			// check Session
		$this->common->checkSession();

    	//get session data
		$session_data = $this->common->loadSession();

		 //get header data  from the databas
		$headerData = $this->common->loadHeaderData('Dashboard');

		$data['users'] = $this->User_model->get();
		$data['service'] = $this->Common_model->getService();
		
		$this->load->view('templete/header_white',$headerData);
		$this->load->view('log_view',$data);
		$this->load->view('templete/footer',$headerData);
	}


	public function getLogs()
    {
    	
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => "http://mychama.net/console/api/v1/auth.php?apiType=data_api&accessType=fetch_payment_history&userId=1542409557",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "",
		CURLOPT_HTTPHEADER => array(
		// "Authorization: Bearer ".$session_data['token'],
		"Content-Type: application/json",
		"Postman-Token: e44d32c5-857a-4730-a684-983487572db8",
		"cache-control: no-cache"
		),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		echo "cURL Error #:" . $err;
		} else {
		$json = json_decode($response, true);

	    echo json_encode($json['paymentHistory']);


		}

    }

}

/* End of file Log.php */
/* Location: ./application/controllers/Log.php */ ?>