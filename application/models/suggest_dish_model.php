<?php

class suggest_dish_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
        
        function getBFUWFood($item,  $ExtraCaloriesNeeded)
	{
                $minCalories = $ExtraCaloriesNeeded - 10;
                $maxCalories = $ExtraCaloriesNeeded + 10;
		$this->db->select('itemname')
                    ->from('item')
                    ->where('itemType="Breakfast"')    
                    ->where('Calories = "$minCalories" or Calories = "$maxCalories"');
       
                $query = $this->db->get();
                             
                if ( $query->num_rows() > 0 ){
                    $data=array();
                    $i=0;
                    foreach ($query->result() as $row) {
                        
                        if($row->itemname != $item[$i]['bf_item'] ){
                            $data[] = $row;
                        }
                       $i++; 
                    }
                   return $data;
                    
                }
                else {return 0;}
        }
        
        function getLunchUWFood($item,  $ExtraCaloriesNeeded)
	{
                $minCalories = $ExtraCaloriesNeeded - 10;
                $maxCalories = $ExtraCaloriesNeeded + 10;
		$this->db->select('itemname')
                    ->from('item')
                    ->where('itemType="LD"')    
                    ->where('Calories = "$minCalories" or Calories = "$maxCalories"');
       
                $query = $this->db->get();
                             
                if ( $query->num_rows() > 0 ){
                    $data=array();
                    $i=0;
                    foreach ($query->result() as $row) {
                        
                        if($row->itemname != $item[$i]['lunch_item'] ){
                            $data[] = $row;
                        }
                       $i++; 
                    }
                   return $data;
                    
                }
                else {return 0;}
        }
        
        function getDinnerUWFood($item,  $ExtraCaloriesNeeded)
	{
                $minCalories = $ExtraCaloriesNeeded - 10;
                $maxCalories = $ExtraCaloriesNeeded + 10;
		$this->db->select('itemname')
                    ->from('item')
                    ->where('itemType="LD"')    
                    ->where('Calories = "$minCalories" or Calories = "$maxCalories"');
       
                $query = $this->db->get();
                             
                if ( $query->num_rows() > 0 ){
                    $i=0;
                    $data=array();
                    foreach ($query->result() as $row) {
                        
                        if($row->itemname != $item[$i]['Dinner_item'] ){
                            $data[] = $row;
                        }
                       $i++; 
                    }
                   return $data;
                    
                }
                else {return 0;}
        }
        
        
        
        function getDinnerFood()
	{
                
                
            
                $query = $this->db->query('SELECT itemname from item AS r1 JOIN (SELECT (RAND() * (SELECT MAX(item_id) FROM item)) AS id) AS r2 WHERE r1.item_id >= r2.id and r1.itemType="LD" ORDER BY r1.item_id ASC LIMIT 5');

                
                var_dump($query->result());
                             
                if ( $query->num_rows() > 0 ){
                    foreach ($query->result() as $row) {
                            $data[] = $row;
                    }
                    
                    
                       
                   return $data;
                    
                }
                else {return 0;}
        }
        
        function getLunchFood()
	{
               /* $this->db->select('*')
                    ->from('item a')
                    ->join('SELECT FLOOR(@min + (@max - @min + 1) * RAND()) id', 'b')    
                    ->where('itemType="LD"')    
                    ->LIMIT (10);
            */
                $query = $this->db->query('SELECT itemname from item AS r1 JOIN (SELECT (RAND() * (SELECT MAX(item_id) FROM item)) AS id) AS r2 WHERE r1.item_id >= r2.id and r1.itemType="LD" ORDER BY r1.item_id ASC LIMIT 5');

               // $query = $this->db->get();
                
                             
                if ( $query->num_rows() > 0 ){
                    foreach ($query->result() as $row) {
                            $data[] = $row;
                    }
                    
                    
                       
                   return $data;
                    
                }
                else {return 0;}
        }
        
        function getBFFood()
	{
                
                
            
                $query = $this->db->query('SELECT itemname from item AS r1 JOIN (SELECT (RAND() * (SELECT MAX(item_id) FROM item)) AS id) AS r2 WHERE r1.item_id >= r2.id and r1.itemType="Breakfast" ORDER BY r1.item_id ASC LIMIT 5');

                
                             
                if ( $query->num_rows() > 0 ){
                    foreach ($query->result() as $row) {
                            $data[] = $row;
                    }
                    
                    
                       
                   return $data;
                    
                }
                else {return 0;}
        }
      
        
        /*  
        function sumUpRecursive($arr, $sum) {
            rsort($arr);
            $end = end($arr);
            reset($arr);
            $tmp = $arr;
            $data = [];

            //check if it is not a empty input
            if($sum == 0 || empty($tmp) || array_sum($tmp) == 0) return [0];

            //calculate the sum
            while(array_sum($result) != $sum) {
                if(empty($tmp) && empty($result)) return [0];
                if(current($tmp) === FALSE) end($tmp);

                //correction for errors level 1
                if(current($tmp) == $end && array_sum($result) + current($tmp) > $sum) {
                    array_pop($result);
                    array_shift($tmp);
                    reset($tmp);
                }

                //correction for errors level 2
                if(empty($tmp)) {
                    $mistake = array_pop($result);
                    if($mistake == NULL) return [0];
                    $tmp = array_slice($arr, array_search($mistake, $arr)+1);
                    reset($tmp);
                }

                if(array_sum($result) + current($tmp) <= $sum)
                    $data = current($tmp);
                else
                    next($tmp);     
            }
            return $result;
    }*/
}
	