<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php include_once 'user_header.php';?>
<html>
    <head>

    <title></title>
        
    </head>
    <body>
        <!--
        /*
        <?php// var_dump($bf_dishes) ?> 
        
        <?php //$i=0; if($bf_dishes[$i] != NULL){ ?>    
        <div class="col-sm-10" >
        <div class="row">
            <p>
                
            <?php// foreach($bf_dishes as $row): ?>
               <span style="float:right;margin-top:-3.6em;margin-right:1em;font-size:1.5em">
                    <?php //echo $row['bf_item'], "  " ; ?>
                </span>
             <?php //endforeach;?>
            </p>
        </div>
        </div>
        <?php// }?>
        
        <?php //if($lunch_dishes != NULL){ ?>    
        <div class="col-sm-10" >
        <div class="row">
            <p>
                
            <?php //foreach($lunch_dishes as $row): ?>
               <span style="float:right;margin-top:-3.6em;margin-right:1em;font-size:1.5em">
                    <?php// echo $row->itemname, "  " ; ?>
                </span>
             <?php //endforeach;?>
            </p>
        </div>
        </div>
        <?php //}?>
        
        <?php// if($dinner_dishes != NULL){ ?>    
        <div class="col-sm-10" >
        <div class="row">
            <p>
                
            <?php// foreach($dinner_dishes as $row): ?>
               <span style="float:right;margin-top:-3.6em;margin-right:1em;font-size:1.5em">
                    <?php //echo $row->itemname, "  " ; ?>
                </span>
             <?php //endforeach;?>
            </p>
        </div>
        </div>
        <?php// }?>
        -->
        <?php if($No_BFDishes != NULL){ ?>    
        <div class="col-sm-10" >
        <div class="row">
            <p>
               
              
            <?php foreach($No_BFDishes as $row): ?>
               
               <span style="float:right;margin-top:-3.6em;margin-right:1em;font-size:1.5em">
                    <?php echo $row->itemname, "  " ; ?>
                </span>
             <?php endforeach;?>
            </p>
        </div>
        </div>
        <?php }?>
        
        <?php if($No_LunchDishes != NULL){ ?>    
        <div class="col-sm-10" >
        <div class="row">
            <p>
                
            <?php foreach($No_LunchDishes as $row): ?>
               <span style="float:right;margin-top:-3.6em;margin-right:1em;font-size:1.5em">
                    <?php echo $row->itemname, "  " ; ?>
                </span>
             <?php endforeach;?>
            </p>
        </div>
        </div>
        <?php }?>
        
        <?php if($No_DinnerDishes != NULL){ ?>    
        <div class="col-sm-10" >
        <div class="row">
            <p>
                
            <?php foreach($No_DinnerDishes as $row): ?>
               <span style="float:right;margin-top:-3.6em;margin-right:1em;font-size:1.5em">
                    <?php echo $row->itemname, "  " ; ?>
                </span>
             <?php endforeach;?>
            </p>
        </div>
        </div>
        <?php }?>
        
        <?php if($Add_BFDishes != NULL){ ?>    
        <div class="col-sm-10" >
        <div class="row">
            <p>
                
            <?php foreach($Add_BFDishes as $row): ?>
               <span style="float:right;margin-top:-3.6em;margin-right:1em;font-size:1.5em">
                    <?php echo $row->itemname, "  " ; ?>
                </span>
             <?php endforeach;?>
            </p>
        </div>
        </div>
        <?php }?>
        
        <?php if($Remove_BFDishes != NULL){ ?>    
        <div class="col-sm-10" >
        <div class="row">
            <p>
                
            <?php foreach($Remove_BFDishes as $row): ?>
               <span style="float:right;margin-top:-3.6em;margin-right:1em;font-size:1.5em">
                    <?php echo $row->itemname, "  " ; ?>
                </span>
             <?php endforeach;?>
            </p>
        </div>
        </div>
        <?php }?>
   
        
        <?php if($Add_LunchDishes != NULL){ ?>    
        <div class="col-sm-10" >
        <div class="row">
            <p>
                
            <?php foreach($Add_LunchDishes as $row): ?>
               <span style="float:right;margin-top:-3.6em;margin-right:1em;font-size:1.5em">
                    <?php echo $row->itemname, "  " ; ?>
                </span>
             <?php endforeach;?>
            </p>
        </div>
        </div>
        <?php }?>
        
        <?php if($Remove_LunchDishes != NULL){ ?>    
        <div class="col-sm-10" >
        <div class="row">
            <p>
                
            <?php foreach($Remove_LunchDishes as $row): ?>
               <span style="float:right;margin-top:-3.6em;margin-right:1em;font-size:1.5em">
                    <?php echo $row->itemname, "  " ; ?>
                </span>
             <?php endforeach;?>
            </p>
        </div>
        </div>
        <?php }?>
        
        <?php if($Add_DinnerDishes != NULL){ ?>    
        <div class="col-sm-10" >
        <div class="row">
            <p>
                
            <?php foreach($Add_DinnerDishes as $row): ?>
               <span style="float:right;margin-top:-3.6em;margin-right:1em;font-size:1.5em">
                    <?php echo $row->itemname, "  " ; ?>
                </span>
             <?php endforeach;?>
            </p>
        </div>
        </div>
        <?php }?>
        
        
        <?php if($Remove_DinnerDishes != NULL){ ?>    
        <div class="col-sm-10" >
        <div class="row">
            <p>
                
            <?php foreach($Remove_DinnerDishes as $row): ?>
               <span style="float:right;margin-top:-3.6em;margin-right:1em;font-size:1.5em">
                    <?php echo $row->itemname, "  " ; ?>
                </span>
             <?php endforeach;?>
            </p>
        </div>
        </div>
        <?php }?>
        
        <script src="../bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>

    </body>
</html>
