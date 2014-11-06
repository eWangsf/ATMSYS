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
$ppwd = $_POST['drawpwd'];

$str = "select * from user where userName='$uname' and payPassword='$ppwd'";
$arr = mysql_query($str);
$result = mysql_fetch_array($arr);
if(mysql_num_rows($arr)>0)
    /*用户名和支付密码都正确，接下来要找到目标银行卡，更新银行卡余额*/
    {
        /*根据session的用户名找到对应的用户ID*/
        $str2 = "select userID from user where userName ='$uname'";
        $arr2 = mysql_query($str2);
        $result2 = mysql_fetch_array($arr2);
        $uid = $result2['userID'];

        /*判断该用户是否有一张对应ID的卡*/
        $str3 = "select * from account where owner='$uid' and accountID='$card'";
        $arr3 = mysql_query($str3);
        $result3 = mysql_fetch_array($arr3);
        if(mysql_num_rows($arr3) > 0)
            {
                /*有这样一张卡*/
                /*判断余额是否大于输入值*/
                $str5 = "select balance from account where owner='$uid' and accountID='$card'";
                $arr5 = mysql_query($str5);
                $result5 = mysql_fetch_array($arr5);
                $has = $result5['balance'];

                if($has >= $num)
                    {
                        $str4 = "update account set balance=balance-'$num' where owner='$uid' and accountID='$card'";
                        $arr4 = mysql_query($str4);
                        if($arr4)
                            {
                                echo "<script>alert('success draw!');window.location.href='../view/draw.php';</script>";
                            }
                        else
                            {
                                echo "<script>alert('save failed!');
                        window.location.href='../view/draw.php';</script>";
                            }
                    }
                else
                    {
                        echo "<script>alert('余额不足!');
                            window.location.href='../view/draw.php';</script>";
                    }

            }
        else
            {
                echo "<script>alert('the card is not yours!');
                    window.location.href='../view/draw.php';</script>";
            }
    }
else
    {
        echo "<script>alert('invalid update!please check your card number and confirm that you enter the correct password!');
        window.location.href='../view/draw.php';</script>";
    }

?>