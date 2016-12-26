<!DOCTYPE html>
<html>
<head>
	<title>WASH</title>
</head>
<style>
		.background {
			width: 715px;
			height: 700px;
			background-color: #CD5C5C;
			font-family: arial;
			font-weight: bold;
		}
	/*menu*/
		.menu {
			background-color: #F08080;
			width: 410px;
			height: 490px;
			font-size: 25px;
		}
		ul.tab {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		    overflow: hidden;
		    border: 1px solid #ccc;
		    background-color: #EDBB99;
		}
		ul.tab li {float: left;}
		ul.tab li a {
		    display: inline-block;
		    color: black;
		    text-align: center;
		    padding: 14px 16px;
		    text-decoration: none;
		    transition: 0.3s;
		    font-size: 17px;
		}
		.tabcontent {
		    display: none;
		    padding: 6px 12px;
		    border-top: none;
		}
		.mon {
			background-color: #DC7633;
		    border: none;
		    color: white;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 25px;
		    width: 125px;
		    height: 80px;
		}
		.i_dry {
			background-color: #DC7633;
		    border: none;
		    color: white;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 20px;
		    width: 187px;
		    height: 80px;
		}
		.pie {
			background-color: #DC7633;
		    border: none;
		    color: white;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 20px;
		    width: 187px;
		    height: 55px;
		}
		.on {
			background-color: #DC7633;
		    border: none;
		    color: white;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 20px;
		    width: 384px;
		    height: 70px;
		    margin-top: 10px;
		}
	/*detail*/
		.detail {
			background-color: #FA8072;
			width: 295px;
			height: 490px;
		}
		.name {
			font-size: 25px;
			width: 100px;
			height: 40px;
			padding-top: 10px;
			padding-left: 10px;
		}
		#list {
			width: 285px;
			height: 400px;
			background-color: #F6DDCC;
			margin-left: 5px;
		}
	/*total*/
		.total {
			background-color: #FFA07A;
			width: 706px;
			height: 200px;
			margin-left: 5px;
		}
