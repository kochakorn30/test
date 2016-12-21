<!DOCTYPE html>
<html>
<head>
	<title>BBQ Q | การแจ้งเตือน</title>
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
			background-color: #537B35;
			width: 255px;
			height: 40px;
		}
		.field {
			width: 235px;
			height: auto; 
			margin-left: 10px;
			margin-top: 40px;
			font-size: 25px;
		}
		input {
			width: 20px;
			height: 20px;
		}
	</style>
<body>
<div class="container">
	<div class="background">
		<div class="head_bar">
			<table>
				<tr>
					<td>
						<a href="file:///C:/xampp/htdocs/test/test/SMARTPHONE/BBQ%20Q/th/th_setting.php">
							<img src="http://th.japantravel.com/images/left-arrow.png" style="width: 40px; height: 40px; margin-left: -5px; margin-top: -3px; columns: #FFFFFF;">
						</a>
					</td>
					<td style="font-size: 38px;"><center style="margin-top: -12px; margin-left: -5px; color: #FFFFFF;"> | </center></td>
					<td style="font-size: 20px;"><center style="margin-bottom: 5px; color: #FFFFFF;">การแจ้งเตือน</center></td>
				</tr>
			</table>
		</div><!--end head_bar-->
		<div class="field">
			ข่าวสาร:
			<br>
			<center>
			<input type="checkbox" name="on"><b style="color: #85C446;">เปิด</b>
			<input type="checkbox" name="off"><b style="color: #E42313">ปิด</b>
			</center>
			<hr>
			แจ้งเตือนโดยเสียง:
			<br>
			<center>
			<input type="checkbox" name="on"><b style="color: #85C446;">เปิด</b>
			<input type="checkbox" name="off"><b style="color: #E42313">ปิด</b>
			</center>
			<br>
			แจ้งเตือนโดยการสั่น:
			<br>
			<center>
			<input type="checkbox" name="on"><b style="color: #85C446;">เปิด</b>
			<input type="checkbox" name="off"><b style="color: #E42313">ปิด</b>
			</center>
		</div><!--end field-->
	</div><!--end background-->
</div><!--end container-->
</body>
</html>