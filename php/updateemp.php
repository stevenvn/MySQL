<?php

$servername ="localhost";
$username = "root"; //your username
$password = "root"; //your pasSword
$database = "gamestore";

//Getting values
$EID = $_REQUEST["EID"];
$EName = $_REQUEST["EName"];
$ESalary = $_REQUEST["ESalary"];
$ERole = $_REQUEST["ERole"];
$command = $_REQUEST["command"];

//Create connection
$conn = new mysqli ($servername, $username, $password, $database);
//Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

if($command === 'update'){
    $query = "UPDATE employee
    set EName = '$EName',
    ESalary = $ESalary,
    ERole = '$ERole'
    Where EID = $EID";

    if($conn->query($query) === TRUE){
        echo "Employee Updated";
    }else{
        echo "error: ".$conn->error;
    }

}elseif($command === 'delete'){
    $query = "DELETE FROM employee
    WHERE EID = $EID";
    
    if($conn->query($query) === TRUE){
        echo "Employee Deteled";
    }else{
        echo "error: ".$conn->error;
    }
}

//add employee function
elseif($command === 'addemp'){
    $query = "insert into employee
    WHERE EID = $EID, EName = '$EName', ESalary = $ESlary, ERole = '$ERole'";
    
    if($conn->query($query) === TRUE){
        echo "Employee Deteled";
    }else{
        echo "error: ".$conn->error;
    }
}
$conn->close();
    

?>