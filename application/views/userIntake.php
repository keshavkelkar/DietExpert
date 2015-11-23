<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $time_now=mktime(date('h')+4, date('i')+30);
    $today = date('h:i a',$time_now);
?>

<?php include_once 'user_header.php';?>
<!DOCTYPE html>
<html lang="en">

<body>
    <?php if(($today > "00:00 pm") && ($today < "11:58 pm")){?>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    My Consumption
                </div>

                <div class="panel-body">
                <form role="form" method="post" action="<?php echo site_url("DietController/submitUserIntakeData"); ?>"> 
                    <div class="panel panel-danger">
                        <div class="panel-body">
                            <div class="form-group ">
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <span>You had your breakfast ?</span>
                                    <div >
                                        <input class="" type="radio" name="bf1" value="1"> Yes
                                        <input class="" type="radio" name="bf1" value="0"> No
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group ">
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <span>What you had for the Breakfast?</span>
                                    <div class="form-group ">
                                        <?php foreach ($breakfast as $row) {?>
                                               <div class="col-lg-3"><input class="form-group" type="checkbox" name="bf_list[]" value="<?php echo $row ->itemname; ?>"> <?php echo $row ->itemname;?></div>
                                        <?php } ?>       

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->

                    </div>
                                
                    <div class="panel panel-danger">

                        <div class="panel-body">
                            <div class="form-group ">
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <span>You had your Lunch ?</span>
                                    <div class="">
                                        <input type="radio" name="lunch1" value="1"> Yes
                                        <input type="radio" name="lunch1" value="0"> No
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <span>What you had for the Lunch?</span>
                                <p class="clearfix"> </p>
                                <div class="form-group ">
                                    <?php foreach ($lunch as $row) {?>
                                    <div class="col-lg-3"><input type="checkbox" name="lunch_list[]" value="<?php echo $row ->itemname; ?>"> <?php echo $row ->itemname;?> </div>
                                        <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->

                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-body">
                            <div class="form-group ">
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <span>You had your Dinner ?</span>
                                    <div class="">
                                        <input type="radio" name="Dinner1" value="1"/> Yes
                                        <input type="radio" name="Dinner1" value="0"/> No
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <span>What you had for the Dinner?</span>
                                <p class="clearfix"> </p>
                                <div class="form-group ">
                                    <?php foreach ($dinner as $row) {?>
                                    <div class="col-lg-3"><input class="form-group" type="checkbox" name="Dinner_list[]" value="<?php echo $row ->itemname;?>"> <?php echo $row ->itemname;?></div>
                                    <?php } ?>      
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->

                </div>


                    <div class="form-group">
                        <input class="btn btn-default" type="submit" name="submit" Value="Done">
                        <input class="btn btn-default" type="reset" Value="Close">
                    </div>
                </form>
            </div>
                </div>
            </div>
						
            </div>
            <!-- /.row -->
	 </div>
        <!-- /#page-wrapper -->
        </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Notifications - Use for reference -->
    <script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })
	
	// popover demo
    $("[data-toggle=popover]")
        .popover()

    </script>

    
    <?php }else { ?>
           <div id="wrapper">
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Please Come after 9 PM to fill all the details..
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           </div>
    
    <?php } ?>
    
    
</body>

</html>
