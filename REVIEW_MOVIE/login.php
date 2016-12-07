<!DOCTYPE html>
<html>

<head>
	<title>M | LOG-IN</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<style>

.login_btn {
	text-decoration: none; 
	background-color: #CEB0FF;
	border: none; 
	color: #FFFFFF; 
	cursor: pointer;
	font-size: 20px; 
	border-radius: 5px; 
    text-align: center;
    padding: 14px 115px;
}

.facebook_btn {
	text-decoration: none; 
	background-color: #89ACED;
	border: none; 
	color: #FFFFFF; 
	cursor: pointer;
	font-size: 20px; 
	border-radius: 5px; 
    text-align: center;
    padding: 14px 95px;
}

.gmail_btn{
	text-decoration: none; 
	background-color: #FF7272; 
	border: none; 
	color: #FFFFFF; 
	cursor: pointer;
	font-size: 20px; 
	border-radius: 5px; 
    text-align: center;
    padding: 14px 120px;
}

.register_btn {
	text-decoration: none; 
	background-color: #B989E6; 
	border: none; 
	color: #FFFFFF; 
	cursor: pointer;
	font-size: 20px; 
	border-radius: 5px; 
    text-align: center;
    padding: 14px 102px;
}

</style>

<body>

<div class="container">

	<div class="header">
		<div class="logo">
			<a href="file:///C:/xampp/htdocs/test/test/REVIEW_MOVIE/home.php">
				<center><img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/Linea_M_(Logo_Metro_Medellin).png" style="width: 80px; height: 80px; margin-top: 20px; margin-bottom: 20px;"></center>
			</a>
		</div>
		<div class="menu">
			<ul>
			  <li><a href="file:///C:/xampp/htdocs/test/test/REVIEW_MOVIE/home.php">HOME</a></li>
			  <li><a href="file:///C:/xampp/htdocs/test/test/REVIEW_MOVIE/lastest.php">LASTEST</a></li>
			  <li><a href="file:///C:/xampp/htdocs/test/test/REVIEW_MOVIE/movie.php">MOVIE</a></li>
			  <li><a href="file:///C:/xampp/htdocs/test/test/REVIEW_MOVIE/contact.php">CONTACT</a></li>
			  <li><a href="file:///C:/xampp/htdocs/test/test/REVIEW_MOVIE/setting.php">SETTING</a></li>
			  <li style="float:right"><a href="file:///C:/xampp/htdocs/test/test/REVIEW_MOVIE/login.php">LOG-IN</a></li>
			</ul>
		</div>
	</div><!--header-->

	<div class="main">
		<center>
		<div class="login">
			<form style="font-size: 20px; color: #AEAEAE;">
				<fieldset style="width: 900px; border-radius: 10px; background-color: #F0F0F0;">
					<legend>LOG-IN</legend>
						<table style="margin-top: 10px; margin-bottom: 10px;">
							<tr>
								<td>USERNAME</td>
								<td></td>
								<td></td>
								<td></td>
								<td><input type="text" name="name" placeholder="username" style="height: 25px; font-size: 20px;"></td>					
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>					
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>					
							</tr>
							<tr>
								<td>PASSWORD</td>
								<td></td>
								<td></td>
								<td></td>
								<td><input type="password" name="pwd" placeholder="password" style="height: 25px; font-size: 20px;"></td> 
							</tr>
						</table>	
						<br>							
								<center>
									<a href="#" class="login_btn">LOG-IN</a>
								</center>													

						<br>
						<hr>
						<br>

								<center>
									<a href="#" class="facebook_btn">FACEBOOK</a>
								</center>		
						<br>
						<br>
								<center>
									<a href="#" class="gmail_btn">GMAIL</a>
								</center>

						<br>
						<hr>
						<br>
								
								<center>																	
									<a href="file:///C:/xampp/htdocs/test/test/REVIEW_MOVIE/register.php" class="register_btn">REGISTER</a>
								</center>

						<br>				

				</fieldset>
			</form>
		</div><!--login-->
		</center>
	</div><!--main-->

	<div class="footer">
		<img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/Linea_M_(Logo_Metro_Medellin).png" style="width: 80px; height: 80px; margin-left: 30px; margin-top: 30px; margin-bottom: 30px;">
	</div><!--footer-->

</div><!--container-->

</body>
</html>

