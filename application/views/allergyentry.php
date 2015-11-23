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
                <div class="col-lg-6 col-md-6">
                    <div class="container">
                        <h2>Allergy Entry Form</h2></br>
                        <?php echo form_open('cause/saveAllergyDetails'); ?>
    <div class="form-group">
      <label for="text">What you eat:</label>
      <input type="text" name="c1" class="form-control" id="email" placeholder="I like to eat lots of sweet">
    </div>
    <div class="form-group">
      <label for="text">What you drink:</label>
      <input type="text" name="c2" class="form-control" id="pwd" placeholder="I like to drink softdrink">
    </div>
    <div class="form-group">
      <label for="text">How offend you take lunch</label>
      <input type="text" name="c3" class="form-control" id="pwd" placeholder="Daily">
    </div>
    <div class="form-group">
      <label for="text">In a week how many time you eat at resturante:</label>
      <input type="text" name="c4" class="form-control" id="pwd" placeholder="Not much">
    </div>
    <div class="form-group">
      <label for="text">You eat Street food:</label>
      <input type="text" name="c5" class="form-control" id="pwd" placeholder="YES or No">
    </div>
    <div class="form-group">
      <label for="text">Did you had any prevuous allergy if so on what was it:</label>
      <input type="text" name="c6" class="form-control" id="pwd" placeholder="Yes, benuts">
    </div>
    <div class="form-group">
      <label for="text">Are you suffering from any dessises:</label>
      <input type="text" name="c7" class="form-control" id="pwd" placeholder="Yes, Fever">
    </div>
      <div class="form-group">
        <label for="sel1">Select Doctor:</label>
            <select name="doc" class="form-control" id="sel1">
                <?php    foreach ($doc as $doct) { ?>
                    <option value="<?php echo $doct->doctorid ?>"><?php echo $doct->d_fname." ".$doct->d_lname?></option>
                 <?php } ?>
            </select>
      </div>
     
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
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

    <!-- Page-Level Demo Scripts - Notifications - Use for reference -->
    <script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

    </script>

</body>

</html>
