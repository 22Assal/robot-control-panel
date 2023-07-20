<?php

$servername ="localhost";
$username="root";
$password="";
$database_name="direct";

//connection
$con= new mysqli($servername,$username,$password,$database_name);
//connection validity
if(!$con)
{
die("connection failed" . mysqli_connect_error());
}

$sqll="SELECT move , direction FROM direct1 ORDER BY move DESC LIMIT 1";
$result =$con->query($sqll);


if($result->num_rows > 0){

while($row = $result->fetch_assoc()){
echo  "  " . $row['direction'];
}
} else{
echo "0 results";}

$con->close();
?>
