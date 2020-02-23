<?php

$servername ="localhost";
$username = "root"; //your username
$password = "root"; //your pasSword
$database = "gamestore";

//Getting values
$PName = $_REQUEST["PName"];


//Create connection
$conn = new mysqli ($servername, $username, $password, $database);
//Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}else{
    
}

$query = "SELECT Product_Stock.PID, Product_Details.PName, Product_Details.ReleaseDate,
Product_Details.Price
FROM Product_Stock
INNER JOIN Product_Details
ON Product_Stock.PName=Product_Details.PName
WHERE Product_Stock.PName LIKE '%$PName%'";
$result = mysqli_query($conn,$query);


//store in array
$data = array ();
//while loop through database
while ($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

//send $data to front end in JSON format
echo json_encode($data);

    
    

?>