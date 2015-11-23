<?php

include("../../lib/inc/chartphp_dist.php");

$p = new chartphp();

$p->data = array(array(array('Protiens', 12),array('carbohydrates', 9), array('Fats', 14), array('Vitamins', 16),array('others', 9)));
$p->chart_type = "pie";


$out = $p->render('c1');
?>
<!DOCTYPE html>
<html>
	<head>
		<script src="../../lib/js/jquery.min.js"></script>
		<script src="../../lib/js/chartphp.js"></script>
		<link rel="stylesheet" href="../../lib/js/chartphp.css">

	<style>
		/* white color data labels */
		.jqplot-data-label{color:white;}
	</style>
	</head>
	
	<body>
		<div style="width:40%; min-width:450px;">
		<?php echo $out; ?>
		</div>
	</body>
</html>


