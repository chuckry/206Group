<!DOCTYPE html>
<?php $currentPage = basename(__FILE__); ?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Restaurants</title>
		<link href="default.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
		<link href="resstyle.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="navStyle.css">
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script>
		    google.load('visualization', '1', { 'packages': ['map'] });
		    google.setOnLoadCallback(drawMap);

		    function drawMap() {
		      var data = google.visualization.arrayToDataTable([
		        ['Lat', 'Long', 'Name'],
		        [42.280498, -83.746462, 'Aventura'],
		        [42.278699, -83.748851, 'Gratzi'],
		        [42.280665, -83.749586, 'Grizzly Peak'],
		        [42.280635, -83.749280, 'Cafe Zola'],
		        [42.279488, -83.750074, 'Fleetwood Diner'],
		        [42.274343, -83.734859, 'Pizza House'],
		        [42.277928, -83.741528, 'Hunter House'],
		        [42.279790, -83.740653, 'Amas Bistro'],
		        [42.282998, -83.735402, 'Angelos'],
		        [42.279474, -83.744550, 'Isalita'],
		        [42.279134, -83.748246, 'Jolly Pumpkin'],
		        [42.279152, -83.745878, 'Jeruselam Garden'],
		      ]);

		    var options = {showTip: true, useMapTypeControl: true, mapType: 'normal'};

		    var map = new google.visualization.Map(document.getElementById('chart_div'));

		    map.draw(data, options);
		  };
		</script>
	</head>
	<body>
		<h1>Ann Arbor Restaurants</h1> 
		<?php include("header.php"); ?>
		
		<h3> Best Late night food </h3>

		<div class="post">
			<header><h4>Fleedwood Diner</h4></header>
			<section class="address">
				<p>300 S Ashley St, Ann Arbor, MI 48104</p>
			</section>
			<section class="content">
				<p>A cool 24 hour retro diner tucked away from main st, their hippie hash, hash browns topped with veggies and melted feta, is a must try! </p>
			</section> 
			<section class="sidebar">
				<img src="fleetwood.jpg">
			</section>
		</div>	
		
		<div class="post">
			<header><h4>Pizza House</h4></header>
			<section class="address">
				<p>618 Church St, Ann Arbor, MI 48104</p>
			</section>
			<section class="content">
				<p>Open until 4am! Pizza house is a classic Ann Arbor joint, get the feta bread as a late night snack!</p>
			</section> 
			<section class="sidebar">
				<img src="pizzahouse.jpg">
			</section>
		</div>		
				
		<div class="post">
			<header><h4>Hunter House</h4></h4>
			<section class="address">
				<p>609 E William St, Ann Arbor, MI 48104</p>
			</section>
			<section class="content">
				<p>A newcomer to the Ann Arbor scene, this burger joint is open Thursday-Saturday until 3am. Their classic sliders are the best around and they even deliver! </p>
			</section> 
			<section class="sidebar">
				<img src="hunterhouse.jpg">
			</section>
		</div>	
				
		<div class="post">
			<header><h4>Ama's Bistro</h4></header>
			<section class="address">
				<p>215 S State St, Ann Arbor, MI 48104</p>
			</section>
			<section class="content">
				<p>Also a newcomer to Ann Arbor, this bistro is open late night on the weekend. Ama's has classic diner food with some amazing specials.</p>
			</section> 
			<section class="sidebar">
				<img src="ama.jpg">
			</section>
		</div>	
		
		<h3> Where do you go for fine dining? </h3>
		
		<div class="post">
			<header><h4>Aventura </h4></header>
			<section class="address">
				<p>216 E Washington St,  Ann Arbor, MI 48104</p>
			</section>
			<section class="content">
				<p>Aventura has some of the best food in Ann Arbor. The atmosphere isn't super fancy but you are sure to have a classy night. The food is a variety of small tapas plates. The cocktails are also great! The champagne sangria is a must try!</p>
			</section> 
			<section class="sidebar">
				<img src="aventura.jpg">
			</section>
		</div>	
				
		<div class="post">
			<header><h4>Gratzi</h4></header>
			<section class="address">
				<p>326 S Main St,  Ann Arbor, MI 48104</p>			
			</section>
			<section class="content">
				<p>An elegant Italian restaurant with a modern twist. This restaurant has amazing italian good, the tiramisu is amazing!</p>
			</section> 
			<section class="sidebar">
				<img src="gratzi.jpg">
			</section>
		</div>		
		
		<div class="post">
			<header><h4>Grizzly Peak</h4></header>
			<section class="address">
				<p>120 W Washington St, Ann Arbor, MI 48104</p>
			</section>
			<section class="content">
				<p>An interesting take on a steak house, this restuarant is great for a classy night out! </p>
			</section> 
			<section class="sidebar">
				<img src="grizzly.jpg">
			</section>
		</div>	
				
		<div class="post">
			<header><h4>Cafe Zola</h4></header>
			<section class="address">
				<p>112 W Washington St, Ann Arbor, MI 48104 </p>
			</section>
			<section class="content">
				<p>The best for a fancy brunch in Ann Arbor! The food and cocktails are amazing!</p>
			</section> 
			<section class="sidebar">
				<img src="zola.jpg">
			</section>
		</div>	

		<h3>Food you have to try before you graduate</h3>

		<div class="post">
			<header><h4>Angelo's Brunch</h4></header>
			<section class="address">
				<p>1100 Catherine St, Ann Arbor, MI 48104</p>
			</section>
			<section class="content">
				<p> If you haven't crawled out of bed on a Sunday morning to eat at Angelo's, then do you even go to this school? Try their classic breakfast items or their specials. The Huevos Rancheros are a personal favorite. Be prepared to wait for a table but don't worry its worth it.</p>
			</section> 
			<section class="sidebar">
				<img src="angelos.jpg">
			</section>
		</div>
		
		<div class="post">
			<header><h4>Guac and Margarita's at Isalita</h4></header>
			<section class="address">
				<p>314 E Liberty St, Ann Arbor, MI 48104</p>
			</section>
			<section class="content">
				<p>	Their frozen blood orange margarita's are like adult slurpies! Come to happy hour to get them half off.	</p>
			</section> 
			<section class="sidebar">
				<img src="isalita.jpg">
			</section>
		</div>
		
		<div class="post">
			<header><h4>Truffle Pizza at Jolly Pumpkin</h4></header>
			<section class="address">
				<p>311 S Main St, Ann Arbor, MI 48104</p>
			</section>
			<section class="content">
				<p>Such a cool Ann Arbor establishment! Jolly Pumpkin combines great quality food with a pub atmosphere. Try the beer sampler and the pizza's are all amazing.</p>
			</section> 
			<section class="sidebar">
				<img src="jolly.jpg">
			</section>
		</div>
		
		<div class="post">
			<header><h4>Falafel at Jeruselam Gardens</h4></header>
			<section class="address">
				<p>307 S 5th Ave, Ann Arbor, MI 48104</p>
			</section>
			<section class="content">
				<p>Jeruselam's Gardens is a mix of fresh food with classic middle eastern fares! Get their takeout on any night and the falafel is the best in Ann Arbor! </p>
			</section> 
			<section class="sidebar">
				<img src="gardens.jpg">
			</section>
		</div>
		
	    <div id="chart_div"></div>

		<?php
			include("footer.php");
		?>

	</body> 
</html>

