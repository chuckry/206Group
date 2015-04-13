<!DOCTYPE html>
<?php $currentPage = basename(__FILE__); ?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Bars</title>
		<link href="default.css" rel="stylesheet">
		<link href="mediaquery.css" rel="stylesheet">
		<link href="bars.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="navStyle.css">
		<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
  		<script>
    		google.load('visualization', '1', { 'packages': ['map'] });
    		google.setOnLoadCallback(drawMap);
		    function drawMap() {
		      var data = google.visualization.arrayToDataTable([
		        ['Lat', 'Long', 'Name'],
		        [42.274571, -83.732823, 'World of Beer'],
		        [42.274842, -83.733316, 'Blue Leprechaun'],
		        [42.274383, -83.734444, 'Ricks American Cafe'],
		        [42.274853, -83.734907, 'Good Time Charleys'],
		        [42.278878, -83.742416, 'Scorekeepers'],
		        [42.281313, -83.751344, 'Live'],
		        [42.279086, -83.748889, 'Rush Street'],
		        [42.280158, -83.751342, 'Cavern/Millennium Club'],
		        [42.279795, -83.749740, 'Old Town Tavern'],
		        [42.280534, -83.746747, 'Mash'],
		      ]);
		    var options = {showTip: true, useMapTypeControl: true, mapType: 'normal'};
		    var map = new google.visualization.Map(document.getElementById('chart_div'));
		    map.draw(data, options);
		  };
		</script>
	</head>
	<body>
		<h1>Ann Arbor Bars</h1> 
		<?php include("header.php"); ?>

	<div class="bar">
		<header>
			<h4>World of Beer</h4>
		</header>
		<section class="address">
			<p>1300 S. University Ave, Ann Arbor MI, 48104</p>
		</section>
		<section class="content">
			<p>“There’s a world of styles, tastes, and stories - Let’s drink it in”</p>
			<p>WOB Loyalty: Like to try new beers? With a World of Beer Loyalty Card, you’ll earn a point for every different beer you buy at World of Beer. Rewards include gift cards, T-shirts, embroidered polo shirts, plaques, mugs, and even parties in your honor, with the tab on us!</p>

		</section>
		<section class="sidebar">
			<img src="wob.jpg" alt="wob">
		</section>
	</div>


	<div class="bar">
		<header>
			<h4>Blue Leprechaun</h4>
		</header>
		<section class="address">
			<p>1220 S. University Ave. #109, Ann Arbor, MI 48113</p>
		</section>
		<section class="content">
			<p>Enjoy our daily drink specials on top of our great Happy Hour deals. Not only an Irish pub, the Lep is also a great place to cheer the Wolverines on a while watching one of our 28 high-def tv’s</p>
			<p>Tuesdays: Grad Night & Trivia</p>
			<p>Wednesday: Karaoke</p>
			<p>Thursday: Ladies Night</p>

		</section>
		<section class="sidebar">
			<img src="bluelep.jpg" alt="bluelep">
		</section>
	</div>


	<div class="bar">
		<header>
			<h4>Rick's American Cafe</h4>
		</header>
		<section class="address">
			<p>611 Church St. Ann Arbor, MI 48104</p>
		</section>
		<section class="content">
			<p>“Recently named one of the top 25 college bars in America by The Daily Meal. the area’s top DJs perform up to five nights a week and Rick’s is widely considered the best venue to dance with your friends (even the ones you don’t know yet.)...Students, alumni and even faculty have made Rick’s home for years, and so should you…”</p>
			<p> Mondays: $4 You Call It drinks</p>
			<p>Tuesdays: $1 well drinks; No Cover with student I.D.</p>
			<p>Wednesdays: No cover; $2 well drinks</p>
			<p>Thursdays: No Cover for Ladies; $3 well drinks</p>

		</section>
		<section class="sidebar">
			<img src="ricks.jpg" alt="ricks">
		</section>
	</div>


	<div class="bar">
		<header>
			<h4>Good Time Charley's</h4>
		</header>
		<section class="address">
			<p>1140 S. University Ave. Ann Arbor, MI 48104</p>
		</section>
		<section class="content">
			<p>“When Good Time Charley’s sung open its door in 1979 and the fist student walked in, a campus tradition was born.</p>
			<p>Happy Hour: 2:30pm - 6:00pm</p>
			<p>Midnight Hour: 10:00pm - 2:00am</p>
			<p>Tuesdays: Karaoke Night!</p>
			<p>Wednesday: Trivia Night!</p>
		</section>
		<section class="sidebar">
			<img src="charleys.jpg" alt="charleys">
		</section>
	</div>

	<div class="bar">
		<header>
			<h4>Scorekeepers</h4>
		</header>
		<section class="address">
			<p>310 Maynard St, Ann Arbor, MI 48104</p>
		</section>
		<section class="content">
			<p>"Looking to dress up and dance the night away? Skeeps is for you! Also, the drink specials are amazing!!"
			<p>$2 tequila shots on Tuesdays</p>
			<p>$1 long island on Thursdays</p>
			<p>$6 pitchers on Saturdays</p>
		</section>
		<section class="sidebar">
			<img src="scorekeepers.jpg" alt="skeeps">
		</section>
	</div>

	<div id="chart_div"></div>

	<?php include("footer.php"); ?>
	</body> 
</html>