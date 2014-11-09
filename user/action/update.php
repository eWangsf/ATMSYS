<?php
/**
 * Created by PhpStorm.
 * User: 小卫卫九块九W
 * Date: 14-11-8
 * Time: 下午9:10
 */
require_once("../../conn/conndb.php");
session_start();

$username = $_SESSION['user'];
$newname = $_POST['newname'];
$newmobile = $_POST['newmobile'];
$newemail = $_POST['newemail'];

$newpwd = $_POST['newpwd'];
$newpwd2 = $_POST['newpwd_again'];

if($newname != "")
    {
        $str = "update user set userName='$newname'where userName='$username'";
        $result = mysql_query($str);
        if($result)
            {
                echo "<script>alert('修改用户信息成功，请重新登录!');window.parent.location.href='../view/userlogin.php';</script>";
                session_destroy();
            }
    }

if($newmobile != "")
    {
        $str = "update user set userTel='$newmobile'where userName='$username'";
        $result = mysql_query($str);
        if($result)
            {
                echo "<script>alert('修改用户信息成功，请重新登录!');window.parent.location.href='../view/userlogin.php';</script>";
                session_destroy();
            }
    }

if($newemail != "")
    {
        $str = "update user set userEmail='$newemail'where userName='$username'";
        $result = mysql_query($str);
        if($result)
            {
                echo "<script>alert('修改用户信息成功，请重新登录!');window.parent.location.href='../view/userlogin.php';</script>";
                session_destroy();
            }
    }

if($newpwd != "")
    {
        $str = "update user set userPassword='$newpwd'where userName='$username'";
        $result = mysql_query($str);
        if($result)
            {
                echo "<script>alert('修改用户信息成功，请重新登录!');window.parent.location.href='../view/userlogin.php';</script>";
                session_destroy();
            }
    }
?>
