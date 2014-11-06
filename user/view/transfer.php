<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../jquery-1.11.1.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>

    <link href="../css/transfer.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="wrapper">
    <div id="head">
        <p>转账</p>
    </div>
    <div id="cont">
        <form name="transferform" action="../action/transfer_do.php" method="post">
            <label for="sourcecard">&nbsp;从&nbsp;</label>
                    <input type="text" name="sourcecard" id="sourcecard" placeholder="转出的银行卡号" ><br/><br/>
            <label for="aimcard">&nbsp;到&nbsp;</label>
                    <input type="text" name="aimcard" id="aimcard" placeholder="转到的银行卡号" > <br/><br/>
            <label for="num">&nbsp;转&nbsp;账&nbsp;金&nbsp;额&nbsp;：</label>
                    <input type="text" name="num" id="num" placeholder="金额" ><br/><br/>
            <label for="transferpwd">&nbsp;支&nbsp;付&nbsp;密&nbsp;码&nbsp;：</label>
                    <input type="password" name="transferpwd" id="transferpwd" placeholder="密码" ><br/><br/>
            <input type="submit" value="确认">
        </form>
    </div>
</div>


</body>
</html>