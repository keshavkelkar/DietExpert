<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php include_once 'user_header.php';?>
<!DOCTYPE html>
<html lang="en">

<body>

    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            My Consumption
                        </div>
                        
                        <div class="panel-body">
                            <form role="form" method="post" action="<?php echo site_url("DietController/submitUserIntakeData"); ?>"> 
                                <div class="panel panel-danger">
                                    <div class="panel-body">
                                        <div class="form-group ">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <span>You had your breakfast ?</span>
                                                <div class="">
                                                    <input class="" type="radio" name="bf1" value="1"> Yes
                                                    <input class="" type="radio" name="bf1" value="0"> No
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group ">
                                            <div class="col-lg-12">
                                                <span>What you had for the Breakfast?</span>
                                                <div class="form-group ">
                                                    <div class="form-control">
                                                        <?php foreach ($breakfast as $row) {?>
                                                           <input class="form-group" type="checkbox" name="bf_list[]" value="<?php echo $row ->itemname; ?>"> <?php echo $row ->itemname;?> 
                                                        <?php } ?>       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.panel-body -->
                                    
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div class="col-lg-12 col-md-8 col-sm-8">
                                                <span>Have you ate anything?</span>
                                                <div class="form-group ">
                                                    <div class="">
                                                    <input class="" type="radio" name="bf2" value="1"> Yes
                                                    <input class="" type="radio" name="bf2" value="0"> No
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div class="col-lg-12 col-md-8 col-sm-8">
                                                <span>Tick mark the items which u had in between</span>
                                                <div class="form-group ">
                                                    <div class="">
                                                        list from tanvi
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="panel panel-danger">
                                    
                                    <div class="panel-body">
                                        <div class="form-group ">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <span>You had your Lunch ?</span>
                                                <div class="">
                                                    <input class="" type="radio" name="lunch1" value="1"> Yes
                                                    <input class="" type="radio" name="lunch1" value="0"> No
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group ">
                                            <div class="col-lg-12">
                                                <span>What you had for the Lunch?</span>
                                                <div class="form-group ">
                                                    <div class="form-control">
                                                        <?php foreach ($lunch as $row) {?>
                                                           <input class="form-group" type="checkbox" name="lunch_list[]" value="<?php echo $row ->itemname;?>"> <?php echo $row ->itemname;?> 
                                                        <?php } ?>      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.panel-body -->
                                                                    
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div class="col-lg-12 col-md-8 col-sm-8">
                                                <span>Have you ate anything in the afternoon time?</span>
                                                <div class="form-group ">
                                                    <div class="">
                                                    <input class="" type="radio" name="lunch2" value="1"> Yes
                                                    <input class="" type="radio" name="lunch2" value="0"> No
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div class="col-lg-12 col-md-8 col-sm-8">
                                                <span>Tick mark the items which u had in between</span>
                                                <div class="form-group ">
                                                    <div class="">
                                                        list from tanvi
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                                <div class="panel panel-danger">
                                    <div class="panel-body">
                                        <div class="form-group ">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <span>You had your Dinner ?</span>
                                                <div class="">
                                                    <input class="" type="radio" name="Dinner1" value="1"> Yes
                                                    <input class="" type="radio" name="Dinner1" value="0"> No
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group ">
                                            <div class="col-lg-12">
                                                <span>What you had for the Dinner?</span>
                                                <div class="form-group ">
                                                    <div class="form-control">
                                                        <?php foreach ($dinner as $row) {?>
                                                           <input class="form-group" type="checkbox" name="Dinner_list[]" value="<?php echo $row ->itemname;?>"> <?php echo $row ->itemname;?> 
                                                        <?php } ?>      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.panel-body -->
                                                                    
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div class="col-lg-12 col-md-8 col-sm-8">
                                                <span>Have you ate anything in the evening time?</span>
                                                <div class="form-group ">
                                                    <div class="">
                                                    <input class="" type="radio" name="Dinner2" value="1"> Yes
                                                    <input class="" type="radio" name="Dinner2" value="0"> No
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div class="col-lg-12 col-md-8 col-sm-8">
                                                <span>Tick mark the items which u had in between</span>
                                                <div class="form-group ">
                                                    <div class="">
                                                        list from tanvi
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
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

</body>

</html>
