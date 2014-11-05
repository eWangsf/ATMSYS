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

/*要可以存取的条件：
1、此次会话的用户是卡号的所有者
2.用户的支付密码是正确的
*/


$str = "select * from user where userName='$uname' and payPassword='$ppwd'";
$arr = mysql_query($str);
$result = mysql_fetch_array($arr);
if(mysql_num_rows($arr) > 0)
    /*用户名和支付密码都正确，接下来要验证银行卡的可操作性，如果是有效的则更新银行卡余额*/
    {
        /*根据sessin用户名找到该用户的id，用于确定account中卡号和owner的一致性*/
        $str2 = "select userID from user where userName ='$uname'";
        $arr2 = mysql_query($str2);
        $result2 = mysql_fetch_array($arr2);
        $uid = $result2['userID'];

        /*该用户是否拥有这张卡*/
        $str3 = "select * from account where owner='$uid' and accountID='$card'";
        $arr3 = mysql_query($str3);
        $result3 = mysql_fetch_array($arr3);
        if(mysql_num_rows($arr3) > 0)
            /*卡是这个用户的，可操作，跟新余额*/
            {
                $str4 = "update account set balance=balance+'$num' where owner='$uid' and accountID='$card'";
                $arr4 = mysql_query($str4);
                if($arr4)
                    {
                        echo "<script>alert('success save!');window.location.href='../view/save.php';</script>";
                    }
                else
                    {
                        echo "<script>alert('save failed!');
                        window.location.href='../view/save.php';</script>";
                    }
            }
        else
            {
                echo "<script>alert('the card is not yours!');
                window.location.href='../view/save.php';</script>";
        }

    }
else
    {
        echo "<script>alert('invalid update!please check your card number and confirm that you enter the correct password!');
        window.location.href='../view/save.php';</script>";
    }

?>