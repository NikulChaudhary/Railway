<?php
session_start();

$uname=$_POST['user'];
$pass=$_POST['psd'];

$host="localhost";
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="test"; // Database name


$tbl_name="users"; // Table name

$k=mysql_connect("$host", "$username", "$password")or die("cannot connect");
$k1=mysql_select_db("$db_name")or die("cannot select DB");


$sql="SELECT * FROM $tbl_name WHERE f_name='$uname' and password='$pass'";
$result=mysql_query($sql) or trigger_error(mysql_error.$sql);

//$row=mysql_fetch_array($result);

//echo "\n\n ..nam..".$row['f_name']."\n\n ..pass..".$row['password'];

if(mysql_num_rows($result) < 1)
{
	echo " .... LOGIN TRY  ....";
	$_SESSION['error'] = "1";
	header("location:login1.php"); //
}
else
{
	$_SESSION['name'] = $uname; // Make it so the username can be called by $_SESSION['name']    //
	echo " ....   LOGIN  ....";
	echo $_SESSION['name'];
	header("location:index.php");    //
}

?>

	