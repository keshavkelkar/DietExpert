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
                $this->load->model('allergyModel');
        }
        
        function allergy() {
            if($this->session->userdata('user_id')!= NULL){    
                $data['tips']= $this->insert_Into->getExpertAddrives(); 
                $data['doc'] = $this->allergyModel->getDoctors();
                $this->load->view('allergyentry',$data);
            
            }
            else{
                $this->load->view('login');
            }
        }
        
        function saveAllergyDetails() {
            $data = array(
            'uid'=>$this->session->userdata('user_id'),
            'c1'=>$this->input->post('c1'),
            'c2'=>$this->input->post('c2'),
            'c3'=>$this->input->post('c3'),
            'c4'=>$this->input->post('c4'),
            'c5'=>$this->input->post('c5'),
            'c6'=>$this->input->post('c6'),
            'c7'=>$this->input->post('c7'),
            'doc'=>$this->input->post('doc'),
            );
            $this->allergyModel->insertAllergy($data);
            $this->load->view('homepage');
        }
        
        
}
