<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cause extends CI_Controller {

        function __construct(){
                parent::__construct();
                $this->load->model('DietModel');
                $this->load->model('aiModel');
                $this->load->library('session');
                $this->load->database();
                $this->load->helper('form');
                $this->load->helper('url');
                $this->load->model('insert_Into');
        }
        
        function allergy() {
            if($this->session->userdata('user_id')!= NULL){    
                $data['tips']= $this->insert_Into->getExpertAddrives();                 
                $this->load->view('allergyentry',$data);
            }
            else{
                $this->load->view('login');
            }
        }
        
}
