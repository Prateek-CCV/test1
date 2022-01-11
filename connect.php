<?php
$hostname="aa86pwj3qsgqio.c2u0hj6ejqek.us-east-1.rds.amazonaws.com"; //local server name default localhost
$username="admin";  //mysql username default is root.
$password="Ideapad@330";       //blank if no password is set for mysql.
$database="aa86pwj3qsgqio";  //database name which you created
$con=mysql_connect($hostname,$username,$password);
if(! $con)
{
die('Connection Failed'.mysql_error());
}

mysql_select_db($database,$con);
?>
