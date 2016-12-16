<!DOCTYPE html>
<html>
<head>
	<title>PHONE | DIAL</title>
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
			background-color: #99CC00;
			width: 255px;
			height: 454px;
			margin-top: 73px;
			margin-left: 106px;
		}
		.head_bar {
			background-color: #E7E7E7;
			width: 255px;
			height: 40px;
		}
		.field {
			width: 255px;
			height: 394px;
			margin-top: 20px;
		}
		.number {
			background-color: #FFFFFF;
			border: none;
			padding: 15px 32px;
			text-decoration: none;
			text-align: center;
			font-size: 28px;
			color: #237F52;
			border-radius: 5px;
			cursor: pointer;
		}
		.none {
			width: 78px;
			height: 60px;
			border-radius: 5px;
		}
		.call {
			background-color: #FFFFFF;
			width: 78px;
			height: 60px;
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
						<a href="file:///C:/xampp/htdocs/test/test/SMARTPHONE/PHONE/main.php">
							<img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-arrow-back-128.png" style="width: 40px; height: 40px; margin-left: -5px; margin-top: -3px;">
						</a>
					</td>
					<td style="font-size: 38px;"><center style="margin-top: -12px; margin-left: -5px;"> | </center></td>
					<td style="font-size: 20px;"><center style="margin-bottom: 5px;">Call</center></td>
				</tr>
			</table>
		</div><!--end head_bar-->
		<div class="field">
			<form name="calculator">
				<input type="textfield" name="ans" value="" style="width: 250px; height: 55px; font-size: 50px;">
					<table>
						<tr>
							<td>
								<input type="button" class="number" value="1" onClick="document.calculator.ans.value+='1'">
							</td>
							<td>
								<input type="button" class="number" value="2" onClick="document.calculator.ans.value+='2'">
							</td>
							<td>
								<input type="button" class="number" value="3" onClick="document.calculator.ans.value+='3'">
							</td>
						</tr>
						<tr>
							<td>
								<input type="button" class="number" value="4" onClick="document.calculator.ans.value+='4'">
							</td>
							<td>
								<input type="button" class="number" value="5" onClick="document.calculator.ans.value+='5'">
							</td>
							<td>
								<input type="button" class="number" value="6" onClick="document.calculator.ans.value+='6'">
							</td>
						</tr>
						<tr>
							<td>
								<input type="button" class="number" value="7" onClick="document.calculator.ans.value+='7'">
							</td>
							<td>
								<input type="button" class="number" value="8" onClick="document.calculator.ans.value+='8'">
							</td>
							<td>
								<input type="button" class="number" value="9" onClick="document.calculator.ans.value+='9'">
							</td>
						</tr>
						<tr>
							<td>
								<input type="button" class="number" value="*" onClick="document.calculator.ans.value+='*'">
							</td>
							<td>
								<input type="button" class="number" value="0" onClick="document.calculator.ans.value+='0'">
							</td>
							<td>
								<input type="button" class="number" value="#" onClick="document.calculator.ans.value+='#'">
							</td>
						</tr>
						<tr>
							<td>
								<div class="none"></div>
							</td>
							<td>
								<div class="call">
									<a href="file:///C:/xampp/htdocs/test/test/SMARTPHONE/PHONE/call.php">
										<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Red_Phone_Font-Awesome.svg/1024px-Red_Phone_Font-Awesome.svg.png" style="width: 78px; height: 60px; border-radius: 5px;">
									</a>
								</div>
							</td>
							<td>
								<div class="none"></div>
							</td>
						</tr>
					</table>
			</form><!--end calculator-->
		</div><!--end field-->
	</div><!--end background-->
</div><!--end container-->
</body>
</html>