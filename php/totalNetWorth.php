<?php

$servername ="localhost";
$username = "root"; //your username
$password = "root"; //your pasSword
$database = "gamestore";


//Create connection
$conn = new mysqli ($servername, $username, $password, $database);
//Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}


$query = "
SELECT SUM( product_stock.Quantity * product_details.Price) sum From product_stock, product_details WHERE product_stock.PName = product_stock.PName
";

$result = mysqli_query($conn,$query);


//store in array
$data = array ();
//while loop through database
while ($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

//send $data to front end in JSON format
echo json_encode($data);


$conn->close();
?>