<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Booking extends CI_Controller {

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
		$data['chairMap'] = $this->Config_model->getChairMap();
		$data['country'] = $this->Config_model->getCountry();
  
		$this->load->view('templete/header',$headerData);
		$this->load->view('booking_view',$data);
		$this->load->view('templete/footer',$headerData);
	}



	public function add()
	{
	  $bookingArray = $this->input->post();
	  $bookingArray['system_date'] =  date('Y-m-d');
	  $bookingArray['price'] = get_bus_fare($bookingArray['bus_id']);
	  $bookingArray['booking_id'] = uniqid();
	  $bookingArray['departure_date'] = date_format(date_create($bookingArray['departure_date']),'Y-m-d');

	  $this->Config_model->insertBooking($bookingArray);

	  $html="";
	  $html .='<div class="container">
    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-6">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>Buupass</strong>
                        <br>
                        Nairobi Garage, Pinetree Plaza, Kaburu Drive, 
                        <br>
                        Nairobi, Nairobi
                        <br>
                        <abbr title="Phone">P:</abbr> 0715 763362
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Date: '.date('jS  F Y',strtotime($bookingArray['departure_date'])).'</em>
                    </p>
                    <p>
                        <em>Receipt #: RN'.$bookingArray['booking_id'].'</em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>#</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><em>'.get_client_name_from_bus($bookingArray['bus_id']).' Ticket</em></h4></td>
                            <td class="col-md-1" style="text-align: center"> 1 </td>
                            <td class="col-md-1 text-center">'.number_format($bookingArray['price'],2,'.',',').'</td>
                            <td class="col-md-1 text-center">'.number_format($bookingArray['price'],2,'.',',').'</td>
                        </tr>
                        
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right">
                            <p>
                                <strong>Subtotal: </strong>
                            </p>
                            <p>
                                <strong>Tax: </strong>
                            </p></td>
                            <td class="text-center">
                            <p>
                                <strong>'.number_format($bookingArray['price'],2,'.',',').'</strong>
                            </p>
                            <p>
                                <strong>00</strong>
                            </p></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                           <td> KSH </td>
                            <td class="text-center text-danger"><h4><strong>'.number_format($bookingArray['price'],2,'.',',').'</strong></h4></td>
                        </tr>
                    </tbody>
                </table>
                <button onclick="pay()" type="button" class="btn btn-success btn-lg btn-block">
                    Pay Now   <span class="glyphicon glyphicon-chevron-right"></span>
                </button></td>
            </div>
        </div>
    </div>';

    print $html;

	}

}


?>