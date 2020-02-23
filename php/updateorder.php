<?php

$servername ="localhost";
$username = "root"; //your username
$password = "root"; //your pasSword
$database = "gamestore";

//Getting values
$OID = $_REQUEST['OID'];
$CEmail = $_REQUEST['CEmail'];
$OrderQuantity = $_REQUEST['OrderQuantity'];
$command = $_REQUEST['command'];

//Create connection
$conn = new mysqli ($servername, $username, $password, $database);
//Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

if($command === 'update'){
    $query = "UPDATE orders
    SET CEmail = '$CEmail',
    OrderQuantity = '$OrderQuantity'
    where OID = '$OID'";

    if($conn->query($query) === TRUE){
        echo "Order Updated";
    }else{
        echo "error: ".$conn->error;
    }

}elseif($command === 'delete'){
    $query = "DELETE FROM orders
    WHERE OID = '$OID'";
    
    if($conn->query($query) === TRUE){
        echo "Order Deleted";
    }else{
        echo "error: ".$conn->error;
    }
}

$conn->close();
    
?>