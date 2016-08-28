<?php

	//echo "english";
    //open connection to mysql db
    $connection = mysqli_connect("localhost","root","","stocks") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "SELECT Time,ClosePrice,HighPrice,LowPrice FROM stockhistory WHERE Symbol='YHOO'";
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
?>