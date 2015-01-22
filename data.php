<?php
//session_start();

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="test"; // Database name
$tbl_name="interlist"; // Table name

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$f=$_POST['f'];
$g=$_POST['g'];
$h=$_POST['h'];
$i=$_POST['i'];
$j=$_POST['j'];

$k=$_POST['k'];
$l=$_POST['l'];
$m=$_POST['m'];
$n=$_POST['x'];
$o=$_POST['n'];
$p=$_POST['o'];
$q=$_POST['p'];
$r=$_POST['q'];
$s=$_POST['r'];
$t=$_POST['s'];

$u=$_POST['t'];
$v=$_POST['u'];
$x=$_POST['v'];


$sql="INSERT INTO $tbl_name (`Number`, `st1`, `st1arri`, `st2`, `st2arri`, `st3`, `st3arri`, `st4`, `st4arri`, `st5`, `st5arri`, `Ori`, `Oriarri`, `Dest`, `Desarri`, `Name`, `Mon`, `Tue`, `Wen`, `Thu`, `Fri`, `Sat`, `Sun`) 
VALUES ('$a', '$b', '$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u','$v','$x' )";

$result=mysql_query($sql);

//$_SESSION['name']=$fname;
//header("location:index.php");
//echo "f_name ".$f_name."... ".$l_name."... ".$email.".... ".$password.",,, ".$gender.",,,,".$marital."..... ".$dob.".... ".$mobile."....".$ques.",,,,".$ans;
?>