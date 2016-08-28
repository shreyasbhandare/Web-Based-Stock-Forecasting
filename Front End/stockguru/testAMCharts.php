

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="images/stock-guru-ico.ico"/>
    <title>Stock Guru</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!---------------------------------------------------------------------------------------------------------------------------------->

<!---------------------------------------------------- For AMCharts --------------------------------------------------------------------->	
	
<script src="amcharts/amcharts.js" type="text/javascript"></script>
<script src="amcharts/serial.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<script src="http://www.amcharts.com/lib/3/plugins/dataloader/dataloader.min.js" type="text/javascript"></script>




<script src="amcharts/amcharts.js" type="text/javascript"></script>
<script src="amcharts/serial.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<script src="http://www.amcharts.com/lib/3/plugins/dataloader/dataloader.min.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



	
<!---------------------------------------------------------------------------------------------------------------------------------------->    
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


      <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
 
  input[type=radio] {
    border: 0px;
    width: 10%;
    height: 1em;
}
 
  .button {
	/*adjust the roundness*/
    border-radius: 6px;
    moz-border-radius: 6px;
    webkit-border-radius: 6px;

    background-color: #555555; /* Black */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
}
  
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #009900;
      font-size: 50px;
  }
  .logo-small1 {
      color: #cc0000;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #4d4d4d;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;	
      animation-duration: 1s;	
      -webkit-animation-duration: 1s;
      visibility: visible;			
  }
  @keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }	
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  
  <!------------------------------- added css ------------------------------->
  
  path { 
    stroke: steelblue;
    stroke-width: 2;
    fill: none;
}

text.shadow {
    stroke: white;
    stroke-width: 2.5px;
    opacity: 0.9;
}

.axis path,
.axis line {
    fill: none;
    stroke: grey;
    stroke-width: 1;
    shape-rendering: crispEdges;
}

<!------------------------------- added css end ------------------------------->

  </style>
 
  
  
  </head>
  
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <form method="post" id="form1" runat="server">
    <div>
    
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavBar">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="" id="home"> <img style="margin:-15px 0px" alt="logo" src="images/stock-guru-mod.png" height="60" /> </a>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="" id = "overview">OVERVIEW</a></li>
                        <li><a href="" id = "graph">GRAPH</a></li>
                        <li><a href="" id = "prediction">PREDICTION</a></li>
                        <li><a href="" id = "news">MARKET NEWS</a></li>
						<li><a href="" id = "decision">DECISION</a></li>
                    </ul>
                </div>

            </div>    
        </nav>
		
		<div class = "container-fluid bg-grey">
<!------------------------------------------------------------------ commented temporarily ------------------------------------------->	
		
			<div class = "col-sm-2">
				<h2><select required name="ticker" id="stock" onclick="tickFucntion(this.value)">
					<option class="placeholder" selected disabled value="">Select Ticker</option>
					<option value="FB">Facebook</option>
					<option value="GOOG">Google</option>
					<option value="AMZN">Amazon</option>
					<option value="BAC">Bank of America</option>
					<option value="MSFT">Microsoft</option>
					<option value="MS">Morgan Stanley</option>
					<option value="AAPL">Apple</option>
					<option value="GS">Goldman Sachs</option>
					<option value="UBS">UBS</option>
					<option value="YHOO">Yahoo</option>					
				</select>
			
				
				<h3>
				<input class="button" name="updateButton" type="submit" value="See Graph" onclick= "return charts();"/>
							
			</div>
			
			<div class = "col-sm-2 col-md-offset-2">
				<h2>
					<input type="radio" name="rad" id="duration" value="oneMonth" onclick="radFucntion(this.value)"> One Month<br>
					<input type="radio" name="rad" id="duration" value="sixMonths" onclick="radFucntion(this.value)"> Six Months<br>
					<input type="radio" name="rad" id="duration" value="oneYear" onclick="radFucntion(this.value)"> One Year
				</h2>

			</div>
