<?php

////////////////////// history ///////////////////////
//http://localhost/stockguru/api.php?ticker=MSFT&variables[]=ClosePrice&variables[]=HighPrice&table=history&duration=30&api-key=12345

////////////////////// current ///////////////////////
//http://localhost/stockguru/api.php?ticker=YHOO&variables[]=ClosePrice&variables[]=Volume&table=current&api-key=12345

	if($_GET['api-key'] == '12345')
	{
		$tick = $_GET['ticker'];			
		//$tick = 'YHOO';
		
		$vars = $_GET['variables'];			
		//$vars = array("Time", "ClosePrice", "HighPrice");
		
		$table = $_GET['table'];
		//$table = 'history';
		
		if(!isset($_GET['duration']))
			$dur = null;
		else
			$dur = $_GET['duration'];
		//AND Time >= ( CURDATE( ) - INTERVAL 186 DAY ) ORDER BY Time";
		
		$connection = mysqli_connect("localhost","root","","stocks") or die("Error " . mysqli_error($connection));
		
		$sql = "SELECT";
		$cnt = 0;
		while($cnt < count($vars))
		{
			if($cnt == count($vars)-1)
				$sql = $sql." $vars[$cnt]";
			else
				$sql = $sql." $vars[$cnt],";
			$cnt = $cnt+1;
		}
		
		if($table == 'history')
			$sql = $sql." FROM stock".$table." WHERE Symbol='".$tick."' AND Time >= ( CURDATE( ) - INTERVAL ".$dur." DAY )";
		
		if($table == 'current')
			$sql = $sql." FROM stock".$table." WHERE Symbol='".$tick."'"; // AND Time >= ( CURDATE( ) - INTERVAL ".$dur." DAY )";
		
		//fetch table rows from mysql db
		//$sql = "SELECT Time,ClosePrice,HighPrice,LowPrice FROM stockhistory WHERE Symbol='".$tick."' ORDER BY Time";
		//echo $sql;
		
		$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
		
		//create an array
		$emparray = array();
		
		while($row =mysqli_fetch_assoc($result))
		{
			$emparray[] = $row;
		}
		echo json_encode($emparray);
	
		//close the db connection
	    mysqli_close($connection);
	}


?>