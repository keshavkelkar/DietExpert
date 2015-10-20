<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            
            $this->load->helper('url');
            $this->load->view('homePage');
            $this->load->model('insert_Into');
            //$this->getTipsOfExpert();    
	}
        // Display Expert Tips on Right Bottom
        public function getTipsOfExpert() {
            $data['tips']= $this->insert_Into->getExpertAddrives();
            $this->load->view('userProfile', $data);
        }
//        function __construct(){
//            parent::__construct();
//            $this->load->helper('url');
//        }
        
        public function showHome(){
                        $this->load->helper('url');

            $this->load->view('userProfile');
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
