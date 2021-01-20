<?php
header('Content-type: application/json');
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

    $arr = array ('ipv4'=>$ip);

    echo json_encode($arr); // {"a":1,"b":2,"c":3,"d":4,"e":5}
?>