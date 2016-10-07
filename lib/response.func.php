<?php

/**
 * 生成Json字符串
 * @param $code
 * @param string $message
 * @param $data
 * @return string
 */ 

function postJson($code, $message="", $data=array()){
    if (empty($data)) {
        $data= new stdClass();
    }
    $json=array(
        "code"=>$code,
        "message"=>$message,
        "data"=>$data
    );
    echo json_encode($json,JSON_UNESCAPED_UNICODE);

}