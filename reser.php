<?php


session_start();

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
	<link href="css/bootstrap.min.css" rel="stylesheet" ></link>
	<link href="css/bootstrap.css" rel="stylesheet" ></link>
	<link href="css/Default.css" rel="stylesheet" >	</link>
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
				<a href="index.html">Indian Railways</a>
			</div>
			</div>
		</div>
		
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse">
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
		<div class="display" style="height:30px;">
				<table class="table">
				<tr>
					<th style="width:110px;border-top:0px;"> Train No.</th>
					<th style="width:90px;border-top:0px;"> 1A</th>
					<th style="width:90px;border-top:0px;"> 2A </th>
					<th style="width:90px;border-top:0px;"> 3A </th>
					<th style="width:90px;border-top:0px;"> AC </th>
					<th style="width:90px;border-top:0px;"> CC </th>
					<th style="width:90px;border-top:0px;"> SL </th>
					<th style="width:90px;border-top:0px;"> 2S </th>
					<th style="width:90px;border-top:0px;"> FC </th>
					<th style="width:90px;border-top:0px;"> 3E </th>
				</tr>
				</table>
		</div>
		
		<div class="display" style="margin-top:0px;height:30px;">
				<form method="post" action="booking.php">
				<table class="table">
				<tr>
					<td style="width:110px;border-top:0px;"> <? echo $_GET['tno'];?> <input name="tno" style="display:none;" type="text" value="<?echo $_GET['tno'];?>"> </td>
					<td style="width:90px;border-top:0px;"> <input type="radio" name="selct" value="1A"> </td>
					<td style="width:90px;border-top:0px;"> <input type="radio" name="selct" value="2A"> </td>
					<td style="width:90px;border-top:0px;"> <input type="radio" name="selct" value="3A"> </td>
					<td style="width:90px;border-top:0px;"> <input type="radio" name="selct" value="AC"> </td>
					<td style="width:90px;border-top:0px;"> <input type="radio" name="selct" value="CC"> </td>
					<td style="width:90px;border-top:0px;"> <input type="radio" name="selct" value="SL"> </td>
					<td style="width:90px;border-top:0px;"> <input type="radio" name="selct" value="2S"> </td>
					<td style="width:90px;border-top:0px;"> <input type="radio" name="selct" value="FC"> </td>
					<td style="width:90px;border-top:0px;"> <input type="radio" name="selct" value="3E"> </td>
				</tr>
				</table>
				
		</div>
		<br /><br />
		<div class="display" style="margin-top:0px;height:415px;">
		<h2><font color="blue">Passenger Detail</font></h2>
			
			<table class="table">
				<tr>
					<th style="width:100px;border-top:0px;">SNo.</th>
					<th style="width:200px;border-top:0px;"> Name</th>
					<th style="width:100px;border-top:0px;"> Age </th>
					<th style="width:100px;border-top:0px;"> Sex </th>
				</tr>
				<tr>
					<td > 1</td>
					<td ><input type="text" name="name" ></td>
					<td ><input type="text" name="age" class="input-small"></td>
					<td ><select name="sex" class="input-small">
						<option value="male">MALE</option>
						<option value="female">FEMALE</option>
						</select>
					</td>
				</tr>
				<tr>
					<td > 2</td>
					<td ><input type="text" name="pname" ></td>
					<td ><input type="text" name="pname" class="input-small"></td>
					<td ><select name="gnd" class="input-small">
						<option value="male">MALE</option>
						<option value="female">FEMALE</option>
						</select>
					</td>
				</tr>
				<tr>
					<td > 3</td>
					<td ><input type="text" name="pname" ></td>
					<td ><input type="text" name="pname" class="input-small"></td>
					<td ><select name="gnd" class="input-small">
						<option value="male">MALE</option>
						<option value="female">FEMALE</option>
						</select>
					</td>
				</tr>
				<tr>
					<td > 4</td>
					<td ><input type="text" name="pname" ></td>
					<td ><input type="text" name="pname" class="input-small"></td>
					<td ><select name="gnd" class="input-small">
						<option value="male">MALE</option>
						<option value="female">FEMALE</option>
						</select>
					</td>
				</tr>
				<tr>
					<td > 5</td>
					<td ><input type="text" name="pname" ></td>
					<td ><input type="text" name="pname" class="input-small"></td>
					<td ><select name="gnd" class="input-small">
						<option value="male">MALE</option>
						<option value="female">FEMALE</option>
						</select>
					</td>
				</tr>
				
				<tr>
					<td style="border-top:0px;"><input class="btn btn-info"type="submit" value="submit" id="subb" ></td>
					<td style="border-top:0px;"><input class="btn btn-info"type="reset" value="Reset"></td>
				</tr>
				
			</table>
			</form>
		</div>
		
		<div>
		<br  />
		<p> <font color="red"> CHILDREN BELOW 5 YEAR (FOR WHOM TICKET IS NOT TO BE ISSUED). </font> </p>
		</div>
		
		</div>
		
		
		<!-- Copyright -->
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