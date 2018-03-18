<?php
require "connect.php";
//create users table
$sql = "CREATE TABLE IF NOT EXISTS users(
   username VARCHAR(100) NOT NULL , 
   password VARCHAR(64) NOT NULL,  
   primary key ( username ))";
$retval = mysqli_query($connection,$sql);
if(! $retval ) {
    die('Could not create table: ');
}
echo "Table users created successfully\n";
?>

