<!DOCTYPE html>
<html>
<head>
	<title>FACEBOOK</title>
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
			width: 255px;
			height: 414px;
		}
		.logo {
			width: 255px;
			height: 80px;
			margin-top: 10px;
		}
		.login {
			width: 255px;
			height: 120px;
			margin-top: 10px;
		}
		.inside {
			background-color: #FFFFFF;
			width: 195px; 
			height: 100px;
			margin-left: 30px;
			border-radius: 10px;
		}
		input {
			height: 30px;
			width: 180px;
			margin-left: 8px;
			font-size: 20px;
			font-family: arial;
			border: none;
		}
		.login_btn {
			width: 255px;
			height: 30px;
			margin-top: 10px;
			text-decoration: none;
		}
		.log_in {
			padding: 6px 5px;
			background-color: #E4E4E4;
			font-size: 20px;
			margin-left: 10px;
			margin-right: 10px;
			text-align: center;
			border-radius: 5px;
		}
		.signup {
			width: 255px;
			height: 40px;
			margin-top: 50px;
		}
		.signup_btn {
			padding: 8px 5px;
			margin-right: 10px;
			margin-left: 10px;
			background-color: #BBBDC0;
			border-radius: 5px;
			border-color: #E4E4E4; 
			text-align: center;
			text-decoration: none;
		}
		.policy {
			width: 255px;
			height: 20px;
			margin-top: 25px;
		}
	</style>
<body>
<div class="container">
	<div class="background">
		<div class="head_bar">
			<table>
				<tr>
					<td>
						<a href="file:///C:/xampp/htdocs/test/test/SMARTPHONE/screen.php">
							<img src="http://th.japantravel.com/images/left-arrow.png" style="width: 40px; height: 40px; margin-left: -5px; margin-top: -3px; columns: #FFFFFF;">
						</a>
					</td>
					<td style="font-size: 38px;"><center style="margin-top: -12px; margin-left: -5px; color: #FFFFFF;"> | </center></td>
					<td style="font-size: 20px;"><center style="margin-bottom: 5px; color: #FFFFFF;">Facebook</center></td>
				</tr>
			</table>
		</div><!--end head_bar-->
	<div class="field">
		<div class="logo">
			<img src="https://www.seeklogo.net/wp-content/uploads/2015/07/new-facebook-logo-2015-400x400.png" style="width: 215px; height: 160px; margin-left: 20px; margin-top: -40px;">
		</div><!--end logo-->
		<div class="login">
			<div class="inside">
				<input type="email" name="email" placeholder="email" style="margin-top: 5px;">
				<hr>
				<input type="password" name="pwd" placeholder="password">
			</div>
		</div><!--end login-->
		<div class="login_btn">
			<a href="file:///C:/xampp/htdocs/test/test/SMARTPHONE/FACEBOOK/home.php">
				<div class="log_in" style="text-decoration: none; color: #000000;">Log In</div>
			</a>
		</div><!--end login_btn-->
		<div class="signup">
			<a href="file:///C:/xampp/htdocs/test/test/SMARTPHONE/FACEBOOK/regis.php">
				<div class="signup_btn" style="text-decoration: none; color: #000000;">Sign Up for Facebook</div>
			</a>
		</div><!--end signup-->
		<div class="policy">
			<a href="file:///C:/xampp/htdocs/test/test/SMARTPHONE/FACEBOOK/help.php">
				<center style="color: #E8E9EA; text-decoration: none;"><u>Help Center</u></center>
			</a>
		</div><!--end polivy-->
	</div><!--end field-->
	</div><!--end background-->
</div><!--end container-->
</body>
</html>