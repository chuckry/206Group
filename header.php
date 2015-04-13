<header id="navHeader">
    <nav id="navBar">
        <a href="about.php" class="navLink"> 
            <div
                <?php 
                    if ($currentPage == "about.php") {
                        echo " id=\"current\"";
                    }
                 ?>
            class="button"> HOME </div> 
        </a>
        <a href="restaurants.php" class="navLink"> 
            <div 
                <?php 
                    if ($currentPage == "restaurants.php") {
                        echo " id=\"current\"";
                    }
                 ?>
            class="button"> EATS </div> 
        </a>
        <a href="bar.php" class="navLink"> 
            <div 
                <?php 
                    if ($currentPage == "bar.php") {
                        echo " id=\"current\"";
                    }
                 ?>
            class="button"> BARS </div>
        </a>
        <a href="sports.php" class="navLink"> 
            <div 
                <?php 
                    if ($currentPage == "sports.php") {
                        echo " id=\"current\"";
                    }
                 ?>
            class="button"> SPORTS </div> 
        </a>
        <a href="form2.php" class="navLink"> 
            <div 
                <?php 
                    if ($currentPage == "form2.php") {
                        echo " id=\"current\"";
                    }
                 ?>
            class="button"> SURVEY </div>
        </a>
    </nav>
</header>