<?php
/**
 * Description:
 * Created by PhpStorm.
 * User: Shinelon
 * Date: 2016/8/28
 * Time: 18:47
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录界面</title>
    <link rel="stylesheet" href="./admin/css/main.css">
    <link rel="stylesheet" href="./admin/css/reset.css">
</head>
<body>
<div class="header"><!--页头开始-->

    <div class="head_left">
        <img src="./admin/imgs/logo.png" alt="Logo" id="logo">
        <ul>
            <li class="float_a"><a href="#">登录</a></li>
            <li class="float_a"><a href="#">注册</a></li>


        </ul>


    </div>
    <ul>
        <li class="float_a"><a href="#">关于我们</a></li>
        <li class="float_a"><a href="#">关于我们</a></li>
        <li class="float_a"><a href="#">关于我们</a></li>

    </ul>
</div>


</div><!--页头结束-->

<div class="content"><!--内容区域开始-->

    <div class="login">
        <form action="app/Login.php" method="post">
            <ul>
                <li >用户名</li>
                <li ><input type="text" name="user_name" placeholder="请输入用户名"></li>
                <li >密码</li>
                <li ><input type="password" name="user_password" placeholder=""></li>
                <li ><input type="submit" value="登录" class ="common_button"></li>

            </ul>

        </form>

    </div>


</div><!--内容区域结束-->

<div class="footer"><!--页尾开始-->


</div>
<!--页尾结束-->


</body>
</html>