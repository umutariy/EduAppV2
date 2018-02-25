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
	* This function loads the login view
	*/
	public function index()
	{
		$this->load->view('index2');

	}

	/**
	* This function loads the signup view 
	*/
	public function signup2()
	{
		$this->load->view('signUp2');

	}


	/**
	* This function loads the assignment questions
	*/
	public function quiz()
	{
		$data['questions'] = $this->questionsmodel->return_questions();
		$this->load->view('students_questions', $data);

	}

	/**
	* This function loads the students dashboard view with the assignment questions
	*/
	public function student_dashboard()
	{
		$this->load->view('Students_Dashboard');
	}


	/**
	* This function loads the teacher_setQuestions dashboard which allows data insertion in the database
	*/
	public function set_questions()
	{
		//Setting values for database table columns
		$data = array(
			'Question' => $this->input->post('Question'),
			'Answer_1' => $this->input->post('Answer_1'),
			'Answer_2' => $this->input->post('Answer_2'),
			'Answer_3' => $this->input->post('Answer_3'),
			'Correct_answer' => $this->input->post('Correct_answer')
			);

		//Transfering data to Model
		$this->questionsmodel->set_questions($data);
		$data['message'] = 'Data Inserted Successfully';
			
		//Loading View
		$this->load->view('Teacher_setQuestions');
	}
}











?>