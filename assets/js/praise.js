

function praiseq(questionid){
  // alert(questionid);
  $.ajax({
    type: "POST",
    dataType: "json",
    data: {"questionid": questionid},
    url: "index.php?r=question/praiseq",
    success: function(result){
      // alert(result['1111']);
       // alert(result['questionid']);
       // alert(result['praisecount']);

       // alert("1");
       if(result["state"]){
        $("#questionpraisebtn").addClass("praisenoactive");
       }else{
        $("#questionpraisebtn").removeClass("praisenoactive");
       }
       var newpraise = document.getElementById("questionpraise");
       newpraise.innerHTML=(result['praisecount']);
       // alert(newpraise.innerHTML);
    },
    error: function(result){
          // alert(result['1111']);
          alert("error");
        }
  });
}

function praisea(answerid){
  // alert(questionid);
  $.ajax({
    type: "POST",
    dataType: "json",
    data: {"answerid": answerid},
    url: "index.php?r=question/praisea",
    success: function(result){
       var newpraise = document.getElementById("answerpraise_"+answerid);
       if(result["state"]){
        $("#answerpraisebtn"+answerid).addClass("praisenoactive");
       }else{
        $("#answerpraisebtn"+answerid).removeClass("praisenoactive");
       }
       newpraise.innerHTML=(result['praisecount']);
    },
    error: function(result){
          alert("error");
        }
  });
}
