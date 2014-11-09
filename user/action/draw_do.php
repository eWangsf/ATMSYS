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

/*找到用户名对应的用户ID*/
$str = "select userID from user where userName ='$uname'";
$arr = mysql_query($str);
$result = mysql_fetch_array($arr);
$uid = $result['userID'];

$str2 = "select * from account where accountID='$card' and payPassword='$ppwd'";
$arr2 = mysql_query($str2);
$result2 = mysql_fetch_array($arr2);
if(mysql_num_rows($arr2)>0)
    /*卡号和密码一致，查询余额是否大于取款数目，大于则更新数据库，否则提示*/
    {
        $has = $result2['balance'];
        if($has >= $num)
            {
                $str3 = "update account set balance=balance-'$num' where accountID='$card'";
                $arr3 = mysql_query($str3);
                if($arr3)
                    {
                        echo "<script>alert('操作成功，请收好现金!');window.location.href='../view/draw.php';</script>";
                    }
                else
                    {
                        echo "<script>alert('操作失败!');
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
        echo "<script>alert('操作失败，请确认卡号和密码!');
        window.location.href='../view/draw.php';</script>";
    }

?>