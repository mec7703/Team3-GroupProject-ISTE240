
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
        require "navbar.html";
        ?>
  </header>
<div class="container">
    <div class="quizbox">
        <div class = "progress">
                <div class="grid-item1">33%</div>
                <div class="grid-item2"></div>
                <div class="grid-item3"></div>     
        </div>
        <h4>Question: </h4>
        <br>
        <p><!--php echo for question--></p>
        
         <div class="review">
    <h4>Your Answer</h4>
    <!--get input from user and add to the database-->
<form action="quiz.php" method="GET">		
   <br /> <textarea id="comemnt" name="comment" cols="99" rows="10">
    </textarea>
    <p><input type = "submit" value="Check Answer"/></p>	
</form>
        </div>
    </div>
  
</div>
</body>
    
</html>
