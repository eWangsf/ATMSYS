$(document).ready(function(){
    $("#information #editname").hide();
    $("#information #editmobile").hide();
    $("#information #editemail").hide();

    $("#information div #aname").click(function(){
        $("#information #editname").slideToggle();
    });

    $("#information div #amobile").click(function(){
        $("#information #editmobile").slideToggle();
    });

    $("#information div #aemail").click(function(){
        $("#information #editemail").slideToggle();
    });


});