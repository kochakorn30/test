<!DOCTYPE html>
<html>
<head>
	<title>NOTES</title>
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
			background-color: #FFFFE2;
			width: 255px;
			height: 454px;
			margin-top: 73px;
			margin-left: 106px;
		}
		.head_bar {
			background-color: #FFFFFF;
			width: 255px;
			height: 40px;
		}
		.field {
			width: 235px;
			height: 324px;
			margin-top: 10px;
			margin-left: 10px;
			border-radius: 10px;
		}
		.next {
			width: 235px;
			height: 50px;
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
							<img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-arrow-back-128.png" style="width: 40px; height: 40px; margin-left: -5px; margin-top: -3px;">
						</a>
					</td>
					<td style="font-size: 38px;"><center style="margin-top: -12px; margin-left: -5px;"> | </center></td>
					<td style="font-size: 20px;"><center style="margin-bottom: 5px;">Notes</center></td>
				</tr>
			</table>
		</div><!--end head_bar-->
		<div class="field">
			<textarea style="width: 226px; height: 384px; border-radius: 10px;" id="area"></textarea>
		</div><!--end field-->
	</div><!--end background-->
</div><!--end container-->
</body>
</html>