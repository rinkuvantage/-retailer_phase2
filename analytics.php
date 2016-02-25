<?php require_once('header.php');
$uid=$_SESSION["User_id"];
$tokenid=$user->Userdetail($uid, 'tokenid', true);
$keyid=$user->Userdetail($uid, 'keyid', true);
//echo'<pre>';print_r(json_encode($_SESSION['graph'][date('Y-m-d')]));echo'</pre>';
$mperday=array();
?>
<?php /*?><style>
		.axis path,.axis line {fill: none;
	stroke: black;
	shape-rendering: crispEdges;
}

.axis text {
	font-family: sans-serif;
	font-size: 11px;
}

.dot {
  stroke: #000;
}


.legend {
	            padding: 5px;
	            font: 10px sans-serif;
	            background: yellow;
	            box-shadow: 2px 2px 1px #888;
            }


.analyticchartsection .bar {
  fill: steelblue;
}

.analyticchartsection .bar:hover {
  fill: brown;
}

.analyticchartsection .axis {
  font: 10px sans-serif;
}

.analyticchartsection .axis path,
.analyticchartsection .axis line {
  fill: none;
  stroke: #000;
  shape-rendering: crispEdges;
}

.analyticchartsection .x.axis path {
  display: none;
}
.analyticchartsection2 .axis path,
.analyticchartsection2 .axis line {
  fill: none;
  stroke: #000;
  shape-rendering: crispEdges;
}

.analyticchartsection2 .x.axis path {
  display: none;
}

.analyticchartsection2 .line {
  fill: none;
  stroke: steelblue;
  stroke-width: 1.5px;
}


		</style><?php */?>
<div id="page-wrapper">
  <div class="container-fluid">
  <div class="row">
  <?php if(isset($_SESSION['churn'])){ ?>
      <div class="col-md-6 col-sm-6">
        <a href="churn.php">Churn</a>
        <div class=".a-chart">
        </div>
      </div>
  <?php } ?>
  <?php if(isset($_SESSION['loyalty'])){ ?>
	  <div class="col-md-6 col-sm-6"><a href="loyalty-graph.php">Loyalty</a></div>
	<?php } ?>

    </div>
    <div class="row">
        <div class="analyticchartsection"></div>
    </div>

    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
</div>
<?php /*?><script src="js/d3.v3.min.js"></script><?php */?>
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
  
