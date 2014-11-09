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
    <script type="text/javascript" src="../js/edituser.js"></script>
</head>
<body>
    <div id="wrapper">
        <div id="head">
            <h4>我的信息</h4>
        </div>
        <div id="information">

            <div id="name">
                <label for="uname">姓名：</label>
                <p>
                   <?
                   $uname = $_SESSION['user'];
                   echo "$uname";
                   ?>
                </p>
                <p><a href="#" id="aname">编辑>></a></p>
            </div>
            <div id="editname">
               当前用户名： <?php echo $_SESSION['user']; ?><br/>
                <form action="../action/update.php" method="post">
                    新名字：<input type="text" name="newname"><br/><br/>
                    <input type="submit" value="确定">
                </form>
            </div>

            <div id="sex">
                <label for="usex">性别：</label>
                <p>
                    <?
                    $mysex =  $_SESSION['user'];
                    if($mysex == "male")
                        echo "男";
                    else
                        echo "女";
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
                <p><a href="#" id="amobile">编辑>></a></p>
            </div>
            <div id="editmobile">
                当前电话号码： <?php echo $_SESSION['mobile']; ?><br/>
                <form action="../action/update.php" method="post">
                    新号码：<input type="text" name="newmobile"><br/>
                    <input type="submit" value="确定">
                </form>
            </div>

            <div id="email">
                <label for="uemail">邮箱：</label>
                <p>
                    <?
                    $uemail = $_SESSION['email'];
                    echo "$uemail";
                    ?>
                </p>
                <p><a href="#" id="aemail">编辑>></a></p>
            </div>
            <div id="editemail">
                当前邮箱： <?php echo $_SESSION['email']; ?><br/>
                <form action="../action/update.php" method="post">
                    新邮箱：<input type="text" name="newemail"><br/>
                    <input type="submit" value="确定">
                </form>
            </div>

        </div>

    </div>
</body>
</html>