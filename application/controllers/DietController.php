<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class DietController extends CI_Controller {
    
        function __construct(){
                parent::__construct();
                $this->load->model('DietModel');
                $this->load->model('aiModel');
                $this->load->library('session');
                $this->load->database();
                $this->load->helper('form');
                $this->load->helper('url');

        }


    
        public function submitUserIntakeData() {
            
            $totalCalories = 0;
            $totalProtein = 0;
            $totalFat =0;
            $totalCarbs=0;
            $bfCalories=0;
            $lunchCalories=0;
            $dinnerCalories=0;
            
            
            if(!empty($_POST['bf_list'])) {
                echo "Breakfast", '</br>','</br>';
                foreach ($_POST['bf_list'] as $key => $value){
                    
                    echo "\n dish selected =>";
                    echo $value,'</br>';
                    $calories = $this->DietModel->getCalories($value);
                    $protein = $this->DietModel->getProtein($value);
                    $fat = $this->DietModel->getFat($value);
                    $carbs = $this->DietModel->getCarbs($value);

                    echo "Calories => ",$calories, '</br>';
                    echo "Protiens => ",$protein, '</br>';
                    echo "Fats => ",$fat, '</br>';
                    echo "Carbs => ",$carbs, '</br>';
                    
                    echo '</br>';
                    
                    $totalCalories=$this->calculateCalories($calories,$totalCalories);
                    $totalProtein=$this->calculateProtein($protein,$totalProtein);
                    $totalFat=$this->calculateFat($fat,$totalFat);
                    $totalCarbs=$this->calculateCarbs($carbs,$totalCarbs);

                }
                $bfcalories = $totalCalories;
            }
            
            if(!empty($_POST['lunch_list'])) {
                
                echo "-----------------------------------------",'</br>','</br>';
                echo "Lunch", '</br>','</br>';
                
                foreach ($_POST['lunch_list'] as $key => $value){
                    
                    echo "\n dish selected =>";
                    echo $value,'</br>';
                    $calories = $this->DietModel->getCalories($value);
                    $protein = $this->DietModel->getProtein($value);
                    $fat = $this->DietModel->getFat($value);
                    $carbs = $this->DietModel->getCarbs($value);

                    echo "Calories => ",$calories, '</br>';
                    echo "Protiens => ",$protein, '</br>';
                    echo "Fats => ",$fat, '</br>';
                    echo "Carbs => ",$carbs, '</br>';
                    
                    echo '</br>';

                    $totalCalories=$this->calculateCalories($calories,$totalCalories);
                    $totalProtein=$this->calculateProtein($protein,$totalProtein);
                    $totalFat=$this->calculateFat($fat,$totalFat);
                    $totalCarbs=$this->calculateCarbs($carbs,$totalCarbs);

                }
                $lunchCalories=$totalCalories - $bfCalories;
            }
            
            if(!empty($_POST['Dinner_list'])) {
                echo "-----------------------------------------",'</br>','</br>';
                echo "Dinner", '</br>','</br>';
                
                foreach ($_POST['Dinner_list'] as $key => $value){
                    
                    echo "\n dish selected =>";
                    echo $value,'</br>';
                    $calories = $this->DietModel->getCalories($value);
                    $protein = $this->DietModel->getProtein($value);
                    $fat = $this->DietModel->getFat($value);
                    $carbs = $this->DietModel->getCarbs($value);

                    echo "Calories => ",$calories, '</br>';
                    echo "Protiens => ",$protein, '</br>';
                    echo "Fats => ",$fat, '</br>';
                    echo "Carbs => ",$carbs, '</br>';
                    
                    echo '</br>';
                    
                    $totalCalories=$this->calculateCalories($calories,$totalCalories);
                    $totalProtein=$this->calculateProtein($protein,$totalProtein);
                    $totalFat=$this->calculateFat($fat,$totalFat);
                    $totalCarbs=$this->calculateCarbs($carbs,$totalCarbs);

                }
                $dinnerCalories=$totalCalories - $lunchCalories - $bfCalories;
            }
            
           $userId=$this->session->userdata('user_id');
           $date=date('Y-m-d');
            

           $userIntakeData = array(
               'userId'=>$userId,
               'date'=>$date,
               'totalCalories'=>$totalCalories,
                'totalProtein'=>$totalProtein,
                'totalFat'=>$totalFat,
                'totalCarbs'=>$totalCarbs,
               );
           
         $this->aiModel->insertIntoUserIntake($userIntakeData);
         $query = $this->aiModel->getBalancedDiet();
         $row = $query->row();
         $balancedCalories = $row->calories;
         $balancedProtein = $row->protein;
         $balancedFat = $row->fat;
         $balancedCarbs = $row->carbs;

         $requiredCalories = $totalCalories - $balancedCalories;
         $requiredProtein = $totalProtein - $balancedProtein;
         $requiredFat = $totalFat - $balancedFat;
         $requiredCarbs = $totalCarbs - $balancedCarbs;
         
         echo "-----------------------------------------",'</br>','</br>';
         echo "Total Consumed  - Suggested Diet", '</br>','</br>';

         echo "Calories => ",$requiredCalories,'</br>';
         echo "Protein => ",$requiredProtein,'</br>';
         echo "Fat => ",$requiredFat,'</br>';
         echo "Carbohydrates => ",$requiredCarbs, '</br>';
         
        }
        
         public function calculateCalories($calories,$totalCalories) {
            $totalCalories = $totalCalories + $calories ;
            return $totalCalories;
        }
        public function calculateProtein($protein,$totalProtein) {
            $totalProtein = $totalProtein + $protein ;
            return $totalProtein;
        }
        public function calculateFat($fat,$totalFat) {
            $totalFat = $totalFat + $fat ;
            return $totalFat;
        }
        public function calculateCarbs($carbs,$totalCarbs) {
            $totalCarbs = $totalCarbs + $carbs ;
            return $totalCarbs;
        }
    
}


