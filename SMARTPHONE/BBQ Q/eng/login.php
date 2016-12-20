<!DOCTYPE html>
<html>
<head>
	<title>BBQ Q | LOG-IN</title>
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
			font-size: 20px;
		}
		.login_btn {
			background-color: #4CAF50;
		    border: none;
		    color: white;
		    padding: 23px 100px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 18px;
		    cursor: pointer;
		    margin-top: 10px;
		    margin-bottom: 5px;
		    margin-top: 176px;
		}
	</style>
<body>
<div class="container">
	<div class="background">
		<div class="head_bar">
			<table>
				<tr>
					<td>
						<a href="file:///C:/xampp/htdocs/test/test/SMARTPHONE/BBQ%20Q/eng/home.php">
							<img src="http://th.japantravel.com/images/left-arrow.png" style="width: 40px; height: 40px; margin-left: -5px; margin-top: -3px; columns: #FFFFFF;">
						</a>
					</td>
					<td style="font-size: 38px;"><center style="margin-top: -12px; margin-left: -5px; color: #FFFFFF;"> | </center></td>
					<td style="font-size: 20px;"><center style="margin-bottom: 5px; color: #FFFFFF;">Log-in</center></td>
				</tr>
			</table>
		</div><!--end head_bar-->
		<div class="field">
			Username:
			<br><input type="text" name="name" required style="width: 230px; height: 25px; font-size: 20px; border-radius: 5px;">
			<br>
			<br>
			Password:
			<br><input type="password" name="pwd" required style="width: 230px; height: 25px; font-size: 20px; border-radius: 5px;">	
		</div><!--end field-->
		<a href="file:///C:/xampp/htdocs/test/test/SMARTPHONE/BBQ%20Q/eng/menu.php">
			<div class="login_btn">Log-in</div>
		</a>	
	</div><!--end background-->
</div><!--end container-->
</body>
</html>