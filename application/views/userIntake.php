<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php include_once 'user_header.php';?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

<!DOCTYPE html>
<html lang="en">

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <div id="page-wrapper">
		<div class="row">
		<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				BLD
			</div>
			<div class="panel-body">
				<div class="row">

					<form role="form" method="post" action="<?php echo site_url("aiController/submitUserIntakeData"); ?>">
						<div class="form_group">
							
							<label>Breakfast</label>
								<div class="form-group">
									
									<label class="checkbox-inline">
										<input type="checkbox" name="b1" value="Tea"> Tea
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" name="b2" value="Beer"> Paratha
									</label>
									
								</div>
								<div class="form-group">
									<label class="checkbox-inline">
										<input type="checkbox" name="b3" value="1"> Coffee
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" name="b4" value="1"> Chapatti
									</label>
								</div>
							
							
						</div>
						<div class="form-group">
							
							<label>Lunch</label>
								<div class="form-group">
									
									<label class="checkbox-inline">
										<input type="checkbox" name="l1" value="Whiskey"> Rice
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" name="l2" value="1"> Roti
									</label>
									
								</div>
								<div class="form-group">
									
									<label class="checkbox-inline">
										<input type="checkbox" name="l3" value="1"> Daal
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" name="l4" value="1"> Bhaji
									</label>
									
								</div>
							
							
						</div>
						<div class="form-group">
							
							<label>Dinner</label>
								<div class="form-group">
									
									<label class="checkbox-inline">
										<input type="checkbox" name="d1" value="1"> Rice
									</label>
								</div>
								<div class="form-group">
									
									<label class="checkbox-inline">
										<input type="checkbox" name="d2" value="1"> SolKadi
									</label>
									
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
		
		</div>  
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

</body>

</html>