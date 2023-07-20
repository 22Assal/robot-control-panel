<?php

$reader= $_POST["data"];

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

$sqll="INSERT INTO direct1 (move , direction ) VALUES( '','$reader')";

//insertion of data to the database :
if($con->query($sqll)=== TRUE){
echo " " . $reader;
}
else{
echo "Erorr: " .$sqll . "<br>" . $con->error;
}
$con->close();
?>