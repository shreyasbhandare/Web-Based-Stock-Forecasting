

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
						<li><a href="" id = "decision">DEVELOPER</a></li>
                    </ul>
                </div>

            </div>    
        </nav>	
		
		<div class = "container-fluid bg-grey">
				
			<h2> Developer Documentation <br/></h2>
			
		</div>
		
		<h3>Requests</h3><br/>
			
		<h4>This API uses a RESTful style. For general tips on creating a request URI, see below</h4>
		<h4>The following is a sample request that the developer can use in his/her code:</h4>
		<p>&nbsp <code>http://localhost/stockguru/api.php?ticker={ticker-value}&variables[]={variable-1}&variables[]={variable-2}&table={current/history}&duration={number-of-days}&api-key={your-api-key}</code>
			
		<h4><b>Parameters:</b></h4>
		<p>Note: Names and Values in the following table are case-sensitive.</p>
	
	<h4>

	<table class="table table-hover">
		<thead>
		  <tr>
			<th>Name</th>
			<th>Values</th>		
		  </tr>
		</thead>
		
		<tbody>
		  <tr>
			<td>ticker</td>
			<td>GOOG<br/>YHOO<br/>AAPL<br/>MSFT<br/>UBS<br/>GS<br/>MS<br/>FB<br/>AMZN<br/>BAC<br/></td>	
		  </tr>
		  
		  <tr>
			<td>table</td>
			<td>history<br/>current<br/></td>
		  </tr>
		  
		  <tr>
			<td>variables for table=current</td>
			<td>ClosePrice - to get the current price<br/>Volume - to get the current volume</td>
		  </tr>

		  <tr>
			<td>variables for table=history</td>
			<td>Time - to get the time in string format<br/>
				OpenPrice - to get the open price<br/>
				ClosePrice - to get the close price<br/>
				HighPrice - to get the high price<br/>
				LowPrice - to get the low price<br/>
				Volume - to get the volume<br/>
			</td>
		  
		  </tr>		  
		  
		  <tr>
			<td>duration</td>
			<td>numeric - enter number of days in the past you want the data for</td>
		  </tr>

		  <tr>
			<td>api-key</td>
			<td>Alphanumeric key with the developer</td>
		  </tr>

		  <tr>
			<td>response-format</td>
			<td>.json</td>
		  </tr>		  
		  
		</tbody>
	</table>

	<h4><b>Examples:</b></h4>
	<p>For Historic Data
	<p>&nbsp &nbsp <code>http://localhost/stockguru/api.php?ticker=MSFT&variables[]=ClosePrice&variables[]=HighPrice&table=history&duration=30&api-key=12345</code>
	
	<p>For Current Data
	<p>&nbsp &nbsp <code>http://localhost/stockguru/api.php?ticker=YHOO&variables[]=ClosePrice&variables[]=Volume&table=current&api-key=12345</code>
	</h4>

	
	
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