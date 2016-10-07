<?php
/**
 * Description:
 * Created by PhpStorm.
 * User: Shinelon
 * Date: 2016/8/28
 * Time: 23:01
 */

require_once '../include.php';
$userName = $_POST['user_name'];
$userPassword = $_POST['user_password'];
doRegister("user", $userName, $userPassword);


function doRegister($table, $userName, $userPassword)
{
    //查询是否注册过
    $sql="SELECT * FROM $table WHERE user_name='$userName'";
    $result = Db::getInstance()->connect()->query($sql);

    if ($result->num_rows > 0) {
        postJson(4,"该手机已经注册过，请更换手机号码");
       return ;
    }

    //进行注册
    $sql = "insert $table (user_name,user_password) values($userName,$userPassword)";
    $result = Db::getInstance()->connect()->query($sql);
    if ($result) {
        postJson(0,"注册成功");
    }
}

