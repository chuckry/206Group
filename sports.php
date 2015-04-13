<!DOCTYPE html>
<?php $currentPage = "sports.php" ?>
<html lang="en">
<head>
	<title> Sporting Events </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="sportsStyle.css">
	<link rel="stylesheet" type="text/css" href="navStyle.css">
</head>
<body>
	<h1 id="title"> Sports in Ann Arbor </h1>
	<?php include("header.php") ?>
	<section id="one">
		<p class="leftImages">
			<img src="harbaugh.jpg" id="harbaugh"> 
		</p><!--
		
		- Include stuff about prominence of football in Ann Arbor
		- Athletes who lived in Ann Arbor and/or went to Michigan
		- "Because sports are so prevalent in AA," parks and rec.

		-->
		<p class="content"> 
			<p class="topic">Jim Harbaugh</p>
			After being with the San Francisco 49ers for four years, head coach Jim 
			Harbaugh returned to Ann Arbor to coach for his alma mater, the University 
			of Michigan. Harbaugh used to play quarterback for the Wolverines for 
			three seasons, eventually bringing Michigan to the Rose Bowl in 1987. 
			Harbaugh, replacing Brady Hoke, will be head coach for the 2015-2016 season. 
			<br>
			<br>
			This 2015-2016 football season, Michigan will be squaring off against
			both Michigan State and Ohio State on its own turf--definitely worth
			checking out if you happen to be in the city!
		</p>
	</section>

	<section id="two">
		<p class="rightImages">
			<img src="parksandrec.jpg">
		</p>
		<p class="content">
			<p class="topic">Ann Arbor Parks and Rec</p>
			Outside the University of Michigan campus, Ann Arbor boasts 30 basketball 
			courts, 33 baseball fields, 18 soccer fields, and over 24 tennis courts.
			Also offered are swim and golf lessons, canoe and kayak trips, and day
			camps. There are over 90 playgrounds available in Ann Arbor for younger 
			children to explore, and there is even an ice rink to play hockey or go 
			ice skating in! 
			<br>
			<br>
			There are plenty of activities for the older adults in Ann Arbor as well. 
			Seniors can find things to do at the Ann Arbor Senior Center. Some activities 
			include yoga, meditation, and tai chi.
		</p>
	</section>

  	<?php include("footer.php") ?>

</body>
</html>