</style>
<body>
	<div class="containter">
		<div class="background">
			<form name="calculator">
				<table>
					<tr>
						<td>
							<div class="menu">
								<ul class="tab">
									<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'monthly')">รายเดือน</a></li>
								  	<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'dry')">ซักแห้ง</a></li>
								  	<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'piece')">ซักรายชิ้น</a></li>
								  	<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'iron')">รีดรายชิ้น</a></li>
								</ul><!--end tab-->
								<div id="monthly" class="tabcontent">
									ซักอบรีด
								  	<table>
								  		<tr>
								  			<td>
								  				<input type="button" value="30" id="one" class="mon" onClick="document.calculator.ans.value+='500'">
								  			</td>
								  			<td>
								  				<input type="button" value="50" id="two" class="mon" onClick="document.calculator.ans.value+='800'">
								  			</td>
								  			<td>
								  				<input type="button" value="100" id="three" class="mon" onClick="document.calculator.ans.value+='1450'">
								  			</td>
								  		</tr>
								  	</table>
								  	ซักอบพับ
								  	<table>
								  		<tr>
								  			<td>
								  				<input type="button" value="30" id="four" class="mon" onClick="document.calculator.ans.value+='250'">
								  			</td>
								  			<td>
								  				<input type="button" value="50" id="five" class="mon" onClick="document.calculator.ans.value+='450'">
								  			</td>
								  			<td>
								  				<input type="button" value="100" id="six" class="mon" onClick="document.calculator.ans.value+='750'">
								  			</td>
								  		</tr>
								  	</table>
								</div>
								<div id="dry" class="tabcontent">
								  	<table>
								  		<tr>
								  			<td>
								  				<input type="button" value="เสื้อสูทชาย" id="seven" class="i_dry" onClick="document.calculator.ans.value+='100'">
								  			</td>
								  			<td>
								  				<input type="button" value="กางเกงสูทชาย" id="eigth" class="i_dry" onClick="document.calculator.ans.value+='60'">
								  			</td>								  										  	
								  		</tr>
								  		<tr>
								  			<td>
								  				<input type="button" value="เสื้อสูทหญิง" id="nine" class="i_dry" onClick="document.calculator.ans.value+='80'">
								  			</td>
								  			<td>
								  				<input type="button" value="กางเกง/กระโปรงสูทญ" id="one_zero" class="i_dry" onClick="document.calculator.ans.value+='45'">
								  			</td>								  										  	
								  		</tr>
								  		<tr>
								  			<td>
								  				<input type="button" value="เสื้อเชิ้ตแขนยาว" id="one_one" class="i_dry" onClick="document.calculator.ans.value+='70'">
								  			</td>
								  			<td>
								  				<input type="button" value="แจ๊กเก็ต" id="one_two" class="i_dry" onClick="document.calculator.ans.value+='100'">
								  			</td>								  										  	
								  		</tr>
								  		<tr>
								  			<td>
								  				<input type="button" value="เนคไท" id="one_three" class="i_dry" onClick="document.calculator.ans.value+='40'">
								  			</td>
								  			<td>
								  				<input type="button" value="ตุ๊กตา" id="one_four" class="i_dry" onClick="document.calculator.ans.value+='100'">
								  			</td>								  										  	
								  		</tr>
								  		<tr>
								  			<td>
								  				<input type="button" value="กระเป๋า" id="one_five" class="i_dry" onClick="document.calculator.ans.value+='100'">
								  			</td>
								  			<td>
								  				<input type="button" value="พรม" id=one_six" class="i_dry" onClick="document.calculator.ans.value+='250'">
								  			</td>								  										  	
								  		</tr>
								  	</table>
								</div>
								<div id="piece" class="tabcontent">
								  	<table>
								  		<tr>
								  			<td>
								  				<input type="button" value="เสื้อเชิ้ตแขนยาว" id="one_seven" class="pie" onClick="document.calculator.ans.value+='20'">
								  			</td>
								  			<td>
								  				<input type="button" value="เสื้อเชิ้ตแขนสั้น" id="one_eight" class="pie" onClick="document.calculator.ans.value+='15'">
								  			</td>
								  		</tr>
								  		<tr>
								  			<td>
								  				<input type="button" value="เสื้อยืดแขนยาว" id="one_nine" class="pie" onClick="document.calculator.ans.value+='20'">
								  			</td>
								  			<td>
								  				<input type="button" value="เสื้อยืดแขนสั้น" id="two_zero" class="pie" onClick="document.calculator.ans.value+='15'">
								  			</td>
								  		</tr>
								  		<tr>
								  			<td>
								  				<input type="button" value="กางเกงขายาว" id="two_one" class="pie" onClick="document.calculator.ans.value+='20'">
								  			</td>
								  			<td>
								  				<input type="button" value="กางเกงขาสั้น" id="two_two" class="pie" onClick="document.calculator.ans.value+='15'">
								  			</td>
								  		</tr>
								  		<tr>
								  			<td>
								  				<input type="button" value="กางเกงยีนส์" id="two_three" class="pie" onClick="document.calculator.ans.value+='25'">
								  			</td>
								  			<td>
								  				<input type="button" value="กระโปรงยาว" id="two_four" class="pie" onClick="document.calculator.ans.value+='20'">				
								  			</td>
								  		</tr>
								  		<tr>
								  			<td>
								  				<input type="button" value="กระโปรงสั้น" id="two_five" class="pie" onClick="document.calculator.ans.value+='15'">
								  			</td>
								  			<td>
								  				<input type="button" value="ชุดคลุมยาว" id="two_six" class="pie" onClick="document.calculator.ans.value+='50'">
								  			</td>
								  		</tr>
								  		<tr>
								  			<td>
								  				<input type="button" value="ชุดคลุมแพทย์" id="two_seven" class="pie" onClick="document.calculator.ans.value+='60'">
								  			</td>
								  			<td>
								  				<input type="button" value="ผ้าเช็ดตัว" id="two_eight" class="pie" onClick="document.calculator.ans.value+='50'">
								  			</td>
								  		</tr>
								  		<tr>
								  			<td>
								  				<input type="button" value="ผ้านวม" id="two_nine" class="pie" onClick="document.calculator.ans.value+='200'">
								  			</td>
								  			<td>
								  				<input type="button" value="ชุดที่นอน" id="three_zero" class="pie" onClick="document.calculator.ans.value+='80'">
								  			</td>
								  		</tr>
								  	</table>
								</div>
								<div id="iron" class="tabcontent">
								  	<input type="button" value="ทั่วไป" id="three_one" class="on" onClick="document.calculator.ans.value+='10'">
								  	<input type="button" value="ชุดคลุมแพทย์" id="three_two" class="on" onClick="document.calculator.ans.value+='10'">
								  	<input type="button" value="ชุดคลุมยาว" id="three_three" class="on" onClick="document.calculator.ans.value+='15'">
								</div>
							</div><!--end menu-->
						</td>
						<td>
							<div class="detail">
								<div class="name">รายการ</div>
								<div id="list">
									<!--<div id="1" style="display: none;">123456</div>-->
								</div>
							</div><!--end detail-->
						</td>
					</tr>
				</table>
				<div class="total">
					ราคารวม <input type="text" name="detail">
					จ่าย <input type="text" name="detail">
					ทอน <input type="text" name="detail">
				</div><!--end total-->
			</form><!--end calculator-->
		</div><!--background-->
	</div><!--end container-->
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
	//tab
		function openCity(evt, cityName) {
	    var i, tabcontent, tablinks;
	    tabcontent = document.getElementsByClassName("tabcontent");
	    for (i = 0; i < tabcontent.length; i++) {
	        tabcontent[i].style.display = "none";
	    }
	    tablinks = document.getElementsByClassName("tablinks");
	    for (i = 0; i < tablinks.length; i++) {
	        tablinks[i].className = tablinks[i].className.replace(" active", "");
	    }
	    document.getElementById(cityName).style.display = "block";
	    evt.currentTarget.className += " active";
		}
	//end tab
	//click
		$(document).ready(function() {
 				$("#one").click(function() {
    			$("#1").show();
  			});
		});
		$(document).ready(function() {
 				$("#two").click(function() {
    			$("#2").show();
  			});
		});
	//end click
</script>