<?php /*?><script type="text/javascript">
		var w = 450;                        //width
		var h = 500;                        //height
		var padding = {top: 40, right: 40, bottom: 40, left:40};
		var dataset;
		//Set up stack method
		var stack = d3.layout.stack();
		var mpre='<?php echo 'uploads/'.$uid.'/stackbar.json'; ?>';
		d3.json(mpre,function(json){
			dataset = json;

			//Data, stacked
			stack(dataset);

			var color_hash = {
				    0 : ["Invite","#1f77b4"],
					1 : ["Accept","#2ca02c"],
					2 : ["Decline","#ff7f0e"]

			};
			//Set up scales
			var xScale = d3.time.scale()
				.domain([new Date(dataset[0][0].time),d3.time.day.offset(new Date(dataset[0][dataset[0].length-1].time),8)])
				.rangeRound([0, w-padding.left-padding.right]);

			var yScale = d3.scale.linear()
				.domain([0,
					d3.max(dataset, function(d) {
						return d3.max(d, function(d) {
							return d.y0 + d.y;
						});
					})
				])
				.range([h-padding.bottom-padding.top,0]);

			var xAxis = d3.svg.axis()
						   .scale(xScale)
						   .orient("bottom")
						   .ticks(d3.time.days,1);

			var yAxis = d3.svg.axis()
						   .scale(yScale)
						   .orient("left")
						   .ticks(10);



			//Easy colors accessible via a 10-step ordinal scale
			var colors = d3.scale.category10();

			//Create SVG element
			var svg = d3.select("#mbars")
						.append("svg")
						.attr("width", w)
						.attr("height", h);

			// Add a group for each row of data
			var groups = svg.selectAll("g")
				.data(dataset)
				.enter()
				.append("g")
				.attr("class","rgroups")
				.attr("transform","translate("+ padding.left + "," + (h - padding.bottom) +")")
				.style("fill", function(d, i) {
					return color_hash[dataset.indexOf(d)][1];
				});

			// Add a rect for each data value
			var rects = groups.selectAll("rect")
				.data(function(d) { return d; })
				.enter()
				.append("rect")
				.attr("width", 2)
				.style("fill-opacity",1e-6);


			rects.transition()
			     .duration(function(d,i){
			    	 return 500 * i;
			     })
			     .ease("linear")
			    .attr("x", function(d) {
					return xScale(new Date(d.time));
				})
				.attr("y", function(d) {
					return -(- yScale(d.y0) - yScale(d.y) + (h - padding.top - padding.bottom)*2);
				})
				.attr("height", function(d) {
					return -yScale(d.y) + (h - padding.top - padding.bottom);
				})
				.attr("width", 15)
				.style("fill-opacity",1);

				svg.append("g")
					.attr("class","x axis")
					.attr("transform","translate(40," + (h - padding.bottom) + ")")
					.call(xAxis);


				svg.append("g")
					.attr("class","y axis")
					.attr("transform","translate(" + padding.left + "," + padding.top + ")")
					.call(yAxis);

				// adding legend

				var legend = svg.append("g")
								.attr("class","legend")
								.attr("x", w - padding.right - 65)
								.attr("y", 25)
								.attr("height", 100)
								.attr("width",100);

				legend.selectAll("g").data(dataset)
					  .enter()
					  .append('g')
					  .each(function(d,i){
					  	var g = d3.select(this);
					  	g.append("rect")
					  		.attr("x", w - padding.right - 65)
					  		.attr("y", i*25 + 10)
					  		.attr("width", 10)
					  		.attr("height",10)
					  		.style("fill",color_hash[String(i)][1]);

					  	g.append("text")
					  	 .attr("x", w - padding.right - 50)
					  	 .attr("y", i*25 + 20)
					  	 .attr("height",30)
					  	 .attr("width",100)
					  	 .style("fill",color_hash[String(i)][1])
					  	 .text(color_hash[String(i)][0]);
					  });

				svg.append("text")
				.attr("transform","rotate(-90)")
				.attr("y", 0 - 5)
				.attr("x", 0-(h/2))
				.attr("dy","1em")
				.text("Number of Messages");

			svg.append("text")
			   .attr("class","xtext")
			   .attr("x",w/2 - padding.left)
			   .attr("y",h - 5)
			   .attr("text-anchor","middle")
			   .text("Days");



			//On click, update with new data
			d3.selectAll(".m")
				.on("click", function() {
					var date = this.getAttribute("value");

					var str='<?php echo 'uploads/'.$uid.'/'.date('Y-m-d'); ?>.json';


					d3.json(str,function(json){

						dataset = json;
						stack(dataset);

						console.log(dataset);

						xScale.domain([new Date(0, 0, 0,dataset[0][0].time,0, 0, 0),new Date(0, 0, 0,dataset[0][dataset[0].length-1].time,0, 0, 0)])
						.rangeRound([0, w-padding.left-padding.right]);

						yScale.domain([0,
										d3.max(dataset, function(d) {
											return d3.max(d, function(d) {
												return d.y0 + d.y;
											});
										})
									])
									.range([h-padding.bottom-padding.top,0]);

						xAxis.scale(xScale)
						     .ticks(d3.time.hour,2)
						     .tickFormat(d3.time.format("%H"));

						yAxis.scale(yScale)
						     .orient("left")
						     .ticks(10);

						 groups = svg.selectAll(".rgroups")
		                    .data(dataset);

		                    groups.enter().append("g")
		                    .attr("class","rgroups")
		                    .attr("transform","translate("+ padding.left + "," + (h - padding.bottom) +")")
		                    .style("fill",function(d,i){
		                        return color(i);
		                    });


		                    rect = groups.selectAll("rect")
		                    .data(function(d){return d;});

		                    rect.enter()
		                      .append("rect")
		                      .attr("x",w)
		                      .attr("width",1)
		                      .style("fill-opacity",1e-6);

		                rect.transition()
		                    .duration(1000)
		                    .ease("linear")
		                    .attr("x",function(d){
		                        return xScale(new Date(0, 0, 0,d.time,0, 0, 0));
		                    })
		                    .attr("y",function(d){
		                        return -(- yScale(d.y0) - yScale(d.y) + (h - padding.top - padding.bottom)*2);
		                    })
		                    .attr("height",function(d){
		                        return -yScale(d.y) + (h - padding.top - padding.bottom);
		                    })
		                    .attr("width",15)
		                    .style("fill-opacity",1);

		                rect.exit()
					       .transition()
					       .duration(1000)
					       .ease("circle")
					       .attr("x",w)
					       .remove();

		                groups.exit()
					       .transition()
					       .duration(1000)
					       .ease("circle")
					       .attr("x",w)
					       .remove();


						svg.select(".x.axis")
						   .transition()
						   .duration(1000)
						   .ease("circle")
						   .call(xAxis);

						svg.select(".y.axis")
						   .transition()
						   .duration(1000)
						   .ease("circle")
						   .call(yAxis);

						svg.select(".xtext")
						   .text("Hours");

						svg.select(".title")
				        .text("Number of messages per hour on " + date + ".");
					});
				});


		});

		</script><?php */?>
