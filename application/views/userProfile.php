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
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-cutlery fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Add Meal</div>
                                    <div>Update</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo site_url("welcome/showIntake"); ?>">
                            <div class="panel-footer">
                                <span class="pull-left"><a href="<?php echo site_url("welcome/showIntake"); ?>">Click Me to Add meal</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
                
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-bar-chart-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">My Health</div>
                                    <div>View & compare Chart!</div>
                                </div>
                            </div>
                        </div>
                        <a href="">
                            <div class="panel-footer">
                                <span class="pull-left"><a href="<?php echo site_url("welcome/showHealth"); ?>">Click Me to view your Diet Status</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <i class="fa fa-question fa-fw"></i> Frequently Asked Questions
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                
                                <div class="list-group-item">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed">
                                        <i class="fa fa-pencil fa-fw"></i> Is it healthy for children to be on a vegan diet?
                                    </a>
                                    <div id="collapse1" class="panel-collapse collapse" style="height: auto;">
                                        <p class=" panel-body form-group">
                                            A well-balanced vegan diet is safe and healthy for any stage of life, including infancy, childhood, adolescence, and during pregnancy. Plant-based diets can easily provide all essential nutrients, vitamins, and minerals that growing children and mothers-to-be need. Simply have a variety of whole grains, beans, vegetables, and fruits, and be sure to include a daily source of vitamin B12, such as any common multiple vitamin. Plant-based diets have many important health advantages: Vegans enjoy a reduced risk of heart disease, diabetes, and some types of cancer. Since eating habits are established in early childhood, choosing a vegan diet can give your child the opportunity to enjoy a variety of nutritious foods—and to carry those healthy eating habits into adulthood. Learn more about vegan nutrition for children. Learn more about building strong bones in children. Read more about our book Healthy Eating for Life for Children.
                                        </p>
                                        

                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed">
                                        <i class="fa fa-pencil fa-fw"></i> What is the best way to get vitamin B12?
                                    </a>
                                    <div id="collapse2" class="panel-collapse collapse" style="height: auto;">
                                        <p class=" panel-body form-group">
                                            Individuals following a vegan diet can readily meet their vitamin B12 with a common daily multiple vitamin or fortified foods, such as vitamin B12-fortified breakfast cereals, soymilk, meat analogues, and nutritional yeast.
                                            Learn more about vitamin B12.
                                        </p>
                                        

                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed">
                                        <i class="fa fa-pencil fa-fw"></i> How do I get enough calcium on a vegan diet? What about osteoporosis?
                                    </a>
                                    <div id="collapse3" class="panel-collapse collapse" style="height: auto;">
                                        <p class=" panel-body form-group">
                                            By eating calcium-rich vegan foods, including leafy green vegetables such as broccoli and kale, white beans, fortified soymilks and juices, and a variety of fruits and vegetables, you can obtain all the calcium your body needs. But keeping your bones strong and avoiding osteoporosis depends on more than calcium intake—you also need to keep calcium in your bones. Exercise and vitamin D help keep the calcium in your bones, while animal protein, excess salt and caffeine, and tobacco can cause calcium loss. Learn how to prevent and reverse osteoporosis. Learn more about getting calcium on a vegan diet.
                                        </p>
                                        

                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="collapsed">
                                        <i class="fa fa-pencil fa-fw"></i> How do I get protein on a vegan diet? Do I need to combine proteins?
                                    </a>
                                    <div id="collapse4" class="panel-collapse collapse" style="height: auto;">
                                        <p class=" panel-body form-group">
                                            Protein is an important nutrient required for the building, maintenance, and repair of tissues in the body. It was once thought that various plant foods had to be eaten together to get their full protein value; this practice was known as “protein combining” or “protein complementing.” We now know that intentional combining is not necessary. As long as the diet contains a variety of grains, legumes, and vegetables, protein needs are easily met. Especially protein-rich vegan foods include soy-based products like tofu, tempeh (a fermented soybean product), seitan (a meat substitute made from a wheat protein called gluten), black beans, lentils, chickpeas, grains such as quinoa and bulgur, and whole-wheat bread. Learn more about getting protein on a vegan diet.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /.list-group -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
		</div>
                
		<!-- Expert's Tips -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="panel panel-default tooltip-demo">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Expert's Tips
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <?php
                                foreach($tips as $tip){
                                    echo "<a class='list-group-item' data-container='body' data-toggle='popover' data-placement='left' data-content='".$tip->tips."'>
                                        <i class='fa fa-comments-o fa-fw'></i>".$tip->d_fname." ".$tip->d_lname."
                                        <span class='pull-right text-muted small'><em>".$tip->timeoftip."</em>
                                        </span>
                                    </a>";
                                }
                                ?> 
                            </div>
                            <!-- /.list-group -->
                            <a href="#" class="btn btn-default btn-block">View older Tips</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                </div>
                <!-- /.col-lg-4 -->
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

    </script>

</body>

</html>
