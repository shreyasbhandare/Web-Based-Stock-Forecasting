<?php

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

$sql = "SELECT Time, ClosePrice FROM stockhistory WHERE symbol = 'GOOG' ";

$query = $connection->query($sql);

$result;

if ($query->num_rows > 0)
{
	$x = 0;
	$fp = fopen('data.tsv', 'w');
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
		
	
?>
