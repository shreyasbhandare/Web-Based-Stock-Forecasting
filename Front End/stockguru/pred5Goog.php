<?php

	//echo "english";
    //open connection to mysql db
    $connection = mysqli_connect("localhost","root","","stocks") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "SELECT Time,ClosePrice FROM stockhistory WHERE Symbol='GOOG' AND Time >= ( CURDATE( ) - INTERVAL 60 DAY ) ORDER BY Time";
	$sql1 = "SELECT Time,ClosePrice FROM ann WHERE Symbol='GOOG' AND Time <= ( CURDATE( ) + INTERVAL 5 DAY ) ORDER BY Time";
		
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
	$result1 = mysqli_query($connection, $sql1) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
	
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
	
	$emparray1 = array();
	
    while($row =mysqli_fetch_assoc($result1))
    {
        $emparray1[] = $row;
    }
	
    echo json_encode(array_merge($emparray,$emparray1));

    //close the db connection
    mysqli_close($connection);
?>



