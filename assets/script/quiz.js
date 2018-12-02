
var questionNum = 1;

function checkAns(){
    var key = document.getElementById('question').innerHTML;
    var correctAns = quiz[key];
    var givenAns = document.getElementById('answer').value;
	console.log(key);
	console.log(givenAns);
	console.log(correctAns);
    if(correctAns===givenAns){
		console.log("correct");
        document.getElementById('correct').style.display = "block";
    }else{
		console.log("wrong");
        document.getElementById('incorrect').style.display = "block";
	}
	delete quiz[key];
    
//    console.log(questionNum);
    if (questionNum != 3){
        //this was not the last question, show next button
        document.getElementById("next").style.display = "inline";
    }else{
        console.log("question 3");
        document.getElementById("retry").style.display = "inline";
    }
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
	document.getElementById("correctAns").innerHTML = quiz[next[0]];
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
