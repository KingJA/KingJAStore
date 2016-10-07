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
doLogin("user", $userName, $userPassword);

function doLogin($table, $userName, $userPassword)
{
    $sql = "SELECT * FROM $table WHERE user_name='$userName' AND user_password='$userPassword'";
    $result = Db::getInstance()->connect()->query($sql);
    if ($result->num_rows > 0) {
        $row=$result->fetch_assoc();
        $json=array(
            "userName"=>$row['user_name'],

        );
        postJson(0, "登录成功",$json);
    } else {
        postJson(0, "账号或密码错误");
    }
    return $result;
}



