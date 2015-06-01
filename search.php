<?php

$host="127.0.0.1"; // Host name 
$username="root"; // Mysql title
$db_name="sedb"; // Database name 
$tbl_name="members"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$title")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// title sent from form 
$myTitle=$_POST['ATitle']; 

// To protect MySQL injection (more detail about MySQL injection)
$myTitle = stripslashes($myTitle);
$myTitle= mysql_real_escape_string($myTitle);
$sql="SELECT * FROM $tbl_name WHERE title='$myTitle'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['myusername'] = $myusername;
$_SESSION['mypassword']= $mypassword;
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}
?>