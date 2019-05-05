<?php

require('config.php');

$sql = "SELECT  cID, pID, decision  FROM chooses";
$result = $mysqli->query($sql);

while($row = $result->fetch_array(MYSQLI_ASSOC)){
  $data[] = $row;
}

$results = ["sEcho" => 1,
        	"iTotalRecords" => count($data),
        	"iTotalDisplayRecords" => count($data),
        	"aaData" => $data ];

echo json_encode($results);

 
?>
