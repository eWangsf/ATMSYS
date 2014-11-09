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

/*用户名对应的用户ID*/
$str = "select userID from user where userName ='$uname'";
$arr = mysql_query($str);
$result = mysql_fetch_array($arr);
$uid = $result['userID'];

/*确认输入的转出卡的卡号和密码一致且属于操作用户，也就是说只有本人才能转账*/
$str2 = "select * from account where accountID='$card'and payPassword='$ppwd' and owner='$uid'";
$arr2 = mysql_query($str2);
$result2 = mysql_fetch_array($arr2);
if(mysql_num_rows($arr2) > 0)
    {
        /*拥有，测试源卡的余额是否大于转出*/
        $has = $result2['balance'];

        if($has >= $num)
            {
                $str3 = "update account set balance=balance-'$num' where accountID='$card'";
                $arr3 = mysql_query($str3);
                if($arr3)
                    {
                        echo "<script>alert('更新转出卡余额成功!');</script>";
                    }
                else
                    {
                        echo "<script>alert('更新余额卡失败，请重新操作!');
                        window.location.href='../view/transfer.php';</script>";
                    }

                $str4 = "update account set balance=balance+'$num' where accountID='$card2'";
                $arr4 = mysql_query($str4);
                if($arr4)
                    {
                        echo "<script>alert('转账成功！');
                        window.location.href='../view/transfer.php';</script>";
                    }
                else
                    {
                        echo "<script>alert('转账失败，请重新操作！');
                        window.location.href='../view/transfer.php';</script>";
                    }
            }
        else
            {
                echo "<script>alert('转出卡的余额不足!');
                    window.location.href='../view/transfer.php';</script>";
            }
    }
else
    {
        echo "<script>alert('只能从自己的卡里转账，请确认卡号和密码!');
        window.location.href='../view/transfer.php';</script>";
    }

?>