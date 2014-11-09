<?php
/**
 * Created by PhpStorm.
 * User: 小卫卫九块九W
 * Date: 14-11-2
 * Time: 上午11:12
 */
header('Content-type: text/html; charset=utf-8');

require_once("../../conn/conndb.php");

class User
{
    private $username;
    private $password;
    private $sex;
    private $email;
    private $tel;
    private $addr;
    private $paypasswod;

    public function User($name1,$password1,$sex1,$email1,$tel1,$addr1)
    {
        $this->username = $name1;
        $this->password = $password1;
        $this->sex = $sex1;
        $this->email = $email1;
        $this->tel = $tel1;
        $this->addr = $addr1;
    }

    public function SaveUser()
    {
        $str = "insert into user(userName,userPassword,userSex,userEmail,userTel,userAddr)
        values ('$this->username','$this->password','$this->sex','$this->email','$this->tel','$this->addr')";
        $sql = mysql_query($str);
        if($sql)
            {
                echo "<script>alert('注册成功，请登录！');window.location.href='../view/userlogin.php';</script>";
            }

    }
}

$gname = $_POST['username'];
$gpwd = $_POST['userpwd'];
$gpwd2 = $_POST['userpwd_again'];
$gsex = $_POST['sex'];
$gtel = $_POST['tel'];
$gemail = $_POST['email'];
$gaddr = $_POST['addr'];

if($gpwd == $gpwd2)
    {
        $auser = new User($gname,$gpwd,$gsex,$gemail,$gtel,$gaddr);
        $auser->SaveUser();
    }
else
    {
        echo "<script>alert('密码不一致，请重新输入!');window.location.href='../view/userregister.php';</script>";
    }

?>