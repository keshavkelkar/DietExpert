<?php

include("../../lib/inc/chartphp_dist.php");

$p = new chartphp();

$p->data = array(array(array('Protiens', 12),array('carbohydrates', 9), array('Fats', 14), array('Collestrol', 16),array('abc', 7), array('pqr', 9)));
$p->chart_type = "pie";

/*
*
$p->data_sql = "select c.categoryname, sum(a.UnitPrice * a.Quantity) as Sales
					from products b, `order details` a, categories c
					where a.productid = b.productid and c.categoryid = b.categoryid
					group by c.categoryid
					order by c.categoryid";
*
*/

// Common Options
$p->title = "Pie Chart";

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


