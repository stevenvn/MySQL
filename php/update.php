<?php

$servername ="localhost";
$username = "root"; //your username
$password = "root"; //your pasSword
$database = "gamestore";

//Getting values
$Price = $_REQUEST["Price"];
$ReleaseDate = $_REQUEST["ReleaseDate"];
$Publisher = $_REQUEST["Publisher"];
$Quantity = $_REQUEST["Quantity"];
$PID = $_REQUEST["PID"];
$PName = $_REQUEST["PName"];
$command = $_REQUEST["command"];




//Create connection
$conn = new mysqli ($servername, $username, $password, $database);
//Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

if($command === 'update'){
    $query = "UPDATE Product_Details, Product_Stock
    SET Product_Details.Price = $Price,
    Product_Details.ReleaseDate = '$ReleaseDate',
    Product_Details.Publisher = '$Publisher',
    Product_Stock.Quantity = $Quantity
    WHERE Product_Stock.PName = Product_Details.PName AND Product_Details.PName ='$PName' ";

    if($conn->query($query) === TRUE){
        echo "$PName Updated";
    }else{
        echo "error: ".$conn->error;
    }

}elseif($command === 'delete'){
    $query = "DELETE FROM Product_Details
    WHERE PName = '$PName'";
    
    if($conn->query($query) === TRUE){
        echo "Deleted $PName";
    }else{
        echo "error: ".$conn->error;
    }
}





$conn->close();
?>