<!------------------------------------------------------------------ commented temporarily ------------------------------------------->			
	<!------------------------------------------------------ added body -------------------------------------------------------------------
	
	<div id="new_input">
		&nbsp &nbsp
		Stock: <input type="text" name="stock" id="stock" value="GOOG" style="width: 70px;">
		&nbsp &nbsp
		Start: <input type="text" name="start" id="start" value="2013-08-10"
		style="width: 80px;">
		&nbsp &nbsp
		End: <input type="text" name="end" id="end" value="2014-03-10" 
		style="width: 80px;">
		&nbsp &nbsp
		<input name="updateButton" 
		type="submit" 
		value="Update" onclick= "return charts();"/>
	</div>

	<!------------------------------------------------------------------------------------------------------------------------->				
			
		</div>
		
		<div class = "col-sm-2">
			<h3>
			Ticker Symbol : <input type = "text" id = "tickSym" readonly>
			</h3>
		</div>	
		
		<div class = "col-sm-2 col-md-offset-2">
			<h3>
			Range : <input type = "text" id = "radSelect" readonly>
			</h3>		
		</div>
		
	</div>
	
	<div id="chartdiv" style="width: 900px; height: 400px;"></div>
	   
	</form>
	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


	<script>
	$(document).ready(function(){
	  // Add smooth scrolling to all links in navbar + footer link
	  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

		// Prevent default anchor click behavior
		event.preventDefault();

		// Store hash
		var hash = this.hash;

		// Using jQuery's animate() method to add smooth page scroll
		// The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
		$('html, body').animate({
		  scrollTop: $(hash).offset().top
		}, 900, function(){
	   
		  // Add hash (#) to URL when done scrolling (default click behavior)
		  window.location.hash = hash;
		});
	  });
	  
	  $(window).scroll(function() {
		$(".slideanim").each(function(){
		  var pos = $(this).offset().top;

		  var winTop = $(window).scrollTop();
			if (pos < winTop + 600) {
			  $(this).addClass("slide");
			}
		});
	  });
	})
	</script>

	
<!------------------------------------------------------- AM Charts ------------------------------------------------------------------------->	

<script>

function radFucntion(radVal)
{
	document.getElementById('radSelect').value =  radVal;
}

function tickFucntion(tickVal)
{
	document.getElementById('tickSym').value =  tickVal;
}

function charts()
{
	
	var ticker = document.getElementById('stock').value;
	var duration = document.getElementById('radSelect').value;
	
	var dataString = 'name1='+ ticker;
	$.ajax({
	type: "POST",
	url: "graphFb.php",
	data: dataString,
	cache: false,
	//success: function(result){
	//success:callback
	//alert(result);
	
	

/*
	if(ticker == 'FB')
	{	
		if(duration == 'oneYear')
			var file = "graphFb.php";
		else if(duration == 'sixMonths')
			var file = "graphFb6.php";
		else if(duration == 'oneMonth')
			var file = "graphFb1.php";
	}
	else if(ticker == 'GOOG')
	{
		if(duration == 'oneYear')
			var file = "graphGoog.php";
		else if(duration == 'sixMonths')
			var file = "graphGoog6.php";
		else if(duration == 'oneMonth')
			var file = "graphGoog1.php";
	}
	else if(ticker == 'AMZN')
	{
		if(duration == 'oneYear')
			var file = "graphAmzn.php";
		else if(duration == 'sixMonths')
			var file = "graphAmzn6.php";
		else if(duration == 'oneMonth')
			var file = "graphAmzn1.php";
	}
	else if(ticker == 'BAC')
	{
		if(duration == 'oneYear')
			var file = "graphBac.php";
		else if(duration == 'sixMonths')
			var file = "graphBac6.php";
		else if(duration == 'oneMonth')
			var file = "graphBac1.php";	
	}
	else if(ticker == 'YHOO')
	{
		if(duration == 'oneYear')
			var file = "graphYhoo.php";
		else if(duration == 'sixMonths')
			var file = "graphYhoo6.php";
		else if(duration == 'oneMonth')
			var file = "graphYhoo1.php";		
	}
	else if(ticker == 'AAPL')
	{
		if(duration == 'oneYear')
			var file = "graphAapl.php";
		else if(duration == 'sixMonths')
			var file = "graphAapl6.php";
		else if(duration == 'oneMonth')
			var file = "graphAapl1.php";
	}
	else if(ticker == 'GS')
	{
		if(duration == 'oneYear')
			var file = "graphGs.php";
		else if(duration == 'sixMonths')
			var file = "graphGs6.php";
		else if(duration == 'oneMonth')
			var file = "graphGs1.php";
	}
	else if(ticker == 'MS')
	{
		if(duration == 'oneYear')
			var file = "graphMs.php";
		else if(duration == 'sixMonths')
			var file = "graphMs6.php";
		else if(duration == 'oneMonth')
			var file = "graphMs1.php";
	}
	else if(ticker == 'UBS')
	{
		if(duration == 'oneYear')
			var file = "graphUbs.php";
		else if(duration == 'sixMonths')
			var file = "graphUbs6.php";
		else if(duration == 'oneMonth')
			var file = "graphUbs1.php";
	}
	else if(ticker == 'MSFT')
	{
		
		if(duration == 'oneYear')
			var file = "graphMsft.php";
		else if(duration == 'sixMonths')
			var file = "graphMsft6.php";
		else if(duration == 'oneMonth')
			var file = "graphMsft1.php"; 	
	}	
*/
	
var chart = AmCharts.makeChart( "chartdiv", {
  "type": "serial",
  "theme":"light",
  "depth3D":9,
  "marginRight": 40,
    "marginLeft": 40,
    "autoMarginOffset": 20,
  "dataLoader": {
    "url": "graphFb.php"    //  "getinjosn.php"
	
	  },
	  "valueScrollbar":{
      "oppositeAxis":false,
      "offset":50,
      "scrollbarHeight":10
    },
	"chartScrollbar": {
        "graph": "g1",
        "oppositeAxis":false,
        "offset":30,
        "scrollbarHeight": 80,
        "backgroundAlpha": 0,
        "selectedBackgroundAlpha": 0.1,
        "selectedBackgroundColor": "#888888",
        "graphFillAlpha": 0,
        "graphLineAlpha": 0.5,
        "selectedGraphFillAlpha": 0,
        "selectedGraphLineAlpha": 1,
        "autoGridCount":true,
        "color":"#AAAAAA"
    },
	
	  "balloon": {
        "borderThickness": 1,
        "shadowAlpha": 0
    },
    "graphs": [{
        "id": "g1",
        "balloon":{
          "drop":true,
          "adjustBorderColor":false,
          "color":"#ffffff"
        },
        "bullet": "round",
        "bulletBorderAlpha": 1,
        "bulletColor": "#FFFFFF",
        "bulletSize": 5,
        "hideBulletsCount": 50,
        "lineThickness": 2,
        "title": "red line",
        "useLineColorForBulletBorder": true,
        "valueField": "ClosePrice",
        "balloonText": "<span style='font-size:18px;'>[[ClosePrice]]</span>"
    }],
	
	"chartCursor": {
        "pan": true,
        "valueLineEnabled": true,
        "valueLineBalloonEnabled": true,
        "cursorAlpha":1,
        "cursorColor":"#258cbb",
        "limitToGraph":"g1",
        "valueLineAlpha":0.2
    },
    "valueScrollbar":{
      "oppositeAxis":false,
      "offset":50,
      "scrollbarHeight":10
    },
	
	
	
  "pathToImages": "http://www.amcharts.com/lib/3/images/",
  "categoryField": "Time",
  "dataDateFormat": "YYYY-MM-DD",
  "startDuration": 1,
    "rotate": false,
  "categoryAxis": {
    "parseDates": false,
	"labelRotation": 45
  },
  
  "graphs": [ {
    "valueField": "ClosePrice",
    //"bullet": "round",
   // "bulletBorderColor": "#FFFFFF",
    //"bulletBorderThickness": 9,
    "lineThickness ": 9,
	"lineColor": "#000099",
    "lineAlpha": 1.9
  }] 

} );

//}
	})
	
	return false;
}

