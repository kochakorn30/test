<!DOCTYPE html>
<html>
<head>
	<title>iQ Wash</title>
</head>
<style>
		body {
			font-family: arial;
		}
		.container {
			width: 780px;
			height: 460px;
			background-color: #CD5C5C;
		}
	/*menu*/
		.menu {
			width: 470px;
			height: 400px;
			background-color: #F08080;
		}
		.mon {
			background-color: #EB984E;
		    border: none;
		    color: #FFFFFF;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    width: 144px;
		    height: 50px;
		}
		.d {
			background-color: #EB984E;
		    border: none;
		    color: #FFFFFF;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    width: 215px;
		    height: 50px;
		}
		.pie {
			background-color: #EB984E;
		    border: none;
		    color: #FFFFFF;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    width: 216px;
		    height: 44px;
		}
		.ir {
			background-color: #EB984E;
		    border: none;
		    color: #FFFFFF;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    width: 445px;
		    height: 50px;
		    margin-top: 10px;
		}
	/*detail*/
		.detail {
			width: 300px;
			height: 400px;
			background-color: #FA8072;
		}
		.title {
			padding-top: 10px;
			padding-left: 10px;
			font-size: 20px;
			font-weight: bold;
		}
		.all {
			width: 290px;
			height: 340px;
			margin-left: 5px;
		}
	/*total*/
		.total {
			width: 775px;
			height: 50px;
			background-color: #E9967A;
			margin-left: 3px;
		}
		.sum {
		    border: none;
		    color: #FFFFFF;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    width: 100px;
		    height: 45px;
		}
	/*tab*/
		ul.tab {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		    overflow: hidden;
		    border: 1px solid #ccc;
		    background-color: #F5CBA7;
		    font-weight: bold;
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
		}
