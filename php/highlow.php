<?php

$servername ="localhost";
$username = "root"; //your username
$password = "root"; //your pasSword
$database = "gamestore";

$hl = $_REQUEST['command'];

//Create connection
$conn = new mysqli ($servername, $username, $password, $database);
//Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

if($hl === 'highest'){
    $query = "SELECT * FROM employee WHERE ESalary = (SELECT MAX(ESalary) FROM employee)";
}elseif($hl === 'lowest'){
    $query = "SELECT * FROM employee WHERE ESalary = (SELECT MIN(ESalary) FROM employee)";
}

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