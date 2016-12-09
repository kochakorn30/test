<!doctype html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<meta charset="utf-8">
<title>M | BOOKING</title>
    <style>
        button {
            height: 70px;
            width: 70px;
            text-decoration: none;
            text-align: center;
            display:inline-block;
            color: #FFFFFF;
            font-size: 20px;
            font-weight: bold;
        }
        button.pressed {
            background-color: #FFFFFF;
            border-color: #000000;
            color: #000000;
        }
        .room {
        	width: 490px;
        	height: 492px;
        	background-color: #DDCAFD;
        }
        .guest {
        	width: 500px;
        	height: 500px;
        	background-color: #CAD8FD;        	
        }
        .detail {
        	width: 500px;
        	height: 220px;
        	background-color: #FDE7CA;        	
        }
        .total {
        	width: 500px;
        	height: 220px;
        	background-color: #EAFDCA;        	
        }
        .in_btn {
        	background-color: #A1E785;
            padding: 30px 55px;
            text-decoration: none;
            text-align: center;
            display:inline-block;
            color: #FFFFFF;
            font-size: 20px;
            font-weight: bold;
        }
        .out_btn {
        	background-color: #E78585;
            padding: 30px 50px;
            text-decoration: none;
            text-align: center;
            display:inline-block;
            color: #FFFFFF;
            font-size: 20px;
            font-weight: bold;
        }
        #plus_two {
        	background-color: #000000;
        	border-color: #FFFFFF;
        	border-style: soid;
            padding: 1px 5px;
            text-decoration: none;
            text-align: center;
            display:inline-block;
            color: #FFFFFF;
            font-size: 20px;
            font-weight: bold;
        }
        #plus_three {
        	background-color: #000000;
        	border-color: #FFFFFF;
        	border-style: soid;
            padding: 1px 5px;
            text-decoration: none;
            text-align: center;
            display:inline-block;
            color: #FFFFFF;
            font-size: 20px;
            font-weight: bold;
        }
        #plus_four {
        	background-color: #000000;
        	border-color: #FFFFFF;
        	border-style: soid;
            padding: 1px 5px;
            text-decoration: none;
            text-align: center;
            display:inline-block;
            color: #FFFFFF;
            font-size: 20px;
            font-weight: bold;
        }
        #plus_five {
        	background-color: #000000;
        	border-color: #FFFFFF;
        	border-style: soid;
            padding: 1px 5px;
            text-decoration: none;
            text-align: center;
            display:inline-block;
            color: #FFFFFF;
            font-size: 20px;
            font-weight: bold;
        }
        #minus_two {
        	background-color: #FFFFFF;
        	border-color: #000000;
        	border-style: soid;
            padding: 1px 8px;
            text-decoration: none;
            text-align: center;
            display:inline-block;
            color: #000000;
            font-size: 20px;
            font-weight: bold;
        }
        #minus_three {
        	background-color: #FFFFFF;
        	border-color: #000000;
        	border-style: soid;
            padding: 1px 8px;
            text-decoration: none;
            text-align: center;
            display:inline-block;
            color: #000000;
            font-size: 20px;
            font-weight: bold;
        }
        #minus_four {
        	background-color: #FFFFFF;
        	border-color: #000000;
        	border-style: soid;
            padding: 1px 8px;
            text-decoration: none;
            text-align: center;
            display:inline-block;
            color: #000000;
            font-size: 20px;
            font-weight: bold;
        }
        #minus_five {
        	background-color: #FFFFFF;
        	border-color: #000000;
        	border-style: soid;
            padding: 1px 8px;
            text-decoration: none;
            text-align: center;
            display:inline-block;
            color: #000000;
            font-size: 20px;
            font-weight: bold;
        }
        .standard {
        	background-color: #D7C4F9;
        }
        .superior {
        	background-color: #E1F9C4;
        }
        .deluxe {
        	background-color: #C4F9F7;
        }
        .family {
        	background-color: #F9C4DA;
        }
        .room_type {
            padding: 5px 10px;
            font-family: arial;
            text-decoration: none;
            text-align: center;
            display:inline-block;
            color: #8C8A8B;
            font-size: 19px;
            font-weight: bold;
        }
        .cash {
        	background-color: #97E6D2;
            padding: 10px 30px;
            text-decoration: none;
            text-align: center;
            display:inline-block;
            color: #FFFFFF;
            font-size: 40px;
            font-weight: bold;
            font-family: arial;
        }
        .extra {
        	padding: 5px 10px;
            font-family: arial;
            text-decoration: none;
            text-align: center;
            display:inline-block;
            color: #8C8A8B;
            font-size: 19px;
            font-weight: bold;
            background-color: #E6D397;
            border-style: solid;
        }
        .dis {
        	padding: 10px 20px;
            font-family: arial;
            text-decoration: none;
            text-align: center;
            display:inline-block;
            color: #8C8A8B;
            font-size: 20px;
            font-weight: bold;
            background-color: #FFCAA3;
            border-style: solid;
        }
        .add_btn {
        	background-color: #7084D7;
            padding: 5px 10px;
            text-decoration: none;
            text-align: center;
            display:inline-block;
            color: #FFFFFF;
            font-size: 25px;
            font-weight: bold;
            font-family: arial;
        }
        .dis_btn {
        	background-color: #D77083;
            padding: 5px 10px;
            text-decoration: none;
            text-align: center;
            display:inline-block;
            color: #FFFFFF;
            font-size: 25px;
            font-weight: bold;
            font-family: arial;
        }
        /* Style the list */
		ul.tab {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		    overflow: hidden;
		}		
		/* Style the links inside the list items */
		ul.tab li a {
		    display: inline-block;
		    color: black;
		    text-align: center;
		    padding: 14px 16px;
		    text-decoration: none;
		    transition: 0.3s;
		    font-size: 20px;
		}
		/* Float the list items side by side */
		ul.tab li {float: left;}
		/* Style the tab content */
		.tabcontent {
		    display: none;
		    padding: 6px 12px;
		    border: 1px solid #ccc;
		    border-top: none;
		}
    </style>
