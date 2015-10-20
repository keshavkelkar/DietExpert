<?php 
class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function validate(){
        $email =$this->input->post('username');
        $password =$this->input->post('password');
        $this->db->select('*')
          ->from('customer ') 
          ->where('email '  ,$email )  ;
           
        $query = $this->db->get();
            
        $row=$query->row();
        $passd=$row->password;
        
        $passwd = md5($password);
        
        
            if ($passd == $passwd)
            {
             print_r( $row) ; 
                 echo 'opopaodas';
                // Run the query
                // If there is a user, then create session data
                    $row = $query->row();
                    $data = array(
                        'cid' => $row->cid,
                        'name' => $row->name,
                        'aid' => $row->aid,
                        'address' => $row->address,
                        'email' => $row->email,
                        'validated' => true
                    );
                    $this->session->set_userdata($data);
                   return true;
                
            }
            return false;
        }

}
?>