<?php
/**
 * Created by PhpStorm.
 * User: 小卫卫九块九W
 * Date: 14-11-2
 * Time: 上午11:33
 */
header('Content-type: text/html; charset=utf-8');
require_once("../../conn/conndb.php");
$uname = $_POST['username'];
$upwd = $_POST['password'];
if($uname != "" && $upwd != "")
    {
        $str = "select * from user where userName='$uname' and userPassword='$upwd'";
        $arr = mysql_query($str);
        $result = mysql_fetch_array($arr);
        if(mysql_num_rows($arr)>0)
            {
                session_start();
                $_SESSION['user'] = $uname;
                $_SESSION['userpassword'] = $upwd;

                $str2 = "select * from user where userName = '$uname'";
                $arr2 = mysql_query($str2);
                $result2 = mysql_fetch_array($arr2);
                $sex = $result2['userSex'];
                $mobile = $result2['userTel'];
                $email = $result2['userEmail'];
                $address = $result2['userAddr'];

                $_SESSION['sex'] = $sex;
                $_SESSION['mobile'] = $mobile;
                $_SESSION['email'] = $email;
                $_SESSION['address'] = $address;

                echo "<script>alert('你好! $uname');window.location.href='../view/userhome.php';</script>";
            }
        else
            {
                $str2 = "select * from user where userName='$uname'";
                $arr2 = mysql_query($str2);
                $result2 = mysql_fetch_array($arr2);
                if(mysql_num_rows($arr2) > 0)
                    {
                        echo "<script>alert('密码错误！');window.location.href='../view/userlogin.php';</script>";
                    }
                else
                    {
                        echo "<script>alert('您还未注册，请先注册！');window.location.href='../view/userregister.php';</script>";
                    }
            }
    }
?>