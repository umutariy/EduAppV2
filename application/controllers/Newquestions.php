<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Newquestions extends CI_Controller
{
	/**
	* Constructor
	*/
	function __construct(){

		parent::__construct();
		$this->load->model('questionsmodel');
		//$this->load->helper('dump');
	}
  
	/**
	* This function loads the view with the assignment questions
	*/
	public function quiz()
	{
	    $data['questions'] = $this->questionsmodel->return_questions();
	    $this->load->view('students_questions', $data);

	}
}











?>