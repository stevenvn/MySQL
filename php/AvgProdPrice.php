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
}

$query ="SELECT Publisher, COUNT(PName) 'Products', ROUND(AVG(price)) 'Average Price By Publisher'
from Product_Details
group by publisher";

$result = $conn->query($query);
echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">";
if($result->num_rows > 0) {
    echo " <table class=\"table table-hover\"><thead class=\"thead-dark\"><tr><th scope=\"col\">Publisher</th><th scope=\"col\">Products</th><th scope=\"col\">Average Price By Publisher</th></tr></thead><tbody>";
    while($row = $result->fetch_assoc()){
        echo "<tr><th>".$row["Publisher"] . "</th><th>".$row["Products"] . "</th><th>$".$row["Average Price By Publisher"]."</th></tr>";
    }
    echo "</tbody></table>";
} else {
    echo "0 results";
}
echo "<button style=\"position: relative; left: 50%;\" class=\"btn btn-success\" type=\"button\" onclick=\"window.location.href = '../productcontrol.html'\"> Back </button>";



$conn->close();
    
?>