<?php

class guest_C extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('userRegister_M');
	}	
	function index()
	{			
		$this->form_validation->set_rules('select_meal', 'Select Meal', 'required|max_length[20]');			
		$this->form_validation->set_rules('calories', 'Calories', 'required|max_length[20]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('userRegister_view');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'select_meal' => set_value('select_meal'),
					       	'calories' => set_value('calories')
						);
					
			// run insert model to write data to db
		
			if ($this->userRegister_M->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('userRegister_C/success');   // or whatever logic needs to occur
			}
			else
			{
			echo 'An error occurred saving your information. Please try again later';
			// Or whatever error handling is necessary
			}
		}
	}
	function success()
	{
			echo 'this form has been successfully submitted with all validation being passed. All messages or logic here. Please note
			sessions have not been used and would need to be added in to suit your app';
	}
}
?>