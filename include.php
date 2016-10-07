<?php 
header("content-type:text/html;charset=utf-8");
date_default_timezone_set("PRC");
session_start();
define("ROOT",dirname(__FILE__));
set_include_path(".".PATH_SEPARATOR.ROOT
    ."/lib".PATH_SEPARATOR.ROOT
    ."/core".PATH_SEPARATOR.ROOT
    ."/util".PATH_SEPARATOR.ROOT
    ."/configs".PATH_SEPARATOR.get_include_path());

require_once 'common.func.php';
require_once 'response.func.php';
require_once "configs.php";
require_once "Db.php";
require_once "FileUploadForHtml.php";
