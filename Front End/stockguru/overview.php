
<?php

if(isset($_POST['updateButton']))
{

$javaCaller = 0;
			
$tickerVal = $_POST["stock"];
$start = $_POST["start"];
$end = $_POST["end"];

//echo $tickerVal;

// 1. Enter Database details
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "stocks";
$row;

// 2. Create a database connection
$connection = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if ($connection->connect_error) {
    die("Database connection failed: " . $connection->connect_error);
}
else
{
	echo "Connection Successful<br/>";
}

// 3. Select a database to use 

$sql = "SELECT Time, ClosePrice FROM stockhistory WHERE symbol='".$tickerVal."'";

$query = $connection->query($sql);

$result;

if ($query->num_rows > 0)
{
	$x = 0;
	$fp = fopen('data.tsv', 'w');
	fwrite($fp, "date");
	fwrite($fp, "\t");
	fwrite($fp, "close");
	fwrite($fp, "\n");
	while ($row = $query->fetch_assoc())
	{
		//echo $row["ClosePrice"]."<br>";
		//$result[$x] = $row["ClosePrice"];
		
		fwrite($fp, $row["Time"]);
		fwrite($fp, "\t");
		fwrite($fp, $row["ClosePrice"]);
		fwrite($fp, "\n");
		
		/*
		
		fwrite($fp, $data["Date'\t');
		fwrite($fp, '');
		fclose($fp);
		*/
		
		$x++;
	}
	fclose($fp);
	
}
/*
for($x=0; $x < count($result); $x++)
{
	echo $result[$x]."<br>";
}
*/
$connection->close();
	
	$javaCaller = 1;
	testFunction();//echo "<script> testFunction(); </script>";
}	

?>






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

                    <a class="navbar-brand" href='homepage.html'> <img style="margin:-15px 0px" alt="logo" src="images/stock-guru-mod.png" height="60" /> </a>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="overview.php">OVERVIEW</a></li>
                        <li><a href="graph.html">GRAPH</a></li>
                        <li><a href="prediction1.html">PREDICTION</a></li>
                        <li><a href="news.html">MARKET NEWS</a></li>
						<li><a href="decision.html">DECISION</a></li>
                    </ul>
                </div>

            </div>    
        </nav>
		
		<div class = "container-fluid bg-grey">
<!------------------------------------------------------------------ commented temporarily -------------------------------------------		
		
			<div class = "col-sm-2">
				<h2><select name="ticker">
					<option class="placeholder" selected disabled value="">Select Ticker</option>
					<option value="FB">Facebook</option>
					<option value="GOOG">Google</option>
					<option value="AMZN">Amazon</option>
					<option value="BAC">Bank of America</option>
				</select>

				<h2><input type="submit" />
			
			</div>
<!------------------------------------------------------------------ commented temporarily ------------------------------------------->			
	<!------------------------------------------------------ added body ------------------------------------------------------------------->
	
	<div id="new_input">
		&nbsp &nbsp
		Stock: <input type="text" name="stock" id="stock" value="YHOO" 
		style="width: 70px;">
		&nbsp &nbsp
		Start: <input type="text" name="start" id="start" value="2013-08-10"
		style="width: 80px;">
		&nbsp &nbsp
		End: <input type="text" name="end" id="end" value="2014-03-10" 
		style="width: 80px;">
		&nbsp &nbsp
		<input name="updateButton" 
		type="submit" 
		value="Update" onclick="/>
	</div>

	<!------------------------------------------------------------------------------------------------------------------------->				
			
		</div>
		
	</div>
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

<!---------------------------------------------------------------------------------------------------------------------------------------->	

<!-- load the d3.js library -->    
<script src="http://d3js.org/d3.v3.min.js"></script>

<script>

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

</script>

<!---------------------------------------------------------------------------------------------------------------------------------------->	
  </body>
</html>
 