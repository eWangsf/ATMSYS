$(document).ready(function(){
    $("input:button").click(function(){
        $rename = $("#username").val();
        $repwd = $("#pwd").val();
        $repwd_again = $("#pwd_again").val();
        $reemail = $("#email").val();
        $retel = $("#tel").val();
        $readdr = $("#addr").val();

        if(($rename == "") || ($rename == null))
        {
            alert("用户名不能为空");
            $("#username").select();
            $("#username").focus();
            return false;
        }
        if(($repwd == "") || ($repwd == null))
        {
            alert("密码不能为空");
            $("#pwd").select();
            $("#pwd").focus();
            return false;
        }
        if($repwd != $repwd_again)
        {
            alert("密码不一致");
            $("#pwd").select();
            $("#pwd").focus();
            return false;
        }
        if(($retel == "") || ($retel == null))
        {
            alert("联系号码不能为空");
            $("#tel").select();
            $("#tel").focus();
            return false;
        }
        if(($reemail == "") || ($reemail == null))
        {
            alert("邮箱不能为空");
            $("#email").select();
            $("#email").focus();
            return false;
        }
        if(($readdr == "") || ($readdr == null))
        {
            alert("地址不能为空");
            $("#addr").select();
            $("#addr").focus();
            return false;
        }
        else
        {
            $("#registerform").submit();
        }

    });
});

