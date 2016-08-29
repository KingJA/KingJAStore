<?php
/**
 * Description: 分页工具类
 * Created by PhpStorm.
 * User: Shinelon
 * Date: 2016/8/27
 * Time: 10:40
 */

$width=80;
$height=20;
$image=imagecreatetruecolor($width,$height);//imagecreatetruecolor — 新建一个真彩色图像
$white=imagecolorallocate($image,255,255,255);//imagecolorallocate — 为一幅图像分配颜色