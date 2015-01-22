<?php
	session_start();
	
$host="localhost";
$username="root";
$password="";
$db_name="test";
$tbl_name="booking";

mysql_connect("$host","$username","$password")or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select db");

$name1=$_SESSION['name'];
$sql="SELECT * FROM $tbl_name WHERE uname='$name1' ";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$tnum=$row['Tnumber'];
$cl=$row['class'];

$result=mysql_query("SELECT * FROM train_list WHERE Number='$tnum'");
$row=mysql_fetch_array($result);
$tname=$row['Name'];
//echo "".$tname;
$result=mysql_query($sql);

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
			 ?>
			
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
				<a class="brand" href="reservation.php">RESERVATION</a>
				<a class="brand" href="profile.php">PROFILE</a>
				<a class="brand" href="contact.php">CONTACT</a>
				<a class="brand" href="about.php">ABOUT US</a>
				</div>
			</div>
		</div>
		
		<div class="span12 well">
			<div align="center" style="border-bottom: 3px solid #ddd;">
				<h2>Ticket Detail </h2>
			
			</div>
			<br>
			<div >
				<table class="table">
				
				<tr>
					<th style="border-top:0px;" > <label>Train No.<label></th>
					<td style="border-top:0px;"><label class="text-error"><?echo $tnum;?></label></td>
					<th style="border-top:0px;"><label> Train Name<label> </th>
					<td style="border-top:0px;"><label class="text-error"><?echo $tname;?></label></td>
					<th style="border-top:0px;"> <label>Class <label></th>
					<td style="border-top:0px;"><label class="text-error"><?echo $cl;?></label></td>	
				</tr>
				</table>
			</div>
			<div>
			<table style="width:70%;" class="table">
				<tr>
					<th style="width:100px;border-top:0px;">SNo.</th>
					<th style="width:200px;border-top:0px;"> Name</th>
					<th style="width:100px;border-top:0px;"> Age </th>
					<th style="width:100px;border-top:0px;"> Sex </th>
				</tr>
			</table>
			</div>
			<div >
				<table style="width:70%;" class="table">
				
				<?php
				
				$n=1;
				while($row=mysql_fetch_array($result)){
					if($n%2!=0)
					{
				?>
				<tr class="text-error">
					<th style="width:100px;"> <? echo $n; ?> </th>
					<th style="width:200px;"> <? echo $row['Name']; ?> </th>
					<th style="width:100px;"> <? echo $row['Age']; ?> </th>
					<th style="width:100px;"> <? echo $row['sex']; ?> </th>
				</tr>
				<?php 
					}
					else
					{
				?>
				<tr class="text-info">
					<td style="width:70px;"> <? echo $n; ?> </td>
					<td style="width:210px;"> <? echo $row['Name']; ?> </td>
					<td style="width:65px;"> <? echo $row['Age']; ?> </td>
					<td style="width:55px;"> <? echo $row['sex']; ?> </td>
				</tr>
				<?php
					}
					$n++;
				}
				?>
				
				<tr> 
					<td style="border-top:0px;"><input class="btn btn-info"type="submit" value="Print" id="subb" ></td>
				</tr>
				
				</table>
			</div>
		</div>
			
		<!-- Copyright -->
		<footer >
		<div style="width:100%;">
			<div style="float:left;">
			<p class="text-right text-info">  &copy; 2013 Copyright PVT Ltd.</p>	
			</div>
			<div style="float:right;">
			<p class="text-right text-info">	Desinged By : Nikul Chaudhary & Sunil Prajapati </p>
			</div>
		</div>
		</footer>
	</div>
</body>
</html>	
