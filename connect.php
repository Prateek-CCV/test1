<?php
$hostname="aa1uf8kyfrujymt.c2u0hj6ejqek.us-east-1.rds.amazonaws.com"; //local server name default localhost
$username="admin";  //mysql username default is root.
$password="Ideapad330";       //blank if no password is set for mysql.
$database="aa1uf8kyfrujymt";  //database name which you created
$con=mysql_connect($hostname,$username,$password);
if(! $con)
{
die('Connection Failed'.mysql_error());
}

mysql_select_db($database,$con);
?>
