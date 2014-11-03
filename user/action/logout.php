<?php
/**
 * Created by PhpStorm.
 * User: 小卫卫九块九W
 * Date: 14-11-2
 * Time: 下午6:27
 */
session_start();
$uname = $_SESSION['user'];
echo "<script>alert('Bye~ $uname');window.location.href='../view/userlogin.php';</script>";
session_destroy();
?>