$(document).ready(function(){
    $("#sublogin").click(function(){
        $louser = $("#name").val();
        $lopwd = $("#password").val();

        if(($louser == "") || ($louser == null))
        {
            alert("用户名不能为空");
            $("#name").select();
            $("#name").focus();
            return false;
        }
        if(($lopwd == "") || ($lopwd == null))
        {
            alert("密码不能为空");
            $("#password").select();
            $("#password").focus();
            return false;
        }
        else
        {
            $("#loginform").submit();
        }
    });
});