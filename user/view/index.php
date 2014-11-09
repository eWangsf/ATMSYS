<?php
header('Content-type: text/html; charset=utf-8');
require_once("../../conn/conndb.php");
session_start();
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<body>
<p>
    欢迎您，
    <?php
    $uname = $_SESSION['user'];
    $sex = $_SESSION['sex'];
    if($sex == "male")
        {
            echo "$uname"."先生";
        }
    else
        {
            echo "$uname"."女士";
        }
    ?>
</p>
</body>
</html>