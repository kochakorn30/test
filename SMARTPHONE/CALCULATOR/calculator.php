<!DOCTYPE html>
<html>
<head>
	<title>CALCULATOR</title>
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
			background-color: #FEE1EC;
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
			background-color: #F1F1F1;
			width: 235px;
			height: 394px;
			margin-top: 10px;
			margin-left: 10px;
			border-radius: 10px;
		}
		.cal {
			margin-top: 20px;
			margin-left: 20px; 
		}
		.calcu {
			text-align: center;
			text-decoration: none;
			border: none;
			cursor: pointer;
			padding: 20px 17px;
			font-size: 20px;
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
					<td style="font-size: 20px;"><center style="margin-bottom: 5px;">Calculator</center></td>
				</tr>
			</table>
		</div><!--end head_bar-->
		<div class="field">
			<form name="calculator">
				<div class="number">
					<input type="textfield" name="ans" value="" style="width: 195px; height: 40px; margin-left: 20px; border-radius: 5px; margin-top: 20px; font-size: 35px;">
				</div>
				<div class="cal">
					<table>
						<tr>
							<td>
								<input type="button" class="calcu" value="7" onClick="document.calculator.ans.value+='7'">
							</td>
							<td>
								<input type="button" class="calcu" value="8" onClick="document.calculator.ans.value+='8'">
							</td>
							<td>
								<input type="button" class="calcu" value="9" onClick="document.calculator.ans.value+='9'">
							</td>
							<td>
								<input type="button" class="calcu" value="+" onClick="document.calculator.ans.value+='+'">
							</td>
						</tr>
						<tr>
							<td>							 
								<input type="button" class="calcu" value="4" onClick="document.calculator.ans.value+='4'">
							</td>
							<td>
								<input type="button" class="calcu" value="5" onClick="document.calculator.ans.value+='5'">
							</td>
							<td>
								<input type="button" class="calcu" value="6" onClick="document.calculator.ans.value+='6'">
							</td>
							<td>
								<input type="button" class="calcu" value="-" onClick="document.calculator.ans.value+='-'">
							</td>
						</tr>
						<tr>
							<td>
								<input type="button" class="calcu" value="1" onClick="document.calculator.ans.value+='1'">
							</td>
							<td>
								<input type="button" class="calcu" value="2" onClick="document.calculator.ans.value+='2'">
							</td>
							<td>
								<input type="button" class="calcu" value="3" onClick="document.calculator.ans.value+='3'">
							</td>
							<td>
								<input type="button" class="calcu" value="*" onClick="document.calculator.ans.value+='*'">
							</td>
						</tr>
						<tr>
							<td>
								<input type="reset" class="calcu" value="C">
							</td>
							<td>
								<input type="button" class="calcu" value="0" onClick="document.calculator.ans.value+='0'">
							</td>
							<td>
								<input type="button" class="calcu" value="=" onClick="document.calculator.ans.value=eval(document.calculator.ans.value)"
							</td>
							<td>
								<input type="button" class="calcu" value="/" onClick="document.calculator.ans.value+='/'">
							</td>
						</tr>
					</table>
				</div><!--end cal-->
			</form>
		</div><!--end field-->
	</div><!--end background-->
</div><!--end container-->
</body>
</html>