</style>
<body>
<form name="calculator">
	<div class="container">
		<table>
			<tr>
				<td>
					<div class="menu">
						<ul class="tab">
						  	<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'month')">รายเดือน</a></li>
						  	<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'dry')">ซักแห้งรายชิ้น</a></li>
						  	<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'piece')">ซักรายชิ้น</a></li>
						  	<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'iron')">รีดรายชิ้น</a></li>
						</ul>
						<div id="month" class="tabcontent">
						  	ซักอบรีด
						  	<table>
						  		<tr>
						  			<td>
						  				<input type="button" id="one" class="mon" value="30 ชิ้น" onClick="document.calculator.ans.value+='500'">
						  			</td>
						  			<td>
						  				<input type="button" id="two" class="mon" value="50 ชิ้น" onClick="document.calculator.ans.value+='800'">
						  			</td>
						  			<td>
						  				<input type="button" id="three" class="mon" value="100 ชิ้น" onClick="document.calculator.ans.value+='1450'">
						  			</td>
						  		</tr>
						  	</table>
						  	ซักอบพับ
						  	<table>
						  		<tr>
						  			<td>
						  				<input type="button" id="four" class="mon" value="30 ชิ้น" onClick="document.calculator.ans.value+='250'">
						  			</td>
						  			<td>
						  				<input type="button" id="five" class="mon" value="50 ชิ้น" onClick="document.calculator.ans.value+='450'">
						  			</td>
						  			<td>
						  				<input type="button" id="six" class="mon" value="100 ชิ้น" onClick="document.calculator.ans.value+='750'">
						  			</td>
						  		</tr>
						  	</table>
						</div>
						<div id="dry" class="tabcontent">
						  	<table>
						  		<tr>
						  			<td>
						  				<input type="button" id="seven" class="d" value="เสื้อสูทชาย" onClick="document.calculator.ans.value+='100'">
						  			</td>
						  			<td>
						  				<input type="button" id="eight" class="d" value="กางเกงสูทชาย" onClick="document.calculator.ans.value+='60'">
						  			</td>
						  		</tr>
						  		<tr>
						  			<td>
						  				<input type="button" id="nine" class="d" value="เสื้อสูทหญิง" onClick="document.calculator.ans.value+='80'">
						  			</td>
						  			<td>
						  				<input type="button" id="one_zero" class="d" value="กางเกงกระโปรงสูทหญิง" onClick="document.calculator.ans.value+='45'">
						  			</td>
						  		</tr>
						  		<tr>
						  			<td>
						  				<input type="button" id="one_one" class="d" value="เสื้อเชิ้ตแขนยาว" onClick="document.calculator.ans.value+='70'">
						  			</td>
						  			<td>
						  				<input type="button" id="one_two" class="d" value="แจ๊กเก็ต" onClick="document.calculator.ans.value+='100'">
						  			</td>
						  		</tr>
						  		<tr>
						  			<td>
						  				<input type="button" id="one_three" class="d" value="เนคไท" onClick="document.calculator.ans.value+='40'">
						  			</td>
						  			<td>
						  				<input type="button" id="one_four" class="d" value="ต๊กตา" onClick="document.calculator.ans.value+='100'">
						  			</td>
						  		</tr>
						  		<tr>
						  			<td>
						  				<input type="button" id="one_five" class="d" value="กระเป๋า" onClick="document.calculator.ans.value+='150'">
						  			</td>
						  			<td>
						  				<input type="button" id="one_six" class="d" value="พรม" onClick="document.calculator.ans.value+='250'">
						  			</td>
						  		</tr>
						  	</table>
						</div>
						<div id="piece" class="tabcontent">
						  	<table>
						  		<tr>
						  			<td>
						  				<input type="button" id="one_seven" class="pie" value="เสื้อเชิ้ตแขนยาว" onClick="document.calculator.ans.value+='20'">
						  			</td>
						  			<td>
						  				<input type="button" id="one_eight" class="pie" value="เสื้อเชิ้ตแขนสั้น" onClick="document.calculator.ans.value+='15'">
						  			</td>
						  		</tr>
						  		<tr>
						  			<td>
						  				<input type="button" id="one_nine" class="pie" value="เสื้อยืดแขนยาว" onClick="document.calculator.ans.value+='20'">
						  			</td>
						  			<td>
						  				<input type="button" id="two_zero" class="pie" value="เสื้อยืดแขนสั้น" onClick="document.calculator.ans.value+='15'">
						  			</td>
						  		</tr>
						  		<tr>
						  			<td>
						  				<input type="button" id="two_one" class="pie" value="กางเกงยาว" onClick="document.calculator.ans.value+='20'">
						  			</td>
						  			<td>
						  				<input type="button" id="two_two" class="pie" value="กางเกงสั้น" onClick="document.calculator.ans.value+='15'">
						  			</td>
						  		</tr>
						  		<tr>
						  			<td>
						  				<input type="button" id="two_three" class="pie" value="กางเกงยีนส์" onClick="document.calculator.ans.value+='25'">
						  			</td>
						  			<td>
						  				<input type="button" id="two_four" class="pie" value="กระโปรงยาว" onClick="document.calculator.ans.value+='20'">
						  			</td>
						  		</tr>
						  		<tr>
						  			<td>
						  				<input type="button" id="two_five" class="pie" value="กระโปรงสั้น" onClick="document.calculator.ans.value+='15'">
						  			</td>
						  			<td>
						  				<input type="button" id="two_six" class="pie" value="ชุดคลุมยาว" onClick="document.calculator.ans.value+='50'">
						  			</td>
						  		</tr>
						  		<tr>
						  			<td>
						  				<input type="button" id="two_seven" class="pie" value="ชุดแพทย์" onClick="document.calculator.ans.value+='60'">
						  			</td>
						  			<td>
						  				<input type="button" id="two_eight" class="pie" value="ผ้าเช็ดตัว" onClick="document.calculator.ans.value+='50'">
						  			</td>
						  		</tr>
						  		<tr>
						  			<td>
						  				<input type="button" id="two_nine" class="pie" value="ผ้านวม" onClick="document.calculator.ans.value+='200'">
						  			</td>
						  			<td>
						  				<input type="button" id="three_zero" class="pie" value="ชุดที่นอน" onClick="document.calculator.ans.value+='80'">
						  			</td>
						  		</tr>
						  	</table>
						</div>
						<div id="iron" class="tabcontent">
						  	<input type="button" id="three_one" class="ir" value="ทั่วไป" onClick="document.calculator.ans.value+='10'">
						  	<input type="button" id="three_two" class="ir" value="ชุดคลุมแพทย์" onClick="document.calculator.ans.value+='15'">
						  	<input type="button" id="three_three" class="ir" value="ชุดคลุ่มยาว" onClick="document.calculator.ans.value+='15'">
						</div>
					</div><!--end menu-->
				</td>
				<td>
					<div class="detail">
						<div class="title">รายการ</div>
						<hr>
						<div class="all">
							<div id="1" style="display: none;">รายเดือน ซักอาบรีด 30 ชิ้น - ราคา 500 บาท</div>
							<div id="2" style="display: none;">รายเดือน ซักอาบรีด 50 ชิ้น - ราคา  800 บาท</div>
							<div id="3" style="display: none;">รายเดือน ซักอาบรีด 100 ชิ้น - ราคา 1450 บาท</div>
							<div id="4" style="display: none;">รายเดือน ซักอาบพับ 30 ชิ้น - ราคา 250 บาท</div>
							<div id="5" style="display: none;">รายเดือน ซักอาบพับ 50 ชิ้น - ราคา 450 บาท</div>
							<div id="6" style="display: none;">รายเดือน ซักอาบพับ 100 ชิ้น - ราคา 750 บาท</div>
							<div id="7" style="display: none;">ซักแห้งรายชิ้น เสื้อสูทชาย - ราคา 100 บาท</div>
							<div id="8" style="display: none;">ซักแห้งรายชิ้น กางเกงสูทชาย - ราคา 60 บาท</div>
							<div id="9" style="display: none;">ซักแห้งรายชิ้น เสื้อสูทหญิง - ราคา 80 บาท</div>
							<div id="10" style="display: none;">ซักแห้งรายชิ้น กางเกง/กระโปรงสูทหญิง - ราคา 45 บาท</div>
							<div id="11" style="display: none;">ซักแห้งรายชิ้น เสื้อเชิ้ตแขนยาว - ราคา 70 บาท</div>
							<div id="12" style="display: none;">ซักแห้งรายชิ้น แจ๊กเก็ต - ราคา 100 บาท</div>
							<div id="13" style="display: none;">ซักแห้งรายชิ้น เนคไท - ราคา 40 บาท</div>
							<div id="14" style="display: none;">ซักแห้งรายชิ้น ตุ๊กตา - ราคา 100 บาท</div>
							<div id="15" style="display: none;">ซักแห้งรายชิ้น กระเป๋า - ราคา 150 บาท</div>
							<div id="16" style="display: none;">ซักแห้งรายชิ้น พรม - ราคา 250 บาท</div>
							<div id="17" style="display: none;">ซักรายชิ้น เสื้อเชิ้ตแขนยาว - ราคา 20 บาท</div>
							<div id="18" style="display: none;">ซักรายชิ้น เสื้อเชิ้ตแขนสั้น - ราคา 15 บาท</div>
							<div id="19" style="display: none;">ซักรายชิ้น เสื้อยืดแขนยาว - ราคา 20 บาท</div>
							<div id="20" style="display: none;">ซักรายชิ้น เสื้อยืดแขนสั้น - ราคา 15 บาท</div>
							<div id="21" style="display: none;">ซักรายชิ้น กางเกงยาว - ราคา 20 บาท</div>
							<div id="22" style="display: none;">ซักรายชิ้น กางเกงสั้น - ราคา 15 บาท</div>
							<div id="23" style="display: none;">ซักรายชิ้น กางเกงยีนส์ - ราคา 25 บาท</div>
							<div id="24" style="display: none;">ซักรายชิ้น กระโปรงยาว - ราคา 20 บาท</div>
							<div id="25" style="display: none;">ซักรายชิ้น กระโปรงสั้น - ราคา 15 บาท</div>
							<div id="26" style="display: none;">ซักรายชิ้น ชุดคลุมยาว - ราคา 50 บาท</div>
							<div id="27" style="display: none;">ซักรายชิ้น ชุดแพทย์ - ราคา 60 บาท</div>
							<div id="28" style="display: none;">ซักรายชิ้น ผ้าเช็ดตัว - ราคา 50 บาท</div>
							<div id="29" style="display: none;">ซักรายชิ้น ผ้านวม - ราคา 200 บาท</div>
							<div id="30" style="display: none;">ซักรายชิ้น ชุดที่นอน - ราคา 80 บาท</div>
							<div id="31" style="display: none;">รีดรายชิ้น ทั่วไป - ราคา 10 บาท</div>
							<div id="32" style="display: none;">รีดรายชิ้น ชุดคลุมแพทย์ - ราคา 15 บาท</div>
							<div id="33" style="display: none;">รีดรายชิ้น ชุดคลุมยาว - ราคา 15 บาท</div>
						</div><!--end all-->
					</div><!--end detail-->
				</td>
			</tr>
		</table>
		<div class="total">
			<input type="button" class="sum" value="เพิ่ม" onClick="document.calculator.ans.value+='+'" style="background-color: #5499C7;"> 
			<input type="button" class="sum" value="ลบ" onClick="document.calculator.ans.value+='-'" style="background-color: #45B39D;">
			<input type="textfield" name="ans" value="" style="height: 40px; width: 347px; font-size: 20px;">
			<input type="button" class="sum" value="คิดเงิน" onClick="document.calculator.ans.value=eval(document.calculator.ans.value)" style="background-color: #AF7AC5;">
			<input type="reset" id="del" class="sum" value="จ่าย" style="background-color: #E74C3C;">
		</div><!--end total-->
	</div><!--end container-->
