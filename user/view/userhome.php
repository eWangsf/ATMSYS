<?php require_once("../../conn/conndb.php");?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>

    <title>用户主页</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../jquery-1.11.1.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>

    <link href="../css/userhome.css" rel="stylesheet" type="text/css">

</head>

<body scroll="no">

<div id="wrapper">
    <div id="header">
        <div id="left">
            <a href="userhome.php"><img src="../images/mainicon.jpg" alt="homeimg_fault"/></a>
        </div>
        <div id="middle">
            <p>E.B</p><p id="little">--my online ATM</p>
        </div>
        <div id="right">
            <a href="../view/personalcenter.php" target="infowindow">个人中心</a>
            <a href="../action/logout.php">退出</a>
        </div>
    </div>

    <div id="span"></div>

    <div id="content">
        <div id="menu">
            <div id="save">
                <a href="save.php" target="infowindow">存款</a>
            </div>
            <div id="draw">
                <a href="draw.php" target="infowindow">取款</a>
            </div>
            <div id="transfer">
                <a href="transfer.php" target="infowindow">转账</a>
            </div>
            <div id="query">
                <a href="query.php" target="infowindow">查询余额</a>
            </div>
        </div>
        <div id="infowin">
            <iframe name="infowindow" src="index.php"></iframe>
        </div>
    </div>
    <div id="footer">
        <p>@sufei.ebank</p>
    </div>
</div>

</body>
</html>

