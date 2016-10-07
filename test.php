<?php
/**
 * Description:
 * Created by PhpStorm.
 * User: Shinelon
 * Date: 2016/10/6
 * Time: 21:56
 */

postJson(0,"haha");
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