<!DOCTYPE html>
<?php $currentPage = basename(__FILE__); ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<link href="default.css" rel="stylesheet">
	<link href="formPage.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="navStyle.css">
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<script type="text/javascript">
		function checkEmail(){
			var em=document.getElementById('em');
			var em2=document.getElementById('em2');
		 	if (em.value != em2.value){
				alert("The emails must match!");
				return false;
			}
		function checkAge(){
  			var age=document.getElementById('age');
  			if (isNaN(age)){
    			alert("Must input numbers");
    			return false;
  			}
		}
	}
	</script>
</head>
<body>
<form action="gotIt.php" method = "POST" onsubmit = "return checkEmail()", "return checkAge()">
<h1>Ann Arbor Social Scene Survey</h1>	
<?php include("header.php"); ?>
<fieldset>
	<legend></legend>
	<label>Name: <input type = "name" name = "name" id="name" value = "Brian" required/></label>
	<label>Age: <input type = "numnber" name = "age" id="age" required/></label>
	<label>Email:<input type = "email" name = "email" id = "em" required/></label>
	<label>Confirm Email:<input type = "email" name = "confirm" id = "em2" required/></label>
	
	<fieldset>
	<div id="student"><legend>Are you a student?</legend>
	<input type="radio" name="Undergrad" value="Undergrad" />Undergrad <br />
    <input type="radio" name="Graduate" value="Graduate" />Graduate<br />
    <input type="radio" name="Other" value="Other" />Other<br /> </div>
	</fieldset>
	
	<fieldset>
	<div id="site"><legend>What information do you come to the site for?</legend>
	<input type="checkbox" name="Restaurant" value="Restaurant"  />Restaurant <br />
    <input type="checkbox" name="Bars" value="Bars"/>Bars<br />
    <input type="checkbox" name="Other" value="Other"/>Other<br /></div>
	</fieldset>
	
	<fieldset>
	<div id="twitter"><legend>Do you follow us on Twitter?</legend>
	<input type="radio" name="Yes" value="Yes" />Yes <br />
    <input type="radio" name="No" value="No"/>No<br /> </div>
	</fieldset>
	<input type = "submit" value ="Send data"/>
</fieldset>

</form>	
<?php include("footer.php"); ?>
</body>
</html>