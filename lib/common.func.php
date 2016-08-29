<?php
/**
 * Description: 公用工具类
 * Created by PhpStorm.
 * User: Shinelon
 * Date: 2016/8/27
 * Time: 10:40
 */


function alertMes($mes,$url){
    echo "<script>alert('{$mes}');</script>";
    echo "<script>window.location='{$url}';</script>";
}
