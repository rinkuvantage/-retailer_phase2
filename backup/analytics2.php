<?php require_once('header.php');
$uid=$_SESSION["User_id"];
$tokenid=$user->Userdetail($uid, 'tokenid', true);
$keyid=$user->Userdetail($uid, 'keyid', true);
//echo'<pre>';print_r(json_encode($_SESSION['graph'][date('Y-m-d')]));echo'</pre>';
$mperday=array();
?>
<style>

.axis path,
.axis line {
  fill: none;
  stroke: #000;
  shape-rendering: crispEdges;
}

.x.axis path {
  display: none;
}

.line {
  fill: none;
  stroke: steelblue;
  stroke-width: 1.5px;
}


		</style>
<div id="page-wrapper">
  <div class="container-fluid">
   
	<div class="row">
        <div class="analyticchartsection2"></div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
</div>
<script src="js/d3.v3.min.js"></script>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
		jQuery(document).ready(function(){
			var h=parseInt(jQuery(window).height())-parseInt(jQuery('.navbar-fixed-top').height())-parseInt(jQuery('footer.text-center').height());
			jQuery('#page-wrapper').css({'min-height':h+'px'});
		});
	</script>

		 
		 <script>
var margin = {top: 20, right: 20, bottom: 40, left: 50},
    width = 700 - margin.left - margin.right,
    height = 400 - margin.top - margin.bottom;

var formatDate = d3.time.format("%d-%b-%y");

var x = d3.time.scale()
    .range([0, width]);

var y = d3.scale.linear()
    .range([height, 0]);

var xAxis = d3.svg.axis()
    .scale(x)
    .orient("bottom");

var yAxis = d3.svg.axis()
    .scale(y)
    .orient("left");

var line = d3.svg.line()
    .x(function(d) { return x(d.date); })
    .y(function(d) { return y(d.close); });

var svg = d3.select("body .analyticchartsection2").append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");
var filepath='<?php echo 'uploads/'.$uid.'/linebar.tsv'; ?>';
d3.tsv(filepath, type, function(error, data) {
  if (error) throw error;
  x.domain(d3.extent(data, function(d) { return d.date; }));
  y.domain(d3.extent(data, function(d) { return d.close; }));

  svg.append("g")
      .attr("class", "x axis")
      .attr("transform", "translate(0," + height + ")")
      .call(xAxis);

  svg.append("g")
      .attr("class", "y axis")
      .call(yAxis)
    .append("text")
      .attr("transform", "rotate(-90)")
      .attr("y", -46)
      .attr("dy", ".71em")
      .style("text-anchor", "end")
      .text("Churn");

  svg.append("path")
      .datum(data)
      .attr("class", "line")
      .attr("d", line);
	  
	svg.append("g")
			  .attr("class", "x axis")
			  .attr("transform", "translate(0," + height + ")")
			  .call(xAxis)
			  .append("text")
			  .attr("transform", "rotate(0)")
			  .attr("x", 400)
			  .attr("dy", "2.4em")
			  .attr("class", "xaxistext")
			  .text("Day");
});

function type(d) {
  d.date = formatDate.parse(d.date);
  d.close = +d.close;
  return d;
}

</script>
<?php require_once('footer.php'); ?>
