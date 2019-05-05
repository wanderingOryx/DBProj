<?php

function queryDB(){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ApptProj";
    $mysqli = new mysqli($servername, $username, $password, $dbname);
    $query = "SELECT status FROM Customer";
    $result = $mysqli->query($query);
    
    $i=0;
    while($row = $result->fetch_assoc()) {
        $temp = $row["status"];
        echo $temp;
	//array_push($returnMe, $temp);
    }
    $result->free();
    return(" ");
}

?>
