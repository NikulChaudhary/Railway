<?php


session_start();
$host="localhost";
$username="root";
$password="";
$db_name="test";
$tbl_name="booking";

mysql_connect("$host","$username","$password")or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select db");

$uname=$_SESSION['name'];
$num=$_POST['tno'];
$seat=$_POST['selct'];
$name=$_POST['name'];
$age=$_POST['age'];
$sex=$_POST['sex'];

//echo "..".$num."..".$name."..".$age."..".$sex."..".$seat."..";

$sql="INSERT INTO $tbl_name(uname,Tnumber,class,Name,Age,sex)
VALUES ('$uname','$num','$seat','$name','$age','$sex')";
$result=mysql_query($sql);

header("location:display.php");


?>