</form><!--end calculator-->
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
	//hide list
	$(document).ready(function() {
	 		$("#del").click(function() {
	   		$(".all").hide();
  		});  		
	});
	//end hide list
	//click menu
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
	$(document).ready(function() {
	 		$("#three").click(function() {
	   		$("#3").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#four").click(function() {
	   		$("#4").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#five").click(function() {
	   		$("#5").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#six").click(function() {
	   		$("#6").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#seven").click(function() {
	   		$("#7").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#eight").click(function() {
	   		$("#8").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#nine").click(function() {
	   		$("#9").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#one_zero").click(function() {
	   		$("#10").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#one_one").click(function() {
	   		$("#11").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#one_two").click(function() {
	   		$("#12").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#one_three").click(function() {
	   		$("#13").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#one_four").click(function() {
	   		$("#14").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#one_five").click(function() {
	   		$("#15").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#one_six").click(function() {
	   		$("#16").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#one_seven").click(function() {
	   		$("#17").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#one_eight").click(function() {
	   		$("#18").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#one_nine").click(function() {
	   		$("#19").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#two_zero").click(function() {
	   		$("#20").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#two_one").click(function() {
	   		$("#21").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#two_two").click(function() {
	   		$("#22").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#two_three").click(function() {
	   		$("#23").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#two_four").click(function() {
	   		$("#24").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#two_five").click(function() {
	   		$("#25").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#two_six").click(function() {
	   		$("#26").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#two_seven").click(function() {
	   		$("#27").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#two_eight").click(function() {
	   		$("#28").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#two_nine").click(function() {
	   		$("#29").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#three_zero").click(function() {
	   		$("#30").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#three_one").click(function() {
	   		$("#31").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#three_two").click(function() {
	   		$("#32").show();
  		});  		
	});
	$(document).ready(function() {
	 		$("#three_three").click(function() {
	   		$("#33").show();
  		});  		
	});
	//end click menu
</script>