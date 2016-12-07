<!DOCTYPE html>
<html>

<head>
	<title>M | REGISTER</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
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
			<div class="regis">
				<form style="font-size: 20px; color: #AEAEAE;">
					<fieldset style="width: 900px; border-radius: 10px; background-color: #F0F0F0;">
						<legend>REGISTER</legend>
						<!--picture-->

						<hr>

						<!--personal-->
						<table style="margin-top: 10px; margin-bottom: 10px;">
							<tr>
								<td>USERNAME</td>
								<td></td>
								<td></td>
								<td></td>
								<td><input type="text" name="name" placeholder="username" style="height: 25px; font-size: 20px;"></td>					
							</tr>
							<tr>
								<td>PASSWORD</td>
								<td></td>
								<td></td>
								<td></td>
								<td><input type="password" name="pwd" placeholder="password" style="height: 25px; font-size: 20px;"></td>					
							</tr>
							<tr>
								<td>RE-PASSWORD</td>
								<td></td>
								<td></td>
								<td></td>
								<td><input type="password" name="pwd" placeholder="re-password" style="height: 25px; font-size: 20px;"></td>					
							</tr>
							<tr>
								<td>NAME</td>
								<td></td>
								<td></td>
								<td></td>
								<td><input type="text" name="name" placeholder="name" style="height: 25px; font-size: 20px;"></td>					
							</tr>
							<tr>
								<td>LASTNAME</td>
								<td></td>
								<td></td>
								<td></td>
								<td><input type="text" name="name" placeholder="lastname" style="height: 25px; font-size: 20px;"></td>					
							</tr>
							<tr>
								<td>EMAIL</td>
								<td></td>
								<td></td>
								<td></td>
								<td><input type="email" name="name" placeholder="movie_review@gmail.com" style="height: 25px; font-size: 20px;"></td>					
							</tr>
							<tr>
								<td>CONFIRM-EMAIL</td>
								<td></td>
								<td></td>
								<td></td>
								<td><input type="email" name="name" placeholder="movie_review@gmail.com" style="height: 25px; font-size: 20px;"></td>					
							</tr>
							<tr>
								<td>GENDER</td>
								<td></td>
								<td></td>
								<td></td>
								<td>
									<select style="height: 30px; width: 248px;">
										<option>...CHOOSE...</option>
										<option>MALE</option>
										<option>FEMALE</option>
									</select>
								</td>					
							</tr>
							<tr>
								<td>BIRTHDATE</td>
								<td></td>
								<td></td>
								<td></td>
								<td><input type="date" name="bday" style="height: 30px; width: 242px;"></td>					
							</tr>
							<tr>
								<td>PROFESSION</td>
								<td></td>
								<td></td>
								<td></td>
								<td><input type="text" name="profession" placeholder="profession" style="height: 25px; font-size: 20px;"></td>					
							</tr>
						</table>

						<hr>

						<!--address-->
						<table>
							<tr>
								<td>ADDRESS</td>
								<td></td>
								<td></td>
								<td></td>

								<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<textarea rows="5" cols="32"></textarea></td>					
							</tr>
							<tr>
								<td>COUNTRY</td>
								<td></td>
								<td></td>
								<td></td>
								<td>
									<select style="height: 30px; width: 248px;">
										<option>...CHOOSE...</option>
										<option>MALE</option>
										<option>FEMALE</option>
									</select>
								</td>					
							</tr>
							<tr>
								<td>ZIPCODE</td>
								<td></td>
								<td></td>
								<td></td>
								<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="zipcode" style="height: 30px; width: 242px;"></td>					
							</tr>
						</table>

						<hr>

						<!--polict-->

						<hr>

						<!--submit-->

					</fieldset>
				</form>
			</div><!--regis-->
		</center>
	</div><!--main-->

	<div class="footer">
		<img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/Linea_M_(Logo_Metro_Medellin).png" style="width: 80px; height: 80px; margin-left: 30px; margin-top: 30px; margin-bottom: 30px;">
	</div><!--footer-->

</div><!--container-->

</body>
</html>
