<!DOCTYPE html>
<html>
<head>
	<title>BASE COFFEE</title>
</head>

<style>

	.exit {
		background-color: #46464D;
	    border: none;
	   	color: white;
	    padding: 18px 30px;
	    text-align: center;
	    text-decoration: none;
	    display: inline-block;
	    font-size: 25px;
	    margin: 4px 2px;
	    cursor: pointer;
	    float: right;
	    margin-top: -52px;
	}

	/* Style the list */
	.menu_bar.tab {
	    list-style-type: none;
	    margin: 0;
	    padding: 0;
	    overflow: hidden;
	    border: 1px solid #ccc;
	    background-color: #f1f1f1;
	}

	/* Float the list items side by side */
	.menu_bar.tab .menu {float: left;}

	/* Style the links inside the list items */
	.menu_bar.tab .menu a {
	    display: inline-block;
	    color: black;
	    text-align: center;
	    padding: 14px 16px;
	    text-decoration: none;
	    transition: 0.3s;
	    font-size: 17px;
	}

	/* Change background color of links on hover */
	.menu_bar .tab .menu a:hover {background-color: #ddd;}

	/* Create an active/current tablink class */
	.menu_bar .tab .menu a:focus, .active {background-color: #ccc;}

	/* Style the tab content */
	.tabcontent {
	    display: none;
	    padding: 6px 12px;
	    border: 1px solid #FFFFFF;
	    border-top: none;
	}

	.menu {
		display: inline-block;
		padding: 23px 35px;
		margin-top: 4px;
		background-color: #47474C;
		text-decoration: none;
		color: #FFFFFF;
	}
	.add_op {
		display: inline-block;
		padding: 26px 25px;
		background-color: #83898E;
		text-decoration: none;
		color: #FFFFFF;
		margin-top: 5px;
	}

	.btn_area {
		padding: 30px 35px;
		background-color: #52565A;
		text-decoration: none;
		color: #FFFFFF;
	}

</style>

<body style="background-color: #000000; color: #FFFFFF; font-family: arial;">

	<div class="container" style="background-color: #FFFFFF; width: 1300px; height: 700px; margin-top: 15px; margin-left: 15px;">

		<!--title-->
		<div class="title_bar" style="background-color: #85858E; width: 1300px; height: 70px;">
			<div class="name" style="font-size: 30px; padding-top: 20px;">
				<center><b>BASE COFFEE</b></center>
			</div>
			<a href="file:///C:/xampp/htdocs/test/test/main.php"><div class="exit"><b>EXIT</b></div></a>
		</div>

		<!--menubar-->
		<div class="menu_bar" style="background-color: #A1A1AD; width: 1300px; height: 70px;">
			<div class="tab">
				<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'coffee')"><div class="menu"><b>COFFEE</b></div></a>
				<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'tea')"><div class="menu"><b>TEA</b></div></a>
				<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'yogurt')"><div class="menu"><b>YOGURT</b></div></a>
				<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'fruity')"><div class="menu"><b>FRUITY</b></div></a>
				<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'other')"><div class="menu"><b>OTHER</b></div></a>
				<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'snack')"><div class="menu"><b>SNACK</b></div></a>
			</div>
		</div>

		<!--left-side-->
		<div class="left_side" style="background-color: #7C7D7E; width: 650px; height: 560px;">
	
			<!--coffee-->
			<div id="coffee" class="tabcontent" style="border: none;">
				<table>
					<tr>
						<th>
							<input type="button" value="AMERICANO" onClick="document.calculator.ans.value+='25'" style="width: 100px; height: 100px; background-color: #F18D8D; color: #FFFFFF;">
						</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">DOUBLE AMERICANO</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">CAPPUCCINO</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">LATTE</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">MOCHA</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">CARAMEL MACCHIATO</th>
					</tr>
					<tr>
						<th style="width: 100px; height: 100px; background-color: #8ED6F0;">AMERICANO</th>
						<th style="width: 100px; height: 100px; background-color: #8ED6F0;">ESPRESSO</th>
						<th style="width: 100px; height: 100px; background-color: #8ED6F0;">LATTE</th>
						<th style="width: 100px; height: 100px; background-color: #8ED6F0;">CAPPUCCINO</th>
						<th style="width: 100px; height: 100px; background-color: #8ED6F0;">MOCHA</th>
						<th style="width: 100px; height: 100px; background-color: #8ED6F0;">CARAMEL MACCHIATO</th>
					</tr>
					<tr>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">ESPRESSO</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">LATTE</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">CAPPUCCINO</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">MOCHA</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">CARAMEL MACCHIATO</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">DARK CHOC MOCHA</th>
					</tr>
					<tr>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">COFFEE COOKIE CHOCCHIP</th>							
					</tr>	
				</table>
			</div>

			<!--tea-->
			<div id="tea" class="tabcontent" style="border: none;">
				<table>
					<tr>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">THAI</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">THAI LEMON</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">MILK</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">LIPTON</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">LIPTON LEMON</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">LIPTON MILK</th>
					</tr>
					<tr>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">GREENTEA (NO MILK)</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">GREENTEA (MILK)</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">GREENTEA (LEAVE)</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">GREENTEA (RICE)</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">BLACK CURRENT</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">CHAMOMILE</th>
					</tr>
					<tr>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">JEWLING</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">EARL GREY</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">ENGLISH BREAKFAST</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">STRAWBERRY</th>
						<th style="width: 100px; height: 100px; background-color: #8ED6F0;">BLACK TEA</th>
						<th style="width: 100px; height: 100px; background-color: #8ED6F0;">THAI LEMON</th>
					</tr>
					<tr>
						<th style="width: 100px; height: 100px; background-color: #8ED6F0;">THAI MILK</th>
						<th style="width: 100px; height: 100px; background-color: #8ED6F0;">GREENTEA (NO MILK)</th>
						<th style="width: 100px; height: 100px; background-color: #8ED6F0;">GREENTEA (MILK)</th>
						<th style="width: 100px; height: 100px; background-color: #8ED6F0;">GREENTEA LATTE</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">BLACK TEA</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">THAI LEMON</th>
					</tr>
					<tr>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">MILK</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">GREENTEA LATTE</th>
				</table>
			</div>

			<!--yogurt-->
			<div id="yogurt" class="tabcontent" style="border: none;">
				<table>
					<tr>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">MIX BERRY</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">PASSION</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">KIWI</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">MANGO</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">PEACH</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">STRAWBERRY</th>
					</tr>
					<tr>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">ORANGE</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">YOGURT</th>						
					</tr>
				</table>
			</div>

			<!--fruity-->
			<div id="fruity" class="tabcontent" style="border: none;">
				<table>
					<tr>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">MIX BERRY</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">PASSION</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">KIWI</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">MANGO</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">PEACH</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">STRAWBERRY</th>
					</tr>
					<tr>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">ORANGE</th>							
					</tr>
				</table>
			</div>

			<!--other-->
			<div id="other" class="tabcontent" style="border: none;">
					<table>
						<tr>
							<th style="width: 100px; height: 100px; background-color: #F18D8D;">HONEY LEMON</th>
							<th style="width: 100px; height: 100px; background-color: #F18D8D;">LEMON</th>
							<th style="width: 100px; height: 100px; background-color: #F18D8D;">MILK</th>
							<th style="width: 100px; height: 100px; background-color: #F18D8D;">CHOCOLATE</th>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HONEY LEMON</th>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">LEMON</th>
						</tr>
						<tr>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">MILK</th>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">COCOA</th>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">MIX BERRY SODA</th>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">RED LEMON SODA</th>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">RED MILK</th>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">GREEN LEMON SODA</th>
						</tr>
						<tr>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">GREEN MILK</th>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">STRABERRY SODA</th>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">WATERMELON SODA</th>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">APPLE SODA</th>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">BLUE HAWAII SODA</th>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">ORANGE SODA</th>
						</tr>
						<tr>
							<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HONEY LEMON</th>
							<th style="width: 100px; height: 100px; background-color: #A6A6A9;">LEMON</th>
							<th style="width: 100px; height: 100px; background-color: #A6A6A9;">MILK</th>
							<th style="width: 100px; height: 100px; background-color: #A6A6A9;">COCOA</th>
							<th style="width: 100px; height: 100px; background-color: #A6A6A9;">MIX BERRY</th>
							<th style="width: 100px; height: 100px; background-color: #A6A6A9;">RED LEMON SODA</th>
						</tr>
						<tr>
							<th style="width: 100px; height: 100px; background-color: #A6A6A9;">RED MILK</th>
							<th style="width: 100px; height: 100px; background-color: #A6A6A9;">GREEN LEMON SODA</th>
							<th style="width: 100px; height: 100px; background-color: #A6A6A9;">GREEN MILK</th>							
						</tr>
					</table>
				</div>

			<!--snack-->
			<div id="snack" class="tabcontent" style="border: none;">
				<table>
					<tr>
						<form name="calculator">
							
								<button></button><th value="BROWNIE" onClick="document.calculator.ans.value+='1'" style="width: 100px; height: 100px; background-color: #A6A6A9;">BROWNIE</a>
							</th></button>
							<th>
								<input type="button" value="HAM SANDWICH" onClick="document.calculator.ans.value+='1'" style="width: 100px; height: 100px; background-color: #A6A6A9;">
							</th>
							<th>
								<input type="button" value="EGG SANDWICH" onClick="document.calculator.ans.value+='1'" style="width: 100px; height: 100px; background-color: #A6A6A9;">
							</th>
							<th>
								<input type="button" value="CHICKEN SANDWICH" onClick="document.calculator.ans.value+='1'" style="width: 100px; height: 100px; background-color: #A6A6A9;">
							</th>
						</form>							
					</tr>
				</table>
			</div>
		</div>

		<!--right-side-->
		<div class="right_side" style="background-color: #C4C5C6; width: 650px; height: 560px; float: right; margin-top: -560px;">

			<!--add-->
			<center>
			<div class="add_bar" style="background-color: none; width: 650px; height: 70px; float: right; margin-top: 5px;">
				<table>
					<tr>
						<th style="width: 80px; height: 70px; background-color: #6B6E71;"><b>+ WHIP</b></th>
						<th style="width: 80px; height: 70px; background-color: #6B6E71;"><b>+ CHOC CHIP</b></th>
						<th style="width: 80px; height: 70px; background-color: #6B6E71;"><b>+ KIT KAT</b></th>
						<th style="width: 80px; height: 70px; background-color: #6B6E71;"><b>+ OREO</b></th>
						<th style="width: 80px; height: 70px; background-color: #6B6E71;"><b>+ CINNA POWDER</b></th>
						<th style="width: 80px; height: 70px; background-color: #6B6E71;"><b>+ COCOA POWDER</b></th>
						<th style="width: 80px; height: 70px; background-color: #6B6E71;"><b>+ STRAW</b></th>
					</tr>
					<tr>
						<th style="width: 80px; height: 70px; background-color: #6B6E71;"><b>+ CHOC SYR</b></th>
						<th style="width: 80px; height: 70px; background-color: #6B6E71;"><b>+ STRA SYR</b></th>
						<th style="width: 80px; height: 70px; background-color: #6B6E71;"><b>+ CARA SYR</b></th>
						<th style="width: 80px; height: 70px; background-color: #6B6E71;"><b>+ VANIL SYR</b></th>
						<th style="width: 80px; height: 70px; background-color: #6B6E71;"><b>+ MILK SYR</b></th>
						<th style="width: 80px; height: 70px; background-color: #6B6E71;"><b>+ GREE SYR</b></th>
						<th style="width: 80px; height: 70px; background-color: #6B6E71;"><b>+ MINT SYR</b></th>
					</tr>
				</table>
			</div>
			</center>

			<!--textarea-->
			<center>
				<input type="textfield" name="ans" val="" style="width: 600px; height: 55px; margin-top: 150px; font-size: 35px;">
			</center>

			<!--button-->
			<div class="btn" style="margin-top: 100px;">
				<center>
				<table>
					<tr>
						<th><input class="btn_area" type="button" value="ADD" onClick="document.calculator.ans.value+='+'"></th>
						<th><input class="btn_area" type="button" value="DELETE" onClick="document.calculator.ans.value+='-'"></th>
						<th class="btn_area">CLEAR</th>
						<th><input class="btn_area" type="button" value="ORDER" onClick="document.calculator.ans.value=eval(document.calculator.ans.value)"></th>
					</tr>
				</table>
				</center>
			</div>
			
		</div>

	</div>

</body>
</html>

<script>
	
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