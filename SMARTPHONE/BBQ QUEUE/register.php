<!DOCTYPE html>
<html>
<head>
	<title>BBQ Q | Register</title>
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
			background-color: #FFFFFF;
			width: 255px;
			height: 454px;
			margin-top: 73px;
			margin-left: 106px;
		}
		.head_bar {
			display: inline-block;
			background-color: #EAEAEA;
			width: 255px;
			height: 40px;
			display: inline-block;
		}
		.field {
			width: 245px;
			height: 320px;
			margin-top: 8px;
			margin-left: 5px;
			border-radius: 10px;
			font-size: 20px;
		}
		.write {
			width: 205px;
			height: 25px;
			font-size: 20px;
			border-radius: 5px;
		}
		.confirm_btn {
			background-color: #DA5A47;
			padding: 0px;
			text-align: center;
			margin-top: 31px;
		}
	</style>
<body>
<div class="container">
	<div class="background">
		<div class="head_bar">
			<table>
				<tr>
					<td>
						<a href="file:///C:/xampp/htdocs/test/test/SMARTPHONE/BBQ%20QUEUE/home.php"><img src="http://www.myiconfinder.com/uploads/iconsets/dc0fa3f38f18c9d1b4e2c99967401405-Arrow.png" style="width: 40px; height: 38px;"></a>
					</td>
					<td>
						<center style="font-size: 20px;margin-left: 45px; margin-bottom: 2px;">Register</center>
					</td>
				</tr>
			</table>
		</div><!--end head_bar-->
		<div class="field">
			&nbsp&nbsp  Username:
			<br>
			&nbsp&nbsp  <input type="text" name="name" class="write" required>
			<br>
			&nbsp&nbsp  Password:
			<br>
			&nbsp&nbsp  <input type="password" name="pwd" class="write" required>
			<br>
			&nbsp&nbsp Re-Password:
			<br>
			&nbsp&nbsp <input type="password" name="pwd" class="write" required>
			<hr>
			&nbsp&nbsp E-mail:
			<br>
			&nbsp&nbsp <input type="email" name="email" class="write" placeholder="bbq@gmail.com" required>
			<br>
			&nbsp&nbsp Re-Email:
			<br>
			&nbsp&nbsp <input type="email" name="email" class="write" placeholder="BBQ@gmail.com" required>
			<hr>
			&nbsp&nbsp&nbsp&nbsp <input type="checkbox" name="check" required>Accept the <a href="file:///C:/xampp/htdocs/test/test/SMARTPHONE/BBQ%20QUEUE/rule.php" style="text-decoration: none; color: #000000;"><u>RULE</u></a>
		</div><!--end field-->	
			<a href="file:///C:/xampp/htdocs/test/test/SMARTPHONE/BBQ%20QUEUE/welcome.php" style="text-decoration: none;">
			<div class="confirm_btn" style="font-size: 20px; color: #FFFFFF;">
				<table>
					<tr>
						<td><a style="margin-left: 130px;">Confirm</a></td>
						<td>
							<img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-arrow-forward-512.png" style="width: 40px; height: 40px; margin-left: 2px;">
						</td>
					</tr>
				</table>
			</div><!--end confirm_btn-->
			</a>
	</div><!--end background-->
</div><!--end container-->
</body>
</html>