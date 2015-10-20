<?php
class Login extends CI_Controller{
    
    function __construct(){
        parent::__construct();
//         $this->load->model("FoodTable");
//        $this->load->helper('url');
//        $this->load->library('session');
    }
    
    public function do_logout(){
    $this->session->sess_destroy();
    redirect('index.php/home');
 }
    public function index(){
            $sess_id = $this->session->userdata('cid');
            echo $sess_id ; 
        
            if( $sess_id == "")
            {
               
                 
                 $this->load->view('login_view');
            }
    }
            
     public function process(){
                // Load the mode
                $this->load->model('login_model');
                
                // Validate the user can login
                $result = $this->login_model->validate();
                
                // Now we verify the result
                if(! $result){
                        $msg = '<font color=red>Invalid username and/or password.</font><br />';
                        $this->index($msg);
                }

                else{
                    if($this->session->userdata('last_page') == "" ){
                        
                        redirect("index.php/home") ;
                    }else{
                      //  echo $this->session->userdata('last_page') ; 
                       redirect( $this->session->userdata('last_page')) ; 
                    //redirect('index.php/available_tec/index/'.$x) ; 
                    
                    
                    }
                }        
    }
    
    public function userProfile(){
            
               
                 $this->load->helper('url');
                 $this->load->view('userProfile');
                 
//                 $data['tips']= $this->insert_Into->getExpertAddrives();
//                $this->load->view('userProfile', $data);
        }
            
}

?>