<?php
session_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="test"; // Database name
$tbl_name="users"; // Table name

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pass=$_POST['psd'];
$mail=$_POST['eid'];
$gender=$_POST['gnd'];
$marital=$_POST['mrt'];
$dob=$_POST['dob'];
$mobile=$_POST['mobile'];
$ques=$_POST['ques'];
$ans=$_POST['ans'];


$sql="INSERT INTO $tbl_name(f_name,l_name,password,email,gender,marital,dob,mobile,ques,ans)
VALUES ('$fname','$lname','$pass','$mail','$gender','$marital','$dob','$mobile','$ques','$ans')";
$result=mysql_query($sql);

$_SESSION['name']=$fname;
header("location:index.php");
//echo "f_name ".$f_name."... ".$l_name."... ".$email.".... ".$password.",,, ".$gender.",,,,".$marital."..... ".$dob.".... ".$mobile."....".$ques.",,,,".$ans;
?>