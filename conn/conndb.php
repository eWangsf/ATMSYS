<?php
/**
 * Created by PhpStorm.
 * User: 小卫卫九块九W
 * Date: 14-11-2
 * Time: 上午10:51
 */
class conndb
{
    private $host;
    private $username;
    private $password;
    private $dbname;

    public function conndb($host1,$username1,$password1,$dbname1)
    {
        $this->host = $host1;
        $this->username = $username1;
        $this->password = $password1;
        $this->dbname = $dbname1;
    }

    public function  getConn()
    {
        $conn = mysql_connect($this->host,$this->username,$this->password);
        mysql_select_db($this->dbname,$conn);
        return $conn;
    }
}

$myconn = new conndb('localhost','root','123456','finance');
$myconn->getConn();

?>