</script>	
	
<!-------------------------------------------------------------------------------------------------------------------------------------------->	
	
	
<!---------------------------------------------------------------------------------------------------------------------------------------->	

<!-- load the d3.js library -->    
<script src="http://d3js.org/d3.v3.min.js"></script>

<script>
/*
// Set the dimensions of the graph
var margin = {top: 30, right: 40, bottom: 30, left: 50},
    width = 600 - margin.left - margin.right,
    height = 270 - margin.top - margin.bottom;

// Parse the date / time
var parseDate = d3.time.format("%Y-%m-%d").parse;

// Set the ranges
var x = d3.time.scale().range([0, width]);
var y = d3.scale.linear().range([height, 0]);

var xAxis = d3.svg.axis().scale(x)
    .orient("bottom").ticks(5);

var    yAxis = d3.svg.axis().scale(y)
    .orient("left").ticks(5);

var valueline = d3.svg.line()
    .x(function(d) { return x(d.date); })
    .y(function(d) { return y(d.high); });
    
  
var svg = d3.select("body")
    .append("svg")
        .attr("width", width + margin.left + margin.right)
        .attr("height", height + margin.top + margin.bottom)
      .append("g")
        .attr("transform", "translate(" 
            + margin.left 
            + "," + margin.top + ")");

var stock = document.getElementById('stock').value;
var start = document.getElementById('start').value;
var end = document.getElementById('end').value;

/*
var inputURL = "http://query.yahooapis.com/v1/public/yql"+
    "?q=select%20*%20from%20yahoo.finance.historicaldata%20"+
    "where%20symbol%20%3D%20%22"
    +stock+"%22%20and%20startDate%20%3D%20%22"
    +start+"%22%20and%20endDate%20%3D%20%22"
    +end+"%22&format=json&env=store%3A%2F%2F"
    +"datatables.org%2Falltableswithkeys";
*/


