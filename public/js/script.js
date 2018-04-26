
// animation on alert
$('#success').delay(2000).hide('blind');


//Transit def id to modal href
$('.option').click(function(){
      var id=$(this).data('id');
      $('#modalDelete').attr('href','./index.php?action=deleteDef&id='+id);
      $('#modalEdit').attr('href','./index.php?action=editDef&id='+id);
  })

// AJAX voting system
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

        $.ajax({
            url: './index.php?action=vote',
            type: 'post',
            data: {definitionID:definitionID,type:type},
            dataType: 'json',
            success: function(data){

                console.log('success');
                var upvotes = data['upvotes']['ctnUp'];
                var downvotes = data['downvotes']['ctnDown'];
                var type = data['type'];

                $("#upvotes_"+definitionID).text(upvotes);        // setting likes
                $("#downvotes_"+definitionID).text(downvotes);    // setting unlikes

                if(type === "1"){
                    $(".upvote_"+definitionID).removeClass("upvote");
                    $(".upvote_"+definitionID).addClass("vote1");

                    $(".downvote_"+definitionID).removeClass("vote2");
                    $(".downvote_"+definitionID).addClass("downvote");
                }

                if(type === "2"){
                    $(".upvote_"+definitionID).removeClass("vote1");
                    $(".upvote_"+definitionID).addClass("upvote");

                    $(".downvote_"+definitionID).removeClass("downvote");
                    $(".downvote_"+definitionID).addClass("vote2");
                }
            }
        });
    });
});

// AJAX SEARCH
$(document).ready(function(){

    $("#txt_search").keyup(function(){
        var search = $(this).val();

        if(search != ""){
            $.ajax({
                url: './controller/fetchData.php',
                type: 'post',
                data: {search:search, type:1},
                dataType: 'json',
                success:function(response){
                    console.log('success');

                    var len = response.length;
                    $("#searchResult").empty();
                    if (!len) {
                        $("#searchResult").append("<div class='list-group-item list-group-item-action flex-column align-items-start'><p>no results</p></div>");
                    }
                    for( var i = 0; i<len; i++){

                        var id = response[i]['id'];
                        var title = response[i]['title'];
                        var rowctn = response[i]['rowctn'];

                        $("#searchResult").append("<a href='index.php?action=search&title="+title+"'<div class='list-group-item list-group-item-action' value='"+id+"'><h5 class='title-def'>"+title+"</h5><br><p>"+rowctn+" results</p></div></a>");
                    }
                }
            });
        }
    });
});
