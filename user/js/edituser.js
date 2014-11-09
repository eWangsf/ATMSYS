$(document).ready(function(){
    $("#information #editname").hide();
    $("#information #editmobile").hide();
    $("#information #editemail").hide();
    $("#information #editpwd").hide();

    $("#information div #aname").click(function(){
        $("#information #editname").slideToggle();
    });

    $("#information div #amobile").click(function(){
        $("#information #editmobile").slideToggle();
    });

    $("#information div #aemail").click(function(){
        $("#information #editemail").slideToggle();
    });

    $("#information div #apwd").click(function(){
        $("#information #editpwd").slideToggle();
    });

    $("#information #editpwd #pbtn").click(function(){
        $newpwd = $("#information #editpwd #newpwd").val();
        $newpwd2 = $("#information #editpwd #newpwd_again").val();

        if(($newpwd == "") || ($newpwd == null))
        {
            alert("密码不能为空");
            $("#newpwd").select();
            $("#newpwd").focus();
            return false;
        }
        if($newpwd != $newpwd2)
        {
            alert("密码不一致");
            $("#newpwd").select();
            $("#newpwd").focus();
            return false;
        }
        else
        {
            $("#editpwd #xgmmform").submit();
        }
    });

});