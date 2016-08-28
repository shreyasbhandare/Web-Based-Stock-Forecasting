<?php

	$var = $_GET['sm'];
	
	
    //open connection to mysql db
    $connection = mysqli_connect("localhost","root","","stocks") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "SELECT ClosePrice FROM sma WHERE Symbol='".$var."' order by Time ";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
	
	 $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row["ClosePrice"];
    }
	
	  $sql1 = "SELECT sma FROM sma WHERE Symbol='".$var."' order by Time ";
    $result1 = mysqli_query($connection, $sql1) or die("Error in Selecting " . mysqli_error($connection));
	
	
	
	 $emparray1 = array();
    while($row =mysqli_fetch_assoc($result1))
    {
        $emparray1[] = $row["sma"];
    }
	$temp=0;
	for($x=0;$x<7;$x++)
	{
		//echo $emparray[$x];
		//echo " ";
		//echo $emparray1[$x];
		if($emparray[$x]<$emparray1[$x])
		{
			$temp=1;
		}
		
	}
	echo $temp;
    //echo json_encode($temp);

    //close the db connection
    mysqli_close($connection);
?>