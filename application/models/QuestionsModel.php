<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class QuestionsModel extends CI_Model
{
	function __construct(){

		// parent::__Construct();
		$this->load->database();
		//$this->load->helper('dump');
	}
	
	public function return_questions()
	{
		# code...
		
		// $query=$this->db->query("SELECT Assignment_ID, Question_1, Answer_1, Answer_2, Answer_3  FROM assignment");
		$query=$this->db->get('assignment');
		return $query->result_array();
		// return $query;
	}
}

?>