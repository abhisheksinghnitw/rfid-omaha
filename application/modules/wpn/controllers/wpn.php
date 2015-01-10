<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wpn extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $card_data=$_REQUEST['data'];
        if($card_data=="")
            {
                echo "Aborted";
                return;
            }
        $this->load->model('wpn_model');
        $status=$this->wpn_model->submit_card_details($card_data);
        if($status==TRUE)
        	echo "OK";
        else
        	echo "Aborted";
    }
}

/* End of file message.php */
/* Location: .//tmp/fz3temp-1/message.php */