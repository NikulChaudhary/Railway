<?php

session_start();
$pass=$_GET['pass'];
$name=$_SESSION['name'];

$host="localhost";
$username="root";
$password="";
$db_name="test";

$tbl_name="users"; // Table name

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$sql="UPDATE users SET password=$pass WHERE f_name='$name'"; 


$result=mysql_query($sql);

$_SESSION['error']=6;

//echo "name : ".$name."  Pass : ".$pass;
header('location:profile.php');
?>