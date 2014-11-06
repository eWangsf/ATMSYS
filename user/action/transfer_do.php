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
$card = $_POST['sourcecard'];
$card2 = $_POST['aimcard'];
$num = $_POST['num'];
$ppwd = $_POST['transferpwd'];

$str = "select * from user where userName='$uname' and payPassword='$ppwd'";
$arr = mysql_query($str);
$result = mysql_fetch_array($arr);
if(mysql_num_rows($arr)>0)
    /*用户名和支付密码都正确，接下来要找到目标银行卡，更新银行卡余额*/
    {
        /*找用户名对应的ID*/
        $str2 = "select userID from user where userName ='$uname'";
        $arr2 = mysql_query($str2);
        $result2 = mysql_fetch_array($arr2);
        $uid = $result2['userID'];

        /*用户是否拥有转出的这张卡*/
        $str3 = "select * from account where owner='$uid' and accountID='$card'";
        $arr3 = mysql_query($str3);
        $result3 = mysql_fetch_array($arr3);
        if(mysql_num_rows($arr3) > 0)
            {
                /*拥有，测试源卡的余额是否大于转出*/
                $str6 = "select balance from account where owner='$uid' and accountID='$card'";
                $arr6 = mysql_query($str6);
                $result6 = mysql_fetch_array($arr6);
                $has = $result6['balance'];

                if($has >= $num)
                    {
                        $str4 = "update account set balance=balance-'$num' where owner='$uid' and accountID='$card'";
                        $arr4 = mysql_query($str4);
                        if($arr4)
                            {
                                echo "<script>alert('transfer out success!');</script>";
                            }
                        else
                            {
                                echo "<script>alert('transfer out failed!');
                                window.location.href='../view/transfer.php';</script>";
                            }

                        $str5 = "update account set balance=balance+'$num' where accountID='$card2'";
                        $arr5 = mysql_query($str5);
                        if($arr5)
                            {
                                echo "<script>alert('transfer in success');
                                window.location.href='../view/transfer.php';</script>";
                            }
                        else
                            {
                                echo "<script>alert('transfer in failed');
                                window.location.href='../view/transfer.php';</script>";
                            }
                    }

            }
        else
            {
                echo "<script>alert('the card is not yours!');
                    window.location.href='../view/transfer.php';</script>";
            }
    }
else
    {
        echo "<script>alert('invalid update!please check your card number and confirm that you enter the correct password!');
        window.location.href='../view/draw.php';</script>";
    }

?>