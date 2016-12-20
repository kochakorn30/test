<!DOCTYPE html>
<html>
<head>
	<title>CALENDAR</title>
</head>
	<style>
		body {
			font-family: arial;
			font-weight: bold;
		}
		.container {
			background-image: url("https://media.carphonewarehouse.com/is/image/cpw2/iphone-6GREY?$xl-standard$");
			width: 500px;
			height: 600px;
			position: fixed;
		}
		.background {
			background-color: #FFFFFF;
			width: 255px;
			height: 454px;
			margin-top: 73px;
			margin-left: 106px;
		}
		.head_bar {
			background-color: #FFFFFF;
			width: 255px;
			height: 40px;
		}
		.field {
			width: 255px;
			height: auto;
		}
		* {box-sizing:border-box;}
		ul {list-style-type: none;}
		body {font-family: Verdana,sans-serif;}
		.month {
		    padding: 70px 25px;
		    width: 100%;
		    background: #1abc9c;
		}
		.month ul {
		    margin: 0;
		    padding: 0;
		}
		.month ul li {
		    color: white;
		    font-size: 20px;
		    text-transform: uppercase;
		    letter-spacing: 3px;
		}
		.month .prev {
		    float: left;
		    padding-top: 10px;
		}
		.month .next {
		    float: right;
		    padding-top: 10px;
		}
		.weekdays {
		    margin: 0;
		    padding: 10px 0;
		    background-color: #ddd;
		}
		.weekdays li {
		    display: inline-block;
		    width: 13.6%;
		    color: #666;
		    text-align: center;
		}
		.days {
		    padding: 10px 0;
		    background: #eee;
		    margin: 0;
		}
		.days li {
		    list-style-type: none;
		    display: inline-block;
		    width: 13.6%;
		    text-align: center;
		    margin-bottom: 5px;
		    font-size:12px;
		    color: #777;
		}
		.days li .active {
		    padding: 5px;
		    background: #1abc9c;
		    color: white !important
		}
	</style>
<body>
<div class="container">
	<div class="background">
		<div class="head_bar">
			<table>
				<tr>
					<td>
						<a href="file:///C:/xampp/htdocs/test/test/SMARTPHONE/screen.php">
							<img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-arrow-back-128.png" style="width: 40px; height: 40px; margin-left: -5px; margin-top: -3px;">
						</a>
					</td>
					<td style="font-size: 38px;"><center style="margin-top: -12px; margin-left: -5px;"> | </center></td>
					<td style="font-size: 20px;"><center style="margin-bottom: 5px;">Calendar</center></td>
				</tr>
			</table>
		</div><!--end head_bar-->
		<div class="field">
			<div class="month">      
  				<ul>
				    <li class="prev">❮</li>
				    <li class="next">❯</li>
				    <li style="text-align:center">
      					August<br>
      					<span style="font-size:18px">2016</span>
   					 </li>
  				</ul>
			</div><!--end month-->
				<ul class="weekdays">
					<li>Mo</li>
					<li>Tu</li>
					<li>We</li>
					<li>Th</li>
					<li>Fr</li>
					<li>Sa</li>
					<li>Su</li>
				</ul><!--end weekdays-->
				<ul class="days">  
				  	<li>1</li>
				  	<li>2</li>
				  	<li>3</li>
				  	<li>4</li>
				  	<li>5</li>
				  	<li>6</li>
				  	<li>7</li>
				  	<li>8</li>
				  	<li>9</li>
				  	<li><span class="active">10</span></li>
				  	<li>11</li>
				  	<li>12</li>
				  	<li>13</li>
				  	<li>14</li>
				  	<li>15</li>
				  	<li>16</li>
				  	<li>17</li>
				  	<li>18</li>
				  	<li>19</li>
				  	<li>20</li>
				  	<li>21</li>
				  	<li>22</li>
				  	<li>23</li>
				  	<li>24</li>
				  	<li>25</li>
				  	<li>26</li>
				  	<li>27</li>
				  	<li>28</li>
				  	<li>29</li>
				  	<li>30</li>
				  	<li>31</li>
				</ul>
		</div><!--end field-->
	</div><!--end background-->
</div><!--end container-->
</body>
</html>