/*	
	var inputURL ="https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20yahoo.finance.historicaldata%20where%20symbol%20%3D%20%22"+stock+"%22%20and%20startDate%20%3D%20%22"+start+"%22%20and%20endDate%20%3D%20%22"+end+"%22&format=json&diagnostics=true&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=";
	
    // Get the data 
    d3.json(inputURL, function(error, data){

    data.query.results.quote.forEach(function(d) {
        d.date = parseDate(d.Date);
        d.high = +d.High;
        d.low = +d.Low;
    });

    // Scale the range of the data
    x.domain(d3.extent(data.query.results.quote, function(d) {
        return d.date; }));
    y.domain([
        d3.min(data.query.results.quote, function(d) { return d.low; }), 
        d3.max(data.query.results.quote, function(d) { return d.high; })
    ]);

    svg.append("path")        // Add the valueline path.
        .attr("class", "line")
        .attr("d", valueline(data.query.results.quote));

    svg.append("g")            // Add the X Axis
        .attr("class", "x axis")
        .attr("transform", "translate(0," + height + ")")
        .call(xAxis);

    svg.append("g")            // Add the Y Axis
        .attr("class", "y axis")
        .call(yAxis);

    svg.append("text")          // Add the label
        .attr("class", "label")
        .attr("transform", "translate(" + (width+3) + "," 
            + y(data.query.results.quote[0].high) + ")")
        .attr("dy", ".35em")
        .attr("text-anchor", "start")
        .style("fill", "steelblue")
        .text("high");

    svg.append("text")          // Add the title shadow
        .attr("x", (width / 2))
        .attr("y", margin.top / 2)
        .attr("text-anchor", "middle")
        .attr("class", "shadow")
        .style("font-size", "16px")
        .text(stock);
        
    svg.append("text")          // Add the title
        .attr("class", "stock")
        .attr("x", (width / 2))
        .attr("y", margin.top / 2)
        .attr("text-anchor", "middle")
        .style("font-size", "16px")
        .text(stock);
});

// ** Update data section (Called from the onclick)
function updateData() {
 
while(true)
	if(var check == "<?php echo $javaCaller;?>")
	{
	var stock = document.getElementById('stock').value;
	var start = document.getElementById('start').value;
	var end = document.getElementById('end').value;

	var inputURL = "http://query.yahooapis.com/v1/public/yql"+
		"?q=select%20*%20from%20yahoo.finance.historicaldata%20"+
		"where%20symbol%20%3D%20%22"
		+stock+"%22%20and%20startDate%20%3D%20%22"
		+start+"%22%20and%20endDate%20%3D%20%22"
		+end+"%22&format=json&env=store%3A%2F%2F"
		+"datatables.org%2Falltableswithkeys";

		// Get the data again
		d3.json(inputURL, function(error, data){

			data.query.results.quote.forEach(function(d) {
				d.date = parseDate(d.Date);
				d.high = +d.High;
				d.low = +d.Low;
			});

			// Scale the range of the data
			x.domain(d3.extent(data.query.results.quote, function(d) {
				return d.date; }));
			y.domain([
				d3.min(data.query.results.quote, function(d) { 
					return d.low; }), 
				d3.max(data.query.results.quote, function(d) { 
					return d.high; })
			]);

			// Select the section we want to apply our changes to
			var svg = d3.select("body").transition();

			// Make the changes
			svg.select(".line")    // change the line
				.duration(750) 
				.attr("d", valueline(data.query.results.quote));

			svg.select(".label")   // change the label text
				.duration(750)
				.attr("transform", "translate(" + (width+3) + "," 
				+ y(data.query.results.quote[0].high) + ")");
	 
			svg.select(".shadow") // change the title shadow
				.duration(750)
				.text(stock);  
				 
			svg.select(".stock")   // change the title
				.duration(750)
				.text(stock);
		 
			svg.select(".x.axis") // change the x axis
				.duration(750)
				.call(xAxis);
			svg.select(".y.axis") // change the y axis
				.duration(750)
				.call(yAxis);

		});		
	break;		
	}

}
*/
</script>

<!---------------------------------------------------------------------------------------------------------------------------------------->	

<script>

document.getElementById("home").onclick = function()
{
	location.href = "homepage.html";
}
	
document.getElementById("decision").onclick = function()
{
	location.href = "decision.html";
}	

document.getElementById("news").onclick = function()
{
	location.href = "news.html";
}	

document.getElementById("prediction").onclick = function()
{
	location.href = "prediction1.html";
}	

document.getElementById("graph").onclick = function()
{
	location.href = "graph.html";
}

document.getElementById("overview").onclick = function()
{
	location.href = "overview1.php";
}	
		
</script>


</body>
</html>
 