<?php

class DietModel extends CI_Model{
    
    
            public function insertIntoUserIntake( $userIntakeData){
                  $this->db->insert('userIntake', $userIntakeData);
             }
             
             public function getCalories($value){
                 //echo "value in model ";
                 //echo $value;
                 $this->load->database();
                 
                

                 $query = $this->db->query("select Calories from item2 where itemname = '$value'");
                // echo $query;
                //$usrdata=$query->result_array();
                $row = $query->row();
                $calories=$row->Calories;
                
                
                //echo $calories;
                return $calories;
//                $this->load->controller('aiController');
//                $this->aiController->calculateCalories($calo);


               // print_r($calo);
              // var_dump($calo);
             }
             
             public function getProtein($value){
                 //echo "value in model ";
                 //echo $value;
                 $this->load->database();

                 $query = $this->db->query("select Protein from item2 where itemname = '$value'");
                
                $row = $query->row();
                $protein=$row->Protein;
                //echo $protein;
                return $protein;
               
             }
             
             public function getFat($value){
                 //echo "value in model ";
                 //echo $value;
                 $this->load->database();

                 $query = $this->db->query("select Fat from item2 where itemname = '$value'");
                
                $row = $query->row();
                $fat=$row->Fat;
                //echo $fat;
                return $fat;
               
             }
             
             public function getCarbs($value){
                 //echo "value in model ";
                 //echo $value;
                 $this->load->database();

                 $query = $this->db->query("select Carbs from item2 where itemname = '$value'");
                
                $row = $query->row();
                $carbs=$row->Carbs;
                //echo $carbs;
                return $carbs;
               
             }
             
            public function getBalancedDiet(){
                $this->load->database();
                $query = $this->db->query("select * from balanced_diet");
                return $query;
            }
             
}