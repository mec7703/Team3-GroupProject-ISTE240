var questionNum = 1;

function checkAns(){
    var key = document.getElementById('question').innerHTML;
    key = key.trim();
    var correctAns = quiz[key];
    var givenAns = document.getElementById('answer').value.trim();
    if(correctAns===givenAns){
        document.getElementById('correct').style.display = "block";
    }else{
        document.getElementById('reviewAns').innerHTML = "Incorrect: The correct answer is " + correctAns;
        document.getElementById('incorrect').style.display = "block";
	}
	delete quiz[key];
    
    if (questionNum != 3){
        //this was not the last question, show next button
        document.getElementById("next").style.display = "inline";
    }else{
        document.getElementById("retry").style.display = "inline";
    }
    
    //remove check answer button
    document.getElementById("checkAns").style.display = "none";
}

function next(){
    if (questionNum == 1){
        //going onto question 2
        //clear previous given answer
        document.getElementById("answer").value = "";
        //update progress bar
        document.getElementById("grid-item1").innerHTML = "";
        document.getElementById("grid-item2").innerHTML = "66%";
        document.getElementById("grid-item2").style.backgroundColor = "#e0eaf0";
        //update question counter
        questionNum = 2;
    }else if (questionNum == 2){
        //going onto question 3
        //clear previous given answer
        document.getElementById("answer").value = "";
        //update progress bar
        document.getElementById("grid-item2").innerHTML = "";
        document.getElementById("grid-item3").innerHTML = "100%";
        document.getElementById("grid-item3").style.backgroundColor = "#e0eaf0";
        //update question counter
        questionNum = 3;
    }else{
        //reached end of quiz and resets
        questionNum = 1;
        //reset?
    }
	//hide next button
	document.getElementById("next").style.display = "none";
	//hide last answer
	document.getElementById("incorrect").style.display = "none";
	document.getElementById("correct").style.display = "none";
	//fill new question
	var next = Object.keys(quiz);
	document.getElementById("question").innerHTML = next[0];
	correctAns = quiz[next[0]];
    //show check answer button
    document.getElementById("checkAns").style.display = "inline";
}

function retry(){
    //start new quiz
    /*//clear previous given answer
    document.getElementById("answer").value = "";
    //update progress bar
    document.getElementById("grid-item1").innerHTML = "";
    document.getElementById("grid-item2").innerHTML = "66%";
    document.getElementById("grid-item2").style.backgroundColor = "#e0eaf0";
    //hide next button
    document.getElementById("next").style.display = "none";
    //hide last answer
    document.getElementById("incorrect").style.display = "none";
    document.getElementById("correct").style.display = "none";
    //update question counter
    questionNum = 2;*/
}
