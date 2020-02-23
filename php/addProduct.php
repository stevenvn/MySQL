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




//Create connection
$conn = new mysqli ($servername, $username, $password, $database);
//Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}



$query = "INSERT INTO Product_Details(PName, Price, ReleaseDate, Publisher) VALUES 
('$PName', $Price, '$ReleaseDate', '$Publisher');

";

if($conn->query($query) === TRUE){
    $query2 = "INSERT INTO Product_Stock(PID, PName, Quantity) VALUES 
    ($PID, '$PName', $Quantity)";
    
    if($conn->query($query2) === TRUE){
        echo $PName."added";   
    }else{
        echo "error: ".$conn->error;
    }
    
}else{
    echo "error: ".$conn->error;
}
$conn->close();
    

?>