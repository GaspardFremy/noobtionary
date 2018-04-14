
// animation on alert
$('#success').delay(2000).hide('blind');


//Transit def id to modal href
$('.option').click(function(){
      var id=$(this).data('id');
      $('#modalDelete').attr('href','./index.php?action=deleteDef&id='+id);
      $('#modalEdit').attr('href','./index.php?action=editDef&id='+id);
  })

$('.upvote').click(function(){
     $(".upvote").addClass("vote1");
     $(".upvote").removeClass("upvote");
     $(".vote2").addClass("downvote");
     $(".vote2").removeClass("vote2")
});

$('.downvote').click(function(){
     $(".downvote").addClass("vote2");
      $(".downvote").removeClass("downvote");
      $(".vote1").addClass("upvote");
      $(".vote1").removeClass("vote1");
});

// AJAX call for vote
$(document).ready(function(){


    // like and unlike click
    $(".upvote, .downvote").click(function(){
        var id = this.id;   // Getting Button id
        var split_id = id.split("_");


        var text = split_id[0];
        var definitionID = split_id[1];  // postid

        // Finding click type
        var type = 1;
        if(text == "upvote"){
            type = 1;
        }else{
            type = 2;
        }

        // AJAX Request
        $.ajax({
            url: './index.php?action=vote',
            type: 'post',
            data: {definitionID:definitionID,type:type},
            dataType: 'json',
            success: function(data){

                var upvotes = data['upvotes']['ctnUp'];
                var downvotes = data['downvotes']['ctnDown'];

                $("#upvotes_"+definitionID).text(upvotes);        // setting likes
                $("#downvotes_"+definitionID).text(downvotes);    // setting unlikes

                if(type == 1){
                    $(".upvote_"+definitionID).removeClass("upvote");
                    $(".upvote_"+definitionID).addClass("vote1");

                    $(".downvote_"+definitionID).removeClass("vote2");
                    $(".downvote_"+definitionID).addClass("downvote");


                }

                if(type == 2){
                    $(".upvote_"+definitionID).removeClass("vote1");
                    $(".upvote_"+definitionID).addClass("upvote");

                    $(".downvote_"+definitionID).removeClass("downvote");
                    $(".downvote_"+definitionID).addClass("vote2");

                }
            }

        });

    });

});
