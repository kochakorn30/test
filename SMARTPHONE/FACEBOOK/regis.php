<!DOCTYPE html>
<html>
<head>
	<title>FACEBOOK | REGISTER</title>
</head>
	<style>
		body {
			font-family: arial;
			font-weight: bold;
		}
		.container {
			background-image: url("https://media.carphonewarehouse.com/is/image/cpw2/iphone-6GREY?$xl-standard$");
			width: 500px;
			height: 600px;
			position: fixed;
		}
		.background {
			background-color: #3B5998;
			width: 255px;
			height: 454px;
			margin-top: 73px;
			margin-left: 106px;
		}
		.head_bar {
			background-color: #3B5998;
			width: 255px;
			height: 40px;
		}
		.field {
			width: 235px;
			height: auto;
			margin-left: 10px;
			margin-top: 15px;
		}
		input {
			height: 25px;
			width: 235px;
			margin-top: 7px;
			font-size: 20px;
			border-radius: 5px;
		}
		select {
			height: 30px;
			width: 240px;
			margin-top: 7px;
			font-size: 20px;
			border-radius: 5px;
		}
		.create {
			background-color: #E8E9EA;
			padding: 9px 5px;
			margin-left: 10px;
			margin-right: 10px; 
			border-radius: 5px;
		}
		.btn {
			margin-top: 20px;
		}
	</style>
<body>
<div class="container">
	<div class="background">
		<div class="head_bar">
			<table>
				<tr>
					<td>
						<a href="file:///C:/xampp/htdocs/test/test/SMARTPHONE/FACEBOOK/main.php">
							<img src="http://th.japantravel.com/images/left-arrow.png" style="width: 40px; height: 40px; margin-left: -5px; margin-top: -3px; columns: #FFFFFF;">
						</a>
					</td>
					<td style="font-size: 38px;"><center style="margin-top: -12px; margin-left: -5px; color: #FFFFFF;"> | </center></td>
					<td style="font-size: 20px;"><center style="margin-bottom: 5px; color: #FFFFFF;">Facebook</center></td>
				</tr>
			</table>
		</div><!--end head_bar-->
		<div class="field">
			<center style="font-size: 25px; color: #FFFFFF;">Create An Account</center>
			<input type="name" name="firstname" placeholder="Firstname">
			<br>
			<input type="name" name="lastname" placeholder="Lastname">
			<br>
			<input type="email" name="email" placeholder="Email Address">
			<br>
			<input type="email" name="reemail" placeholder="Re-Email Address">
			<br>
			<input type="password" name="pwd" placeholder="Password">
			<br>
			<input type="password" name="re-pwd" placeholder="Re-Password">
			<br>
			<input type="date" name="brt" placeholder="Birthdate">
			<br>
			<select>
				<option>Gender</option>
				<option>Male</option>
				<option>Female</option>
			</select>
		</div><!--end field-->
		<div class="btn">
			<a href="file:///C:/xampp/htdocs/test/test/SMARTPHONE/FACEBOOK/home.php">
				<center>
					<div class="create" style="color: #000000; text-decoration: none;">Create Account</div>
				</center>
			</a>
		</div><!--end btn-->
	</div><!--end background-->
</div><!--end container-->
</body>
</html>