<!DOCTYPE html>
<html>
<head>
	 <script type="text/javascript" src="calculator.js"></script> 
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
	
	.calcButton{
		background-color: #6B6E71;
	    border: none;
	    color: white;
	    height: 70px;
	    width: 80px;
	    text-align: center;
	    text-decoration: none;
	    display: inline-block;
	    font-size: 14px;   
	    cursor: pointer;
	    font-weight: bold;
	}

	.calcButton_tool{
		background-color: #52565A;
	    border: none;
	    color: white;
	    text-align: center;
	    text-decoration: none;
	    display: inline-block;
	    font-size: 16px;   
	    cursor: pointer;
	    font-weight: bold;
	    padding: 30px 35px;
	}

	.freppe {
		width: 100px; 
		height: 100px; 
		background-color: #A6A6A9;
		border: none;
	    color: white;
	    text-align: center;
	    text-decoration: none;
	    display: inline-block;
	    font-size: 16px;   
	    cursor: pointer;
	    font-weight: bold;
	}

	.hot {
		width: 100px; 
		height: 100px; 
		background-color: #F18D8D;
		border: none;
	    color: white;
	    text-align: center;
	    text-decoration: none;
	    display: inline-block;
	    font-size: 16px;   
	    cursor: pointer;
	    font-weight: bold;
	}

	.ice {
		width: 100px; 
		height: 100px; 
		background-color: #8ED6F0;
		border: none;
	    color: white;
	    text-align: center;
	    text-decoration: none;
	    display: inline-block;
	    font-size: 16px;   
	    cursor: pointer;
	    font-weight: bold;
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

		<form class="calcForm" name="calculator">

		<!--left-side-->
		<div class="left_side" style="background-color: #7C7D7E; width: 650px; height: 560px;">				           
        
        	<!--coffee-->
			<div id="coffee" class="tabcontent" style="border: none;">
				<table>
					<tr>
						<th><input type="button" class="hot" value="AMERICANO" onclick="numInput('25')"/></th>						
						<th><input type="button" class="hot" value="DOUBLE AMERICANO" onclick="numInput('35')"/></th>
						<th><input type="button" class="hot" value="CAPPUCCINO" onclick="numInput('40')"/></th>
						<th><input type="button" class="hot" value="LATTE" onclick="numInput('40')"/></th>
						<th><input type="button" class="hot" value="MOCHA" onclick="numInput('40')"/></th>
						<th><input type="button" class="hot" value="CARAMEL MACCHIATO" onclick="numInput('40')"/></th>
					</tr>
					<tr>
						<th><input type="button" class="ice" value="AMERICANO" onclick="numInput('35')"/></th>		
						<th><input type="button" class="ice" value="ESPRESSO" onclick="numInput('40')"/></th>		
						<th><input type="button" class="ice" value="LATTE" onclick="numInput('45')"/></th>		
						<th><input type="button" class="ice" value="CAPPUCCINO" onclick="numInput('45')"/></th>		
						<th><input type="button" class="ice" value="MOCHA" onclick="numInput('45')"/></th>		
						<th><input type="button" class="ice" value="CARAMEL MACCHIATO" onclick="numInput('45')"/></th>							
					</tr>
					<tr>
						<th><input type="button" class="freppe" value="ESPRESSO" onclick="numInput('45')"/></th>
						<th><input type="button" class="freppe" value="LATTE" onclick="numInput('50')"/></th>		
						<th><input type="button" class="freppe" value="CAPPUCCINO" onclick="numInput('50')"/></th>
						<th><input type="button" class="freppe" value="MOCHA" onclick="numInput('50')"/></th>		
						<th><input type="button" class="freppe" value="CARAMEL MACCHIATO" onclick="numInput('50')"/></th>
						<th><input type="button" class="freppe" value="DARK CHOC CHOCCHIP" onclick="numInput('55')"/></th>								
					</tr>
					<tr>
						<th><input type="button" class="freppe" value="COFFEE COOKIE CHOCCHIP" onclick="numInput('50')"/></th>							
					</tr>	
				</table>
			</div><!--end coffee-->

			<!--tea-->
			<div id="tea" class="tabcontent" style="border: none;">
				<table>
					<tr>
						<th><input type="button" class="hot" value="THAI" onclick="numInput('25')"/></th>						
						<th><input type="button" class="hot" value="THAI LEMON" onclick="numInput('30')"/></th>
						<th><input type="button" class="hot" value="MILK" onclick="numInput('30')"/></th>
						<th><input type="button" class="hot" value="LIPTON" onclick="numInput('25')"/></th>
						<th><input type="button" class="hot" value="LIPTON LEMON" onclick="numInput('30')"/></th>
						<th><input type="button" class="hot" value="LIPTON MILK" onclick="numInput('30')"/></th>						
					</tr>
					<tr>
						<th><input type="button" class="hot" value="GREENTEA (NO MILK)" onclick="numInput('35')"/></th>
						<th><input type="button" class="hot" value="GREENTEA (MILK)" onclick="numInput('40')"/></th>
						<th><input type="button" class="hot" value="GREENTEA (LEAVE)" onclick="numInput('25')"/></th>
						<th><input type="button" class="hot" value="GREENTEA (RICE)" onclick="numInput('25')"/></th>
						<th><input type="button" class="hot" value="BLACK CURRENT" onclick="numInput('35')"/></th>
						<th><input type="button" class="hot" value="CHAMOMILE" onclick="numInput('35')"/></th>						
					</tr>
					<tr>
						<th><input type="button" class="hot" value="JEWLING" onclick="numInput('35')"/></th>
						<th><input type="button" class="hot" value="EARL GREY" onclick="numInput('35)"/></th>
						<th><input type="button" class="hot" value="ENGLISH BREAKFAST" onclick="numInput('35')"/></th>
						<th><input type="button" class="hot" value="STRAWBERRY" onclick="numInput('35')"/></th>
						<th><input type="button" class="ice" value="BLACK TEA" onclick="numInput('25')"/></th>		
						<th><input type="button" class="ice" value="THAI LEMON" onclick="numInput('30')"/></th>								
					</tr>
					<tr>
						<th><input type="button" class="ice" value="THAI MILK" onclick="numInput('30')"/></th>		
						<th><input type="button" class="ice" value="GREENTEA (NO MILK)" onclick="numInput('40')"/></th>		
						<th><input type="button" class="ice" value="GREENTEA (MILK)" onclick="numInput('45')"/></th>		
						<th><input type="button" class="ice" value="GREENTEA LATTE" onclick="numInput('50')"/></th>
						<th><input type="button" class="freppe" value="BLACK TEA" onclick="numInput('30')"/></th>
						<th><input type="button" class="freppe" value="THAI LEMON" onclick="numInput('35')"/></th>								
					</tr>
					<tr>
						<th><input type="button" class="freppe" value="THAI MILK" onclick="numInput('35')"/></th>
						<th><input type="button" class="freppe" value="GREENTEA LATTE" onclick="numInput('60')"/></th>						
				</table>
			</div><!--end tea-->

			<!--yogurt-->
			<div id="yogurt" class="tabcontent" style="border: none;">
				<table>
					<tr>
						<th><input type="button" class="freppe" value="MIX BERRY" onclick="numInput('50')"/></th>
						<th><input type="button" class="freppe" value="PASSION" onclick="numInput('50')"/></th>
						<th><input type="button" class="freppe" value="KIWI" onclick="numInput('50')"/></th>
						<th><input type="button" class="freppe" value="MANGO" onclick="numInput('50')"/></th>
						<th><input type="button" class="freppe" value="PEACH" onclick="numInput('50')"/></th>
						<th><input type="button" class="freppe" value="STRAW" onclick="numInput('50')"/></th>
					</tr>
					<tr>
						<th><input type="button" class="freppe" value="ORANGE" onclick="numInput('50')"/></th>
						<th><input type="button" class="freppe" value="YOGURT" onclick="numInput('45')"/></th>						
					</tr>
				</table>
			</div><!--end yogurt-->

			<!--fruity-->
			<div id="fruity" class="tabcontent" style="border: none;">
				<table>
					<tr>
						<th><input type="button" class="freppe" value="MIX BERRY" onclick="numInput('50')"/></th>
						<th><input type="button" class="freppe" value="PASSION" onclick="numInput('50')"/></th>
						<th><input type="button" class="freppe" value="KIWI" onclick="numInput('50')"/></th>
						<th><input type="button" class="freppe" value="MANGO" onclick="numInput('50')"/></th>
						<th><input type="button" class="freppe" value="PEACH" onclick="numInput('50')"/></th>
						<th><input type="button" class="freppe" value="STRAW" onclick="numInput('50')"/></th>
					</tr>
					<tr>
						<th><input type="button" class="freppe" value="ORANGE" onclick="numInput('50')"/></th>							
					</tr>
				</table>
			</div><!--end fruity-->

			<!--other-->
			<div id="other" class="tabcontent" style="border: none;">
					<table>
						<tr>
							<th><input type="button" class="hot" value="HONEY LEMON" onclick="numInput('30')"/></th>						
							<th><input type="button" class="hot" value="LEMON" onclick="numInput('30')"/></th>
							<th><input type="button" class="hot" value="MILK" onclick="numInput('25')"/></th>
							<th><input type="button" class="hot" value="CHOCOLATE" onclick="numInput('35')"/></th>
							<th><input type="button" class="ice" value="HONEY LEMON" onclick="numInput('35')"/></th>
							<th><input type="button" class="ice" value="LEMON" onclick="numInput('40')"/></th>									
						</tr>
						<tr>
							<th><input type="button" class="ice" value="MILK" onclick="numInput('30')"/></th>
							<th><input type="button" class="ice" value="COCOA" onclick="numInput('40')"/></th>
							<th><input type="button" class="ice" value="MIX BERRY SODA" onclick="numInput('50')"/></th>
							<th><input type="button" class="ice" value="RED LEMON SODA" onclick="numInput('30')"/></th>
							<th><input type="button" class="ice" value="RED MILK" onclick="numInput('30')"/></th>
							<th><input type="button" class="ice" value="GREEN LEMON SODA" onclick="numInput('30')"/></th>
						</tr>
						<tr>
							<th><input type="button" class="ice" value="GREEN MILK" onclick="numInput('30')"/></th>
							<th><input type="button" class="ice" value="STRAWBERRY SODA" onclick="numInput('45')"/></th>
							<th><input type="button" class="ice" value="WATERMELON SODA" onclick="numInput('45')"/></th>
							<th><input type="button" class="ice" value="APPLE SODA" onclick="numInput('45')"/></th>
							<th><input type="button" class="ice" value="BLUE HAWAII SODA" onclick="numInput('45')"/></th>
							<th><input type="button" class="ice" value="ORANGE SODA" onclick="numInput('45')"/></th>							
						</tr>
						<tr>
							<th><input type="button" class="freppe" value="HONEY LEMON" onclick="numInput('45')"/></th>
							<th><input type="button" class="freppe" value="LEMON" onclick="numInput('45')"/></th>
							<th><input type="button" class="freppe" value="MILK" onclick="numInput('35')"/></th>
							<th><input type="button" class="freppe" value="COCOA" onclick="numInput('50')"/></th>
							<th><input type="button" class="freppe" value="MIX BERRY" onclick="numInput('55')"/></th>
							<th><input type="button" class="freppe" value="RED LEMON SODA" onclick="numInput('35')"/></th>							
						</tr>
						<tr>
							<th><input type="button" class="freppe" value="RED MILK" onclick="numInput('35')"/></th>
							<th><input type="button" class="freppe" value="GREEN LEMON SODA" onclick="numInput('35')"/></th>
							<th><input type="button" class="freppe" value="GREEN MILK" onclick="numInput('35')"/></th>					
						</tr>
					</table>
				</div><!--end other-->

			<!--snack-->
			<div id="snack" class="tabcontent" style="border: none;">
				<table>
					<tr>						
						<th><input type="button" class="freppe" value="BROWNIE" onclick="numInput('35')"/></th>
						<th><input type="button" class="freppe" value="HAM SAND" onclick="numInput('25')"/></th>
						<th><input type="button" class="freppe" value="EGG SAND" onclick="numInput('25')"/></th>
						<th><input type="button" class="freppe" value="CHICKEN S" onclick="numInput('25')"/></th>											
					</tr>
				</table>
			</div><!--end snack-->

		</div><!--left-side-->

		<!--right-side-->
		<div class="right_side" style="background-color: #C4C5C6; width: 650px; height: 560px; float: right; margin-top: -560px;">

			<!--add-->
			<center>
			<div class="add_bar" style="background-color: none; width: 650px; height: 70px; float: right; margin-top: 5px;">
				<table>
					<tr>
						<th><input type="button" class="calcButton" value="+ WHIP" onclick="numInput('10')"/></th>						
						<th><input type="button" class="calcButton" value="+ CHOC" onclick="numInput('10')"/></th>
						<th><input type="button" class="calcButton" value="+ KIT KAT" onclick="numInput('10')"/></th>
						<th><input type="button" class="calcButton" value="+ OREO" onclick="numInput('10')"/></th>
						<th><input type="button" class="calcButton" value="+ CINNA P" onclick="numInput('10')"/></th>
						<th><input type="button" class="calcButton" value="+ COCOA P" onclick="numInput('10')"/></th>
						<th><input type="button" class="calcButton" value="+ STRAW" onclick="numInput('15')"/></th>
					</tr>
					<tr>
						<th><input type="button" class="calcButton" value="+ CHOC S" onclick="numInput('10')"/></th>						
						<th><input type="button" class="calcButton" value="+ STRA S" onclick="numInput('10')"/></th>
						<th><input type="button" class="calcButton" value="+ CARA S" onclick="numInput('10')"/></th>
						<th><input type="button" class="calcButton" value="+ VANIL S" onclick="numInput('10')"/></th>
						<th><input type="button" class="calcButton" value="+ MILK S" onclick="numInput('10')"/></th>
						<th><input type="button" class="calcButton" value="+ GREE S" onclick="numInput('10')"/></th>
						<th><input type="button" class="calcButton" value="+ MINT S" onclick="numInput('10')"/></th>						
					</tr>
				</table>
			</div>
			</center><!--end add-->

			<!--textarea-->
			<center>
				<input type="text" class="calcDisplay" id="display" style="width: 600px; height: 55px; margin-top: 150px; font-size: 35px;" />
			</center>

			<!--button-->
			<div class="btn" style="margin-top: 100px;">
				<center>
				<table>
					<tr>
						<th><input type="button" class="calcButton_tool" value="ADD" onclick="setOperation('add')"/></th>
						<th><input type="button" class="calcButton_tool" value="DELETE" onclick="setOperation('subtract')"/></th>
						<th><input type="button" class="calcButton_tool" value="CLEAR" onclick="clearDisplay()"/></th>
						<th> <input type="button" class="calcButton_tool" value="ORDER" onclick="calculate()"/></th>
					</tr>
				</table>
				</center>
			</div>
		</div>
			
		</div>

	</div><!--right-side-->

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

	//calculate
	displayNum = "";
    storedNum = "";
    operation = 0;
    queuedOperation = 0;
    calculationFinished = false;

	function clearDisplay() {
	    // Select the calculator's display
	    var display = document.getElementById("display");

	    // Clear the global variables and the display
	    displayNum = "";
	    storedNum = "";
	    operation = 0;
	    queuedOperation = 0;        
	    display.value = displayNum;

	}

	function numInput(num) {
	    // Select the calculator's display
	    var display = document.getElementById("display");

	    // Check if the display is empty and the number being pressed is 0
	    // This is to make sure the first number isn't 0 because then javascript thinks we are using OCTAL (Base eight)
	    if ((display.value == "") && num == "0") {
	    // If it is, do nothing
	      return;
	    }
	    // Check if a calculation has finished
	    // If it has replace the number in the display (the answer to the calculation with the number
	    // that was just pressed and change calculation finished back to false 
	    else if (calculationFinished == true) {
	        display.value = num;
	        calculationFinished = false;
	    }
	    // if neither of these is the case input the numbers as usual
	    else {
	      display.value += num;
	    }
	}

	function insertDecimal(dec) {
	    // Select the calculator's display
	    var display = document.getElementById("display");

	    // Loop through the current number to make sure there isn't already a decimal
	    for (i = 0; i < display.value.length; i++)
	        if (display.value.charAt(i) == '.') {
	            // If there is, do nothing
	            return;
	        }
	    // If there isn't add a decimal to the end of the displayed number
	        display.value += dec;
	}

	function setOperation(command) {
	    // Select the calculator's display
	    var display = document.getElementById("display"),
	            displayNum = display.value;
	    // eval both the numbers to remove quotes
	    // otherwise 4 + 5 will be "4" + "5" which in JS will equal 45
	            evalDisplay = eval(displayNum),
	            evalStored = eval(storedNum);

	    // Check if there is a queued operation
	    // If there is a queued operation calculate it
	    // Then set the stored number to total of the calculation       
	    if (queuedOperation == 0) {
	        storedNum = display.value;
	    }
	    else if (queuedOperation == 1) {
	        storedNum = evalStored + evalDisplay;
	    }
	    else if (queuedOperation == 2) {
	        storedNum = evalStored - evalDisplay;
	    }
	    else if (queuedOperation == 3) {
	        storedNum = evalStored * evalDisplay;
	    }

	    // Check what command was put into the calculator
	    // Then set the operation to the correct number
	    if (command == 'add') {
	        operation = 1;
	    }
	    else if (command == 'subtract') {
	        operation = 2;
	    }
	    if (command == 'multiply') {
	        operation = 3;
	    }

	    // Queue up an operation for enterint multiple  commands without hitting equals
	    // i.e. 10x4+8-9+3=
	    queuedOperation = operation;
	    // Clear the display in order to receive a new number
	    display.value = '';
	}

	function calculate() {
	    // Select the calculator's display
	    var display = document.getElementById("display");
	            displayNum = display.value;
	    var evalDisplay = eval(displayNum),
	            evalStored = eval(storedNum);

	    // Do the math
	    if (operation == 1) {
	        displayNum = evalStored + evalDisplay;
	    }
	    else if (operation == 2) {
	        displayNum = evalStored - evalDisplay;
	    }
	    else if (operation == 3) {
	        displayNum = evalStored * evalDisplay;
	    }
	    // Change display to the answer
	    display.value = displayNum;
	    if (operation != 0)
	        calculationFinished = true;
	    // Clear all the global variables
	    // Necessary in case the user wants to make a calculation using the answer
	    operation = 0;
	    queuedOperation = 0;
	    displayNum = "";
	    storedNum = "";
	}

</script>