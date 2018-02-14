<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Appcontroller extends CI_Controller
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
	* This function loads the login view with the assignment questions
	*/
	public function index()
	{
	    $this->load->view('index.html');

	}


	/**
	* This function loads the questions view with the assignment questions
	*/
	public function quiz()
	{
	    $data['questions'] = $this->questionsmodel->return_questions();
	    $this->load->view('students_questions', $data);

	}
}











?>