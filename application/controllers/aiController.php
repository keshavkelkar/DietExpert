<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class aiController extends CI_Controller {
    public function index()
	{
            $this->load->helper('url'); 
            $this->load->view('userIntake');
	}
        // just
        public function goForUserIntake() {
            $this->load->helper('url'); 
             $this->load->view('userIntake');
        }
        
        public function submitUserIntakeData() {
            
            $this->load->database();
           
         // if($_POST["submit"]=="done"){ }
           
            //storing userIntakeData  table  data in userIntakeData array
            //var_dump($_POST);
            
           //print_r($_POST);
            //or
            $totalCalories = 0;
            $totalProtein = 0;
            $totalFat =0;
            $totalCarbs=0;
            foreach ($_POST as $key => $value){
             if($key != "submit" && $value != "done"){
             echo $key.'='.$value.'<br />';
             $this->load->model('aiModel');
             $calories = $this->aiModel->getCalories($value);
             $protein = $this->aiModel->getProtein($value);
             $fat = $this->aiModel->getFat($value);
             $carbs = $this->aiModel->getCarbs($value);

             
             $totalCalories=$this->calculateCalories($calories,$totalCalories);
             $totalProtein=$this->calculateProtein($protein,$totalProtein);
             $totalFat=$this->calculateFat($fat,$totalFat);
             $totalCarbs=$this->calculateCarbs($carbs,$totalCarbs);

             //echo "jst check"+$calo;
             
                }
            }
            echo "finalCal ",$totalCalories;
            echo "finalProtein ",$totalProtein;
            echo "finalFat ",$totalFat;
            echo "finalCarbs ",$totalCarbs;
            $userId="keshav.kelkar@gmail.com";
            $date="2014-10-29";
            
//               if($_POST['l1'] == '1' &&  $_POST['d1'] == '1'){
//                   $rice = $_POST['l1']++;
//               }
               
           $userIntakeData = array(
               'userId'=>$userId,
               'date'=>$date,
               'totalCalories'=>$totalCalories,
                'totalProtein'=>$totalProtein,
                'totalFat'=>$totalFat,
                'totalCarbs'=>$totalCarbs,
               );
           //var_dump($userIntakeData);
          $this->load->model('aiModel');
         $this->aiModel->insertIntoUserIntake($userIntakeData);
          $this->load->helper('url'); 
          $this->load->view('homePage');
        }
        
         public function calculateCalories($calories,$totalCalories) {
            echo " total Calories b4 : ",$totalCalories;
            $totalCalories = $totalCalories + $calories ;
            echo " total Calories aftr : ",$totalCalories,'</br>';
            return $totalCalories;
        }
        public function calculateProtein($protein,$totalProtein) {
            echo " total Protein b4 : ",$totalProtein;
            $totalProtein = $totalProtein + $protein ;
            echo " total Protein aftr : ",$totalProtein,'</br>';
            return $totalProtein;
        }
        public function calculateFat($fat,$totalFat) {
            echo " total Fat b4 : ",$totalFat;
            $totalFat = $totalFat + $fat ;
            echo " total Fat aftr : ",$totalFat,'</br>';
            return $totalFat;
        }
        public function calculateCarbs($carbs,$totalCarbs) {
            echo " total Carbs b4 : ",$totalCarbs;
            $totalCarbs = $totalCarbs + $carbs ;
            echo " total Calories aftr : ",$totalCarbs,'</br>';
            return $totalCarbs;
        }
    
}


