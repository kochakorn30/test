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
			.s_program_one {
				background-color: #FAE6D2;
				text-align: center;padding: 10px 7px;
				border: 1px solid;
				cursor: pointer;
			}
			.s_program_two {
				background-color: #FAE6D2;
				text-align: center;padding: 10px 7px;
				border: 1px solid;
				cursor: pointer;
			}
			.s_program_three {
				background-color: #FAE6D2;
				text-align: center;padding: 10px 7px;
				border: 1px solid;
				cursor: pointer;
			}
			.s_program_four {
				background-color: #FAE6D2;
				text-align: center;padding: 10px 7px;
				border: 1px solid;
				cursor: pointer;
			}
			.s_program_five {
				background-color: #FAE6D2;
				text-align: center;padding: 10px 7px;
				border: 1px solid;
				cursor: pointer;
			}
			.s_program_six {
				background-color: #FAE6D2;
				text-align: center;padding: 10px 7px;
				border: 1px solid;
				cursor: pointer;
			}
			.s_program_seven {
				background-color: #FAE6D2;
				text-align: center;padding: 10px 7px;
				border: 1px solid;
				cursor: pointer;
			}
			.s_program_eight {
				background-color: #FAE6D2;
				text-align: center;padding: 10px 7px;
				border: 1px solid;
				cursor: pointer;
			}
			.s_program_nine {
				background-color: #FAE6D2;
				text-align: center;padding: 10px 7px;
				border: 1px solid;
				cursor: pointer;
			}
			.s_program_ten {
				background-color: #FAE6D2;
				text-align: center;padding: 10px 7px;
				border: 1px solid;
				cursor: pointer;
			}
			.s_program_eleven {
				background-color: #FAE6D2;
				text-align: center;padding: 10px 7px;
				border: 1px solid;
				cursor: pointer;
			}
			.s_program_twelve {
				background-color: #FAE6D2;
				text-align: center;padding: 10px 7px;
				border: 1px solid;
				cursor: pointer;
			}
		/*deep*/
			.deep {
				background-color: #FFEDDC;
				width: 370px;
				height: 500px;
			}
			.s_detail_one {
				display: none;
			}
			.s_detail_two {
				display: none;
			}
			.s_detail_three {
				display: none;
			}
			.s_detail_four {
				display: none;
			}
			.s_detail_five {
				display: none;
			}
			.s_detail_six {
				display: none;
			}
			.s_detail_seven {
				display: none;
			}
			.s_detail_eight {
				display: none;
			}
			.s_detail_nine {
				display: none;
			}
			.s_detail_ten {
				display: none;
			}
			.s_detail_eleven {
				display: none;
			}
			.s_detail_twelve {
				display: none;
			}
			.s_detail_ {
				display: none;
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
										  	SPA
									<table>
										<tr>
										  	<td>ROOM:</td> 
										  	<td>S1</td>
										</tr>
										<tr>
										  	<td>GUEST:</td> 
										  	<td>&nbsp&nbsp <input type="number" name="guest" style="width: 50px; height: 25px; font-size: 20px;"></td>
										</tr>
										<tr>
										  	<td>NAME:</td> 
										  	<td>&nbsp&nbsp <input type="text" name="name" style="width: 200px; height: 25px; font-size: 20px;"></td>
										</tr>
									</table>
										  	<br>PROGRAM: 
									  		<table>
									  			<tr>
									  				<td>									  											  								
							  							<div class="s_program_one">S1</a></div>
									  				</td>
									  				<td>
									  					<div class="s_program_two">S2</a></div>
									  				</td>
									  				<td>
									  					<div class="s_program_three">S3</a></div>
									  				</td>
									  				<td>
									  					<div class="s_program_four">S4</a></div>
									  				</td>
									  				<td>
									  					<div class="s_program_five">S5</a></div>
									  				</td>
									  				<td>
									  					<div class="s_program_six">S6</a></div>
									  				</td>
									  			</tr>
									  			<tr>
									  				<td>
									  					<div class="s_program_seven">S7</a></div>
									  				</td>
									  				<td>
									  					<div class="s_program_eight">S8</a></div>
									  				</td>
									  				<td>
									  					<div class="s_program_nine">S9</a></div>
									  				</td>
									  				<td>
									  					<div class="s_program_ten">S10</a></div>
									  				</td>
									  				<td>
									  					<div class="s_program_eleven">S11</a></div>
									  				</td>
									  				<td>
									  					<div class="s_program_twelve">S12</a></div>
									  				</td>
									  			</tr>
									  		</table>
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
						<div class="deep">
							<!--spa detail-->
								<div class="s_detail_one">444444</div>
								<div class="s_detail_two">44vfd4</div>
								<div class="s_detail_three">4vfdsv444</div>
								<div class="s_detail_four">444fds444</div>
								<div class="s_detail_five">444efd444</div>
								<div class="s_detail_six">44444cqe4</div>
								<div class="s_detail_seven">44qedq4444</div>
								<div class="s_detail_eight">444qwq444</div>
								<div class="s_detail_nine">444ewdw444</div>
								<div class="s_detail_ten">444444</div>
								<div class="s_detail_eleven">44fwef4444</div>
								<div class="s_detail_twelve">44efw4444</div>
							<!--end spa detail-->
						</div><!--end deep-->
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
		//show spa
			$(document).ready(function() {
		 			$(".s_program_one").click(function() {
		   			$(".s_detail_one").show();
		  		});
			});
			$(document).ready(function() {
		 			$(".s_program_two").click(function() {
		   			$(".s_detail_two").show();
		  		});
			});
			$(document).ready(function() {
		 			$(".s_program_three").click(function() {
		   			$(".s_detail_three").show();
		  		});
			});
			$(document).ready(function() {
		 			$(".s_program_four").click(function() {
		   			$(".s_detail_four").show();
		  		});
			});
			$(document).ready(function() {
		 			$(".s_program_five").click(function() {
		   			$(".s_detail_five").show();
		  		});
			});
			$(document).ready(function() {
		 			$(".s_program_six").click(function() {
		   			$(".s_detail_six").show();
		  		});
			});
			$(document).ready(function() {
		 			$(".s_program_seven").click(function() {
		   			$(".s_detail_seven").show();
		  		});
			});
			$(document).ready(function() {
		 			$(".s_program_eight").click(function() {
		   			$(".s_detail_eight").show();
		  		});
			});
			$(document).ready(function() {
		 			$(".s_program_nine").click(function() {
		   			$(".s_detail_nine").show();
		  		});
			});
			$(document).ready(function() {
		 			$(".s_program_ten").click(function() {
		   			$(".s_detail_ten").show();
		  		});
			});
			$(document).ready(function() {
		 			$(".s_program_eleven").click(function() {
		   			$(".s_detail_eleven").show();
		  		});
			});
			$(document).ready(function() {
		 			$(".s_program_twelve").click(function() {
		   			$(".s_detail_twelve").show();
		  		});
			});
		//end show spa
	</script>