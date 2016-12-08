<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>M | BOOKING</title>
    <style>
        button {
            background-color: #BB9BDD;
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
        	height: 500px;
        	background-color: #FDE7CA;        	
        }
        .total {
        	width: 500px;
        	height: 500px;
        	background-color: #EAFDCA;        	
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
	<div class="container">
		<table>
			<tr>
				<!--room-->
				<td>
					<div class="room">
						<!--floor 7-->
						<ul class="tab">
  							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'one_seven')">701</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'two_seven')">702</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'three_seven')">703</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'four_seven')">704</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'five_seven')">705</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'six_seven')">706</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'seven_seven')">707</a></button></li>
						</ul>
						<!--floor 6-->
						<ul class="tab">
  							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'one_six')">601</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'two_six')">602</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'three_six')">603</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'four_six')">604</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'five_six')">605</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'six_six')">606</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'seven_six')">607</a></button></li>
						</ul>
						<!--floor 5-->
						<ul class="tab">
  							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'one_five')">501</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'two_five')">502</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'three_five')">503</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'four_five')">504</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'five_five')">505</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'six_five')">506</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'seven_five')">507</a></button></li>
						</ul>
						<!--floor 4-->
						<ul class="tab">
  							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'one_four')">401</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'two_four')">402</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'three_four')">403</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'four_four')">404</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'five_four')">405</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'six_four')">406</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'seven_four')">407</a></button></li>
						</ul>
						<!--floor 3-->
						<ul class="tab">
  							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'one_three')">301</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'two_three')">302</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'three_three')">303</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'four_three')">304</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'five_three')">305</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'six_three')">306</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'seven_three')">307</a></button></li>
						</ul>
						<!--floor 2-->
						<ul class="tab">
  							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'one_two')">201</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'two_two')">202</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'three_two')">203</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'four_two')">204</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'five_two')">205</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'six_two')">206</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'seven_two')">207</a></button></li>
						</ul>
						<!--floor 1-->
						<ul class="tab">
  							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'one_one')">101</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'two_one')">102</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'three_one')">103</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'four_one')">104</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'five_one')">105</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'six_one')">106</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'seven_one')">107</a></button></li>
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
							<br>GUEST &nbsp&nbsp<input type="text" name="name" style="height: 25px; width: 300px; font-size: 20px;" required>
							<br>GUEST &nbsp&nbsp<input type="text" name="name" style="height: 25px; width: 300px; font-size: 20px;">
							<br>GUEST &nbsp&nbsp<input type="text" name="name" style="height: 25px; width: 300px; font-size: 20px;">
							<br>GUEST &nbsp&nbsp<input type="text" name="name" style="height: 25px; width: 300px; font-size: 20px;">
							<hr>
							PRICE 2000
							<hr>
						</div>
					</div><!--guest-->
				</td>
			</tr>
			<tr>
				<!--detail-->
				<td>
					<div class="detail">
						
					</div><!--detail-->
				</td>
				<!--total-->
				<td>
					<div class="total">
						
					</div><!--total-->
				</td>
			</tr>
		</table>
    </div><!--container-->     
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
</script>