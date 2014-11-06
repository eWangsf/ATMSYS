<?php
require_once("../../conn/conndb.php");
session_start();
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">

    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../jquery-1.11.1.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>

    <link href="../css/personalcenter.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <div id="head">
            <h4>我的信息</h4>
        </div>
        <div id="information">
            <div id="name">
                <label for="uname">用户姓名：</label>
                <p>
                   <?
                   $uname = $_SESSION['user'];
                   echo "$uname";
                   ?>
                </p>
            </div>
            <div id="sex">
                <label for="usex">性别：</label>
                <p>
                    <?
                    $usex = $_SESSION['sex'];
                    echo "$usex";
                    ?>
                </p>
            </div>
            <div id="mobile">
                <label for="umobile">电话：</label>
                <p>
                    <?
                    $umobile = $_SESSION['mobile'];
                    echo "$umobile";
                    ?>
                </p>
            </div>
            <div id="email">
                <label for="uemail">邮箱：</label>
                <p>
                    <?
                    $uemail = $_SESSION['email'];
                    echo "$uemail";
                    ?>
                </p>
            </div>
        </div>

    </div>
</body>
</html>