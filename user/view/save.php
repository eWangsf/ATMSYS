<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <link href="../css/save.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div id="wrapper">
        <div id="head">
                <p>存款</p>
        </div>
        <div id="cont">
            <form name="saveform" action="../action/save_do.php" method="post">
                存入的银行卡号：<input type="text" name="aimcard" id="aimcard" placeholder="银行卡号" ><br/><br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;存&nbsp;入&nbsp;金&nbsp;额&nbsp;：
                                    <input type="text" name="num" id="num" placeholder="金额" ><br/><br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;支&nbsp;付&nbsp;密&nbsp;码&nbsp;：
                                    <input type="password" name="savepwd" id="savepwd" placeholder="密码" ><br/><br/>
                <input type="submit" value="确认">
            </form>
        </div>
    </div>


</body>
</html>