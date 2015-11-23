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
            <div class="panel panel-primary">
                        <div class="panel-heading">Health Status</div>
                        <div class="panel-body">

                    <!-- /.row -->
                    
                        <div class="col-lg-6 col-sm-12 col-md-12 col-xs-12">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                       <h4>Diet Status : you are (overfit/balanced/underfit)</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                
                                                <th>#</th>
                                                <th>Your Consumption</th>
                                                <th>Expected Consumption</th>
                                                <th>Result</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Calories</td>
                                                <td>2020</td>
                                                <td>2000</td>
                                                <td>-20</td>
                                            </tr>
                                            <tr>
                                                <td>Proteins</td>
                                                <td>2400</td>
                                                <td>2200</td>
                                                <td>+200</td>
                                            </tr>
                                            <tr>
                                                <td>Fats</td>
                                                <td>3500</td>
                                                <td>2000</td>
                                                <td>+1500</td>
                                            </tr>
                                            <tr>
                                                <td>Carbohydrates</td>
                                                <td>2020</td>
                                                <td>2000</td>
                                                <td>-20</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                           <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 --> 
                                    
                                    
                        </div>   
                                
                        <div class="col-lg-6 col-sm-12 col-md-12 col-xs-12">
                            <div class="panel panel-danger">
                                <div class="panel-heading">Balanced Calorie Chart</div>
                                <div class="panel-body">
                                      <div class="row-fluid">
                                        <div class="span10">
                                        <div class="row-fluid">
                                            <div id="demo" class="tab-pane fade in active">
                                                    <iframe style="overflow:auto" name="demo_frame" id="demo_frame" frameborder="0" width="100%" height="500" src="about:blank"></iframe>
                                            </div>
                                        </div><!--/row-->
                                        </div><!--/span-->


                                      </div><!--/row-->
                                </div>

                                <!-- Le javascript
                                ================================================== -->
                                <!-- Placed at the end of the document so the pages load faster -->
                                <script src="<?php echo base_url(); ?>/js/jquery.js"></script>
                                <script src="<?php echo base_url(); ?>/js/bootstrap.min.js"></script>
                                <script>

                                        $('#grid-demo-tabs a').click(function (e) {
                                        e.preventDefault();
                                        $(this).tab('show');
                                        })

                                        var demo = location.href.split("#")[1];
                                        if (!demo)
                                        {
                                                demo = 'css/demos/basic/pie.php';
                                        }

                                        jQuery('#demo_frame').attr('src','<?php echo base_url(); ?>/'+demo);
                                        jQuery('#demo_frame').load(function() { iframeLoaded(this); } );

                                        jQuery('#code').load('index.php?file='+demo);

                                        jQuery('#code').css('height', jQuery(window).height() - 286);

                                        function iframeLoaded(iFrameID,stop) 
                                        {
                                                if(iFrameID) 
                                                {
                                                        iFrameID.height = "";
                                                        if(iFrameID.contentDocument){
                                                                iFrameID.height = iFrameID.contentDocument.body.offsetHeight + 35 + "px";
                                                        } else {
                                                                iFrameID.height = iFrameID.contentWindow.document.body.scrollHeight + 45 + "px";
                                                        }

                                                        // alert(parseInt(jQuery('#code').css('height')));
                                                        // alert(parseInt(iFrameID.height));

                                                        if (parseInt(jQuery('#code').css('height')) <= parseInt(iFrameID.height))
                                                                {jQuery('#code').css('height',iFrameID.height);}
                                                        else
                                                                {jQuery('#code').css('height', jQuery(window).height() - 286);}
                                                }

                                                if (!stop)
                                                        setTimeout(function(){iframeLoaded(iFrameID,1);},1000);
                                        }

                                        var accordion_list = $(".accordion-body");
                                        accordion_list.first().addClass("in");
                                </script>

                        </div><!--/.fluid-container-->


                        </div>
                        <!-- /.col-lg-8 -->
                        
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">Detailed View</div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Calories</th>
                                                <th>Proteins</th>
                                                <th>Fats</th>
                                                <th>Carbs</th>
                                                <th>you Are</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Breakfast</td>
                                                <td>Calories</td>
                                                <td>proteins</td>
                                                <td>fats</td>
                                                <td>carbs</td>
                                                <td>status</td>
                                            </tr>
                                            <tr>
                                                <td>Lunch</td>
                                                <td>Calories</td>
                                                <td>proteins</td>
                                                <td>fats</td>
                                                <td>carbs</td>
                                                <td>status</td>
                                            </tr>
                                            <tr>
                                                <td>Dinner</td>
                                                <td>Calories</td>
                                                <td>proteins</td>
                                                <td>fats</td>
                                                <td>carbs</td>
                                                <td>status</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                           <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 --> 
                                    
                                    
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
