<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Newquestions extends CI_Controller
{

	function __construct(){

		parent::__construct();
		$this->load->model('questionsmodel');
		//$this->load->helper('dump');
	}
  

	public function quiz()
	{
	    // $this->load->model('questionsModel');
	    $data['questions'] = $this->questionsmodel->return_questions();
	    //var_dump($this->data);

	  //  $data['questions']=array('kofi','kwame');
	    $this->load->view('students_questions', $data);

	}
}











?>