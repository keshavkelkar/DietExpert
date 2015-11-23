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
            
            if($this->session->userdata('user_id')!= NULL){
                        
            $totalCalories = 0;
            $totalProtein = 0;
            $totalFat =0;
            $totalCarbs=0;
            $bfcalories = 0;
            $bfProtiens = 0;
            $bfFat = 0;
            $bfCarbs = 0;
           $lunchCalories=$lunchProtiens=$lunchFat=$lunchCarbs=$dinnerCalories=$dinnerProtiens=$dinnerFat=$dinnerCarbs =0;
           $Dinner_taken=$bf_taken=$lunch_taken=NULL;
                   
             
            
            
            if(!empty($_POST['bf_list'])) {
                echo "Breakfast", '</br>','</br>';
                $bf_taken = array();
                foreach ($_POST['bf_list'] as $key => $value){
            
                   
                    $bf_taken[]['bf_item'] = $value;
                    
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
                $bfProtiens = $totalProtein;
                $bfFat = $totalFat;
                $bfCarbs = $totalCarbs;
                        
                    echo "BFCalories => ",$bfcalories, '</br>';
                    echo "BFProtiens => ",$bfProtiens, '</br>';
                    echo "BFFats => ",$bfFat, '</br>';
                    echo "BFCarbs => ",$bfCarbs, '</br>';
                    echo '</br>';        
                
                
            }
            
            if(!empty($_POST['lunch_list'])) {
                
                echo "-----------------------------------------",'</br>','</br>';
                echo "Lunch", '</br>','</br>';
                $lunch_taken = array();
                
                foreach ($_POST['lunch_list'] as $key => $value){
                    
                    $lunch_taken[]['lunch_item'] = $value;
                    
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
                $lunchCalories=$totalCalories - $bfcalories;
                $lunchProtiens = $totalProtein - $bfProtiens;
                $lunchFat = $totalFat - $bfFat;
                $lunchCarbs = $totalCarbs - $bfCarbs;
            }
            
            if(!empty($_POST['Dinner_list'])) {
                echo "-----------------------------------------",'</br>','</br>';
                echo "Dinner", '</br>','</br>';
                $Dinner_taken = array();
                foreach ($_POST['Dinner_list'] as $key => $value){
                    
                    $Dinner_taken[]['Dinner_item'] = $value;
                    
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
                $dinnerCalories=$totalCalories - ($lunchCalories + $bfcalories);
                $dinnerProtiens = $totalProtein - ($lunchProtiens + $bfProtiens);
                $dinnerFat = $totalFat - ($lunchFat + $bfFat);
                $dinnerCarbs = $totalCarbs - ($lunchCarbs + $bfCarbs);
            }
            
           $userId=$this->session->userdata('user_id');
           $date=date('Y-m-d');
           $hadBF=0;
           $hadLunch=0;
           $hadDinner=0;
           
           if($this->input->post('bf1') == 1) 
            $hadBF = 1;
           
           if($this->input->post('lunch1') == 1) 
            $hadLunch=1;
               
           if($this->input->post('Dinner1') == 1) 
            $hadDinner = 1;   
           
                         
              

           $userIntakeData = array(
               'userId'=>$userId,
               'date'=>$date,
               'totalCalories'=>$totalCalories,
                'totalProtein'=>$totalProtein,
                'totalFat'=>$totalFat,
                'totalCarbs'=>$totalCarbs,
               );
           
        // $this->aiModel->insertIntoUserIntake($userIntakeData);
         $data['balanced_diet'] = $this->aiModel->getBalancedDiet($userId);
         
         $balancedCalories = $data['balanced_diet']['balancedCalories'];
         $balancedProtein = $data['balanced_diet']['balancedProtein'];
         $balancedFat = $data['balanced_diet']['balancedFat'];
         $balancedCarbs = $data['balanced_diet']['balancedCarbs'];
         
         
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

         
         $IntakeData = array(
                    'hadBF' => $hadBF,
                    'bfcalories'=>$bfcalories,
                    'bfProtiens'=>$bfcalories,
                    'bfFat'=>$bfcalories,
                    'bfCarbs'=>$bfcalories,
                    'hadLunch' => $hadLunch,
                    'lunchCalories'=>$lunchCalories,
                    'lunchProtiens'=>$lunchProtiens,
                    'lunchFat'=>$lunchFat,
                    'lunchCarbs'=>$lunchCarbs,
                    'hadDinner' => $hadDinner,
                    'dinnerCalories'=>$dinnerCalories,
                    'dinnerProtiens'=>$dinnerProtiens,
                    'dinnerFat'=>$dinnerFat,
                    'dinnerCarbs'=>$dinnerCarbs,
                    'totalCalories'=>$totalCalories,
                    'totalProtein'=>$totalProtein,
                    'totalFat'=>$totalFat,
                    'totalCarbs'=>$totalCarbs,
                    'balancedCalories'=>$balancedCalories
                    
                );
         
                $this->suggestDiet($IntakeData, $bf_taken, $lunch_taken, $Dinner_taken);
            }
                
            else
                $this->showLogin ();
        
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
        
        public function showLogin(){
            $this->load->view('login');
        }
        
        
        //Rules
        public function suggestDiet($IntakeData, $bf_taken, $lunch_taken, $Dinner_taken) {
            $this->load->model('suggest_dish_model');

            
            $breakfast_items['bf_dishes']=$Lunch_items['lunch_dishes']=$Dinner_items['dinner_dishes']=NULL;
            
            $data['No_DinnerDishes']=$data['No_LunchDishes']= $data['No_BFDishes']=NULL;
            
            $data['Add_BFDishes']=$data['Add_LunchDishes']= $data['Add_DinnerDishes']=NULL;
            
            $data['Remove_BFDishes']=$data['Remove_LunchDishes']= $data['Remove_DinnerDishes']=NULL;
            
         
            $consumedBFCalories = number_format((($IntakeData["bfcalories"] / $IntakeData['balancedCalories'])*100),0);

            $consumedLunchCalories = number_format((($IntakeData["lunchCalories"] / $IntakeData['balancedCalories'])*100),0);

            $consumedDinnerCalories = number_format((($IntakeData["dinnerCalories"] / $IntakeData['balancedCalories'])*100),0);
            
            $breakfast_items['bf_dishes'] = $bf_taken;
            
            $Lunch_items['lunch_dishes'] = $lunch_taken;
            
            $Dinner_items['dinner_dishes'] = $Dinner_taken;
            
            
            
            $rule1=$rule2=$rule3=$rule4=$rule5=$rule6=$rule7=$rule8=$rule9=$rule10=FALSE;
            
            //Rule 1
            if($IntakeData["hadBF"] == 1 && (($consumedBFCalories > 10)  && ($consumedBFCalories < 20))){       
                  $rule1 = TRUE;
                  echo '</br>', "Rule1", $rule1, '</br>';
            }
            
            //Rule 2
            if($IntakeData["hadBF"] == 1 && ($consumedBFCalories > 20)){       
                  $rule2 = TRUE;
                  echo '</br>', "Rule2", $rule2, '</br>';
            }
            
            //Rule 3
            if($IntakeData["hadBF"] == 1 && ($consumedBFCalories < 10)){       
                  $rule3 = TRUE;
                  echo '</br>', "Rule3", $rule3, '</br>';
            }
            
            //Rule 4
            if($IntakeData["hadLunch"] == 1 && ($consumedLunchCalories > 15) && ($consumedLunchCalories<55)){       
                  $rule4 = TRUE;
                  echo '</br>', "Rule4", $rule4, '</br>';
            }
            
            //Rule 5
            if($IntakeData["hadLunch"] == 1 && ($consumedLunchCalories > 55)){       
                  $rule5 = TRUE;
                  echo '</br>', "Rule5", $rule5, '</br>';
            }
            
            //Rule 6
            if($IntakeData["hadLunch"] == 1 && ($consumedLunchCalories < 15)){       
                  $rule6 = TRUE;
                  echo '</br>', "Rule6", $rule6, '</br>';
            }
            
            //Rule 7
            if($IntakeData["hadDinner"] == 1 && ($consumedDinnerCalories > 20)&& ($consumedDinnerCalories < 60)){       
                  $rule7 = TRUE;
                  echo '</br>', "Rule7", $rule7, '</br>';
            }
            
            //Rule 8
            if($IntakeData["hadDinner"] == 1 && ($consumedDinnerCalories > 60)){       
                  $rule8 = TRUE;
                  echo '</br>', "Rule8", $rule8, '</br>';
            }
            
            //Rule 9
            if($IntakeData["hadDinner"] == 1 && ($consumedDinnerCalories < 20)){       
                  $rule9 = TRUE;
                  echo '</br>', "Rule9", $rule9, '</br>';
            }
            
            
            
            
            
            if($rule1 == TRUE && $rule4 == TRUE && $rule7 == TRUE){
                echo '</br>','BreakFast Diet=>','</br>';
                $this->load->view('showDietPlan', $breakfast_items, $Lunch_items, $Dinner_items );                            
            }
            
            elseif($rule1 == TRUE && $rule4== TRUE){
                $RemainingCalories= $IntakeData["totalCalories"] - ($consumedBFCalories + $consumedLunchCalories);
                $data['No_DinnerDishes']=  $this->suggest_dish_model->getDinnerFood();
                $this->load->view('showDietPlan', $breakfast_items, $Lunch_items, $data );
            }
            
            elseif($rule1 == TRUE && $rule7== TRUE){
                $RemainingCalories= $IntakeData["totalCalories"] - ($consumedDinnerCalories + $consumedLunchCalories);
                $data['No_LunchDishes']=  $this->suggest_dish_model->getLunchFood();
                $this->load->view('showDietPlan', $breakfast_items, $data, $Dinner_items );
            }
            
            elseif($rule1 == TRUE){
                $data['No_LunchDishes']=  $this->suggest_dish_model->getLunchFood();
                $data['No_DinnerDishes']=  $this->suggest_dish_model->getDinnerFood();
                $this->load->view('showDietPlan', $breakfast_items, $data  );
            }
            
            elseif($rule4 == TRUE && $rule7== TRUE){
                $data['No_BFDishes']=  $this->suggest_dish_model->getBFFood();
                $this->load->view('showDietPlan', $data, $Lunch_items, $Dinner_items );
            }
            
            elseif($rule4 == TRUE){
                $data['No_BFDishes']=  $this->suggest_dish_model->getBFFood();
                $data['No_DinnerDishes']=  $this->suggest_dish_model->getDinnerFood();
                $this->load->view('showDietPlan', $Lunch_items, $Data );
            }
            
            elseif($rule7== TRUE){
                $data['No_BFDishes']=  $this->suggest_dish_model->getBFFood();
                $data['No_LunchDishes']=  $this->suggest_dish_model->getLunchFood();
                $this->load->view('showDietPlan', $data, $Dinner_items );
            }
            
            if($rule2==TRUE || $rule3==TRUE){
                
                if($rule2==TRUE){
                    
                    $appropriate_bfcalories = ($IntakeData["totalCalories"]*0.2);
                    $ExtraCaloriesConsumed = number_format(( $consumedBFCalories - $appropriate_bfcalories ),0);
                    foreach ($breakfast_items['bf_dishes'] as $item){
                        
                        if( $item['bf_item'] < ($ExtraCaloriesConsumed - 10) || $item['bf_item'] < ($ExtraCaloriesConsumed + 10)  ){
                            $data['Remove_BFDishes'] =  $item['bf_item'];
                       }
                    }   
                    
                    $this->load->view('showDietPlan', $data, $breakfast_items, $Lunch_items, $Dinner_items);
                }
                
                
                if($rule3==TRUE){
                    $appropriate_bfcalories = ($IntakeData["totalCalories"]*0.1);
                    $ExtraCaloriesNeeded = number_format(($appropriate_bfcalories - $consumedBFCalories ),0);
                    
                    $data['Add_BFDishes']=  $this->suggest_dish_model->getBFUWFood($breakfast_items["bf_dishes"], $ExtraCaloriesNeeded);
                    
                    
                    $this->load->view('showDietPlan', $data, $breakfast_items, $Lunch_items, $Dinner_items);
                }
            }
            
            
            
            if($rule5==TRUE || $rule6==TRUE){
                
                if($rule5==TRUE){
                    
                    $appropriate_LunchCalories = ($IntakeData["totalCalories"]*0.2);
                    $ExtraCaloriesConsumed = number_format(( $consumedLunchCalories - $appropriate_LunchCalories ),0);
                    foreach ($Lunch_items['lunch_dishes'] as $item){
                        
                        if( $item['lunch_item'] < ($ExtraCaloriesConsumed - 10) || $item['lunch_item'] < ($ExtraCaloriesConsumed + 10)  ){
                            $data['Remove_LunchDishes'] =  $item['lunch_item'];
                       }
                    }   
                    
                    $this->load->view('showDietPlan', $data, $breakfast_items, $Lunch_items, $Dinner_items);
                }
                
                
                if($rule6==TRUE){
                    $appropriate_LunchCalories = ($IntakeData["totalCalories"]*0.1);
                    $ExtraCaloriesNeeded = number_format(($appropriate_LunchCalories - $consumedLunchCalories ),0);
                    
                    $data['Add_LunchDishes']=  $this->suggest_dish_model->getLunchUWFood($Lunch_items['lunch_dishes'], $ExtraCaloriesNeeded);
                    
                    $this->load->view('showDietPlan', $data, $breakfast_items, $Lunch_items, $Dinner_items);
                }
            }

            if($rule8==TRUE || $rule9==TRUE){
                
                if($rule8==TRUE){
                    
                    $appropriate_DinnerCalories = ($IntakeData["totalCalories"]*0.2);
                    $ExtraCaloriesConsumed = number_format(( $consumedDinnerCalories - $appropriate_DinnerCalories ),0);
                    foreach ($Dinner_items['dinner_dishes'] as $item){
                        
                        if( $item['Dinner_item'] < ($ExtraCaloriesConsumed - 10) || $item['Dinner_item'] < ($ExtraCaloriesConsumed + 10)  ){
                            $data['Remove_DinnerDishes'] =  $item['Dinner_item'];
                       }
                    }   
                    
                    $this->load->view('showDietPlan', $data, $breakfast_items, $Lunch_items, $Dinner_items);
                }
                
                
                if($rule9==TRUE){
                    $appropriate_DinnerCalories = ($IntakeData["totalCalories"]*0.1);
                    $ExtraCaloriesNeeded = number_format(($appropriate_DinnerCalories - $consumedDinnerCalories ),0);
                    
                    $data['Add_DinnerDishes']=  $this->suggest_dish_model->getDinnerUWFood($Dinner_items['dinner_dishes'], $ExtraCaloriesNeeded);
                    
                    
                    $this->load->view('showDietPlan', $data, $breakfast_items, $Lunch_items, $Dinner_items);
                }
            }
    }
}


