

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
	
	
	
	<script type="text/javascript">

	/***********************************************
	* Drop Down Date select script- by JavaScriptKit.com
	* This notice MUST stay intact for use
	* Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and more
	***********************************************/
/*
	var monthtext=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec'];

	function topopulatedropdown(dayfield, monthfield, yearfield){
	var today=new Date()
	var dayfield=document.getElementById(dayfield)
	var monthfield=document.getElementById(monthfield)
	var yearfield=document.getElementById(yearfield)

	for (var i=0; i<31; i++)
	dayfield.options[i]=new Option(i, i+1)
	dayfield.options[today.getDate()]=new Option(today.getDate(), today.getDate(), true, true) //select today's day
	for (var m=0; m<12; m++)
	monthfield.options[m]=new Option(monthtext[m], monthtext[m])
	monthfield.options[today.getMonth()]=new Option(monthtext[today.getMonth()], monthtext[today.getMonth()], true, true) //select today's month
	var thisyear=today.getFullYear()
	thisyear-=3
	for (var y=0; y<3; y++){
	yearfield.options[y]=new Option(thisyear, thisyear)
	thisyear+=1
	}
	yearfield.options[3]=new Option(today.getFullYear(), today.getFullYear(), true, true) //select today's year
	}


	function frompopulatedropdown(dayfield1, monthfield1, yearfield1){
	var today=new Date()
	var dayfield1=document.getElementById(dayfield1)
	var monthfield1=document.getElementById(monthfield1)
	var yearfield1=document.getElementById(yearfield1)
	for (var i=0; i<31; i++)
	dayfield1.options[i]=new Option(i, i+1)
	dayfield1.options[today.getDate()]=new Option(today.getDate(), today.getDate(), true, true) //select today's day
	for (var m=0; m<12; m++)
	monthfield1.options[m]=new Option(monthtext[m], monthtext[m])
	monthfield1.options[today.getMonth()]=new Option(monthtext[today.getMonth()], monthtext[today.getMonth()], true, true) //select today's month
	var thisyear=today.getFullYear()
	thisyear-=3
	for (var y=0; y<3; y++){
	yearfield1.options[y]=new Option(thisyear, thisyear)
	thisyear+=1
	}
	yearfield1.options[3]=new Option(today.getFullYear(), today.getFullYear(), true, true) //select today's year
	}
*/
	</script>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<?php

	if(isset($_POST['mainid']))
	{

		$sym = $_POST['mainid'];
		
		//open connection to mysql db
		$connection = mysqli_connect("localhost","root","","stocks") or die("Error " . mysqli_error($connection));

		//fetch table rows from mysql db
		$sql = "SELECT Time,ClosePrice FROM stockhistory WHERE Symbol='".$sym."' order by Time";
		$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
		
		//value from prediction table
		   $sql1 = "SELECT Time,ClosePrice FROM ann WHERE Symbol='".$sym."' order by Time";
		$result1 = mysqli_query($connection, $sql1) or die("Error in Selecting " . mysqli_error($connection));

		//create an array
		$emparray = array();
		
		while($row =mysqli_fetch_assoc($result))
		{
			$emparray[] = $row;
			$data1=$row['ClosePrice'];
			echo json_encode($data1);
			break;
		}
		
		 $emparray1 = array();
		
		while($row =mysqli_fetch_assoc($result1))
		{
			$emparray1[] = $row;
			$prediction=$row['ClosePrice'];
			echo json_encode($prediction);
			break;
		}
	   // echo json_encode(array_merge($emparray,$emparray1));
		//echo $data1;
		//close the db connection
		mysqli_close($connection);
	}

?>
	
	

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
		width: 5%;
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

                    <a class="navbar-brand" href="" id = "home"> <img style="margin:-15px 0px" alt="logo" src="images/stock-guru-mod.png" height="60" /> </a>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="" id = "overview">OVERVIEW</a></li>
                        <li><a href="" id = "graph">GRAPH</a></li>
                        <li><a href="" id = "prediction">PREDICTION</a></li>
                        <li><a href="" id = "news">MARKET NEWS</a></li>
						<li><a href="" id = "decision">DECISION</a></li>
						<li><a href="" id = "developer">DEVELOPER</a></li>
                    </ul>
                </div>

            </div>    
        </nav>	

			
		<div class = "container-fluid bg-grey">
		
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
		
		
		</div>
		
			<h3> &nbsp Do you own this Stock?
				<input type="radio" name="own" value="yes" onclick="radFucntion(this.value)"> Yes
				<input type="radio" name="own" value="no" onclick="radFucntion(this.value)"> No<br/><br/>
			</h3>
<!--			
			<h3> &nbsp Prediction For :
				<input type="radio" name="pred" value="oneDay" checked> 1 Day
				<input type="radio" name="pred" value="fiveDay"> 5 Days
				<input type="radio" name="pred" value="thirtyDay"> 30 Days<br/><br/>
			</h3>
