<?php

$servername ="localhost";
$username = "root"; //your username
$password = "root"; //your pasSword
$database = "gamestore";

//Getting values

$command = $_REQUEST['command'];

//Create connection
$conn = new mysqli ($servername, $username, $password, $database);
//Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}else{
    
}
if($command === 'showPName'){
    $query = "SELECT o.oid, o.cemail, o.orderquantity, ps.pname
    FROM orders o, purchase p, product_stock ps WHERE o.oid = p.oid AND p.pid = ps.pid";
} else if($command === 'showEName') {
    $query = "SELECT o.oid, o.cemail, o.orderquantity, e.ename, v.dateverified
    FROM orders o, verifies v, employee e
    WHERE o.oid = v.oid AND v.EID = e.EID";
} else if($command === 'showAll'){
    $query = "SELECT o.oid, o.cemail, o.orderquantity, ps.pname, e.ename, v.dateverified
    FROM orders o, verifies v, employee e, purchase p, product_stock ps
    WHERE o.oid = v.oid AND v.EID = e.EID AND o.oid = p.oid AND p.pid = ps.pid";
} else if($command === 'showOrder') {
    $query = "SELECT oid, cemail, orderquantity
    FROM orders";
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

    

?>