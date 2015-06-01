<?php

$host="127.0.0.1"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password  
$db_name="sedb"; // Database name 
$tbl_name="members"; // Table name 

// Connect to server and select databse.
$conn = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
// username and password sent from form 

$sql = "INSERT INTO $tbl_name(username,password,email) VALUES ('$_POST[nUsername]', '$_POST[nPassword]', '$_POST[email]')";
$result=mysql_query($sql, $conn) or die(mysql_error());
	echo ("Successfull");

	
		

?>