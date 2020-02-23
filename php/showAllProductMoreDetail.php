<?php

$servername ="localhost";
$username = "root"; //your username
$password = "root"; //your pasSword
$database = "gamestore";

//Getting values



//Create connection
$conn = new mysqli ($servername, $username, $password, $database);
//Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}else{
    
}

$query = "SELECT Product_Stock.PID, Product_Details.PName, Product_Details.ReleaseDate,
Product_Details.Price, Product_Details.Publisher, Product_Stock.Quantity
FROM Product_Stock
INNER JOIN Product_Details
ON Product_Stock.PName=Product_Details.PName
ORDER BY product_details.PName";


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