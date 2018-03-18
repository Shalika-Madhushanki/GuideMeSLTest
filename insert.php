<?php
require "connect.php";
$query= "insert into users (username, password) values ('shalika','shalika')";
if($connection->query($query) === TRUE){
    echo "Data inserted successfully !";
}else{
    echo " Error: ". $connection->error;
}
$connection->close();
?>