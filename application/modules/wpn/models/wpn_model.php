<?php
class Wpn_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	
	public function submit_card_details($data)
	{
		$wpn_db=$this->load->database('default',TRUE);
		$query=$wpn_db->get_where('card_data',array('card_data'=>$data));
		if($query->num_rows()==0)
		{
			$wpn_db->insert('card_data',array('card_data'=>$data));
			if($wpn_db->affected_rows()==1)
				return TRUE;
			else
				return FALSE;
		}
		else
			return FALSE;
	}
}
?>