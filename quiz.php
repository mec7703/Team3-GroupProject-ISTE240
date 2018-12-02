
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Linux</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="assets/css/proj.css" />
    
    <script src="assets/script/quiz.js"></script>
</head>
<body>
	<header><?php require "assets/inc/navbar.html"; ?></header>
    
    <?php
    $path = "./";
    require $path."../../../dbConnect.inc";

    //get quiz stuff from the database
    $stmt = "SELECT question,answer FROM quiz";
    $result = $mysqli->query($stmt);

    if(!isset($quiz) && !isset($questions)) {
    //empty array to store stuff
        $questions = array();

    //put the questions and answers in the associative array
        if ($result->num_rows > 0) {
            while ($row = $result->FETCH_ASSOC()) {
                $new_input = array($row['question'] => $row['answer']);
                $questions = array_merge($questions, $new_input);
            }
        } else {
            echo "No results found";
        }

    //empty final array
        $quiz = array();

        $i = 0;//index var for loop
        while ($i < 3) {//loop through and grab random questions and answers; num in num of questions to display
            $key = array_rand($questions);//grab key
            $value = $questions[$key];//grab value
            $new_input = array($key => $value);//make new assoc array
            $quiz = array_merge($quiz, $new_input);//merge arrays to add to final quiz array
            $i++;
        }
    }?>
    
<div class="container">
    <div class="quizbox">
        <div class = "progress">
                <div id="grid-item1">33%</div>
                <div id="grid-item2"></div>
                <div id="grid-item3"></div>     
        </div>
        <h4>Question: </h4>
        <br>
        <p id="question">
            <?php //pop a question/answer set from the array and echo question
            $value = reset($quiz);
            $key = key($quiz);
            echo $key;
            ?>
        </p>
        
		<script type="text/javascript">var quiz = <?php echo json_encode($quiz); ?></script>
		
        <div class="review">
            <h4>Your Answer</h4><br>
            <!--get input from user and add to the database-->
            <textarea id="answer" name="answer" cols="99" rows="10">
            </textarea><br>
            <button id="checkAns" onclick="checkAns()">Check Answer</button>
            <button id="next" onclick="next()" style="display: none">Next Question</button>
            <button id="retry" onclick="window.location.reload()" style="display: none">Another Quiz</button>
        </div>
        <div id="correct" style="display:none"><p class="reviewAns">Correct</p></div>
        <div id="incorrect" style="display:none">
            <p class="reviewAns">Incorrect: Answer is <?php echo $value; ?></p>
        </div>
    </div>
  
</div>

</body>
    
</html>
