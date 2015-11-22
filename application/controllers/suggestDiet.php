<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class suggestDiet extends CI_Controller {
    
    function __construct()
	{
 		parent::__construct();
		$this->load->database();
		$this->load->helper('form');
                $this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('suggest_dish_model');
        }
    
   public function index(){
       
       $quest_pts = 17;
       
       if($quest_pts > 15)
            $data['suggest_diet'] = $this->suggest_dish_model->getOWFood(); 
       
        
        elseif ($quest_pts < 15) {
            $data['suggest_diet'] = $this->suggest_dish_model->getHealthyFood();
        } 
       
        $this->load->view('showDietPlan', $data);        
        
    }
}
