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
		$this->load->helper('form');
		//$this->load->helper('dump');
	}

  	/**
	* This function loads the login view
	*/
	public function index($page='login Form')
	{
		$data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data); //loads the header
		$this->load->view('index2');//loads the index file
		$this->load->view('templates/footer'); //loads the footer

	}

	/**
	* This function loads the signup view 
	*/
	public function signup2($page='signup')
	{
		$data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data); //loads the header
        $this->load->view('signUp2');
		$this->load->view('templates/footer'); //loads the footer

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
	public function answer_questions()
	{
		$this->load->view('students_questions');
		//Setting values for database table columns
		$answer="";
		$i=1;
		while((post('Q'.$i)!==null))
		{
			$answer = pos('Q'.$i);
			$data = array(
				'Question_Id' => $this->input->post($i),
				'answer' => $this->input->post($answer)	
				);
			//Transfering data to Model
			$this->questionsmodel->answer_questions($data);
			
			$i++;	
		}
		$data['message'] = 'Data Inserted Successfully';
		//Loading View
		$this->load->view('students_dashboard');
	}

	/**
	* This method loads the set_question view 
	**/
	public function set_questions_trial()
	{
		//Loading View
		$this->load->view('setquestions_trial');
	}

	/**
	* This method loads the send_message view 
	**/
	public function send_message()
	{
		//Loading View
		$this->load->view('Teacher_sendMessage');
	}

	/**
	* This function submits the questions set by the teacher into th database
	**/
	public function submit_questions()
	{
		//loading the questions view
		$this->load->view('setquestions_trial');
		
		// Initializing database table columns.
		$data = array(
			'Title' => $this->input->post('title'),
			'Subject' => $this->input->post('subject'),
			'Instructions' => $this->input->post('instruction'),
			'Due date' => $this->input->post('due_date'),
			'Due time' => $this->input->post('due_time'),
			'Class' => $this->input->post('class'),
			'Question' => $this->input->post('question')
			);

			// Calling the setquestion model and its function.
		$this->questionsmodel->set_questions($data); 

		echo "<script>alert('Form Submitted Successfully....!!!! ');</script>";

			// Reloading after submit.
		$this->load->view('setquestions_trial'); 

	}
	

	/**
	* This function loads parent_viewChild
	**/
	public function view_child($page='your child')
	{
		$data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data); //loads the header
		$this->load->view('parent_viewchild');//loads the index file
		$this->load->view('templates/footer'); //loads the footer
	}
}
?>
