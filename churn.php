<?php require_once('includes/head.php');
$page=1;
$nextpage=2;
if(isset($_REQUEST['page']) && $_REQUEST['page']>0)
{
	$page=$_REQUEST['page'];
	$nextpage=$page+1;
}
//echo'<pre>';print_r($_SESSION['churn']);echo'</pre>';
 ?>
 <!DOCTYPE html>
 <html>
   <head>
		 <meta charset="utf-8">
		 <meta http-equiv="X-UA-Compatible" content="IE=edge">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <meta name="description" content="">
		 <meta name="author" content="">
		 <link href="css/formcss.css" rel="stylesheet" />
		 <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic&#038;subset=latin,latin-ext"  type="text/css" />

		 <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
		 <link href="css/dashboardcss.css" rel="stylesheet" />
		 <link href="css/footerwithlogin.css" rel="stylesheet" />
		 <link href="css/bootstrap.min.css" rel="stylesheet">
		 <!-- Custom CSS -->
		 <link href="css/sb-admin.css" rel="stylesheet">
		 <!-- Morris Charts CSS -->
		 <link href="css/plugins/morris.css" rel="stylesheet">
		 <!-- Custom Fonts -->
		 <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <!-- bootstrap css -->
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
		 <title></title>
     <style media="screen">

			h3 {
				color: rgb(128, 177, 211);
				border-bottom: 1px solid #ddd;
				margin: 0;
				margin-top: 20px;
				padding-bottom: 10px;
			}

     </style>
   </head>
   <body>

     <div id="page-wrapper">
			 <div class="container-fluid text-center" style="max-width:700px;">

				 	<div>
						<a href="uploadfiles.php"><b>Back to Home</b></a>
				 	</div>
					<!-- Graphs -->
					<h3>Graph 1: Causes of Churn</h3>
					<div class="chart a-chart">

					</div>

					<h3>Graph 2: Churn Rate by Customer Segment</h3>
					<div class="chart b-chart">

					</div>

					<h3>Graph 3: Base Churn Rate</h3>
					<div class="chart c-chart">

					</div>

       </div>
     </div>

     <!-- jquery -->
		 <script src="js/jquery.js"></script>
		 <!-- Bootstrap Core JavaScript -->
		 <script src="js/bootstrap.min.js"></script>
		 <script type="text/javascript">
		 		jQuery(document).ready(function(){
		 			var h=parseInt(jQuery(window).height())-parseInt(jQuery('.navbar-fixed-top').height())-parseInt(jQuery('footer.text-center').height());
		 			jQuery('#page-wrapper').css({'min-height':h+'px'});
		 		});
		 	</script>
     <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
     <!-- bootstrap.min.js -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
     <!-- d3js.min.js -->
     <script src="http://d3js.org/d3.v3.min.js"></script>
     <!-- temporarily use q library for quick implementation -->
     <script src="http://dimplejs.org/dist/dimple.v2.1.6.min.js"></script>
     <!-- js to build chart -->
     <script type="text/javascript">

       $(function() {

				 <?php

					$res = json_encode($_SESSION['churn']);

					$res_arr = json_decode($res);

				 ?>
         // chart a
         var dataseta = <?php echo json_encode($res_arr[0]) ?>

         var svg = dimple.newSvg(".a-chart", 700, 700);

         var chart = new dimple.chart(svg, dataseta);
         chart.addCategoryAxis("x", "Featurename"); // <- change here if any changes to the field names
         chart.addMeasureAxis("y", "Importance"); // <- change here if any changes to the field names
         chart.addSeries(null, dimple.plot.bar);
         chart.draw();

				 //  chart b
				 var datasetb = <?php echo json_encode($res_arr[1]) ?>

				 var svgb = dimple.newSvg(".b-chart", 600, 600);

					var chartb = new dimple.chart(svgb, datasetb);
					chartb.addCategoryAxis("x", "State");
					chartb.addMeasureAxis("y", "Value");
					chartb.addSeries("Measure", dimple.plot.bar);
					chartb.addLegend(200,10,380,20, "right")
					chartb.defaultColors = [
								new dimple.color("red"),
								new dimple.color("green")
					];
					chartb.draw();

				 //  chart c
				 var datasetc = <?php echo json_encode($res_arr[2]) ?>

				 var svgc = dimple.newSvg(".c-chart", 700, 700);

         var chartc = new dimple.chart(svgc, datasetc);
         chartc.addCategoryAxis("x", "Day");
         y = chartc.addMeasureAxis("y", "Churn");
         chartc.addSeries(null, dimple.plot.line);
         // added overrride min so graph doesnt look too big for a small line
         // can be calclulated with min from dataset - 0.1
         y.overrideMin = 0.8;
         chartc.draw();

       })

     </script>
   </body>
 </html>


<?php //require_once('footer.php'); ?>
