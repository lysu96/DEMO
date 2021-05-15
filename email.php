<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form id="myForm" action="tt_email.php">
		First name: <input type="text" name="fname" value="Donald"><br>
		Last name: <input type="text" name="lname" value="Duck"><br>
		<input type="submit" value="Submit">
	</form>


	<button onclick="myFunction()">Try it</button>
	<p id="demo"></p>

	<script>
		function myFunction() {
			var x = document.getElementById("myForm").action;
			document.getElementById("demo").innerHTML = x;
		}
	</script>
</body>
</html>