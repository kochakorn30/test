<!DOCTYPE html>
<html>
<head>
	<title>ESPANA SPA | RESERVE</title>
</head>
	<style>
		/*room*/
			.room {
				background-color: #FFEDDC;
				width: 370px;
				height: 500px;
			}
			button {
	            padding: 38px 15px; 
	            margin: 4px 2px;
	            text-decoration: none;
	            text-align: center;
	            display:inline-block;
	            color: #FFFFFF;
	            font-size: 20px;
	            font-weight: bold;
	            cursor: pointer;
	            background-color: #EDBB99;
	        }
		    button.pressed {
	            background-color: #FFFFFF;
	            border-color: #000000;
		        color: #000000;
		    }
		/*detail*/
			.detail {
				background-color: #FFD9B6;
				width: 370px;
				height: 500px;
			}
		/*deep*/
			.deep {
				background-color: #FFEDDC;
				width: 370px;
				height: 500px;
			}
		/*menu*/
			.menu {
				background-color: #FFD9B6;
				width: 370px;
				height: 500px;
			}
		/*money*/
			.money {
				background-color: #C5AC95;
				width: 1500px;
				height: 200px;
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
	<div class="container">
		<form name="calculator">
			<table>
				<tr>
					<td>
						<div class="room">
							<ul class="tab">
								<table>
									<tr>
										<td>
											<li>
				  								<button>
				  									<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 's_one')">S 1</a>
				  								</button>
		  									</li>
		  								</td>
										<td>
											<li>
				  								<button>
				  									<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 's_two')">S 2</a>
				  								</button>
		  									</li>
										</td>
										<td>
											<li>
				  								<button>
				  									<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 's_three')">S 3</a>
				  								</button>
		  									</li>
										</td>
										<td>
											<li>
				  								<button>
				  									<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 's_four')">S 4</a>
				  								</button>
		  									</li>
										</td>
									</tr>
									<tr>
										<td>
											<li>
				  								<button>
				  									<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'm_one')">M 1</a>
				  								</button>
		  									</li>
		  								</td>
										<td>
											<li>
				  								<button>
				  									<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'm_two')">M 2</a>
				  								</button>
		  									</li>
										</td>
										<td>
											<li>
				  								<button>
				  									<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'm_three')">M 3</a>
				  								</button>
		  									</li>
										</td>
										<td>
											<li>
				  								<button>
				  									<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'm_four')">M 4</a>
				  								</button>
		  									</li>
										</td>
									</tr>
									<tr>
										<td>
											<li>
				  								<button>
				  									<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 't_one')">T 1</a>
				  								</button>
		  									</li>
		  								</td>
										<td>
											<li>
				  								<button>
				  									<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 't_two')">T 2</a>
				  								</button>
		  									</li>
										</td>
										<td>
											<li>
				  								<button>
				  									<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 't_three')">T 3</a>
				  								</button>
		  									</li>
										</td>
										<td>
											<li>
				  								<button>
				  									<a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 't_four')">T 4</a>
				  								</button>
		  									</li>
										</td>
									</tr>
								</table>
							</ul><!--tab-->
						</div><!--end room-->
					</td>
					<td>
						<div class="detail">
							<!--spa-->
								<div id="s_one" class="tabcontent">
								  	s1
								</div>
								<div id="s_two" class="tabcontent">
								  	s2
								</div>
								<div id="s_three" class="tabcontent">
								  	s3
								</div>
								<div id="s_four" class="tabcontent">
								  	s4
								</div>
							<!--massage-->
								<div id="m_one" class="tabcontent">
								  	m1
								</div>
								<div id="m_two" class="tabcontent">
								  	m2
								</div>
								<div id="m_three" class="tabcontent">
								  	m3
								</div>
								<div id="m_four" class="tabcontent">
								  	m4
								</div>
							<!--treatment-->
								<div id="t_one" class="tabcontent">
								  	t1
								</div>
								<div id="t_two" class="tabcontent">
								  	t2
								</div>
								<div id="t_three" class="tabcontent">
								  	t3
								</div>
								<div id="t_four" class="tabcontent">
								  	t4
								</div>
						</div><!--end detail-->
					</td>
					<td>
						<div class="deep"></div><!--end deep-->
					</td>
					<td>
						<div class="menu"></div><!--end menu-->
					</td>
				</tr>
			</table>
						<div class="money"></div><!--end money-->
		</form><!--end calculator-->
	</div><!--end container-->
</body>
</html>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script>
		//booking
			$(() => {
	        'use strict';
		    $('button').click(function() {
		    $(this).toggleClass('pressed');
	            });
	        });
	    //end booking
	    //tab
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
		//end tab
	</script>