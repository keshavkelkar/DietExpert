<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of allergyModel
 *
 * @author Avesh
 */
class AllergyModel extends CI_Model{
    
    function __construct(){
                parent::__construct();
                $this->load->database();
                $this->load->helper('form');
                $this->load->helper('url');
                
        }
        
        // Get doctors for allery
        function getDoctors(){
            $query = $this->db->query("select * from doctor");
            return $query->result();
        }
        
        function insertAllergy($data){
            $this->db->insert('allergy', $data);
        }
    //put your code here
}