<?php /*?><script type="text/javascript">
		 var filepath='<?php echo 'uploads/'.$uid.'/demosaved.csv'; ?>';
		 var margin = {top: 20, right: 20, bottom: 60, left: 60},
			width = 980 - margin.left - margin.right,
			height = 400 - margin.top - margin.bottom;

		var x = d3.scale.ordinal()
			.rangeRoundBands([0, width], .1);

		var y = d3.scale.linear()
			.range([height, 0]);

		var xAxis = d3.svg.axis()
			.scale(x)
			.orient("bottom");

		var yAxis = d3.svg.axis()
			.scale(y)
			.orient("left")
			.ticks(10, "%");

		var svg = d3.select("body .analyticchartsection").append("svg")
			.attr("width", width + margin.left + margin.right)
			.attr("height", height + margin.top + margin.bottom)
		  .append("g")
			.attr("transform", "translate(" + margin.left + "," + margin.top + ")");

		d3.csv(filepath, type, function(error, data) {
		  if (error) throw error;

		  x.domain(data.map(function(d) { return d.letter; }));
		  y.domain([0, d3.max(data, function(d) { return d.frequency; })]);

		  svg.append("g")
			  .attr("class", "x axis")
			  .attr("transform", "translate(0," + height + ")")
			  .call(xAxis)
			  .append("text")
			  .attr("transform", "rotate(0)")
			  .attr("x", 400)
			  .attr("dy", "2em")
			  .attr("class", "xaxistext")
			  .text("Feature Name");

		  svg.append("g")
			  .attr("class", "y axis")
			  .call(yAxis)
			.append("text")
			  .attr("transform", "rotate(-90)")
			  .attr("y", -50)
			  .attr("dy", ".90em")
			  .attr("class", "yaxistext")
			  .style("text-anchor", "end")
			  .text("Percentage of Respondents");

		  svg.selectAll(".bar")
			  .data(data)
			.enter().append("rect")
			  .attr("class", "bar")
			  .attr("x", function(d) { return x(d.letter); })
			  .attr("width", x.rangeBand())
			  .attr("y", function(d) { return y(d.frequency); })
			  .attr("height", function(d) { return height - y(d.frequency); });
		});

		function type(d) {
		  d.frequency = +d.frequency;
		  return d;
		}

		 </script><?php */?>

		<?php /*?> <script>

var margin = {top: 20, right: 20, bottom: 30, left: 50},
    width = 450 - margin.left - margin.right,
    height = 500 - margin.top - margin.bottom;

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
var filepath='<?php echo 'uploads/'.$uid.'/linebar.csv'; ?>';
d3.csv(filepath, type, function(error, data) {
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
      .attr("y", 6)
      .attr("dy", ".71em")
      .style("text-anchor", "end")
      .text("Price ($)");

  svg.append("path")
      .datum(data)
      .attr("class", "line")
      .attr("d", line);
});

function type(d) {
  d.date = formatDate.parse(d.date);
  d.close = +d.close;
  return d;
}

</script><?php */?>
<?php require_once('footer.php'); ?>
