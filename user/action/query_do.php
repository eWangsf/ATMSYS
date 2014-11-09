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

/*找到用户名对应的用户ID*/
$str = "select userID from user where userName ='$uname'";
$arr = mysql_query($str);
$result = mysql_fetch_array($arr);
$uid = $result['userID'];

/*确认卡号和密码一致且属于该用户，也就是说只有本人才能查询余额*/
$str2 = "select * from account where accountID='$card' and payPassword='$qpwd' and owner='$uid'";
$arr2 = mysql_query($str2);
$result2 = mysql_fetch_array($arr2);
if(mysql_num_rows($arr2) > 0)
    {
        $balan = $result2['balance'];
        echo "<script>alert('$balan');window.location.href='../view/query.php';</script>";
    }
else
{
    echo "<script>alert('只有本人才能查询余额，请确认卡号和密码');window.location.href='../view/query.php';</script>";
}
?>
