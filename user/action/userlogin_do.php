<?php
/**
 * Created by PhpStorm.
 * User: 小卫卫九块九W
 * Date: 14-11-2
 * Time: 上午11:33
 */
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
                echo "<script>alert('welcome! $uname');window.location.href='../view/userhome.php';</script>";
            }
        else
            {
                echo "<script>alert('hello!please register first!');window.location.href='../view/userregister.php';</script>";
            }
    }
?>