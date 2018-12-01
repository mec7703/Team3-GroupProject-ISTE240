$('#answer').click(function(){
    var correctAns = $('#answer').attr("name");
    var givenAns = $('#answer').val();
    if(correctAns==givenAns){
        $('#correct').show;
    }else{$('#incorrect').show;}
})