</head>
<body>
	<form name="calculator">
	<div class="container">
		<table>
			<tr>
				<!--room-->
				<td>
					<div class="room">
						<!--floor 7-->
						<ul class="tab">
  							<li><button class="deluxe"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'one_seven')">701</a></button></li>
							<li><button class="deluxe"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'two_seven')">702</a></button></li>
							<li><button class="deluxe"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'three_seven')">703</a></button></li>
							<li><button class="family"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'four_seven')">704</a></button></li>
							<li><button class="family"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'five_seven')">705</a></button></li>
							<li><button class="family"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'six_seven')">706</a></button></li>
							<li><button class="family"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'seven_seven')">707</a></button></li>
						</ul>
						<!--floor 6-->
						<ul class="tab">
  							<li><button class="deluxe"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'one_six')">601</a></button></li>
							<li><button class="deluxe"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'two_six')">602</a></button></li>
							<li><button class="deluxe"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'three_six')">603</a></button></li>
							<li><button class="superior"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'four_six')">604</a></button></li>
							<li><button class="superior"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'five_six')">605</a></button></li>
							<li><button class="superior"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'six_six')">606</a></button></li>
							<li><button class="superior"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'seven_six')">607</a></button></li>
						</ul>
						<!--floor 5-->
						<ul class="tab">
  							<li><button class="standard"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'one_five')">501</a></button></li>
							<li><button class="standard"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'two_five')">502</a></button></li>
							<li><button class="standard"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'three_five')">503</a></button></li>
							<li><button class="standard"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'four_five')">504</a></button></li>
							<li><button class="standard"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'five_five')">505</a></button></li>
							<li><button class="superior"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'six_five')">506</a></button></li>
							<li><button class="superior"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'seven_five')">507</a></button></li>
						</ul>
						<!--floor 4-->
						<ul class="tab">
  							<li><button class="family"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'one_four')">401</a></button></li>
							<li><button class="family"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'two_four')">402</a></button></li>
							<li><button class="family"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'three_four')">403</a></button></li>
							<li><button class="family"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'four_four')">404</a></button></li>
							<li><button class="family"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'five_four')">405</a></button></li>
							<li><button class="family"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'six_four')">406</a></button></li>
							<li><button class="family"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'seven_four')">407</a></button></li>
						</ul>
						<!--floor 3-->
						<ul class="tab">
  							<li><button class="deluxe"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'one_three')">301</a></button></li>
							<li><button class="deluxe"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'two_three')">302</a></button></li>
							<li><button class="deluxe"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'three_three')">303</a></button></li>
							<li><button class="deluxe"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'four_three')">304</a></button></li>
							<li><button class="deluxe"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'five_three')">305</a></button></li>
							<li><button class="deluxe"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'six_three')">306</a></button></li>
							<li><button class="deluxe"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'seven_three')">307</a></button></li>
						</ul>
						<!--floor 2-->
						<ul class="tab">
  							<li><button class="superior"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'one_two')">201</a></button></li>
							<li><button class="superior"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'two_two')">202</a></button></li>
							<li><button class="superior"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'three_two')">203</a></button></li>
							<li><button class="superior"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'four_two')">204</a></button></li>
							<li><button class="superior"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'five_two')">205</a></button></li>
							<li><button class="superior"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'six_two')">206</a></button></li>
							<li><button class="superior"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'seven_two')">207</a></button></li>
						</ul>
						<!--floor 1-->
						<ul class="tab">
  							<li><button class="standard"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'one_one')">101</a></button></li>
							<li><button class="standard"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'two_one')">102</a></button></li>
							<li><button class="standard"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'three_one')">103</a></button></li>
							<li><button class="standard"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'four_one')">104</a></button></li>
							<li><button class="standard"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'five_one')">105</a></button></li>
							<li><button class="standard"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'six_one')">106</a></button></li>
							<li><button class="standard"><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'seven_one')">107</a></button></li>
						</ul>
					</div><!--room-->
				</td>
				<!--guest-->
				<td>
					<div class="guest">
						<div id="one_one" class="tabcontent" style="font-family: arial; font-size: 25px;">
							<br>
						  	ROOM 101: STANDARD SINGLE
						  	<br>
							<br>PERSON &nbsp<input type="number" name="number" style="height: 25px; width: 50px; font-size: 20px;">
							<br>GUEST 1 &nbsp&nbsp<input type="text" name="name" id="out_101" style="height: 25px; width: 290px; font-size: 20px;">
								<b id="plus_two">+</b>
							<br><a style="display: none;" id="guest_two">GUEST 2 &nbsp&nbsp<input type="text"  name="name" style="height: 25px; width: 290px; font-size: 20px;">
								<b id="plus_three">+</b><b id="minus_two">-</b></a>
							<br><a style="display: none;" id="guest_three">GUEST 3 &nbsp&nbsp<input type="text" name="name" style="height: 25px; width: 290px; font-size: 20px;">
								<b id="plus_four">+</b><b id="minus_three">-</b></a>
							<br><a style="display: none;" id="guest_four">GUEST 4 &nbsp&nbsp<input type="text" name="name" style="height: 25px; width: 290px; font-size: 20px;">
								<b id="plus_five">+</b><b id="minus_four">-</b></a>
							<br><a style="display: none;" id="guest_five">GUEST 5 &nbsp&nbsp<input type="text" name="name" style="height: 25px; width: 290px; font-size: 20px;">
								<b id="minus_five">-</b></a>
							<hr>
							PRICE 2000
							<hr>
							<center>
							<table>
								<tr>
									<td><input type="button" value="CHECK-IN" onClick="document.calculator.ans.value+='2000'" class="in_btn"></td>
									<td><input type="button" class="out_btn" value="CHECK-OUT"></td>
								</tr>
							</table>
							</center>
						</div><!--one_one-->													
					</div><!--guest-->
				</td>
			</tr>
			<tr>
				<!--detail-->
				<td>
					<div class="detail">
						<!--extra-->
						<table>
							<tr>
								<td style="font-family: arial; font-weight: bold;">EXTRA</td>
								<td><input type="button" value="BED ADULT" onClick="document.calculator.ans.value+='500'" class="extra"></td>
								<td><input type="button" value="BED CHILD" onClick="document.calculator.ans.value+='200'" class="extra"></td>
								<br>
								<td><input type="button" value="BRKF" onClick="document.calculator.ans.value+='100'" class="extra"></td>
								<td><input type="button" value="DINR" onClick="document.calculator.ans.value+='150'" class="extra"></td>
							</tr>
						</table>
						<hr>
						<!--discount-->
						<table>
							<tr>
								<td style="font-family: arial; font-weight: bold;">DISCOUNT</td>
								<td><input type="button" value="5" onClick="document.calculator.ans.value+='5'" class="dis"></td>
								<td><input type="button" value="10" onClick="document.calculator.ans.value+='10'" class="dis"></td>
								<td><input type="button" value="15" onClick="document.calculator.ans.value+='15'" class="dis"></td>
								<td><input type="button" value="20" onClick="document.calculator.ans.value+='20'" class="dis"></td>
								<td><input type="button" value="%" onClick="document.calculator.ans.value+='/100'" class="dis"></td>
							</tr>
						</table>
						<hr>
						<!--room-->
						<table>
							<tr>
								<td style="font-family: arial; font-weight: bold;">ROOM</td>
								<td class="room_type" style="background-color: #D7C4F9;">STANDARD</td>
								<td class="room_type" style="background-color: #E1F9C4;">SUPERIOR</td>
								<td class="room_type" style="background-color: #C4F9F7;">DULUXE</td>
								<td class="room_type" style="background-color: #F9C4DA;">FAMILY</td>	
							</tr>
						</table>																	
					</div><!--detail-->
				</td>
				<!--total-->
				<td>
					<div class="total">
						<center>
							<input type="button" value="ADD" onClick="document.calculator.ans.value+='+'" class="add_btn">
							<input type="button" value="DISCOUNT" onClick="document.calculator.ans.value+='-'" class="dis_btn">
						</center>
						<hr>
						<center><a style="font-weight: bold; font-size: 30px; font-family: arial; color: #656465;">TOTAL</a> &nbsp&nbsp&nbsp
						<input type="textfield" name="ans" value="" style="font-size: 30px; width: 250px; height: 40px;"></center>
						<hr>
						<br>
						<center>
							<input type="button" value="TOTAL" onClick="document.calculator.ans.value=eval(document.calculator.ans.value)" class="cash">
							<input type="reset" value="CASH" class="cash">
						</center>
					</div><!--total-->
				</td>
			</tr>
		</table>
    </div><!--container--> 
    </form><!--calculator-->    
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
    $(() => {
        'use strict';
    $('button').click(function() {
    $(this).toggleClass('pressed');
            });
        });
    function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
	}
	$(document).ready(function() {
 			$("#plus_two").click(function() {
   			$("#guest_two").show();
  		});
	});
	$(document).ready(function() {
 			$("#plus_three").click(function() {
   			$("#guest_three").show();
  		});
  			$("#minus_two").click(function() {
    		$("#guest_two").hide();
  		});
	});
	$(document).ready(function() {
 			$("#plus_four").click(function() {
   			$("#guest_four").show();
  		});
  			$("#minus_three").click(function() {
    		$("#guest_three").hide();
  		});
	});
	$(document).ready(function() {
 			$("#plus_five").click(function() {
   			$("#guest_five").show();
  		});
  			$("#minus_four").click(function() {
    		$("#guest_four").hide();
  		});
	});
	$(document).ready(function() {
  			$("#minus_five").click(function() {
    		$("#guest_five").hide();
  		});
	});
	$(document).ready(function(){
    $(".out_btn").click(function(){
        $("#out_101").empty();
    });
});
</script>