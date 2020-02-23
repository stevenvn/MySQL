<?php

$servername ="localhost";
$username = "root"; //your username
$password = "root"; //your pasSword
$database = "gamestore";

//Getting values
$OID = $_REQUEST['OID'];
$CEmail = $_REQUEST['CEmail'];
$OrderQuantity = $_REQUEST['OrderQuantity'];
$OrderQuantity = $_REQUEST['OrderQuantity'];




//Create connection
$conn = new mysqli ($servername, $username, $password, $database);
//Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}



$query = "INSERT INTO orders(OID,CEmail,OrderQuantity) VALUES 
('$OID', '$CEmail', '$OrderQuantity');";

if($conn->query($query) === TRUE){
    echo "Order ".$OID." added";   
}else{
    echo "error: ".$conn->error;
}

$conn->close();
    

?>