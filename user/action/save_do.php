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

/*根据登录的用户名找到用户ID*/
$str = "select userID from user where userName ='$uname'";
$arr = mysql_query($str);
$result = mysql_fetch_array($arr);
$uid = $result['userID'];

/*确认用户的卡*/
$str2 = "select * from account where accountID='$card' and payPassword='$ppwd'";
$arr2 = mysql_query($str2);
$result2 = mysql_fetch_array($arr2);
if(mysql_num_rows($arr2) > 0)
    /*卡号和支付一致,更新银行卡余额*/
    {
        $str3 = "update account set balance=balance+'$num' where accountID='$card'";
        $arr3 = mysql_query($str3);
        if($arr3)
            {
                echo "<script>alert('操作成功!');window.location.href='../view/save.php';</script>";
            }
        else
            {
                echo "<script>alert('操作失败!');
                window.location.href='../view/save.php';</script>";
            }
    }
else
    {
        echo "<script>alert('操作失败，请确认卡号和密码!');
        window.location.href='../view/save.php';</script>";
    }

?>