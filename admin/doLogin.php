<?php
/**
 * Description:
 * Created by PhpStorm.
 * User: Shinelon
 * Date: 2016/8/28
 * Time: 23:01
 */

require_once '../include.php';
$arr=$_POST;
$insert=Db::getInstance()->insert("user",$_POST);
var_dump($insert);
if ($insert) {
    alertMes("注册成功","./admin/index.php");
    $_SESSION['userName']="GM";
}else{
    alertMes("请重新注册","login.php");
}
