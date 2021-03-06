<!DOCTYPE html>
<html>
<head>
	<title>ESPANA HOTEL</title>
</head>
<style>
	/*room*/
	.room {
		width: 500px;
       	height: 500px;
       	background-color: #FFFFFF;
	}
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
	/*guest*/
	.guest {
		width: 500px;
        height: 500px;
       	background-color: #CAD8FD;        
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
    .out_btn_one_one {
    	background-color: #E78585;
        padding: 30px 50px;
        text-decoration: none;
        text-align: center;
        display:inline-block;
        color: #FFFFFF;
        font-size: 20px;
        font-weight: bold;
    }
    .out_btn_one_one {
    	background-color: #E78585;
        padding: 30px 50px;
        text-decoration: none;
        text-align: center;
        display:inline-block;
        color: #FFFFFF;
        font-size: 20px;
        font-weight: bold;
    }
    .out_btn_two_one {
    	background-color: #E78585;
        padding: 30px 50px;
        text-decoration: none;
        text-align: center;
        display:inline-block;
        color: #FFFFFF;
        font-size: 20px;
        font-weight: bold;
    }
    .out_btn_three_one {
    	background-color: #E78585;
        padding: 30px 50px;
        text-decoration: none;
        text-align: center;
        display:inline-block;
        color: #FFFFFF;
        font-size: 20px;
        font-weight: bold;
    }
    .out_btn_four_one {
    	background-color: #E78585;
        padding: 30px 50px;
        text-decoration: none;
        text-align: center;
        display:inline-block;
        color: #FFFFFF;
        font-size: 20px;
        font-weight: bold;
    }
    .out_btn_five_one {
    	background-color: #E78585;
        padding: 30px 50px;
        text-decoration: none;
        text-align: center;
        display:inline-block;
        color: #FFFFFF;
        font-size: 20px;
        font-weight: bold;
    }
    .out_btn_six_one {
    	background-color: #E78585;
        padding: 30px 50px;
        text-decoration: none;
        text-align: center;
        display:inline-block;
        color: #FFFFFF;
        font-size: 20px;
        font-weight: bold;
    }
    .out_btn_seven_one {
    	background-color: #E78585;
        padding: 30px 50px;
        text-decoration: none;
        text-align: center;
        display:inline-block;
        color: #FFFFFF;
        font-size: 20px;
        font-weight: bold;
    }
    .out_btn_one_two {
        background-color: #E78585;
        padding: 30px 50px;
        text-decoration: none;
        text-align: center;
        display:inline-block;
        color: #FFFFFF;
        font-size: 20px;
        font-weight: bold;
    }
    .out_btn_two_two {
        background-color: #E78585;
        padding: 30px 50px;
        text-decoration: none;
        text-align: center;
        display:inline-block;
        color: #FFFFFF;
        font-size: 20px;
        font-weight: bold;
    }
    .out_btn_three_two {
        background-color: #E78585;
        padding: 30px 50px;
        text-decoration: none;
        text-align: center;
        display:inline-block;
        color: #FFFFFF;
        font-size: 20px;
        font-weight: bold;
    }
    .out_btn_four_two {
        background-color: #E78585;
        padding: 30px 50px;
        text-decoration: none;
        text-align: center;
        display:inline-block;
        color: #FFFFFF;
        font-size: 20px;
        font-weight: bold;
    }
    .out_btn_five_two {
        background-color: #E78585;
        padding: 30px 50px;
        text-decoration: none;
        text-align: center;
        display:inline-block;
        color: #FFFFFF;
        font-size: 20px;
        font-weight: bold;
    }
    .out_btn_six_two {
        background-color: #E78585;
        padding: 30px 50px;
        text-decoration: none;
        text-align: center;
        display:inline-block;
        color: #FFFFFF;
        font-size: 20px;
        font-weight: bold;
    }
    .out_btn_seven_two {
        background-color: #E78585;
        padding: 30px 50px;
        text-decoration: none;
        text-align: center;
        display:inline-block;
        color: #FFFFFF;
        font-size: 20px;
        font-weight: bold;
    }
    
   	.plus_two {
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
    .plus_three {
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
   .plus_four {
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
    .plus_five {
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
    .minus_two {
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
    .minus_three {
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
    .minus_four {
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
    .minus_five {
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
	/*rate*/
	.rate {
		width: 500px;
       	height: 500px;
       	background-color: #FDE7CA;        	
	}
	/*extra*/
	.extra {
		width: 500px;
       	height: 220px;
       	background-color: #ECECBC;        
	}
	.service {
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
	/*money*/
	.money {
		width: 500px;
       	height: 220px;
       	background-color: #EAFDCA;        
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
    .cash {
     	background-color: #FC6C6C;
        padding: 10px 30px;
        text-decoration: none;
        text-align: center;
        display:inline-block;
        color: #FFFFFF;
        font-size: 40px;
        font-weight: bold;
        font-family: arial;
    }
    .total {
     	background-color: #BCC9EC;
        padding: 10px 30px;
        text-decoration: none;
        text-align: center;
        display:inline-block;
        color: #FFFFFF;
        font-size: 40px;
        font-weight: bold;
        font-family: arial;
    }
	/*night*/
	.night {
		width: 500px;
       	height: 220px;
       	background-color: #90DFD3;        
	}
	.night_btn {
		padding: 20px 28px;
        font-family: arial;
        text-decoration: none;
        text-align: center;
        display:inline-block;
        color: #FFFFFF;
        font-size: 30px;
        font-weight: bold;
        background-color: #73A2BD;
        border-style: solid;
	}
	/*tab*/
	ul.tab {
	    list-style-type: none;
	    margin: 0;
	    padding: 0;
	    overflow: hidden;
		}		
	ul.tab li a {
	    display: inline-block;
	    color: black;
	    text-align: center;
	    padding: 14px 16px;
	    text-decoration: none;
	    transition: 0.3s;
	    font-size: 20px;
	}
	ul.tab li {float: left;}
	.tabcontent {
	    display: none;
	    padding: 6px 12px;
	    border: 1px solid #ccc;
	    border-top: none;
	    font-family: arial; 
	    font-size: 25px;
	    color: #717170;
	}
</style>
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
	  							<li>
	  								<button class="deluxe">
	  									<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'one_seven')">701</a>
	  								</button>
	  							</li>
								<li>
									<button class="deluxe">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'two_seven')">702</a>
									</button>
								</li>
								<li>
									<button class="deluxe">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'three_seven')">703</a>
									</button>
								</li>
								<li>
									<button class="family">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'four_seven')">704</a>
									</button>
								</li>
								<li>
									<button class="family">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'five_seven')">705</a>
									</button>
								</li>
								<li>
									<button class="family">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'six_seven')">706</a>
									</button>
								</li>
								<li>
									<button class="family">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'seven_seven')">707</a>
									</button>
								</li>
							</ul>
							<!--floor 6-->
							<ul class="tab">
	  							<li>
	  								<button class="deluxe">
	  									<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'one_six')">601</a>
	  								</button>
	  							</li>
								<li>
									<button class="deluxe">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'two_six')">602</a>
									</button>
								</li>
								<li>
									<button class="deluxe">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'three_six')">603</a>
									</button>
								</li>
								<li>
									<button class="superior">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'four_six')">604</a>
									</button>
								</li>
								<li>
									<button class="superior">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'five_six')">605</a>
									</button>
								</li>
								<li>
									<button class="superior">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'six_six')">606</a>
									</button>
								</li>
								<li>
									<button class="superior">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'seven_six')">607</a>
									</button>
								</li>
							</ul>
							<!--floor 5-->
							<ul class="tab">
	  							<li>
	  								<button class="standard">
	  									<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'one_five')">501</a>
	  								</button>
	  							</li>
								<li>
									<button class="standard">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'two_five')">502</a>
									</button>
								</li>
								<li>
									<button class="standard">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'three_five')">503</a>
									</button>
								</li>
								<li>
									<button class="standard">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'four_five')">504</a>
									</button>
								</li>
								<li>
									<button class="standard">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'five_five')">505</a>
									</button>
								</li>
								<li>
									<button class="superior">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'six_five')">506</a>
									</button>
								</li>
								<li>
									<button class="superior">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'seven_five')">507</a>
									</button>
								</li>
							</ul>
							<!--floor 4-->
							<ul class="tab">
	  							<li>
	  								<button class="family">
	  									<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'one_four')">401</a>
	  								</button>
	  							</li>
								<li>
									<button class="family">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'two_four')">402</a>
									</button>
								</li>
								<li>
									<button class="family">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'three_four')">403</a>
									</button>
								</li>
								<li>
									<button class="family">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'four_four')">404</a>
									</button>
								</li>
								<li>
									<button class="family">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'five_four')">405</a>
									</button>
								</li>
								<li>
									<button class="family">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'six_four')">406</a>
									</button>
								</li>
								<li>
									<button class="family">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'seven_four')">407</a>
									</button>
								</li>
							</ul>
							<!--floor 3-->
							<ul class="tab">
	  							<li>
		  							<button class="deluxe">
		  								<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'one_three')">301</a>
		  							</button>
	  							</li>
								<li>
									<button class="deluxe">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'two_three')">302</a>
									</button>
								</li>
								<li>
									<button class="deluxe">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'three_three')">303</a>
									</button>
								</li>
								<li>
									<button class="deluxe">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'four_three')">304</a>
									</button>
								</li>
								<li>
									<button class="deluxe">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'five_three')">305</a>
									</button>
								</li>
								<li>
									<button class="deluxe">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'six_three')">306</a>
									</button>
								</li>
								<li>
									<button class="deluxe">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'seven_three')">307</a>
									</button>
								</li>
							</ul>
							<!--floor 2-->
							<ul class="tab">
	  							<li>
	  								<button class="superior">
	  									<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'one_two')">201</a>
	  								</button>
	  							</li>
								<li>
									<button class="superior">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'two_two')">202</a>
									</button>
								</li>
								<li>
									<button class="superior">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'three_two')">203</a>
									</button>
								</li>
								<li>
									<button class="superior">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'four_two')">204</a>
									</button>
								</li>
								<li>
									<button class="superior">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'five_two')">205</a>
									</button>
								</li>
								<li>
									<button class="superior">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'six_two')">206</a>
									</button>
								</li>
								<li>
									<button class="superior">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'seven_two')">207</a>
									</button>
								</li>
							</ul>
							<!--floor 1-->
							<ul class="tab">
	  							<li>
	  								<button class="standard">
	  									<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'one_one')">101</a>
	  								</button>
	  							</li>
								<li>
									<button class="standard">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'two_one')">102</a>
									</button>
								</li>
								<li>
									<button class="standard">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'three_one')">103</a>
									</button>
								</li>
								<li>
									<button class="standard">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'four_one')">104</a>
									</button>
								</li>
								<li>
									<button class="standard">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'five_one')">105</a>
									</button>
								</li>
								<li>
									<button class="standard">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'six_one')">106</a>
									</button>
								</li>
								<li>
									<button class="standard">
										<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'seven_one')">107</a>
									</button>
								</li>
							</ul>
						</div><!--end room-->
					</td>
					<!--guest-->
					<td>
						<div class="guest">
	<!--floor 1-->
							<div id="one_one" class="tabcontent">
							<br>
						  		ROOM 101: STANDARD SINGLE
						  	<br>
						  		<div id="out_one_one">
									<br>PERSON &nbsp&nbsp										
											<input type="number" name="number" style="height: 25px; width: 50px; font-size: 20px;">										
									<br>GUEST 1 &nbsp&nbsp
										<input type="text" name="name" id="out_one" style="height: 25px; width: 280px; font-size: 20px;">
										<b class="plus_two">+</b>
									<br><a style="display: none;" class="guest_two">GUEST 2 &nbsp&nbsp
										<input type="text"  name="name" style="height: 25px; width: 280px; font-size: 20px;">
										<b class="minus_two">-</b></a>									
									<hr>
										IN &nbsp&nbsp&nbsp&nbsp<input type="date" name="check-in" style="font-size: 20px;"> 
										<br>OUT <input type="date" name="check-out" style="font-size: 20px;">
									<hr>
										<center>
											<table>
												<tr>
													<td>
														<input type="button" value="CHECK-IN" onClick="document.calculator.ans.value+='1500'" class="in_btn">
													</td>
													<td>
														<input type="button" class="out_btn_one_one" value="CHECK-OUT">
													</td>
												</tr>
											</table>
										</center>
								</div><!--out_one_one-->
							</div><!--end one_one-->
							<!--..............................-->
							<div id="two_one" class="tabcontent">
							<br>
						  		ROOM 102: STANDARD SINGLE
						  	<br>
						  		<div id="out_two_one">
									<br>PERSON &nbsp&nbsp										
											<input type="number" name="number" style="height: 25px; width: 50px; font-size: 20px;">										
									<br>GUEST 1 &nbsp&nbsp
										<input type="text" name="name" id="out_one" style="height: 25px; width: 280px; font-size: 20px;">
										<b class="plus_two">+</b>
									<br><a style="display: none;" class="guest_two">GUEST 2 &nbsp&nbsp
										<input type="text"  name="name" style="height: 25px; width: 280px; font-size: 20px;">
										<b class="minus_two">-</b></a>
									<hr>
										IN &nbsp&nbsp&nbsp&nbsp<input type="date" name="check-in" style="font-size: 20px;"> 
										<br>OUT <input type="date" name="check-out" style="font-size: 20px;">
									<hr>
										<center>
											<table>
												<tr>
													<td>
														<input type="button" value="CHECK-IN" onClick="document.calculator.ans.value+='1500'" class="in_btn">
													</td>
													<td>
														<input type="button" class="out_btn_two_one" value="CHECK-OUT">
													</td>
												</tr>
											</table>
										</center>
								</div><!--out_two_one-->
							</div><!--end two_one-->
							<!--..............................-->
							<div id="three_one" class="tabcontent">
							<br>
						  		ROOM 103: STANDARD SINGLE
						  	<br>
						  		<div id="out_three_one">
									<br>PERSON &nbsp&nbsp										
											<input type="number" name="number" style="height: 25px; width: 50px; font-size: 20px;">										
									<br>GUEST 1 &nbsp&nbsp
										<input type="text" name="name" id="out_one" style="height: 25px; width: 280px; font-size: 20px;">
										<b class="plus_two">+</b>
									<br><a style="display: none;" class="guest_two">GUEST 2 &nbsp&nbsp
										<input type="text"  name="name" style="height: 25px; width: 280px; font-size: 20px;">
										<b class="minus_two">-</b></a>
									<hr>
										IN &nbsp&nbsp&nbsp&nbsp<input type="date" name="check-in" style="font-size: 20px;"> 
										<br>OUT <input type="date" name="check-out" style="font-size: 20px;">
									<hr>
										<center>
											<table>
												<tr>
													<td>
														<input type="button" value="CHECK-IN" onClick="document.calculator.ans.value+='1500'" class="in_btn">
													</td>
													<td>
														<input type="button" class="out_btn_three_one" value="CHECK-OUT">
													</td>
												</tr>
											</table>
										</center>
								</div><!--out_three_one-->
							</div><!--end three_one-->
							<!--..............................-->
							<div id="four_one" class="tabcontent">
							<br>
						  		ROOM 104: STANDARD SINGLE
						  	<br>
						  		<div id="out_four_one">
									<br>PERSON &nbsp&nbsp										
											<input type="number" name="number" style="height: 25px; width: 50px; font-size: 20px;">										
									<br>GUEST 1 &nbsp&nbsp
										<input type="text" name="name" id="out_one" style="height: 25px; width: 280px; font-size: 20px;">
										<b class="plus_two">+</b>
									<br><a style="display: none;" class="guest_two">GUEST 2 &nbsp&nbsp
										<input type="text"  name="name" style="height: 25px; width: 280px; font-size: 20px;">
										<b class="minus_two">-</b></a>
									<hr>
										IN &nbsp&nbsp&nbsp&nbsp<input type="date" name="check-in" style="font-size: 20px;"> 
										<br>OUT <input type="date" name="check-out" style="font-size: 20px;">
									<hr>
										<center>
											<table>
												<tr>
													<td>
														<input type="button" value="CHECK-IN" onClick="document.calculator.ans.value+='1500'" class="in_btn">
													</td>
													<td>
														<input type="button" class="out_btn_four_one" value="CHECK-OUT">
													</td>
												</tr>
											</table>
										</center>
								</div><!--out_four_one-->
							</div><!--end four_one-->
							<!--..............................-->
							<div id="five_one" class="tabcontent">
							<br>
						  		ROOM 105: STANDARD SINGLE
						  	<br>
						  		<div id="out_two_one">
									<br>PERSON &nbsp&nbsp										
											<input type="number" name="number" style="height: 25px; width: 50px; font-size: 20px;">										
									<br>GUEST 1 &nbsp&nbsp
										<input type="text" name="name" id="out_one" style="height: 25px; width: 280px; font-size: 20px;">
										<b class="plus_two">+</b>
									<br><a style="display: none;" class="guest_two">GUEST 2 &nbsp&nbsp
										<input type="text"  name="name" style="height: 25px; width: 280px; font-size: 20px;">
										<b class="minus_two">-</b></a>
									<hr>
										IN &nbsp&nbsp&nbsp&nbsp<input type="date" name="check-in" style="font-size: 20px;"> 
										<br>OUT <input type="date" name="check-out" style="font-size: 20px;">
									<hr>
										<center>
											<table>
												<tr>
													<td>
														<input type="button" value="CHECK-IN" onClick="document.calculator.ans.value+='1500'" class="in_btn">
													</td>
													<td>
														<input type="button" class="out_btn_five_one" value="CHECK-OUT">
													</td>
												</tr>
											</table>
										</center>
								</div><!--out_five_one-->
							</div><!--end five_one-->
							<!--..............................-->
							<div id="six_one" class="tabcontent">
							<br>
						  		ROOM 106: STANDARD SINGLE
						  	<br>
						  		<div id="out_six_one">
									<br>PERSON &nbsp&nbsp										
											<input type="number" name="number" style="height: 25px; width: 50px; font-size: 20px;">										
									<br>GUEST 1 &nbsp&nbsp
										<input type="text" name="name" id="out_one" style="height: 25px; width: 280px; font-size: 20px;">
										<b class="plus_two">+</b>
									<br><a style="display: none;" class="guest_two">GUEST 2 &nbsp&nbsp
										<input type="text"  name="name" style="height: 25px; width: 280px; font-size: 20px;">
										<b class="minus_two">-</b></a>
									<hr>
										IN &nbsp&nbsp&nbsp&nbsp<input type="date" name="check-in" style="font-size: 20px;"> 
										<br>OUT <input type="date" name="check-out" style="font-size: 20px;">
									<hr>
										<center>
											<table>
												<tr>
													<td>
														<input type="button" value="CHECK-IN" onClick="document.calculator.ans.value+='1500'" class="in_btn">
													</td>
													<td>
														<input type="button" class="out_btn_six_one" value="CHECK-OUT">
													</td>
												</tr>
											</table>
										</center>
								</div><!--out_six_one-->
							</div><!--end six_one-->
							<!--..............................-->
							<div id="seven_one" class="tabcontent">
							<br>
						  		ROOM 107: STANDARD SINGLE
						  	<br>
						  		<div id="out_seven_one">
									<br>PERSON &nbsp&nbsp										
											<input type="number" name="number" style="height: 25px; width: 50px; font-size: 20px;">										
									<br>GUEST 1 &nbsp&nbsp
										<input type="text" name="name" id="out_one" style="height: 25px; width: 280px; font-size: 20px;">
										<b class="plus_two">+</b>
									<br><a style="display: none;" class="guest_two">GUEST 2 &nbsp&nbsp
										<input type="text"  name="name" style="height: 25px; width: 280px; font-size: 20px;">
										<b class="minus_two">-</b></a>
									<hr>
										IN &nbsp&nbsp&nbsp&nbsp<input type="date" name="check-in" style="font-size: 20px;"> 
										<br>OUT <input type="date" name="check-out" style="font-size: 20px;">
									<hr>
										<center>
											<table>
												<tr>
													<td>
														<input type="button" value="CHECK-IN" onClick="document.calculator.ans.value+='1500'" class="in_btn">
													</td>
													<td>
														<input type="button" class="out_btn_seven_one" value="CHECK-OUT">
													</td>
												</tr>
											</table>
										</center>
								</div><!--out_seven_one-->
							</div><!--end seven_one-->
							<!--..............................-->
	<!--floor 2-->
                           
	<!--floor 3-->
	<!--floor 4-->
	<!--floor 5-->
	<!--floor 6-->
	<!--floor 7-->						
							<!--
							<div id="two_one" class="tabcontent">
							<br>
						  		ROOM 102: STANDARD SINGLE
						  	<br>
						  		<div id="out_two_one">
									<br>PERSON &nbsp&nbsp										
											<input type="number" name="number" style="height: 25px; width: 50px; font-size: 20px;">										
									<br>GUEST 1 &nbsp&nbsp
										<input type="text" name="name" id="out_two_one" style="height: 25px; width: 280px; font-size: 20px;">
										<b class="plus_two">+</b>
									<br><a style="display: none;" class="guest_two">GUEST 2 &nbsp&nbsp
										<input type="text"  name="name" style="height: 25px; width: 280px; font-size: 20px;">
										<b class="plus_three">+</b><b class="minus_two">-</b></a>
									<br><a style="display: none;" class="guest_three">GUEST 3 &nbsp&nbsp
										<input type="text" name="name" style="height: 25px; width: 280px; font-size: 20px;">
										<b class="plus_four">+</b><b class="minus_three">-</b></a>
									<br><a style="display: none;" class="guest_four">GUEST 4 &nbsp&nbsp
										<input type="text" name="name" style="height: 25px; width: 280px; font-size: 20px;">
										<b class="plus_five">+</b><b class="minus_four">-</b></a>
									<br><a style="display: none;" class="guest_five">GUEST 5 &nbsp&nbsp
										<input type="text" name="name" style="height: 25px; width: 280px; font-size: 20px;">
										<b class="minus_five">-</b></a>
									<hr>
										PRICE 1500
									<hr>
										<center>
											<table>
												<tr>
													<td>
														<input type="button" value="CHECK-IN" onClick="document.calculator.ans.value+='1500'" class="in_btn">
													</td>
													<td>
														<input type="button" class="out_btn" value="CHECK-OUT">
													</td>
												</tr>
											</table>
										</center>
								</div><!--end out_two_one-->
							</div><!--end two_one-->																																							
						</div><!--end guest-->
					</td>
					<!--rate-->
					<td>
						<div class="rate">
							<a style="font-weight: bold; font-size: 25px; font-family: arial; color: #7D6F69;">
								BOOKING SYSTEM
							</a>
								<hr>
								<br>
								<a style="font-weight: bold; font-size: 30px; font-family: arial; color: #E1764E;">
									<center>ESPANA HOTEL</center>
								</a>					
								<br>
							</a>
							<hr>
							<a style="font-weight: bold; font-size: 25px; font-family: arial; color: #7D6F69;">
								INFORMATION
							</a>
								<hr>
									<a style="font-weight: bold; font-size: 25px; font-family: arial; color: #7D6F69;"><b>ROOM RATE</b></a>
										<table style="font-family: arial; font-size: 19px;">
											<tr>
												<td>&nbsp  <b>ROOM</b></td>
												<td>&nbsp  STANDARD</td>
												<td>&nbsp  SUPERIOR</td>
												<td>&nbsp  DELUXE</td>
												<td>&nbsp  FAMILY</td>
											</tr>
											<tr>
												<td>&nbsp <b>PRICE</b></td>
												<td>&nbsp 1500</td>
												<td>&nbsp 2000</td>
												<td>&nbsp 2500</td>
												<td>&nbsp 4500</td>
											</tr>
										</table>
								<hr>
									<a style="font-weight: bold; font-size: 25px; font-family: arial; color: #7D6F69;"><b>EXTRA SERVICE</b></a>									
										<table style="font-family: arial; font-size: 19px;">
											<tr>
												<td>&nbsp  <b>SERVICE</b></td>
												<td>&nbsp  B-ADULT</td>
												<td>&nbsp  B-CHILD</td>
												<td>&nbsp  BREAKFAST</td>
												<td>&nbsp  DINNER</td>
											</tr>
											<tr>
												<td>&nbsp <b>PRICE</b></td>
												<td>&nbsp 500</td>
												<td>&nbsp 200</td>
												<td>&nbsp 100</td>
												<td>&nbsp 150</td>
											</tr>
										</table>																		
						</div><!--end rate-->
					</td>
				</tr>
				<tr>
					<!--extra-->
					<td>
						<div class="extra">
							<br>							
							<!--service-->
							<table>
								<tr>
									<td style="font-family: arial; font-weight: bold;">EXTRA</td>
									<td>
										<input type="button" value="BED ADULT" onClick="document.calculator.ans.value+='500'" class="service">
									</td>
									<td>
										<input type="button" value="BED CHILD" onClick="document.calculator.ans.value+='200'" class="service">
									</td>
									<td>
										<input type="button" value="BRKF" onClick="document.calculator.ans.value+='100'" class="service">
									</td>
									<td>
										<input type="button" value="DINR" onClick="document.calculator.ans.value+='150'" class="service">
									</td>
								</tr>
							</table><!--end service-->
							<hr>
							<!--discount-->
							<table>
								<td style="font-family: arial; font-weight: bold;">DISCOUNT</td>
								<td>
									<input type="button" value="5" onClick="document.calculator.ans.value+='5'" class="dis">
								</td>
								<td>
									<input type="button" value="10" onClick="document.calculator.ans.value+='10'" class="dis">
								</td>
								<td>
									<input type="button" value="15" onClick="document.calculator.ans.value+='15'" class="dis">
								</td>
								<td>
									<input type="button" value="20" onClick="document.calculator.ans.value+='20'" class="dis">
								</td>
								<td>
									<input type="button" value="%" onClick="document.calculator.ans.value+='/100'" class="dis">
								</td>
							</table><!--end discount-->
							<hr>
							<!--room-->
							<table>
								<td style="font-family: arial; font-weight: bold;">ROOM</td>
								<td class="room_type" style="background-color: #D7C4F9;">STANDARD</td>
								<td class="room_type" style="background-color: #E1F9C4;">SUPERIOR</td>
								<td class="room_type" style="background-color: #C4F9F7;">DULUXE</td>
								<td class="room_type" style="background-color: #F9C4DA;">FAMILY</td>	
							</table><!--end room-->
						</div><!--end extra-->
					</td>
					<!--money-->
					<td>
						<div class="money">
							<center>
								<input type="button" value="ADD" onClick="document.calculator.ans.value+='+'" class="add_btn">
								<input type="button" value="DISCOUNT" onClick="document.calculator.ans.value+='-'" class="dis_btn">
							</center>
							<hr>
							<center>
								<a style="font-weight: bold; font-size: 30px; font-family: arial; color: #656465;">TOTAL</a> &nbsp&nbsp&nbsp
								<input type="textfield" name="ans" value="" class="ans_total" style="font-size: 30px; width: 250px; height: 40px;">
							</center>
							<hr>
							<br>
							<center>
								<input type="button" value="TOTAL" onClick="document.calculator.ans.value=eval(document.calculator.ans.value)" class="total">								
								<input type="reset" value="CASH" class="cash">
							</center>
						</div><!--end money-->
					</td>
					<!--night-->
					<td>
						<div class="night">
							<a style="font-weight: bold; font-size: 30px; font-family: arial; color: #656465;">NIGHT</a>
								<center>
									<table>
										<tr>
											<td>
												<input type="button" value="+" onClick="document.calculator.ans.value+='*'" class="night_btn" style="background-color: #C87AA1; padding: 22px 30px;">
											</td>
											<td>
												<input type="button" value="2" onClick="document.calculator.ans.value+='2'" class="night_btn">
											</td>
											<td>
												<input type="button" value="3" onClick="document.calculator.ans.value+='3'" class="night_btn">
											</td>
											<td>
												<input type="button" value="4" onClick="document.calculator.ans.value+='4'" class="night_btn">
											</td>
											<td>
												<input type="button" value="5" onClick="document.calculator.ans.value+='5'" class="night_btn">
											</td>
										</tr>
										<tr>
											<td>
												<input type="button" value="6" onClick="document.calculator.ans.value+='6'" class="night_btn">
											</td>
											<td>
												<input type="button" value="7" onClick="document.calculator.ans.value+='7'" class="night_btn">
											</td>
											<td>
												<input type="button" value="8" onClick="document.calculator.ans.value+='8'" class="night_btn">
											</td>
											<td>
												<input type="button" value="9" onClick="document.calculator.ans.value+='9'" class="night_btn">
											</td>
											<td>
												<input type="button" value="10" onClick="document.calculator.ans.value+='10'" class="night_btn">
											</td>
										</tr>
									</table>
								</center>
						</div><!--end night-->
					</td>
				</tr>
			</table>
		</div><!--end container-->
	</form><!--end calculator-->
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
	//booking button
	$(() => {
        'use strict';
    $('button').click(function() {
    $(this).toggleClass('pressed');
            });
        });
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
	//end booking button
	//plus minus guest
	$(document).ready(function() {
 			$(".plus_two").click(function() {
   			$(".guest_two").show();
  		});
	});
	$(document).ready(function() {
 			$(".plus_three").click(function() {
   			$(".guest_three").show();
  		});
  			$(".minus_two").click(function() {
    		$(".guest_two").hide();
  		});
	});
	$(document).ready(function() {
 			$(".plus_four").click(function() {
   			$(".guest_four").show();
  		});
  			$(".minus_three").click(function() {
    		$(".guest_three").hide();
  		});
	});
	$(document).ready(function() {
 			$(".plus_five").click(function() {
   			$(".guest_five").show();
  		});
  			$(".minus_four").click(function() {
    		$(".guest_four").hide();
  		});
	});
	$(document).ready(function() {
  			$(".minus_five").click(function() {
    		$(".guest_five").hide();
  		});
	});
	//end plus minus guest
	//check out
	//floor 1
	$(document).ready(function(){
	    $(".out_btn_one_one").click(function(){
	        $("#out_one_one").empty();
    	});
	});
	$(document).ready(function(){
	    $(".out_btn_two_one").click(function(){
	        $("#out_two_one").empty();
    	});
	});
	$(document).ready(function(){
	    $(".out_btn_three_one").click(function(){
	        $("#out_three_one").empty();
    	});
	});
	$(document).ready(function(){
	    $(".out_btn_four_one").click(function(){
	        $("#out_four_one").empty();
    	});
	});
	$(document).ready(function(){
	    $(".out_btn_five_one").click(function(){
	        $("#out_five_one").empty();
    	});
	});
	$(document).ready(function(){
	    $(".out_btn_six_one").click(function(){
	        $("#out_six_one").empty();
    	});
	});
	$(document).ready(function(){
	    $(".out_btn_seven_one").click(function(){
	        $("#out_seven_one").empty();
    	});
	});
	//end floor 1
	//floor 2
    $(document).ready(function(){
        $(".out_btn_one_two").click(function(){
            $("#out_one_two").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_two_two").click(function(){
            $("#out_two_two").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_three_two").click(function(){
            $("#out_three_two").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_four_two").click(function(){
            $("#out_four_two").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_five_two").click(function(){
            $("#out_five_two").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_six_two").click(function(){
            $("#out_six_two").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_seven_two").click(function(){
            $("#out_seven_two").empty();
        });
    });
	//end floor 2
	//floor 3
    $(document).ready(function(){
        $(".out_btn_one_two").click(function(){
            $("#out_one_three").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_two_three").click(function(){
            $("#out_two_three").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_three_three").click(function(){
            $("#out_three_three").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_four_three").click(function(){
            $("#out_four_three").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_five_three").click(function(){
            $("#out_five_three").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_six_three").click(function(){
            $("#out_six_three").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_seven_three").click(function(){
            $("#out_seven_three").empty();
        });
    });
	//end floor 3
	//floor 4
    $(document).ready(function(){
        $(".out_btn_one_four").click(function(){
            $("#out_one_four").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_two_four").click(function(){
            $("#out_two_four").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_three_four").click(function(){
            $("#out_three_four").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_four_four").click(function(){
            $("#out_four_four").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_five_four").click(function(){
            $("#out_five_four").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_six_four").click(function(){
            $("#out_six_four").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_seven_four").click(function(){
            $("#out_seven_four").empty();
        });
    });
	//end floor 4
	//floor 5
    $(document).ready(function(){
        $(".out_btn_one_five").click(function(){
            $("#out_one_five").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_two_five").click(function(){
            $("#out_two_five").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_three_five").click(function(){
            $("#out_three_five").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_four_five").click(function(){
            $("#out_four_five").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_five_five").click(function(){
            $("#out_five_five").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_six_five").click(function(){
            $("#out_six_five").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_seven_five").click(function(){
            $("#out_seven_five").empty();
        });
    });
	//end floor 5
	//floor 6
    $(document).ready(function(){
        $(".out_btn_one_six").click(function(){
            $("#out_one_six").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_two_six").click(function(){
            $("#out_two_six").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_three_six").click(function(){
            $("#out_three_six").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_four_six").click(function(){
            $("#out_four_six").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_five_six").click(function(){
            $("#out_five_six").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_six_six").click(function(){
            $("#out_six_six").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_seven_six").click(function(){
            $("#out_seven_six").empty();
    });
	//end floor 6
	//floor 7
    $(document).ready(function(){
        $(".out_btn_one_seven").click(function(){
            $("#out_one_seven").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_two_seven").click(function(){
            $("#out_two_seven").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_three_seven").click(function(){
            $("#out_three_seven").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_four_seven").click(function(){
            $("#out_four_seven").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_five_seven").click(function(){
            $("#out_five_seven").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_six_seven").click(function(){
            $("#out_six_seven").empty();
        });
    });
    $(document).ready(function(){
        $(".out_btn_seven_seven").click(function(){
            $("#out_seven_seven").empty();
        });
    });
	//end floor 7
	//end check out
	//total clear
	$(document).ready(function(){
	    $(".cash").click(function(){
	        $(".ans_total").clear();
    	});
	});
	//end total clear
</script>