<?php

session_start();

$host="localhost";
$username="root";
$password="";
$db_name="test";
$tbl_name="interlist";

mysql_connect("$host","$username","$password") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select db");

if(isset($_GET['from']) && isset($_GET['to']))
{
	$k=1;
	$from=$_GET['from'];
	$to=$_GET['to'];
	$from=strtoupper($from);
	$to=strtoupper($to);
	//echo $from.$to;
	//echo "hi beby";
	$sql="SELECT * FROM $tbl_name WHERE (Ori='$from' or st1='$from' or st2='$from' or st3='$from' or st4='$from' or st5='$from') and (st1='$to' or st2='$to' or st3='$to' or st4='$to' or st5='$to' or Dest='$to')";
	$result=mysql_query($sql);
}
else if((!isset($_GET['from'])) && (!isset($_GET['to'])))
{
	$k=0;
	//echo "hi sexy";
	$from="";
	$to="";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title> Reservation </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	</link>
	<link href="css/Default.css" rel="stylesheet">
	</link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			//alert($(window).width());
			var x=(($(window).width())-1024)/2;
			//alert(x);
			$('.wrap').css("left",x+"px");
		});

	</script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
	
</head>
<body>
	<div class="wrap">
		<!-- Header -->
		<div class="header">
			<div style="float:left;width:150px;">
				<img src="images/logo.jpg"/>
			</div>		
			<div>
			<div style="float:right; font-size:20px;margin-top:20px;">
			<?php
			 if(isset($_SESSION['name']))
			 {
				echo "Welcome,".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 else
			 {
				$_SESSION['error']=15;
				header("location:login1.php")
			 ?>  
				<a href="login.html" class="btn btn-info">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="signup.html" class="btn btn-info">Signup</a>
			<? } ?>
			
			
			</div>
			<div id="heading">
				<a href="index.php">Indian Railways</a>
			</div>
			</div>
		</div>
		
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse" >
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="index.php" >HOME</a>
				<a class="brand" href="train.php" >FIND TRAIN</a>
				<a class="brand " href="reservation.php">RESERVATION</a>
				<a class="brand" href="profile.php">PROFILE</a>
				<a class="brand" href="contact.php">CONTACT</a>
				<a class="brand" href="about.php">ABOUT US</a>
				</div>
			</div>
		</div>
		
		<div class="row">
			<!-- find train with qouta-->
			<div class="span4 well">
			<form>
			<table class="table">
				<tr>
					<th style="border-top:0px;"><label> From <label></th>
					<td style="border-top:0px;"><input type="text" class="input-block-level" name="from" id="fr"></td>
				</tr>
				<tr>
					<th style="border-top:0px;"><label> To <label></th>
					<td style="border-top:0px;"><input type="text" class="input-block-level" name="to" id="to1"></td>
				</tr>
				<tr>
					<th style="border-top:0px;"><label> Quota <label></th>
					<td style="border-top:0px;">
					<select>
					<option value="general">General</option>
					<option value="tatkal">Tatkal</option>
					<option value="ladies">Ladies</option>
					</select>
					</td>
				</tr>
				<tr>
					<th style="border-top:0px;"><label> Date<label></th>
					<td style="border-top:0px;"><input type="date" class="input-block-level input-medium" name="date"></td>
				</tr>
				<tr>
					<td style="border-top:0px;"><input class="btn btn-info" type="submit" value="OK"></td>
					<td style="border-top:0px;"><a href="reservation.php" class="btn btn-info" type="reset" value="Reset">Reset</a></td>
				</tr>
			</table>
			</form>
			</div>
			
		<!-- display train -->
			<div class="span8 well">
				<div class="display" style="height:30px;">
				<table class="table">
				<tr>
					<th style="width:80px;border-top:0px;"> Train No.</th>
					<th style="width:270px;border-top:0px;"> Train Name </th>
					<th style="width:70px;border-top:0px;"> Orig. </th>
					<th style="width:70px;border-top:0px;"> Des. </th>
					<th style="width:70px;border-top:0px;"> Arr. </th>
					<th style="width:80px;border-top:0px;"> Dep. </th>
				</tr>
				</table>
				</div>
				<div class="display" style="margin-top:0px;overflow:auto;">
				<table class="table">
				
				<?php
					if($k==1)
					{
						echo "<script> document.getElementById(\"fr\").value=\"$from\";
									   document.getElementById(\"to1\").value=\"$to\";
							</script>";
						$n=0;
						while($row=mysql_fetch_array($result)){
					//$q="from: ".$from;
						if($from==$row['st1'])
						{	$q=$row['st1arri'];
							//echo $q;
						}
						else
						if($from==$row['st2'])
						{	$q=$row['st2arri']; }
						else if($from==$row['st3'])
						{	$q=$row['st3arri']; }
						else if($from==$row['st4'])
						{	$q=$row['st4arri']; }
						else if($from==$row['st5'])
						{	$q=$row['st5arri']; }
						else if($from==$row['Ori'])
						{	$q=$row['Oriarri']; }
						else if($from==$row['Dest'])
						{	$q=$row['Destarri'];}
						
						$p1=substr($q,0,2);
						$p2=substr($q,3,2);
						$p2=$p2+5;
						if($p2<10)
						{$p2="0".$p2;}
						$d=$p1.":".$p2;
					if($n%2==0)
					{
				?>
				<tr class="text-error">
					<td style="width:70px;"> <? echo $row['Number']; ?> </td>
					<td style="width:210px;"> <a class="text-error" href="reser.php?tno=<?echo$row['Number']?>"> <? echo $row['Name']; ?> </a></td>
					<td style="width:65px;"> <? echo $row['Ori']; ?> </td>
					<td style="width:55px;"> <? echo $row['Dest']; ?> </td>
					<td style="width:60px;"> <? echo $q; ?> </td>
					<td style="width:65px;"> <? echo $d; ?> </td>
					</tr>
				<?php
					}
					else
					{
				?>
				<tr class="text-info">
					<td style="width:70px;"> <? echo $row['Number']; ?> </td>
					<td style="width:210px;"> <a class="text-info" href="reser.php?tno=<?echo$row['Number']?>"> <? echo $row['Name']; ?> </a> </td>
					<td style="width:65px;"> <? echo $row['Ori']; ?> </td>
					<td style="width:55px;"> <? echo $row['Dest']; ?> </td>
					<td style="width:60px;"> <? echo $q; ?> </td>
					<td style="width:65px;"> <? echo $d; ?> </td>
				</tr>
				<?php
					}
					$n++;
					}
				}
				else
				{
					echo "<div class=\"alert alert-error\"  style=\"margin:100px 180px;\"> please search the train.. </div>";
				}
					
					mysql_close();
				?> 
				</table>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<footer >
		<div style="width:100%;">
			<div style="float:left;">
			<p class="text-right text-info">  &copy; 2013 Copyright PVT Ltd.</p>	
			</div>
			<div style="float:right;">
			<p class="text-right text-info">	Desinged By : Nikul Chaudhary & Sunil Prajapati</p>
			</div>
		</div>
		</footer>
	</div>
</body>
</html>