<?php

	$var = $_GET['sm'];
	
	$connection = mysqli_connect("localhost","root","","stocks") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
	$sql = "SELECT ClosePrice FROM ann WHERE Symbol='".$var."' order by Time desc LIMIT 30";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
	
	

    //create an array
    $emparray = array();
	
	
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row["ClosePrice"];
    }
	
    //echo ($emparray);
	echo json_encode($emparray);

    //close the db connection
    mysqli_close($connection);

?>