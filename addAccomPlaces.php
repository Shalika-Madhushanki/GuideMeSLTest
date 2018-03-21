<?php
require "connect.php";
$place_name = $_POST["place_name"];
$description = $_POST["description"];
$latitude = $_POST[""];
$longitude = $_POST[""];
$charges = $_POST["charges"];
$contact_no = $_POST["contact_no"];
$query= "insert into accommodation (place_name, description, latitude, longitude, charges, contact_no ) values ($place_name, $description, $latitude, $longitude, $charges, $contact_no)";

if($connection->query($query) === TRUE){
    echo "data inserted successfully !";
}else{
    echo " Error: ". $connection->error;
}
$connection->close();
?>