<?php
/**
 * Created by PhpStorm.
 * User: 小卫卫九块九W
 * Date: 14-11-2
 * Time: 下午8:53
 */

require_once("../../conn/conndb.php");
session_start();
$uname = $_SESSION['user'];
$card = $_POST['aimcard'];
$num = $_POST['num'];
$ppwd = $_POST['savepwd'];

$str = "select * from user where userName='$uname' and payPassword='$ppwd'";
$arr = mysql_query($str);
$result = mysql_fetch_array($arr);
if(mysql_num_rows($arr)>0)
    /*用户名和支付密码都正确，接下来要找到目标银行卡，更新银行卡余额*/
    {
        $str2 = "select userID from user where userName ='$uname'";
        $arr2 = mysql_query($str2);
        $result2 = mysql_fetch_array($arr2);
        $uid = $result2['userID'];

        $str3 = "update account set balance=balance+'$num' where owner='$uid' and accountID='$card'";
        $arr3 = mysql_query($str3);
        if($arr3)
            {
                echo "<script>alert('success save!');window.location.href='../view/save.php';</script>";
            }
        else
            {
                echo "<script>alert('invalid update!please check your card number and confirm that you enter the correct password!');
                    window.location.href='../view/save.php';</script>";
            }

    }
else
    {
        echo "<script>alert('invalid update!please check your card number and confirm that you enter the correct password!');
        window.location.href='../view/save.php';</script>";
    }

?>