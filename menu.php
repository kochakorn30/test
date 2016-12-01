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
            
            <div class="calcRow">
                <input type="button" class="calcButton" value="7" onclick="numInput('7')" />
                <input type="button" class="calcButton" value="8" onclick="numInput('8')" />
                <input type="button" class="calcButton" value="9" onclick="numInput('9')" />
                
            </div>
            <div class="calcRow">
                <input type="button" class="calcButton" value="4" onclick="numInput('4')" />
                <input type="button" class="calcButton" value="5" onclick="numInput('5')" />
                <input type="button" class="calcButton" value="6" onclick="numInput('6')" />
                
            </div>
            <div class="calcRow">
                <input type="button" class="calcButton" value="1" onclick="numInput('1')" />
                <input type="button" class="calcButton" value="2" onclick="numInput('2')" />
                <input type="button" class="calcButton" value="3" onclick="numInput('3')" />
                <input type="button" class="calcButton" value="x" onclick="setOperation('multiply')" />
            </div>
            <div class="calcRow">
                <input type="button" class="calcButton" value="0" onclick="numInput('0')" />
            </div>
      

		</div><!--left-side-->

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
				<input type="text" class="calcDisplay" id="display" style="width: 600px; height: 55px; margin-top: 150px; font-size: 35px;" />
			</center>

			<!--button-->
			<div class="btn" style="margin-top: 100px;">
				<center>
				<table>
					<tr>
						<th><input type="button" class="calcButton" value="ADD" onclick="setOperation('add')" style="padding: 30px 35px; background-color: #52565A; text-decoration: none; color: #FFFFFF;" /></th>
						<th><input type="button" class="calcButton" value="DELETE" onclick="setOperation('subtract')" style="padding: 30px 35px; background-color: #52565A; text-decoration: none; color: #FFFFFF;" /></th>
						<th><input type="button" class="calcButton" value="CLEAR" onclick="clearDisplay()" style="padding: 30px 35px; background-color: #52565A; text-decoration: none; color: #FFFFFF;" /></th>
						<th> <input type="button" class="calcButton" value="ORDER" onclick="calculate()" style="padding: 30px 35px; background-color: #52565A; text-decoration: none; color: #FFFFFF;" /></th>
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