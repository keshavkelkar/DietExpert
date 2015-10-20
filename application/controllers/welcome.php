<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
            $this->load->helper('url'); 
             $this->load->view('homePage');
	}
        // Display Expert Tips on Right Bottom
        public function getTipsOfExpert() {
            $data['tips']= $this->insert_Into->getExpertAddrives();
            $this->load->view('userProfile', $data);
        }
       function __construct(){
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('insert_Into');
        }
        
        public function showHome(){
            $this->load->helper('url');
            $data['tips']= $this->insert_Into->getExpertAddrives();                 
            $this->load->view('userProfile',$data);
        }
        
        public function showFruits(){
                        $this->load->helper('url');

            $this->load->view('fruits');
        }
        
        public function showLogin(){
                        $this->load->helper('url');

            $this->load->view('login');
        }
        
        
}
