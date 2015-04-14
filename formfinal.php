<!-- MARISA XHEKA -->
<!DOCTYPE html>
<?php $currentPage = basename(__FILE__) ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
	<!-- <link rel="stylesheet" type="text/css" href="default.css"> -->
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<link href="formPage.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="navStyle.css">
	<script type="text/javascript">
		function checkEmailandAge(){
			var em=document.getElementById('em');
			var em2=document.getElementById('em2');
		 	if (em.value != em2.value){
				alert("The emails must match!");
				return false;
  			var age=document.getElementById('age');
  			if (isNaN(age)=false){
    			alert("Must input numbers for age");
    			return false;
  			}
		}
	}
	</script>
</head>
<body>
<form action="gotIt.php" method = "POST" onsubmit = "return checkEmailandAge()">
<h1>Ann Arbor Social Scene Survey</h1>	
<?php include("header.php"); ?>
<fieldset>
	<legend></legend>
	<label>Name: <input type = "text" name = "Name" id="name" value = "Marisa Xheka"/></label>
	<label>Age: <input type = "number" name = "Age" id="age" value="22" required/></label>
	<label>Email:<input type = "email" name = "Email" id = "em" value="marisax@umich.edu" required/></label>
	<label>Confirm Email:<input type = "email" name = "Confirm" id = "em2" value="marisax@umich.edu" required/></label>
	
	<div id="student">
		<fieldset>
		<legend>Are you a student?</legend>
		<input type="radio" title="Undergrad" name="Undergrad" value="Undergrad" />Undergrad <br />
		<input type="radio" title="Graduate" name="	Graduate" value="Graduate" />Graduate<br />
		<input type="radio" title="Other" name="Other" value="Other" />Other<br />
		</fieldset>
	</div>
	
	<div id="site">
		<fieldset>
		<legend>What information do you come to the site for?</legend>
		<input type="checkbox" title="Restaurant" name="Restaurant" value="Restaurant"  />Restaurant <br />
	    <input type="checkbox" title="Bars" name="Bars" value="Bars"/>Bars<br />
	    <input type="checkbox" title="Other" name="Other" value="Other"/>Other<br />
		</fieldset>
	</div>	
	
	<div id="twitter">
		<fieldset>
		<legend>Do you follow us on Twitter?</legend>
		<input type="radio" title="Yes" name="Yes" value="Yes" />Yes <br />
	    <input type="radio" title="No" name="No" value="No"/>No<br />
		</fieldset>
	</div>

	<input type = "submit" value ="Send data"/>

</fieldset>

</form>	
<?php include("footer.php"); ?>
</body>
</html>