<!DOCTYPE HTML>
<html>
<head>
    <title>用户注册</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../jquery-1.11.1.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>

    <link href="../css/userregister.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../js/checkregister.js"></script>
</head>

<body>
<div class="panel panel-default" id="register">

    <div class="panel-heading">
        <center><h3 class="panel-title">用户注册</h3></center>
    </div>
    <div class="panel-body">

        <form role="form" class="form-horizontal" id="registerform" action="../action/userregister_do.php" method="post">
            <div class="form-group">
                <label for="username" class="col-xs-3 control-label">用户名：</label>
                <input type="text" name="username" id="username" class="col-xs-9 form-control" placeholder="请输入用户名">
            </div>
            <div class="form-group">
                <label for="pwd" class="col-xs-3 control-label">密码：</label>
                <input type="password" name="userpwd" id="pwd" class="col-xs-9 form-control" placeholder="请输入密码" >
            </div>
            <div class="form-group">
                <label for="pwd-again" class="col-xs-3 control-label">确认密码：</label>
                <input type="password" name="userpwd_again" id="pwd_again" class="col-xs-9 form-control" placeholder="请确认密码：">
            </div>
            <div class="form-group">
                <label for="sex" class="col-xs-3 control-label">性别：</label>
                <input type="radio" name="sex" value="male" checked>男&nbsp;&nbsp;
                <input type="radio" name="sex" value="female">女
            </div>
            <div class="form-group">
                <label for="email" class="col-xs-3 control-label">邮箱：</label>
                <input type="text" name="email" id="email" class="col-xs-9 form-control" placeholder="请输入邮箱">
            </div>
            <div class="form-group">
                <label for="mobile" class="col-xs-3 control-label">电话：</label>
                <input type="text" name="tel" id="tel" class="col-xs-9 form-control" placeholder="请输入电话号码">
            </div>
            <div class="form-group">
                <label for="mobile" class="col-xs-3 control-label">地址：</label>
                <input type="text" name="addr" id="addr" class="col-xs-9 form-control" placeholder="请输入地址">
            </div>
            <div class="form-group">
                <input type="button" class="btn btn-primary col-xs-offset-3" value="&nbsp;&nbsp;注&nbsp;&nbsp;册&nbsp;&nbsp;">
            </div>
        </form>

        <p id="login"><a href="userlogin.php">已有账号，前往登录</a></p>

    </div>
</div>
</body>
</html>
