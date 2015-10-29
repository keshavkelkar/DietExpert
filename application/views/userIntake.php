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
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                <form role="form" method="post" action="<?php echo site_url("aiController/submitUserIntakeData"); ?>">                                <div class="panel panel-primary">
                                        <div class="panel-body">
                                        <div class="form-group ">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <span>Breakfast</span>
                                                <div class="form-control">
                                                    <input class="form-group" type="checkbox" name="c1" value="Tea"> Tea
                                                    <input type="checkbox" name="c2" value="Bread"> Bread
                                                    <input type="checkbox" name="c3" value="Chapati"> Chapati
                                                    <input type="checkbox" name="c4" value="Paratha"> Paratha
                                                    <input type="checkbox" name="c5" value="Idli"> Idli
                                                    <input type="checkbox" name="c5" value="sheera"> sheera
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <!-- /.panel-body -->
                                </div>

                                <div class="panel panel-primary">
                                        <div class="panel-body">
                                        <div class="form-group ">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <span>Lunch</span>
                                                <div class="form-control">
                                                    <input class="form-group" type="checkbox" name="c1" value="Rice_Cooked"> Rice_Cooked
                                                    <input type="checkbox" name="c2" value="Curd"> Curd
                                                    <input type="checkbox" name="c3" value="Chapati"> Chapati
                                                    <input type="checkbox" name="c4" value="FishCurry"> FishCurry
                                                    <input type="checkbox" name="c5" value="Papad"> Papad
                                                    <input type="checkbox" name="c5" value="LemonJuice"> LemonJuice
                                                </div>
                                            </div>	
                                        </div>
                                        </div>
                                        <!-- /.panel-body -->
                                </div>

                                <div class="panel panel-primary">
                                        <div class="panel-body">
                                        <div class="form-group ">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <span>Dinner</span>
                                                <div class="form-control">
                                                    <input class="form-group" type="checkbox" name="c1" value="Sandwich"> Sandwich
                                                    <input type="checkbox" name="c2" value="VegNoodles"> VegNoodles
                                                    <input type="checkbox" name="c3" value="Rice_Cooked"> Rice_Cooked
                                                    <input type="checkbox" name="c4" value="FriedChicken"> FriedChicken
                                                    <input type="checkbox" name="c5" value="Eggs"> Eggs
                                                    <input type="checkbox" name="c5" value="GrilledChicken"> GrilledChicken
                                                </div>
                                            </div>	
                                        </div>
                                        </div>
                                        <!-- /.panel-body -->
                                </div>
                                        
                                    <div class="panel-footer">
                            <span>
                                    
                                <div class="form-group">
							<input class="btn btn-primary btn-md btn-block" type="submit" name="submit" Value="Done">
							<input class="btn btn-danger btn-md btn-block" type="reset" Value="Close">
						</div>
                            </span>
                    </div>

                                <!-- /.panel -->
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
