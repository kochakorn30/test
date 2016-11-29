<!DOCTYPE html>
<html>
<head>
	<title>MENU</title>
</head>

<style>
	body {
		font-family: arial;
	}
	/* Style the list */
	ul.tab {
	    list-style-type: none;
	    margin: 0;
	    padding: 0;
	    overflow: hidden;
	    border: 1px solid #ccc;
	    background-color: #f1f1f1;
	}

	/* Float the list items side by side */
	ul.tab li {float: left;}

	/* Style the links inside the list items */
	ul.tab li a {
	    display: inline-block;
	    color: black;
	    text-align: center;
	    padding: 14px 16px;
	    text-decoration: none;
	    transition: 0.3s;
	    font-size: 17px;
	}

	/* Change background color of links on hover */
	ul.tab li a:hover {background-color: #ddd;}

	/* Create an active/current tablink class */
	ul.tab li a:focus, .active {background-color: #ccc;}

	/* Style the tab content */
	.tabcontent {
	    display: none;
	    padding: 6px 12px;
	    border: 1px solid #ccc;
	    border-top: none;
	}
	th {
		border-style: solid;
		font-size: 20px;
	}
</style>

<body>
<table>
	<tr>
		<!--choose-->
		<th>
			<ul class="tab">
				<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'coffee')">COFFEE</a></li>
			  	<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'tea')">TEA</a></li>
			  	<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'yogurt')">YOGURT</a></li>
			  	<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'fruity')">FRUITY</a></li>
			  	<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'other')">OTHER</a></li>
			  	<li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'snack')">SNACK</a></li>
			</ul>

			<!--coffee-->
			<div id="coffee" class="tabcontent">							  	
				<table>
				  	<tr>
				  		<th id="" style="width: 120px; height: 120px; background-color: #E23053;">AMERICANO</th>
				  		<th id="" style="width: 120px; height: 120px; background-color: #E23053;">222</th>
				  		<th id="" style="width: 120px; height: 120px; background-color: #E23053">333</th>
						<th id="" style="width: 120px; height: 120px; background-color: #E23053">444</th>
						<th id="" style="width: 120px; height: 120px; background-color: #E23053">555</th>
						<th id="" style="width: 120px; height: 120px; background-color: #E23053">666</th>
						<th id="" style="width: 120px; height: 120px; background-color: #E23053">444</th>
			  		</tr>
			  		<tr>
				  		<th id="" style="width: 120px; height: 120px; background-color: #5AD5EE;">111</th>
				  		<th id="" style="width: 120px; height: 120px;">222</th>
				  		<th id="" style="width: 120px; height: 120px;">333</th>
						<th id="" style="width: 120px; height: 120px;">444</th>
						<th id="" style="width: 120px; height: 120px;">555</th>
						<th id="" style="width: 120px; height: 120px;">666</th>
						<th id="" style="width: 120px; height: 120px;">444</th>
			  		</tr>			  	
			  		<tr>
				  		<th id="" style="width: 120px; height: 120px;">111</th>
				  		<th id="" style="width: 120px; height: 120px; background-color: #D8EE5A;">222</th>
				  		<th id="" style="width: 120px; height: 120px;">333</th>
						<th id="" style="width: 120px; height: 120px;">444</th>
						<th id="" style="width: 120px; height: 120px;">555</th>
						<th id="" style="width: 120px; height: 120px;">666</th>
						<th id="" style="width: 120px; height: 120px;">444</th>
			  		</tr>
			  		<tr>
			  			<th style="width: 120px; height: 120px;">444</th>	
			  		</tr>		  	  				  				
			 	</table>
			</div>

			<!--tea-->
			<div id="tea" class="tabcontent">
				<table>
					<tr>
						<th style="width: 120px; height: 120px; background-color: #E23053">111</th>
				  		<th style="width: 120px; height: 120px;">222</th>
				  		<th style="width: 120px; height: 120px;">333</th>
						<th style="width: 120px; height: 120px;">444</th>
						<th style="width: 120px; height: 120px;">555</th>
						<th style="width: 120px; height: 120px;">666</th>
						<th style="width: 120px; height: 120px;">444</th>	
					</tr>
					<tr>
						<th style="width: 120px; height: 120px;">111</th>
				  		<th style="width: 120px; height: 120px;">222</th>
				  		<th style="width: 120px; height: 120px;">333</th>
						<th style="width: 120px; height: 120px;">444</th>
						<th style="width: 120px; height: 120px;">555</th>
						<th style="width: 120px; height: 120px;">666</th>
						<th style="width: 120px; height: 120px;">444</th>	
					</tr>
					<tr>
						<th style="width: 120px; height: 120px;">111</th>
				  		<th style="width: 120px; height: 120px;">222</th>
				  		<th style="width: 120px; height: 120px;">333</th>
						<th style="width: 120px; height: 120px;">444</th>
						<th style="width: 120px; height: 120px; background-color: #5AD5EE;">555</th>
						<th style="width: 120px; height: 120px;">666</th>
						<th style="width: 120px; height: 120px;">444</th>	
					</tr>
					<tr>
						<th style="width: 120px; height: 120px;">111</th>
				  		<th style="width: 120px; height: 120px;">222</th>
				  		<th style="width: 120px; height: 120px; background-color: #D8EE5A;">333</th>
				  		<th style="width: 120px; height: 120px;">333</th>
				  		<th style="width: 120px; height: 120px;">333</th>
				  		<th style="width: 120px; height: 120px;">333</th>				  													
					</tr>					
				</table>
			</div>

			<!--yogurt-->
			<div id="yogurt" class="tabcontent">
				<table>
					<tr>
						<th style="width: 120px; height: 120px; background-color: #D8EE5A;">111</th>
				  		<th style="width: 120px; height: 120px;">222</th>
				  		<th style="width: 120px; height: 120px;">333</th>
						<th style="width: 120px; height: 120px;">444</th>
						<th style="width: 120px; height: 120px;">555</th>
						<th style="width: 120px; height: 120px;">666</th>
						<th style="width: 120px; height: 120px;">444</th>	
					</tr>
					<tr>						
				  		<th style="width: 120px; height: 120px;">222</th>
					</tr>
				</table>
			</div>
			<div id="fruity" class="tabcontent">
				<table>
					<tr>
						<th style="width: 120px; height: 120px; background-color: #D8EE5A;">111</th>
				  		<th style="width: 120px; height: 120px;">222</th>
				  		<th style="width: 120px; height: 120px;">333</th>
						<th style="width: 120px; height: 120px;">444</th>
						<th style="width: 120px; height: 120px;">555</th>
						<th style="width: 120px; height: 120px;">666</th>	
					</tr>
				</table>
			</div>

			<!--other-->
			<div id="other" class="tabcontent">
				<table>
					<tr>
						<th style="width: 120px; height: 120px; background-color: #E23053">111</th>
				  		<th style="width: 120px; height: 120px;">222</th>
				  		<th style="width: 120px; height: 120px;">333</th>
						<th style="width: 120px; height: 120px;">444</th>
						<th style="width: 120px; height: 120px; background-color: #5AD5EE;">555</th>
						<th style="width: 120px; height: 120px;">666</th>
						<th style="width: 120px; height: 120px;">444</th>	
					</tr>
					<tr>
						<th style="width: 120px; height: 120px;">111</th>
				  		<th style="width: 120px; height: 120px;">222</th>
				  		<th style="width: 120px; height: 120px;">333</th>
						<th style="width: 120px; height: 120px;">444</th>
						<th style="width: 120px; height: 120px;">555</th>
						<th style="width: 120px; height: 120px;">666</th>	
						<th style="width: 120px; height: 120px;">444</th>
					</tr>
					<tr>
						<th style="width: 120px; height: 120px;">111</th>
				  		<th style="width: 120px; height: 120px;">222</th>
				  		<th style="width: 120px; height: 120px;">333</th>
						<th style="width: 120px; height: 120px;">444</th>
						<th style="width: 120px; height: 120px;">555</th>
						<th style="width: 120px; height: 120px;">666</th>
						<th style="width: 120px; height: 120px;">444</th>	
					</tr>
					<tr>
						<th style="width: 120px; height: 120px;">111</th>
				  		<th style="width: 120px; height: 120px;">222</th>
				  		<th style="width: 120px; height: 120px;  background-color: #D8EE5A;">333</th>
						<th style="width: 120px; height: 120px;">444</th>
						<th style="width: 120px; height: 120px;">555</th>
						<th style="width: 120px; height: 120px;">666</th>
						<th style="width: 120px; height: 120px;">444</th>	
					</tr>
					<tr>
						<th style="width: 120px; height: 120px;">111</th>
				  		<th style="width: 120px; height: 120px;">222</th>
				  		<th style="width: 120px; height: 120px;">333</th>						
					</tr>					
				</table>
			</div>

			<!--snack-->
			<div id="snack" class="tabcontent">
				<table>
					<tr>
						<th style="width: 120px; height: 120px; background-color: #F3CD97;">111</th>
					</tr>
				</table>
			</div>
		</th>

		<!--show-->
		<th>2222</th>
	</tr>
</table>

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