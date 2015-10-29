<?php

class aiModel extends CI_Model{
    
    
            //$this->db->insert('donor', $donordata);
            
           
             
             
             public function insertIntoUserIntake( $userIntakeData){
                  $this->db->insert('userIntake', $userIntakeData);
             }
             
             public function getCalories($value){
                  //$this->db->insert('userIntake', $userIntakeData);
                 echo "value in model ";
                 echo $value;
                 $this->load->database();

                 $query = $this->db->query("select Calories from item where itemname = '$value'");
                // echo $query;
                //$usrdata=$query->result_array();
                $row = $query->row();
                $calories=$row->Calories;
                echo $calories;
                return $calories;
//                $this->load->controller('aiController');
//                $this->aiController->calculateCalories($calo);


               // print_r($calo);
              // var_dump($calo);
             }
             
             public function getProtein($value){
                 echo "value in model ";
                 echo $value;
                 $this->load->database();

                 $query = $this->db->query("select Protein from item where itemname = '$value'");
                
                $row = $query->row();
                $protein=$row->Protein;
                echo $protein;
                return $protein;
               
             }
             
             public function getFat($value){
                 echo "value in model ";
                 echo $value;
                 $this->load->database();

                 $query = $this->db->query("select Fat from item where itemname = '$value'");
                
                $row = $query->row();
                $fat=$row->Fat;
                echo $fat;
                return $fat;
               
             }
             
             public function getCarbs($value){
                 echo "value in model ";
                 echo $value;
                 $this->load->database();

                 $query = $this->db->query("select Carbs from item where itemname = '$value'");
                
                $row = $query->row();
                $carbs=$row->Carbs;
                echo $carbs;
                return $carbs;
               
             }
             
}