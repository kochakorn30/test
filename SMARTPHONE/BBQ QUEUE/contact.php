<!DOCTYPE html>
<html>
<head>
	<title>BBQ Q | Contact</title>
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
			height: 170px;
			margin-top: 20px;
			margin-left: 5px;
			border-radius: 10px;
			font-size: 20px;
		}
		input {
			width: 205px;
			height: 25px;
			font-size: 20px;
			border-radius: 5px;
		}
		select {
			width: 210px;
			height: 35px;
			font-size: 20px;
			border-radius: 5px;
		}
		.send_btn {
			background-color: #76B852;
			padding: 5px;
			text-align: center;
			margin-top: 159px;
		}
	</style>
<body>
<div class="container">
	<div class="background">
		<div class="head_bar">
			<table>
				<tr>
					<td>
						<a href="file:///C:/xampp/htdocs/test/test/SMARTPHONE/BBQ%20QUEUE/menu.php"><img src="http://www.myiconfinder.com/uploads/iconsets/dc0fa3f38f18c9d1b4e2c99967401405-Arrow.png" style="width: 40px; height: 38px;"></a>
					</td>
					<td>
						<center style="font-size: 20px;margin-left: 48px; margin-bottom: 2px;">Log-in</center>
					</td>
				</tr>
			</table>
		</div><!--end head_bar-->
		<div class="field">
			&nbsp&nbsp Title:
			<br>
			&nbsp&nbsp <input type="select" name="name" required>
			<br>
			&nbsp&nbsp E-mail:
			<br>
			&nbsp&nbsp <select>
						<option>...Choose...</option>
						<option>Application Problem</option>
						<option>Booking Problem</option>
						<option>Coupon Problem</option>
						<option>Other...</option>
					</select>
			<br>
			<br>
			&nbsp&nbsp Detail:
			<br>
			&nbsp&nbsp <textarea rows="5" col="20" style="width: 205px; height: 100px; border-radius: 5px;"></textarea>
		</div><!--end field-->
		<a href="file:///C:/xampp/htdocs/test/test/SMARTPHONE/BBQ%20QUEUE/fix.php" style="text-decoration: none;">
			<div class="send_btn" style="font-size: 20px; color: #FFFFFF;">
				<table>
					<tr>
						<td><a style="margin-left: 130px;">Send</a></td>
						<td>
							<img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-arrow-forward-512.png" style="width: 40px; height: 40px; margin-left: 2px;">
						</td>
					</tr>
				</table>
			</div><!--end login_btn-->
			</a>
	</div><!--end background-->
</div><!--end container-->
</body>
</html>