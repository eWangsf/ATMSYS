<!DOCTYPE HTML>
<html>
<head>
    <title>用户登录</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../jquery-1.11.1.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/userlogin.css" />
    <script type="text/javascript" src="../js/checklogin.js"></script>
</head>



<body>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            用户登录
        </h3>
    </div>
    <div class="panel-body ">

        <form role="form" class="form-horizontal" id="loginform" method="post" action="../action/userlogin_do.php">
            <div class="form-group">
                <label for="username" class="col-xs-2 control-label">用&nbsp;户&nbsp;名：</label>
                <input type="text" class="col-xs-10 form-control" name="username" id="name" placeholder="请输入用户名">
            </div>
            <div class="form-group">
                <label for="password" class="col-xs-2 control-label">密&nbsp;码：</label>
                <input type="password" class="col-xs-10 form-control" name="password" id="password" placeholder="请输入密码" required>
            </div>
            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">请记住我
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-10">
                    <input type="button" class="btn btn-default" id="sublogin" value="&nbsp;&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;&nbsp;">
                </div>
            </div>
        </form>

        <p id="register"><a href="userregister.php">没有账号，立即注册</a></p>

    </div>
</div>

</body>
</html>
