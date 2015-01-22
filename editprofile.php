<?php
session_start();


$host="localhost";
$username="root";
$password="";
$db_name="test";

$tbl_name="users"; // Table name

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");


if(!isset($_SESSION["name"]))
header("location:login1.php");

$name=$_SESSION['name'];
$lname=$_POST['ln'];
$mail=$_POST['mail1'];
$gender=$_POST['gnd1'];
$marital=$_POST['mrt1'];
$dob=$_POST['dob1'];
$mobile=$_POST['mon1'];
$ques=$_POST['que1'];
$ans=$_POST['ans1'];


//echo "n:".$name."mail:".$mail."age".$age."cont:".$contact."area:".$area;

//move_uploaded_file($_FILES["file"]["tmp_name"],"img/" . "$name.jpg");

$sql="UPDATE $tbl_name SET l_name='$lname',email='$mail',gender='$gender',marital='$marital',dob='$dob',mobile='$mobile',ques='$ques',ans='$ans' WHERE f_name='$name'";
$result=mysql_query($sql);

//echo "n:".$name."mail:".$mail."age".$mobile."cont:".$lname."area:".$ans;

$_SESSION['error']==4;

header('location:profile.php');

?>




