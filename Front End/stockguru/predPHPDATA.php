<?php

	$var = $_GET['sm'];
	$p = $_GET['period'];
	//$var = "YHOO";
	//$p = "10";
	
	$p1 = (int)$p;
	
	$connection = mysqli_connect("localhost","root","","stocks") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
	$sql = "SELECT ClosePrice, Time FROM ann WHERE Symbol='".$var."'LIMIT ".$p1 ; 
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
	
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    //echo ($emparray);
	echo json_encode($emparray);

    //close the db connection
    mysqli_close($connection);

?>