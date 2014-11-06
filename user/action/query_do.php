<?php
/**
 * Created by PhpStorm.
 * User: 小卫卫九块九W
 * Date: 14-11-6
 * Time: 上午7:56
 */
require_once("../../conn/conndb.php");
session_start();

$uname = $_SESSION['user'];
$card = $_POST['card'];
$qpwd = $_POST['querypwd'];

$str = "select * from user where userName='$uname' and payPassword='$qpwd'";
$arr = mysql_query($str);
$result = mysql_fetch_array($arr);
if(mysql_num_rows($arr) > 0)
    {
        $str2 = "select userID from user where userName ='$uname'";
        $arr2 = mysql_query($str2);
        $result2 = mysql_fetch_array($arr2);
        $uid = $result2['userID'];

        $str3 = "select * from account where owner='$uid' and accountID='$card'";
        $arr3 = mysql_query($str3);
        $result3 = mysql_fetch_array($arr3);
        if(mysql_num_rows($arr3) > 0)
            {
                $balan = $result3['balance'];
                echo "<script>alert('$balan');window.location.href='../view/query.php';</script>";
            }
        else
            {
                echo "<script>alert('you can not query the card');window.location.href='../view/query.php';</script>";
            }
    }
else
    {
        echo "<script>alert('invalid update!please check your card number and confirm that you enter the correct password!');
        window.location.href='../view/query.php';</script>";
    }
