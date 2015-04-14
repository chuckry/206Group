<!-- WU WANG -->
<!DOCTYPE html>
<?php $currentPage = basename(__FILE__); ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" type="text/css" href="default.css"> -->
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="navStyle.css">
	<link rel="stylesheet" type="text/css" href="aboutStyle.css">
</head>
<header>
	<title>Home</title>
</header>
<body>
<!-- 	<img src='A2day.jpg' id ='day' alt='Ann Arbor Daytime'/>
	<img src ='A2night.jpg' id ='night' alt='Ann Arbor Nighttime'/> -->
	<div class='video'>
		<video src="timelapse.mp4" autoplay="true" loop="true" muted="true"/>
	</div>

<div class ='head'>
	<h1>ANN ARBOR SOCIAL SCENE</h1>
</div>

<!--     <nav id="navBar">
        <a href="about.php" class="navLink"> 
            <div
            id = 'current'	class="button"> HOME </div> 
        </a>
        <a href="restaurants.php" class="navLink"> 
            <div 
                            class="button"> EATS </div> 
        </a>
        <a href="bar.php" class="navLink"> 
            <div 
                            class="button"> BARS </div>
        </a>
        <a href="sports.php" class="navLink"> 
            <div class="button"> SPORTS </div> 
        </a>
        <a href="form2.php" class="navLink"> 
            <div 
                            class="button"> SURVEY </div>
        </a>
    </nav> -->

<section id='navbar'>
<?php include ('header.php'); ?>
</section>

<script type="text/javascript">
   var currentTime = new Date()

    var hours = currentTime.getHours()   

	if (hours > 5 && hours <= 18){
        document.getElementsByClassName.style.backgroundImage="url('kerryd.jpg')";
   } 
    else if (hours > 18 && hours <= 5) {
		document.body.style.backgroundImage="url('night.jpg')";
	}

</script>

	<section class='one'>
		<div class='content'>
		<h2>History of Ann Arbor</h2>
		<p>Ann Arbor was founded in 1824, and named after the wives of the village's founders and the strands of Bur Oak trees.
		The University of Michigan's main campus moved to Ann Arbor from Detroit in 1837, and became a primary contributor to the city's growth.
		During the 1960s-1970s, Ann Arbor became known for leftist political activism and served as a hub for the civil-rights movement and anti-Vietnam War movement. Today, Ann Arbor is home to over 43,000 Wolverines, who recieve a world-renowned education, and enjoy a social scene with the best bars, restaurants, and sporting events.</p>
		</div>
<!-- 		<div class='content'><p><img src="history.jpg" alt="Ann Arbor" class='rightImg'/></p></div> -->
	</section>
<?php
	include ('footer.php');
?>
</body>
</html>