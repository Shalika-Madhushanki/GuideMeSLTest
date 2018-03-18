<?php
$db_name="guidemesldb";
$mysql_username = "shaliadmin";
$mysql_password="shaliadmin";
$mysql_server="db4free.net";
$connection=mysqli_connect($mysql_server, $mysql_username, $mysql_password,$db_name);
if($connection){
	echo "conection successful";
	
}else{
	echo "connection failed";
}
?>