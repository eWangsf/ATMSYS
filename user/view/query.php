<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../jquery-1.11.1.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <link href="../css/query.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <div id="head">
            <p>查询余额</p>
        </div>
        <div id="cont">
            <form name="queryform" action="../action/query_do.php" method="post">
                <label for="card">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;卡&nbsp;号&nbsp;：</label>
                <input type="text" name="card" id="card" placeholder="银行卡号" ><br/><br/>
                <label for="querypwd">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;密&nbsp;码&nbsp;：</label>
                <input type="password" name="querypwd" id="querypwd" placeholder="密码" ><br/><br/>
                <input type="submit" value="确认">
            </form>
        </div>
    </div>
</body>
</html>