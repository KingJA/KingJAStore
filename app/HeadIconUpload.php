<?php
/**
 * Description: 头像上传
 * Created by PhpStorm.
 * User: Shinelon
 * Date: 2016/8/28
 * Time: 23:01
 */

require_once "../util/FileUploadForApp.php";
$upload = new FileUploadForApp("head_icon");
$upload->upload();




