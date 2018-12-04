function validate(){
    console.log("validating");
    
    var isValid = true;
    var name = document.getElementById('name');
    var comment = document.getElementById('comment');
    
    clearInvalid();
    
    //*start validation for name*/
    var name = document.getElementById('name'); //get name input
    //check if a name was entered
    if (name.value == ""){
        invalid(name, "name");
        isValid = false; //missing First name
    } /*end validation for name*/
    
    /*start validation for name*/
    var comment = document.getElementById('comment'); //get name input
    //check if a name was entered
    if (comment.value == ""){
        invalid(comment, "comment");
        isValid = false; //missing First name
    } /*end validation for name*/
        
    return isValid;
}

function invalid(element, type){
    //make the border red
    element.style.borderColor = 'red';
    //make the background color pink
    element.style.backgroundColor = 'pink';

    //show text for warning
    if (type == "name"){
        document.getElementById("nameWarning").innerHTML = "**Warning: must enter a name**";
    }
    else if (type == "comment"){
        document.getElementById("commentWarning").innerHTML = "**Warning: must enter a comment**";
    }
}

function clearInvalid(){
    //clear name invalid 
    document.getElementById("name").style.borderColor = "black";
    document.getElementById("name").style.backgroundColor = "white";
    document.getElementById("nameWarning").innerHTML = "";

    //clear group invalid
    document.getElementById("comment").style.borderColor = "black";
    document.getElementById("comment").style.backgroundColor = "white";
    document.getElementById("commentWarning").innerHTML = "";
}