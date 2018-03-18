<?php
require "connect.php";
$place_name = $_POST[""];
$description = $_POST[""];
$latitude = $_POST[""];
$longitude = $_POST[""];
$charges = $_POST[""];
$contact_no = $_POST[""];
$query= "insert into accommodation (place_name, description, latitude, longitude, charges, contact_no ) values ($place_name, $description, $latitude, $longitude, $charges, $contact_no)";

if($connection->query($query) === TRUE){
    echo "Data inserted successfully !";
}else{
    echo " Error: ". $connection->error;
}
$connection->close();
?>