-->			
			<h3><input class="button" type="submit" value="Submit" onclick="return decfunction();" /></h3><br/><br/>
	
	</div>

			
			<h3> &nbsp Ticker Value :<br/>
			&nbsp <input type = "text" id = "tickSym" name = 'tickerText'><br/><br/>
			
			<h3> &nbsp Does user own it? :<br/>
			&nbsp <input type = "text" id = "radSelect" readonly><br/><br/>
			
			<h3> &nbsp Decision :<br/>
			&nbsp <input type = "text" id = "demo" name = 'demoName' readonly ><br/><br/>
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
	
	
<script type="text/javascript">
/*
//populatedropdown(id_of_day_select, id_of_month_select, id_of_year_select)
window.onload=function(){
topopulatedropdown("todaydropdown", "tomonthdropdown", "toyeardropdown")
frompopulatedropdown("fromdaydropdown", "frommonthdropdown", "fromyeardropdown")
}

//window.onload=function(){
//populatedropdown1("daydropdown1", "monthdropdown1", "yeardropdown1")
//}
*/
</script>


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

<!------------------------------------------------------------------------------------------------------------------------------------------>


<script>

function radFucntion(radVal)
{
	document.getElementById('radSelect').value =  radVal;
}

function tickFucntion(tickVal)
{
	document.getElementById('tickSym').value =  tickVal;
	var id = tickVal;
	    $.ajax({
        type: "POST",
        url: "decision.php",
        data: "mainid =" + id,
        success: function(result) {
//           $("#somewhere").html(result);
        }
    });
}


</script>

<script>


function decfunction()
{
	//var tick = document.getElementById('stock').value;
	var opt = document.getElementById('radSelect').value;




	if(opt == 'yes')
		var retValSell = sellfunction();
	else if(opt == 'no')	
		var retValBuy = buyfunction();
	return false;
}

</script>

<script>
	
function sellfunction()
{


	var data1= "<?php echo $data1 ?>";
	var prediction= "<?php echo $prediction ?>";

	var temp = prediction - data1;
	temp=temp.toFixed(2);
	//var temp = data1 - prediction;
	//temp=temp.toFixed(2);

	var imageSrc1 = "images/stockup.jpg";
	var imageSrc2 = "images/stockdown.jpg";

	var input = document.getElementById('img');


	var s="BUY";
	str=s.fontcolor("green");
	
	var str1="SELL";
	str1=str1.fontcolor("red");
	
	var str2="NOT To BUY";
	str2=str2.fontcolor("red");
	
	var str3="HOLD ON";
	str3=str3.fontcolor("green");

	
	
if(temp>0)
{	
	var output_message= "The stock Price is predicted to rise by " + temp + "$."+" We would Recommend you to "+ str3+" to this stock and sell it later";
	input.src = imageSrc1;
}
else if (temp === 0)
{	var output_message= "The stock Price is Expected to remain the same. We would recommend you to hold on to the stock." ;
}
else
{
	var output_message= "The stock Price is Expected to fall by " + temp + "$. We would recommend you to " + str1 + " this stock." ;

input.src = imageSrc2;
}
document.getElementById("demo").value = output_message;
return false;
}


</script>

<script>

function buyfunction()
{
	

	var data1= "<?php echo $data1 ?>";
	var prediction= "<?php echo $prediction ?>";

	var temp = prediction - data1;
	temp=temp.toFixed(2);
	//var temp = data1 - prediction;
	//temp=temp.toFixed(2);

	var imageSrc1 = "images/stockup.jpg";
	var imageSrc2 = "images/stockdown.jpg";

	var input = document.getElementById('img');


	var s="BUY";
	str=s.fontcolor("green");
	
	var str1="SELL";
	str1=str1.fontcolor("red");
	
	var str2="NOT To BUY";
	str2=str2.fontcolor("red");
	
	var str3="HOLD ON";
	str3=str3.fontcolor("green");
	
	
	
if(temp>0)
{	var output_message= "The stock Price is predicted to rise by " +temp+"$."+" We would Recommend you to "+str+" this stock";
	input.src = imageSrc1;
}
else if (temp === 0)
{	var output_message= "The stock Price is Expected to remain the same. We would recommend you to hold on to the stock." ;
}
else
{
var output_message= "The stock Price is Expected to fall by " + temp + "$. We would recommend you "+ str2 + " this stock." ;

input.src = imageSrc2;
}

document.getElementById("demo").value = output_message;
//document.getElementById("demo").innerHTML = output_message;
return false;
}




</script>


<!---------------------------------------------------------------------------------------------------------------------------------------------->

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

document.getElementById("developer").onclick = function()
{
	location.href = "webservice.php";
}	
		
</script>
	
</body>

</html>
  
  