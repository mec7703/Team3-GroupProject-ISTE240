<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Linux</title>
    
    <link rel="stylesheet" type="text/css" href="./assets/css/proj.css" />
</head>
<body>
	<header>
       <?php 
        require "assets/inc/navbar.html";
        ?>
  </header>
  <div class="parallax" id="parallax1">
        <div class="section" id="sec1">
            <div class="left">
                <div class="leftcontent" id="leftcontent1">
                    <h2 class="title">CONTACT US</h2>
                    <p>We encourage you to reach out and contact us with any questions or suggestions.</p>
                </div>
            </div>
            <div class="right">
                <!--space holder-->
            </div>
        </div>
    </div>
    <div class="section" id="sec2">
        <div class="left" id="left2">
            <div class="leftcontent" id="leftcontent2">
                <h2 class="mini">MESSAGE</h2>
                <p>OUR TEAM</p>
            </div>
        </div>
            <div class="right">
                    <div class="review">
                        <h3>SUBMIT YOUR COMMENTS HERE</h3>
                        <!--get input from user and add to the database-->
                        <form action="comments.php" method="GET">		
                            Name: <input type ="text" id="name" name="name" width="40" placeholder="Enter your name" />
                            <p>&nbsp;</p>
                            Comment: <br /> <textarea id="comemnt" name="comment" cols="99" rows="10"></textarea>
                            <p><input class = "sumbit" type = "submit" value="submit comment"/></p>	
                        </form>
                    </div>
        </div>  
    </div>
    <div class="parallax" id="parallax2">
        <!--space holder-->
    </div>
	
	<?php 
	$filename = "contact.php";
	require "assets/inc/footer.php";
	?>
	<script src="assets/script/sidemenu.js"></script>
</body>
</html>
