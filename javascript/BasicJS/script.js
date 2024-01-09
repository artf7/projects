

//event after loading page 
$(window).bind("load", function() {
    alert("Page loaded");
 });


//click events 
//hint: for lunchtime
$(".LUNCH").click(function(){
    alert("To find the information about today's menu, please visit cafeteria near you.");
});
//to leave only the tabel 
$("#clear-view").click(function(){
    $("#title").hide();
    $("#description-of-course").hide();
    $("#info").hide();
});
//to show additional info
$("#return-view").click(function(){
    $("#title").show();
    $("#description-of-course").show();
    $("#info").show();s
});


//mouse events 

//mouseover and mouseout events 
    $(".PROG1700").mouseover(function(){
        $(".PROG1700").css("background-color","lightgrey");
    });
    $(".PROG1700").mouseout(function(){
        $(".PROG1700").css("background-color","rgb(193,175,225)");
    });
    $(".PROG1700").mouseover(function(){
        $(".PROG1700").css("background-color","lightgrey");
    });
    $(".PROG1700").mouseout(function(){
        $(".PROG1700").css("background-color","rgb(193,175,225)");
    });


//keypress event   (can be used instead of "Return to normal" button)

$(document).bind('keydown','i', function(){
    $("#title").show();
    $("#description-of-course").show();
    $("#info").show();
});


//extra event 
$("#title").dblclick(function(){
    $(this).css("color","red");
});
