<!DOCTYPE html>
<html>
<head>
	<title>CONAN | REGISTER</title>
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
			background-image: url("http://fbi.dek-d.com/27/0226/7974/118633447");
			background-size: cover;
			width: 255px;
			height: 454px;
			margin-top: 73px;
			margin-left: 106px;
		}
		.head_bar {
			background-color: #273746;
			width: 255px;
			height: 40px;
			color: #FFFFFF;
		}
		.field {
			width: 235px;
			height: auto;
			margin-left: 10px;
			margin-top: 30px;
		}
		input {
			border-radius: 5px;
			font-size: 20px;
			width: 225px;
			height: 25px;
		}
		.confirm_btn {
			background-color: #85929E; 
		    border: none;
		    color: #FFFFFF;
		    padding: 10px 92px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 18px;
		    margin-top: 100px;
		    margin-left: 10px;
		    border-radius: 5px;
		}
	</style>
<body>
<div class="container">
	<div class="background">
		<div class="head_bar">
			<table>
				<tr>
					<td>
						<a href="file:///C:/xampp/htdocs/test/test/SMARTPHONE/CONAN/main.php">
							<img src="http://th.japantravel.com/images/left-arrow.png" style="width: 40px; height: 40px; margin-left: -5px; margin-top: -3px;">
						</a>
					</td>
					<td style="font-size: 38px;"><center style="margin-top: -12px; margin-left: -5px;"> | </center></td>
					<td style="font-size: 20px;"><center style="margin-bottom: 5px;">Register</center></td>
				</tr>
			</table>
		</div><!--end head_bar-->
		<div class="field">
			<center>
				<input type="text" name="user" placeholder="username" required>
				<br><br>
				<input type="password" name="pwd" placeholder="password" required>
				<br><br>
				<input type="password" name="re-pwd" placeholder="re-password" required>
				<br><br>
				<input type="email" name="email" placeholder="email" required>
				<br><br>
				<input type="email" name="reemail" placeholder="re-email" required>
			</center>
		</div><!--end field-->
		<div class="btn">
			<a href="file:///C:/xampp/htdocs/test/test/SMARTPHONE/CONAN/menu.php">
				<div class="confirm_btn">Log in</div>
			</a>
		</div>
	</div><!--end background-->
</div><!--end container-->
</body>
</html>