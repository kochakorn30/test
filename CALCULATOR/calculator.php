<!DOCTYPE html>
<html>
<head>
	<title>CALCULATOR</title>
</head>
<body style="font-size: 20px;">
	<form name="calculator" >
		<div class="container" style="background-color: #000000; width: 418px; height: 530px;">
			<table>
				<tr>
					<th colspan="4">
						<input type="textfield" name="ans" value="" style="width: 400px; height: 100px; font-size: 40px;">
					</th>
				</tr>
				<tr>
					<th>
						<input type="button" style="width: 100px; height: 100px; background-color: #A4A4A4; font-size: 40px;" value="1" onClick="document.calculator.ans.value+='1'">
					</th>
					<th>
						<input type="button" style="width: 100px; height: 100px; background-color: #A4A4A4; font-size: 40px;" value="2" onClick="document.calculator.ans.value+='2'">
					</th>
					<th>
						<input type="button" style="width: 100px; height: 100px; background-color: #A4A4A4; font-size: 40px;" value="3" onClick="document.calculator.ans.value+='3'">
					</th>
					<th>
						<input type="button" style="width: 100px; height: 100px; background-color: #A4A4A4; font-size: 40px;" value="+" onClick="document.calculator.ans.value+='+'">
					</th>
				</tr>
				<tr>
					<th>
						<input type="button" style="width: 100px; height: 100px; background-color: #A4A4A4; font-size: 40px;" value="4" onClick="document.calculator.ans.value+='4'">
					</th>
					<th>
						<input type="button" style="width: 100px; height: 100px; background-color: #A4A4A4; font-size: 40px;" value="5" onClick="document.calculator.ans.value+='5'">
					</th>
					<th>
						<input type="button" style="width: 100px; height: 100px; background-color: #A4A4A4; font-size: 40px;" value="6" onClick="document.calculator.ans.value+='6'">
					</th>
					<th>
						<input type="button" style="width: 100px; height: 100px; background-color: #A4A4A4; font-size: 40px;" value="-" onClick="document.calculator.ans.value+='-'">
					</th>
				</tr>
				<tr>
					<th>
						<input type="button" style="width: 100px; height: 100px; background-color: #A4A4A4; font-size: 40px;" value="7" onClick="document.calculator.ans.value+='7'">
					</th>
					<th>
						<input type="button" style="width: 100px; height: 100px; background-color: #A4A4A4; font-size: 40px;" value="8" onClick="document.calculator.ans.value+='8'">
					</th>
					<th>
						<input type="button" style="width: 100px; height: 100px; background-color: #A4A4A4; font-size: 40px;" value="9" onClick="document.calculator.ans.value+='9'">
					</th>
					<th>
						<input type="button" style="width: 100px; height: 100px; background-color: #A4A4A4; font-size: 40px;" value="*" onClick="document.calculator.ans.value+='*'">
					</th>
				</tr>
				<tr>
					<th>
						<input type="button" style="width: 100px; height: 100px; background-color: #A4A4A4; font-size: 40px;" value="/" onClick="document.calculator.ans.value+='/'">
					</th>
					<th>
						<input type="button" style="width: 100px; height: 100px; background-color: #A4A4A4; font-size: 40px;"value="0" onClick="document.calculator.ans.value+='0'">
					</th>
					<th>
						<input type="reset" style="width: 100px; height: 100px; background-color: #A4A4A4; font-size: 40px;" value="DEL">
					</th>
					<th>
						<input type="button" style="width: 100px; height: 100px; background-color: #A4A4A4; font-size: 40px;" value="=" onClick="document.calculator.ans.value=eval(document.calculator.ans.value)">
					</th>
				</tr>
			</table>
		</div>
	</form>
</body>
</html>