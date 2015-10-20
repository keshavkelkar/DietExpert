<?php

class Confirm_email_c extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->database();
		$this->load->helper('form');
                $this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('customer_signup_m');
                $this->load->model('send_email_m');        
	}	
	function index()
	{	
            $email =$this->session->userdata('user_id');
            if($email=""){
                    redirect('index.php/home');
            }
            else{
                $str=$this->input->get('token');
                if(!$str==null){
                    $token_string=base64_decode($str);
                    $val_data=explode("&&",$token_string);

                    $data = array(
                            'name' => $val_data[0],
                            'user_id' => $val_data[1],
                            'address' => $val_data[2],
                            'gender' => $val_data[3],
                            'contact_no' => $val_data[4],
                            'weight' => $val_data[5],
                            'height' => $val_data[6],
                            'age' => $val_data[7],
                        );

                    $user_id=$data['user_id'] ;                                    

                    $this->load->database();

                    //$query= $this->db->query('SELECT `email` FROM `userlogin` WHERE email=".$email."');                                  

                    $this->db->select('user_id')
                        ->from('userlogin') 
                        ->where('user_id'  ,$email )  ;

                    $query = $this->db->get();


                    if ($query->num_rows() > 0){
                            $this->db->select('password')
                            ->from('userlogin') 
                            ->where('user_id '  ,$email )  ;

                          $query = $this->db->get();
                          $row=$query->row();
                            if (!$row->password == ""){
                               $this->load->view('login_view');
                            }
                            else{
                                   $this->session->set_userdata($data);
                                    $this->load->view('confirm_email');
                                     }
                     }
                    else{
                        
                            $this->db->select('password')
                                ->from('userlogin') 
                                ->where('user_id '  ,$user_id )  ;

                            $query = $this->db->get();
                            $row=$query->row();
                            if ($query->num_rows() > 0){
                                $this->load->view('login_view');
                            }
                            else
                            {
                                
                                $user_id=$this->customer_signup_m->SaveForm($data);
                                $data= array('user_id'=>$user_id);
                                $this->session->set_userdata($data);
                                $this->load->view('confirm_email');
                            }
                       
                    }        
                }
                else{
                    $this->form_validation->set_rules('password', 'password', 'trim|min_length[6]|matches[password_confirm]');
                    $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim');

                    $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');

                    if ($this->form_validation->run() == FALSE) 
                    {
                        $this->load->view('confirm_email');
                    }
                    else 
                    {
                        $password=$this->input->post('password');
                        $hash=md5($password);


                    $user_id =$this->session->userdata('user_id');
                    $data = array( 'password'=>$hash);
                    $this->db->where('user_id',$user_id);
                    $this->db->update('userlogin',$data);   
                    $this->session->sess_destroy();
                    echo '<h2 style="color:white">Your Email has Been Verified ,Continue with Login</h2>';
                    $this->load->view('login_view');   
                    }
            }        
        }
    }
}
?>    

        