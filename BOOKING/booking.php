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
						<ul class="tab">
  							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'London')">101</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Paris')">Paris</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'London')">101</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Paris')">Paris</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a></button></li>
						</ul>
						<ul class="tab">
  							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'London')">101</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Paris')">Paris</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'London')">101</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Paris')">Paris</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a></button></li>
						</ul>
						<ul class="tab">
  							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'London')">101</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Paris')">Paris</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'London')">101</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Paris')">Paris</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a></button></li>
						</ul>
						<ul class="tab">
  							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'London')">101</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Paris')">Paris</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'London')">101</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Paris')">Paris</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a></button></li>
						</ul>
						<ul class="tab">
  							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'London')">101</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Paris')">Paris</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'London')">101</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Paris')">Paris</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a></button></li>
						</ul>
						<ul class="tab">
  							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'London')">101</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Paris')">Paris</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'London')">101</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Paris')">Paris</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a></button></li>
						</ul>
						<ul class="tab">
  							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'London')">101</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Paris')">Paris</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'London')">101</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Paris')">Paris</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a></button></li>
							<li><button><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a></button></li>
						</ul>
					</div><!--room-->
				</td>
				<!--guest-->
				<td>
					<div class="guest">
						<div id="London" class="tabcontent">
						  <h3>London</h3>
						  <p>London is the capital city of England.</p>
						  <input type="text" name="">
						</div>

						<div id="Paris" class="tabcontent">
						  <h3>Paris</h3>
						  <p>Paris is the capital of France.</p> 
						</div>

						<div id="Tokyo" class="tabcontent">
						  <h3>Tokyo</h3>
						  <p>Tokyo is the capital of Japan.</p>
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