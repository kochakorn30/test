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
		<form name="=calculator">
			<!--coffee-->
			<div id="coffee" class="tabcontent" style="border: none;">
				<table>
					<tr>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">HHH</th>
					</tr>
					<tr>
						<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HHH</th>
					</tr>
					<tr>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
					</tr>
					<tr>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>							
					</tr>	
				</table>
			</div>

			<!--tea-->
			<div id="tea" class="tabcontent" style="border: none;">
				<table>
					<tr>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">HHH</th>
					</tr>
					<tr>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">HHH</th>
					</tr>
					<tr>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #F18D8D;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HHH</th>
					</tr>
					<tr>
						<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
					</tr>
					<tr>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
					</tr>
				</table>
			</div>

			<!--yogurt-->
			<div id="yogurt" class="tabcontent" style="border: none;">
				<table>
					<tr>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
					</tr>
					<tr>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>						
					</tr>
				</table>
			</div>

			<!--fruity-->
			<div id="fruity" class="tabcontent" style="border: none;">
				<table>
					<tr>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
					</tr>
					<tr>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>							
					</tr>
				</table>
			</div>

			<!--other-->
			<div id="other" class="tabcontent" style="border: none;">
					<table>
						<tr>
							<th style="width: 100px; height: 100px; background-color: #F18D8D;">HHH</th>
							<th style="width: 100px; height: 100px; background-color: #F18D8D;">HHH</th>
							<th style="width: 100px; height: 100px; background-color: #F18D8D;">HHH</th>
							<th style="width: 100px; height: 100px; background-color: #F18D8D;">HHH</th>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HHH</th>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HHH</th>
						</tr>
						<tr>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HHH</th>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HHH</th>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HHH</th>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HHH</th>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HHH</th>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HHH</th>
						</tr>
						<tr>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HHH</th>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HHH</th>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HHH</th>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HHH</th>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HHH</th>
							<th style="width: 100px; height: 100px; background-color: #8ED6F0;">HHH</th>
						</tr>
						<tr>
							<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
							<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
							<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
							<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
							<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
							<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
						</tr>
						<tr>
							<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
							<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
							<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>							
						</tr>
					</table>
				</div>

			<!--snack-->
			<div id="snack" class="tabcontent" style="border: none;">
				<table>
					<tr>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>
						<th style="width: 100px; height: 100px; background-color: #A6A6A9;">HHH</th>							
					</tr>
				</table>
			</div>
		</form>
		</div>

		<!--right-side-->
		<div class="right_side" style="background-color: #C4C5C6; width: 650px; height: 560px; float: right; margin-top: -560px;">

			<!--add-->
			<div class="add_bar" style="background-color: none; width: 650px; height: 70px; float: right;">
				<div class="add_op">222</div>
				<div class="add_op">222</div>
				<div class="add_op">222</div>
				<div class="add_op">222</div>
				<div class="add_op">222</div>
				<div class="add_op">222</div>
				<div class="add_op">222</div>
				<div class="add_op">222</div>
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